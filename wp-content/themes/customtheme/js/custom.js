$(document).ready(function () {
    $('#menu-main-menu li').click(function () {
        if ($(this).hasClass('current_page_item')) {
            $(this).removeClass('current_page_item');
        } else {
            $('li.current_page_item').removeClass('current_page_item');
            $(this).addClass('current_page_item');
        }
    });
});

/* humburger menu */

$(document).ready(function () {
    //toggle menu
    $('.hamburger-container').click(function () {
        $('#menu-main-menu').slideToggle();
    });

    //to fix issue that toggle adds style(hides) to nav
    $(window).resize(function () {
        if (window.innerWidth > 1024) {
            $('#menu-main-menu').removeAttr('style');
        }
    });

    //icon animation
    var topBar = $('.hamburger li:nth-child(1)'),
        middleBar = $('.hamburger li:nth-child(2)'),
        bottomBar = $('.hamburger li:nth-child(3)');

    $('.hamburger-container').on('click', function () {
        if (middleBar.hasClass('rot-45deg')) {
            topBar.removeClass('rot45deg');
            middleBar.removeClass('rot-45deg');
            bottomBar.removeClass('hidden');
        } else {
            bottomBar.addClass('hidden');
            topBar.addClass('rot45deg');
            middleBar.addClass('rot-45deg');
        }
    });
});

/* page-top */

$(document).ready(function(){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.btn-top').fadeIn();
                $('.btn-top').css('position', 'fixed');
                $('.btn-top').css('bottom', '12px');
                $('.btn-top').css('top', 'inherit');
                $('.btn-top').css('display', 'block');
            } 
            else {
                $('.btn-top').fadeOut();
            }
        }); 
 
        $('.btn-top').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
});

jQuery(document).ready(function($){
    $("#tabs").tabs();
});







