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
    if ($(this).hasClass("tabs__item_active")){
        $(this).removeClass("tabs__item_active");
        $(this).parents(".tabs").find(".tabs__content").removeClass("tabs__content_active");
    } else {
        var tabs = $(this).attr("data-tabs");
        $(this).parents(".tabs").find(".tabs__item").removeClass("tabs__item_active");
        $(this).addClass("tabs__item_active");
        $(this).parents(".tabs").find(".tabs__content").removeClass("tabs__content_active");
        setTimeout(() => {
            $(this).parents(".tabs").find(".tabs__content[data-tabs='" + tabs + "']").addClass("tabs__content_active");
        }, 500);
    }
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

// Mobile menu

$(document).on("click", ".header-mobile__btn", function(){
    $(".header").addClass("header_active");
});

$(document).on("click", ".header__btn", function(){
    $(".header").removeClass("header_active");
    $(".header__language").removeClass("header__language_active");
    $(".menu-item-has-children").removeClass("menu-item-has-children_visible");
});

if($(window).width() <= 992){
    $(document).on("click", ".menu-item-has-children a", function(e){
        e.stopPropagation();
        e.preventDefault(); 
        window.location.href = $(this).attr('href');
    });
    $(document).on("click", ".menu-item-has-children", function(e){
        e.stopPropagation();
        e.preventDefault(); 
        $(this).toggleClass("menu-item-has-children_visible");
        $(".header__language").removeClass("header__language_active");
    });

    $(document).on("click", ".header__language", function(){
        $(this).toggleClass("header__language_active");
    });
}

// Call callback modal
$(document).on("click", ".call-modal-callback", function(){
    $(".header").removeClass("header_active");
    $(".menu-item-has-children").removeClass("menu-item-has-children_active");
    callModal("#modal-callback", false, false);
});

// Hide callback modal
$(document).on("click", ".modal-callback .modal-callback__close", function(){
    callModal("#modal-callback", false, true);
});

// Head slider
$('.head__slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 6000
});

// Popular items slider

if($(window).width() <= 576){
    $('.popular__slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 6000
    });
}

// Installed items slider
$('.installed__slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    prevArrow: $('.installed__prev'),
    nextArrow: $('.installed__next'),
    asNavFor: '.installed__details-slider',
    responsive: [
        {
          breakpoint: 576,
          settings: {
            dots: false
          }
        }
      ]
});

$('.installed__slider-mob').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    nextArrow: $('.installed__next-mob'),
    asNavFor: '.installed__details-slider'
});

$('.installed__details-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    asNavFor: '.installed__slider',
    speed: 500,
    fade: true,
    cssEase: 'linear',
    responsive: [
        {
          breakpoint: 576,
          settings: {
            dots: true
          }
        }
      ]
});

// Reviews slider
$('.reviews__slider').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    responsive: [
        {
          breakpoint: 576,
          settings: {
            dots: true,
            slidesToShow: 1
          }
        }
      ]
});

// Materials slider
if($(window).width() <= 576){
    $('.materials__grid').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 6000
    });
}

// Price range selector
$( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 13000,
      max: 50000,
      values: [ 13000, 50000 ],
      slide: function( event, ui ) {
        $( "#filterPrice1" ).val( ui.values[ 0 ] + "$");
        $( "#filterPrice2" ).val( ui.values[ 1 ] + "$" );
      }
    });
    $( "#filterPrice1" ).val( $( "#slider-range" ).slider( "values", 0 ) + "$");
    $( "#filterPrice2" ).val( $( "#slider-range" ).slider( "values", 1 ) + "$" );
  } );

  $( function() {
    $( "#slider-range1" ).slider({
      range: true,
      min: 13000,
      max: 50000,
      values: [ 13000, 50000 ],
      slide: function( event, ui ) {
        $( "#filterPrice1-1" ).val( ui.values[ 0 ] + "$");
        $( "#filterPrice1-2" ).val( ui.values[ 1 ] + "$" );
      }
    });
    $( "#filterPrice1-1" ).val( $( "#slider-range1" ).slider( "values", 0 ) + "$");
    $( "#filterPrice1-2" ).val( $( "#slider-range1" ).slider( "values", 1 ) + "$" );
  } );

// Sort
$(".category__sort-toggler").click(function(){
    $(".category__sort-body").toggleClass("category__sort-body_active");
});

$(".category__sort .checkbox").click(function(){
    $(".category__sort .checkbox").removeClass("checkbox_active");
    $(this).addClass("checkbox_active");
});

// Advice slider
if($(window).width() <= 576){
    $('.advice__row').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 6000
    });
}

// House slider
$('.house__slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    fade: true,
    asNavFor: '.house__navigation',
    responsive: [
        {
            breakpoint: 576,
            settings: {
                dots: false
            }
        }
    ]
});

$('.house__navigation').slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    asNavFor: '.house__slider',
    dots: false,
    arrows: false,
    focusOnSelect: true,
    responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 5,
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 3
          }
        }
      ]
});

// Plan slider
$('.plan__slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    fade: true,
    prevArrow: $('.plan__prev'),
    nextArrow: $('.plan__next'),
    responsive: [
        {
          breakpoint: 576,
          settings: {
            dots: true,
            arrows: false
          }
        }
      ]
});

// Interior slider
$('.interior__slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    fade: true,
    asNavFor: '.interior__navigation',
    responsive: [
        {
            breakpoint: 576,
            settings: {
                dots: false
            }
        }
    ]
});

$('.interior__navigation').slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    asNavFor: '.interior__slider',
    dots: false,
    arrows: false,
    focusOnSelect: true,
    responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 5,
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 3
          }
        }
      ]
});

// Features slider
if($(window).width() <= 576){
    $('.features__grid').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 6000
    });
}

// Video preloader
$(document).on("click", ".overview__play", function(){
    var videoId = $(this).attr("data-video");
    $(this).parents(".overview__video").addClass("overview__video_active");
    $(this).parents(".overview__video").find("iframe").attr("src", "https://www.youtube.com/embed/" + videoId + "?rel=0&amp;showinfo=0");
});

// Recommended slider
if($(window).width() <= 576){
    $('.recommended__row').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true
    });
}

// Scroll to top button
$(window).scroll(function() {    
    if ($(window).scrollTop() > 1000) {
        $(".scroll-top").fadeIn();
    } else {
        $(".scroll-top").fadeOut();
    }
});

var $root = $('html, body');

    $('.scroll-top').click(function() {
        var href = $.attr(this, 'href');

        $root.animate({
            scrollTop: $(href).offset().top
        }, 500, function () {
            
        });

        return false;
    });

// Blog tags
$(document).on("click", ".blog__mark", function(){
    $(this).toggleClass("blog__mark_checked");
});

// Expert's certificates slider
$('.certificates__slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    responsive: [
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
          }
        }
      ]
});

// Articles slider
if($(window).width() <= 576){
    $('.related__section_fourth .related__row').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 6000
    });
}

// Production slider
$('.production__slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: true
});

})(jQuery);