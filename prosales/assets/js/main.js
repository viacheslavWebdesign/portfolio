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
            $('.modal-review iframe').each(function() {
                var videoSrc = $(this).attr('src');
                $(this).attr('src', '');
                $(this).attr('src', videoSrc);
              });
            setTimeout(function(){
                $(".modal-shadow").fadeOut(250);
                $(".kmnd-body").removeClass("kmnd-body_noscroll");
            }, 250);
        }
    }
});

// Close modal
$(document).on("click", ".modal__close", function(){
    $(".modal").removeClass("modal_active");
    $('.modal-review iframe').each(function() {
        var videoSrc = $(this).attr('src');
        $(this).attr('src', '');
        $(this).attr('src', videoSrc);
      });
    setTimeout(function(){
        $(".modal-shadow").fadeOut(250);
        $(".kmnd-body").removeClass("kmnd-body_noscroll");
    }, 250);
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

// Scroll to block
$('.scroll-link').click(function() {
    var href = $.attr(this, 'href');
    $('html, body').animate({
        scrollTop: $(href).offset().top - 100
    }, 500, function () {});

    return false;
});
$('.header__scroll-link').click(function() {
    $(".header").removeClass("header_active");
    $(".kmnd-body").removeClass("kmnd-body_noscroll");
});

// Add class to header on scroll
$(window).scroll(function() {    
    if ($(window).scrollTop() > 30) {
        $(".header").addClass("header_scrolled");
    } else {
        $(".header").removeClass("header_scrolled");
    }
});

// Open/close menu
$(document).on("click", ".header__toggler", function(){
    $(".header").toggleClass("header_active");
    $(".kmnd-body").toggleClass("kmnd-body_noscroll");
});

// Logos slider
$('.logos__slider').slick({
    infinite: true,
    slidesToShow: 9,
    slidesToScroll: 1,
    variableWidth: true,
    pauseOnFocus: false,
    pauseOnHover: false, 
    arrows: false,
    dots: false,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 10000,
    cssEase:'linear',
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 8,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      }
    ]
  });

// Show tooltip on mobile

$(document).on("click", ".stages__dot", function(){
    if($(window).width() < 993){
        $(".stages__tooltip").removeClass("stages__tooltip_active");
        $(this).parent(".stages__item").find(".stages__tooltip").addClass("stages__tooltip_active");
    }
});

$(document).mouseup(function(e){
    if ($(".stages__tooltip").hasClass("stages__tooltip_active")){
        var container = $(".stages__tooltip");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".stages__tooltip_active").removeClass("stages__tooltip_active");
        }
    }
});

// Reviews slider
$('.reviews__slider').slick({
    dots: false,
    arrows: true,
    infinite: true,
    pauseOnFocus: false,
    pauseOnHover: false, 
    autoplay: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: $('.reviews__slider-btn_prev'),
    nextArrow: $('.reviews__slider-btn_next'),
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          dots: true,
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
        }
      }
    ]
  });

// Input label

$('input, textarea').focus(function() {
    $(this).parent().addClass('focused');
});
$('input, textarea').blur(function() {
    if ($(this).val().trim() == '') {
        $(this).parent().removeClass('focused');
    }
});

$('input, textarea').blur(function() {
    if ($(this).val().trim() != '') {
        $(this).parent().addClass('focused');
    }
});

// Call request modal
$(document).on("click", ".call-modal-request", function(){
    callModal("#modal-request", false, false);
    // $(".kmnd-body").addClass("kmnd-body_noscroll");
    $(".header").removeClass("header_active");
});

// Call review modals
$(document).on("click", ".call-modal-review1", function(){
    callModal("#modal-review1", false, false);
    // $(".kmnd-body").addClass("kmnd-body_noscroll");
    $(".header").removeClass("header_active");
});

$(document).on("click", ".call-modal-review2", function(){
    callModal("#modal-review2", false, false);
    // $(".kmnd-body").addClass("kmnd-body_noscroll");
    $(".header").removeClass("header_active");
});

// Video preloader
$(document).on("click", ".video .play", function() {
    const videoElement = $(this).closest('.video');
    videoElement.addClass('video_active');
    const videoId = $(this).data('video');
    const videoSrc = `https://www.youtube.com/embed/${videoId}?rel=0&amp;showinfo=0`;
    videoElement.find('iframe').attr('src', videoSrc);
});

})(jQuery);