<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Service</title>
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
			<li class="current"><a href="#">Tesla Service</a></li>
		</ul>
	</div>
</section>

<div class="block-service-header">
	<div class="full-background-wrapper">
	    <img class="d-none d-lg-block lazyload" data-srcset="assets/img/bg-service.jpg,
			assets/img/bg-service@1_5x.jpg 1.5x,
			assets/img/bg-service@2x.jpg 2x,
			assets/img/bg-service@3x.jpg 3x,
			assets/img/bg-service@4x.jpg 4x"
			data-src="assets/img/bg-service.jpg">
		<img class="d-lg-none lazyload" data-srcset="assets/img/bg-service-mob.jpg,
			assets/img/bg-service-mob@1_5x.jpg 1.5x,
			assets/img/bg-service-mob@2x.jpg 2x,
			assets/img/bg-service-mob@3x.jpg 3x,
			assets/img/bg-service-mob@4x.jpg 4x"
			data-src="assets/img/bg-service-mob.jpg">
	</div>
	<div class="container">
		<h1>Tesla Service <br>DAILY</h1>
		<p>from <span>09</span><span>00</span> to <span>21</span><span>00</span></p>
	</div>
</div>

<section class="block-service-contacts">
	<div class="container">
		<form>
			<div class="full-background-wrapper">
		    <img class="d-none d-lg-block lazyload" data-srcset="assets/img/bg-service-form.jpg,
				assets/img/bg-service-form@1_5x.jpg 1.5x,
				assets/img/bg-service-form@2x.jpg 2x,
				assets/img/bg-service-form@3x.jpg 3x,
				assets/img/bg-service-form@4x.jpg 4x"
				data-src="assets/img/bg-service-form.jpg">
		</div>
			<h3>Applying for Tesla Vehicle Service</h3>
			<div class="form-row">
				<input type="text" required="required" placeholder="Name">
				<input type="text" required="required" placeholder="Surname">
			</div>
			<div class="form-row phone">
				<input type="tel" required="required" placeholder="Phone">
			</div>
			<div class="form-row model">
				<input type="text" required="required" placeholder="Tesla car model">
			</div>
			<div class="form-row">
				<input type="text" required="required" placeholder="Release month">
				<input type="text" required="required" placeholder="Year of issue">
			</div>
			<div class="form-row">
				<textarea placeholder="Describe the reason for contacting the service" required="required"></textarea>
			</div>
			<p>We will process your request as soon as possible, <br>our manager will call you back and agree on the date and time of the visit.</p>
			<div class="btn-wrap">
				<button type="submit">Send request</button>
				<p class="msg-success d-none">Sent</p>
				<p class="msg-error d-none">Sending error, please check your connection and try again</p>
				<div class="lds-dual-ring d-none"></div>
			</div>
		</form>
	</div>
</section>

<section class="block-interval">
	<div class="container">
		<p class="uptitle">Recommended <br class="d-lg-none">service interval</p>
		<h2>Once a year or <br class="d-lg-none"><span>every 20,000 km</span></h2>
		<div class="row">
			<div class="col-lg-4">
				<div class="interval-item">
					<div class="interval-head">
						<p class="interval-title">Service<br>service</p>
						<svg width="50" height="50" viewBox="0 0 50 50">
							<use xlink:href="assets/img/set.svg#service1"></use>
						</svg>
					</div>
					<ul>
						<li>Car maintenance</li>
						<li>Diagnostic work</li>
						<li>Repair work of any complexity</li>
						<li>Scheduled maintenance</li>
						<li>Car troubleshooting</li>
						<li>Expert assessment when selling a car</li>
					</ul>		
				</div>
			</div>
			<div class="col-lg-4">
				<div class="interval-item">
					<div class="interval-head">
						<p class="interval-title">Restoration-<br>repair</p>
						<svg width="51" height="50" viewBox="0 0 51 50">
							<use xlink:href="assets/img/set.svg#service2"></use>
						</svg>
					</div>
					<ul>
						<li>Damage assessment</li>
						<li>Spare parts package</li>
						<li>Leveling works of any complexity</li>
						<li>Car body preparation and painting</li>
						<li>Prompt repair of minor damage</li>
						<li>Working with materials from leading manufacturers</li>
					</ul>		
				</div>
			</div>
			<div class="col-lg-4">
				<div class="interval-item">
					<div class="interval-head">
						<p class="interval-title">Electronic<br>works</p>
						<svg width="50" height="50" viewBox="0 0 50 50">
							<use xlink:href="assets/img/set.svg#service3"></use>
						</svg>
					</div>
					<ul>
						<li>Open diagnostics of <br class="d-lg-none">car</li>
						<li>USA to EU</li>
						<li>Programming electronic <br class="d-lg-none">blocks</li>
						<li>Setting up three-phase charging</li>
						<li>Update Help</li>
						<li>Key binding</li>
						<li>Hardware calibration, <br class="d-lg-none">autopilot activation</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="block-service-features">
	<div class="full-background-wrapper">
	    <img class="d-none d-lg-block lazyload" data-srcset="assets/img/bg-service-feature1.jpg,
			assets/img/bg-service-feature1@1_5x.jpg 1.5x,
			assets/img/bg-service-feature1@2x.jpg 2x,
			assets/img/bg-service-feature1@3x.jpg 3x,
			assets/img/bg-service-feature1@4x.jpg 4x"
			data-src="assets/img/bg-service-feature1.jpg">
		<img class="d-lg-none lazyload" data-srcset="assets/img/img-service-feature1-mob.jpg,
			assets/img/img-service-feature1-mob@1_5x.jpg 1.5x,
			assets/img/img-service-feature1-mob@2x.jpg 2x,
			assets/img/img-service-feature1-mob@3x.jpg 3x,
			assets/img/img-service-feature1-mob@4x.jpg 4x"
			data-src="assets/img/img-service-feature1-mob.jpg">
	</div>
	<div class="container">
		<div class="feature-wrap">
			<h2>Tuning <br class="d-lg-none">Tesla cars</h2>
			<p>Taking into account the individual characteristics of the owner, we create the desired look and capabilities of the car exactly according to your wishes.</p>
			<ul>
				<li>Equipment of the car with a restyled or individual body kit</li>
				<li>Car color changes</li>
				<li>Body airbrush</li>
				<li>Changes to the interior of the car</li>
			</ul>
		</div>
	</div>
</section>

<section class="block-service-features detailing">
	<div class="full-background-wrapper">
	    <img class="d-none d-lg-block lazyload" data-srcset="assets/img/bg-service-feature2.jpg,
			assets/img/bg-service-feature2@1_5x.jpg 1.5x,
			assets/img/bg-service-feature2@2x.jpg 2x,
			assets/img/bg-service-feature2@3x.jpg 3x,
			assets/img/bg-service-feature2@4x.jpg 4x"
			data-src="assets/img/bg-service-feature2.jpg">
		<img class="d-lg-none lazyload" data-srcset="assets/img/img-service-feature2-mob.jpg,
			assets/img/img-service-feature2-mob@1_5x.jpg 1.5x,
			assets/img/img-service-feature2-mob@2x.jpg 2x,
			assets/img/img-service-feature2-mob@3x.jpg 3x,
			assets/img/img-service-feature2-mob@4x.jpg 4x"
			data-src="assets/img/img-service-feature2-mob.jpg">
	</div>
	<div class="container">
		<div class="feature-wrap">
			<h2>Tesla car detailing</h2>
			<p>Often, the mood of the owner is spoiled by small defects in both the interior and exterior of the car. TSK offers a solution to this problem.</p>
			<ul>
				<li>Repair of damaged interior parts</li>
				<li>Local painting of individual elements</li>
				<li>Dry cleaning of any complexity</li>
				<li>Paint care</li>
				<li>Pasting a car with armor or color films</li>
			</ul>
		</div>
	</div>
</section>

<section class="block-service-features additional">
	<div class="full-background-wrapper">
	    <img class="d-none d-lg-block lazyload" data-srcset="assets/img/bg-service-feature3.jpg,
			assets/img/bg-service-feature3@1_5x.jpg 1.5x,
			assets/img/bg-service-feature3@2x.jpg 2x,
			assets/img/bg-service-feature3@3x.jpg 3x,
			assets/img/bg-service-feature3@4x.jpg 4x"
			data-src="assets/img/bg-service-feature3.jpg">
		<img class="d-lg-none lazyload" data-srcset="assets/img/img-service-feature3-mob.jpg,
			assets/img/img-service-feature3-mob@1_5x.jpg 1.5x,
			assets/img/img-service-feature3-mob@2x.jpg 2x,
			assets/img/img-service-feature3-mob@3x.jpg 3x,
			assets/img/img-service-feature3-mob@4x.jpg 4x"
			data-src="assets/img/img-service-feature3-mob.jpg">
	</div>
	<div class="container">
		<h2>Additional electronic works</h2>
		<div class="feature-wrap">
			<ul>
				<li>Replacing the 12V battery</li>
				<li>Replacement of high-voltage battery elements (cells, contactors, power wires)</li>
				<li>Diagnosis of factory systems (technical menu - Factory Mode)</li>
				<li>Software update</li>
				<li>Supercharger option activation</li>
			</ul>
		</div>
	</div>
</section>

<?php include("footer.php"); ?>