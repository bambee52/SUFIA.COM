# 인터파크 투어 사이트에서 여행지를 입력후 검색 ->  잠시후 -> 결과
# 로그인시 PC 웹 사이트에서 처리가 어려울 경우 -> 모바일 로그인 진입 (네이버)
# 모듈 가져오기
# pip install selenium
# pip install bs4
# pip install pymysql
from selenium import webdriver as wd
from bs4 import BeautifulSoup as bs
from selenium.webdriver.common.by import By
# 명시적 대기를 위해 사용
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
#import pymysql as my
from dbmgr import DBHelper as Db

import time
#from tour import TourInfo
from plants import PlantsInfo

# 사전에 필요한 정보를 로드 => 디비 혹은 쉘, 배치 파일에서 인자로 받아서 세팅
db = Db()
main_url = 'https://greenify.kr/store/'
#keyword = '로마'
# 상품 정보를 담는 리스트 (TourInfo 리스트)
tour_list = []
plants_list = []

# 드라이버 로드
driver = wd.Chrome(executable_path='chromedriver.exe')

# 차후 -> 옵션 부여하여 (프록시, 에이전트 조작, 이미지 배제 - 텍스트만 필요한 경우)
# 크롤링을 오래돌리면 => 임시파일들이 쌓인다!!* => 템포 파일 삭제


# 사이트 접속 (get방식)
driver.get(main_url)

# 검색창을 찾아서 검색어 입력
# id : SearchGNBText
# &&&&&&&&& driver.find_element_by_id('SearchGNBText').send_keys(keyword)
# 수정할경우 => 뒤에 내용이 붙어버림 => .clear() -> send_keys('내용')
# ** t : 만나는 첫 번째 놈 찾기 / ts : 모두 찾기

# 검색 버튼 클릭
driver.find_element_by_css_selector('.c-portfolio-1-link').click() # 클래스 명이니깐 . !


# 공기정화 글자는 어떻게 넣어야하지?


for num in range(0, 5):
    try :
        a = driver.find_elements_by_class_name('c-portfolio-1-link')
        driver.get(a[num].get_attribute('href'))
        b = driver.find_element_by_class_name('c-gallery-1-item')
        c = driver.find_elements_by_class_name('c-section -space-small store_plant_care')

        print('썸네일', b.find_element_by_css_selector('img').get_attribute('src'))
        print('상품명', driver.find_element_by_css_selector('h1.u-text-hero').text)
        print('단계', driver.find_element_by_css_selector('p>span').text)
        print('색깔', driver.find_element_by_css_selector('.u-text-lead-store').text)
      # print('온도', driver.find_elements_by_css_selector('.c-section -space-small store_plant_care>.c-container>.row -gutter-medium>.col-md-4>.c-summary-1>.c-summary-1-info>.c-summary-1-description u-color-grey').text)
      
        print('설명', driver.find_element_by_css_selector('.u-text-lead-store').text)
        print('가격', driver.find_element_by_id('total_price').text)
        print("======================================================================")

        obj = PlantsInfo(
                
                driver.find_element_by_css_selector('h1.u-text-hero').text, # 상품명
                driver.find_element_by_id('total_price').text, # 가격
                driver.find_element_by_css_selector('p>span').text, # 난이도
                driver.find_element_by_css_selector('.u-text-lead-store').text,
                b.find_element_by_css_selector('img').get_attribute('src')

             #   c.driver.find_element_by_css_selector('p') # 온도
             #   b.find_element_by_css_selector('img').get_attribute('src'), # 이미지
             #   driver.find_element_by_css_selector('.u-text-lead-store').text # 설명
                )

        plants_list.append(obj)

    except Exception as e:
        print('오류 발생', e)

for plants in plants_list:
    count = 0
    exp = 0
    arr_level = plants.level.split() # 난이도 쉬움 => ['난이도', '쉬움']
    arr_color = list(plants.color) 
    arr_exp = plants.color.split()

    plants.level = arr_level[1] # 난이도

    for n in range(0,len(arr_color)): # 꽃 색깔 1개 or 2개 이상
        if arr_color[n] == "색":
            count = count + 1
    plants.color = count

    for a in range(0, len(arr_exp)): # 초보자 0, 1
        if arr_exp[a] == "초보자도":
            exp = exp + 1
    plants.exp = exp

    db.db_insertCrawlingData(
          plants.title,
          plants.price,
          plants.level,
          plants.color,
          plants.exp,
          plants.img
          )


# 종료
driver.close()
driver.quit() # 창 완전히 닫기
import sys
sys.exit() # 프로세스 끝내기