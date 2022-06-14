(window.onload = function () {
    screen.width <= 992 && document.querySelector("meta[name=viewport]").setAttribute("content", "user-scalable=no, width=320");
});
$(".filter__head").click(function(){
  $(this).parent().toggleClass("filter_opened");
});
$(".account-info__edit").click(function(){
  $(this).parents(".account-info__row").addClass("account-info__row_active");
});
$(".account-info__apply").click(function(){
  $(this).parents(".account-info__row").removeClass("account-info__row_active");
});
$(".account-info__cancel").click(function(){
  $(this).parents(".account-info__row").removeClass("account-info__row_active");
});
$(".cart-form").validate({
  rules: {
    orderSurname: "required",
    orderName: "required",
    orderEmail: "required",
    orderPhone: "required",
    orderRegion: "required",
    orderCity: "required",
    orderPost: "required",
    orderStreet: "required",
    orderHouse: "required",
    orderRoom: "required",
  },
  messages: {
    orderSurname: "Wrong filled",
    orderName: "Wrong filled",
    orderEmail: "Wrong filled",
    orderPhone: "Wrong filled",
    orderRegion: "Wrong filled",
    orderCity: "Wrong filled",
    orderPost: "Wrong filled",
    orderStreet: "Wrong filled",
    orderHouse: "Wrong filled",
    orderRoom: "Wrong filled",
  }
});
$(".cart-form__prompt").click(function(){
  $(".cart-form__prompt-text").toggleClass("cart-form__prompt-text_visible");
});
$(".cart-info__prompt").click(function(){
  $(".cart-info__prompt-text").toggleClass("cart-info__prompt-text_visible");
});
$('[type=tel]').inputmask({"mask": "+38 (099) 999 99 99"});
$('.product__images').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows: false,
    focusOnSelect: true,
    dots: false,
    variableWidth: true,
    infinite: true,
    asNavFor: '.product__image'
  });
  $('.product__image').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.product__images',
    fade: true,
    arrows: false,
    dots: false,
    responsive: [
    {
      breakpoint: 992,
      settings: {
        dots: true,
      }
    }
  ]
  });
$('.product-related__row').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  prevArrow: $('.product-related__prev'),
  nextArrow: $('.product-related__next'),
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }
  ]
});
$(".info__tab_about").click(function(){
  $(".info__tab").removeClass("info__tab_current");
  $(".info__body").removeClass("info__body_active");
  $(this).addClass("info__tab_current");
  $(".info__body_about").addClass("info__body_active");
});
$(".info__tab_delivery").click(function(){
  $(".info__tab").removeClass("info__tab_current");
  $(".info__body").removeClass("info__body_active");
  $(this).addClass("info__tab_current");
  $(".info__body_delivery").addClass("info__body_active");
});
$(".info__tab_guarantee").click(function(){
  $(".info__tab").removeClass("info__tab_current");
  $(".info__body").removeClass("info__body_active");
  $(this).addClass("info__tab_current");
  $(".info__body_guarantee").addClass("info__body_active");
});
$(".info__tab_policy").click(function(){
  $(".info__tab").removeClass("info__tab_current");
  $(".info__body").removeClass("info__body_active");
  $(this).addClass("info__tab_current");
  $(".info__body_policy").addClass("info__body_active");
});
$(".product__compare").click(function(){
  $(this).toggleClass("product__compare_active");
});
$(".product__favorite").click(function(){
  $(this).toggleClass("product__favorite_active");
});
$(".product-item__compare").click(function(){
  $(this).toggleClass("product-item__compare_active");
});
$(".product-item__favorite").click(function(){
  $(this).toggleClass("product-item__favorite_active");
});
$(".product__color-item").click(function(){
  $(".product__color-item").removeClass("product__color-item_selected");
  $(this).addClass("product__color-item_selected");
});
$(".product__model-select").click(function(){
  $(this).toggleClass("product__model-select_opened");
});
$(".cart-form__select").click(function(){
  $(this).toggleClass("cart-form__select_opened");
});
$(".modal-order__select").click(function(){
  $(this).toggleClass("modal-order__select_opened");
});
$(".category-sort__select").click(function(){
  $(this).toggleClass("category-sort__select_opened");
});
$(".product__quantity-minus").click(function () {
    var e = parseFloat($(this).next(".product__quantity-value").val());
    "1" != e &&
        $(this)
            .next(".product__quantity-value")
            .val(e - 1);
});
$(".product__quantity-plus").click(function () {
    var e = parseFloat($(this).prev(".product__quantity-value").val());
    $(this)
        .prev(".product__quantity-value")
        .val(e + 1);
});
$(".cart-table__quantity-minus").click(function () {
    var e = parseFloat($(this).next(".cart-table__quantity-value").val());
    "1" != e &&
        $(this)
            .next(".cart-table__quantity-value")
            .val(e - 1);
});
$(".cart-table__quantity-plus").click(function () {
    var e = parseFloat($(this).prev(".cart-table__quantity-value").val());
    $(this)
        .prev(".cart-table__quantity-value")
        .val(e + 1);
});
$(".cart-list__quantity-minus").click(function () {
    var e = parseFloat($(this).next(".cart-list__quantity-value").val());
    "1" != e &&
        $(this)
            .next(".cart-list__quantity-value")
            .val(e - 1);
});
$(".cart-list__quantity-plus").click(function () {
    var e = parseFloat($(this).prev(".cart-list__quantity-value").val());
    $(this)
        .prev(".cart-list__quantity-value")
        .val(e + 1);
});
$(".order-table__quantity-minus").click(function () {
    var e = parseFloat($(this).next(".order-table__quantity-value").val());
    "1" != e &&
        $(this)
            .next(".order-table__quantity-value")
            .val(e - 1);
});
$(".order-table__quantity-plus").click(function () {
    var e = parseFloat($(this).prev(".order-table__quantity-value").val());
    $(this)
        .prev(".order-table__quantity-value")
        .val(e + 1);
});
$(".cart-list__favorite").click(function(){
  $(this).toggleClass("cart-list__favorite_active");
});
$(".leave-review_star_one").click(function(){
  $(".leave-review__stars").removeClass("leave-review__stars_one");
  $(".leave-review__stars").removeClass("leave-review__stars_two");
  $(".leave-review__stars").removeClass("leave-review__stars_three");
  $(".leave-review__stars").removeClass("leave-review__stars_four");
  $(".leave-review__stars").removeClass("leave-review__stars_five");
  $(".leave-review__stars").addClass("leave-review__stars_one");
});
$(".leave-review_star_two").click(function(){
  $(".leave-review__stars").removeClass("leave-review__stars_one");
  $(".leave-review__stars").removeClass("leave-review__stars_two");
  $(".leave-review__stars").removeClass("leave-review__stars_three");
  $(".leave-review__stars").removeClass("leave-review__stars_four");
  $(".leave-review__stars").removeClass("leave-review__stars_five");
  $(".leave-review__stars").addClass("leave-review__stars_two");
});
$(".leave-review_star_three").click(function(){
  $(".leave-review__stars").removeClass("leave-review__stars_one");
  $(".leave-review__stars").removeClass("leave-review__stars_two");
  $(".leave-review__stars").removeClass("leave-review__stars_three");
  $(".leave-review__stars").removeClass("leave-review__stars_four");
  $(".leave-review__stars").removeClass("leave-review__stars_five");
  $(".leave-review__stars").addClass("leave-review__stars_three");
});
$(".leave-review_star_four").click(function(){
  $(".leave-review__stars").removeClass("leave-review__stars_one");
  $(".leave-review__stars").removeClass("leave-review__stars_two");
  $(".leave-review__stars").removeClass("leave-review__stars_three");
  $(".leave-review__stars").removeClass("leave-review__stars_four");
  $(".leave-review__stars").removeClass("leave-review__stars_five");
  $(".leave-review__stars").addClass("leave-review__stars_four");
});
$(".leave-review_star_five").click(function(){
  $(".leave-review__stars").removeClass("leave-review__stars_one");
  $(".leave-review__stars").removeClass("leave-review__stars_two");
  $(".leave-review__stars").removeClass("leave-review__stars_three");
  $(".leave-review__stars").removeClass("leave-review__stars_four");
  $(".leave-review__stars").removeClass("leave-review__stars_five");
  $(".leave-review__stars").addClass("leave-review__stars_five");
});
$(".modal-review_star_one").click(function(){
  $(".modal-review__stars").removeClass("modal-review__stars_one");
  $(".modal-review__stars").removeClass("modal-review__stars_two");
  $(".modal-review__stars").removeClass("modal-review__stars_three");
  $(".modal-review__stars").removeClass("modal-review__stars_four");
  $(".modal-review__stars").removeClass("modal-review__stars_five");
  $(".modal-review__stars").addClass("modal-review__stars_one");
});
$(".modal-review_star_two").click(function(){
  $(".modal-review__stars").removeClass("modal-review__stars_one");
  $(".modal-review__stars").removeClass("modal-review__stars_two");
  $(".modal-review__stars").removeClass("modal-review__stars_three");
  $(".modal-review__stars").removeClass("modal-review__stars_four");
  $(".modal-review__stars").removeClass("modal-review__stars_five");
  $(".modal-review__stars").addClass("modal-review__stars_two");
});
$(".modal-review_star_three").click(function(){
  $(".modal-review__stars").removeClass("modal-review__stars_one");
  $(".modal-review__stars").removeClass("modal-review__stars_two");
  $(".modal-review__stars").removeClass("modal-review__stars_three");
  $(".modal-review__stars").removeClass("modal-review__stars_four");
  $(".modal-review__stars").removeClass("modal-review__stars_five");
  $(".modal-review__stars").addClass("modal-review__stars_three");
});
$(".modal-review_star_four").click(function(){
  $(".modal-review__stars").removeClass("modal-review__stars_one");
  $(".modal-review__stars").removeClass("modal-review__stars_two");
  $(".modal-review__stars").removeClass("modal-review__stars_three");
  $(".modal-review__stars").removeClass("modal-review__stars_four");
  $(".modal-review__stars").removeClass("modal-review__stars_five");
  $(".modal-review__stars").addClass("modal-review__stars_four");
});
$(".modal-review_star_five").click(function(){
  $(".modal-review__stars").removeClass("modal-review__stars_one");
  $(".modal-review__stars").removeClass("modal-review__stars_two");
  $(".modal-review__stars").removeClass("modal-review__stars_three");
  $(".modal-review__stars").removeClass("modal-review__stars_four");
  $(".modal-review__stars").removeClass("modal-review__stars_five");
  $(".modal-review__stars").addClass("modal-review__stars_five");
});
$(".product-info__review-button").click(function(){
  $(".modal-shadow").addClass("modal-shadow_visible");
  $(".modal-review").addClass("modal-review_visible");
  $("body").addClass("noscroll");
});
$(".modal-review__close").click(function(){
  $(".modal-shadow").removeClass("modal-shadow_visible");
  $(".modal-review").removeClass("modal-review_visible");
  $("body").removeClass("noscroll");
});
$(".cart-info__order").click(function(){
  $(".modal-shadow").addClass("modal-shadow_visible");
  $(".modal-order").addClass("modal-order_visible");
  $("body").addClass("noscroll");
});
$(".modal-order__close").click(function(){
  $(".modal-shadow").removeClass("modal-shadow_visible");
  $(".modal-order").removeClass("modal-order_visible");
  $("body").removeClass("noscroll");
});
$(".product-info__tab_specs").click(function(){
  $(".product-info__tab").removeClass("product-info__tab_current");
  $(".product-info__tab_specs").addClass("product-info__tab_current");
  $(".product-info__content").removeClass("product-info__content_active");
  $(".product-info__content_specs").addClass("product-info__content_active");
  $(".product-info__hider").addClass("product-info__hider_active");
});
$(".product-info__tab_description").click(function(){
  $(".product-info__tab").removeClass("product-info__tab_current");
  $(".product-info__tab_description").addClass("product-info__tab_current");
  $(".product-info__content").removeClass("product-info__content_active");
  $(".product-info__content_description").addClass("product-info__content_active");
  $(".product-info__hider").addClass("product-info__hider_active");
});
$(".product-info__tab_reviews").click(function(){
  $(".product-info__tab").removeClass("product-info__tab_current");
  $(".product-info__tab_reviews").addClass("product-info__tab_current");
  $(".product-info__content").removeClass("product-info__content_active");
  $(".product-info__content_reviews").addClass("product-info__content_active");
  $(".product-info__hider").addClass("product-info__hider_active");
});
$(".product-info__tab_delivery").click(function(){
  $(".product-info__tab").removeClass("product-info__tab_current");
  $(".product-info__tab_delivery").addClass("product-info__tab_current");
  $(".product-info__content").removeClass("product-info__content_active");
  $(".product-info__content_delivery").addClass("product-info__content_active");
  $(".product-info__hider").addClass("product-info__hider_active");
});
$(".product-info__hider").click(function(){
  $(this).removeClass("product-info__hider_active");
  $(".product-info__tab").removeClass("product-info__tab_current");
  $(".product-info__content").removeClass("product-info__content_active"); 
});
$(".product-info__content_specs .product-info__title").click(function(){
  $(".product-info__content_specs").toggleClass("product-info__content_active");
});
$(".product-info__content_description .product-info__title").click(function(){
  $(".product-info__content_description").toggleClass("product-info__content_active");
});
$(".product-info__content_reviews .product-info__title").click(function(){
  $(".product-info__content_reviews").toggleClass("product-info__content_active");
});
$(".product-info__content_delivery .product-info__title").click(function(){
  $(".product-info__content_delivery").toggleClass("product-info__content_active");
});
$(".call-modal-recall").click(function(){
  $(".modal-shadow").addClass("modal-shadow_visible");
  $(".modal-recall").addClass("modal-recall_visible");
  $("body").addClass("noscroll");
  $(".header-mobile").removeClass("header-mobile_active");
});
$(".modal-recall__close").click(function(){
  $(".modal-shadow").removeClass("modal-shadow_visible");
  $(".modal-recall").removeClass("modal-recall_visible");
  $(".modal-recall__success").addClass("d-none");
  $(".modal-recall__error").addClass("d-none");
  $("body").removeClass("noscroll");
});
$(".modal-authorize__tab_login, .modal-authorize__gotologin").click(function(){
  $(".modal-authorize__tab").removeClass("modal-authorize__tab_current");
  $(".modal-authorize__body").removeClass("modal-authorize__body_visible");
  $(".modal-authorize__tab_login").addClass("modal-authorize__tab_current");
  $(".modal-authorize__body_login").addClass("modal-authorize__body_visible");
});
$(".modal-authorize__tab_reg, .modal-authorize__gotoreg").click(function(){
  $(".modal-authorize__tab").removeClass("modal-authorize__tab_current");
  $(".modal-authorize__body").removeClass("modal-authorize__body_visible");
  $(".modal-authorize__tab_reg").addClass("modal-authorize__tab_current");
  $(".modal-authorize__body_reg").addClass("modal-authorize__body_visible");
});
$(".modal-authorize__close").click(function(){
  $(".modal-authorize").removeClass("modal-authorize_visible");
  $(".modal-shadow").removeClass("modal-shadow_visible");
  $("body").removeClass("noscroll");
});
$(".call-modal-authorize_login").click(function(){
  $(".modal-authorize").addClass("modal-authorize_visible");
  $(".modal-shadow").addClass("modal-shadow_visible");
  $("body").addClass("noscroll");
  $(".modal-authorize__tab").removeClass("modal-authorize__tab_current");
  $(".modal-authorize__body").removeClass("modal-authorize__body_visible");
  $(".modal-authorize__tab_login").addClass("modal-authorize__tab_current");
  $(".modal-authorize__body_login").addClass("modal-authorize__body_visible");
  $(".header-mobile").removeClass("header-mobile_active");
});
$(".call-modal-authorize_reg").click(function(){
  $(".modal-authorize").addClass("modal-authorize_visible");
  $(".modal-shadow").addClass("modal-shadow_visible");
  $("body").addClass("noscroll");
  $(".modal-authorize__tab").removeClass("modal-authorize__tab_current");
  $(".modal-authorize__body").removeClass("modal-authorize__body_visible");
  $(".modal-authorize__tab_reg").addClass("modal-authorize__tab_current");
  $(".modal-authorize__body_reg").addClass("modal-authorize__body_visible");
  $(".header-mobile").removeClass("header-mobile_active");
});
$("#form").submit(function() {
    $.ajax({
        type: "POST",
        url: "mail.php",
        data: $(this).serialize()
    }).done(function() {
        $(this).find("input").val("");
        $(".modal-recall__success").removeClass("d-none");
        $("#form").trigger("reset");
    });
    return false;
});
if($(window).width() >= 992) {
    $(".header-line__language button").click(function(){
        $(".header-line__language").toggleClass("header-line__language_opened");
    });
    $(".header-line__language li").click(function(){
        $(".header-line__language").removeClass("header-line__language_opened");
    });
    $(".header-main__city").click(function(){
        $(this).toggleClass("header-main__city_highlighted");
        $(".city-selector").toggleClass("city-selector_opened");
    });
    $(".city-selector li").click(function(){
        $(".header-main__city").removeClass("header-main__city_highlighted");
        $(".city-selector").removeClass("city-selector_opened");
    });
    $(".header-catalog__menu .menu-item-haschildren").on("mouseenter", function(){
        $(".header-catalog__submenu").addClass("header-catalog__submenu_visible");
    });

    $(".header-catalog__submenu .menu-item-haschildren").on("mouseenter", function(){
        $(".header-catalog__subsubmenu").addClass("header-catalog__subsubmenu_visible");
    });

    $(".header-main__catalog").click(function(){
        $(".header-catalog").toggleClass("header-catalog_visible");
    });

    $(".header-catalog").on("mouseleave", function(){
        $(".header-catalog__submenu").removeClass("header-catalog__submenu_visible");
        $(".header-catalog__subsubmenu").removeClass("header-catalog__subsubmenu_visible");
        $(".header-catalog").removeClass("header-catalog_visible");
    });
    $(".header-main__search button").click(function(){
        $(".search-result").toggleClass("search-result_visible");
    });
    if ($("body").hasClass("home")){
      $(".footer").removeClass("footer_gray");
    }
} else {
  $(".header-mobile__search").click(function(){
    $(".mobile-search").addClass("mobile-search_visible");
  });
  $(".mobile-search__close").click(function(){
    $(".mobile-search").removeClass("mobile-search_visible");
    $(".mobile-search input").val("");
  });
  $(".mobile-search form button").click(function(){
    $(".search-result").toggleClass("search-result_visible");
  });
  $(".city-search form input").on("keypress", function(){
    if ($(".city-search form input").val().length === 0){
        $(".city-search").removeClass("city-search_active");
    } else {
        $(".city-search").addClass("city-search_active");
    }
  });
  $(".city-search form .city-search__close").click(function(){
    $(".city-search form input").val("");
    $(".city-search").removeClass("city-search_active");
  });
  $(".header-mobile__city-selected").click(function(){
    $(".header-mobile__city").toggleClass("header-mobile__city_active");
    $(".city-search form input").val("");
    $(".city-search").removeClass("city-search_active");
    $(".header-mobile__cabinet, .header-mobile__menu, .header-mobile__comparison, .header-mobile__phone, .header-mobile__worktime, .header-mobile__recall, .header-mobile__language").toggleClass("d-none");
    $(".header-mobile__submenu").addClass("d-none");
  });
  $(".header-mobile__menu li svg").click(function(){
    $(".header-mobile__submenu").removeClass("d-none");
    $(".header-mobile__cabinet, .header-mobile__menu, .header-mobile__comparison, .header-mobile__phone, .header-mobile__worktime, .header-mobile__recall, .header-mobile__language").addClass("d-none");
  });
  $(".header-mobile__submenu li svg").click(function(){
    $(".header-mobile__submenu").addClass("d-none");
    $(".header-mobile__cabinet, .header-mobile__menu, .header-mobile__comparison, .header-mobile__phone, .header-mobile__worktime, .header-mobile__recall, .header-mobile__language").removeClass("d-none");
  });
  $(".language-selector button").click(function(){
      $(".language-selector").toggleClass("language-selector_opened");
  });
  $(".language-selector li").click(function(){
      $(".language-selector").removeClass("language-selector_opened");
  });
  $(".header-mobile__btn").click(function(){
    $(".header-mobile").addClass("header-mobile_active");
    $("body").addClass("noscroll");
  });
  $(".header-mobile__btn-close").click(function(){
    $(".header-mobile").removeClass("header-mobile_active");
    $("body").removeClass("noscroll");
  });
  if ($("body").hasClass("home")){
    $(".header-mobile").removeClass("header-mobile_scrolled");
    $(window).scroll(function() {    
      var scroll = $(window).scrollTop();
      if (scroll >= 60) {
          $(".header-mobile").addClass("header-mobile_scrolled");
      } else {
          $(".header-mobile").removeClass("header-mobile_scrolled");
      }
    });
  }
  $('.brands-mobile__symbols').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows: true,
    focusOnSelect: true,
    dots: false,
    variableWidth: true,
    infinite: false,
    centerMode: true,
    asNavFor: '.brands-mobile__row'
  });
  $('.brands-mobile__row').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.brands-mobile__symbols',
    fade: true,
    arrows: false,
    dots: false
  });
}
$( function() {
  $( ".filter__slider" ).slider({
    range: true,
    min: 0,
    max: 10000000,
    values: [ 1000, 9000000 ],
    slide: function( event, ui ) {
      $("#filterMin").val(ui.values[ 0 ] + " ₴");
      $("#filterMax").val(ui.values[ 1 ] + " ₴");
    }
  });
  $("#filterMin").val($( ".filter__slider" ).slider( "values", 0 ) + " ₴")
  $("#filterMax").val($( ".filter__slider" ).slider( "values", 1 ) + " ₴")
} );
$( function() {
  $( ".filter__slider-mobile" ).slider({
    range: true,
    min: 0,
    max: 10000000,
    values: [ 1000, 9000000 ],
    create: function() {
      $(".filter__slider-min span").text($( this ).slider( "values", 0 ) + " ₴");
      $(".filter__slider-max span").text($( this ).slider( "values", 1 ) + " ₴");
    },
    slide: function( event, ui ) {
      $(".filter__slider-min span").text(ui.values[ 0 ] + " ₴");
      $(".filter__slider-max span").text(ui.values[ 1 ] + " ₴");
    }
  });
} );
$(".category__filter").click(function(){
  $(this).toggleClass("category__filter_active");
  $("aside").toggleClass("active");
  $("body").toggleClass("noscroll");
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