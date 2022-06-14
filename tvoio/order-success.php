<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Successfully issued</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/grid.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/jquery-ui.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	
<?php include("header.php"); ?>

<div class="breadcrumbs d-none d-lg-block">
	<div class="container">
		<ul>
			<li><a href="index.php">Home page</a></li>
			<li>Checkout</li>
		</ul>
	</div>
</div>
<div class="breadcrumbs d-lg-none">
	<div class="container">
		<ul>
			<li><a href="index.php">Home page</a></li>
			<li>Checkout</li>
		</ul>
	</div>
</div>

<div class="order-process">
	<div class="container">
		<div class="order-process__head">
			<h1>Your order has been issued</h1>
			<svg viewBox="0 0 21 17" width="21" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.133 8l7.6 6.333L18.867 1.667" stroke="#47B27F" stroke-width="3"/></svg>
		</div>
		<p class="order-process__subtitle">Order #3515 dated January 07, 2021 successfully generated</p>
		<div class="order-process__row">
			<div class="order-process__details">
				<div class="order-stages">
					<div class="order-stages__col">
						<p class="current"><span>1</span>Order completed</p>
						<p><span>2</span>Order completed</p>
						<p><span>3</span>Order on the road</p>
					</div>
						<div class="order-stages_col">
						<p><span>4</span>Order completed</p>
						<p><span>5</span>Order completed</p>
						<p><span>6</span>Order on the road</p>
					</div>
				</div>
				<div class="order-table">
					<div class="order-table__head">
						<div class="order-table__head-item"><p>Name</p></div>
						<div class="order-table__head-item">Qty</div>
						<div class="order-table__head-item">Total sum</div>
					</div>
					<div class="order-table__row">
						<div class="order-table__item">
							<a href="product.php"><figure>
								<img src="assets/img/img-product1.jpg" width="36" height="80">
							</figure></a>
							<div class="order-table__content">
								<a href="product.php"><p class="order-table__name">Shower system N546J1_MF v251</p></a>
								<p class="order-table__id">ID: 271561</p>
							</div>
						</div>
						<div class="order-table__quantity">
							<div class="order-table__quantity-wrap">
								<button class="order-table__quantity-minus">-</button>
								<input type="number" class="order-table__quantity-value" value="1" min="1">
								<button class="order-table__quantity-plus">+</button>
							</div>
						</div>
						<p class="order-table__total"><span class="d-lg-none">Total:</span>7.999 uah</p>
					</div>
					<div class="order-table__row">
						<div class="order-table__item">
							<a href="product.php"><figure>
								<img src="assets/img/img-product1.jpg" width="36" height="80">
							</figure></a>
							<div class="order-table__content">
								<a href="product.php"><p class="order-table__name">Shower system N546J1_MF</p></a>
								<p class="order-table__id">ID: 271561</p>
							</div>
						</div>
						<div class="order-table__quantity">
							<div class="order-table__quantity-wrap">
								<button class="order-table__quantity-minus">-</button>
								<input type="number" class="order-table__quantity-value" value="2" min="1">
								<button class="order-table__quantity-plus">+</button>
							</div>
						</div>
						<p class="order-table__total"><span class="d-lg-none">Total:</span>11.998 uah</p>
					</div>
				</div>
			</div>
			<div class="order-info">
				<div class="order-info__body">
					<p class="order-info__title">Delivery</p>
					<p class="order-info__delivery">— Nova Poshta courier</p>
					<p class="order-info__person">Ivanov Ivan Ivanovich</p>
					<p class="order-info__phone">+38 (099) 999 99 99</p>
					<p class="order-info__location">Ukraine, <br>Kyiv, st. Sultana, 25d</p>
				</div>
				<div class="order-info__footer">
					<p class="order-info__title">Payment</p>
					<p class="order-info__payment">— Upon receipt</p>
				</div>
				<div class="order-info__total">
					<p>Total:</p>
					<p>25.888 uah</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include("footer.php"); ?>