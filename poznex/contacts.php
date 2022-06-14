<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Contacts</title>
	<meta id="vp" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preload" href="assets/css/normalize.css" as="style">
	<link rel="preload" href="assets/css/grid.css" as="style">
	<link rel="preload" href="assets/css/slick.css" as="style">
	<link rel="preload" href="assets/css/jquery-ui.min.css" as="style">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" as="font" crossorigin="anonymous">
	<link rel="preload" href="assets/css/style.css" as="style">

	<link rel="preload" href="assets/js/jquery.min.js" as="script">
	<link rel="preload" href="assets/js/lazysizes.min.js" as="script">
	<link rel="preload" href="assets/js/slick.min.js" as="script">
	<link rel="preload" href="assets/js/jquery-ui.min.js" as="script">
	<link rel="preload" href="assets/js/jquery.ui.touch-punch.min.js" as="script">
	<link rel="preload" href="assets/js/main.js" as="script">

	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/grid.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/jquery-ui.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
<body>
	
<?php include("header.php"); ?>	

<section class="block-breadcrumbs">
	<div class="container">
		<ul>
			<li>
				<a href="index.php">Main</a>
				<svg viewBox="0 0 4 7">
					<use xlink:href="assets/img/set.svg#breadcrumb"></use>
				</svg>
			</li>
			<li class="current"><a href="#">Contacts</a></li>
		</ul>
	</div>
</section>

<section class="block-contact-info">
	<div id="map1"></div>
	<div class="container">
		<div class="contact-info">
			<p class="location">Ukraine, Gostomel</p>
			<p class="street">Gostomel, st. Labor, 1U</p>
			<p class="social">We are in the social networks:</p>
			<div class="social-row">
				<a href="#">
					<svg width="28.96" height="28.97" viewBox="0 0 35 35">
						<use xlink:href="assets/img/set.svg#instagram"></use>
					</svg>
				</a>
				<a href="#">
					<svg width="27.29" height="29" viewBox="0 0 33 35">
						<use xlink:href="assets/img/set.svg#facebook"></use>
					</svg>
				</a>
				<a href="#">
					<svg width="35.82" height="25.59" viewBox="0 0 44 31">
						<use xlink:href="assets/img/set.svg#youtube"></use>
					</svg>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="block-contact-form">
	<div class="full-background-wrapper">
	    <img class="d-none d-lg-block lazyload" data-srcset="assets/img/bg-contact-form.jpg,
			assets/img/bg-contact-form@1_5x.jpg 1.5x,
			assets/img/bg-contact-form@2x.jpg 2x,
			assets/img/bg-contact-form@3x.jpg 3x,
			assets/img/bg-contact-form@4x.jpg 4x"
			data-src="assets/img/bg-contact-form.jpg">
		<img class="d-lg-none lazyload" data-srcset="assets/img/bg-contact-form-mob.jpg,
			assets/img/bg-contact-form-mob@1_5x.jpg 1.5x,
			assets/img/bg-contact-form-mob@2x.jpg 2x,
			assets/img/bg-contact-form-mob@3x.jpg 3x,
			assets/img/bg-contact-form-mob@4x.jpg 4x"
			data-src="assets/img/bg-contact-form-mob.jpg">
	</div>
	<div class="container">
		<form>
			<h3>Connect with us</h3>
			<p>A prerequisite for participating in a test drive are:</p>
			<ul>
				<li>Availability of rights with an open category "B"</li>
				<li>Driving experience of at least 2 years</li>
			</ul>
			<div class="form-row">
				<div class="form-col">
					<input type="text" required="required" placeholder="Your name">
					<input type="tel" required="required" placeholder="Phone">
					<input type="email" required="required" placeholder="E-mail">
				</div>
				<textarea required="required" placeholder="Message"></textarea>
			</div>
			<div class="btn-wrap">
				<button type="submit">Submit</button>
				<p class="msg-success d-none">Sent</p>
				<p class="msg-error d-none">Sending error, please check your connection and try again</p>
				<div class="lds-dual-ring d-none"></div>
			</div>
		</form>
	</div>
</section>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrXdjgit4q-Yvrh1WH14JAGGIMQ4PmWwQ"></script>
<script>
	google.maps.event.addDomListener(window, "load", init1);
	function init1() {
	  var mapOptions = {
	    zoom: 6,
	    center: new google.maps.LatLng(50.4072618,30.5224247),
	    scrollwheel: false,
	    navigationControl: false,
	    mapTypeControl: false,
	    disableDefaultUI: true
	  };
	  var mapElement = document.getElementById("map1");
	  var image = "assets/img/point.svg";
	  var map = new google.maps.Map(mapElement, mapOptions);
	  var marker = new google.maps.Marker({ position: new google.maps.LatLng(50.4072618,30.5224247), map: map, icon: image, title: "Poznex" });
	}
</script>

<?php include("footer.php"); ?>