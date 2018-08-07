$(document).ready(function () {
    //        menu_btn
    $('.sidebar_btn').click(function () {
        $('.sidebar').toggleClass('active');
        $('.sidebar_btn').toggleClass('toggle');
    })
}); //menu open,close
$('.panel>li').on('click', function () {
    $('.ptn_active').removeClass('ptn_active');
    $(this).addClass('ptn_active');
}); //button click 

//var speed = 700; //스크롤 스피드 수치로 사용할 변수 
//
//function scrolling(obj) {
//    if (!obj) { //예외처리
//        $('html, body').animate({
//            scrollTop: 0
//        }, speed);
//    } else {
//        var posTop = $(obj).offset().top;
//        $('html, body').animate({
//            scrollTop: posTop
//        }, speed)
//    }
//};


//사이드메뉴를 눌렀을때 그 섹션으로 슬라이드이동.. 경로 재설정 필요
//        $(".menu_list>ul li a").click(function(){
//            var direction=$(this).attr("href");
//            scrolling(direction);
//        }); 


//        accordian
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}

//        section2 script
var sectionBg = $(".section2").eq(0);
var visionBtn = $(".vision");
var sloganBtn = $(".slogan");
var list1 = $(".sec2_contents1");
var list2 = $(".sec_contents2");

visionBtn.on("click", function () {
    sectionBg.css({
        'background-image': "url('./img/main/vision_bg.jpg')",
        'transition': ".4s"
    })
    list1.eq(0).css({
        'display': 'block'
    });
    list2.eq(0).css({
        'display': 'none'
    });
})
sloganBtn.on("click", function () {
    sectionBg.css({
        'background-image': "url('./img/main/slogan_bg.jpg')",
        'transition': ".4s"
    })
    list1.eq(0).css({
        'display': 'none'
    });
    list2.eq(0).css({
        'display': 'block'
    });
});
//        section3 script
var card = document.getElementsByClassName('js'); // 카드 조회

function scroll() {

}

//        section3 script


//        section4 script
$(document).ready(function () {
    anim();

    function anim() {
        setTimeout1 = setTimeout(function () {
            var gb1 = $('.gold_bar');
            var gb2 = $('.silver_bar');
            var gb3 = $('.bronze_bar');

            gb1.addClass('shake1');
            gb2.addClass('shake2');
            gb3.addClass('shake3');

            /* 	gb1.css('left','-100%').animate({left:'-20%'},2000);
            	
            	gb1.css('opacity','1').animate({opacity:0.1},300);
            	gb1.css('opacity','0.1').animate({opacity:1},300);
            	gb1.css('opacity','1').animate({opacity:0.1},300);
            	gb1.css('opacity','0.1').animate({opacity:1},300);
            	
            	gb2.css('left','-100%').animate({left:'-10%'},2000);
            	gb3.css('left','-100%').animate({left:'-30%'},2000);
            	gb4.css('left','-100%').animate({left:0},2000);
            	gb5.css('left','-100%').animate({left:'-40%'},2000);  */

        }, 500);
    };


    function removeanim() {

        var gb1 = $('.gold_bar');
        var gb2 = $('.silver_bar');
        var gb3 = $('.bronze_bar');
        
        gb1.removeClass('shake1');
        gb2.removeClass('shake2');
        gb3.removeClass('shake3');
    };

    $('.section02').hover(function () {
        removeanim();
        anim();
    }, function () {

    });

    /* $(window).scroll(function(){
    	var sct=$(window).scrollTop();
    	var s2=$('.section02').offset().top;
    	var timer;
    	if(s2<=sct){
    		clearTimeout(timer);
    		removeanim();
    		timer=setTimeout(anim, 150);
    	};
    }); */
});
