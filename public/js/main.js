$(document).ready(function () {
    $('.toggle_menu_responsive').on('click', function () {
        $('#modal').stop().toggle(500);
    });

    $('#wp_menu_responsive').children('.out_modal').on('click', function () {
        $('#modal').stop().hide(500);
    });

    $(window).resize(function () {
        $('#modal').stop().hide(500);
    });

    $('#menu_responsive li').children('.sub_menu_responsive').prev('div').children('span').addClass('has-child');

    $('#menu_responsive li>div>span').on('click', function () {
        $(this).parent('div').next('.sub_menu_responsive').stop().slideToggle();
        if ($(this).hasClass('has-child')) {
            $(this).removeClass('has-child');
            $(this).addClass('rote');
        } else {
            $(this).removeClass('rote');
            $(this).addClass('has-child');
        }
    });

    $('#sidebar_menu li').children('.sub_sidebar_menu').prev('a').addClass('tick');

    $('#sidebar_menu li').hover(
        function () {
            $(this).children('.sub_sidebar_menu').show();
        },

        function () {
            $(this).children('.sub_sidebar_menu').hide();
        }
    );

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 12,
        responsiveClass: true,
        autoplayHoverPause:true,
        responsive: {
            0: {
                items: 2,
                nav: true
            },
            600: {
                items: 3,
                nav: true,
            },
            1000: {
                items: 4,
                nav: true,
                loop: true,
            }
        },
        autoplay: true,
        autoplayTimeout: 3000,
        animateOut: 'fadeOut', // Hiệu ứng chuyển đi
        animateIn: 'fadeIn' // Hiệu ứng chuyển đến
    });

    $(window).scroll(function(){
        if($(this).scrollTop()){
            $('#back_top').fadeIn();
        }else{
            $('#back_top').fadeOut();
        }
    });

    $('#back_top').click(function(){
        $('html, body').animate({
            scrollTop:0,
        }, 100);
    });

});

