$(document).ready(function () {
  // $(window).on('load', function () {
  //   $preloader = $('.loaderArea'),
  //     $loader = $preloader.find('.loader');
  //   $loader.fadeOut();
  //   $preloader.delay(350).fadeOut('slow');
  // });
  var preloader    = $('#preloader'), // селектор прелоадера
        imagesCount  = $('img').length, // количество изображений
        dBody        = $('html'), //обращаемся к body
        percent      = 100 / imagesCount, // количество % на одну картинку
        progress     = 0, // точка отсчета
        imgSum       = 5, // количество картинок
        loadedImg    = 0; // счетчик загрузки картинок

    if (imagesCount >= imgSum && imagesCount > 0) {
        preloader.css('background', '#fff');
        dBody.css('overflow', 'hidden');

        $(".dws-progress-bar").circularProgress({
            color: "#25ffe4",
            line_width: 17,
            height: "350px",
            width: "350px",
            percent: 0,
            // counter_clockwise: true,
            starting_position: 25
        }).circularProgress('animate', percent, 1000);

        for (var i = 0; i < imagesCount; i++) { // создаем клоны изображений
            var img_copy        = new Image();
            img_copy.src        = document.images[i].src;
            img_copy.onload     = img_load;
            img_copy.onerror    = img_load;
        }

        function img_load () {
            progress += percent;
            loadedImg++;
            if (progress >= 100 || loadedImg == imagesCount) {
                preloader.delay(400).fadeOut('slow');
                dBody.css('overflow', '');
            }
            $(".dws-progress-bar").circularProgress('animate', progress, 500);
        }
    } else {
        preloader.remove();
    }
    $(".owl-carousel").owlCarousel({
        items:1,
        animateOut: 'fadeOut',
        fullWidth: true,
        nav: true,
        navText : ["<i class=\"material-icons large\">navigate_before</i>","<i class=\"material-icons large\">navigate_next</i>"]
    });

        $(".owl-carousel").owlCarousel({
        items:1,
        animateOut: 'fadeOut',
        nav: true,
        navText : ["<i class=\"material-icons large\">navigate_before</i>","<i class=\"material-icons large\">navigate_next</i>"]
    });
    $('.sdelano').carousel({
        numVisible: 1,
        padding: 75,
        dist: -30,
        duration: 200,
        shift: 20
    });
    var services = $('#uslugi').offset().top;
    var gallery = $('#gallery').offset().top;

    $('.sidenav').sidenav();

    var brandLogo = $('.brand-logo');
    var nav = $('.nav');
    var navBg = $('.bg');
    var textgeco = $('.disp2')
    var h3color = $('.h3color')
    var colorh3 = $('.colorh3')
    var blockelem = $('.block-elem')
    var bordercolor = $('.element')
    $(window).scroll(function () {
        var currentScroll = $(window).scrollTop();
        if (currentScroll > 50) {
            textgeco.addClass('dispnone')
            colorh3.removeClass('h3color');
            bordercolor.css('border-color', '#05005C');
        } else {
            textgeco.removeClass('dispnone');
            colorh3.addClass('h3color');
            bordercolor.css('border-color', '#EBECEC');
        }
    });
    $(window).scroll(function () {
        var current = $(window).scrollTop();
        if (current > 50) {
            navBg.css('opacity', 1);
        } else {
            navBg.css('opacity', 0);
        }

    });


    var img1 = $('.img1');
    var anim1 = $('.anim1');
    $(window).scroll(function () {
        var current = $(window).scrollTop();
        if (current > 1200) {
            img1.addClass('anim1');
        } else {
            img1.removeClass('anim1');
        }

    });


    var img2 = $('.img2');
    var anim2 = $('.anim2');
    $(window).scroll(function () {
        var current = $(window).scrollTop();
        if (current > 1200) {
            img2.addClass('anim2');
        } else {
            img2.removeClass('anim2');
        }

    });


    var img3 = $('.img3');
    var anim3 = $('.anim3');
    $(window).scroll(function () {
        var current = $(window).scrollTop();
        if (current > 1200) {
            img3.addClass('anim3');
        } else {
            img3.removeClass('anim3');
        }

    });


    $('.product,.reviews, .carousel-slider').carousel({
        fullWidth: true,
    }).css('height', $(window).height());

    $('.next').click(function () {
        $('.product, .carousel-slider').carousel('next');
    });
    $('.prev').click(function () {
        $('.product,.carousel-slider').carousel('prev');
    });

    $('.product').carousel({
        numVisible: 10,
        padding: 200,
        dist: -30,
        duration: 200,
        shift: 20
    });
    $('.reviews').carousel({
        numVisible: 5,
        padding: 100,
        dist: -10,
        duration: 200,
        shift: 20
    });

    var productItems = $('.product > .carousel-item');
    productItems.on("mouseover", function (e) {
        var offset = $(this).offset();
        if ($(this).attr('class') !== 'carousel-item active') {

            $('.product > .carousel-item.active').animate({
                width: "200",
                top: 0,
                left: 0
            }, 400);
            $('.product > .carousel-item.active').css({'max-width': '200px'});
            if (offset.left > 400) {
                $('.carousel').carousel('next');
            } else if (offset.left < 400) {
                $('.carousel').carousel('prev');
            }
        }
    });
    if ($(window).width() > 700) {
        productItems.on('click', function () {
            if ($(this).attr('class') === 'carousel-item active') {
                if ($(this).css('width') === '200px') {
                    $(this).css({'max-width': 'none'});
                    $(this).animate({
                        width: "300",
                        left: "-5%",
                        top: "-15%"
                    }, "fast");
                }

            }
        });
    }

    $(".wrapp a").mPageScroll2id({
        offset: 100,
        onComplete: function () {
            $('.sidenav').sidenav('close');
        }
    });

    $('.materialboxed').materialbox();
    $('.collapsible').collapsible();

});

$('.blag').carousel({
    numVisible: 3,
    padding: 10,
    dist: 0,
    duration: 200,
    shift: 20
});
$('.item').magnificPopup({
    type: 'image'
});

$('.action--compare').on('click', function () {
    var blue = 'rgb(5,0,92)';
    var grey = 'rgb(235, 236, 236)';
    var thisColor = $('.compare__item').last().css('background-color');
    var items = [$('.product--selected')];

    $('.action--close').attr('style', '');
    if (thisColor == blue) {
        $('.action--close').css('color', grey);
    }
    if (thisColor == grey) {
        $('.action--close').css('color', blue);
    }



});

            

        