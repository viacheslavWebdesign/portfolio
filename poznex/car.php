<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Car</title>
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
			<li>
				<a href="index.php">Car catalog</a>
				<svg viewBox="0 0 4 7">
					<use xlink:href="assets/img/set.svg#breadcrumb"></use>
				</svg>
			</li>
			<li class="current"><a href="#">Tesla model 3 standard plus (eu)</a></li>
		</ul>
	</div>
</section>

<section class="block-car">
	<div class="container">
		<div class="car-head">
			<h1>Tesla Model 3 Standard Plus (EU)</h1>
			<div class="car-status instock">In stock</div>
		</div>
		<div class="img-wrap">
			<img class="lazyload" data-srcset="assets/img/img-car.jpg,
			assets/img/img-car@1_5x.jpg 1.5x,
			assets/img/img-car@2x.jpg 2x,
			assets/img/img-car@3x.jpg 3x,
			assets/img/img-car@4x.jpg 4x"
			data-src="assets/img/img-car.jpg">
		</div>
		<div class="spec">
			<h2>Characteristics</h2>
			<div class="spec-list">
				<ul>
					<li><span>Model</span><strong>Model 3</strong></li>
					<li><span>Year of issue</span><strong>2020</strong></li>
					<li><span>Drive unit</span><strong>Rear</strong></li>
				</ul>
				<ul>
					<li><span>Suspension</span><strong>Spring</strong></li>
					<li><span>Power reserve</span><strong>350-400</strong></li>
					<li><span>City</span><strong>Kyiv</strong></li>
				</ul>
			</div>
		</div>
		<article>
			<p>If you are not considering used cars, but you understand that you definitely want a Tesla Model 3 - we can help you!</p>
			<p>TSK offers assistance in purchasing new Tesla electric vehicles from Europe.</p>
			<p>The indicated price includes delivery and customs clearance of Ukraine.</p>
			<h3>The benefits of buying <br class="d-lg-none">a new Tesla electric car:</h3>
			<ul>
				<li>Official European Warranty: 4 years or 80,000 km per vehicle, whichever comes first + 8 years or 160,000 km for battery and Standard Range Plus engines (190,000 km for Long Range or Performance), <br>Whichever comes first, with at least 70% battery capacity remaining during the warranty period.</li>
				<li>Three-phase (Type 2 charging port): European electric vehicles are already able to use Europe's largest network of Supercharger charging stations without modification. this allows you and your family to travel comfortably in Europe.</li>
				</ul>
				<h2>What is the advantage of buying a new Tesla electric car from us:</h2>
			<ul>
				<li>You get a new car with the lowest possible mileage: we deliver electric cars from Europe to Ukraine on a car transporter or tow truck and make sure to arrange insurance for the transported vehicle.</li>
				<li>We will bring your Tesla to the ideal look: we have the opportunity to check all components and assemblies at our service station, as well as the ability to bring the car's gaps to more familiar ones.</li>
				<li>We are the only ones on the market who have ready-made carbon, and not only, customization packages for your Tesla, which will make your car unique and emphasize its importance to you. You will find customization options at the link https://tsk.ua/tuning</li>
				<li>We can help with car registration in Ukraine: if you do not know how to do it yourself, we can help you with this issue.</li>
			</ul>
		</article>
	</div>
</section>

<?php include("footer.php"); ?>