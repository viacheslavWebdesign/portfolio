(function($){
   
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

$(document).on("mouseenter", ".header__language-current", function(){
      $(".header__language").addClass("header__language_active");
});

$(document).on("mouseleave", ".header__language", function(){
      $(".header__language").removeClass("header__language_active");
});

$(document).on("click", ".menu__list li.menu-item-has-children", function(){
      $(this).toggleClass("active");
});

$(document).on("click", ".header__menu-toggler", function(){
      $(".menu").toggleClass("menu_active");
      // $(".kmnd-body").toggleClass("kmnd-body_noscroll");
      $(".header-shadow").toggleClass("header-shadow_active");
});

$(document).on("click", ".menu__close, .header-shadow", function(){
      $(".menu").removeClass("menu_active");
      $(".kmnd-body").removeClass("kmnd-body_noscroll");
      $(".header-shadow").removeClass("header-shadow_active");
      $(".menu__list li.menu-item-has-children").removeClass("active");
});

$('.btn-top').click(function() {
      $('html, body').animate({scrollTop:0}, 'slow');
      return false;
});

$(window).scroll(function() {    
    if ($(window).scrollTop() > 1000) {
        $(".btn-top").fadeIn();
    } else {
      $(".btn-top").fadeOut();
    }
});

if ($('.ticker__slider').length > 0) {
      const swiper = new Swiper('.ticker__slider', {
            slidesPerView: "auto",
            spaceBetween: 0,
            loop: true,
            speed: 5000,
            autoplay: {
                  delay: 0,
                  disableOnInteraction: false,
            },
      });
}

$(document).on("click", ".faq__head", function(){
      if ($(this).parent().hasClass("faq__item_active")){
            $(this).parent().removeClass("faq__item_active");
      } else {
            $(".faq__item").removeClass("faq__item_active");
            $(this).parent().addClass("faq__item_active");
      }
});

$("input[type='phone']").inputmask("+99(999)999-99-99", {showMaskOnHover: false});

$.fn.isInViewport = function () {
    let elementTop = $(this).offset().top;
    let elementBottom = elementTop + $(this).outerHeight();

    let viewportTop = $(window).scrollTop();
    let viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
};

if ($(".counter-indicator").length){
    var a = 0;
    $(window).scroll(function() {

      var oTop = $('.counter-indicator').offset().top - window.innerHeight;
      if (a == 0 && $(window).scrollTop() > oTop) {
        $('.counter-value').each(function() {
          var $this = $(this),
            countTo = $this.attr('data-count');
          $({
            countNum: $this.text()
          }).animate({
              countNum: countTo
            },

            {

              duration: 2000,
              easing: 'swing',
              step: function() {
                $this.text(Math.floor(this.countNum));
              },
              complete: function() {
                $this.text(this.countNum);
              }

            });
        });
        a = 1;
      }

    });
}

$('.object__nav-item').on('click', function() {
      $('.object__nav-item').removeClass('object__nav-item_active');
      $('.object__content').removeClass('object__content_active');
      var dataObject = $(this).data('object');
      $(this).addClass('object__nav-item_active');
      $('.object__content[data-object="' + dataObject + '"]').addClass('object__content_active');
});

if ($('.reviews__slider').length > 0) {
      const swiper = new Swiper('.reviews__slider', {
            slidesPerView: "1",
            loop: true,
            autoplay: {
                  delay: 5000,
            },
            navigation: {
                  nextEl: ".reviews__slider-btn_next",
                  prevEl: ".reviews__slider-btn_prev",
            },
            breakpoints: {
                  577: {
                        slidesPerView: "3",
                  }
            }
      });
}

$('.scrollto').click(function() {
      var href = $.attr(this, 'href');

      $('html, body').animate({
      scrollTop: $(href).offset().top - 85
      }, 500, function () {
      
      });

      return false;
});

if ($('.properties__slider').length > 0) {
      const swiper = new Swiper('.properties__slider', {
            slidesPerView: "1",
            loop: true,
            spaceBetween: 0,
            autoplay: {
                  delay: 5000,
            },
            breakpoints: {
                  577: {
                        spaceBetween: 30,
                        slidesPerView: "3",
                  },
                  1200: {
                        spaceBetween: 30,
                        slidesPerView: "4",
                  }
            }
      });
}

if ($('.articles__grid').length > 0 && $(window).width() > 576) {
      var masonryArticles = $('.articles__grid');
      masonryArticles.imagesLoaded()
      .done(function(){
            masonryArticles.masonry({
                  itemSelector: '.articles__col',
                  percentPosition: true,
                  gutter: 30
            });
      });
}

$(document).on("click", ".modal-cookie__close", function(){
      $(".modal-cookie").fadeOut();
});

$(document).on("click", ".call-modal-success", function(){
      $(".modal-success").addClass("modal-success_active");
});

$(document).on("click", ".modal-success__close", function(){
      $(".modal-success").removeClass("modal-success_active");
});

$(document).ready(function(){
      var $img = $('.object-heading__inner img');
      $(window).on('scroll', function() {
          var scrollTop = $(this).scrollTop();
          $img.css('top', (scrollTop / 7) + 'px');
      });
  });

$(document).on("click", ".call-modal-request", function(){
      $(".kmnd-body").addClass("kmnd-body_noscroll");
      $(".modal-shadow").addClass("modal-shadow_active");
      $(".modal-request").addClass("modal-request_active");
});

$(document).on("click", ".modal-request__close", function(){
      $(".kmnd-body").removeClass("kmnd-body_noscroll");
      $(".modal-shadow").removeClass("modal-shadow_active");
      $(".modal-request").removeClass("modal-request_active");
});

$(document).mouseup(function(e){
      if ($(".modal-request").hasClass("modal-request_active")){
          var container = $(".modal-request__body");
          if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".kmnd-body").removeClass("kmnd-body_noscroll");
            $(".modal-shadow").removeClass("modal-shadow_active");
            $(".modal-request").removeClass("modal-request_active");
          }
      }
  });

})(jQuery);