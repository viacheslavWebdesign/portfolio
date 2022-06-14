<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Shop</title>
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
			<li class="current"><a href="#">Tesla parts and accessories</a></li>
		</ul>
	</div>
</section>

<section class="block-shop">
	<div class="container">
		<div class="row">
			<aside class="col-lg-3">
				<ul>
					<li><a href="#">Rims and tires</a></li>
					<li><a href="#">Model s <span>(before April 2016)</span></a></li>
					<li><a href="#">Model s <span>(after April 2016)</span></a></li>
					<li><a href="#">Model x</a></li>
					<li><a href="#">Model 3</a></li>
					<li><a href="#">Accessories</a></li>
					<li><a href="#">Tuning</a></li>
				</ul>
			</aside>
			<main class="col-lg-9">
				<div class="shop-head">
					<h1>Tesla parts and accessories</h1>
					<div class="shop-head-nav">
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
						<a href="shop.php" class="view-type active">
							<svg viewBox="0 0 11 11">
								<use xlink:href="assets/img/set.svg#view-type1"></use>
							</svg>
						</a>
						<a href="shop-type.php" class="view-type">
							<svg viewBox="0 0 23 11">
								<use xlink:href="assets/img/set.svg#view-type2"></use>
							</svg>
						</a>
					</div>
				</div>
				<div class="row grid-shop">
					<div class="col-lg-4">
						<div class="shop-item">
							<a href="shop-item.php">
								<figure>
									<div class="full-background-wrapper">
								    	<img class="d-none d-lg-block lazyload" data-srcset="assets/img/img-shop-item1.jpg,
											assets/img/img-shop-item1@1_5x.jpg 1.5x,
											assets/img/img-shop-item1@2x.jpg 2x,
											assets/img/img-shop-item1@3x.jpg 3x,
											assets/img/img-shop-item1@4x.jpg 4x"
											data-src="assets/img/img-shop-item1.jpg">
										<img class="d-lg-none lazyload" data-srcset="assets/img/img-shop-item1-mob.jpg,
											assets/img/img-shop-item1-mob@1_5x.jpg 1.5x,
											assets/img/img-shop-item1-mob@2x.jpg 2x,
											assets/img/img-shop-item1-mob@3x.jpg 3x,
											assets/img/img-shop-item1-mob@4x.jpg 4x"
											data-src="assets/img/img-shop-item1-mob.jpg">
									</div>
								</figure>
							</a>
							<div class="item-body">
								<div class="item-head">
									<a href="shop-item.php"><p class="item-title">Jacket TESLA <br>Men's Corp Jacket</p></a>
									<div class="item-size">М</div>
								</div>
								<p class="sku">Part number: 5310020</p>
								<div class="item-footer">
									<a href="shop-item.php" class="btn-link">Details</a>
									<p class="item-price">80 USD</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="shop-item">
							<a href="shop-item.php">
								<figure>
									<div class="full-background-wrapper">
								    	<img class="d-none d-lg-block lazyload" data-srcset="assets/img/img-shop-item1.jpg,
											assets/img/img-shop-item1@1_5x.jpg 1.5x,
											assets/img/img-shop-item1@2x.jpg 2x,
											assets/img/img-shop-item1@3x.jpg 3x,
											assets/img/img-shop-item1@4x.jpg 4x"
											data-src="assets/img/img-shop-item1.jpg">
										<img class="d-lg-none lazyload" data-srcset="assets/img/img-shop-item1-mob.jpg,
											assets/img/img-shop-item1-mob@1_5x.jpg 1.5x,
											assets/img/img-shop-item1-mob@2x.jpg 2x,
											assets/img/img-shop-item1-mob@3x.jpg 3x,
											assets/img/img-shop-item1-mob@4x.jpg 4x"
											data-src="assets/img/img-shop-item1-mob.jpg">
									</div>
								</figure>
							</a>
							<div class="item-body">
								<div class="item-head">
									<a href="shop-item.php"><p class="item-title">Jacket TESLA <br>Men's Corp Jacket</p></a>
									<div class="item-size">М</div>
								</div>
								<p class="sku">Part number: 5310020</p>
								<div class="item-footer">
									<a href="shop-item.php" class="btn-link">Details</a>
									<p class="item-price">80 USD</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="shop-item">
							<a href="shop-item.php">
								<figure>
									<div class="full-background-wrapper">
								    	<img class="d-none d-lg-block lazyload" data-srcset="assets/img/img-shop-item1.jpg,
											assets/img/img-shop-item1@1_5x.jpg 1.5x,
											assets/img/img-shop-item1@2x.jpg 2x,
											assets/img/img-shop-item1@3x.jpg 3x,
											assets/img/img-shop-item1@4x.jpg 4x"
											data-src="assets/img/img-shop-item1.jpg">
										<img class="d-lg-none lazyload" data-srcset="assets/img/img-shop-item1-mob.jpg,
											assets/img/img-shop-item1-mob@1_5x.jpg 1.5x,
											assets/img/img-shop-item1-mob@2x.jpg 2x,
											assets/img/img-shop-item1-mob@3x.jpg 3x,
											assets/img/img-shop-item1-mob@4x.jpg 4x"
											data-src="assets/img/img-shop-item1-mob.jpg">
									</div>
								</figure>
							</a>
							<div class="item-body">
								<div class="item-head">
									<a href="shop-item.php"><p class="item-title">Jacket TESLA <br>Men's Corp Jacket</p></a>
									<div class="item-size">М</div>
								</div>
								<p class="sku">Part number: 5310020</p>
								<div class="item-footer">
									<a href="shop-item.php" class="btn-link">Details</a>
									<p class="item-price">80 USD</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="shop-item">
							<a href="shop-item.php">
								<figure>
									<div class="full-background-wrapper">
								    	<img class="d-none d-lg-block lazyload" data-srcset="assets/img/img-shop-item1.jpg,
											assets/img/img-shop-item1@1_5x.jpg 1.5x,
											assets/img/img-shop-item1@2x.jpg 2x,
											assets/img/img-shop-item1@3x.jpg 3x,
											assets/img/img-shop-item1@4x.jpg 4x"
											data-src="assets/img/img-shop-item1.jpg">
										<img class="d-lg-none lazyload" data-srcset="assets/img/img-shop-item1-mob.jpg,
											assets/img/img-shop-item1-mob@1_5x.jpg 1.5x,
											assets/img/img-shop-item1-mob@2x.jpg 2x,
											assets/img/img-shop-item1-mob@3x.jpg 3x,
											assets/img/img-shop-item1-mob@4x.jpg 4x"
											data-src="assets/img/img-shop-item1-mob.jpg">
									</div>
								</figure>
							</a>
							<div class="item-body">
								<div class="item-head">
									<a href="shop-item.php"><p class="item-title">Jacket TESLA <br>Men's Corp Jacket</p></a>
									<div class="item-size">М</div>
								</div>
								<p class="sku">Part number: 5310020</p>
								<div class="item-footer">
									<a href="shop-item.php" class="btn-link">Details</a>
									<p class="item-price">80 USD</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="shop-item">
							<a href="shop-item.php">
								<figure>
									<div class="full-background-wrapper">
								    	<img class="d-none d-lg-block lazyload" data-srcset="assets/img/img-shop-item1.jpg,
											assets/img/img-shop-item1@1_5x.jpg 1.5x,
											assets/img/img-shop-item1@2x.jpg 2x,
											assets/img/img-shop-item1@3x.jpg 3x,
											assets/img/img-shop-item1@4x.jpg 4x"
											data-src="assets/img/img-shop-item1.jpg">
										<img class="d-lg-none lazyload" data-srcset="assets/img/img-shop-item1-mob.jpg,
											assets/img/img-shop-item1-mob@1_5x.jpg 1.5x,
											assets/img/img-shop-item1-mob@2x.jpg 2x,
											assets/img/img-shop-item1-mob@3x.jpg 3x,
											assets/img/img-shop-item1-mob@4x.jpg 4x"
											data-src="assets/img/img-shop-item1-mob.jpg">
									</div>
								</figure>
							</a>
							<div class="item-body">
								<div class="item-head">
									<a href="shop-item.php"><p class="item-title">Jacket TESLA <br>Men's Corp Jacket</p></a>
									<div class="item-size">М</div>
								</div>
								<p class="sku">Part number: 5310020</p>
								<div class="item-footer">
									<a href="shop-item.php" class="btn-link">Details</a>
									<p class="item-price">80 USD</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="shop-item">
							<a href="shop-item.php">
								<figure>
									<div class="full-background-wrapper">
								    	<img class="d-none d-lg-block lazyload" data-srcset="assets/img/img-shop-item1.jpg,
											assets/img/img-shop-item1@1_5x.jpg 1.5x,
											assets/img/img-shop-item1@2x.jpg 2x,
											assets/img/img-shop-item1@3x.jpg 3x,
											assets/img/img-shop-item1@4x.jpg 4x"
											data-src="assets/img/img-shop-item1.jpg">
										<img class="d-lg-none lazyload" data-srcset="assets/img/img-shop-item1-mob.jpg,
											assets/img/img-shop-item1-mob@1_5x.jpg 1.5x,
											assets/img/img-shop-item1-mob@2x.jpg 2x,
											assets/img/img-shop-item1-mob@3x.jpg 3x,
											assets/img/img-shop-item1-mob@4x.jpg 4x"
											data-src="assets/img/img-shop-item1-mob.jpg">
									</div>
								</figure>
							</a>
							<div class="item-body">
								<div class="item-head">
									<a href="shop-item.php"><p class="item-title">Jacket TESLA <br>Men's Corp Jacket</p></a>
									<div class="item-size">М</div>
								</div>
								<p class="sku">Part number: 5310020</p>
								<div class="item-footer">
									<a href="shop-item.php" class="btn-link">Details</a>
									<p class="item-price">80 USD</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="shop-item">
							<a href="shop-item.php">
								<figure>
									<div class="full-background-wrapper">
								    	<img class="d-none d-lg-block lazyload" data-srcset="assets/img/img-shop-item1.jpg,
											assets/img/img-shop-item1@1_5x.jpg 1.5x,
											assets/img/img-shop-item1@2x.jpg 2x,
											assets/img/img-shop-item1@3x.jpg 3x,
											assets/img/img-shop-item1@4x.jpg 4x"
											data-src="assets/img/img-shop-item1.jpg">
										<img class="d-lg-none lazyload" data-srcset="assets/img/img-shop-item1-mob.jpg,
											assets/img/img-shop-item1-mob@1_5x.jpg 1.5x,
											assets/img/img-shop-item1-mob@2x.jpg 2x,
											assets/img/img-shop-item1-mob@3x.jpg 3x,
											assets/img/img-shop-item1-mob@4x.jpg 4x"
											data-src="assets/img/img-shop-item1-mob.jpg">
									</div>
								</figure>
							</a>
							<div class="item-body">
								<div class="item-head">
									<a href="shop-item.php"><p class="item-title">Jacket TESLA <br>Men's Corp Jacket</p></a>
									<div class="item-size">М</div>
								</div>
								<p class="sku">Part number: 5310020</p>
								<div class="item-footer">
									<a href="shop-item.php" class="btn-link">Details</a>
									<p class="item-price">80 USD</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="shop-item">
							<a href="shop-item.php">
								<figure>
									<div class="full-background-wrapper">
								    	<img class="d-none d-lg-block lazyload" data-srcset="assets/img/img-shop-item1.jpg,
											assets/img/img-shop-item1@1_5x.jpg 1.5x,
											assets/img/img-shop-item1@2x.jpg 2x,
											assets/img/img-shop-item1@3x.jpg 3x,
											assets/img/img-shop-item1@4x.jpg 4x"
											data-src="assets/img/img-shop-item1.jpg">
										<img class="d-lg-none lazyload" data-srcset="assets/img/img-shop-item1-mob.jpg,
											assets/img/img-shop-item1-mob@1_5x.jpg 1.5x,
											assets/img/img-shop-item1-mob@2x.jpg 2x,
											assets/img/img-shop-item1-mob@3x.jpg 3x,
											assets/img/img-shop-item1-mob@4x.jpg 4x"
											data-src="assets/img/img-shop-item1-mob.jpg">
									</div>
								</figure>
							</a>
							<div class="item-body">
								<div class="item-head">
									<a href="shop-item.php"><p class="item-title">Jacket TESLA <br>Men's Corp Jacket</p></a>
									<div class="item-size">М</div>
								</div>
								<p class="sku">Part number: 5310020</p>
								<div class="item-footer">
									<a href="shop-item.php" class="btn-link">Details</a>
									<p class="item-price">80 USD</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="shop-item">
							<a href="shop-item.php">
								<figure>
									<div class="full-background-wrapper">
								    	<img class="d-none d-lg-block lazyload" data-srcset="assets/img/img-shop-item1.jpg,
											assets/img/img-shop-item1@1_5x.jpg 1.5x,
											assets/img/img-shop-item1@2x.jpg 2x,
											assets/img/img-shop-item1@3x.jpg 3x,
											assets/img/img-shop-item1@4x.jpg 4x"
											data-src="assets/img/img-shop-item1.jpg">
										<img class="d-lg-none lazyload" data-srcset="assets/img/img-shop-item1-mob.jpg,
											assets/img/img-shop-item1-mob@1_5x.jpg 1.5x,
											assets/img/img-shop-item1-mob@2x.jpg 2x,
											assets/img/img-shop-item1-mob@3x.jpg 3x,
											assets/img/img-shop-item1-mob@4x.jpg 4x"
											data-src="assets/img/img-shop-item1-mob.jpg">
									</div>
								</figure>
							</a>
							<div class="item-body">
								<div class="item-head">
									<a href="shop-item.php"><p class="item-title">Jacket TESLA <br>Men's Corp Jacket</p></a>
									<div class="item-size">М</div>
								</div>
								<p class="sku">Part number: 5310020</p>
								<div class="item-footer">
									<a href="shop-item.php" class="btn-link">Details</a>
									<p class="item-price">80 USD</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="shop-item">
							<a href="shop-item.php">
								<figure>
									<div class="full-background-wrapper">
								    	<img class="d-none d-lg-block lazyload" data-srcset="assets/img/img-shop-item1.jpg,
											assets/img/img-shop-item1@1_5x.jpg 1.5x,
											assets/img/img-shop-item1@2x.jpg 2x,
											assets/img/img-shop-item1@3x.jpg 3x,
											assets/img/img-shop-item1@4x.jpg 4x"
											data-src="assets/img/img-shop-item1.jpg">
										<img class="d-lg-none lazyload" data-srcset="assets/img/img-shop-item1-mob.jpg,
											assets/img/img-shop-item1-mob@1_5x.jpg 1.5x,
											assets/img/img-shop-item1-mob@2x.jpg 2x,
											assets/img/img-shop-item1-mob@3x.jpg 3x,
											assets/img/img-shop-item1-mob@4x.jpg 4x"
											data-src="assets/img/img-shop-item1-mob.jpg">
									</div>
								</figure>
							</a>
							<div class="item-body">
								<div class="item-head">
									<a href="shop-item.php"><p class="item-title">Jacket TESLA <br>Men's Corp Jacket</p></a>
									<div class="item-size">М</div>
								</div>
								<p class="sku">Part number: 5310020</p>
								<div class="item-footer">
									<a href="shop-item.php" class="btn-link">Details</a>
									<p class="item-price">80 USD</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="shop-item">
							<a href="shop-item.php">
								<figure>
									<div class="full-background-wrapper">
								    	<img class="d-none d-lg-block lazyload" data-srcset="assets/img/img-shop-item1.jpg,
											assets/img/img-shop-item1@1_5x.jpg 1.5x,
											assets/img/img-shop-item1@2x.jpg 2x,
											assets/img/img-shop-item1@3x.jpg 3x,
											assets/img/img-shop-item1@4x.jpg 4x"
											data-src="assets/img/img-shop-item1.jpg">
										<img class="d-lg-none lazyload" data-srcset="assets/img/img-shop-item1-mob.jpg,
											assets/img/img-shop-item1-mob@1_5x.jpg 1.5x,
											assets/img/img-shop-item1-mob@2x.jpg 2x,
											assets/img/img-shop-item1-mob@3x.jpg 3x,
											assets/img/img-shop-item1-mob@4x.jpg 4x"
											data-src="assets/img/img-shop-item1-mob.jpg">
									</div>
								</figure>
							</a>
							<div class="item-body">
								<div class="item-head">
									<a href="shop-item.php"><p class="item-title">Jacket TESLA <br>Men's Corp Jacket</p></a>
									<div class="item-size">М</div>
								</div>
								<p class="sku">Part number: 5310020</p>
								<div class="item-footer">
									<a href="shop-item.php" class="btn-link">Details</a>
									<p class="item-price">80 USD</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="shop-item">
							<a href="shop-item.php">
								<figure>
									<div class="full-background-wrapper">
								    	<img class="d-none d-lg-block lazyload" data-srcset="assets/img/img-shop-item1.jpg,
											assets/img/img-shop-item1@1_5x.jpg 1.5x,
											assets/img/img-shop-item1@2x.jpg 2x,
											assets/img/img-shop-item1@3x.jpg 3x,
											assets/img/img-shop-item1@4x.jpg 4x"
											data-src="assets/img/img-shop-item1.jpg">
										<img class="d-lg-none lazyload" data-srcset="assets/img/img-shop-item1-mob.jpg,
											assets/img/img-shop-item1-mob@1_5x.jpg 1.5x,
											assets/img/img-shop-item1-mob@2x.jpg 2x,
											assets/img/img-shop-item1-mob@3x.jpg 3x,
											assets/img/img-shop-item1-mob@4x.jpg 4x"
											data-src="assets/img/img-shop-item1-mob.jpg">
									</div>
								</figure>
							</a>
							<div class="item-body">
								<div class="item-head">
									<a href="shop-item.php"><p class="item-title">Jacket TESLA <br>Men's Corp Jacket</p></a>
									<div class="item-size">М</div>
								</div>
								<p class="sku">Part number: 5310020</p>
								<div class="item-footer">
									<a href="shop-item.php" class="btn-link">Details</a>
									<p class="item-price">80 USD</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="shop-footer">
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
					<a href="shop.php" class="view-type active">
						<svg viewBox="0 0 11 11">
							<use xlink:href="assets/img/set.svg#view-type1"></use>
						</svg>
					</a>
					<a href="shop-type.php" class="view-type">
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