(function($){

// Function to call any modal with parameters
function callModal(id, hide_other_window, toggle){
    if (hide_other_window == true){
        $(".modal").removeClass("modal_active");
    }
    if (toggle == true){
        $(id).removeClass("modal_active");
        setTimeout(function(){
            $(".modal-shadow").fadeOut(250);
            $(".kmnd-body").removeClass("kmnd-body_noscroll");
        }, 250);
    } else {
        $(".kmnd-body").addClass("kmnd-body_noscroll");
        $(".modal-shadow").fadeIn(250);
        setTimeout(function(){
            $(id).addClass("modal_active");
        }, 250);
    }
}

// Hide modal if clicked outside
$(document).mouseup(function(e){
    if ($(".modal").hasClass("modal_active")){
        var container = $(".modal__body");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".modal").removeClass("modal_active");
            setTimeout(function(){
                $(".modal-shadow").fadeOut(250);
                $(".kmnd-body").removeClass("kmnd-body_noscroll");
            }, 250);
        }
    }
});

// Tabs functionality
$(document).on("click", ".tabs__item", function(){
    var tabs = $(this).attr("data-tabs");
    $(this).parents(".tabs").find(".tabs__item").removeClass("tabs__item_active");
    $(this).addClass("tabs__item_active");
    $(this).parents(".tabs").find(".tabs__content").removeClass("tabs__content_active");
    setTimeout(() => {
        $(this).parents(".tabs").find(".tabs__content[data-tabs='" + tabs + "']").addClass("tabs__content_active");
    }, 500);
});

// Accordion functionality
$(document).on("click", ".accordion__head", function(){
    if ($(this).parent().hasClass("accordion_toggle")){
        $(this).parent(".accordion").toggleClass("accordion_active");
    } else {
        var accordion = $(this).parent().attr("data-accordion");
        $(".accordion[data-accordion='" + accordion + "']").removeClass("accordion_active");
        $(this).parent().addClass("accordion_active");
    }
});

// Disable :hover on touch devices
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

// Catalog menu

if($(window).width() > 992){
    $(document).on("mouseenter", ".header__catalog-btn", function(){
        $(".header__menu").addClass("header__menu_active");
    });
    
    $(document).on("mouseleave", ".header__menu-inner", function(){
        $(".header__menu").removeClass("header__menu_active");
    });
    
    $(document).on("mouseenter", ".header__menu-inner > nav > ul > li", function(){
        $(".header__menu-inner > nav > ul > li").removeClass("active");
        $(this).addClass("active");
    });       
} else {
    $('.header__menu').insertAfter('.header__holder');
    $(document).on("click", ".mobile-menu__catalog-btn", function(){
        $(".header__menu").addClass("active");
        $(".menu-item-has-children").removeClass("active");
    });
    $(document).on("click", ".header__menu-inner > nav > ul > li.menu-item-has-children, .header__menu-inner > nav > ul > li > ul > li.menu-item-has-children", function(){
        if (!$(this).hasClass("active")){
            $(".header__menu-heading p").text($(this).children("a").text());
            $(this).addClass("active");
        }
    });
    $(document).on("click", ".header__menu-heading", function(){
        if ($(".header__menu-inner > nav > ul > li > ul > li.menu-item-has-children").hasClass("active")){
            $(this).find("p").text($(".header__menu-inner > nav > ul > li.menu-item-has-children.active").children("a").text());
            $(".header__menu-inner > nav > ul > li > ul > li.menu-item-has-children.active").removeClass("active");
        } else if (!$(".header__menu-inner > nav > ul > li > ul > li.menu-item-has-children").hasClass("active") && $(".header__menu-inner > nav > ul > li.menu-item-has-children").hasClass("active")){
            $(this).find("p").text($(".mobile-menu__catalog-btn span").text());
            $(".header__menu-inner > nav > ul > li.menu-item-has-children.active").removeClass("active");
        } else if (!$(".header__menu-inner > nav > ul > li > ul > li.menu-item-has-children").hasClass("active") && !$(".header__menu-inner > nav > ul > li.menu-item-has-children").hasClass("active")){
            $(".header__menu").removeClass("active");
        }
    });
}

// Sticky menu
$(document).on("scroll", function(){
    if ($(window).scrollTop() > 52) {
        $(".header").addClass("position-fixed");
    } else {
        $(".header").removeClass("position-fixed");
    }
});

// Mobile menu
$(document).on("click", ".header__btn", function(){
    $(".kmnd-body").addClass("kmnd-body_noscroll");
    $(".mobile-menu-closer").addClass("mobile-menu-closer_active");
    $(".mobile-menu").addClass("mobile-menu_active");
});

$(document).on("click", ".mobile-menu-closer", function(){
    $(".kmnd-body").removeClass("kmnd-body_noscroll");
    $(".mobile-menu-closer").removeClass("mobile-menu-closer_active");
    $(".mobile-menu").removeClass("mobile-menu_active");
    $(".menu-item-has-children").removeClass("active");
    $(".header__menu").removeClass("active");
});

// Mobile menu dropdown
$(document).on("click", ".mobile-menu .menu-item-has-children", function(){
    $(this).toggleClass("active");
});

// Head slider

$('.head__slider').slick({
    dots: true,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 5000,
    infinite: true,
    speed: 500,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
    fade: true,
    cssEase: 'linear',
    prevArrow: $('.head__slider-arrow_prev'),
    nextArrow: $('.head__slider-arrow_next'),
});

if($(window).width() < 576){
    $('.head__offers').slick({
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 5000,
        infinite: true,
        speed: 500,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        slidesToShow: 2,
        slidesToScroll: 1
    });
}

// Arrivals slider
$('.arrivals__slider').slick({
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000,
    infinite: true,
    speed: 500,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 576,
            settings: "unslick",
        }
    ]
});

$('.arrivals__slider_second').slick({
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000,
    infinite: true,
    speed: 500,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 576,
            settings: "unslick",
        }
    ]
});

$(document).on("click", ".arrivals__slider-btn_prev, .arrivals__heading-arrow_prev", function(){
    $('.arrivals__slider').slick('slickPrev');
});

$(document).on("click", ".arrivals__slider-btn_next, .arrivals__heading-arrow_next", function(){
    $('.arrivals__slider').slick('slickNext');
});


// Mobile footer submenu
$(document).on("click", ".footer .menu-item-has-children", function(){
    $(this).toggleClass("active");
});

// Change offer background
if ($(window).width() < 1920){
    if ($('.offer__image').length > 0) {
        $('.offer__image').each(function() {
          if ($(this).data('offer-bg')) {
            $(this).css('background-image', 'url(' + $(this).data('offer-bg') + ')');
          }
        });
      }
}

// Countdown timer
var countDownDate = new Date("June 1, 2023 00:00:00").getTime();
var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  $(".offer-details__timer-value_days").text(days);
  $(".offer-details__timer-value_hours").text(hours);
  $(".offer-details__timer-value_minutes").text(minutes);
  $(".offer-details__timer-value_seconds").text(seconds);
  if (distance < 0) {
    clearInterval(x);
    $(".offer-details__timer-value_days").text("00");
    $(".offer-details__timer-value_hours").text("00");
    $(".offer-details__timer-value_minutes").text("00");
    $(".offer-details__timer-value_seconds").text("00");
  }
}, 1000);

// Change blog item background
if ($(window).width() < 1920){
    if ($('.blog-item__image').length > 0) {
        $('.blog-item__image').each(function() {
          if ($(this).data('blog-item-bg')) {
            $(this).css('background-image', 'url(' + $(this).data('blog-item-bg') + ')');
          }
        });
      }
}

// Video preloader
$(document).on("click", ".video .play", function() {
    const videoElement = $(this).closest('.video');
    videoElement.addClass('video_active');
    const videoId = $(this).data('video');
    const videoSrc = `https://www.youtube.com/embed/${videoId}?rel=0&amp;showinfo=0`;
    videoElement.find('iframe').attr('src', videoSrc);
  });

// Product slider
$('.product__gallery-main-slider').slick({
    dots: false,
    arrows: false,
    autoplay: false,
    infinite: true,
    speed: 500,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
    fade: true,
    cssEase: 'linear',
    asNavFor: '.product__gallery-thumbnails-slider',
    responsive: [
        {
            breakpoint: 576,
            settings: {
                arrows: false,
                dots: true
            }
        }
    ]
});

$('.product__gallery-thumbnails-slider').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    autoplay: false,
    vertical: true,
    asNavFor: '.product__gallery-main-slider',
    focusOnSelect: true,
    draggable: false,
    speed: 500,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
    responsive: [
        {
            breakpoint: 576,
            settings: "unslick",
        }
    ]
});

$('.select select').change(function(){
    if($(this).find('option:selected').attr('disabled') !== 'disabled') {
        $(this).parent(".select").addClass('select_selected');
    }
});

// Countdown timer product

var countDownDate1 = new Date("June 1, 2023 00:00:00").getTime();
var x = setInterval(function() {
  var now = new Date().getTime();
  var distance1 = countDownDate1 - now;
  var days1 = Math.floor(distance1 / (1000 * 60 * 60 * 24));
  var hours1 = Math.floor((distance1 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes1 = Math.floor((distance1 % (1000 * 60 * 60)) / (1000 * 60));
  var seconds1 = Math.floor((distance1 % (1000 * 60)) / 1000);
  
  days1 = (days1 < 10) ? "0" + days1.toString() : days1.toString();
  hours1 = (hours1 < 10) ? "0" + hours1.toString() : hours1.toString();
  minutes1 = (minutes1 < 10) ? "0" + minutes1.toString() : minutes1.toString();
  seconds1 = (seconds1 < 10) ? "0" + seconds1.toString() : seconds1.toString();
  
  $(".product__countdown-value_days span").text(days1);
  $(".product__countdown-value_hours span").text(hours1);
  $(".product__countdown-value_minutes span").text(minutes1);
  $(".product__countdown-value_seconds span").text(seconds1);
  
  if (distance1 < 0) {
    clearInterval(x);
    $(".product__countdown-value_days span").text("00");
    $(".product__countdown-value_hours span").text("00");
    $(".product__countdown-value_minutes span").text("00");
    $(".product__countdown-value_seconds span").text("00");
  }
}, 1000);

// Call modal fast order
$(document).on("click", ".call-modal-fast", function(){
    callModal("#modal-fast", false, false);
});

})(jQuery);