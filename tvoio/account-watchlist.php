<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Account - Personal data</title>
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
			<li>My account</li>
		</ul>
	</div>
</div>

<div class="breadcrumbs d-lg-none">
	<div class="container">
		<ul>
			<li><a href="index.php">Home page</a></li>
			<li>My account</li>
		</ul>
	</div>
</div>

<div class="account">
	<div class="container">
		<h1>Hello Alexey</h1>
		<div class="account__row">
			<aside>
				<a href="account-cart.php" class="account__tab account__tab_cart">
					<figure>
						<svg viewBox="0 0 21 21" width="21" height="21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.7 16.334a2.192 2.192 0 100 4.385 2.192 2.192 0 000-4.385zm0 3.41a1.218 1.218 0 110-2.435 1.218 1.218 0 010 2.436zM15.956 16.334a2.192 2.192 0 100 4.385 2.192 2.192 0 000-4.385zm0 3.41a1.218 1.218 0 110-2.435 1.218 1.218 0 010 2.436zM20.9 3.546a.61.61 0 00-.389-.195L4.653 3.13l-.439-1.34A2.241 2.241 0 002.12.282H.487a.487.487 0 100 .975H2.12c.53.011.996.351 1.17.852l3.093 9.33-.243.56c-.272.7-.19 1.49.219 2.12.405.618 1.087 1 1.827 1.023h9.476a.487.487 0 100-.975H8.185a1.242 1.242 0 01-1.023-.584 1.34 1.34 0 01-.122-1.17l.195-.438 10.255-1.072a2.68 2.68 0 002.315-2.046l1.169-4.896a.414.414 0 00-.073-.414zm-2.045 5.09a1.656 1.656 0 01-1.486 1.292L7.235 10.975l-2.266-6.87 14.933.22-1.047 4.312z" fill="#252525"/></svg>
					</figure>
					<p>Basket <span>(2)</span></p>
				</a>
				<a href="account-info.php" class="account__tab account__tab_info">
					<figure>
						<svg viewBox="0 0 19 19" width="19" height="19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.214 15.733a8.941 8.941 0 00-4.982-4.018 5.344 5.344 0 10-5.465 0 8.942 8.942 0 00-4.981 4.018.594.594 0 101.028.595 7.722 7.722 0 0113.372 0 .593.593 0 101.028-.595zM5.344 7.125a4.156 4.156 0 118.312 0 4.156 4.156 0 01-8.312 0z" fill="#252525"/></svg>
					</figure>
					<p>Personal data</p>
				</a>
				<a href="account-orders.php" class="account__tab account__tab_orders">
					<figure>
						<svg viewBox="0 0 26 26" width="26" height="26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.063 8.125h17.875M4.063 13h17.875M4.063 17.875h17.875" stroke="#252525" stroke-miterlimit="10" stroke-linecap="round"/></svg>
					</figure>
					<p>Orders</p>
				</a>
				<a href="account-favorites.php" class="account__tab account__tab_favorites">
					<figure>
						<svg viewBox="0 0 20 21" width="20" height="21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.33 1.808c-1.67-.01-3.255.76-4.33 2.1-1.068-1.35-2.658-2.121-4.33-2.1C2.54 1.808 0 4.473 0 7.762c0 5.635 9.367 11.138 9.747 11.35a.438.438 0 00.506 0C10.633 18.9 20 13.478 20 7.763c0-3.289-2.539-5.954-5.67-5.954zM10 18.049c-1.468-.904-8.987-5.715-8.987-10.287 0-2.701 2.085-4.891 4.658-4.891 1.575-.022 3.05.812 3.899 2.206a.515.515 0 00.86 0c1.408-2.26 4.295-2.895 6.448-1.417 1.319.905 2.112 2.448 2.11 4.102 0 4.625-7.52 9.41-8.988 10.287z" fill="#252525"/></svg>
					</figure>
					<p>Favorites</p>
				</a>
				<a href="account-watchlist.php" class="account__tab account__tab_watchlist account__tab_current">
					<figure>
						<svg viewBox="0 0 22 22" width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.545 10.713c-2.06-3.808-5.67-6.111-9.668-6.111-3.996 0-7.614 2.303-9.655 6.11L1.05 11l.159.293c2.06 3.808 5.67 6.111 9.667 6.111s7.615-2.273 9.668-6.11l.16-.294-.16-.287zm-9.668 5.439c-3.44 0-6.6-1.92-8.433-5.152 1.833-3.233 4.993-5.152 8.433-5.152 3.441 0 6.564 1.925 8.428 5.152-1.864 3.233-4.993 5.152-8.428 5.152z" fill="#252525"/><path d="M11.055 6.826a4.192 4.192 0 10.061 8.385 4.192 4.192 0 00-.06-8.385zm0 7.163a2.97 2.97 0 11.061-5.94 2.97 2.97 0 01-.06 5.94z" fill="#252525"/></svg>
					</figure>
					<p>Viewed</p>
				</a>
				<a href="account-subscribtion.php" class="account__tab account__tab_subscribtion">
					<figure>
						<svg viewBox="0 0 22 22" width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.05 4.4a2.75 2.75 0 012.75 2.75v8.8a2.75 2.75 0 01-2.75 2.75H4.95a2.75 2.75 0 01-2.75-2.75v-8.8A2.75 2.75 0 014.95 4.4h12.1zm1.65 4.357l-7.42 4.367a.55.55 0 01-.469.042l-.09-.042L3.3 8.759v7.19a1.65 1.65 0 001.65 1.65h12.1a1.65 1.65 0 001.65-1.65V8.758zM17.05 5.5H4.95A1.65 1.65 0 003.3 7.15v.332l7.7 4.53 7.7-4.532v-.33a1.65 1.65 0 00-1.65-1.65z" fill="#000"/></svg>
					</figure>
					<p>Subscription</p>
				</a>
				<a href="#" class="account__tab account__tab_exit">
					<figure>
						<svg viewBox="0 0 22 22" width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.75 7.563v-1.72a1.719 1.719 0 00-1.719-1.718h-8.25a1.719 1.719 0 00-1.719 1.719v10.312a1.719 1.719 0 001.72 1.719h8.25a1.719 1.719 0 001.718-1.719v-1.718M16.5 7.563L19.938 11 16.5 14.438M8.207 11h11.73" stroke="#252525" stroke-linecap="round" stroke-linejoin="round"/></svg>
					</figure>
					<p>Exit</p>
				</a>
			</aside>
			<div class="account__body account__body_watchlist">
				<p class="account__title">Viewed</p>
				<div class="category__grid">
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
							<a href="product.php"><p class="product-item__name">Shower system<br>Burlington Trent TF2S+V16</p></a>
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
						</div></div>
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
							<a href="product.php"><p class="product-item__name">Shower system<br>Burlington Trent TF2S+V16</p></a>
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
						</div></div>
					</div>
					<div class="product-item">
						<p class="product-item__label product-item__label_purple">Let's drop in price</p>
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
							<a href="product.php"><p class="product-item__name">Shower system<br>Burlington Trent TF2S+V16</p></a>
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
						</div></div>
					</div>
					<div class="product-item">
						<p class="product-item__label product-item__label_purple">Let's drop in price</p>
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
							<a href="product.php"><p class="product-item__name">Shower system<br>Burlington Trent TF2S+V16</p></a>
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
						</div></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include("footer.php"); ?>