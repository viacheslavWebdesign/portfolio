(function($){

// Scroll to object with animation \/

var $root = $('html, body');

    $('.link-scroll').click(function() {
        var href = $.attr(this, 'href');

        $root.animate({
            scrollTop: $(href).offset().top
        }, 500, function () {
        });

        return false;
    });

// Heading animation \/

$(".heading__section").addClass("heading__section_animated");

$(".head__title-wrap").addClass("head__title-wrap_animated");
$(".head__text").addClass("head__text_animated");


$(".artist__section").addClass("artist__section_animated");

$(".contacts__title-wrap").addClass("contacts__title-wrap_animated");

// Scroll & Action \/

var throttle = function(type, name, obj){
    var obj = obj || window;
    var running = false;
    var func = function(){
      if (running){ return; }
      running = true;
      requestAnimationFrame(function(){
        obj.dispatchEvent(new CustomEvent(name));
        running = false;
      });
    };
    obj.addEventListener(type, func);
};

throttle("scroll", "optimizedScroll");

// Scroll & Action for logo \/

if ($(".header__line").length){
    window.addEventListener("optimizedScroll", function(){
        $(".header__line").css("width", (window.pageYOffset / 4) + "px");
    })
}

// Call & Hide menu \/

$(".header__btn").click(function(){
    $(".kmnd-body").addClass("kmnd-body_noscroll");
    $(".overlay_rose").fadeIn(500);
    setTimeout(function(){
        $(".menu").addClass("menu_active");
    }, 250);
});

$(".menu__btn").click(function(){
    $(".menu").removeClass("menu_active");
    setTimeout(function(){
        $(".overlay_rose").fadeOut(500);
        setTimeout(function(){
            $(".kmnd-body").removeClass("kmnd-body_noscroll");
        }, 500);
    }, 250);
});

// Check if element is visible in viewport \/

$.fn.isInViewport = function () {
    let elementTop = $(this).offset().top;
    let elementBottom = elementTop + $(this).outerHeight();

    let viewportTop = $(window).scrollTop();
    let viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
};

// Show & hide reset button for search on input \/

$("body").on("input", ".search input", function(){
    if ($(this).val().length > 1){
        $(this).parents(".search").addClass("search_active");
    } else {
        $(this).parents(".search").removeClass("search_active");
        $(this).parents(".search").find(".search__list").fadeOut(500);
    }
});

// Show & hide reset button for search on click \/

$(".search__reset").click(function(){
    $(this).parents(".search").removeClass("search_active");
    $(this).parents(".search").find(".search__list").fadeOut(500);
});

// Show & hide search list \/

$("body").on("input", ".search input", function(){
    if ($(this).val().length > 1){
        $(this).parents(".search").addClass("search_active");
        $(this).parents(".search").find(".search__list").fadeIn(500);
    }
});

// Show & hide filter dropdown \/

$("body").on("click", ".filter__toggler", function(){
    if ($(this).parents(".filter").hasClass("filter_active")){
        $(this).parent(".filter").removeClass("filter_active");
        $(this).parent(".filter").find(".filter__body").fadeOut(250);
    } else {
        $(".filter").removeClass("filter_active");
        $(".filter__body").fadeOut(250);
        $(this).parent(".filter").addClass("filter_active");
        $(this).parent(".filter").find(".filter__body").fadeIn(250);
    }
});

// Show & hide filters on mobile \/

$(".collection__filters-toggler").click(function(){
    $(this).toggleClass("collection__filters-toggler_active");
    $(".filter").fadeToggle(250);
});

// Animated catalog item & artists & news \/

if ($(".item").length){
    $(document).scroll(function(){
        $(".item").each(function(){
            if ($(this).isInViewport()){
                var item = $(this);
                setTimeout(function(){
                    $(item).addClass("item_animated");
                }, 500);
            };
        });
    });
}

if ($(".artists__item").length){
    $(document).scroll(function(){
        $(".artists__item").each(function(){
            if ($(this).isInViewport()){
                var item = $(this);
                setTimeout(function(){
                    $(item).addClass("artists__item_animated");
                }, 500);
            };
        });
    });
}

if ($(".blog__item").length){
    $(document).scroll(function(){
        $(".blog__item").each(function(){
            if ($(this).isInViewport()){
                var item = $(this);
                setTimeout(function(){
                    $(item).addClass("blog__item_animated");
                }, 500);
            };
        });
    });
}

// Display & hide "scroll to top" button \/

$(window).scroll(function() {    
    if ($(window).scrollTop() > 1000) {
        $(".overlay-top").fadeIn(500);
    } else {
        $(".overlay-top").fadeOut(500)
    }
});

// Add to favorites animation \/

$("body").on("click", ".item__favorite", function(e){
    e.preventDefault();
    e.stopPropagation();
    var itemFavorite = $(this).find("svg");
    if ($(this).hasClass("item__favorite_active")){
        $(this).removeClass("item__favorite_active");
        $(this).find("svg").css("transform", "scale(1.3)");
        setTimeout(function(){
            $(itemFavorite).css("transform", "scale(1)");
        }, 250);
    } else {
        $(this).addClass("item__favorite_active");
        $(this).find("svg").css("transform", "scale(1.3)");
        setTimeout(function(){
            $(itemFavorite).css("transform", "scale(1)");
        }, 250);

        var itemTitle = $(this).parent(".item").find(".item__title").text();

        $(".notification span").text(itemTitle);
        $(".notification").addClass("notification_active");
        setTimeout(function(){
            $(".notification").removeClass("notification_active");
        }, 1500);
    }
    if ($(".product-favorite_active").length > 0 || $(".item__favorite_active").length > 0){
        $(".overlay-favorite").fadeIn(500);
    } else {
        $(".overlay-favorite").fadeOut(500);
    }
});

$("body").on("click", ".product-favorite", function(){
    var productFavorite = $(this).find("svg");
    if ($(this).hasClass("product-favorite_active")){
        $(this).removeClass("product-favorite_active");
        $(this).find("svg").css("transform", "scale(1.3)");
        setTimeout(function(){
            $(productFavorite).css("transform", "scale(1)");
        }, 250);
    } else {
        $(this).addClass("product-favorite_active");
        $(this).find("svg").css("transform", "scale(1.3)");
        setTimeout(function(){
            $(productFavorite).css("transform", "scale(1)");
        }, 250);

        var productTitle = $(this).parents(".modal-product").find(".product-title").text();

        $(".notification span").text(productTitle);
        $(".notification").addClass("notification_active");
        setTimeout(function(){
            $(".notification").removeClass("notification_active");
        }, 1500);
    }
    if ($(".product-favorite_active").length > 0 || $(".item__favorite_active").length > 0){
        $(".overlay-favorite").fadeIn(500);
    } else {
        $(".overlay-favorite").fadeOut(500);
    }
});

// Hide notification \/

$(".notification__close").click(function(){
    $(".notification").removeClass("notification_active");
});

// Call/hide modal "Favorite" \/

$(".call-modal-favorite").click(function(){
    $(".kmnd-body").addClass("kmnd-body_noscroll");
    $(".overlay_gray").fadeIn(500);
    setTimeout(function(){
        $(".modal-favorite").addClass("modal-favorite_active");
    }, 250);
});

$(".modal-favorite .modal-close").click(function(){
    $(".modal-favorite").removeClass("modal-favorite_active");
    setTimeout(function(){
        $(".overlay_gray").fadeOut(500);
        setTimeout(function(){
            $(".kmnd-body").removeClass("kmnd-body_noscroll");
        }, 500);
    }, 250);
});

// Show & hide product modal \/

$("body").on("click", ".item", function(){
    if ($(".modal-product").hasClass("modal-product_active")){
        $(".modal-product").removeClass("modal-product_active");
        setTimeout(function(){
            $('.modal-product').animate({ scrollTop: 0 }, 500);
            $(".modal-product").addClass("modal-product_active");
        }, 500);
    } else {
        $(".kmnd-body").addClass("kmnd-body_noscroll");
        $(".overlay_black").fadeIn(500);
        setTimeout(function(){
            $(".modal-product").addClass("modal-product_active");
        }, 250);
    }
});

$(".modal-product .modal-close svg").click(function(){
    $(".modal-product").removeClass("modal-product_active");
    setTimeout(function(){
        $(".overlay_black").fadeOut(500);
        setTimeout(function(){
            $(".kmnd-body").removeClass("kmnd-body_noscroll");
        }, 500);
    }, 250);
});

// Zoom modal \/

$("body").on("click", ".modal-product .product-image", function(){
    var productImage = $(this).attr("style");
    $(".modal-zoom .zoom-image").attr("style", productImage);
    $(".modal-zoom").fadeIn(500);
});

$("body").on("click", ".modal-zoom .btn-zoom", function(){
    if ($(".modal-zoom").hasClass("modal-zoom_zoomed")){
        $(".modal-zoom").removeClass("modal-zoom_zoomed");
        $(".zoom-image").css({"left" : "0", "top" : "0"});
    } else {
        $(".modal-zoom").addClass("modal-zoom_zoomed");
    }
});

$(".modal-zoom .modal-close").click(function(){
    $(".modal-zoom").removeClass("modal-zoom_zoomed");
    $(".modal-zoom").fadeOut(500);
});

if($(window).width() > 992){
    $("body").on("mousemove", ".zoom-viewport", function(){
        if ($(".modal-zoom").hasClass("modal-zoom_zoomed")){
            $(".zoom-viewport").mousemove(function(event) {
                $(".zoom-image").css({"left" : (event.clientX * 2), "top" : (event.clientY * 2)});
            });
        } else {
            $(".zoom-image").css({"left" : "0", "top" : "0"});
        }
    });       
}

// Input with button \/

$(".input-button input").click(function(){
    $(this).parent().addClass("input-button_active");
});

// Show & hide cart modal \/

$("body").on("click", ".call-modal-cart", function(){
    if ($(".modal-cart").hasClass("modal-product_active")){
        $(".modal-product").removeClass("modal-product_active");
        setTimeout(function(){
            $('.modal-product').animate({ scrollTop: 0 }, 500);
            $(".modal-product").addClass("modal-product_active");
        }, 500);
    } else {
        $(".kmnd-body").addClass("kmnd-body_noscroll");
        $(".overlay_black").fadeIn(500);
        setTimeout(function(){
            $(".modal-cart").addClass("modal-cart_active");
        }, 250);
    }
});

$(".modal-cart .modal-close svg").click(function(){
    $(".modal-cart").removeClass("modal-cart_active");
    setTimeout(function(){
        $(".overlay_black").fadeOut(500);
        setTimeout(function(){
            $(".kmnd-body").removeClass("kmnd-body_noscroll");
        }, 500);
    }, 250);
});

// Title animation on hover

if($(window).width() > 992){
    $('.head__section').on('mousemove',(e) => {
      const x = e.pageX / $(window).width();
      const y = e.pageY / $(window).height();
      
      $('.head__title').css(
        'transform',
        'translate(' + x * 30 + 'px,' + y * 30 + 'px)'
      );
      
    });       
}

if($(window).width() > 992){
    $('.contacts__section').on('mousemove',(e) => {
      const x = e.pageX / $(window).width();
      const y = e.pageY / $(window).height();
      
      $('.contacts__title').css(
        'transform',
        'translate(' + x * 30 + 'px,' + y * 30 + 'px)'
      );
      
    });       
}

// Article share \/

$(".article__share-toggler").on("click", function(){
    $(".article__share-list").toggleClass("article__share-list_active");
});

$(".article__share-list").on("click", function(){
    $(".article__share-list").removeClass("article__share-list_active");
});

// Article image slider \/

$('.article__slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  prevArrow: $('.article__nav_prev'),
  nextArrow: $('.article__nav_next')
});

// About image slider \/

$('.about-content__slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: false,
  prevArrow: $('.about-content__nav_prev'),
  nextArrow: $('.about-content__nav_next')
});

// Product modal slider \/

if($(window).width() < 993){
    $('.product-related__slider').slick({
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 1,
      dots: false,
      prevArrow: $('.product-related__nav_prev'),
      nextArrow: $('.product-related__nav_next'),
      responsive: [
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });   
}

// About animation \/

if($(window).width() > 992){

    Object.keys = Object.keys || function(o, k){
        var r = [];
        for(k in o) r.hasOwnProperty.call(o, k) && r.push(k);
        return r;
    };

    $('.image-scene-1-6').transe({
        800: {
            top: '-120%',
            left: '60%',
            transform: 'scale(3)'
        },

        1400: {
            top: '11%',
            left: '28%',
            transform: 'scale(1)'
        },

        1700: {
            top: '11%',
            transform: 'scale(1)'
        },

        1900: {
            left: '117%',
            transform: 'scale(1.2)'
        }
    });

    $('.about-content__block_1 .about-content__content').transe({
        1500: {
            top: '0%'
        },

        1700: {
            top: '-500%'
        }
    });

    $('.about-content__block_1 .about-content__block-inner').transe({
        1500: {
            top: '0px',
        },

        2000: {
            top: '500px'
        }
    });

    $('.image-scene-1-7').transe({
        1800: {
            transform: 'rotate(0deg)',
            left: '0px',
            top: '0px',
            opacity: '1'
        },

        1850: {
            transform: 'rotate(-30deg)',
            left: '-200px',
            top: '75px',
            opacity: '0'
        },

        2000: {
            transform: 'rotate(-180deg)',
            left: '-200px',
            top: '75px',
            opacity: '0'
        }
    });

    $('.image-scene-1-2').transe({
        1800: {
            transform: 'rotate(0deg)',
            left: '0px',
            top: '0px',
            opacity: '1'
        },

        1850: {
            transform: 'rotate(30deg)',
            left: '200px',
            top: '75px',
            opacity: '0'
        },

        2000: {
            transform: 'rotate(180deg)',
            left: '200px',
            top: '75px',
            opacity: '0'
        }
    });

    $(".about-content__block_1").css("margin-bottom", "500px");



    $('.image-scene-2-1').transe({
        2800: {
            top: '0px',
            transform: 'rotate(0deg)',
            opacity: '1'
        },

        2900: {
            top: '100px',
            transform: 'rotate(0deg)',
            opacity: '1'
        },

        3100: {
            top: '300px',
            transform: 'rotate(45deg)',
            opacity: '0'
        }
    });

    $('.about-content__block-line').transe({
        2800: {
            opacity: '1'
        },

        2950: {
            opacity: '0'
        }
    });



    $(".about-content__block_2").css("margin-bottom", "200px");


    $('.image-scene-4-10').transe({
        4700: {
            top: '0px'
        },

        5000: {
            top: '-800px'
        }
    });

    $('.image-scene-4-1').transe({
        5000: {
            opacity: '1'
        },

        5100: {
            opacity: '0'
        }
    });

    $('.image-scene-4-9').transe({
        4900: {
            transform: 'scale(1)',
            top: '0px'
        },

        5200: {
            transform: 'scale(2)',
            top: '-300px'
        }
    });

    $('.image-scene-4-6').transe({
        4900: {
            transform: 'rotate(0deg)',
            top: '24%',
            left: '8%'
        },

        5100: {
            transform: 'rotate(-90deg)',
            top: '65%',
            left: '-4%'
        }
    });

    $('.image-scene-4-5').transe({
        4900: {
            transform: 'rotate(0deg)',
            top: '35%',
            left: '83%'
        },

        5000: {
            transform: 'rotate(-15deg)',
            top: '49%',
            left: '80%'
        },

        5100: {
            transform: 'rotate(-90deg)',
            top: '63%',
            left: '75%'
        }
    });

}

if($(window).width() > 576 && $(window).width() < 993){

    Object.keys = Object.keys || function(o, k){
        var r = [];
        for(k in o) r.hasOwnProperty.call(o, k) && r.push(k);
        return r;
    };

    $('.image-scene-2-2').transe({
        800: {
            top: '20%'
        },

        1300: {
            top: '35%'
        },

        1800: {
            top: '40%'
        }
    });

    $('.image-scene-2-3').transe({
        800: {
            top: '10%'
        },

        1300: {
            top: '32%'
        },

        1800: {
            top: '50%'
        }
    });

    $('.image-scene-2-4').transe({
        800: {
            top: '0%'
        },

        1300: {
            top: '30%'
        },

        1800: {
            top: '60%'
        }
    });

    $('.image-scene-2-5').transe({
        800: {
            top: '-10%'
        },

        1300: {
            top: '29%'
        },

        1800: {
            top: '70%'
        }
    });

    $('.image-scene-2-1').transe({
        1300: {
            transform: 'rotate(0deg)',
            top: '0px',
            opacity: '1'
        },

        1800: {
            transform: 'rotate(45deg)',
            top: '200px',
            opacity: '0'
        }
    });

    $('.image-scene-3-1').transe({
        2500: {
            top: '-50px'
        },

        2900: {
            top: '0px'
        },

        3400: {
            top: '50px'
        }
    });

    $('.image-scene-3-2').transe({
        2500: {
            top: '50px'
        },

        2900: {
            top: '0px'
        },

        3400: {
            top: '-50px'
        }
    });


    $('.image-scene-4-10').transe({
        4000: {
            top: '0px'
        },

        4400: {
            top: '-800px'
        }
    });

    $('.image-scene-4-1').transe({
        4000: {
            opacity: '1'
        },

        4400: {
            opacity: '0'
        }
    });

    $('.image-scene-4-9').transe({
        4100: {
            transform: 'scale(1)',
            top: '0px'
        },

        4400: {
            transform: 'scale(2)',
            top: '-300px'
        }
    });

    $('.image-scene-4-6').transe({
        4100: {
            transform: 'rotate(0deg)',
            top: '24%',
            left: '8%'
        },

        4400: {
            transform: 'rotate(-90deg)',
            top: '65%',
            left: '-4%'
        }
    });

    $('.image-scene-4-5').transe({
        4100: {
            transform: 'rotate(0deg)',
            top: '35%',
            left: '83%'
        },

        4200: {
            transform: 'rotate(-15deg)',
            top: '49%',
            left: '80%'
        },

        4400: {
            transform: 'rotate(-90deg)',
            top: '63%',
            left: '75%'
        }
    });
}

if($(window).width() < 577){

    $('.image-scene-1-6').transe({
        0: {
            top: '-80%',
            width: '100%',
            left: '50%'
        },

        500: {
            top: '30%',
            width: '60.1504%',
            left: '56%'
        }
    });

    $('.image-scene-1-7').transe({
        600: {
            transform: 'rotate(0deg)',
            left: '0px',
            top: '0px',
            opacity: '1'
        },

        700: {
            transform: 'rotate(-30deg)',
            left: '-80px',
            top: '30px',
            opacity: '0'
        },

        800: {
            transform: 'rotate(-180deg)',
            left: '-80px',
            top: '30px',
            opacity: '0'
        }
    });

    $('.image-scene-1-2').transe({
        600: {
            transform: 'rotate(0deg)',
            left: '0px',
            top: '0px',
            opacity: '1'
        },

        700: {
            transform: 'rotate(30deg)',
            left: '80px',
            top: '30px',
            opacity: '0'
        },

        800: {
            transform: 'rotate(180deg)',
            left: '80px',
            top: '30px',
            opacity: '0'
        }
    });

    $('.image-scene-2-2').transe({
        1400: {
            top: '20%'
        },

        1600: {
            top: '35%'
        },

        2000: {
            top: '40%'
        }
    });

    $('.image-scene-2-3').transe({
        1400: {
            top: '10%'
        },

        1600: {
            top: '32%'
        },

        2000: {
            top: '50%'
        }
    });

    $('.image-scene-2-4').transe({
        1400: {
            top: '0%'
        },

        1600: {
            top: '30%'
        },

        2000: {
            top: '60%'
        }
    });

    $('.image-scene-2-5').transe({
        1400: {
            top: '-10%'
        },

        1600: {
            top: '29%'
        },

        2000: {
            top: '70%'
        }
    });

    $('.image-scene-2-1').transe({
        1600: {
            transform: 'rotate(0deg)',
            top: '0px',
            opacity: '1'
        },

        1900: {
            transform: 'rotate(45deg)',
            top: '200px',
            opacity: '0'
        }
    });

    $('.image-scene-3-1').transe({
        2500: {
            top: '-50px'
        },

        2900: {
            top: '0px'
        },

        3400: {
            top: '50px'
        }
    });

    $('.image-scene-3-2').transe({
        2500: {
            top: '50px'
        },

        2900: {
            top: '0px'
        },

        3400: {
            top: '-50px'
        }
    });

    $('.image-scene-4-10').transe({
        3800: {
            top: '0px'
        },

        4200: {
            top: '-800px'
        }
    });

    $('.image-scene-4-1').transe({
        3800: {
            opacity: '1'
        },

        4200: {
            opacity: '0'
        }
    });

    $('.image-scene-4-9').transe({
        3900: {
            transform: 'scale(1)',
            top: '0px'
        },

        4200: {
            transform: 'scale(2)',
            top: '-300px'
        }
    });

    $('.image-scene-4-6').transe({
        3900: {
            transform: 'rotate(0deg)',
            top: '24%',
            left: '8%'
        },

        4200: {
            transform: 'rotate(-90deg)',
            top: '65%',
            left: '-4%'
        }
    });

    $('.image-scene-4-5').transe({
        3900: {
            transform: 'rotate(0deg)',
            top: '35%',
            left: '83%'
        },

        4000: {
            transform: 'rotate(-15deg)',
            top: '49%',
            left: '80%'
        },

        4200: {
            transform: 'rotate(-90deg)',
            top: '63%',
            left: '75%'
        }
    });
}

if($(window).width() > 992){
    $('.about-head__section').on('mousemove',(e) => {
      const x = e.pageX / $(window).width();
      const y = e.pageY / $(window).height();
      
      $('.about-head__title').css(
        'transform',
        'translate(' + x * 30 + 'px,' + y * 10 + 'px)'
      );
      
    });       
}

if($(window).width() > 992){

    $('.about-content__block_2 .about-content__row').on('mousemove',(e) => {

      const x = e.pageX - $(".about-content__block_2 .about-content__scene").position().left - 400;
      const y = e.pageY - $(".about-content__block_2 .about-content__scene").position().top - 2800;
      
      $('.image-scene-2-2').css(
        'transform',
        // 'translate(' + x * 60 + 'px,' + y * 30 + 'px)'
        'translate(' + x * 0.15 + 'px,' + y * 0.2 + 'px)'
      );

      $('.image-scene-2-3').css(
        'transform',
        // 'translate(' + x * 90 + 'px,' + y * 45 + 'px)'
        'translate(' + x * 0.3 + 'px,' + y * 0.4 + 'px)'
      );

      $('.image-scene-2-4').css(
        'transform',
        // 'translate(' + x * 120 + 'px,' + y * 60 + 'px)'
        'translate(' + x * 0.45 + 'px,' + y * 0.6 + 'px)'
      );

      $('.image-scene-2-5').css(
        'transform',
        // 'translate(' + x * 180 + 'px,' + y * 75 + 'px)'
        'translate(' + x * 0.6 + 'px,' + y * 0.8 + 'px)'
      );
      
    });       
}


if($(window).width() > 992){
    $('.about-content__block_3 .about-content__block-inner').on('mousemove',(e) => {
      const x = e.pageX - $(".about-content__block_3 .about-content__block-inner").position().left - 800;
      const y = e.pageY - $(".about-content__block_3 .about-content__block-inner").position().top - 100;
      
      $('.image-scene-3-1').css(
        'transform',
        'translate(' + x * 0.1  + 'px,' + y * 0.2  + 'px)'
      );

      $('.image-scene-3-2').css(
        'transform',
        'translate(' + x * 0.1 * -1  + 'px,' + y * 0.2 * -1  + 'px)'
      );
      
    });       
}

if($(window).width() > 992){
    $('.about-content__block_4').on('mousemove',(e) => {
      const x = e.pageX / $(window).width();
      const y = e.pageY / $(window).height();
      
      $('.image-scene-4-1').css(
        'transform',
        'translate(' + x * 30 * -1 + 'px,' + y * 10 * -1 + 'px)'
      );
      
    });       
}

if ($(".about-content__block_3").length){
    $(document).scroll(function(){
        if ($(".about-content__block_3").isInViewport()){
            $(".about-content__block_3").addClass("about-content__block_animated");
        };
    });
}

if ($(".about-content__block_4").length){
    $(document).scroll(function(){
        if ($(".about-content__block_4").isInViewport()){
            $(".about-content__block_4").addClass("about-content__block_animated");
        };
    });
}

// Disable hover & focus on mobile \/

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