<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href='//fonts.googleapis.com/css?family=Raleway:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic|Crete+Round:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic|Raleway:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&#038;subset=latin,latin-ext' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/font.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
  </script>
  <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=c59e95a743cedddf975a9737439b07df"></script>
</head>
<body>
  <div id="wrap">
  <div class="header">
  <div class="gnb">
    <div class="logo">
      <a href="index.php">
        <img src="img/logo_header.png" alt="헤더 로고사진">
      </a>
    </div>
    <ul>
      <li><a href="index.php">HOME</a></li>
      <li><a href="company.php">COMPANY</a></li>
      <li><a href="service.php">SERVICE</a></li>
      <li><a href="#">NEWS</a></li>
      <li><a href="notice.php">NOTICE</a></li>
      <li><a href="contact.php">CONTACT</a></li>
    </ul>
  </div>
</div>
<script src="js/scoll.js"></script>
<!--        contatiner 시작-->
    <div id="container_top_margin">
<!--        spot 시작-->
      <div class="spot">
        <div class="spot_txt">
          <div class="txt_ctn">
            <h1>CONTACT</h1>
          </div>
        </div>
      </div>
<!--        //spot 종료-->
<!--        main content 시작-->
      <div id="content">
        <div class="section_row contact_icon_wrap">
         <div class="section_inner_margin">
            <ul>
              <li>
                <span class="icon">
                  <i class="fas location_alt"></i>
                </span>
                <div class="location">
                  <h4>LOCATION</h4>
                  <p>경기도 성남시 분당구 판교로 256번길 19 GB-I 타워 3층 주식회사 카카오게임즈</p>
                </div>
              </li>
              <li>
                <span class="icon">
                  <i class="fas fa-phone"></i>
                </span>
                <div class="location">
                  <h4>PHONE</h4>
                  <p>1556-8834</p>
                </div>
              </li>
              <li>
                <span class="icon">
                  <i class="far fa-envelope"></i>
                </span>
                <div class="location">
                  <h4>E-MAIL</h4>
                  <p>contact@kakaogames.com <br> (*본 메일은 수신 전용 메일입니다.)</p>
                </div>
              </li>
            </ul>
        </div>
        </div>
        <div class="section_row contact_from_wrap">
          <div class="section_inner_margin">
            <h4>CONTACT</h4>
            <h5>Request Project</h5>
            <form action="project.php" method="post">
              <strong><span>1</span>플랫폼 구분</strong>
              <div class="Platform_colum">
                <div class="three_colum">
                  <div class="colum_inner">
                    <input type="checkbox" id="pcog" value="온라인게임">
                    <label for="pcog"><span>온라인게임</span></label>
                  </div>
                </div>
                <div class="three_colum">
                  <div class="colum_inner">
                    <input type="checkbox" id="mog" value="모바일게임">
                    <label for="mog"><span>모바일게임</span></label>
                  </div>
                </div>
                <div class="three_colum">
                  <div class="colum_inner">
                    <input type="checkbox" id="rest" value="기타">
                    <label for="rest"><span>기타</span></label>
                  </div>
                </div>
              </div>
              <strong><span>2</span>업체구분</strong>
              <div class="agency_colum">
                <div class="two_colum">
                 <div class="colum_inner">
                  <input type="checkbox" id="developer">
                  <label for="developer"><span>개발사</span></label>
                 </div>
                </div>
                <div class="two_colum">
                  <div class="colum_inner">
                    <input type="checkbox" id="non_applied">
                    <label for="non_applied"><span>비게임업체</span></label>
                  </div>
                </div>
              </div>
              <strong><span>3</span>주제구분</strong>
              <div class="topic_colum">
                <div class="three_colum">
                  <div class="colum_inner">
                    <input type="checkbox" id="game" value="게임퍼블리싱 제안">
                    <label for="game"><span>게임 퍼블리싱 제안</span></label>
                  </div>
                </div>
                <div class="three_colum">
                  <div class="colum_inner">
                    <input type="checkbox" id="business" value="사업 제안">
                    <label for="business"><span>사업 제안</span></label>
                  </div>
                </div>
                <div class="three_colum">
                  <div class="colum_inner">
                    <input type="checkbox" id="alliance" value="제휴 제안">
                    <label for="alliance"><span>제휴 제안</span></label>
                  </div>
                </div>
                <div class="three_colum">
                  <div class="colum_inner">
                    <input type="checkbox" id="kakao" value="카카오게임 퍼블리싱 제안">
                    <label for="kakao"><span>카카오게임 퍼블리싱 제안</span></label>
                  </div>
                </div>
                <div class="three_colum">
                  <div class="colum_inner">
                    <input type="checkbox" id="friends" value="카카오게임 프렌즈 제안">
                    <label for="friends"><span>카카오게임 프렌즈 제안</span></label>
                  </div>
                </div>
              </div>
              <p>*필수입력</p>
              <div class="text_colum">
                <input type="text" name="projectName" id="projectName" class="one_colum" placeholder="프로젝트명">
                <div class="two_colum">
                  <div class="colum_inner">
                    <input type="text" name="companyName" id="companyName" class="txt_two_colum" placeholder="업체명*">
                  </div>
                </div>
                <div class="two_colum">
                  <div class="colum_inner">
                    <input type="text" name="email" id="email" class="txt_two_colum" placeholder="Email*">
                  </div>
                </div>
                <textarea name="request" id="request" class="one_colum" placeholder="의뢰내용"></textarea>
                <br>
                <div class="file_colum">
                  <input type="file" name="attachment" id="attachment">
                  <label for="attachment"><span>첨부파일 (10M 이내 파일만 첨부 가능합니다.)</span><img src="img/ico_add.png" alt="첨부파일"></label>
                </div>
              </div>
              <div class="infm">
                <strong>제안정보 수집/이용 동의<span>아래 동의를 반드시 읽고 동의해주세요.</span></strong>
                <ul>
                  <li>수집 주체 : (주)카카오게임즈</li>
                  <li>수집 목적 : 제휴제안 접수 및 처리결과 회신</li>
                  <li>수집 항목 : 필수(업체명, E-mail) / 선택시(성명, 전화번호, 홈페이지, 업체주소)</li>
                  <li>보유 기간 : 제안 채택 시 서비스 반영 시까지, 제안 불채택 시 즉시 파기됨</li>
                </ul>
                <input type="checkbox" id="chk_agree">
                <label for="chk_agree">위 개인 정보 수집에 동의합니다.</label>
              </div>
              <input type="submit" class="ready" value="의뢰하기">
            </form>
          </div>
        </div>
        <div id="map" style="width:100%; height:500px;"></div>
      </div>
<!--        //main content 종료-->
    </div>
<!--        //contatiner 종료-->
<div class="footer">
      <div class="content">
        <div class="left">
          <img src="img/logo_footer.png" alt="#">
          <img src="img/kakao_C.png" alt="#">
        </div>
        <div class="center">
            <a href="#">개인정보처리 방침</a>
            <p>
              <strong>주소</strong>
              경기도 성남시 분당구 판교로 256번길 19 GB-I 타워 3층 주식회사 카카오 게임즈
            </p>
            <p>
              <strong>Tel</strong>1566-8834
            </p>
            <p>
              <strong>대표이사</strong>남궁훈, 조계현
            </p>
            <p>Copyright © 2016 Kakao Games Corp.</p>
        </div>
        <div class="right"></div>
  </div>
</div>
  </div>
  <script>
    var container = document.getElementById('map');
		var options = {
			center: new daum.maps.LatLng(37.40127488081595, 127.10314682730828),
			level: 3
		};
		var map = new daum.maps.Map(container, options);
        var mapTypeControl=new daum.maps.MapTypeControl();
          map.addControl(mapTypeControl, daum.maps.ControlPosition.TOPRIGHT);
        var zoomControl = new daum.maps.ZoomControl();
          map.addControl(zoomControl, daum.maps.ControlPosition.RIGHT);
        var markerPosition  = new daum.maps.LatLng(37.40127488081595, 127.10314682730828); 
        var marker = new daum.maps.Marker({
        position: markerPosition
        });
        marker.setMap(map);
        var iwContent = '<div style="padding:5px;">카카오 게임즈</div>',
            iwPosition = new daum.maps.LatLng(37.40127488081595, 127.10314682730828);
        var infowindow = new daum.maps.InfoWindow({
          position : iwPosition, 
          content : iwContent 
        });
        infowindow.open(map, marker); 
        
        map.setZoomable(false);   
      
  </script>
</body>
</html>