$(document).scroll(function(){
//      console.log($(document).scrollTop())
    var $gnb=$('.gnb');
    var $gnbImg=$('.gnb>.logo>a>img');
    var $gnbLi=$('.gnb>ul>li');
    var $sec=$('.sec1');
  if($(document).scrollTop()>=100){
    $gnb.css({'height':'50px'});
    $gnbImg.css({'height':'50px'});
    $gnbLi.css({'line-height':'50px'});
    $sec.css({'margin-top':'50px'});
  }else if($(document).scrollTop()<100){
    $gnb.css({'height':'100px'});
    $gnbImg.css({'height':'100px'});
    $gnbLi.css({'line-height':'100px'});
    $sec.css({'margin-top':'100px'});
  }
})