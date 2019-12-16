
<?php
    session_start();
    include "connectdb.php";
    // echo "success!!"
?>

<html>
	<head>
		<title>수피아.com</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/slide.css"/>
        <link rel="stylesheet" href="assets/css/slide2.css"/>
        <link rel="stylesheet" href="assets/css/slide3.css"/>

		<script>

		</script>


	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
              <header id="header">
                <a href="index.php" class="a"><strong>수피아</strong>.com</a>
                
              </header>

							<!-- Content -->
								<section>
									<header class="main">
										<h2></h2>
									</header>



									<?php
										if($_POST['ability'] =='하'){
											mysqli_query($con, "delete from a where exp=0");
											mysqli_close($con);
										}
										else{
											mysqli_query($con, "delete from a where exp=1");
											mysqli_close($con);
										}
									?>

									<form method="post" action= "find_plants_3.php" name="selectTemp">
                                            <p style="font-size:2.5em;"><strong>Q2. 화분을 배치할 공간의 실내 온도는 어떤가요?</strong></p>
											
                                            <div>
                                             <input type="radio" name="temp" id="temp1" value="추움"> 
                                                <label for="temp1" style="font-size:25px;"> 추운 편 (15℃ 미만) </label> </input> <br><br>

                                                
                                             <input type="radio" name="temp" id="temp2" value="서늘"> 
                                                <label for="temp2" style="font-size:25px;"> 서늘한 편 (15~20℃) </label> </input> <br><br>
                                             <input type="radio" name="temp" id="temp3" value="따뜻"> 
                                                <label for="temp3" style="font-size:25px;">   따뜻한 편 (20℃ 이상) </label> </input> <br><br>
											<p> <input type="submit" value="next"> </p>
                                    </div>
                                    <input type="image" src="talk.gif" style="float:right;">
									</form>


								</section>

						</div>
					</div>

				<!-- Sidebar -->
				<div id="sidebar">
            <div class="inner">

                <!-- Search -->
                <!-- <section id="search" class="alt">
                    <form method="post" action="#">
                        <input type="text" name="query" id="query" placeholder="Search"/>
                    </form>
                </section> -->

                <!-- 메뉴 -->
                <nav id="menu">

                    <!-- 로그인 폼 -->
                    <header class="major">
                        <a>
                            <strong>로그인</strong>
                        </a>
                    </header>

                    <!-- 로그인 처리 화면 url -->
                    <div>
                        <form action="login_ok.php" method="post">
                            <form name="login_form" action="login_ok.php" method="post">
                                <?php
                                    if(!isset($_SESSION['id'])){
                                ?>
                                <div>
                                    <label for="loginId">아이디</label>

                                    <input type="text" name="id" size="10">
                                </div>
                                <div style="margin-top: 10;">
                                    <label for="loginPw">비밀번호</label>

                                    <input type="password" name="pw" size="10">
                                </div>

                                <div>
                                    <div style="width: 100%; padding: 10px; margin-left: 15%;">
                                        <input type="submit" name="login" value="로그인">
                                        <button type="button" onclick="location.href = 'join.php' ">
                                            회원가입
                                        </button>
                                    </div>
                                </div>

                            <?php
                                    } else{ echo $_SESSION['id']; echo " 님, 안녕하세요!";
                                    ?>
                                <div id="logout">
                                    <button
                                        type="button"
                                        onclick="location.href = 'logout.php'"
                                        style="margin-top: 10;">
                                        로그아웃
                                    </button>
                                    <button
                                        type="button"
                                        onclick="location.href = 'mypage.php'"
                                        style="margin-top: 10;">
                                        마이 페이지
                                    </button>
                                </div>
                                <?php
                                    }
                                    ?>
                            </form>
                        </form>
                    </div>
                    <!-- 로그인 폼 끝-->
                </nav>

                <!-- 보기 Section -->

                <section>
                    <header class="major">
                        <a>
                            <strong>살펴보기</strong>
                        </a>
                    </header>

                    <div class="mini-posts">
                        <article>
                            <p>높은 가격순</p>
                           
                            <div id="slide3">
                                <input type="radio" name="pos3" id="pos8" checked="checked">
                                <input type="radio" name="pos3" id="pos9">
                                <input type="radio" name="pos3" id="pos10">

                                <ul>
                                    <li><img
                                        src='https://back.greenify.kr/_File/product_main_img/1563177995.jpg'
                                        width="250"></li>
                                    <li><img
                                        src='https://back.greenify.kr/_File/product_main_img/1563178091.jpg'
                                        width="250"></li>
                                    <li><img
                                        src='https://back.greenify.kr/_File/product_main_img/1563178169.jpg'
                                        width="250"></li>

                                </ul>
                                <p class="pos3">
                                    <label for="pos8"></label>
                                    <label for="pos9"></label>
                                    <label for="pos10"></label>
                                </p>
                            </div>

                        </article>

                        <article>
                            <p>낮은 가격순</p>

                            <div id="slide2">
                                <input type="radio" name="pos2" id="pos5" checked="checked">
                                <input type="radio" name="pos2" id="pos6">
                                <input type="radio" name="pos2" id="pos7">

                                <ul>
                                    <li><img src='http://gfshop.diskn.com/pp/2018/08/03/plant100/26-11.jpg' width="250"></li>
                                    <li><img
                                        src='http://petplant.godohosting.com/petplant/images/pp/2018/08/03/plant12/27-12.jpg'
                                        width="250"></li>
                                    <li><img
                                        src='http://petplant.godohosting.com/petplant/images/pp/2018/08/24/plant_ivayg/1-1.jpg'
                                        width="250"></li>

                                </ul>
                                <p class="pos2">
                                    <label for="pos5"></label>
                                    <label for="pos6"></label>
                                    <label for="pos7"></label>
                                </p>
                            </div>
                        </article>
                    </div>

                    <ul class="actions">
                        <!-- <header class="major">
                            <a>
                                <strong>전체보기</strong>
                            </a>
                        </header> -->
                        <div style="width:100%; text-align:center;">
                            <button
                                type="button"
                                onclick="location.href = 'total_plants.php' "
                                style="margin:auto; width:40%;">
                                전체 식물 보기
                            </button>
                        </div>
                    </ul>
                </section>

                <!-- 지도 Section -->
                <section>
                    <header class="major">
                        <a>
                            <strong>꽃집 찾기</strong>
                        </a>
                    </header>
                    <div style="margin-left: 15px;">
                        <p>
                            지금 내 주변에 있는 꽃집은?
                        </p>
                    </div>
                    <ul class="map_api">

                        <style>
                            .map_wrap,
                            .map_wrap * {
                                margin: 0;
                                padding: 0;
                                font-family: 'Malgun Gothic',dotum,'돋움',sans-serif;
                                font-size: 12px;
                            }
                            .map_wrap a,
                            .map_wrap a:active,
                            .map_wrap a:hover {
                                color: #000;
                                text-decoration: none;
                            }
                            .map_wrap {
                                position: relative;
                                width: 100%;
                                height: 500px;
                            }
                            #menu_wrap {
                                position: absolute;
                                top: 0;
                                left: 0;
                                bottom: 0;
                                width: 250px;
                                margin: 10px 0 30px 10px;
                                padding: 5px;
                                overflow-y: auto;
                                background: rgba(255, 255, 255, 0.7);
                                z-index: 1;
                                font-size: 12px;
                                border-radius: 10px;
                            }
                            .bg_white {
                                background: #fff;
                            }
                            #menu_wrap hr {
                                display: block;
                                height: 1px;
                                border: 0;
                                border-top: 2px solid #5F5F5F;
                                margin: 3px 0;
                            }
                            #menu_wrap .option {
                                text-align: center;
                            }
                            #menu_wrap .option p {
                                margin: 10px 0;
                            }
                            #menu_wrap .option button {
                                margin-left: 5px;
                            }
                            #placesList li {
                                list-style: none;
                            }
                            #placesList .item {
                                position: relative;
                                border-bottom: 1px solid #888;
                                overflow: hidden;
                                cursor: pointer;
                                min-height: 65px;
                            }
                            #placesList .item span {
                                display: block;
                                margin-top: 4px;
                            }
                            #placesList .item .info,
                            #placesList .item h5 {
                                text-overflow: ellipsis;
                                overflow: hidden;
                                white-space: nowrap;
                            }
                            #placesList .item .info {
                                padding: 10px 0 10px 55px;
                            }
                            #placesList .info .gray {
                                color: #8a8a8a;
                            }
                            #placesList .info .jibun {
                                padding-left: 26px;
                                background: url("http://t1.daumcdn.net/localimg/localimages/07/mapapidoc/places_jibun.png") no-repeat;
                            }
                            #placesList .info .tel {
                                color: #009900;
                            }
                            #placesList .item .markerbg {
                                float: left;
                                position: absolute;
                                width: 36px;
                                height: 37px;
                                margin: 10px 0 0 10px;
                                background: url("http://t1.daumcdn.net/localimg/localimages/07/mapapidoc/marker_number_blue.png") no-repeat;
                            }
                            #placesList .item .marker_1 {
                                background-position: 0 -10px;
                            }
                            #placesList .item .marker_2 {
                                background-position: 0 -56px;
                            }
                            #placesList .item .marker_3 {
                                background-position: 0 -102px;
                            }
                            #placesList .item .marker_4 {
                                background-position: 0 -148px;
                            }
                            #placesList .item .marker_5 {
                                background-position: 0 -194px;
                            }
                            #placesList .item .marker_6 {
                                background-position: 0 -240px;
                            }
                            #placesList .item .marker_7 {
                                background-position: 0 -286px;
                            }
                            #placesList .item .marker_8 {
                                background-position: 0 -332px;
                            }
                            #placesList .item .marker_9 {
                                background-position: 0 -378px;
                            }
                            #placesList .item .marker_10 {
                                background-position: 0 -423px;
                            }
                            #placesList .item .marker_11 {
                                background-position: 0 -470px;
                            }
                            #placesList .item .marker_12 {
                                background-position: 0 -516px;
                            }
                            #placesList .item .marker_13 {
                                background-position: 0 -562px;
                            }
                            #placesList .item .marker_14 {
                                background-position: 0 -608px;
                            }
                            #placesList .item .marker_15 {
                                background-position: 0 -654px;
                            }
                            #pagination {
                                margin: 10px auto;
                                text-align: center;
                            }
                            #pagination a {
                                display: inline-block;
                                margin-right: 10px;
                            }
                            #pagination .on {
                                font-weight: bold;
                                cursor: default;
                                color: #777;
                            }
                        </style>
                    </head>

                    <div class="map_wrap">
                        <div id="map" style="width:100%;height:100%;position:relative;overflow:hidden;"></div>

                        <div id="menu_wrap" class="bg_white" style="height: 40%;">
                            <div class="option">
                                <div>
                                    <form onsubmit="searchPlaces(); return false;">
                                        키워드 :
                                        <input type="text" value="서울 꽃집" id="keyword" size="15">
                                        <button type="submit" style="width: 70%;">Search</button>
                                    </form>
                                </div>
                            </div>
                            <hr>
                            <ul id="placesList"></ul>
                            <div id="pagination"></div>
                        </div>
                    </div>

                    <script
                        type="text/javascript"
                        src="//dapi.kakao.com/v2/maps/sdk.js?appkey=42bd0c6ab13d7d75354bc8433d6399e1&libraries=services"></script>
                    <script>
                        // 마커를 담을 배열입니다
                        var markers = [];

                        var mapContainer = document.getElementById('map'), // 지도를 표시할 div
                            mapOption = {
                                center: new kakao
                                    .maps
                                    .LatLng(37.566826, 126.9786567), // 지도의 중심좌표
                                level: 3 // 지도의 확대 레벨
                            };

                        // 지도를 생성합니다
                        var map = new kakao
                            .maps
                            .Map(mapContainer, mapOption);

                        // 장소 검색 객체를 생성합니다
                        var ps = new kakao
                            .maps
                            .services
                            .Places();

                        // 검색 결과 목록이나 마커를 클릭했을 때 장소명을 표출할 인포윈도우를 생성합니다
                        var infowindow = new kakao
                            .maps
                            .InfoWindow({zIndex: 1});

                        // 키워드로 장소를 검색합니다
                        searchPlaces();

                        // 키워드 검색을 요청하는 함수입니다
                        function searchPlaces() {

                            var keyword = document
                                .getElementById('keyword')
                                .value;

                            if (!keyword.replace(/^\s+|\s+$/g, '')) {
                                alert('키워드를 입력해주세요!');
                                return false;
                            }

                            // 장소검색 객체를 통해 키워드로 장소검색을 요청합니다
                            ps.keywordSearch(keyword, placesSearchCB);
                        }

                        // 장소검색이 완료됐을 때 호출되는 콜백함수 입니다
                        function placesSearchCB(data, status, pagination) {
                            if (status === kakao.maps.services.Status.OK) {

                                // 정상적으로 검색이 완료됐으면 검색 목록과 마커를 표출합니다
                                displayPlaces(data);

                                // 페이지 번호를 표출합니다
                                displayPagination(pagination);

                            } else if (status === kakao.maps.services.Status.ZERO_RESULT) {

                                alert('검색 결과가 존재하지 않습니다.');
                                return;

                            } else if (status === kakao.maps.services.Status.ERROR) {

                                alert('검색 결과 중 오류가 발생했습니다.');
                                return;

                            }
                        }

                        // 검색 결과 목록과 마커를 표출하는 함수입니다
                        function displayPlaces(places) {

                            var listEl = document.getElementById('placesList'),
                                menuEl = document.getElementById('menu_wrap'),
                                fragment = document.createDocumentFragment(),
                                bounds = new kakao
                                    .maps
                                    .LatLngBounds(),
                                listStr = '';

                            // 검색 결과 목록에 추가된 항목들을 제거합니다
                            removeAllChildNods(listEl);

                            // 지도에 표시되고 있는 마커를 제거합니다
                            removeMarker();

                            for (var i = 0; i < places.length; i++) {

                                // 마커를 생성하고 지도에 표시합니다
                                var placePosition = new kakao
                                        .maps
                                        .LatLng(places[i].y, places[i].x),
                                    marker = addMarker(placePosition, i),
                                    itemEl = getListItem(i, places[i]); // 검색 결과 항목 Element를 생성합니다

                                // 검색된 장소 위치를 기준으로 지도 범위를 재설정하기위해 LatLngBounds 객체에 좌표를 추가합니다
                                bounds.extend(placePosition);

                                // 마커와 검색결과 항목에 mouseover 했을때 해당 장소에 인포윈도우에 장소명을 표시합니다 mouseout 했을 때는 인포윈도우를
                                // 닫습니다
                                (function (marker, title) {
                                    kakao
                                        .maps
                                        .event
                                        .addListener(marker, 'mouseover', function () {
                                            displayInfowindow(marker, title);
                                        });

                                    kakao
                                        .maps
                                        .event
                                        .addListener(marker, 'mouseout', function () {
                                            infowindow.close();
                                        });

                                    itemEl.onmouseover = function () {
                                        displayInfowindow(marker, title);
                                    };

                                    itemEl.onmouseout = function () {
                                        infowindow.close();
                                    };
                                })(marker, places[i].place_name);

                                fragment.appendChild(itemEl);
                            }

                            // 검색결과 항목들을 검색결과 목록 Elemnet에 추가합니다
                            listEl.appendChild(fragment);
                            menuEl.scrollTop = 0;

                            // 검색된 장소 위치를 기준으로 지도 범위를 재설정합니다
                            map.setBounds(bounds);
                        }

                        // 검색결과 항목을 Element로 반환하는 함수입니다
                        function getListItem(index, places) {

                            var el = document.createElement('li'),
                                itemStr = '<span class="markerbg marker_' + (
                                    index + 1
                                ) + '"></span><div class="info">   <h5>' + places.place_name + '</h5>';

                            if (places.road_address_name) {
                                itemStr += '    <span>' + places.road_address_name +
                                        '</span>   <span class="jibun gray">' + places.address_name + '</span>';
                            } else {
                                itemStr += '    <span>' + places.address_name + '</span>';
                            }

                            itemStr += '  <span class="tel">' + places.phone + '</span></div>';

                            el.innerHTML = itemStr;
                            el.className = 'item';

                            return el;
                        }

                        // 마커를 생성하고 지도 위에 마커를 표시하는 함수입니다
                        function addMarker(position, idx, title) {
                            var imageSrc = 'http://t1.daumcdn.net/localimg/localimages/07/mapapidoc/marker_number_blue.png', // 마커 이미지 url, 스프라이트 이미지를 씁니다
                                imageSize = new kakao
                                    .maps
                                    .Size(36, 37), // 마커 이미지의 크기
                                imgOptions = {
                                    spriteSize: new kakao
                                        .maps
                                        .Size(36, 691), // 스프라이트 이미지의 크기
                                    spriteOrigin: new kakao
                                        .maps
                                        .Point(0, (idx * 46) + 10), // 스프라이트 이미지 중 사용할 영역의 좌상단 좌표
                                    offset: new kakao
                                        .maps
                                        .Point(13, 37) // 마커 좌표에 일치시킬 이미지 내에서의 좌표
                                },
                                markerImage = new kakao
                                    .maps
                                    .MarkerImage(imageSrc, imageSize, imgOptions),
                                marker = new kakao
                                    .maps
                                    .Marker({
                                        position: position, // 마커의 위치
                                        image: markerImage
                                    });

                            marker.setMap(map); // 지도 위에 마커를 표출합니다
                            markers.push(marker); // 배열에 생성된 마커를 추가합니다

                            return marker;
                        }

                        // 지도 위에 표시되고 있는 마커를 모두 제거합니다
                        function removeMarker() {
                            for (var i = 0; i < markers.length; i++) {
                                markers[i].setMap(null);
                            }
                            markers = [];
                        }

                        // 검색결과 목록 하단에 페이지번호를 표시는 함수입니다
                        function displayPagination(pagination) {
                            var paginationEl = document.getElementById('pagination'),
                                fragment = document.createDocumentFragment(),
                                i;

                            // 기존에 추가된 페이지번호를 삭제합니다
                            while (paginationEl.hasChildNodes()) {
                                paginationEl.removeChild(paginationEl.lastChild);
                            }

                            for (i = 1; i <= pagination.last; i++) {
                                var el = document.createElement('a');
                                el.href = "#";
                                el.innerHTML = i;

                                if (i === pagination.current) {
                                    el.className = 'on';
                                } else {
                                    el.onclick = (function (i) {
                                        return function () {
                                            pagination.gotoPage(i);
                                        }
                                    })(i);
                                }

                                fragment.appendChild(el);
                            }
                            paginationEl.appendChild(fragment);
                        }

                        // 검색결과 목록 또는 마커를 클릭했을 때 호출되는 함수입니다 인포윈도우에 장소명을 표시합니다
                        function displayInfowindow(marker, title) {
                            var content = '<div style="padding:5px;z-index:1;">' + title + '</div>';

                            infowindow.setContent(content);
                            infowindow.open(map, marker);
                        }

                        // 검색결과 목록의 자식 Element를 제거하는 함수입니다
                        function removeAllChildNods(el) {
                            while (el.hasChildNodes()) {
                                el.removeChild(el.lastChild);
                            }
                        }
                    </script>

                </ul>
            </section>

            <!-- Footer -->
            <footer id="footer">
                <!-- <p class="copyright">&copy; Untitled. All rights reserved. Demo Images:
                    <a href="https://unsplash.com">Unsplash</a>. Design:
                    <a href="https://html5up.net">HTML5 UP</a>.</p> -->
            </footer>

        </div>
    </div>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>

</html>
