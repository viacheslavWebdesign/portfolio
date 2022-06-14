<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Basket</title>
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
			<li>Basket</li>
		</ul>
	</div>
</div>

<div class="breadcrumbs d-lg-none">
	<div class="container">
		<ul>
			<li><a href="index.php">Home page</a></li>
			<li>Basket</li>
		</ul>
	</div>
</div>

<div class="cart">
	<div class="container">
		<div class="cart__head">
			<h1>Basket</h1>
			<p class="d-none d-lg-block">182 kg in 3 products</p>
			<p class="d-lg-none">Weight: 128 kg</p>
		</div>
		<div class="cart-list d-lg-none">
			<div class="cart-list__item">
				<div class="cart-list__content">
					<a href="product.php">
						<figure>
							<img src="assets/img/img-product1.jpg" width="33" height="69">
						</figure>
					</a>
					<a href="product.php"><p class="cart-list__name">Shower system N546J1_MFv251</p></a>
					<div class="cart-list__quantity-wrap">
						<button class="cart-list__quantity-minus">-</button>
						<input type="number" class="cart-list__quantity-value" value="1" min="1">
						<button class="cart-list__quantity-plus">+</button>
					</div>
				</div>
				<div class="cart-list__row">
					<div class="cart-list__price">
						<p>Price per one:</p>
						<p>62.899 ₴</p>
					</div>
					<div class="cart-list__total">
						<p>Total:</p>
						<p>62.899 ₴</p>
					</div>
					<div class="cart-list__buttons">
						<div class="cart-list__favorite">
							<svg viewBox="0 0 13 11" width="13" height="11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.87.796a3.193 3.193 0 00-2.46 1.137A3.15 3.15 0 003.95.796 3.222 3.222 0 00.728 4.018c0 3.05 5.322 6.027 5.538 6.142a.26.26 0 00.287 0c.216-.115 5.538-3.05 5.538-6.142A3.222 3.222 0 008.87.796zM6.41 9.585c-.835-.49-5.107-3.093-5.107-5.567A2.647 2.647 0 013.95 1.372a2.59 2.59 0 012.215 1.193.302.302 0 00.489 0 2.647 2.647 0 014.862 1.453c0 2.503-4.272 5.092-5.107 5.567z" fill="#696969"/></svg>
						</div>
						<div class="cart-list__remove"><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.clip123)" fill="#000" fill-opacity=".69"><path d="M8.068 4.935a.266.266 0 00-.266.266v5.03a.266.266 0 00.532 0v-5.03a.266.266 0 00-.266-.266zM4.927 4.935a.266.266 0 00-.266.266v5.03a.266.266 0 00.532 0v-5.03a.266.266 0 00-.266-.266z"/><path d="M2.639 4.201v6.557c0 .388.142.752.39 1.013.247.261.591.41.95.41h5.036c.36 0 .704-.148.951-.41.248-.262.39-.625.39-1.013V4.201a1.017 1.017 0 00-.26-1.999H8.732V1.87A1.046 1.046 0 007.679.82H5.316a1.046 1.046 0 00-1.054 1.05v.333H2.899a1.017 1.017 0 00-.26 2zm6.376 7.449H3.98c-.455 0-.81-.391-.81-.892V4.225h6.654v6.533c0 .5-.354.892-.809.892zm-4.22-9.78a.512.512 0 01.52-.52H7.68a.513.513 0 01.522.52v.332H4.794V1.87zm-1.896.864h7.196a.479.479 0 110 .958H2.9a.479.479 0 110-.958z"/><path d="M6.498 4.935a.266.266 0 00-.267.266v5.03a.266.266 0 00.533 0v-5.03a.266.266 0 00-.266-.266z"/></g><defs><clipPath class="clip123"><path fill="#fff" transform="translate(.818 .818)" d="M0 0h11.364v11.364H0z"/></clipPath></defs></svg></div>
					</div>
				</div>
			</div>
			<div class="cart-list__item">
				<div class="cart-list__content">
					<a href="product.php">
						<figure>
							<img src="assets/img/img-product1.jpg" width="33" height="69">
						</figure>
					</a>
					<a href="product.php"><p class="cart-list__name">Shower system N546J1_MFv251</p></a>
					<div class="cart-list__quantity-wrap">
						<button class="cart-list__quantity-minus">-</button>
						<input type="number" class="cart-list__quantity-value" value="1" min="1">
						<button class="cart-list__quantity-plus">+</button>
					</div>
				</div>
				<div class="cart-list__row">
					<div class="cart-list__price">
						<p>Price per one:</p>
						<p>62.899 ₴</p>
					</div>
					<div class="cart-list__total">
						<p>Total:</p>
						<p>62.899 ₴</p>
					</div>
					<div class="cart-list__buttons">
						<div class="cart-list__favorite">
							<svg viewBox="0 0 13 11" width="13" height="11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.87.796a3.193 3.193 0 00-2.46 1.137A3.15 3.15 0 003.95.796 3.222 3.222 0 00.728 4.018c0 3.05 5.322 6.027 5.538 6.142a.26.26 0 00.287 0c.216-.115 5.538-3.05 5.538-6.142A3.222 3.222 0 008.87.796zM6.41 9.585c-.835-.49-5.107-3.093-5.107-5.567A2.647 2.647 0 013.95 1.372a2.59 2.59 0 012.215 1.193.302.302 0 00.489 0 2.647 2.647 0 014.862 1.453c0 2.503-4.272 5.092-5.107 5.567z" fill="#696969"/></svg>
						</div>
						<div class="cart-list__remove"><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.clip123)" fill="#000" fill-opacity=".69"><path d="M8.068 4.935a.266.266 0 00-.266.266v5.03a.266.266 0 00.532 0v-5.03a.266.266 0 00-.266-.266zM4.927 4.935a.266.266 0 00-.266.266v5.03a.266.266 0 00.532 0v-5.03a.266.266 0 00-.266-.266z"/><path d="M2.639 4.201v6.557c0 .388.142.752.39 1.013.247.261.591.41.95.41h5.036c.36 0 .704-.148.951-.41.248-.262.39-.625.39-1.013V4.201a1.017 1.017 0 00-.26-1.999H8.732V1.87A1.046 1.046 0 007.679.82H5.316a1.046 1.046 0 00-1.054 1.05v.333H2.899a1.017 1.017 0 00-.26 2zm6.376 7.449H3.98c-.455 0-.81-.391-.81-.892V4.225h6.654v6.533c0 .5-.354.892-.809.892zm-4.22-9.78a.512.512 0 01.52-.52H7.68a.513.513 0 01.522.52v.332H4.794V1.87zm-1.896.864h7.196a.479.479 0 110 .958H2.9a.479.479 0 110-.958z"/><path d="M6.498 4.935a.266.266 0 00-.267.266v5.03a.266.266 0 00.533 0v-5.03a.266.266 0 00-.266-.266z"/></g><defs><clipPath class="clip123"><path fill="#fff" transform="translate(.818 .818)" d="M0 0h11.364v11.364H0z"/></clipPath></defs></svg></div>
					</div>
				</div>
			</div>
		</div>
		<div class="cart-table">
			<div class="cart-table__head">
				<div class="cart-table__head-item"><p>Name</p></div>
				<div class="cart-table__head-item">Price per one</div>
				<div class="cart-table__head-item">Qty</div>
				<div class="cart-table__head-item">Total sum</div>
				<div class="cart-table__head-item">Remove</div>
			</div>
			<div class="cart-table__row">
				<div class="cart-table__item">
					<a href="product.php"><figure>
						<img src="assets/img/img-product1.jpg" width="36" height="80">
					</figure></a>
					<div class="cart-table__content">
						<a href="product.php"><p class="cart-table__name">Shower system N546J1_MF v251</p></a>
						<p class="cart-table__id">ID: 271561</p>
					</div>
				</div>
				<p class="cart-table__price">7.999 uah</p>
				<div class="cart-table__quantity">
					<div class="cart-table__quantity-wrap">
						<button class="cart-table__quantity-minus">-</button>
						<input type="number" class="cart-table__quantity-value" value="1" min="1">
						<button class="cart-table__quantity-plus">+</button>
					</div>
				</div>
				<p class="cart-table__total">7.999 uah</p>
				<svg class="cart-table__remove" viewBox="0 0 24 24" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.clip333)" fill="#000" fill-opacity=".69"><path d="M15.31 8.695a.562.562 0 00-.562.562V19.88a.562.562 0 001.124 0V9.257a.562.562 0 00-.562-.562zM8.678 8.695a.562.562 0 00-.562.562V19.88a.562.562 0 001.124 0V9.257a.562.562 0 00-.562-.562z"/><path d="M3.844 7.145v13.848c0 .819.3 1.587.825 2.139A2.768 2.768 0 006.677 24h10.634a2.767 2.767 0 002.009-.868c.524-.552.824-1.32.824-2.139V7.145a2.147 2.147 0 00-.55-4.222h-2.879V2.22A2.208 2.208 0 0014.49 0H9.499a2.208 2.208 0 00-2.226 2.22v.703H4.395a2.147 2.147 0 00-.55 4.222zm13.467 15.73H6.677c-.96 0-1.708-.825-1.708-1.882V7.194H19.02v13.799c0 1.057-.748 1.883-1.709 1.883zM8.397 2.22A1.082 1.082 0 019.5 1.124h4.99a1.083 1.083 0 011.102 1.096v.703H8.397V2.22zM4.395 4.047h15.198a1.012 1.012 0 110 2.023H4.395a1.012 1.012 0 110-2.023z"/><path d="M11.994 8.695a.562.562 0 00-.562.562V19.88a.562.562 0 001.124 0V9.257a.562.562 0 00-.562-.562z"/></g><defs><clipPath class="clip333"><path fill="#fff" d="M0 0h24v24H0z"/></clipPath></defs></svg>
			</div>
			<div class="cart-table__row">
				<div class="cart-table__item">
					<a href="product.php"><figure>
						<img src="assets/img/img-product1.jpg" width="36" height="80">
					</figure></a>
					<div class="cart-table__content">
						<a href="product.php"><p class="cart-table__name">Shower system N546J1_MF</p></a>
						<p class="cart-table__id">ID: 271561</p>
					</div>
				</div>
				<p class="cart-table__price">5.999 uah</p>
				<div class="cart-table__quantity">
					<div class="cart-table__quantity-wrap">
						<button class="cart-table__quantity-minus">-</button>
						<input type="number" class="cart-table__quantity-value" value="2" min="1">
						<button class="cart-table__quantity-plus">+</button>
					</div>
				</div>
				<p class="cart-table__total">11.998 uah</p>
				<svg class="cart-table__remove" viewBox="0 0 24 24" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.clip333)" fill="#000" fill-opacity=".69"><path d="M15.31 8.695a.562.562 0 00-.562.562V19.88a.562.562 0 001.124 0V9.257a.562.562 0 00-.562-.562zM8.678 8.695a.562.562 0 00-.562.562V19.88a.562.562 0 001.124 0V9.257a.562.562 0 00-.562-.562z"/><path d="M3.844 7.145v13.848c0 .819.3 1.587.825 2.139A2.768 2.768 0 006.677 24h10.634a2.767 2.767 0 002.009-.868c.524-.552.824-1.32.824-2.139V7.145a2.147 2.147 0 00-.55-4.222h-2.879V2.22A2.208 2.208 0 0014.49 0H9.499a2.208 2.208 0 00-2.226 2.22v.703H4.395a2.147 2.147 0 00-.55 4.222zm13.467 15.73H6.677c-.96 0-1.708-.825-1.708-1.882V7.194H19.02v13.799c0 1.057-.748 1.883-1.709 1.883zM8.397 2.22A1.082 1.082 0 019.5 1.124h4.99a1.083 1.083 0 011.102 1.096v.703H8.397V2.22zM4.395 4.047h15.198a1.012 1.012 0 110 2.023H4.395a1.012 1.012 0 110-2.023z"/><path d="M11.994 8.695a.562.562 0 00-.562.562V19.88a.562.562 0 001.124 0V9.257a.562.562 0 00-.562-.562z"/></g><defs><clipPath class="clip333"><path fill="#fff" d="M0 0h24v24H0z"/></clipPath></defs></svg>
			</div>
		</div>
		<div class="cart__row">
			<div class="cart__forms">
				<div class="cart-coupon">
					<p>Discount coupon</p>
					<form>
						<input type="text" required="required" placeholder="Введите номер Couponа" class="d-none d-lg-block">
						<input type="text" required="required" placeholder="Enter coupon" class="d-lg-none">
						<button>Apply</button>
					</form>
				</div>
				<form id="orderForm" class="cart-form">
					<div class="cart-form__row">
						<div class="cart-form__item">
							<label class="cart-form__label" for="orderSurname">Surname <sup>*</sup></label>
							<input class="cart-form__input" type="text" id="orderSurname" name="orderSurname" required="required" placeholder="Enter surname">
						</div>
						<div class="cart-form__item">
							<label class="cart-form__label" for="orderName">Name <sup>*</sup></label>
							<input class="cart-form__input" type="text" id="orderName" name="orderName" required="required" placeholder="Enter name">
						</div>
					</div>
					<div class="cart-form__row">
						<div class="cart-form__item">
							<label class="cart-form__label" for="orderEmail">E-Mail <sup>*</sup></label>
							<input class="cart-form__input" type="email" id="orderEmail" name="orderEmail" required="required" placeholder="Enter email">
						</div>
						<div class="cart-form__item">
							<label class="cart-form__label" for="orderPhone">Phone <sup>*</sup></label>
							<input class="cart-form__input" type="tel" id="orderPhone" name="orderPhone" required="required" placeholder="Enter phone">
						</div>
					</div>
					<div class="cart-form__check">
						<input type="checkbox" id="orderReg" name="orderReg">
						<label for="orderReg"><svg viewBox="0 0 14 12" width="14" height="12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 5.5L6.143 10 13 1" stroke="#FF5C00" stroke-width="2"/></svg>Register?</label>
						<div class="cart-form__prompt">? <div class="cart-form__prompt-text">Tooltip text</div></div>
					</div>
					<h2>Delivery</h2>
					<div class="cart-form__select">
						<span>Courier by Nova Poshta in the specified city<svg viewBox="0 0 8 5" width="8" height="5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.678.01L4 2.683 1.322.011.5.833l3.5 3.5 3.5-3.5-.822-.822z" fill="#000"/></svg></span>
						<ul>
							<li>Delivery 2</li>
							<li>Delivery 3</li>
						</ul>
					</div>
					<div class="cart-form__row">
						<div class="cart-form__item">
							<label class="cart-form__label" for="orderRegion">Region <sup>*</sup></label>
							<input class="cart-form__input" type="text" id="orderRegion" name="orderRegion" required="required" placeholder="Enter delivery region">
						</div>
						<div class="cart-form__item">
							<label class="cart-form__label" for="orderCity">City <sup>*</sup></label>
							<input class="cart-form__input" type="text" id="orderCity" name="orderCity" required="required" placeholder="Enter delivery city">
						</div>
						<div class="cart-form__item">
							<label class="cart-form__label" for="orderPost">Department <sup>*</sup></label>
							<input class="cart-form__input" type="text" id="orderPost" name="orderPost" required="required" placeholder="Enter delivery department">
						</div>
					</div>
					<div class="cart-form__row">
						<div class="cart-form__item">
							<label class="cart-form__label" for="orderStreet">Street <sup>*</sup></label>
							<input class="cart-form__input" type="text" id="orderStreet" name="orderStreet" required="required" placeholder="Enter delivery street">
						</div>
						<div class="cart-form__item">
							<label class="cart-form__label" for="orderHouse">House <sup>*</sup></label>
							<input class="cart-form__input" type="text" id="orderHouse" name="orderHouse" required="required" placeholder="Enter delivery house">
						</div>
						<div class="cart-form__item">
							<label class="cart-form__label" for="orderRoom">Room <sup>*</sup></label>
							<input class="cart-form__input" type="text" id="orderRoom" name="orderRoom" required="required" placeholder="Enter delivery room">
						</div>
					</div>
					<div class="captcha">CAPTCHA</div>
				</form>
			</div>
			<div class="cart-info">
				<div class="cart-info__body">
					<p class="cart-info__title">Your order</p>
					<div class="cart-info__line">
						<p>Order price:</p>
						<p><b>19.997 uah</b></p>
					</div>
					<div class="cart-info__line">
						<p>Discount</p>
						<p>400 uah</p>
					</div>
					<div class="cart-info__line">
						<p>Coupon</p>
						<p>699 uah</p>
					</div>
					<div class="cart-info__line">
						<p>Delivery</p>
						<p>150 uah</p>
					</div>
					<div class="cart-info__line cart-info__line_total">
						<p><b>Total payable</b></p>
						<p><b>19.048 uah</b></p>
					</div>
					<button class="cart-info__buy">
						<svg viewBox="0 0 16 19" width="16" height="19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.104 8.708l5.05 4.252-.696.142-.506.095c-.5.103-.784.657-.563 1.108l.214.46 1.077 2.327-1.124.523-1.077-2.32-.206-.46a.78.78 0 00-1.203-.284l-.404.316-.562.452v-6.61zM7.518 6.88a.602.602 0 00-.601.601v9.065c0 .332.269.602.601.602a.61.61 0 00.38-.127l1.512-1.227 1.315 2.866c.102.213.316.34.546.34.087 0 .174 0 .261-.063l2.185-1.014c.3-.142.443-.506.285-.8L12.68 14.25l1.908-.356a.697.697 0 00.34-.206c.214-.253.182-.626-.095-.855L7.914 7.014l-.008.008a.599.599 0 00-.388-.142zm3.357 1.037V6.333h3.958v1.584h-3.958zm-.926-4.149l2.24-2.24 1.116 1.116-2.24 2.24-1.116-1.116zM6.917 0H8.5v3.958H6.917V0zM2.11 11.606l2.24-2.24 1.117 1.116-2.24 2.24-1.117-1.116zm0-8.962l1.116-1.116 2.24 2.24-1.115 1.117-2.24-2.24zm2.43 5.273H.584V6.333h3.959v1.584z" fill="#FF5C00"/></svg>
						Buy in 1 click
					</button>
					<button class="cart-info__order d-none d-lg-flex" type="submit" form="orderForm">Checkout</button>
				</div>
				<div class="cart-info__check d-lg-none">
					<input type="checkbox" id="orderInfoReg" name="orderInfoReg">
					<label for="orderInfoReg"><svg viewBox="0 0 14 12" width="14" height="12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 5.5L6.143 10 13 1" stroke="#FF5C00" stroke-width="2"/></svg>Register?</label>
					<div class="cart-info__prompt">? <div class="cart-info__prompt-text">Tooltip text</div></div>
				</div>
				<button class="cart-info__order d-lg-none">Checkout</button>
				<a href="category.php" class="cart-info__back"><svg width="8" height="11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.666 5.93l5.34 4.894a.683.683 0 00.465.176c.176 0 .34-.062.464-.176l.393-.36a.568.568 0 000-.851l-4.484-4.11 4.49-4.116a.574.574 0 00.19-.425.574.574 0 00-.19-.426L6.94.176A.683.683 0 006.476 0a.683.683 0 00-.464.176l-5.346 4.9a.574.574 0 000 .853z" fill="#2D4059"/></svg>Continue Shopping</a>
			</div>
		</div>
	</div>
</div>

<div class="modal-order">
	<div class="modal-order__wrap">
		<div class="modal-order__close">
			<svg viewBox="0 0 6 9" width="6" height="9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.916 7.751L2.672 4.5l3.244-3.251L4.917.25.667 4.5l4.25 4.25.999-.999z" fill="#FF5C00"/></svg>Close
		</div>
		<form>
			<p class="modal-order__title">Checkout</p>
			<input class="modal-order__input" type="text" placeholder="Surname*" required="required">
			<input class="modal-order__input" type="text" placeholder="Name*" required="required">
			<input class="modal-order__input" type="tel" placeholder="Phone*" required="required">
			<input class="modal-order__input" type="email" placeholder="Email*" required="required">
			<p class="modal-order__title modal-order__title_delivery">Delivery</p>
			<div class="modal-order__select">
				<span>Courier by Nova Poshta<svg viewBox="0 0 8 5" width="8" height="5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.678.01L4 2.683 1.322.011.5.833l3.5 3.5 3.5-3.5-.822-.822z" fill="#000"/></svg></span>
				<ul>
					<li>Delivery 2</li>
					<li>Delivery 3</li>
				</ul>
			</div>
			<input class="modal-order__input" type="text" placeholder="Region*" required="required">
			<input class="modal-order__input" type="text" placeholder="City*" required="required">
			<div class="captcha">CAPTCHA</div>
			<button class="modal-order__button">Checkout</button>
		</form>
	</div>
</div>

<?php include("footer.php"); ?>