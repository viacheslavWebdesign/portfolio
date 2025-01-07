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
            $(".letsmake-body").removeClass("letsmake-body_noscroll");
        }, 250);
    } else {
        $(".letsmake-body").addClass("letsmake-body_noscroll");
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
                $(".letsmake-body").removeClass("letsmake-body_noscroll");
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

// Language selector

$(document).on("click", ".lang__item_current", function(e){
    e.preventDefault();
    if ($(this).parents(".lang").hasClass("lang_active")){
        $(".lang").removeClass("lang_active");
    } else if (!$(this).parents(".lang").hasClass("lang_active")){
        $(".lang").addClass("lang_active");
    }
});

$(document).mouseup(function(e){
    if ($(".lang").hasClass("lang_active")){
        var container = $(".lang ul");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".lang").removeClass("lang_active");
        }
    }
});

// Open/close menu

$(document).on("click", ".header__btn", function(){
    $(".header").toggleClass("header_active");
    $(".letsmake-body").toggleClass("letsmake-body_noscroll");
});

// Main page - animation on scroll

// $(document).bind('mousemove',function(e){ 
//     console.log("e.pageX: " + e.pageX + ", e.pageY: " + e.pageY);
// }); 

// if($(window).width() > 992 && $("main").hasClass("main")){
//     if ($('.info__text').length > 0){
//         $('.info__text').transe(
//             {
//                 0:{
//                     bottom: '-100px'
//                 },
//                 600:{
//                     bottom: '0px'
//                 },
//                 900:{
//                     bottom: '0px'
//                 },
//                 1200:{
//                     bottom: '200px'
//                 }
//             }
//         )
//     }
//     if ($('.info__img').length > 0){
//         $('.info__img').transe(
//             {
//                 0:{
//                     opacity: '0',
//                     right: '-200px'
//                 },
//                 600:{
//                     opacity: '1',
//                     right: '0px'
//                 },
//                 900:{
//                     bottom: '0px'
//                 },
//                 1200:{
//                     bottom: '100px'
//                 }
//             }
//         )
//     }
//     if ($('.quote__position').length > 0){
//         $('.quote__position').transe(
//             {
//                 800:{
//                     bottom: '-50px'
//                 },
//                 1200:{
//                     bottom: '0px'
//                 }
//             }
//         )
//     }
//     if ($('.quote__donate').length > 0){
//         $('.quote__donate').transe(
//             {
//                 800:{
//                     bottom: '-50px'
//                 },
//                 1200:{
//                     bottom: '0px'
//                 }
//             }
//         )
//     }
//     if ($('.quote__block').length > 0){
//         $('.quote__block').transe(
//             {
//                 1300:{
//                     top: '0px'
//                 },
//                 1700:{
//                     top: '-150px'
//                 }
//             }
//         )
//     }
//     if ($('.center__title-1').length > 0){
//         $('.center__title-1').transe(
//             {
//                 1300:{
//                     left: '-100px',
//                     opacity: '0'
//                 },
//                 1700:{
//                     left: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.center__title-2').length > 0){
//         $('.center__title-2').transe(
//             {
//                 1300:{
//                     left: '-200px',
//                     opacity: '0'
//                 },
//                 1700:{
//                     left: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.center__join').length > 0){
//         $('.center__join').transe(
//             {
//                 1300:{
//                     right: '-50px',
//                     opacity: '0'
//                 },
//                 1700:{
//                     right: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.center__img').length > 0){
//         $('.center__img').transe(
//             {
//                 1300:{
//                     bottom: '-200px'
//                 },
//                 1800:{
//                     bottom: '0px'
//                 }
//             }
//         )
//     }
//     if ($('.center__text').length > 0){
//         $('.center__text').transe(
//             {
//                 1300:{
//                     bottom: '-100px'
//                 },
//                 1800:{
//                     bottom: '0px'
//                 }
//             }
//         )
//     }
//     if ($('.center__stats-item-1').length > 0){
//         $('.center__stats-item-1').transe(
//             {
//                 1300:{
//                     right: '-50px',
//                     opacity: '0'
//                 },
//                 1700:{
//                     right: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.center__stats-item-2').length > 0){
//         $('.center__stats-item-2').transe(
//             {
//                 1350:{
//                     right: '-100px',
//                     opacity: '0'
//                 },
//                 1750:{
//                     right: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.center__stats-item-3').length > 0){
//         $('.center__stats-item-3').transe(
//             {
//                 1400:{
//                     right: '-150px',
//                     opacity: '0'
//                 },
//                 1800:{
//                     right: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.center__facts-text-slider-wrapper').length > 0){
//         $('.center__facts-text-slider-wrapper').transe(
//             {
//                 1600:{
//                     right: '-100px'
//                 },
//                 2000:{
//                     right: '0px'
//                 }
//             }
//         )
//     }
//     if ($('.center__facts-carousel-wrapper').length > 0){
//         $('.center__facts-carousel-wrapper').transe(
//             {
//                 1600:{
//                     bottom: '-100px'
//                 },
//                 2000:{
//                     bottom: '0px'
//                 }
//             }
//         )
//     }
//     if ($('.heading__content_video').length > 0){
//         $('.heading__content_video').transe(
//             {
//                 1800:{
//                     left: '-200px',
//                     opacity: '0'
//                 },
//                 2400:{
//                     left: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.divider_video').length > 0){
//         $('.divider_video').transe(
//             {
//                 1800:{
//                     left: '-200px',
//                     opacity: '0'
//                 },
//                 2400:{
//                     left: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.heading__btn_video').length > 0){
//         $('.heading__btn_video').transe(
//             {
//                 1800:{
//                     right: '-200px',
//                     opacity: '0'
//                 },
//                 2400:{
//                     right: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.video__wrapper').length > 0){
//         $('.video__wrapper').transe(
//             {
//                 1400:{
//                     right: '-500px',
//                     opacity: '0'
//                 },
//                 2400:{
//                     right: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.heading__content_media').length > 0){
//         $('.heading__content_media').transe(
//             {
//                 2400:{
//                     left: '-200px',
//                     opacity: '0'
//                 },
//                 3000:{
//                     left: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.divider_media').length > 0){
//         $('.divider_media').transe(
//             {
//                 2400:{
//                     left: '-200px',
//                     opacity: '0'
//                 },
//                 3000:{
//                     left: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.heading__btn_media').length > 0){
//         $('.heading__btn_media').transe(
//             {
//                 2400:{
//                     right: '-200px',
//                     opacity: '0'
//                 },
//                 3000:{
//                     right: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.heading__content_team1').length > 0){
//         $('.heading__content_team1').transe(
//             {
//                 3100:{
//                     left: '-200px',
//                     opacity: '0'
//                 },
//                 3700:{
//                     left: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.divider_team1').length > 0){
//         $('.divider_team1').transe(
//             {
//                 3100:{
//                     left: '-200px',
//                     opacity: '0'
//                 },
//                 3700:{
//                     left: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.team__wrapper1').length > 0){
//         $('.team__wrapper1').transe(
//             {
//                 2800:{
//                     right: '-500px',
//                     opacity: '0'
//                 },
//                 4000:{
//                     right: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }

//     if ($('.heading__content_team2').length > 0){
//         $('.heading__content_team2').transe(
//             {
//                 3900:{
//                     left: '-200px',
//                     opacity: '0'
//                 },
//                 4500:{
//                     left: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.divider_team2').length > 0){
//         $('.divider_team2').transe(
//             {
//                 3900:{
//                     left: '-200px',
//                     opacity: '0'
//                 },
//                 4500:{
//                     left: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.team__wrapper2').length > 0){
//         $('.team__wrapper2').transe(
//             {
//                 3600:{
//                     right: '-500px',
//                     opacity: '0'
//                 },
//                 4800:{
//                     right: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }

//     if ($('.heading__content_team3').length > 0){
//         $('.heading__content_team3').transe(
//             {
//                 4800:{
//                     left: '-200px',
//                     opacity: '0'
//                 },
//                 5400:{
//                     left: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.divider_team3').length > 0){
//         $('.divider_team3').transe(
//             {
//                 4600:{
//                     left: '-200px',
//                     opacity: '0'
//                 },
//                 5200:{
//                     left: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.team__wrapper3').length > 0){
//         $('.team__wrapper3').transe(
//             {
//                 4900:{
//                     right: '-500px',
//                     opacity: '0'
//                 },
//                 5600:{
//                     right: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }

//     if ($('.heading__content_team4').length > 0){
//         $('.heading__content_team4').transe(
//             {
//                 5400:{
//                     left: '-200px',
//                     opacity: '0'
//                 },
//                 6000:{
//                     left: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.divider_team4').length > 0){
//         $('.divider_team4').transe(
//             {
//                 5400:{
//                     left: '-200px',
//                     opacity: '0'
//                 },
//                 6000:{
//                     left: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.team__wrapper4').length > 0){
//         $('.team__wrapper4').transe(
//             {
//                 5600:{
//                     right: '-500px',
//                     opacity: '0'
//                 },
//                 6300:{
//                     right: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }

//     if ($('.heading__content_donation').length > 0){
//         $('.heading__content_donation').transe(
//             {
//                 6400:{
//                     left: '-200px',
//                     opacity: '0'
//                 },
//                 7000:{
//                     left: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.divider_donation').length > 0){
//         $('.divider_donation').transe(
//             {
//                 6400:{
//                     left: '-200px',
//                     opacity: '0'
//                 },
//                 7000:{
//                     left: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.donation__text').length > 0){
//         $('.donation__text').transe(
//             {
//                 6450:{
//                     left: '-200px',
//                     opacity: '0'
//                 },
//                 7050:{
//                     left: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.donation__accordion .accordion:nth-of-type(1)').length > 0){
//         $('.donation__accordion .accordion:nth-of-type(1)').transe(
//             {
//                 7100:{
//                     left: '-200px',
//                     opacity: '0'
//                 },
//                 7600:{
//                     left: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.donation__accordion .accordion:nth-of-type(2)').length > 0){
//         $('.donation__accordion .accordion:nth-of-type(2)').transe(
//             {
//                 7150:{
//                     right: '-200px',
//                     opacity: '0'
//                 },
//                 7650:{
//                     right: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.donation__accordion .accordion:nth-of-type(3)').length > 0){
//         $('.donation__accordion .accordion:nth-of-type(3)').transe(
//             {
//                 7200:{
//                     left: '-200px',
//                     opacity: '0'
//                 },
//                 7700:{
//                     left: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }

//     if ($('.heading__content_partners').length > 0){
//         $('.heading__content_partners').transe(
//             {
//                 6900:{
//                     left: '-200px',
//                     opacity: '0'
//                 },
//                 7500:{
//                     left: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.divider_partners').length > 0){
//         $('.divider_partners').transe(
//             {
//                 6900:{
//                     left: '-200px',
//                     opacity: '0'
//                 },
//                 7500:{
//                     left: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.footer__col_left').length > 0){
//         $('.footer__col_left').transe(
//             {
//                 7400:{
//                     left: '-100px',
//                     opacity: '0'
//                 },
//                 8000:{
//                     left: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.footer__col_right').length > 0){
//         $('.footer__col_right').transe(
//             {
//                 7400:{
//                     right: '-100px',
//                     opacity: '0'
//                 },
//                 8000:{
//                     right: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
//     if ($('.footer__bottom').length > 0){
//         $('.footer__bottom').transe(
//             {
//                 7400:{
//                     bottom: '-50px',
//                     opacity: '0'
//                 },
//                 8000:{
//                     bottom: '0px',
//                     opacity: '1'
//                 }
//             }
//         )
//     }
// }

// Center slider

$('.center__facts-carousel').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    fade: true,
    asNavFor: '.center__facts-text-slider',
    speed: 1000,
    infinite: true,
    autoplay: false,
    nextArrow: $('.center__facts-btn'),
    prevArrow: null
  });
  $('.center__facts-text-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.center__facts-carousel',
    arrows: false,
    dots: true,
    fade: true,
    speed: 1000,
    infinite: true,
    autoplay: false
  });

// Video slider

$('.video__slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: false,
    speed: 1000,
    infinite: true,
    autoplay: false,
    pauseOnFocus: false,
    pauseOnHover: true,
    autoplaySpeed: 4000,
    responsive: [
      {
        breakpoint: 576,
        settings: "unslick"
      }
    ]
  });

// Team slider
$('.team__slider').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: false,
    speed: 1000,
    infinite: true,
    autoplay: false,
    autoplaySpeed: 4000,
    pauseOnFocus: false,
    pauseOnHover: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 4
        }
      },
      {
        breakpoint: 576,
        settings: {
            slidesToShow: 2
        }
      }
    ]
  });

// Input additional prompt
$(document).on("input", "input", function(){
    if ($(this).val()){
        $(this).parent(".input").addClass("input_hasvalue");
    } else {
        $(this).parent(".input").removeClass("input_hasvalue");
    }
});

$(document).on("input", "textarea", function(){
    if ($(this).val()){
        $(this).parent(".textarea").addClass("textarea_hasvalue");
    } else {
        $(this).parent(".textarea").removeClass("textarea_hasvalue");
    }
});

$(document).on("change", "select", function(){
    $(this).parent(".select").addClass("select_hasvalue");
});

// Custom input file
$(document).on("change", ".file input", function(){
    $(this).siblings("label").find("span").text($(this)[0].files[0].name);
    $(this).siblings("label").find("svg").remove();
});

// Single slider
$('.single__slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: false,
    speed: 1000,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
    pauseOnFocus: false,
    pauseOnHover: true,
    responsive: [
      {
        breakpoint: 576,
        settings: {
            slidesToShow: 1,
            centerMode: true
        }
      }
    ]
  });

// Blog slider

$('.news__slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: false,
    speed: 1000,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
    pauseOnFocus: false,
    pauseOnHover: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 576,
        settings: "unslick"
      }
    ]
  });

// Viewport animation

new WOW().init();

// Team tabs
$(document).on("click", ".team__section .heading__opener", function(){
    $(this).parents(".team__section").toggleClass("team__section_active");
});

})(jQuery);