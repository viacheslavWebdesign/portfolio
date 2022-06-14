var ua = navigator.userAgent.toLowerCase();
var client = {
    isStrict:   document.compatMode == 'CSS1Compat',
    isOpera:    ua.indexOf('opera') > -1,
    isIE:       ua.indexOf('msie') > -1,
    isIE7:      ua.indexOf('msie 7') > -1,
    isSafari:   /webkit|khtml/.test(ua),
    isWindows:  ua.indexOf('windows') != -1 || ua.indexOf('win32') != -1,
    isMac:      ua.indexOf('macintosh') != -1 || ua.indexOf('mac os x') != -1,
    isLinux:    ua.indexOf('linux') != -1
};
client.isBorderBox = client.isIE && !client.isStrict;
client.isSafari3 = client.isSafari && !!(document.evaluate);
client.isGecko = ua.indexOf('gecko') != -1 && !client.isSafari;
var ltIE7 = client.isIE && !client.isIE7;
if(ltIE7){
  addLoadEvent(display_warning);
}
function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      if (oldonload) {
        oldonload();
      }
      func();
    }
  }
}
function display_warning(){
  var oldHtml = document.body.innerHTML;
  var css_a = 'text-decoration: underline; color: black; font-weight:bold;';
  var warningHtml = "";
  warningHtml += '<style>';
  warningHtml += 'html, body { ';
  warningHtml += 'overflow-y: hidden!important; ';
  warningHtml += 'height: 100%;';
  warningHtml += 'padding: 0px;';
  warningHtml += 'margin: 0px;';
  warningHtml += '</style>';
  warningHtml += "<div style='position: absolute; top:0px; bottom:auto; left:0px; right:0px; margin: 0px; height:17px; padding: 3px; font-family: Verdana, Helvetica, Geneva, Arial, sans-serif; font-size:10px; background-color:#FFFFE1; color:black; border-top: 1px solid #FFFFE1; border-bottom: 1px solid #cccccc; padding-left:15px; margin-left: -15px;'>";
  warningHtml += "<div style='float:right; text-align:right; width:60px; margin: auto 5px;'>";
  warningHtml += "<a style='text-decoration: none; color: black;' href='#close' onclick='this.parentNode.parentNode.style.display=\"none\"; this.parentNode.parentNode.parentNode.childNodes[0].childNodes[0].style.display=\"none\"; return false;'>[ close ]</a>";
  warningHtml += "</div>";
  warningHtml += "<div style='text-align:left; margin:auto 10px;'>";
  warningHtml += "You are using an out-of-date version of Internet Explorer, <a style='"+css_a+"' target='_blank' href='http://www.microsoft.com/windows/downloads/ie/getitnow.mspx'>click here</a> to download the latest version! Better yet, use <a style='"+css_a+"' target='_blank' href='http://www.mozilla.com/firefox/'>Firefox</a> or <a style='"+css_a+"' target='_blank' href='http://www.opera.com/download/'>Opera</a>.";
  warningHtml += "</div>";
  warningHtml += "</div>";
  var spacerHTML = "";
  spacerHTML += "<div style='height:25px; line-height:25px; font-size:10px; display:block; margin:0px; padding:0px;'>";
  spacerHTML += "</div>";
  var oldHTMLWrap = "";
  oldHTMLWrap += "<div style='width:100%; margin:0px; padding:0px; height:100%; overflow-y: scroll; position:relative;'>";
  oldHTMLWrap += spacerHTML;
  oldHTMLWrap += oldHtml;
  oldHTMLWrap += "</div>";
  document.body.innerHTML = oldHTMLWrap + warningHtml;
}

(window.onload = function () {
    screen.width <= 992 && document.querySelector("meta[name=viewport]").setAttribute("content", "user-scalable=no, width=320");
});
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 1000) {
        $(".btn-go-to-top").addClass("isvisible");

    } else {
        $(".btn-go-to-top").removeClass("isvisible");
    }
});
$("#phone").inputmask({"mask": "+ 38 999 999 99 99"});
new WOW().init();
if ($(window).width() <= 992) {
    /*$('#examples').load('/work/apdesign/ajax/examples-block-mobile.php');*/
    $('#examples-page').load('/work/apdesign/ajax/examples-page-mobile.php');
    $('.reviews, .resume').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        cssEase: 'linear',
        dots: true
    });
    $("body").on("click", ".examples-row__loader", function(){
        $("#examples-load").load('/work/apdesign/ajax/examples-load-mobile.php');
        $(this).remove();
    });
    $(".connect__item_btn").click(function(){
      $(".connect").toggleClass("connect_open");
  });
} else {
    /*$('#examples').load('/work/apdesign/ajax/examples-block-desktop.php');*/
    $('#examples-page').load('/work/apdesign/ajax/examples-page-desktop.php');
    $("body").on("click", ".examples-row__loader", function(){
        $("#examples-load").load('/work/apdesign/ajax/examples-load-desktop.php');
        $(this).remove();
    });
    $('.resume').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        fade: true,
        cssEase: 'linear',
        asNavFor: '.team__row',
        accessibility: false
    });
    $('.team__row').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        variableWidth: true,
        asNavFor: '.resume',
        focusOnSelect: true
    });
    $(".connect").hover(function(){
        $(this).toggleClass("connect_open");
    });
}
$(".header__language-list").click(function(){
    $(this).toggleClass("header__language-list_closed");
});

$(".sidemenu__language-list").click(function(){
    $(this).toggleClass("sidemenu__language-list_closed");
});

$(".header__btn-open").click(function(){
    $(".sidemenu").addClass("sidemenu_showed");
    $("body").addClass("noscroll");
});

$(".sidemenu__btn-close, .sidemenu__menu li a, .sidemenu__bg").click(function(){
    $(".sidemenu").removeClass("sidemenu_showed");
    $("body").removeClass("noscroll");
})
$('a[href^="#"]').click(function() {
    $('html, body').animate({
        scrollTop: $($.attr(this,'href')).offset().top
    }, 500, function () {
        
    });
    return false;
});
$('.head__text').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    autoplay: true,
    autoplaySpeed: 2000,
    vertical: true,
    pauseOnHover: false,
    swipe: false,
    touchMove: false
});
$("body").click(function(e) {
    if (e.target.id == "connect" || $(e.target).parents("#connect").length) {
      
    } else {
      $(".connect").removeClass("connect_open");
    }
});
$(".modal_callback__form").validate({
  rules: {
    name: "required",
    phone: "required",
  },
  messages: {
    name: "Номер введен некорректно",
    phone: "Номер введен некорректно"
  },
  submitHandler: function(){
    $(".modal_callback__form").submit(function() {
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: $(this).serialize()
        }).done(function() {
            $(this).find("input").val("");
            $(".modal-success").addClass("modal-success_visible");
            $(".modal_callback__form").trigger("reset");
        });
        return false;
    });
  }
});
$(".call-modal-callback").click(function(){
    $(".modal-shadow").addClass("modal-shadow_visible");
    $(".modal_callback").addClass("modal_visible");
    $("body").addClass("noscroll");
});

$(".modal__close").click(function(){
    $(".modal-shadow").removeClass("modal-shadow_visible");
    $(".modal").removeClass("modal_visible");
    $("body").removeClass("noscroll");
    $(".modal-success").removeClass("modal-success_visible");
});
$.fn.isOnScreen = function(){
    var win = $(window);
    var viewport = {
        top : win.scrollTop(),
        left : win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();
    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
};
function loadMap(){
    $("#map").after("<script type='text/javascript' charset='UTF-8' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDrXdjgit4q-Yvrh1WH14JAGGIMQ4PmWwQ'></script>")
}
function loadMapAdd() {
  var mapOptions = {
    zoom: 12,
    center: new google.maps.LatLng(50.4070628,30.5074247),
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    disableDefaultUI: true
  };
  var mapElement = document.getElementById("map");
  var image = "assets/img/point.svg";
  var map = new google.maps.Map(mapElement, mapOptions);
  var marker = new google.maps.Marker({ position: new google.maps.LatLng(50.4072618,30.5224247), map: map, icon: image, title: "apdesign" });
}
function noLoadMap(){};
$(window).scroll(function() {
    if ($("body").hasClass("home")){
        if ($('#contacts').isOnScreen() == true) {
            loadMap();
            loadMap = noLoadMap;
            setTimeout(function(){
                loadMapAdd();
                loadMapAdd = noLoadMap;
            }, 2000);
       };
    }
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