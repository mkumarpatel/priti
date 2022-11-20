(function () {
"use strict";

document
.querySelector('[data-toggle="offcanvas"]')
.addEventListener("click", function () {
document.querySelector(".offcanvas-collapse").classList.toggle("open");
});
})();

$( function(){
  $('#off-canvas').offcanvas({
  "modifiers": "left,overlay,absolute"
  });
});


$('.owl-carousel').owlCarousel({
    margin:10,
    nav:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})


$(".faqqus").click(function(){
            $(this).next().slideToggle();
            $(this).find("i").toggleClass("fa-plus");
            $(this).find("i").toggleClass("fa-minus");
            $(this).parent().siblings().find(".faqans").slideUp();
            $(this).parent().siblings().find("i").addClass("fa-plus");
        });



$(document).ready(function(){
            $('.rtl-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.rtl-slider-nav'
            });
            $('.rtl-slider-nav').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                vertical: true,
                asNavFor: '.rtl-slider',
                centerMode: false,
                focusOnSelect: true,
                prevArrow: ".thumb-prev",
                nextArrow: ".thumb-next",
            });
        });





    function  show_img(img) {

        var show = document.getElementById('show_img');
        show.src = img;

    }
    var array=["images/Rectangle 17028.png","images/Rectangle 17026.png","images/Rectangle 17025.png","images/Rectangle 17027 (3).png"
    ];
    var i=1;
    setInterval(function(){

       document.getElementById('img').src=array[i];
       if(i==array.length-1)
        i=0;
    else
        i++;
},2000);


