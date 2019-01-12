(function ($) {
	"use strict";
    jQuery(document).ready(function($){

        /*--------------------
            wow js init
        ---------------------*/
        new WOW().init();

        /*-----------------------------------
            magnificPopup video 
        -----------------------------------*/
        $('.venobox').magnificPopup({
            type: 'video'
        });
        $('.image-popup').magnificPopup({
            type: 'image'
        }); 
        /*-----------------------------------
            Scroll to top 
        -----------------------------------*/
        $('.scroll-to-top').on('click', function () {
            $("html,body").animate({
                scrollTop: 0
            }, 1000);
        });
        
        /*-------------------------
            counter section activation
        ---------------------------*/
        var counternumber = $('.count-num');
        counternumber.counterUp({
            delay: 20,
            time: 5000 
        });

    });

    //define variable for store last scrolltop
    var lastScrollTop = '';
    
    $(window).on('scroll', function () {

        
        //back to top show/hide
        var ScrollTop = $('.scroll-to-top');
       if ($(window).scrollTop() > 300) {
           ScrollTop.fadeIn(1000);
       } else {
           ScrollTop.fadeOut(1000);
       }
       /*--------------------------
        sticky menu activation
       -------------------------*/
        var st = $(this).scrollTop();
        var mainMenuTop = $('.header-bottom');
        if ($(window).scrollTop() > 300) {
            if (st > lastScrollTop) {
                // hide sticky menu on scrolldown 
                mainMenuTop.removeClass('nav-fixed');
                
            } else {
                // active sticky menu on scrollup 
                mainMenuTop.addClass('nav-fixed');
            }

        } else {
            mainMenuTop.removeClass('nav-fixed ');
        }
        lastScrollTop = st;
       
    });
           
    $(window).on('load',function(){
        /*-----------------
            preloader
        ------------------*/
        var preLoder = $(".preloader");
        preLoder.fadeOut(1000);
       
    });
}(jQuery));	







