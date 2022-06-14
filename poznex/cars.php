<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Cars</title>
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
			<li class="current"><a href="#">Car catalog</a></li>
		</ul>
	</div>
</section>

<section class="block-cars">
	<div class="container">
		<div class="row">
			<aside class="col-lg-3">
				<p class="btn-title">Filters
					<svg viewBox="0 0 7 4">
						<use xlink:href="assets/img/set.svg#dropdown-arrow"></use>
					</svg>
				</p>
				<div class="filter-group price">
					<p class="filter-title">Price</p>
					<div class="price-row">
						<input type="text" readonly id="filterPriceFrom">
						<input type="text" readonly id="filterPriceTo">
						<p>USD</p>
					</div>
					<div id="filterPrice"></div>
					<button class="btn-filter">Apply</button>
				</div>
				<div class="filter-group">
					<p class="filter-title">Model</p>
					<input type="checkbox" id="model1">
					<label for="model1">Model S</label>
					<input type="checkbox" id="model2">
					<label for="model2">Model 3</label>
					<input type="checkbox" id="model3">
					<label for="model3">Model X</label>
					<input type="checkbox" id="model4">
					<label for="model4">Model Y</label>
				</div>
				<div class="filter-group">
					<p class="filter-title">Power reserve</p>
					<input type="checkbox" id="range1">
					<label for="range1">300 - 350</label>
					<input type="checkbox" id="range2">
					<label for="range2">350 - 400</label>
					<input type="checkbox" id="range3">
					<label for="range3">400 - 500</label>
					<input type="checkbox" id="range4">
					<label for="range4">550 - 600</label>
				</div>
				<div class="filter-group">
					<p class="filter-title">Drive unit</p>
					<input type="checkbox" id="wh1">
					<label for="wh1">Rear</label>
					<input type="checkbox" id="wh2">
					<label for="wh2">Full</label>
				</div>
				<div class="filter-group">
					<p class="filter-title">Suspension</p>
					<input type="checkbox" id="suspension1">
					<label for="suspension1">Pneumatic</label>
					<input type="checkbox" id="suspension2">
					<label for="suspension2">Spring</label>
				</div>
			</aside>
			<main class="col-lg-9">
				<div class="cars-head">
					<h1>Tesla cars in stock <br class="d-lg-none">and on order</h1>
					<div class="cars-head-nav">
						<ul>
							<li class="current"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#">7</a></li>
							<li><a href="#">8</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">21</a></li>
						</ul>
						<a href="cars.php" class="view-type active">
							<svg viewBox="0 0 11 11">
								<use xlink:href="assets/img/set.svg#view-type1"></use>
							</svg>
						</a>
						<a href="cars-type.php" class="view-type">
							<svg viewBox="0 0 23 11">
								<use xlink:href="assets/img/set.svg#view-type2"></use>
							</svg>
						</a>
					</div>
				</div>
				<div class="row grid-cars">
					<div class="col-lg-6">
						<a href="car.php">
							<div class="cars-item">
								<figure>
									<div class="full-background-wrapper">
								    	<img class="lazyload" data-srcset="assets/img/img-cars-item1.jpg,
											assets/img/img-cars-item1@1_5x.jpg 1.5x,
											assets/img/img-cars-item1@2x.jpg 2x,
											assets/img/img-cars-item1@3x.jpg 3x,
											assets/img/img-cars-item1@4x.jpg 4x"
											data-src="assets/img/img-cars-item1.jpg">

									</div>
								</figure>
								<div class="item-body">
									<div class="item-head">
										<p class="item-title">Tesla Model 3 Standard Plus (EU)</p>
										<div class="item-status">On order</div>
									</div>
									<p class="item-description">Buying a new Tesla Model 3 from Europe. The price includes delivery and customs clearance of Ukraine</p>
									<ul class="item-stats">
										<li><span>Year of issue:</span> 2020</li>
										<li><span>City:</span> Kyiv</li>
									</ul>
									<div class="item-footer">
										<p href="car.php" class="btn-link">More</p>
										<p class="item-price">61 500 USD</p>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6">
						<a href="car.php">
							<div class="cars-item">
								<figure>
									<div class="full-background-wrapper">
								    	<img class="lazyload" data-srcset="assets/img/img-cars-item1.jpg,
											assets/img/img-cars-item1@1_5x.jpg 1.5x,
											assets/img/img-cars-item1@2x.jpg 2x,
											assets/img/img-cars-item1@3x.jpg 3x,
											assets/img/img-cars-item1@4x.jpg 4x"
											data-src="assets/img/img-cars-item1.jpg">

									</div>
								</figure>
								<div class="item-body">
									<div class="item-head">
										<p class="item-title">Tesla Model 3 Standard Plus (EU)</p>
										<div class="item-status instock">In stock</div>
									</div>
									<p class="item-description">Buying a new Tesla Model 3 from Europe. The price includes delivery and customs clearance of Ukraine</p>
									<ul class="item-stats">
										<li><span>Year of issue:</span> 2020</li>
										<li><span>City:</span> Kyiv</li>
									</ul>
									<div class="item-footer">
										<p href="car.php" class="btn-link">More</p>
										<p class="item-price">61 500 USD</p>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6">
						<a href="car.php">
							<div class="cars-item">
								<figure>
									<div class="full-background-wrapper">
								    	<img class="lazyload" data-srcset="assets/img/img-cars-item1.jpg,
											assets/img/img-cars-item1@1_5x.jpg 1.5x,
											assets/img/img-cars-item1@2x.jpg 2x,
											assets/img/img-cars-item1@3x.jpg 3x,
											assets/img/img-cars-item1@4x.jpg 4x"
											data-src="assets/img/img-cars-item1.jpg">

									</div>
								</figure>
								<div class="item-body">
									<div class="item-head">
										<p class="item-title">Tesla Model 3 Standard Plus (EU)</p>
										<div class="item-status">On order</div>
									</div>
									<p class="item-description">Buying a new Tesla Model 3 from Europe. The price includes delivery and customs clearance of Ukraine</p>
									<ul class="item-stats">
										<li><span>Year of issue:</span> 2020</li>
										<li><span>City:</span> Kyiv</li>
									</ul>
									<div class="item-footer">
										<p href="car.php" class="btn-link">More</p>
										<p class="item-price">61 500 USD</p>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6">
						<a href="car.php">
							<div class="cars-item">
								<figure>
									<div class="full-background-wrapper">
								    	<img class="lazyload" data-srcset="assets/img/img-cars-item1.jpg,
											assets/img/img-cars-item1@1_5x.jpg 1.5x,
											assets/img/img-cars-item1@2x.jpg 2x,
											assets/img/img-cars-item1@3x.jpg 3x,
											assets/img/img-cars-item1@4x.jpg 4x"
											data-src="assets/img/img-cars-item1.jpg">

									</div>
								</figure>
								<div class="item-body">
									<div class="item-head">
										<p class="item-title">Tesla Model 3 Standard Plus (EU)</p>
										<div class="item-status instock">In stock</div>
									</div>
									<p class="item-description">Buying a new Tesla Model 3 from Europe. The price includes delivery and customs clearance of Ukraine</p>
									<ul class="item-stats">
										<li><span>Year of issue:</span> 2020</li>
										<li><span>City:</span> Kyiv</li>
									</ul>
									<div class="item-footer">
										<p href="car.php" class="btn-link">More</p>
										<p class="item-price">61 500 USD</p>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6">
						<a href="car.php">
							<div class="cars-item">
								<figure>
									<div class="full-background-wrapper">
								    	<img class="lazyload" data-srcset="assets/img/img-cars-item1.jpg,
											assets/img/img-cars-item1@1_5x.jpg 1.5x,
											assets/img/img-cars-item1@2x.jpg 2x,
											assets/img/img-cars-item1@3x.jpg 3x,
											assets/img/img-cars-item1@4x.jpg 4x"
											data-src="assets/img/img-cars-item1.jpg">

									</div>
								</figure>
								<div class="item-body">
									<div class="item-head">
										<p class="item-title">Tesla Model 3 Standard Plus (EU)</p>
										<div class="item-status">On order</div>
									</div>
									<p class="item-description">Buying a new Tesla Model 3 from Europe. The price includes delivery and customs clearance of Ukraine</p>
									<ul class="item-stats">
										<li><span>Year of issue:</span> 2020</li>
										<li><span>City:</span> Kyiv</li>
									</ul>
									<div class="item-footer">
										<p href="car.php" class="btn-link">More</p>
										<p class="item-price">61 500 USD</p>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6">
						<a href="car.php">
							<div class="cars-item">
								<figure>
									<div class="full-background-wrapper">
								    	<img class="lazyload" data-srcset="assets/img/img-cars-item1.jpg,
											assets/img/img-cars-item1@1_5x.jpg 1.5x,
											assets/img/img-cars-item1@2x.jpg 2x,
											assets/img/img-cars-item1@3x.jpg 3x,
											assets/img/img-cars-item1@4x.jpg 4x"
											data-src="assets/img/img-cars-item1.jpg">

									</div>
								</figure>
								<div class="item-body">
									<div class="item-head">
										<p class="item-title">Tesla Model 3 Standard Plus (EU)</p>
										<div class="item-status instock">In stock</div>
									</div>
									<p class="item-description">Buying a new Tesla Model 3 from Europe. The price includes delivery and customs clearance of Ukraine</p>
									<ul class="item-stats">
										<li><span>Year of issue:</span> 2020</li>
										<li><span>City:</span> Kyiv</li>
									</ul>
									<div class="item-footer">
										<p href="car.php" class="btn-link">More</p>
										<p class="item-price">61 500 USD</p>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6">
						<a href="car.php">
							<div class="cars-item">
								<figure>
									<div class="full-background-wrapper">
								    	<img class="lazyload" data-srcset="assets/img/img-cars-item1.jpg,
											assets/img/img-cars-item1@1_5x.jpg 1.5x,
											assets/img/img-cars-item1@2x.jpg 2x,
											assets/img/img-cars-item1@3x.jpg 3x,
											assets/img/img-cars-item1@4x.jpg 4x"
											data-src="assets/img/img-cars-item1.jpg">

									</div>
								</figure>
								<div class="item-body">
									<div class="item-head">
										<p class="item-title">Tesla Model 3 Standard Plus (EU)</p>
										<div class="item-status">On order</div>
									</div>
									<p class="item-description">Buying a new Tesla Model 3 from Europe. The price includes delivery and customs clearance of Ukraine</p>
									<ul class="item-stats">
										<li><span>Year of issue:</span> 2020</li>
										<li><span>City:</span> Kyiv</li>
									</ul>
									<div class="item-footer">
										<p href="car.php" class="btn-link">More</p>
										<p class="item-price">61 500 USD</p>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6">
						<a href="car.php">
							<div class="cars-item">
								<figure>
									<div class="full-background-wrapper">
								    	<img class="lazyload" data-srcset="assets/img/img-cars-item1.jpg,
											assets/img/img-cars-item1@1_5x.jpg 1.5x,
											assets/img/img-cars-item1@2x.jpg 2x,
											assets/img/img-cars-item1@3x.jpg 3x,
											assets/img/img-cars-item1@4x.jpg 4x"
											data-src="assets/img/img-cars-item1.jpg">

									</div>
								</figure>
								<div class="item-body">
									<div class="item-head">
										<p class="item-title">Tesla Model 3 Standard Plus (EU)</p>
										<div class="item-status instock">In stock</div>
									</div>
									<p class="item-description">Buying a new Tesla Model 3 from Europe. The price includes delivery and customs clearance of Ukraine</p>
									<ul class="item-stats">
										<li><span>Year of issue:</span> 2020</li>
										<li><span>City:</span> Kyiv</li>
									</ul>
									<div class="item-footer">
										<p href="car.php" class="btn-link">More</p>
										<p class="item-price">61 500 USD</p>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="cars-footer">
					<ul>
						<li class="current"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">6</a></li>
						<li><a href="#">7</a></li>
						<li><a href="#">8</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">21</a></li>
					</ul>
					<a href="cars.php" class="view-type active">
						<svg viewBox="0 0 11 11">
							<use xlink:href="assets/img/set.svg#view-type1"></use>
						</svg>
					</a>
					<a href="cars-type.php" class="view-type">
						<svg viewBox="0 0 23 11">
							<use xlink:href="assets/img/set.svg#view-type2"></use>
						</svg>
					</a>
				</div>
			</main>
		</div>
	</div>
</section>


<?php include("footer.php"); ?>