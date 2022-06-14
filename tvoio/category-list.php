<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Baths</title>
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
			<li>Baths</li>
		</ul>
	</div>
</div>

<div class="breadcrumbs d-lg-none">
	<div class="container">
		<ul>
			<li><a href="index.php">Home page</a></li>
			<li>Baths</li>
		</ul>
	</div>
</div>

<div class="category">
	<div class="pagination-mobile">2/25</div>
	<div class="container">
		<h1>Baths</h1>
		<div class="category__row">
			<div class="category__filter d-lg-none"><svg viewBox="0 0 20 20" width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.75 5h-2.563c-.312-1.438-1.562-2.5-3.062-2.5-1.5 0-2.75 1.063-3.063 2.5H1.25v1.25h8.813c.312 1.438 1.562 2.5 3.062 2.5 1.5 0 2.75-1.063 3.063-2.5h2.562V5zm-5.625 2.5a1.842 1.842 0 01-1.875-1.875c0-1.063.813-1.875 1.875-1.875 1.063 0 1.875.813 1.875 1.875A1.842 1.842 0 0113.125 7.5zM1.25 15h2.563c.312 1.438 1.562 2.5 3.062 2.5 1.5 0 2.75-1.063 3.063-2.5h8.812v-1.25H9.937c-.312-1.438-1.562-2.5-3.062-2.5-1.5 0-2.75 1.063-3.063 2.5H1.25V15zm5.625-2.5c1.063 0 1.875.813 1.875 1.875a1.842 1.842 0 01-1.875 1.875A1.842 1.842 0 015 14.375c0-1.063.813-1.875 1.875-1.875z" fill="#fff"/></svg></div>
			<aside>
				<div class="filter filter_opened filter_price">
					<div class="filter__head">
						<p>Price</p>
						<svg viewBox="0 0 10 8" width="10" height="8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.825.118L5 4.447 1.175.118 0 1.451l5 5.67 5-5.67L8.825.118z" fill="#000"/></svg>
						<span class="d-lg-none">Products found: 251</span>
					</div>
					<div class="filter__body">
						<div class="filter__row">
							<div class="filter__row-item">
								<label for="filterMin">from</label>
								<input type="text" id="filterMin" name="filterMax" readonly="readonly">
							</div>
							<div class="filter__row-item">
								<label for="filterMax">to</label>
								<input type="text" id="filterMax" name="filterMin" readonly="readonly">
							</div>
						</div>
						<div class="filter__slider"></div>
						<div class="filter__slider-mobile d-lg-none">
						  <div class="ui-slider-handle filter__slider-min"><span></span></div>
						  <div class="ui-slider-handle filter__slider-max"><span></span></div>
						</div>
						<p class="filter__slider-info d-lg-none">
							<span>0</span>
							<span>9999</span>
						</p>
					</div>
				</div>
				<div class="filter filter_opened filter_checkboxes">
					<div class="filter__head">
						<p>Manufacturer</p>
						<svg viewBox="0 0 10 8" width="10" height="8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.825.118L5 4.447 1.175.118 0 1.451l5 5.67 5-5.67L8.825.118z" fill="#000"/></svg>
					</div>
					<div class="filter__body">
						<div class="filter__line">
							<input type="checkbox" id="Almor">
							<label for="Almor"><svg viewBox="0 0 10 9" width="10" height="9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.882 4l3.53 2.941L9.118 1.06" stroke="#fff" stroke-width="1.5"/></svg>Almor</label>
							<p>26</p>
						</div>
						<div class="filter__line">
							<input type="checkbox" id="Aquatek">
							<label for="Aquatek"><svg viewBox="0 0 10 9" width="10" height="9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.882 4l3.53 2.941L9.118 1.06" stroke="#fff" stroke-width="1.5"/></svg>Aquatek</label>
							<p>53</p>
						</div>
						<div class="filter__line">
							<input type="checkbox" id="Cersanit">
							<label for="Cersanit"><svg viewBox="0 0 10 9" width="10" height="9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.882 4l3.53 2.941L9.118 1.06" stroke="#fff" stroke-width="1.5"/></svg>Cersanit</label>
							<p>25</p>
						</div>
						<div class="filter__line">
							<input type="checkbox" id="Duravit">
							<label for="Duravit"><svg viewBox="0 0 10 9" width="10" height="9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.882 4l3.53 2.941L9.118 1.06" stroke="#fff" stroke-width="1.5"/></svg>Duravit</label>
							<p>7</p>
						</div>
						<div class="filter__line">
							<input type="checkbox" id="Bexi">
							<label for="Bexi"><svg viewBox="0 0 10 9" width="10" height="9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.882 4l3.53 2.941L9.118 1.06" stroke="#fff" stroke-width="1.5"/></svg>Bexi</label>
							<p>1516</p>
						</div>
						<div class="filter__line">
							<input type="checkbox" id="Bexi">
							<label for="Bexi"><svg viewBox="0 0 10 9" width="10" height="9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.882 4l3.53 2.941L9.118 1.06" stroke="#fff" stroke-width="1.5"/></svg>Bexi</label>
							<p>5</p>
						</div>
					</div>
				</div>
				<div class="filter filter_opened filter_checkboxes">
					<div class="filter__head">
						<p>Frame</p>
						<svg viewBox="0 0 10 8" width="10" height="8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.825.118L5 4.447 1.175.118 0 1.451l5 5.67 5-5.67L8.825.118z" fill="#000"/></svg>
					</div>
					<div class="filter__body">
						<div class="filter__line">
							<input type="checkbox" id="carcass-true">
							<label for="carcass-true"><svg viewBox="0 0 10 9" width="10" height="9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.882 4l3.53 2.941L9.118 1.06" stroke="#fff" stroke-width="1.5"/></svg>Yes</label>
							<p>26</p>
						</div>
						<div class="filter__line">
							<input type="checkbox" id="carcass-false">
							<label for="carcass-false"><svg viewBox="0 0 10 9" width="10" height="9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.882 4l3.53 2.941L9.118 1.06" stroke="#fff" stroke-width="1.5"/></svg>No</label>
							<p>53</p>
						</div>
						<div class="filter__line">
							<input type="checkbox" id="carcass-optional">
							<label for="carcass-optional"><svg viewBox="0 0 10 9" width="10" height="9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.882 4l3.53 2.941L9.118 1.06" stroke="#fff" stroke-width="1.5"/></svg>Sold separately <br></label>
							<p>26</p>
						</div>
					</div>
				</div>
				<div class="filter filter_opened filter_checkboxes">
					<div class="filter__head">
						<p>Material</p>
						<svg viewBox="0 0 10 8" width="10" height="8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.825.118L5 4.447 1.175.118 0 1.451l5 5.67 5-5.67L8.825.118z" fill="#000"/></svg>
					</div>
					<div class="filter__body">
						<div class="filter__line">
							<input type="checkbox" id="material1">
							<label for="material1"><svg viewBox="0 0 10 9" width="10" height="9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.882 4l3.53 2.941L9.118 1.06" stroke="#fff" stroke-width="1.5"/></svg>Material 1</label>
							<p>26</p>
						</div>
						<div class="filter__line">
							<input type="checkbox" id="material2">
							<label for="material2"><svg viewBox="0 0 10 9" width="10" height="9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.882 4l3.53 2.941L9.118 1.06" stroke="#fff" stroke-width="1.5"/></svg>Material 2</label>
							<p>55</p>
						</div>
						<div class="filter__line">
							<input type="checkbox" id="material3">
							<label for="material3"><svg viewBox="0 0 10 9" width="10" height="9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.882 4l3.53 2.941L9.118 1.06" stroke="#fff" stroke-width="1.5"/></svg>Material 3</label>
							<p>75</p>
						</div>
					</div>
				</div>
				<figure class="promo" style="background: url(assets/img/bg-promo2.jpg) no-repeat center / cover;">
					<p>Sale<br>toilet pans!</p>
					<a href="category.php">Pick up at a discount</a>
				</figure>
			</aside>
			<main>
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
						<img width="154.47" height="104" src="assets/img/img-categories4.jpg">
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
						<img width="154.47" height="104" src="assets/img/img-categories9.jpg">
					</a>
				</div>
				<h2 class="category__title d-lg-none">Categories</h2>
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
				<div class="category__head d-lg-none">
					<h2>Shower systems</h2>
					<div class="category-sort__select">
						<button>Popular first<svg viewBox="0 0 8 5" width="8" height="5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.678.01L4 2.683 1.322.011.5.833l3.5 3.5 3.5-3.5-.822-.822z" fill="#000"/></svg></button>
						<ul>
							<li>Sorting 1</li>
							<li>Sorting 2</li>
						</ul>
					</div>
				</div>
				<div class="category-sort">
					<p class="category-sort__text">Sort</p>
					<div class="category-sort__select">
						<button>Popular first<svg viewBox="0 0 8 5" width="8" height="5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.678.01L4 2.683 1.322.011.5.833l3.5 3.5 3.5-3.5-.822-.822z" fill="#000"/></svg></button>
						<ul>
							<li>Sorting 1</li>
							<li>Sorting 2</li>
						</ul>
					</div>
					<a href="category-list.php" class="category-sort__view category-sort__view_active">
						<svg viewBox="0 0 20 14" width="20" height="14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.2 14h19.6v-2.8H.2V14zm0-14v2.8h19.6V0H.2zm0 8.4h19.6V5.6H.2v2.8z" fill="#353535"/></svg>
					</a>
					<a href="category.php" class="category-sort__view">
						<svg viewBox="0 0 20 20" width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.333 3A2.333 2.333 0 11.667 3a2.333 2.333 0 014.666 0zM5.333 10a2.333 2.333 0 11-4.667 0 2.333 2.333 0 014.667 0zM3 19.333a2.333 2.333 0 100-4.666 2.333 2.333 0 000 4.666zM12.333 3a2.334 2.334 0 11-4.667 0 2.334 2.334 0 014.667 0zM10 12.333a2.333 2.333 0 100-4.666 2.333 2.333 0 000 4.666zM12.333 17a2.334 2.334 0 11-4.667 0 2.334 2.334 0 014.667 0zM17 5.333a2.333 2.333 0 100-4.667 2.333 2.333 0 000 4.667zM19.333 10a2.334 2.334 0 11-4.667 0 2.334 2.334 0 014.667 0zM17 19.333a2.333 2.333 0 100-4.666 2.333 2.333 0 000 4.666z" fill="#353535"/></svg>
					</a>
				</div>
				<div class="category__grid category__grid_list">
					<div class="product-item">
						<p class="product-item__label">Sale</p>
						<svg class="product-item__compare" viewBox="0 0 15 19" width="15" height="19" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.clip220)" fill="#000"><path d="M8.175 18.33V5.605c0-.298-.329-.54-.734-.54-.405 0-.733.242-.733.54V18.33c0 .298.328.54.733.54.405 0 .734-.242.734-.54zM14.043 18.15V1.185a.726.726 0 00-.734-.72.726.726 0 00-.733.72V18.15c0 .397.328.719.733.719a.726.726 0 00.734-.72zM1.573 18.15V1.185A.726.726 0 00.84.464a.726.726 0 00-.734.72V18.15c0 .397.329.719.734.719a.726.726 0 00.733-.72z"/></g><defs><clipPath class="clip220"><path fill="#fff" transform="rotate(90 7.157 7.157)" d="M0 0h18.869v14.315H0z"/></clipPath></defs></svg>
						<div class="product-item__favorite">
							<svg viewBox="0 0 19 17" width="19" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.613.635a5.34 5.34 0 00-4.113 1.9 5.267 5.267 0 00-4.113-1.9A5.387 5.387 0 000 6.023C0 11.12 8.899 16.1 9.26 16.293a.433.433 0 00.48 0c.361-.193 9.26-5.1 9.26-10.27A5.387 5.387 0 0013.613.635zM9.5 15.33C8.105 14.513.962 10.16.962 6.023a4.425 4.425 0 014.425-4.426 4.33 4.33 0 013.704 1.997.505.505 0 00.818 0 4.425 4.425 0 018.129 2.429c0 4.184-7.143 8.514-8.538 9.307z" fill="#202020"/></svg>
							<svg viewBox="0 0 21 19" width="21" height="19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.731 4.37a5.839 5.839 0 00-1.278-1.86A5.96 5.96 0 0014.266.807 6 6 0 0010.5 2.136 5.999 5.999 0 006.733.808 5.96 5.96 0 002.547 2.51 5.805 5.805 0 00.797 6.66c0 .748.153 1.527.456 2.32.254.663.618 1.35 1.082 2.044.737 1.098 1.75 2.244 3.008 3.405a33.618 33.618 0 004.236 3.308l.532.342c.236.15.54.15.775 0l.533-.342a34.047 34.047 0 004.236-3.308c1.258-1.161 2.27-2.307 3.007-3.405.465-.694.831-1.381 1.083-2.044.303-.793.456-1.572.456-2.32a5.718 5.718 0 00-.47-2.29z" fill="#FF5C00"/></svg>
						</div>
						<a href="product.php">
							<figure>
								<img src="assets/img/img-product1.jpg" width="104" height="220" class="d-none d-lg-block">
								<img src="assets/img/img-product1.jpg" width="36" height="76" class="d-lg-none">
							</figure>
						</a>
						<div class="product-item__content">
							<div class="product-item__body">
								<p class="product-item__id">ID: 26517</p>
								<p class="product-item__category">Shower systems</p>
								<a href="product.php" class="product-item__name-link"><p class="product-item__name">Shower system Burlington Trent TF2S+V16</p></a>
								<div class="product-item__row">
									<p class="product-item__country">Germany</p>
									<p class="product-item__id">ID: 26517</p>
								</div>
							</div>
							<div class="product-item__footer">
								<div class="product-item__msg"><svg viewBox="0 0 15 15" width="15" height="15" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.clip099)" fill="#fff"><path d="M14.868 2.98l-4.55 4.52 4.55 4.52c.082-.172.132-.362.132-.565v-7.91c0-.203-.05-.393-.132-.565zM13.681 2.227H1.319c-.203 0-.393.05-.565.132l5.815 5.785a1.32 1.32 0 001.864 0l5.814-5.785a1.303 1.303 0 00-.565-.132zM.132 2.98A1.303 1.303 0 000 3.545v7.91c0 .203.05.393.132.565l4.55-4.52-4.55-4.52z"/><path d="M9.697 8.121l-.644.644a2.2 2.2 0 01-3.107 0l-.643-.644-4.55 4.52c.172.082.362.132.565.132h12.364c.202 0 .392-.05.564-.132l-4.549-4.52z"/></g><defs><clipPath class="clip099"><path fill="#fff" d="M0 0h15v15H0z"/></clipPath></defs></svg></div>
								<div class="product-item__price">
									<p class="product-item__price-old"><del>15 600 ₴</del></p>
									<p class="product-item__price-current">13 599 ₴ <span class="product-item__msg"><svg viewBox="0 0 12 12" width="12" height="12" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.04404)" fill="#fff"><path d="M11.894 2.384L8.254 6l3.64 3.616c.066-.137.106-.29.106-.452V2.836c0-.162-.04-.314-.106-.452zM10.945 1.781h-9.89c-.163 0-.315.04-.452.106l4.651 4.628c.411.411 1.08.411 1.491 0l4.652-4.628a1.042 1.042 0 00-.452-.106zM.106 2.384C.04 2.522 0 2.674 0 2.836v6.328c0 .163.04.315.106.452L3.745 6 .105 2.384z"/><path d="M7.758 6.497l-.515.515a1.76 1.76 0 01-2.486 0l-.515-.515-3.64 3.616c.138.066.29.106.452.106h9.891c.162 0 .314-.04.452-.106l-3.64-3.616z"/></g><defs><clipPath class="04404"><path fill="#fff" d="M0 0h12v12H0z"/></clipPath></defs></svg></span></p>
								</div>
								<div class="product-item__buttons">
									<div class="product-item__buy">Buy in 1 click</div>
									<button class="product-item__addtocart">
										<svg viewBox="0 0 16 16" width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.clip202)" fill="#FF5C00"><path d="M12.383 11.714c-.922 0-1.673.75-1.673 1.673s.75 1.674 1.673 1.674 1.674-.751 1.674-1.674c0-.922-.751-1.673-1.674-1.673zm0 2.677a1.005 1.005 0 010-2.008 1.005 1.005 0 010 2.008zM5.69 11.714c-.923 0-1.674.75-1.674 1.673s.751 1.674 1.674 1.674c.922 0 1.673-.751 1.673-1.674 0-.922-.75-1.673-1.673-1.673zm0 2.677a1.005 1.005 0 010-2.008 1.005 1.005 0 010 2.008zM13.722 10.376H5.997a1.678 1.678 0 01-1.64-1.346L2.67.604a.335.335 0 00-.328-.269H.335a.335.335 0 000 .67h1.733L3.7 9.161a2.35 2.35 0 002.297 1.883h7.725a.335.335 0 000-.67z"/><path d="M15.312 2.456a.335.335 0 00-.251-.113H3.012a.335.335 0 000 .67h11.67l-.476 3.805c-.063.502-.491.88-.997.88H4.016a.335.335 0 000 .67h9.193c.842 0 1.556-.63 1.66-1.467l.524-4.182a.334.334 0 00-.081-.263z"/></g><defs><clipPath class="clip202"><path fill="#fff" d="M0 0h15.395v15.395H0z"/></clipPath></defs></svg>
										Add to cart
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="product-item">
						<p class="product-item__label">Sale</p>
						<svg class="product-item__compare" viewBox="0 0 15 19" width="15" height="19" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.clip220)" fill="#000"><path d="M8.175 18.33V5.605c0-.298-.329-.54-.734-.54-.405 0-.733.242-.733.54V18.33c0 .298.328.54.733.54.405 0 .734-.242.734-.54zM14.043 18.15V1.185a.726.726 0 00-.734-.72.726.726 0 00-.733.72V18.15c0 .397.328.719.733.719a.726.726 0 00.734-.72zM1.573 18.15V1.185A.726.726 0 00.84.464a.726.726 0 00-.734.72V18.15c0 .397.329.719.734.719a.726.726 0 00.733-.72z"/></g><defs><clipPath class="clip220"><path fill="#fff" transform="rotate(90 7.157 7.157)" d="M0 0h18.869v14.315H0z"/></clipPath></defs></svg>
						<div class="product-item__favorite">
							<svg viewBox="0 0 19 17" width="19" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.613.635a5.34 5.34 0 00-4.113 1.9 5.267 5.267 0 00-4.113-1.9A5.387 5.387 0 000 6.023C0 11.12 8.899 16.1 9.26 16.293a.433.433 0 00.48 0c.361-.193 9.26-5.1 9.26-10.27A5.387 5.387 0 0013.613.635zM9.5 15.33C8.105 14.513.962 10.16.962 6.023a4.425 4.425 0 014.425-4.426 4.33 4.33 0 013.704 1.997.505.505 0 00.818 0 4.425 4.425 0 018.129 2.429c0 4.184-7.143 8.514-8.538 9.307z" fill="#202020"/></svg>
							<svg viewBox="0 0 21 19" width="21" height="19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.731 4.37a5.839 5.839 0 00-1.278-1.86A5.96 5.96 0 0014.266.807 6 6 0 0010.5 2.136 5.999 5.999 0 006.733.808 5.96 5.96 0 002.547 2.51 5.805 5.805 0 00.797 6.66c0 .748.153 1.527.456 2.32.254.663.618 1.35 1.082 2.044.737 1.098 1.75 2.244 3.008 3.405a33.618 33.618 0 004.236 3.308l.532.342c.236.15.54.15.775 0l.533-.342a34.047 34.047 0 004.236-3.308c1.258-1.161 2.27-2.307 3.007-3.405.465-.694.831-1.381 1.083-2.044.303-.793.456-1.572.456-2.32a5.718 5.718 0 00-.47-2.29z" fill="#FF5C00"/></svg>
						</div>
						<a href="product.php">
							<figure>
								<img src="assets/img/img-product1.jpg" width="104" height="220" class="d-none d-lg-block">
								<img src="assets/img/img-product1.jpg" width="36" height="76" class="d-lg-none">
							</figure>
						</a>
						<div class="product-item__content">
							<div class="product-item__body">
								<p class="product-item__id">ID: 26517</p>
								<p class="product-item__category">Shower systems</p>
								<a href="product.php" class="product-item__name-link"><p class="product-item__name">Shower system Burlington Trent TF2S+V16</p></a>
								<div class="product-item__row">
									<p class="product-item__country">Germany</p>
									<p class="product-item__id">ID: 26517</p>
								</div>
							</div>
							<div class="product-item__footer">
								<div class="product-item__msg"><svg viewBox="0 0 15 15" width="15" height="15" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.clip099)" fill="#fff"><path d="M14.868 2.98l-4.55 4.52 4.55 4.52c.082-.172.132-.362.132-.565v-7.91c0-.203-.05-.393-.132-.565zM13.681 2.227H1.319c-.203 0-.393.05-.565.132l5.815 5.785a1.32 1.32 0 001.864 0l5.814-5.785a1.303 1.303 0 00-.565-.132zM.132 2.98A1.303 1.303 0 000 3.545v7.91c0 .203.05.393.132.565l4.55-4.52-4.55-4.52z"/><path d="M9.697 8.121l-.644.644a2.2 2.2 0 01-3.107 0l-.643-.644-4.55 4.52c.172.082.362.132.565.132h12.364c.202 0 .392-.05.564-.132l-4.549-4.52z"/></g><defs><clipPath class="clip099"><path fill="#fff" d="M0 0h15v15H0z"/></clipPath></defs></svg></div>
								<div class="product-item__price">
									<p class="product-item__price-old"><del>15 600 ₴</del></p>
									<p class="product-item__price-current">13 599 ₴ <span class="product-item__msg"><svg viewBox="0 0 12 12" width="12" height="12" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.04404)" fill="#fff"><path d="M11.894 2.384L8.254 6l3.64 3.616c.066-.137.106-.29.106-.452V2.836c0-.162-.04-.314-.106-.452zM10.945 1.781h-9.89c-.163 0-.315.04-.452.106l4.651 4.628c.411.411 1.08.411 1.491 0l4.652-4.628a1.042 1.042 0 00-.452-.106zM.106 2.384C.04 2.522 0 2.674 0 2.836v6.328c0 .163.04.315.106.452L3.745 6 .105 2.384z"/><path d="M7.758 6.497l-.515.515a1.76 1.76 0 01-2.486 0l-.515-.515-3.64 3.616c.138.066.29.106.452.106h9.891c.162 0 .314-.04.452-.106l-3.64-3.616z"/></g><defs><clipPath class="04404"><path fill="#fff" d="M0 0h12v12H0z"/></clipPath></defs></svg></span></p>
								</div>
								<div class="product-item__buttons">
									<div class="product-item__buy">Buy in 1 click</div>
									<button class="product-item__addtocart">
										<svg viewBox="0 0 16 16" width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.clip202)" fill="#FF5C00"><path d="M12.383 11.714c-.922 0-1.673.75-1.673 1.673s.75 1.674 1.673 1.674 1.674-.751 1.674-1.674c0-.922-.751-1.673-1.674-1.673zm0 2.677a1.005 1.005 0 010-2.008 1.005 1.005 0 010 2.008zM5.69 11.714c-.923 0-1.674.75-1.674 1.673s.751 1.674 1.674 1.674c.922 0 1.673-.751 1.673-1.674 0-.922-.75-1.673-1.673-1.673zm0 2.677a1.005 1.005 0 010-2.008 1.005 1.005 0 010 2.008zM13.722 10.376H5.997a1.678 1.678 0 01-1.64-1.346L2.67.604a.335.335 0 00-.328-.269H.335a.335.335 0 000 .67h1.733L3.7 9.161a2.35 2.35 0 002.297 1.883h7.725a.335.335 0 000-.67z"/><path d="M15.312 2.456a.335.335 0 00-.251-.113H3.012a.335.335 0 000 .67h11.67l-.476 3.805c-.063.502-.491.88-.997.88H4.016a.335.335 0 000 .67h9.193c.842 0 1.556-.63 1.66-1.467l.524-4.182a.334.334 0 00-.081-.263z"/></g><defs><clipPath class="clip202"><path fill="#fff" d="M0 0h15.395v15.395H0z"/></clipPath></defs></svg>
										Add to cart
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="product-item">
						<p class="product-item__label">Sale</p>
						<svg class="product-item__compare" viewBox="0 0 15 19" width="15" height="19" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.clip220)" fill="#000"><path d="M8.175 18.33V5.605c0-.298-.329-.54-.734-.54-.405 0-.733.242-.733.54V18.33c0 .298.328.54.733.54.405 0 .734-.242.734-.54zM14.043 18.15V1.185a.726.726 0 00-.734-.72.726.726 0 00-.733.72V18.15c0 .397.328.719.733.719a.726.726 0 00.734-.72zM1.573 18.15V1.185A.726.726 0 00.84.464a.726.726 0 00-.734.72V18.15c0 .397.329.719.734.719a.726.726 0 00.733-.72z"/></g><defs><clipPath class="clip220"><path fill="#fff" transform="rotate(90 7.157 7.157)" d="M0 0h18.869v14.315H0z"/></clipPath></defs></svg>
						<div class="product-item__favorite">
							<svg viewBox="0 0 19 17" width="19" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.613.635a5.34 5.34 0 00-4.113 1.9 5.267 5.267 0 00-4.113-1.9A5.387 5.387 0 000 6.023C0 11.12 8.899 16.1 9.26 16.293a.433.433 0 00.48 0c.361-.193 9.26-5.1 9.26-10.27A5.387 5.387 0 0013.613.635zM9.5 15.33C8.105 14.513.962 10.16.962 6.023a4.425 4.425 0 014.425-4.426 4.33 4.33 0 013.704 1.997.505.505 0 00.818 0 4.425 4.425 0 018.129 2.429c0 4.184-7.143 8.514-8.538 9.307z" fill="#202020"/></svg>
							<svg viewBox="0 0 21 19" width="21" height="19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.731 4.37a5.839 5.839 0 00-1.278-1.86A5.96 5.96 0 0014.266.807 6 6 0 0010.5 2.136 5.999 5.999 0 006.733.808 5.96 5.96 0 002.547 2.51 5.805 5.805 0 00.797 6.66c0 .748.153 1.527.456 2.32.254.663.618 1.35 1.082 2.044.737 1.098 1.75 2.244 3.008 3.405a33.618 33.618 0 004.236 3.308l.532.342c.236.15.54.15.775 0l.533-.342a34.047 34.047 0 004.236-3.308c1.258-1.161 2.27-2.307 3.007-3.405.465-.694.831-1.381 1.083-2.044.303-.793.456-1.572.456-2.32a5.718 5.718 0 00-.47-2.29z" fill="#FF5C00"/></svg>
						</div>
						<a href="product.php">
							<figure>
								<img src="assets/img/img-product1.jpg" width="104" height="220" class="d-none d-lg-block">
								<img src="assets/img/img-product1.jpg" width="36" height="76" class="d-lg-none">
							</figure>
						</a>
						<div class="product-item__content">
							<div class="product-item__body">
								<p class="product-item__id">ID: 26517</p>
								<p class="product-item__category">Shower systems</p>
								<a href="product.php" class="product-item__name-link"><p class="product-item__name">Shower system Burlington Trent TF2S+V16</p></a>
								<div class="product-item__row">
									<p class="product-item__country">Germany</p>
									<p class="product-item__id">ID: 26517</p>
								</div>
							</div>
							<div class="product-item__footer">
								<div class="product-item__msg"><svg viewBox="0 0 15 15" width="15" height="15" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.clip099)" fill="#fff"><path d="M14.868 2.98l-4.55 4.52 4.55 4.52c.082-.172.132-.362.132-.565v-7.91c0-.203-.05-.393-.132-.565zM13.681 2.227H1.319c-.203 0-.393.05-.565.132l5.815 5.785a1.32 1.32 0 001.864 0l5.814-5.785a1.303 1.303 0 00-.565-.132zM.132 2.98A1.303 1.303 0 000 3.545v7.91c0 .203.05.393.132.565l4.55-4.52-4.55-4.52z"/><path d="M9.697 8.121l-.644.644a2.2 2.2 0 01-3.107 0l-.643-.644-4.55 4.52c.172.082.362.132.565.132h12.364c.202 0 .392-.05.564-.132l-4.549-4.52z"/></g><defs><clipPath class="clip099"><path fill="#fff" d="M0 0h15v15H0z"/></clipPath></defs></svg></div>
								<div class="product-item__price">
									<p class="product-item__price-old"><del>15 600 ₴</del></p>
									<p class="product-item__price-current">13 599 ₴ <span class="product-item__msg"><svg viewBox="0 0 12 12" width="12" height="12" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.04404)" fill="#fff"><path d="M11.894 2.384L8.254 6l3.64 3.616c.066-.137.106-.29.106-.452V2.836c0-.162-.04-.314-.106-.452zM10.945 1.781h-9.89c-.163 0-.315.04-.452.106l4.651 4.628c.411.411 1.08.411 1.491 0l4.652-4.628a1.042 1.042 0 00-.452-.106zM.106 2.384C.04 2.522 0 2.674 0 2.836v6.328c0 .163.04.315.106.452L3.745 6 .105 2.384z"/><path d="M7.758 6.497l-.515.515a1.76 1.76 0 01-2.486 0l-.515-.515-3.64 3.616c.138.066.29.106.452.106h9.891c.162 0 .314-.04.452-.106l-3.64-3.616z"/></g><defs><clipPath class="04404"><path fill="#fff" d="M0 0h12v12H0z"/></clipPath></defs></svg></span></p>
								</div>
								<div class="product-item__buttons">
									<div class="product-item__buy">Buy in 1 click</div>
									<button class="product-item__addtocart">
										<svg viewBox="0 0 16 16" width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.clip202)" fill="#FF5C00"><path d="M12.383 11.714c-.922 0-1.673.75-1.673 1.673s.75 1.674 1.673 1.674 1.674-.751 1.674-1.674c0-.922-.751-1.673-1.674-1.673zm0 2.677a1.005 1.005 0 010-2.008 1.005 1.005 0 010 2.008zM5.69 11.714c-.923 0-1.674.75-1.674 1.673s.751 1.674 1.674 1.674c.922 0 1.673-.751 1.673-1.674 0-.922-.75-1.673-1.673-1.673zm0 2.677a1.005 1.005 0 010-2.008 1.005 1.005 0 010 2.008zM13.722 10.376H5.997a1.678 1.678 0 01-1.64-1.346L2.67.604a.335.335 0 00-.328-.269H.335a.335.335 0 000 .67h1.733L3.7 9.161a2.35 2.35 0 002.297 1.883h7.725a.335.335 0 000-.67z"/><path d="M15.312 2.456a.335.335 0 00-.251-.113H3.012a.335.335 0 000 .67h11.67l-.476 3.805c-.063.502-.491.88-.997.88H4.016a.335.335 0 000 .67h9.193c.842 0 1.556-.63 1.66-1.467l.524-4.182a.334.334 0 00-.081-.263z"/></g><defs><clipPath class="clip202"><path fill="#fff" d="M0 0h15.395v15.395H0z"/></clipPath></defs></svg>
										Add to cart
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="product-item">
						<p class="product-item__label">Sale</p>
						<svg class="product-item__compare" viewBox="0 0 15 19" width="15" height="19" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.clip220)" fill="#000"><path d="M8.175 18.33V5.605c0-.298-.329-.54-.734-.54-.405 0-.733.242-.733.54V18.33c0 .298.328.54.733.54.405 0 .734-.242.734-.54zM14.043 18.15V1.185a.726.726 0 00-.734-.72.726.726 0 00-.733.72V18.15c0 .397.328.719.733.719a.726.726 0 00.734-.72zM1.573 18.15V1.185A.726.726 0 00.84.464a.726.726 0 00-.734.72V18.15c0 .397.329.719.734.719a.726.726 0 00.733-.72z"/></g><defs><clipPath class="clip220"><path fill="#fff" transform="rotate(90 7.157 7.157)" d="M0 0h18.869v14.315H0z"/></clipPath></defs></svg>
						<div class="product-item__favorite">
							<svg viewBox="0 0 19 17" width="19" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.613.635a5.34 5.34 0 00-4.113 1.9 5.267 5.267 0 00-4.113-1.9A5.387 5.387 0 000 6.023C0 11.12 8.899 16.1 9.26 16.293a.433.433 0 00.48 0c.361-.193 9.26-5.1 9.26-10.27A5.387 5.387 0 0013.613.635zM9.5 15.33C8.105 14.513.962 10.16.962 6.023a4.425 4.425 0 014.425-4.426 4.33 4.33 0 013.704 1.997.505.505 0 00.818 0 4.425 4.425 0 018.129 2.429c0 4.184-7.143 8.514-8.538 9.307z" fill="#202020"/></svg>
							<svg viewBox="0 0 21 19" width="21" height="19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.731 4.37a5.839 5.839 0 00-1.278-1.86A5.96 5.96 0 0014.266.807 6 6 0 0010.5 2.136 5.999 5.999 0 006.733.808 5.96 5.96 0 002.547 2.51 5.805 5.805 0 00.797 6.66c0 .748.153 1.527.456 2.32.254.663.618 1.35 1.082 2.044.737 1.098 1.75 2.244 3.008 3.405a33.618 33.618 0 004.236 3.308l.532.342c.236.15.54.15.775 0l.533-.342a34.047 34.047 0 004.236-3.308c1.258-1.161 2.27-2.307 3.007-3.405.465-.694.831-1.381 1.083-2.044.303-.793.456-1.572.456-2.32a5.718 5.718 0 00-.47-2.29z" fill="#FF5C00"/></svg>
						</div>
						<a href="product.php">
							<figure>
								<img src="assets/img/img-product1.jpg" width="104" height="220" class="d-none d-lg-block">
								<img src="assets/img/img-product1.jpg" width="36" height="76" class="d-lg-none">
							</figure>
						</a>
						<div class="product-item__content">
							<div class="product-item__body">
								<p class="product-item__id">ID: 26517</p>
								<p class="product-item__category">Shower systems</p>
								<a href="product.php" class="product-item__name-link"><p class="product-item__name">Shower system Burlington Trent TF2S+V16</p></a>
								<div class="product-item__row">
									<p class="product-item__country">Germany</p>
									<p class="product-item__id">ID: 26517</p>
								</div>
							</div>
							<div class="product-item__footer">
								<div class="product-item__msg"><svg viewBox="0 0 15 15" width="15" height="15" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.clip099)" fill="#fff"><path d="M14.868 2.98l-4.55 4.52 4.55 4.52c.082-.172.132-.362.132-.565v-7.91c0-.203-.05-.393-.132-.565zM13.681 2.227H1.319c-.203 0-.393.05-.565.132l5.815 5.785a1.32 1.32 0 001.864 0l5.814-5.785a1.303 1.303 0 00-.565-.132zM.132 2.98A1.303 1.303 0 000 3.545v7.91c0 .203.05.393.132.565l4.55-4.52-4.55-4.52z"/><path d="M9.697 8.121l-.644.644a2.2 2.2 0 01-3.107 0l-.643-.644-4.55 4.52c.172.082.362.132.565.132h12.364c.202 0 .392-.05.564-.132l-4.549-4.52z"/></g><defs><clipPath class="clip099"><path fill="#fff" d="M0 0h15v15H0z"/></clipPath></defs></svg></div>
								<div class="product-item__price">
									<p class="product-item__price-old"><del>15 600 ₴</del></p>
									<p class="product-item__price-current">13 599 ₴ <span class="product-item__msg"><svg viewBox="0 0 12 12" width="12" height="12" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.04404)" fill="#fff"><path d="M11.894 2.384L8.254 6l3.64 3.616c.066-.137.106-.29.106-.452V2.836c0-.162-.04-.314-.106-.452zM10.945 1.781h-9.89c-.163 0-.315.04-.452.106l4.651 4.628c.411.411 1.08.411 1.491 0l4.652-4.628a1.042 1.042 0 00-.452-.106zM.106 2.384C.04 2.522 0 2.674 0 2.836v6.328c0 .163.04.315.106.452L3.745 6 .105 2.384z"/><path d="M7.758 6.497l-.515.515a1.76 1.76 0 01-2.486 0l-.515-.515-3.64 3.616c.138.066.29.106.452.106h9.891c.162 0 .314-.04.452-.106l-3.64-3.616z"/></g><defs><clipPath class="04404"><path fill="#fff" d="M0 0h12v12H0z"/></clipPath></defs></svg></span></p>
								</div>
								<div class="product-item__buttons">
									<div class="product-item__buy">Buy in 1 click</div>
									<button class="product-item__addtocart">
										<svg viewBox="0 0 16 16" width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.clip202)" fill="#FF5C00"><path d="M12.383 11.714c-.922 0-1.673.75-1.673 1.673s.75 1.674 1.673 1.674 1.674-.751 1.674-1.674c0-.922-.751-1.673-1.674-1.673zm0 2.677a1.005 1.005 0 010-2.008 1.005 1.005 0 010 2.008zM5.69 11.714c-.923 0-1.674.75-1.674 1.673s.751 1.674 1.674 1.674c.922 0 1.673-.751 1.673-1.674 0-.922-.75-1.673-1.673-1.673zm0 2.677a1.005 1.005 0 010-2.008 1.005 1.005 0 010 2.008zM13.722 10.376H5.997a1.678 1.678 0 01-1.64-1.346L2.67.604a.335.335 0 00-.328-.269H.335a.335.335 0 000 .67h1.733L3.7 9.161a2.35 2.35 0 002.297 1.883h7.725a.335.335 0 000-.67z"/><path d="M15.312 2.456a.335.335 0 00-.251-.113H3.012a.335.335 0 000 .67h11.67l-.476 3.805c-.063.502-.491.88-.997.88H4.016a.335.335 0 000 .67h9.193c.842 0 1.556-.63 1.66-1.467l.524-4.182a.334.334 0 00-.081-.263z"/></g><defs><clipPath class="clip202"><path fill="#fff" d="M0 0h15.395v15.395H0z"/></clipPath></defs></svg>
										Add to cart
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="product-item">
						<p class="product-item__label">Sale</p>
						<svg class="product-item__compare" viewBox="0 0 15 19" width="15" height="19" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.clip220)" fill="#000"><path d="M8.175 18.33V5.605c0-.298-.329-.54-.734-.54-.405 0-.733.242-.733.54V18.33c0 .298.328.54.733.54.405 0 .734-.242.734-.54zM14.043 18.15V1.185a.726.726 0 00-.734-.72.726.726 0 00-.733.72V18.15c0 .397.328.719.733.719a.726.726 0 00.734-.72zM1.573 18.15V1.185A.726.726 0 00.84.464a.726.726 0 00-.734.72V18.15c0 .397.329.719.734.719a.726.726 0 00.733-.72z"/></g><defs><clipPath class="clip220"><path fill="#fff" transform="rotate(90 7.157 7.157)" d="M0 0h18.869v14.315H0z"/></clipPath></defs></svg>
						<div class="product-item__favorite">
							<svg viewBox="0 0 19 17" width="19" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.613.635a5.34 5.34 0 00-4.113 1.9 5.267 5.267 0 00-4.113-1.9A5.387 5.387 0 000 6.023C0 11.12 8.899 16.1 9.26 16.293a.433.433 0 00.48 0c.361-.193 9.26-5.1 9.26-10.27A5.387 5.387 0 0013.613.635zM9.5 15.33C8.105 14.513.962 10.16.962 6.023a4.425 4.425 0 014.425-4.426 4.33 4.33 0 013.704 1.997.505.505 0 00.818 0 4.425 4.425 0 018.129 2.429c0 4.184-7.143 8.514-8.538 9.307z" fill="#202020"/></svg>
							<svg viewBox="0 0 21 19" width="21" height="19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.731 4.37a5.839 5.839 0 00-1.278-1.86A5.96 5.96 0 0014.266.807 6 6 0 0010.5 2.136 5.999 5.999 0 006.733.808 5.96 5.96 0 002.547 2.51 5.805 5.805 0 00.797 6.66c0 .748.153 1.527.456 2.32.254.663.618 1.35 1.082 2.044.737 1.098 1.75 2.244 3.008 3.405a33.618 33.618 0 004.236 3.308l.532.342c.236.15.54.15.775 0l.533-.342a34.047 34.047 0 004.236-3.308c1.258-1.161 2.27-2.307 3.007-3.405.465-.694.831-1.381 1.083-2.044.303-.793.456-1.572.456-2.32a5.718 5.718 0 00-.47-2.29z" fill="#FF5C00"/></svg>
						</div>
						<a href="product.php">
							<figure>
								<img src="assets/img/img-product1.jpg" width="104" height="220" class="d-none d-lg-block">
								<img src="assets/img/img-product1.jpg" width="36" height="76" class="d-lg-none">
							</figure>
						</a>
						<div class="product-item__content">
							<div class="product-item__body">
								<p class="product-item__id">ID: 26517</p>
								<p class="product-item__category">Shower systems</p>
								<a href="product.php" class="product-item__name-link"><p class="product-item__name">Shower system Burlington Trent TF2S+V16</p></a>
								<div class="product-item__row">
									<p class="product-item__country">Germany</p>
									<p class="product-item__id">ID: 26517</p>
								</div>
							</div>
							<div class="product-item__footer">
								<div class="product-item__msg"><svg viewBox="0 0 15 15" width="15" height="15" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.clip099)" fill="#fff"><path d="M14.868 2.98l-4.55 4.52 4.55 4.52c.082-.172.132-.362.132-.565v-7.91c0-.203-.05-.393-.132-.565zM13.681 2.227H1.319c-.203 0-.393.05-.565.132l5.815 5.785a1.32 1.32 0 001.864 0l5.814-5.785a1.303 1.303 0 00-.565-.132zM.132 2.98A1.303 1.303 0 000 3.545v7.91c0 .203.05.393.132.565l4.55-4.52-4.55-4.52z"/><path d="M9.697 8.121l-.644.644a2.2 2.2 0 01-3.107 0l-.643-.644-4.55 4.52c.172.082.362.132.565.132h12.364c.202 0 .392-.05.564-.132l-4.549-4.52z"/></g><defs><clipPath class="clip099"><path fill="#fff" d="M0 0h15v15H0z"/></clipPath></defs></svg></div>
								<div class="product-item__price">
									<p class="product-item__price-old"><del>15 600 ₴</del></p>
									<p class="product-item__price-current">13 599 ₴ <span class="product-item__msg"><svg viewBox="0 0 12 12" width="12" height="12" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.04404)" fill="#fff"><path d="M11.894 2.384L8.254 6l3.64 3.616c.066-.137.106-.29.106-.452V2.836c0-.162-.04-.314-.106-.452zM10.945 1.781h-9.89c-.163 0-.315.04-.452.106l4.651 4.628c.411.411 1.08.411 1.491 0l4.652-4.628a1.042 1.042 0 00-.452-.106zM.106 2.384C.04 2.522 0 2.674 0 2.836v6.328c0 .163.04.315.106.452L3.745 6 .105 2.384z"/><path d="M7.758 6.497l-.515.515a1.76 1.76 0 01-2.486 0l-.515-.515-3.64 3.616c.138.066.29.106.452.106h9.891c.162 0 .314-.04.452-.106l-3.64-3.616z"/></g><defs><clipPath class="04404"><path fill="#fff" d="M0 0h12v12H0z"/></clipPath></defs></svg></span></p>
								</div>
								<div class="product-item__buttons">
									<div class="product-item__buy">Buy in 1 click</div>
									<button class="product-item__addtocart">
										<svg viewBox="0 0 16 16" width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.clip202)" fill="#FF5C00"><path d="M12.383 11.714c-.922 0-1.673.75-1.673 1.673s.75 1.674 1.673 1.674 1.674-.751 1.674-1.674c0-.922-.751-1.673-1.674-1.673zm0 2.677a1.005 1.005 0 010-2.008 1.005 1.005 0 010 2.008zM5.69 11.714c-.923 0-1.674.75-1.674 1.673s.751 1.674 1.674 1.674c.922 0 1.673-.751 1.673-1.674 0-.922-.75-1.673-1.673-1.673zm0 2.677a1.005 1.005 0 010-2.008 1.005 1.005 0 010 2.008zM13.722 10.376H5.997a1.678 1.678 0 01-1.64-1.346L2.67.604a.335.335 0 00-.328-.269H.335a.335.335 0 000 .67h1.733L3.7 9.161a2.35 2.35 0 002.297 1.883h7.725a.335.335 0 000-.67z"/><path d="M15.312 2.456a.335.335 0 00-.251-.113H3.012a.335.335 0 000 .67h11.67l-.476 3.805c-.063.502-.491.88-.997.88H4.016a.335.335 0 000 .67h9.193c.842 0 1.556-.63 1.66-1.467l.524-4.182a.334.334 0 00-.081-.263z"/></g><defs><clipPath class="clip202"><path fill="#fff" d="M0 0h15.395v15.395H0z"/></clipPath></defs></svg>
										Add to cart
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="category__pagination">
					<ul>
						<li><a href="#">1</a></li>
						<li class="current"><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">12</a></li>
					</ul>
					<p>You have viewed 9 products of 105</p>
				</div>
				<article>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</article>
			</main>
		</div>
	</div>
</div>

<?php include("footer.php"); ?>