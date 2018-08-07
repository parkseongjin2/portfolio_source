<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/sub.css">
  <link rel="stylesheet" href="css/media.css">
  <link rel="stylesheet" href="css/footer.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <div id="wrap">    
    <div id="header">
      <div class="gnb">
        <button class="sidebar_btn">
          <span></span>
        </button>
        <ul>
          <li><a href="#">구독하기</a></li>
          <li>
            <a href="#">Sign in | </a>
            <a href="#">Log in</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="sidebar">
      <div class="menu_contents">
        <div class="menu_ptn1"></div>
        <div class="menu_ptn2"></div>
        <div class="menu_logo"></div>
        <div class="menu_list">
          <button class="accordion">Intro</button><br>
          <button class="accordion">Passion. Connected</button>
          <ul class="panel">
            <li><a href="#">비전</a></li>
            <li><a href="#">슬로건</a></li>
          </ul>
          <button class="accordion">Memory</button>
          <ul class="panel">
              <li><a href="#">포토 갤러리</a></li>
              <li><a href="#">하이라이트 보기</a></li>
          </ul>
          <button class="accordion">Family</button>
          <ul class="panel">
              <li><a href="#">포토 갤러리</a></li>
              <li><a href="#">성화봉송 다시보기</a></li>
          </ul>
          <button class="accordion">News Letter</button>
          <ul class="panel">
            <li><a href="#">구독하기</a></li>
          </ul>
        </div>
      </div>
      <button class="sidebar_btn">
        <span></span>
      </button>
    </div>
    <div class="fix__header">
        <img src="./image/sub/pattern_0.png" alt="패턴">
        <div class="fix__txt">
          <h2>PYEONGCHANG 2018</h2>
          <h2>PHOTO GALLERY</h2>
        </div>
        <img src="./image/sub/logo_0.png" alt="로고">
      </div>
    <section class="section1">
      <div class="inner__margin">
        <div class="memory__wrap">
          <div class="memory__txt">
            <h4>Memory</h4>
            <h3>평창의 기억</h3>
            <h3>Monolithic Memory</h3>
            <p>모두가 하나된 열정으로 동계 스포츠에 대한 전 세계인의 공감을 연결합니다.언제 어디서나 모든 세대가 참여할 수 있으며, 누구보다 뜨거운 여름을 보내는 '겨울 선수'들이 있습니다. 365일 땀 흘리며 훈련에 매진한 결과, 최근 펼쳐진 국제 대회에서 좋은 성적을 내며 평장의 메달 전선을 밝히고 있는 동계스포츠의 영웅들을 소개합니다.</p>
          </div>
          <div class="autoGallery">
            <img src="./image/sub/card00.jpg" alt="갤러리_사진" class="slides">
            <img src="./image/sub/card01.jpg" alt="갤러리_사진" class="slides" class="slides">
            <img src="./image/sub/card02.jpg" alt="갤러리_사진" class="slides" class="slides">
            <img src="./image/sub/card03.jpg" alt="갤러리_사진" class="slides" class="slides">
          </div>
        </div>
      </div>
      <div class="pictogram__bar">
        <div class="pictogram_img"></div>
        <div class="bar__pattern"></div>
      </div>
      <script>
        window.onload=function(){
          
        var _pictogram = $(".pictogram_img");
        
        for(var i=1; i<25;i++){
          _pictogram.append("<img src='./image/pictogram/0"+i+".png' alt='픽토그램_0"+i+"'>");
        };
        slidetimer();
        var $interval;
        function slidetimer(){
          var $interval=setInterval(function(){
            slide()
          },3000);
          function slide(){
            _pictogram.animate({left:"-=175px"},500,function(){
              $(this).css({left:0});
              _pictogram.append(_pictogram.children("img").eq(0));
            });
          }
        }
          
        };
      
      
      </script>
    </section>
    <section class="section2">
      <div class="center_txt">
        <h4>세계가 기억할</h4>
        <h3>2018 평창 대회</h3>
      </div>
      <div class="banner__wrap">
        <img src="./image/sub/banner0.jpg" alt="배너 사진">
        <img src="./image/sub/banner1.jpg" alt="배너 사진">
      </div>
    </section>
    <section class="section3">
      <div class="center_txt">
        <h4>2018 평창</h4>
        <h3>전체 사진</h3>
      </div>
      <div class="photo__wrap">
        <div class="photo__margin">
          <div class="main__photo">
            <img src="./image/sub/modal_0.jpg" alt="포토갤러리_사진">
            <span>
              <h4>'내일을 달리는 꿈' <br>2018 평창 동계올림픽 폐회식 </h4>
            </span>
          </div>
          <img src="./image/sub/modal_1.jpg" alt="포토갤러리_사진">
          <img src="./image/sub/modal_2.jpg" alt="포토갤러리_사진">
          <img src="./image/sub/modal_3.jpg" alt="포토갤러리_사진">
        </div>
      </div>
    </section>
    <?php
      include "footer.php";
    ?>
    <div id="photo__modal">
      <div class="modal__content">
        <span class="close"></span>
        <img src="" alt="">
        <span class="arrow left"></span>
        <span class="arrow right"></span>
      </div>
    </div>
  </div>
  <script>
    
    var myIndex=0;
    autoGallery();
    
  function autoGallery(){
    var i;
    var slides=$(".slides");
    for(i=0;i<slides.length;i++){
      slides[i].style.display = "none";
    }
    myIndex++;
    if(myIndex>slides.length){myIndex=1};
    slides[myIndex-1].style.display = "block";
    setTimeout(autoGallery, 2000);
  }
  
    
  var imgUrl;
  var altText;
  var _img=$(".photo__wrap img");
  var modal=$("#photo__modal");  
    
  $(".close").on("click",function(){
    modal.fadeOut();
  })
    
  _img.on("click",function(){
    var _index=$(this).index();
    var _indexTar=_img.eq(_index);
    
    console.log(_indexTar);
    
    imgUrl=_indexTar.attr('src');
    altText=_indexTar.attr('alt');
    
    modal.find("img").attr("src",imgUrl);
    modal.find("img").attr("alt",altText);
    
    $(".right").on('click',function(){
      _index++;
      console.log(_index); modal.find("img").attr("src","./image/sub/modal_"+_index+".jpg");
      
    if(_index>_img.length-2){
      _index=-1;
    }
    });
    $(".left").on('click',function(){
      if(_index==0){
        _index=4;
      }
      _index--;
      console.log(_index); modal.find("img").attr("src","./image/sub/modal_"+_index+".jpg");
      
    });
    modal.fadeIn();
  });
    
  </script>
  <script src="./js/main.js"></script>
</body>
</html>
