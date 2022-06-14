(window.onload = function () {
    screen.width < 607 && document.getElementById("vp").setAttribute("content", "user-scalable=no,width=607");
});
$("body").on("click", ".btn-search", function(){
    $(".navbar-search").toggleClass("active");
    $(".navbar").removeClass("active");
    $("body").removeClass("noscroll");
});
$(".btn-menu").click(function () {
    $(".navbar").toggleClass("active");
    $("body").toggleClass("noscroll");
});
$(".btn-auth").click(function () {
    $(".modal-shadow").addClass("active"); $(".modal-auth").addClass("active");
});
$("#filterPrice").slider({
    range: !0,
    min: 0,
    max: 15800,
    values: [0, 10600],
    slide: function (e, t) {
        $("#filterPriceFrom").val(t.values[0]);
        $("#filterPriceTo").val(t.values[1]);
    },
});
$("#filterPriceFrom").val($("#filterPrice").slider("values", 0)),
$("#filterPriceTo").val($("#filterPrice").slider("values", 1)),
$(".count-control.minus").click(function () {
    var e = parseFloat($(this).next(".count-value").val());
    "1" != e &&
        $(this)
            .next(".count-value")
            .val(e - 1);
});
$(".count-control.plus").click(function () {
    var e = parseFloat($(this).prev(".count-value").val());
    $(this)
        .prev(".count-value")
        .val(e + 1);
});
$(".details-delivery").click(function () {
    $(".details-tab, .details-content").removeClass("active");
    $(".details-delivery").addClass("active");
});
$(".details-payment").click(function () {
    $(".details-tab, .details-content").removeClass("active");
    $(".details-payment").addClass("active");
});
$(".details-warranty").click(function () {
    $(".details-tab, .details-content").removeClass("active");
    $(".details-warranty").addClass("active");
});
$(".item-reset").click(function () {
    //$(".block-parts-type-item figure img").removeAttr("style");
    $("#draggable").css('width','auto');
    $("#draggable").css('top','auto');
    $("#draggable").css('bottom','auto');
    $("#draggable").css('left','auto');
    $("#draggable").css('right','auto');
    $("#draggable").css('transform','none');
});
$(".item-minus").click(function () {
    $(".block-parts-type-item figure img").width($(".block-parts-type-item figure img").width() - 100);
});
$(".item-plus").click(function () {
    $(".block-parts-type-item figure img").width($(".block-parts-type-item figure img").width() + 100);
});
$(".block-cars .btn-title").click(function () {
    $("aside").toggleClass("filters-active");
});
$(".block-parts .btn-title").click(function () {
    $("aside").toggleClass("filters-active");
});
$(".header-wrap").slick({ infinite: !0, slidesToShow: 1, slidesToScroll: 1, dots: !1, arrows: !0, prevArrow: $(".slide-prev"), nextArrow: $(".slide-next") }),
$(".part-img-slider").slick({ infinite: !0, slidesToShow: 1, slidesToScroll: 1, dots: !1, arrows: !0, prevArrow: $(".part-img-prev"), nextArrow: $(".part-img-next") }),
$(".dropdown-currency").click(function () {
    $(this).toggleClass("active");
});
$(".modal-shadow").click(function () {
    $(this).removeClass("active");
    $(".modal-wrap").removeClass("active");
});
$(window).scroll(function () {
    $(window).scrollTop() >= 600 ? $(".goup").removeClass("d-none") : $(".goup").addClass("d-none");
});
$('.customTimeInput').timepicker({
    timeFormat: 'HH:mm',
    interval: 10,
    minTime: '9',
    maxTime: '21',
    defaultTime: 'Check-in time',
    startTime: '9',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});
$( ".customDateInput" ).datepicker();
var $root = $("html, body");
function hasTouch() {
    return "ontouchstart" in document.documentElement || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0;
}
if (
    ($('a[href^="#"]').click(function () {
        var e = $.attr(this, "href");
        return $root.animate({ scrollTop: $(e).offset().top }, 500, function () {}), !1;
    }),
    hasTouch())
)
    try {
        for (var si in document.styleSheets) {
            var styleSheet = document.styleSheets[si];
            if (styleSheet.rules) for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) styleSheet.rules[ri].selectorText && styleSheet.rules[ri].selectorText.match(":hover") && styleSheet.deleteRule(ri);
        }
    } catch (e) {}
