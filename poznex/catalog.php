<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Catalog</title>
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
			<li class="current"><a href="#">Spare parts catalog</a></li>
		</ul>
	</div>
</section>

<section class="block-catalog-search">
	<div class="container">
		<div class="search-row">
			<p>Catalog search</p>
			<form>
				<input type="text" placeholder="1001 Bumper and Fascia">
				<button>
					<svg width="20" height="20" viewBox="0 0 20 20">
						<use xlink:href="assets/img/set.svg#search"></use>
					</svg>
				</button>
			</form>
			<div class="filter">
				<a href="#" class="active">USA</a>
				<span>|</span>
				<a href="#">Europe</a>
			</div>
		</div>
	</div>
</section>

<section class="block-catalog">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
				<div class="full-background-wrapper">
			    	<img class="d-none d-lg-block lazyload" data-srcset="assets/img/img-catalog1.jpg,
						assets/img/img-catalog1@1_5x.jpg 1.5x,
						assets/img/img-catalog1@2x.jpg 2x,
						assets/img/img-catalog1@3x.jpg 3x,
						assets/img/img-catalog1@4x.jpg 4x"
						data-src="assets/img/img-catalog1.jpg">
					<img class="d-lg-none lazyload" data-srcset="assets/img/img-catalog1-mob.jpg,
						assets/img/img-catalog1-mob@1_5x.jpg 1.5x,
						assets/img/img-catalog1-mob@2x.jpg 2x,
						assets/img/img-catalog1-mob@3x.jpg 3x,
						assets/img/img-catalog1-mob@4x.jpg 4x"
						data-src="assets/img/img-catalog1-mob.jpg">
				</div>
				<div class="catalog-item">
					<div class="catalog-content">
						<p class="catalog-title">Model S <br class="d-lg-none">Parts Catalog</p>
						<p class="catalog-description">Model S United States <br class="d-lg-none">2012-2016</p>
					</div>
					<a href="parts.php" class="btn-link">View catalog</a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="full-background-wrapper">
			    	<img class="d-none d-lg-block lazyload" data-srcset="assets/img/img-catalog2.jpg,
						assets/img/img-catalog2@1_5x.jpg 1.5x,
						assets/img/img-catalog2@2x.jpg 2x,
						assets/img/img-catalog2@3x.jpg 3x,
						assets/img/img-catalog2@4x.jpg 4x"
						data-src="assets/img/img-catalog2.jpg">
					<img class="d-lg-none lazyload" data-srcset="assets/img/img-catalog2-mob.jpg,
						assets/img/img-catalog2-mob@1_5x.jpg 1.5x,
						assets/img/img-catalog2-mob@2x.jpg 2x,
						assets/img/img-catalog2-mob@3x.jpg 3x,
						assets/img/img-catalog2-mob@4x.jpg 4x"
						data-src="assets/img/img-catalog2-mob.jpg">
				</div>
				<div class="catalog-item">
					<div class="catalog-content">
						<p class="catalog-title">Model S <br class="d-lg-none">Parts Catalog</p>
						<p class="catalog-description">Model S United States <br class="d-lg-none">After April 2016</p>
					</div>
					<a href="parts.php" class="btn-link">View catalog</a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="full-background-wrapper">
			    	<img class="d-none d-lg-block lazyload" data-srcset="assets/img/img-catalog3.jpg,
						assets/img/img-catalog3@1_5x.jpg 1.5x,
						assets/img/img-catalog3@2x.jpg 2x,
						assets/img/img-catalog3@3x.jpg 3x,
						assets/img/img-catalog3@4x.jpg 4x"
						data-src="assets/img/img-catalog3.jpg">
					<img class="d-lg-none lazyload" data-srcset="assets/img/img-catalog3-mob.jpg,
						assets/img/img-catalog3-mob@1_5x.jpg 1.5x,
						assets/img/img-catalog3-mob@2x.jpg 2x,
						assets/img/img-catalog3-mob@3x.jpg 3x,
						assets/img/img-catalog3-mob@4x.jpg 4x"
						data-src="assets/img/img-catalog3-mob.jpg">
				</div>
				<div class="catalog-item">
					<div class="catalog-content">
						<p class="catalog-title">Model X <br class="d-lg-none">Parts Catalog</p>
						<p class="catalog-description">Model X United States</p>
					</div>
					<a href="parts.php" class="btn-link">View catalog</a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="full-background-wrapper">
			    	<img class="d-none d-lg-block lazyload" data-srcset="assets/img/img-catalog4.jpg,
						assets/img/img-catalog4@1_5x.jpg 1.5x,
						assets/img/img-catalog4@2x.jpg 2x,
						assets/img/img-catalog4@3x.jpg 3x,
						assets/img/img-catalog4@4x.jpg 4x"
						data-src="assets/img/img-catalog4.jpg">
					<img class="d-lg-none lazyload" data-srcset="assets/img/img-catalog4-mob.jpg,
						assets/img/img-catalog4-mob@1_5x.jpg 1.5x,
						assets/img/img-catalog4-mob@2x.jpg 2x,
						assets/img/img-catalog4-mob@3x.jpg 3x,
						assets/img/img-catalog4-mob@4x.jpg 4x"
						data-src="assets/img/img-catalog4-mob.jpg">
				</div>
				<div class="catalog-item">
					<div class="catalog-content">
						<p class="catalog-title">Model 3 <br class="d-lg-none">Parts Catalog</p>
						<p class="catalog-description">Model 3 United States</p>
					</div>
					<a href="parts.php" class="btn-link">View catalog</a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="full-background-wrapper">
			    	<img class="d-none d-lg-block lazyload" data-srcset="assets/img/img-catalog5.jpg,
						assets/img/img-catalog5@1_5x.jpg 1.5x,
						assets/img/img-catalog5@2x.jpg 2x,
						assets/img/img-catalog5@3x.jpg 3x,
						assets/img/img-catalog5@4x.jpg 4x"
						data-src="assets/img/img-catalog5.jpg">
					<img class="d-lg-none lazyload" data-srcset="assets/img/img-catalog5-mob.jpg,
						assets/img/img-catalog5-mob@1_5x.jpg 1.5x,
						assets/img/img-catalog5-mob@2x.jpg 2x,
						assets/img/img-catalog5-mob@3x.jpg 3x,
						assets/img/img-catalog5-mob@4x.jpg 4x"
						data-src="assets/img/img-catalog5-mob.jpg">
				</div>
				<div class="catalog-item">
					<div class="catalog-content">
						<p class="catalog-title">Model Y <br class="d-lg-none">Parts Catalog</p>
						<p class="catalog-description">Model Y United States <br class="d-lg-none">Parts Catalog</p>
					</div>
					<a href="parts.php" class="btn-link">View catalog</a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="full-background-wrapper">
			    	<img class="d-none d-lg-block lazyload" data-srcset="assets/img/img-catalog5.jpg,
						assets/img/img-catalog5@1_5x.jpg 1.5x,
						assets/img/img-catalog5@2x.jpg 2x,
						assets/img/img-catalog5@3x.jpg 3x,
						assets/img/img-catalog5@4x.jpg 4x"
						data-src="assets/img/img-catalog5.jpg">
					<img class="d-lg-none lazyload" data-srcset="assets/img/img-catalog5-mob.jpg,
						assets/img/img-catalog5-mob@1_5x.jpg 1.5x,
						assets/img/img-catalog5-mob@2x.jpg 2x,
						assets/img/img-catalog5-mob@3x.jpg 3x,
						assets/img/img-catalog5-mob@4x.jpg 4x"
						data-src="assets/img/img-catalog5-mob.jpg">
				</div>
				<div class="catalog-item">
					<div class="catalog-content">
						<p class="catalog-title">Model Y <br class="d-lg-none">Parts Catalog</p>
						<p class="catalog-description">Model Y United States <br class="d-lg-none">Parts Catalog</p>
					</div>
					<a href="parts.php" class="btn-link">View catalog</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include("footer.php"); ?>