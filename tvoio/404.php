<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>404</title>
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

<div class="error-page">
	<div class="container">
		<p class="error-page__title">404</p>
		<p class="error-page__text">Page not found :(</p>
		<a href="index.php" class="error-page__link"><svg viewBox="0 0 24 14" width="24" height="14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.016.662L7.935.564a.7.7 0 00-.894-.08l-.096.082-5.98 5.983-.042.052-.057.104-.032.08-.018.068L.8 7l.011.125.033.116.032.077.035.06.052.07.042.048 5.94 5.938a.7.7 0 001.07-.893l-.08-.097L3.19 7.7h19.31a.7.7 0 00.688-.573L23.2 7a.7.7 0 00-.574-.689L22.5 6.3H3.191l4.744-4.746a.7.7 0 00.08-.892l-.08-.098.08.098z" fill="#FF5C00"/></svg>Go back to the main page</a>
	</div>
</div>

<?php include("footer.php"); ?>