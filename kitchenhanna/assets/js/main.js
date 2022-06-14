$(".btn-menu").click(function(){
    $("body").toggleClass("noscroll");
    $(this).toggleClass("active");
    $("header hr").fadeToggle();
    $(".header-bottom").fadeToggle();    
});

$('.catalog-item-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    fade: true
});

$('.review-slider').slick({
    infinite: false,
    slidesToShow: 2,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    prevArrow: ".review-arrow-prev",
    nextArrow: ".review-arrow-next",
    responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});

var $root = $('html, body');

$('.header-bottom ul li a[href^="#"]').click(function() {
    var href = $.attr(this, 'href');

    if (window.matchMedia('(max-width: 992px)').matches){
        $("body").toggleClass("noscroll");
        $(".btn-menu").toggleClass("active");
        $("header hr").fadeToggle();
        $(".header-bottom").fadeToggle();   
    }

    $root.animate({
        scrollTop: $(href).offset().top
    }, 500, function () {
        
    });

    return false;
});

$('footer ul li a[href^="#"]').click(function() {
    var href = $.attr(this, 'href');

    $root.animate({
        scrollTop: $(href).offset().top
    }, 500, function () {
        
    });

    return false;
});


$(".material-tab").click(function(){
    $(".material-tab").removeClass("active");
    $(".material-content").removeClass("active");
    var materialTitle = $(this).text();
    $(this).addClass("active");
    $(".material-content .title:contains('" + materialTitle + "')").parents(".material-content").addClass("active");
});

$("input[type='tel']").inputmask({"mask": "+1 999-999-9999"});


$("body").on("click", ".call-modal-callback", function(){
    $(".modal-shadow").fadeIn();
    $(".modal-callback").fadeIn();
    $("body").addClass("noscroll");
});

$("body").on("click", ".modal-callback .btn-close", function(){
  $(".modal-callback").fadeOut();
  $(".modal-shadow").fadeOut();
  $(".modal-callback").find("input").val('');
  if (!$(".btn-menu").hasClass("active")){
        $("body").removeClass("noscroll");
    }
});

$(".btn-calc.call-modal-callback").click(function(){
  var catalogKitchen = $(this).parents(".catalog-item").find(".title").text();
  $(".modal-callback").find("input[name='kitchen']").val(catalogKitchen);
});

$(document).ready(function() {
    $("#formCallback, #formRequest").submit(function() {
        $.ajax({
            type: "POST",
            url: "mail-callback.php",
            data: $(this).serialize()
        }).done(function() {
            document.location.href = 'success.php';
        });
        return false;
    });
});

$( ".block-calculator select" ).selectmenu();

$("body").on("change", ".calculator-type input", function(){
    $(".calculator-size input").val("");
    if ($("#typeStraight").is(':checked')){
        $(".calculator-size-item").removeClass("visible");
        $(".calculator-size-item.size-a").addClass("visible");
        $(".block-calculator .calculator-size-item input").change();
    } else if ($("#typeGshapedLeft").is(':checked')){
        $(".calculator-size-item").removeClass("visible");
        $(".calculator-size-item.size-a").addClass("visible");
        $(".calculator-size-item.size-b").addClass("visible");
        $(".block-calculator .calculator-size-item input").change();
    } else if ($("#typeGshapedRight").is(':checked')){
        $(".calculator-size-item").removeClass("visible");
        $(".calculator-size-item.size-a").addClass("visible");
        $(".calculator-size-item.size-b").addClass("visible");
        $(".block-calculator .calculator-size-item input").change();
    } else if ($("#typePshaped").is(':checked')){
        $(".calculator-size-item").addClass("visible");
    }
});

$("body").on("click", ".ui-selectmenu-menu .ui-menu-item", function(){
    $(".block-calculator select").change();
});

$("body").on("change", ".block-calculator input[type='number'], .block-calculator select", function(){
    if ($("#sideA").val()){
        var sideA = ($("#sideA").val() / 100);
    } else {
        var sideA = 0;
    }
    if ($("#sideB").val()){
        var sideB = ($("#sideB").val() / 100);
    } else {
        var sideB = 0;
    }
    if ($("#sideC").val()){
        var sideC = ($("#sideC").val() / 100);
    } else {
        var sideC = 0;
    }
    var materialPrice = $(".block-calculator option:selected").attr("data-price");
    if (typeof materialPrice !== 'undefined' && materialPrice !== false) {
        materialPrice = $(".block-calculator option:selected").attr("data-price");
    } else {
        materialPrice = 0;
    }
    var price = parseInt((sideA + sideB + sideC) * materialPrice);
    $(".price-line span").text(price + " $");
    $(".block-calculator input[name='price']").val(price);
});

$(document).ready(function() {
    $("#calculator").submit(function() {
        $.ajax({
            type: "POST",
            url: "mail-callback.php",
            data: $(this).serialize()
        }).done(function() {
            document.location.href = 'success.php';
        });
        return false;
    });
});

$(".faq-head").click(function(){
    $(".faq-item").removeClass("active");
    $(this).parent(".faq-item").addClass("active");
});

$(document).ready(function() {
    $("#formDiscount").submit(function() {
        $.ajax({
            type: "POST",
            url: "mail-discount.php",
            data: $(this).serialize()
        }).done(function() {
            document.location.href = 'success.php';
        });
        return false;
    });
});

$(".block-contacts .contacts-tab-office").click(function(){
    $(".block-contacts").removeClass("fabric-active");
    $(".block-contacts").addClass("office-active");
});

$(".block-contacts .contacts-tab-fabric").click(function(){
    $(".block-contacts").removeClass("office-active");
    $(".block-contacts").addClass("fabric-active");
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