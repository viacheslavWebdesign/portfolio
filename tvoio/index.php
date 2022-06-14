<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Home page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preload" href="assets/css/normalize.css" as="style">
	<link rel="preload" href="assets/css/grid.css" as="style">
	<link rel="preload" href="assets/css/slick.css" as="style">
	<link rel="preload" href="assets/css/jquery-ui.min.css" as="style">
	<link rel="preload" href="assets/css/style.css" as="style">
	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/grid.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/jquery-ui.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="home">
	
<?php include("header.php"); ?>	

<div class="container d-none d-lg-block">
	<div class="head" style="background: url(assets/img/bg-head.jpg) no-repeat center / cover;">
		<h2>For each <b>2nd</b> item discount <span>-10%</span></h2>
		<a href="#">Go shopping<svg viewBox="0 0 7 12" width="7" height="12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.576 1.15a.584.584 0 01.848-.8L6.382 5.6a.583.583 0 010 .8l-4.958 5.251a.583.583 0 01-.848-.8L5.156 6 .576 1.15z" fill="#fff"/></svg></a>
	</div>
</div>

<div class="head-mobile d-lg-none" style="background: url(assets/img/bg-head-mobile.jpg) no-repeat center / cover;">
	<div class="container">
		<h2>For each <b>2nd</b><br> item discount</h2>
		<p>- 10%</p>
		<a href="category.php">Go shopping<svg viewBox="0 0 6 12" width="6" height="12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.156.958A.568.568 0 01.806.05c.068.03.13.074.18.128L5.845 5.29a.566.566 0 010 .78L.987 11.182a.573.573 0 01-.981-.375.566.566 0 01.15-.404L4.643 5.68.156.958z" fill="#000"/></svg></a>
	</div>
</div>

<div class="categories">
	<div class="container">
		<h2 class="d-none d-lg-flex">Product categories</h2>
		<h2 class="d-lg-none">Catalog</h2>
		<div class="categories__grid d-none d-lg-flex">
			<a href="category.php" class="categories__item categories__item_heated-towe-rails">
				<p class="categories__title">Towel dryers</p>
				<p class="categories__quantity">2616 products</p>
				<img width="114.04" height="121" src="assets/img/img-categories1.jpg">
			</a>
			<a href="category.php" class="categories__item categories__item_mixers">
				<p class="categories__title">Faucets</p>
				<p class="categories__quantity">2616 products</p>
				<img width="129" height="129" src="assets/img/img-categories2.jpg">
			</a>
			<a href="category.php" class="categories__item categories__item_shower-systems">
				<p class="categories__title">Shower systems</p>
				<p class="categories__quantity">2616 products</p>
				<img width="190" height="143" src="assets/img/img-categories3.jpg">
			</a>

			<a href="category.php" class="categories__item categories__item_baths">
				<p class="categories__title">Baths</p>
				<p class="categories__quantity">2616 products</p>
				<img width="177.29" height="117" src="assets/img/img-categories4.jpg">
			</a>
			<a href="category.php" class="categories__item categories__item_toilet-bowls">
				<p class="categories__title">Toilet bowls</p>
				<p class="categories__quantity">2616 products</p>
				<img width="221" height="144" src="assets/img/img-categories5.jpg">
			</a>
			<a href="category.php" class="categories__item categories__item_heated-towe-rails">
				<p class="categories__title">Towel dryers</p>
				<p class="categories__quantity">2616 products</p>
				<img width="114.05" height="121" src="assets/img/img-categories6.jpg">
			</a>

			<a href="category.php" class="categories__item categories__item_shower-systems">
				<p class="categories__title">Shower systems</p>
				<p class="categories__quantity">2616 products</p>
				<img width="190" height="143" src="assets/img/img-categories7.jpg">
			</a>
			<a href="category.php" class="categories__item categories__item_toilet-bowls">
				<p class="categories__title">Toilet bowls</p>
				<p class="categories__quantity">2616 products</p>
				<img width="221" height="144" src="assets/img/img-categories8.jpg">
			</a>
			<a href="category.php" class="categories__item categories__item_baths">
				<p class="categories__title">Baths</p>
				<p class="categories__quantity">2616 products</p>
				<img width="177.29" height="117" src="assets/img/img-categories9.jpg">
			</a>
		</div>
		<div class="categories__grid d-lg-none">
			<a href="category.php" class="categories__item categories__item_heated-towe-rails">
				<p class="categories__title">Towel dryers</p>
				<p class="categories__quantity">265</p>
				<img width="28" height="29" src="assets/img/img-categories-mob1.jpg">
			</a>
			<a href="category.php" class="categories__item categories__item_baths">
				<p class="categories__title">Baths</p>
				<p class="categories__quantity">51</p>
				<img width="52" height="26" src="assets/img/img-categories-mob2.jpg">
			</a>

			<a href="category.php" class="categories__item categories__item_shower-systems">
				<p class="categories__title">Shower systems</p>
				<p class="categories__quantity">1781</p>
				<img width="40" height="42" src="assets/img/img-categories-mob3.jpg">
			</a>
			<a href="category.php" class="categories__item categories__item_mixers">
				<p class="categories__title">Faucets</p>
				<p class="categories__quantity">1781</p>
				<img width="37" height="37" src="assets/img/img-categories-mob4.jpg">
			</a>

			<a href="category.php" class="categories__item categories__item_toilet-bowls">
				<p class="categories__title">Toilet bowls</p>
				<p class="categories__quantity">56</p>
				<img width="49" height="49" src="assets/img/img-categories-mob5.jpg">
			</a>
			<a href="category.php" class="categories__item categories__item_heated-towe-rails">
				<p class="categories__title">Towel dryers</p>
				<p class="categories__quantity">265</p>
				<img width="28" height="29" src="assets/img/img-categories-mob6.jpg">
			</a>
		</div>
		<a href="category.php" class="categories__link">
			All catagories
			<svg viewBox="0 0 10 17" width="10" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.924 1.919A.792.792 0 112.076.83l6.729 7.125a.792.792 0 010 1.088l-6.73 7.126a.792.792 0 01-1.15-1.087L7.14 8.5.924 1.919z" fill="#FF5C00"/></svg>
		</a>
	</div>
</div>

<div class="container d-none d-lg-block">
	<div class="lowerprice" style="background: url(assets/img/bg-lowerprice.jpg) no-repeat center / cover;">
		<h2>Found cheaper? <b>Let's lower the price!</b></h2>
	</div>
</div>

<div class="lowerprice-mob d-lg-none" style="background: url(assets/img/bg-lowerprice-mob.jpg) no-repeat center / cover;">
	<div class="container">
		<h2>Found cheaper?<br><b>Let's lower the price!</b></h2>
	</div>
</div>

<div class="brands d-none d-lg-block">
	<div class="container">
		<h2>Manufacturer's brands</h2>
		<div class="brands__grid">
			<div class="brands__item">
				<p class="brands__symbol">A</p>
				<div class="brands__content">
					<ul>
						<li><a href="category.php">Armadi</a></li>
						<li><a href="category.php">Abber</a></li>
						<li><a href="category.php">Alice Ceramica</a></li>
					</ul>
					<p><a href="#">More</a></p>
				</div>
			</div>
			<div class="brands__item">
				<p class="brands__symbol">A</p>
				<div class="brands__content">
					<ul>
						<li><a href="category.php">Armadi</a></li>
						<li><a href="category.php">Abber</a></li>
						<li><a href="category.php">Alice Ceramica</a></li>
					</ul>
					<p><a href="#">More</a></p>
				</div>
			</div>
			<div class="brands__item">
				<p class="brands__symbol">A</p>
				<div class="brands__content">
					<ul>
						<li><a href="category.php">Armadi</a></li>
						<li><a href="category.php">Abber</a></li>
						<li><a href="category.php">Alice Ceramica</a></li>
					</ul>
					<p><a href="#">More</a></p>
				</div>
			</div>
			<div class="brands__item">
				<p class="brands__symbol">A</p>
				<div class="brands__content">
					<ul>
						<li><a href="category.php">Armadi</a></li>
						<li><a href="category.php">Abber</a></li>
						<li><a href="category.php">Alice Ceramica</a></li>
					</ul>
					<p><a href="#">More</a></p>
				</div>
			</div>
			<div class="brands__item">
				<p class="brands__symbol">A</p>
				<div class="brands__content">
					<ul>
						<li><a href="category.php">Armadi</a></li>
						<li><a href="category.php">Abber</a></li>
						<li><a href="category.php">Alice Ceramica</a></li>
					</ul>
					<p><a href="#">More</a></p>
				</div>
			</div>
			<div class="brands__item">
				<p class="brands__symbol">A</p>
				<div class="brands__content">
					<ul>
						<li><a href="category.php">Armadi</a></li>
						<li><a href="category.php">Abber</a></li>
						<li><a href="category.php">Alice Ceramica</a></li>
					</ul>
					<p><a href="#">More</a></p>
				</div>
			</div>
		</div>
		<div class="brands__grid">
			<div class="brands__item">
				<p class="brands__symbol">A</p>
				<div class="brands__content">
					<ul>
						<li><a href="category.php">Armadi</a></li>
						<li><a href="category.php">Abber</a></li>
						<li><a href="category.php">Alice Ceramica</a></li>
					</ul>
					<p><a href="#">More</a></p>
				</div>
			</div>
			<div class="brands__item">
				<p class="brands__symbol">A</p>
				<div class="brands__content">
					<ul>
						<li><a href="category.php">Armadi</a></li>
						<li><a href="category.php">Abber</a></li>
						<li><a href="category.php">Alice Ceramica</a></li>
					</ul>
					<p><a href="#">More</a></p>
				</div>
			</div>
			<div class="brands__item">
				<p class="brands__symbol">A</p>
				<div class="brands__content">
					<ul>
						<li><a href="category.php">Armadi</a></li>
						<li><a href="category.php">Abber</a></li>
						<li><a href="category.php">Alice Ceramica</a></li>
					</ul>
					<p><a href="#">More</a></p>
				</div>
			</div>
			<div class="brands__item">
				<p class="brands__symbol">A</p>
				<div class="brands__content">
					<ul>
						<li><a href="category.php">Armadi</a></li>
						<li><a href="category.php">Abber</a></li>
						<li><a href="category.php">Alice Ceramica</a></li>
					</ul>
					<p><a href="#">More</a></p>
				</div>
			</div>
			<div class="brands__item">
				<p class="brands__symbol">A</p>
				<div class="brands__content">
					<ul>
						<li><a href="category.php">Armadi</a></li>
						<li><a href="category.php">Abber</a></li>
						<li><a href="category.php">Alice Ceramica</a></li>
					</ul>
					<p><a href="#">More</a></p>
				</div>
			</div>
			<div class="brands__item">
				<p class="brands__symbol">A</p>
				<div class="brands__content">
					<ul>
						<li><a href="category.php">Armadi</a></li>
						<li><a href="category.php">Abber</a></li>
						<li><a href="category.php">Alice Ceramica</a></li>
					</ul>
					<p><a href="#">More</a></p>
				</div>
			</div>
		</div>
		<a href="category.php" class="brands__link">All brands<svg viewBox="0 0 10 17" width="10" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.924 1.919A.792.792 0 112.076.83l6.729 7.125a.792.792 0 010 1.088l-6.73 7.126a.792.792 0 01-1.15-1.087L7.14 8.5.924 1.919z" fill="#FF5C00"/></svg></a>
	</div>
</div>

<div class="brands-mobile d-lg-none">
	<div class="container">
		<h2>Brands</h2>
		<div class="brands-mobile__symbols">
			<div class="brands-mobile__symbol">A</div>
			<div class="brands-mobile__symbol">B</div>
			<div class="brands-mobile__symbol">C</div>
			<div class="brands-mobile__symbol">D</div>
			<div class="brands-mobile__symbol">E</div>
			<div class="brands-mobile__symbol">F</div>
			<div class="brands-mobile__symbol">A</div>
			<div class="brands-mobile__symbol">B</div>
			<div class="brands-mobile__symbol">C</div>
			<div class="brands-mobile__symbol">D</div>
			<div class="brands-mobile__symbol">E</div>
			<div class="brands-mobile__symbol">F</div>
		</div>
		<div class="brands-mobile__row">
			<div class="brands-mobile__brands">
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
			</div>
			<div class="brands-mobile__brands">
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
			</div>
			<div class="brands-mobile__brands">
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
			</div>
			<div class="brands-mobile__brands">
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
			</div>
			<div class="brands-mobile__brands">
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
			</div>
			<div class="brands-mobile__brands">
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
			</div>
			<div class="brands-mobile__brands">
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
			</div>
			<div class="brands-mobile__brands">
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
			</div>
			<div class="brands-mobile__brands">
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
			</div>
			<div class="brands-mobile__brands">
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
			</div>
			<div class="brands-mobile__brands">
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
			</div>
			<div class="brands-mobile__brands">
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
				<ul>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
					<li><a href="category.php">Cransit</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="subscribe d-none d-lg-block">
	<div class="container">
		<div class="subscribe__row">
			<div class="subscribe__text">
				<svg viewBox="0 0 100 52" width="100" height="52" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M98.255 51.305c.037-.008.074-.018.111-.028.031-.008.063-.014.094-.024.036-.01.072-.024.107-.037.031-.011.063-.022.094-.035.033-.014.065-.03.097-.045s.064-.029.095-.046c.03-.016.06-.035.09-.053.031-.018.062-.036.092-.056.032-.021.062-.045.093-.068.026-.02.053-.038.078-.059a2.16 2.16 0 00.135-.121l.024-.022.023-.026a2.17 2.17 0 00.12-.133c.022-.027.042-.055.063-.083.021-.029.044-.057.064-.087l.06-.098.049-.084c.018-.033.033-.068.049-.102l.042-.09c.014-.034.025-.067.037-.101.012-.033.025-.066.035-.1.01-.034.017-.068.026-.103.009-.034.018-.068.025-.102.008-.04.013-.082.019-.123.004-.029.01-.057.012-.087a2.17 2.17 0 00.011-.216V2.822c0-1.198-.97-2.169-2.168-2.169H29.519c-.02 0-.038.003-.057.003a2.197 2.197 0 00-.637.113 2.098 2.098 0 00-.479.23 2.504 2.504 0 00-.17.122 2.584 2.584 0 00-.24.222c-.014.014-.028.027-.041.042-.008.008-.014.018-.022.027a2.167 2.167 0 00-.078.097c-.018.025-.038.049-.055.074a2.173 2.173 0 00-.064.099c-.017.027-.035.055-.05.083-.018.032-.035.065-.05.099-.016.03-.032.06-.045.091l-.04.1-.035.098-.029.1-.027.105c-.007.033-.012.066-.017.099a2.583 2.583 0 00-.018.113c-.004.03-.005.063-.008.095-.003.04-.005.08-.006.121l-.002.036v13.374a2.168 2.168 0 104.338 0V7.638l19.281 17.07c-.1.072-.197.15-.288.24L31.687 43.942V29.69a2.168 2.168 0 10-4.338 0v2.65H16.144a2.168 2.168 0 100 4.337H27.35v12.5c0 1.199.97 2.17 2.169 2.17H97.83c.071 0 .143-.005.214-.011.033-.004.065-.01.098-.015l.112-.016zm-2.592-7.363L76.668 24.948l-.037-.034L90.911 12.8a2.169 2.169 0 10-2.807-3.307l-24.4 20.7L35.24 4.991h60.424v38.951zM53.748 28.016c.154-.155.28-.327.378-.51l8.111 7.18a2.164 2.164 0 002.841.03l8.266-7.013c.075.11.16.215.258.313L92.594 47.01H34.754l18.994-18.994z" fill="#FF5C00" class="colorme"/><path d="M2.169 25.352h36.626a2.168 2.168 0 100-4.337H2.17a2.168 2.168 0 100 4.337zM5.964 13.4H22.41a2.168 2.168 0 100-4.336H5.964a2.168 2.168 0 100 4.337zM18.072 41.497H2.17a2.168 2.168 0 100 4.337h15.903a2.168 2.168 0 100-4.337z" fill="#4A4A4A"/></svg>
				<div class="subscribe__content">
					<p>SUBSCRIBE TO NEWSLETTER</p>
					<p>And stay up to date with all the new products and sales</p>
				</div>
			</div>
			<form>
				<svg viewBox="0 0 28 20" width="28" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.54.156H2.46A2.465 2.465 0 000 2.617v14.766c0 1.36 1.11 2.46 2.46 2.46h23.08a2.464 2.464 0 002.46-2.46V2.617c0-1.35-1.097-2.46-2.46-2.46zm-.346 1.64c-.502.501-9.155 9.108-9.454 9.405a2.445 2.445 0 01-1.74.721 2.446 2.446 0 01-1.742-.722L2.806 1.797h22.388zM1.641 17.05V2.952l7.09 7.052-7.09 7.045zm1.166 1.154l7.086-7.042 1.207 1.2a4.074 4.074 0 002.9 1.202 4.073 4.073 0 002.899-1.2l1.208-1.202 7.086 7.042H2.807zm23.552-1.154l-7.09-7.045 7.09-7.052V17.05z" fill="#FF5C00"/></svg>
				<input type="text" placeholder="E-mail">
				<button>Subscribe</button>
			</form>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>