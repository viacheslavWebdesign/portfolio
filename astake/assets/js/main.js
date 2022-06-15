(function($){

// включение/отключение темной темы

$(".theme-changer").click(function(){
    $("body").toggleClass("theme-dark");
});

// открытие поиска

$(".subheader__search-toggler").click(function(){
    $(".subheader__row").addClass("subheader__row_hidden");
    setTimeout(function(){
        $(".subheader__search").fadeIn(200);
    }, 200);
});

// скрытие поиска

$(".subheader__search-close").click(function(){
    $(".subheader__search").fadeOut(200);
    setTimeout(function(){
        $(".subheader__row").removeClass("subheader__row_hidden");
    }, 200);
});

// открытие/скрытие подменю

$(".subheader__toggler").click(function(){
    $(this).toggleClass("subheader__toggler_rotated");
    $(".subheader ul").fadeToggle(200);
});

// настройка слайдера

$('.gallery__slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 200,
      dots: false,
      prevArrow: $('.gallery__prev'),
      nextArrow: $('.gallery__next'),
      fade: true,
      cssEase: 'linear'
});

// отображение кол-ва слайдов

$(".gallery__total").text($(".gallery__item").length);

// отображение текущего слайда

$(".gallery__slider").on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
    $(".gallery__current").text((currentSlide ? currentSlide : 0) + 1);
});

// прелоадер видео

$(".video__preloader").click(function(){
    $(this).siblings("iframe").attr("src", "https://www.youtube.com/embed/" + $(this).attr("data-video"));
    $(this).siblings("iframe").fadeIn("200");
    $(this).remove();
});

// переход по разделам в статье

var $root = $('html, body');
$('.link-scroll').click(function() {
    var href = $.attr(this, 'href');
        $root.animate({
            scrollTop: $(href).offset().top - 200
        }, 500, function () {
    });
    return false;
});

// отображение индикатора текущего раздела в статье

$.fn.isInViewport = function () {
    let elementTop = $(this).offset().top;
    let elementBottom = elementTop + $(this).outerHeight();

    let viewportTop = $(window).scrollTop();
    let viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
};

$(window).on("scroll", function(){
    $('.has-marker').each(function() {
        if( $(this).isInViewport() ) {
            $(".article__nav li").removeClass("current");
            $(".article__nav").find("[data-marker='" + $(this).attr("data-marker") + "']").addClass("current"); 
        }
    });
});

// прогресс чтения статьи

$(window).on("scroll", function(){
    let docHeight = $(".article__body").height();
    let winHeight = $(window).height();
    let viewport = docHeight - winHeight;
    let scrollPos = $(window).scrollTop();
    let scrollPercent = (scrollPos / viewport) * 100;
    $(".scroll__indicator").css("width", scrollPercent + "%");
});

// уменьшение хеддера при скролле статьи

$(window).on("load resize scroll", function(){
    if ($(".kmnd-body").hasClass("kmnd-body_article") && $(window).width() <= 767){
        $(window).scroll(function() {    
            if ($(window).scrollTop() >= 150) {
                $(".header").css("top", "-73.39px");
                $(".scroll").css("top", "40px");
            } else {
                $(".header").css("top", "0");
                $(".scroll").css("top", "113.39px");
            }
        });
    }
});

// отключение hover на моб

// анимация 404

setTimeout(function(){
    $(".error__notification_default").addClass("error__notification_expanded");
    setTimeout(function(){
        $(".error__notification").addClass("error__notification_visible");
    }, 500);
    setTimeout(function(){
        $(".error__emotions").addClass("error__emotions_visible");
    }, 1000);
}, 1000);

$(".error__emoji_down").click(function(){
    $(".error__emotions").removeClass("error__emotions_visible");
    setTimeout(function(){
        $(".error__notification").removeClass("error__notification_visible");
    }, 500);
    setTimeout(function(){
       $(".error__notification").removeClass("error__notification_expanded"); 
    }, 1000);
    setTimeout(function(){
        $(".error__notification_down").addClass("error__notification_expanded");
    }, 1500);
    setTimeout(function(){
        $(".error__notification").addClass("error__notification_visible");
        $('.error__emoji_down').remove();
    }, 2000);
    setTimeout(function(){
        $(".error__emotions").addClass("error__emotions_visible");
    }, 2500);
});

$(".error__emoji_up").click(function(){
    $(".error__emotions").removeClass("error__emotions_visible");
    setTimeout(function(){
        $(".error__notification").removeClass("error__notification_visible");
    }, 500);
    setTimeout(function(){
       $(".error__notification").removeClass("error__notification_expanded"); 
    }, 1000);
    setTimeout(function(){
        $(".error__notification_up").addClass("error__notification_expanded");
    }, 1500);
    setTimeout(function(){
        $(".error__notification").addClass("error__notification_visible");
    }, 2000);
});

$(".error__notification-close").click(function(){
    $(".error__emotions").removeClass("error__emotions_visible");
    setTimeout(function(){
        $(".error__notification").removeClass("error__notification_visible");
    }, 500);
    setTimeout(function(){
       $(".error__notification").removeClass("error__notification_expanded"); 
    }, 1000);
});

function hasTouch() {
    return 'ontouchstart' in document.documentElement
           || navigator.maxTouchPoints > 0
           || navigator.msMaxTouchPoints > 0;
}

if (hasTouch()) {
    try {
        for (var si in document.styleSheets) {
            var styleSheet = document.styleSheets[si];
            if (!styleSheet.rules) continue;

            for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
                if (!styleSheet.rules[ri].selectorText) continue;

                if (styleSheet.rules[ri].selectorText.match(':hover')) {
                    styleSheet.deleteRule(ri);
                }
            }
        }
    } catch (ex) {}
}

})(jQuery);