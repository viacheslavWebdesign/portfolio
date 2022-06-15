(function($){

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $(".header").addClass("header-colored");
    } else {
        $(".header").removeClass("header-colored");
    }
});

var $root = $('html, body');

    $('.scroll').click(function() {
        var href = $.attr(this, 'href');

        $root.animate({
            scrollTop: $(href).offset().top
        }, 500, function () {
            
        });
        $("body").removeClass("noscroll");
        $(".header-mobile").removeClass("active");
        setTimeout(function(){
            $(".modal-shadow").fadeOut(300);
        },300);
        return false;
    });

new WOW().init();

$(".btn-menu").click(function(){
    $("body").addClass("noscroll");
    $(".modal-shadow").fadeIn(300);
    setTimeout(function(){
        $(".header-mobile").addClass("active");
    },300);
});

$(".btn-menu-close").click(function(){
    $("body").removeClass("noscroll");
    $(".header-mobile").removeClass("active");
    setTimeout(function(){
        $(".modal-shadow").fadeOut(300);
    },300);
});

$(".header-mobile .call-modal-contact").click(function(){
    $(".header-mobile").removeClass("active");
});

if($(window).width() <= 992) {
    $("brands__item.show-desktop").remove();
}

$('.brands__slider-desktop').slick({
    rows: 3,
    slidesToShow: 5,
    slidesToScroll: 5,
    infinite: true,
    autoplay: true,
    dots: false,
    autoplaySpeed: 3000,
    speed: 3000,
    cssEase: 'ease',
    prevArrow: $('.slider-nav-desktop .slider-prev'),
    nextArrow: $('.slider-nav-desktop .slider-next')
});

$('.brands__slider-mobile').slick({
    rows: 3,
    slidesToShow: 2,
    slidesToScroll: 2,
    infinite: true,
    autoplay: true,
    dots: false,
    autoplaySpeed: 3000,
    speed: 2000,
    cssEase: 'ease',
    prevArrow: $('.slider-nav-mobile .slider-prev'),
    nextArrow: $('.slider-nav-mobile .slider-next')
});

$(".validate").validate({
  rules: {
    name: "required",
    phone: "required",
    email: "required",
  },
  messages: {
    name: "будь ласка, заповніть дані",
    phone: "будь ласка, заповніть дані",
    email: "будь ласка, заповніть дані"
  },
  submitHandler: function(form) {
    $.ajax({
        type: "POST",
        url: "/mail.php",
        data: $("#form").serialize()
    }).done(function() {
        $("#form").trigger("reset");
        $(".modal-success").addClass("active");
    });
  }
});

$(".validate1").validate({
  rules: {
    name: "required",
    phone: "required",
    email: "required",
  },
  messages: {
    name: "будь ласка, заповніть дані",
    phone: "будь ласка, заповніть дані",
    email: "будь ласка, заповніть дані"
  },
  submitHandler: function(form) {
    $.ajax({
        type: "POST",
        url: "/mail.php",
        data: $(this).serialize()
    }).done(function() {
        $("#form1").trigger("reset");
        $('.modal-contact').removeClass("active");
        setTimeout(function(){
            $(".modal-success").addClass("active");
        },300);
    });
  }
});

$(".call-modal-contact").click(function(){
    $("body").addClass("noscroll");
    $(".modal-shadow").fadeIn(300);
    setTimeout(function(){
        $(".modal-contact").addClass("active");
    },300);
});

$(".btn-modal-close").click(function(){
    $("body").removeClass("noscroll");
    $(".modal-contact").removeClass("active");
    $(".modal-success").removeClass("active");
    setTimeout(function(){
        $(".modal-shadow").fadeOut(300);
    },300);
});

// function hasTouch() {
//     return 'ontouchstart' in document.documentElement
//            || navigator.maxTouchPoints > 0
//            || navigator.msMaxTouchPoints > 0;
// }

// if (hasTouch()) {
//     try {
//         for (var si in document.styleSheets) {
//             var styleSheet = document.styleSheets[si];
//             if (!styleSheet.rules) continue;

//             for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
//                 if (!styleSheet.rules[ri].selectorText) continue;

//                 if (styleSheet.rules[ri].selectorText.match(':hover')) {
//                     styleSheet.deleteRule(ri);
//                 }
//             }
//         }
//     } catch (ex) {}
// }

})(jQuery);