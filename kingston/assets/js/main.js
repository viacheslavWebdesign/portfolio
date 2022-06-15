(function($){

var $root = $('html, body');

$('.link-scroll').click(function() {
    var href = $.attr(this, 'href');

    $root.animate({
        scrollTop: $(href).offset().top
    }, 500, function () {
        
    });

    return false;
});

$.fn.isInViewport = function () {
    let elementTop = $(this).offset().top;
    let elementBottom = elementTop + $(this).outerHeight();

    let viewportTop = $(window).scrollTop();
    let viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
};

$(".video__btn").click(function(){
    var video = $(this).attr("data-video");
    $(this).parents(".video").find("iframe").attr("src", "https://www.youtube.com/embed/"+ video +"?rel=0&amp;showinfo=0");
    $(this).parents(".video").addClass("video_active");
});

$(".header__btn").click(function(){
    $(".kmnd-body").toggleClass("kmnd-body-noscroll");
    $(".header").toggleClass("header_active");
});

$(".faq__head").click(function(){
    $(".faq__item").removeClass("faq__item_active");
    $(this).parents(".faq__item").addClass("faq__item_active");
});

if($(window).width() <= 992){
    $(".header a").click(function(){
        $(".kmnd-body").removeClass("kmnd-body-noscroll");
        $(".header").removeClass("header_active");
    });
}

$(window).on('scroll', function(){
    if($(window).width() > 992){
        $(".head__image").css({
            'top': ($(this).scrollTop() / 6) + "px"
        });
        $(".video").css({
            'top': 100-($(this).scrollTop() / 10) + "px"
        });
        /*$(".game__pc").css({
            'top': 820-($(this).scrollTop() / 10) + "px"
        });*/
    }
});

$(window).scroll(function (){
    if ($(".overview__row").length){
        if ($('.overview__row').isInViewport()) {
            $('.overview__row').addClass('overview__row_animated');
        }
    }
    if ($(".buy__row").length){
        if ($('.buy__row').isInViewport()) {
            $('.buy__row').addClass('buy__row_animated');
        }
    }
});


var minutes = 00; 
var seconds = 00; 
var milliseconds = 00; 
var appendMilliseconds = document.getElementById("milliseconds")
var appendSeconds = document.getElementById("seconds")
var appendMinutes = document.getElementById("minutes")
var Interval ;

function startTimer(){
    milliseconds++; 

    if(milliseconds <= 9){
      appendMilliseconds.innerHTML = "0" + milliseconds;
    }

    if (milliseconds > 9){
      appendMilliseconds.innerHTML = milliseconds;
      
    } 

    if (milliseconds > 99) {
      seconds++;
      appendSeconds.innerHTML = "0" + seconds;
      milliseconds = 0;
      appendMilliseconds.innerHTML = "0" + 0;
    }

    if (seconds > 9){
      appendSeconds.innerHTML = seconds;
    }

    if (seconds > 60) {
      minutes++;
      appendMinutes.innerHTML = "0" + minutes;
      seconds = 0;
      appendSeconds.innerHTML = "0" + 0;
    }

    if (minutes > 9){
      appendMinutes.innerHTML = minutes;
    }
}


$(".game__start").click(function(){
    $(".game__image").addClass("game__image_hide");
    $(".game__content").addClass("game__content_hide");
    $(".pc").addClass("pc_visible");
    $(".controls").addClass("controls_visible");
    clearInterval(Interval);
    Interval = setInterval(startTimer, 10);
});

$("body").on("click", ".controls__item", function(){
    $(".controls__item").addClass("controls__item_inactive");
    $(this).removeClass("controls__item_inactive");
    $(this).addClass("controls__item_active");
    $(".pc__item").addClass("pc__item_active");
});

$("body").on("click", ".pc__item", function(){
    var id = $(".controls").find(".controls__item.controls__item_active").attr("data-control");
    if ($(this).attr("data-holder") == id){
        $(this).addClass("pc__item_inactive");
        $(".pc").find("[data-component='" + id + "']").addClass("pc__component_active"); 
        $(".controls__item").removeClass("controls__item_inactive");
        $(".controls__item").removeClass("controls__item_active");
        $(".controls").find("[data-control='" + id + "']").addClass("controls__item_unvailable"); 
        $(".pc").addClass("pc_active");
        setTimeout(function(){
            $(".pc").removeClass("pc_active");
        }, 100);
        if ($(".controls__item_unvailable").length == 7){
            $(".game__current").addClass("game__current_hide");
            $(".game__next").addClass("game__next_visible");
            clearInterval(Interval);
        }
    } else {
        $(".controls").find(".controls__item.controls__item_active").addClass("controls__item_error");
        setTimeout(function(){
            $(".controls").find(".controls__item.controls__item_active").removeClass("controls__item_error");
            setTimeout(function(){
                $(".controls").find(".controls__item.controls__item_active").addClass("controls__item_error");
                setTimeout(function(){
                    $(".controls").find(".controls__item.controls__item_active").removeClass("controls__item_error");
                }, 500);
            }, 500);
        }, 500);
        $(".pc__item").addClass("pc__item_error");
        setTimeout(function(){
            $(".pc__item").removeClass("pc__item_error");
            setTimeout(function(){
                $(".pc__item").addClass("pc__item_error");
                setTimeout(function(){
                    $(".pc__item").removeClass("pc__item_error");
                }, 500);
            }, 500);
        }, 500);
    }
});


$(".game__continue").click(function(){
    $(".controls").removeClass("controls_visible");
    $(".game__blank").addClass("game__blank_visible");
});

$("#form").submit(function() {
    $.ajax({
        type: "POST",
        url: "mail.php",
        data: $(this).serialize()
    }).done(function() {
        $(this).find("input").val("");
        $("#form").trigger("reset");
        $(".game__blank").removeClass("game__blank_visible");
        $(".game__finish").addClass("game__finish_visible");
    });
    return false;
});

$("body").on("click", ".game__retry", function(){
    $(".game__finish").removeClass("game__finish_visible");
    $(".game__current").removeClass("game__current_hide");
    $(".game__next").removeClass("game__next_visible");
    $(".controls").addClass("controls_visible");
    $(".game__blank").removeClass("game__blank_visible");
    clearInterval(Interval);
    Interval = setInterval(startTimer, 10);

    $(".pc__item").removeClass("pc__item_active");
    $(".pc__item").removeClass("pc__item_inactive");
    $(".pc__item").removeClass("pc__item_error");
    $(".pc__component").removeClass("pc__component_active");
    $(".controls__item").removeClass("controls__item_active");
    $(".controls__item").removeClass("controls__item_inactive");
    $(".controls__item").removeClass("controls__item_unvailable");
    $(".controls__item").removeClass("controls__item_error");
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

})(jQuery);