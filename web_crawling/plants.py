# 상품 정보를 담는 클래스
class PlantsInfo:
    # 멤버변수 (실제 컬럼보다는 작게 세팅했음)
    title = '' # 식물 이름
    price ='' # 가격
    level = '' # 난이도
   
 #   img = '' # 이미지
    temp = ''
    color=''
    exp = ''
    img = ''

    # 생성자
    def __init__(self, title, price, level, color, exp=None, img=None):
        self.name = title
        self.price = price
        self.level = level
        self.color = color
        self.exp = exp   
        self.img = img


