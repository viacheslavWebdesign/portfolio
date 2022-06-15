$(window).on("load resize",function(){
    if($(window).width() <= 992) {
      $("nav .menu-item-has-children:not(nav .menu-item-has-children .menu-item-has-children)").click(function(){
        if($(this).hasClass("active")){
            $(this).removeClass("active");
        } else {
            $(this).siblings().removeClass("active");
            $(this).addClass("active");
        }
      });
      $(".sub-menu .menu-item-has-children").click(function(e){
        e.stopPropagation();
        if($(this).hasClass("active")){
            $(this).removeClass("active");
        } else {
            $(this).siblings().removeClass("active");
            $(this).addClass("active");
        }
      });
      $(".btn-menu").click(function(){
        $("header").toggleClass("active");
        $(".header-mobile").toggleClass("active");
        $("body").toggleClass("noscroll");
      });
    } else {
        $(document).on("mouseenter mousemove",".modal-type-1 .modal-shadow",function(e){ 
            $(".ccursor-close").fadeIn("fast");
            $('body').css('cursor', 'none');
            var x = e.clientX;
            var y = e.clientY;
            var newposX = x - 36;
            var newposY = y - 36; $(".ccursor-close").css("transform","translate3d("+newposX+"px,"+newposY+"px,0px)");
        });
        $(document).on("mouseleave",".modal-type-1 .modal-shadow",function(e){ 
            $(".ccursor-close").fadeOut("fast");
            $('body').css('cursor', 'default');
        });

        $(".btn-menu").click(function(){
            // $("body").addClass("noscroll");
            $(".modal-side-info").addClass("active");
        });
        $(".modal-side-info .modal-shadow").click(function(){
            $("body").removeClass("noscroll");
            $(".modal-side-info").removeClass("active");
        });
    }    
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
});

$(".modal-type-1 .btn-close").click(function(){
    $("body").removeClass("noscroll");
    $(".modal-side-info").removeClass("active");
});

$(".btn-search").click(function(){
    // $("body").addClass("noscroll");
    $(".modal-search").addClass("active");
});

$(".modal-search .btn-close").click(function(){
    $("body").removeClass("noscroll");
    $(".modal-search").removeClass("active");
});

$('.slider-wrapper').slick({
  dots: false,
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  speed: 1000,
  fade: true,
  cssEase: 'linear',
  prevArrow: $('.slider-prev'),
  nextArrow: $('.slider-next'),
  autoplay: true,
  autoplaySpeed: 5000,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        dots: true
      }
    }
  ]
});

$(".faq-item").click(function(){
    $(this).toggleClass("active");
});

$(".call-modal-contact").click(function(){
    // $("body").addClass("noscroll");
    $(".modal-contact").addClass("active");
});

$(".modal-contact .btn-close").click(function(){
    $("body").removeClass("noscroll");
    $(".modal-contact").removeClass("active");
});