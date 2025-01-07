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

$(document).on("click", ".header__location-toggler", function(){
      if($(window).width() <= 992){
        $(".header__location").toggleClass("header__location_active");
        $(".header__location-content").fadeToggle();
        $(".modal-invisible-shadow").toggleClass("modal-invisible-shadow_active");
        $(".header__worktime").removeClass("header__worktime_active");
        $(".header__worktime-content").fadeOut();
        $(".header__phones").removeClass("header__phones_active");
        $(".header__phones-content").fadeOut();
        $(".header__mobile-menu").fadeOut();
        $(".header__cart-holder").fadeOut();
        $(".header__cart-toggler").removeClass("header__cart-toggler_active");
        $(".header__btn").removeClass("header__btn_active");
      }
});

$(document).mouseup(function(e){
      if ($(".header__location").hasClass("header__location_active") && $(window).width() <= 992){
            var container = $(".header__location");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                  $(".header__location").removeClass("header__location_active");
                  $(".header__location-content").fadeOut();
                  $(".modal-invisible-shadow").removeClass("modal-invisible-shadow_active");
            }
      }
});

$(document).on("click", ".header__worktime-toggler", function(){
      if($(window).width() <= 992){
        $(".header__worktime").toggleClass("header__worktime_active");
        $(".header__worktime-content").fadeToggle();
        $(".modal-invisible-shadow").toggleClass("modal-invisible-shadow_active");
        $(".header__location").removeClass("header__location_active");
        $(".header__location-content").fadeOut();
        $(".header__phones").removeClass("header__phones_active");
        $(".header__phones-content").fadeOut();
        $(".header__mobile-menu").fadeOut();
        $(".header__cart-holder").fadeOut();
        $(".header__cart-toggler").removeClass("header__cart-toggler_active");
        $(".header__btn").removeClass("header__btn_active");
      }
});

$(document).mouseup(function(e){
      if ($(".header__worktime").hasClass("header__worktime_active") && $(window).width() <= 992){
            var container = $(".header__worktime");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                  $(".header__worktime").removeClass("header__worktime_active");
                  $(".header__worktime-content").fadeOut();
                  $(".modal-invisible-shadow").removeClass("modal-invisible-shadow_active");
            }
      }
});



$(document).on("click", ".header__phones-toggler", function(){
      if($(window).width() <= 992){
        $(".header__phones").toggleClass("header__phones_active");
        $(".modal-invisible-shadow").toggleClass("modal-invisible-shadow_active");
        $(".header__phones-content").fadeToggle();
        $(".header__location").removeClass("header__location_active");
        $(".header__location-content").fadeOut();
        $(".header__worktime").removeClass("header__worktime_active");
        $(".header__worktime-content").fadeOut();
        $(".header__mobile-menu").fadeOut();
        $(".header__cart-holder").fadeOut();
        $(".header__cart-toggler").removeClass("header__cart-toggler_active");
        $(".header__btn").removeClass("header__btn_active");
      }
});

$(document).mouseup(function(e){
      if ($(".header__phones").hasClass("header__phones_active") && $(window).width() <= 992){
            var container = $(".header__phones");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                  $(".header__phones").removeClass("header__phones_active");
                  $(".header__phones-content").fadeOut();
                  $(".modal-invisible-shadow").removeClass("modal-invisible-shadow_active");
            }
      }
});

$(document).on("click", ".header__btn", function(){
      if($(window).width() <= 992){
        $(".header__phones").removeClass("header__phones_active");
        $(".header__phones-content").fadeOut();
        $(".header__location").removeClass("header__location_active");
        $(".header__location-content").fadeOut();
        $(".header__worktime").removeClass("header__worktime_active");
        $(".header__worktime-content").fadeOut();
        $(".header__cart-holder").fadeOut();
        if ($(".header__btn").hasClass("header__btn_active")){
            $(".header__btn").removeClass("header__btn_active");
            $(".header__cart-toggler").removeClass("header__cart-toggler_active");
            $(".header__mobile-menu").fadeOut();
            $(".header__cart-holder").fadeOut();
        } else {
            $(".header__btn").addClass("header__btn_active");
            $(".header__mobile-menu").fadeIn();
        }
      }
});

$(document).on("click", ".header__mobile-menu-shadow", function(){
      if($(window).width() <= 992){
        $(".header__mobile-menu").fadeOut();
        $(".header__btn").removeClass("header__btn_active");
      }
});

$(document).on("click", ".header__cart-toggler", function(){
      if($(window).width() <= 992){
        $(".header__mobile-menu").fadeOut();
        $(".header__phones").removeClass("header__phones_active");
        $(".header__phones-content").fadeOut();
        $(".header__location").removeClass("header__location_active");
        $(".header__location-content").fadeOut();
        $(".header__worktime").removeClass("header__worktime_active");
        $(".header__worktime-content").fadeOut();
        if ($(".header__cart-toggler").hasClass("header__cart-toggler_active")){
            $(".header__cart-toggler").removeClass("header__cart-toggler_active");
            $(".header__btn").removeClass("header__btn_active");
            $(".header__cart-holder").fadeOut();
        } else {
            $(".header__cart-toggler").addClass("header__cart-toggler_active");
            $(".header__btn").addClass("header__btn_active");
            $(".header__cart-holder").fadeIn();
        }
      }
});

$(document).on("click", ".header__cart-shadow", function(){
      if($(window).width() <= 992){
        $(".header__cart-holder").fadeOut();
        $(".header__btn").removeClass("header__btn_active");
        $(".header__cart-toggler").removeClass("header__cart-toggler_active");
      }
});

$(document).on("click", ".header__location-toggler", function(){
      if($(window).width() > 992){
        $(".header__location-content").toggleClass("header__location-content_active");
      }
});

$(document).mouseup(function(e){
      if ($(".header__location-content").hasClass("header__location-content_active") && $(window).width() > 992){
            var container = $(".header__location");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                  $(".header__location-content").removeClass("header__location-content_active");
            }
      }
});

$(document).on("click", ".header__language-toggler", function(){
      if($(window).width() > 992){
        $(".header__language-content").toggleClass("header__language-content_active");
      }
});

$(document).mouseup(function(e){
      if ($(".header__language-content").hasClass("header__language-content_active") && $(window).width() > 992){
            var container = $(".header__language");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                  $(".header__language-content").removeClass("header__language-content_active");
            }
      }
});

$(document).on("click", ".header__phones-toggler", function(){
      if($(window).width() > 992 && $(window).width() < 1152){
        $(".header__phones-content").toggleClass("header__phones-content_active");
      }
});

$(document).mouseup(function(e){
      if ($(".header__phones-content").hasClass("header__phones-content_active") && $(window).width() > 992 && $(window).width() <= 1728){
            var container = $(".header__phones");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                  $(".header__phones-content").removeClass("header__phones-content_active");
            }
      }
});

$(document).on("click", ".header__worktime-toggler", function(){
      if($(window).width() > 992 && $(window).width() < 1440){
        $(".header__worktime-content").toggleClass("header__worktime-content_active");
      }
});

$(document).mouseup(function(e){
      if ($(".header__worktime-content").hasClass("header__worktime-content_active") && $(window).width() > 992 && $(window).width() <= 1728){
            var container = $(".header__worktime");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                  $(".header__worktime-content").removeClass("header__worktime-content_active");
            }
      }
});

$(document).on("click", ".header__btn", function(){
      if($(window).width() > 992 && $(window).width() <= 1728){
        $(".header__mobile-menu").toggleClass("header__mobile-menu_active");
        $(".header__btn").toggleClass("header__btn_active");
      }
});

$(document).mouseup(function(e){
      if ($(".header__mobile-menu").hasClass("header__mobile-menu_active") && $(window).width() > 992 && $(window).width() <= 1728){
            var container = $(".header__mobile-menu, .header__btn");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                  $(".header__mobile-menu").removeClass("header__mobile-menu_active");
                  $(".header__btn").removeClass("header__btn_active");
            }
      }
});

$(document).on("click", ".header__cart-toggler", function(){
      if($(window).width() > 992){
        $(".header__cart-holder").toggleClass("header__cart-holder_active");
      }
});

$(document).mouseup(function(e){
      if ($(".header__cart-holder").hasClass("header__cart-holder_active") && $(window).width() > 992){
            var container = $(".header__cart");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                  $(".header__cart-holder").removeClass("header__cart-holder_active");
            }
      }
});

function callModal(id, hide_other_window, toggle){
      if (hide_other_window == true){
            $(".modal").removeClass("modal_active");
      }
      if (toggle == true){
            $(id).removeClass("modal_active");
            $(".modal-shadow").fadeOut();
            $(".kmnd-body").removeClass("kmnd-body_noscroll");
      } else {
            $(".kmnd-body").addClass("kmnd-body_noscroll");
            $(".modal-shadow").fadeIn();
            $(id).addClass("modal_active");
      }
}

$(document).mouseup(function(e){
      if ($(".modal").hasClass("modal_active")){
            var container = $(".modal__body");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                  $(".modal").removeClass("modal_active");
                  $(".modal-shadow").fadeOut();
                  $(".kmnd-body").removeClass("kmnd-body_noscroll");
            }
      }
});

$(document).on("click", ".modal__close", function(){
      $(".modal").removeClass("modal_active");
      $(".modal-shadow").fadeOut();
      $(".kmnd-body").removeClass("kmnd-body_noscroll");
});

$(".calc__btn_minus").on("click", function () {
      var inputElement = $(this).siblings(".calc__value");
      var currentValue = parseInt(inputElement.val());
      if (currentValue > 0) {
            inputElement.val(currentValue - 1);
      }
});
$(".calc__btn_plus").on("click", function () {
      var inputElement = $(this).siblings(".calc__value");
      var currentValue = parseInt(inputElement.val());
      inputElement.val(currentValue + 1);
});

$(document).on("input", ".input input", function() {
      if ($(this).val().trim() !== '') {
            $(this).parent(".input").addClass("input_active");
      } else {
            $(this).parent(".input").removeClass("input_active");
      }
});

$(document).on("input", ".textarea textarea", function() {
      if ($(this).val().trim() !== '') {
            $(this).parent(".textarea").addClass("textarea_active");
      } else {
            $(this).parent(".textarea").removeClass("textarea_active");
      }
});

$(document).on("click", ".call-modal-item-added", function(){
      $("#modal-item-added").addClass("modal_active");
      // $(".kmnd-body").addClass("kmnd-body_noscroll");
      $(".header__cart-toggler").addClass("header__cart-toggler_animate");
      setTimeout(function () {
            $("#modal-item-added").removeClass("modal_active");
            $(".header__cart-toggler").removeClass("header__cart-toggler_animate");
            // $(".kmnd-body").removeClass("kmnd-body_noscroll");
      }, 3000);
});

$(document).on("click", ".call-modal-callback", function(){
      $(".header__phones-content").removeClass("header__phones-content_active");
      callModal("#modal-callback", true, false);
});

$(document).on("click", ".header__phones-toggler", function(){
      if($(window).width() >= 1152 && $(window).width() <= 1728){
            // callModal("#modal-callback", true, false);
            $(".header__phones-content").toggleClass("header__phones-content_active");
      }
});

$(document).on("click", ".item__spoiler", function(){
      if ($(this).parents(".item__heading").hasClass("item__heading_visible")){
            $(".item__heading").removeClass("item__heading_visible");
      } else {
            $(".item__heading").removeClass("item__heading_visible");
            $(this).parents(".item__heading").addClass("item__heading_visible");
      }
});

$(document).on("click", ".sets__bottom .btn", function(){
      $(".sets__grid").addClass("sets__grid_visible");
      $(".sets__bottom").remove();
});

$(document).on("click", ".bars__location-item", function(event){
      event.preventDefault();
      $(".bars__location-item").removeClass("bars__location-item_current");
      $(".bars__row").removeClass("bars__row_current");
      var barsLocation = $(this).attr('href').replace('#', '');
      $(this).addClass("bars__location-item_current");
      $('[id="'+ barsLocation +'"]').addClass("bars__row_current");
      return false;
});

if ($(".bars__interior-slider").length > 0){
      var swiperInterior = new Swiper(".bars__interior-slider", {
            slidesPerView: '3',
            spaceBetween: 5,
            loop: true,
            navigation: {
                  nextEl: ".bars__interior-arrow_next",
                  prevEl: ".bars__interior-arrow_prev",
            },
            pagination: {
                  el: ".bars__interior-pagination",
                  clickable: true,
            },
            breakpoints: {
                  993: {
                    spaceBetween: 20,
                  },
            },
      });
}

if ($(".reviews__slider").length > 0 && $(window).width() <= 992){
      var swiperReviews = new Swiper(".reviews__slider", {
            slidesPerView: 'auto',
            spaceBetween: 5,
            loop: true,
            pagination: {
                  el: ".reviews__pagination",
                  clickable: true,
            }
      });
}

if ($(".instagram__slider").length > 0){
      var swiperInstagram = new Swiper(".instagram__slider", {
            slidesPerView: '4',
            spaceBetween: 5,
            loop: true,
            navigation: {
                  nextEl: ".instagram__arrow_next",
                  prevEl: ".instagram__arrow_prev",
            },
            pagination: {
                  el: ".instagram__pagination",
                  clickable: true,
            },
            breakpoints: {
                  1181: {
                    slidesPerView: '6',
                    spaceBetween: 20,
                  },
            },
      });
}

if ($(".blog__slider").length > 0 && $(window).width() <= 992){
      var swiperBlog = new Swiper(".blog__slider", {
            slidesPerView: 'auto',
            spaceBetween: 5,
            loop: true,
            pagination: {
                  el: ".blog__pagination",
                  clickable: true,
            }
      });
}

$(document).on("click", ".seo-text__spoiler .btn", function(){
      $(".seo-text__section").toggleClass("seo-text__section_hidden");
});

if ($(".similar__slider").length > 0){
      var swiperSimilar = new Swiper(".similar__slider", {
            slidesPerView: '3',
            spaceBetween: 5,
            loop: true,
            navigation: {
                  nextEl: ".similar__arrow_next",
                  prevEl: ".similar__arrow_prev",
            },
            pagination: {
                  el: ".similar__pagination",
                  clickable: true,
            },
            breakpoints: {
                  993: {
                    spaceBetween: 20,
                  },
            },
      });
}

$(document).on("click", ".vacancy__spoiler", function(){
      if (!$(this).parents(".vacancy__item").hasClass("vacancy__item_hidden")){
            $(this).parents(".vacancy__item").addClass("vacancy__item_hidden");
      } else {
            $(".vacancy__item").addClass("vacancy__item_hidden");
            $(this).parents(".vacancy__item").removeClass("vacancy__item_hidden");
      }
});

$(document).on("click", ".order__discount-holder", function(){
      if($(window).width() <= 992){
            $(this).addClass("order__discount-holder_active");
      }
});

$(document).mouseup(function(e){
      if($(window).width() <= 992 && $(".order__discount-holder").hasClass("order__discount-holder_active")){
            var container = $(".order__discount-holder");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                  $(".order__discount-holder").removeClass("order__discount-holder_active");
            }
      }
});

$(document).on("change", ".radio input", function(){
      if ($(".radio_delivery input").is(":checked")){
            $(".order__discount").removeClass("order__discount_hidden");
            $(".order_courier").removeClass("order__payment_hidden");
            $(".order_bar").addClass("order__payment_hidden");
            $(".order__delivery").removeClass("order__delivery_hidden");
      } else {
            $(".order__discount").addClass("order__discount_hidden");
            $(".order_courier").addClass("order__payment_hidden");
            $(".order_bar").removeClass("order__payment_hidden");
            $(".order__delivery").addClass("order__delivery_hidden");
      }
});

if ($("#orderForm").length > 0){
      $("#orderForm").validate({
            rules: {
                  orderType: {
                        required: true
                  },
                  orderName: "required",
                  orderPhone: "orderPhone"
            }
      });
}

$(".order__section form").bind("invalid-form.validate", function () {
      if ($(".order__section input, .order__section textarea").hasClass("error")){
            $(".order__cart-error").addClass("order__cart-error_active");
            $(".fieldset").removeClass("fieldset_error");
            $(".radio").removeClass("radio_error");
            $(".input").removeClass("input_error");
            $(".counter").removeClass("counter_error");
            $(".order__section").find("input.error").parents(".input").addClass("input_error");
            $(".order__section").find("input.error").parents(".radio").addClass("radio_error");
            $(".order__section").find("input.error").parents(".fieldset").addClass("fieldset_error");
            $(".order__section").find("input.error").parents(".counter").addClass("counter_error");
      } else {
            $(".order__cart-error").removeClass("order__cart-error_active");
            $(".fieldset").removeClass("fieldset_error");
            $(".radio").removeClass("radio_error");
            $(".input").removeClass("input_error");
            $(".counter").removeClass("counter_error");
      }
});

if ($(".additional__slider-1").length > 0){
      var swiperAdditional1 = new Swiper(".additional__slider-1", {
            slidesPerView: '3',
            spaceBetween: 5,
            loop: true,
            navigation: {
                  nextEl: ".additional__arrow_next-1",
                  prevEl: ".additional__arrow_prev-1",
            },
            pagination: {
                  el: ".additional__pagination-1",
                  clickable: true,
            },
            breakpoints: {
                  768: {
                        spaceBetween: 20,
                        slidesPerView: '2',
                      },
                  1401: {
                        spaceBetween: 20,
                        slidesPerView: '3',
                  },
            },
      });
}

if ($(".additional__slider-2").length > 0){
      var swiperAdditional2 = new Swiper(".additional__slider-2", {
            slidesPerView: '3',
            spaceBetween: 5,
            loop: true,
            navigation: {
                  nextEl: ".additional__arrow_next-2",
                  prevEl: ".additional__arrow_prev-2",
            },
            pagination: {
                  el: ".additional__pagination-2",
                  clickable: true,
            },
            breakpoints: {
                  768: {
                        spaceBetween: 20,
                        slidesPerView: '2',
                      },
                  1401: {
                        spaceBetween: 20,
                        slidesPerView: '3',
                  },
            },
      });
}

if ($(".about__advantages-slider").length > 0 && $(window).width() <= 1400){
      var swiperAboutAdvantages = new Swiper(".about__advantages-slider", {
            slidesPerView: 'auto',
            spaceBetween: 5,
            loop: true,
            pagination: {
                  el: ".about__advantages-pagination",
                  clickable: true,
            },
            navigation: {
                  nextEl: ".about__advantages-arrow_next",
                  prevEl: ".about__advantages-arrow_prev",
            },
            breakpoints: {
                  768: {
                        spaceBetween: 20,
                        slidesPerView: '3',
                  }
            },
      });
}

if ($(".about__manufacturing-slider").length > 0){
      var swiperManufacturing = new Swiper(".about__manufacturing-slider", {
            slidesPerView: 'auto',
            spaceBetween: 5,
            loop: true,
            navigation: {
                  nextEl: ".about__manufacturing-arrow_next",
                  prevEl: ".about__manufacturing-arrow_prev",
            },
            pagination: {
                  el: ".about__manufacturing-pagination",
                  clickable: true,
            },
            breakpoints: {
                  993: {
                    slidesPerView: '3',
                    spaceBetween: 20,
                  },
            },
      });
}

$(document).on("click", ".about__filter", function(event){
      event.preventDefault();
      $(".about__filter").removeClass("about__filter_current");
      $(".about__content").removeClass("about__content_active");
      var aboutFilter = $(this).attr('href').replace('#', '');
      $(this).addClass("about__filter_current");
      $('[id="'+ aboutFilter +'"]').addClass("about__content_active");
      return false;
});

if ($(".modal-quality__preview-slider").length > 0){
      var swiperQualityPreview = new Swiper(".modal-quality__preview-slider", {
            slidesPerView: 'auto',
            spaceBetween: 5,
            loop: true,
            watchSlidesProgress: true,
      });
}

if ($(".modal-quality__main-slider").length > 0){
      var swiperQualityMain = new Swiper(".modal-quality__main-slider", {
            slidesPerView: 'auto',
            spaceBetween: 5,
            loop: true,
            thumbs: {
                  swiper: swiperQualityPreview,
            },
            pagination: {
                  el: ".modal-quality__main-pagination",
                  clickable: true,
            },
            breakpoints: {
                  993: {
                    spaceBetween: 20,
                  },
            },
            navigation: {
                  nextEl: ".modal-quality__arrow_next",
                  prevEl: ".modal-quality__arrow_prev",
            },
      });
}

$(document).on("click", ".call-modal-qality", function(){
      callModal("#modal-quality", true, false);
});

if ($(".modal-review__slider").length > 0 && $(window).width() <= 992){
      var swiperModalReview = new Swiper(".modal-review__slider", {
            slidesPerView: 'auto',
            spaceBetween: 5,
            loop: true,
            pagination: {
                  el: ".modal-review__pagination",
                  clickable: true,
            }
      });
}

$(document).on("click", ".call-modal-review", function(){
      callModal("#modal-review", true, false);
});

$(document).on("click", ".rating label", function(){
      $(this).parents(".rating").addClass("rating_active");
});

$('.photos input[type="file"]').change(function() {
      if (this.files && this.files[0]) {
        var reader = new FileReader();
        var $img = $(this).next('img');
  
        reader.onload = function(e) {
          $img.attr('src', e.target.result);
        }
  
        reader.readAsDataURL(this.files[0]);
      }
});

$(document).on("click", ".call-modal-feedback", function(){
      callModal("#modal-feedback", true, false);
});

var $root = $('html, body');

$('.scroll-to-reviews').click(function() {
      if ($(window).width() <= 992){
            var href = $.attr(this, 'href');

            $root.animate({
                  scrollTop: $(href).offset().top
            }, 500, function () {
                  
            });

            return false;
      } else {
            var href = $.attr(this, 'href');

            $root.animate({
                  scrollTop: $(href).offset().top - 120
            }, 500, function () {
                  
            });

            return false;
      }
});

$(document).ready(function(){
      if ($(".category__heading-holder").length > 0 && $(window).width() <= 992){
            $(".category__heading-holder").css("height", $(".category__heading-inner").outerHeight() + 10);
      } else if ($(".category__heading-holder").length > 0 && $(window).width() > 992){
            $(".category__heading-holder").css("height", $(".category__heading-inner").outerHeight() + 20);
      }
});

$(window).scroll(function() {    
      if ($(".category__heading-holder").length > 0 && $(window).width() <= 992){
            var distance1 = $('.category__heading-holder').offset().top - 66;
            var distance2 = $('.additional__section').offset().top - 66;
            if ($(window).scrollTop() >= distance1 && $(window).scrollTop() <= distance2) {
                  $(".category__heading-inner").addClass("category__heading-inner_fixed");
            } else {
                  $(".category__heading-inner").removeClass("category__heading-inner_fixed");
            }
      } else if ($(".category__heading-holder").length > 0 && $(window).width() > 992){
            var distance1 = $('.category__heading-holder').offset().top - 141;
            var distance2 = $('.additional__section').offset().top - 141;
            if ($(window).scrollTop() >= distance1 && $(window).scrollTop() <= distance2) {
                  $(".category__heading-inner").addClass("category__heading-inner_fixed");
            } else {
                  $(".category__heading-inner").removeClass("category__heading-inner_fixed");
            }
      }
});

$(document).on("click", ".category__filter", function(event){
      event.preventDefault();
      $(".category__filter").removeClass("category__filter_current");
      $(".category__grid").removeClass("category__grid_current");
      var categoryFilter = $(this).attr('href').replace('#', '');
      $(this).addClass("category__filter_current");
      $('[id="'+ categoryFilter +'"]').addClass("category__grid_current");
      if ($(window).width() <= 992 && $('[id="'+ categoryFilter +'"]').length > 0){
            $('html, body').animate({
                  scrollTop: $('[id="'+ categoryFilter +'"]').offset().top - $(".category__heading-inner").outerHeight() - 66
              }, 500, function () {});
      } else if ($(window).width() > 992 && $('[id="'+ categoryFilter +'"]').length > 0){
            $('html, body').animate({
                  scrollTop: $('[id="'+ categoryFilter +'"]').offset().top - $(".category__heading-inner").outerHeight() - 141
              }, 500, function () {});
      }
      return false;
});

function isInViewport(element) {
      var elementTop = element.offset().top;
      var elementBottom = elementTop + element.outerHeight();
      var viewportTop = $(window).scrollTop();
      var viewportBottom = viewportTop + $(window).height();
      return elementBottom > viewportTop && elementTop < viewportBottom;
} 

// $(window).scroll(function() {  
//       $('.category__grid').each(function () {
//           if (isInViewport($(this)) && !$(this).hasClass("category__grid_current")) {
//               $(".category__filter").removeClass("category__filter_current");
//               $(".category__grid").removeClass("category__grid_current");
//               var categoryFilterTag = $(this).attr('id');
//               $(this).addClass("category__grid_current");
//               var filterElement = $('.category__filter[href*="'+ categoryFilterTag +'"]');
//               filterElement.addClass("category__filter_current");
//               var container = $('.category__filters');
//               var containerLeft = container.offset().left;
//               var containerScrollLeft = container.scrollLeft();
//               var filterLeft = filterElement.offset().left - containerLeft + containerScrollLeft;
//               var containerWidth = container.width();
//               var filterWidth = filterElement.outerWidth();
//               var scrollAmount = filterLeft - (containerWidth - filterWidth) / 2;
//               container.stop().animate({
//                   scrollLeft: scrollAmount
//               }, 500);
//           }
//       });
//   });
  

$(window).scroll(function() {  
      var windowHeight = $(window).height();
      var windowTop = $(window).scrollTop();
      var windowBottom = windowTop + windowHeight;
      var windowMidpoint = windowHeight / 2;
  
      $('.category__grid').each(function () {
          var elementTop = $(this).offset().top;
          var elementBottom = elementTop + $(this).outerHeight();
  
          if (elementTop < (windowTop + windowMidpoint) && elementBottom > (windowBottom - windowMidpoint) && !$(this).hasClass("category__grid_current")) {
              $(".category__filter").removeClass("category__filter_current");
              $(".category__grid").removeClass("category__grid_current");
              var categoryFilterTag = $(this).attr('id');
              $(this).addClass("category__grid_current");
              var filterElement = $('.category__filter[href*="'+ categoryFilterTag +'"]');
              filterElement.addClass("category__filter_current");
              var container = $('.category__filters');
              var containerLeft = container.offset().left;
              var containerScrollLeft = container.scrollLeft();
              var filterLeft = filterElement.offset().left - containerLeft + containerScrollLeft;
              var containerWidth = container.width();
              var filterWidth = filterElement.outerWidth();
              var scrollAmount = filterLeft - (containerWidth - filterWidth) / 2;
              container.stop().animate({
                  scrollLeft: scrollAmount
              }, 500);
          }
      });
  });
  
  

$("input[type='phone']").inputmask("+38 (099) 999-99-99", {showMaskOnHover: false});

// $(document).on("click", ".btn_hasclickedeffect", function(){
//       $(this).addClass("btn_clicked");
// });

$('.btn_inside, .bars__location-item, .about__filter, .blog-page__filter, .category__filter, .vacancy__filter').on('mouseenter', function(e) {
      if($(window).width() > 992){
            var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
            $(this).find('span').css({top:relY, left:relX})
      }
    }).on('mouseout', function(e) {
      if($(window).width() > 992){
            var parentOffset = $(this).offset(),
      	relX = e.pageX - parentOffset.left,
      	relY = e.pageY - parentOffset.top;
    	      $(this).find('span').css({top:relY, left:relX})
      }
});

$('.btn-bubbles').click(function() {
      $(this).removeClass('animate').addClass('animate');
      setTimeout(function() {
            $(this).removeClass('animate');
      }, 700);
  });
  

})(jQuery);