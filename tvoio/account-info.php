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
				<a href="account-info.php" class="account__tab account__tab_info account__tab_current">
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
				<a href="account-watchlist.php" class="account__tab account__tab_watchlist">
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
			<div class="account__body account__body_info">
				<p class="account__title">Contact information</p>
				<form class="account-info">
					<div class="account-info__row account-info__row_name">
						<p class="account-info__title">Name</p>
						<div class="account-info__content">
							<div class="account-info__text">
								<p>Alexey</p>
								<svg class="account-info__edit" viewBox="0 0 12 12" width="12" height="12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.407 7.733l-.633 2.734a.686.686 0 00.666.833.715.715 0 00.144 0l2.75-.633 5.28-5.26-2.947-2.94-5.26 5.266zM11.274 2.773L9.307.806a.69.69 0 00-.973 0L7.24 1.9l2.944 2.943 1.093-1.093a.689.689 0 00-.003-.977z" fill="#FF5C00"/></svg>
							</div>
							<div class="account-info__input">
								<input type="text" value="Алексей">
								<svg class="account-info__apply" viewBox="0 0 12 10" width="12" height="10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.4 5l4.8 4 6.4-8" stroke="#FF5C00"/></svg>
								<svg class="account-info__cancel" viewBox="0 0 10 11" width="10" height="11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 .963L9.125 0 5 4.537.875 0 0 .963 4.125 5.5 0 10.037.875 11 5 6.463 9.125 11l.875-.963L5.875 5.5 10 .963z" fill="#D0D0D0"/></svg>
							</div>
						</div>
					</div>
					<div class="account-info__row account-info__row_email">
						<p class="account-info__title">E-mail</p>
						<div class="account-info__content">
							<div class="account-info__text">
								<p>mail@mail.com</p>
								<svg class="account-info__edit" viewBox="0 0 12 12" width="12" height="12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.407 7.733l-.633 2.734a.686.686 0 00.666.833.715.715 0 00.144 0l2.75-.633 5.28-5.26-2.947-2.94-5.26 5.266zM11.274 2.773L9.307.806a.69.69 0 00-.973 0L7.24 1.9l2.944 2.943 1.093-1.093a.689.689 0 00-.003-.977z" fill="#FF5C00"/></svg>
							</div>
							<div class="account-info__input">
								<input type="text" value="mail@mail.ru">
								<svg class="account-info__apply" viewBox="0 0 12 10" width="12" height="10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.4 5l4.8 4 6.4-8" stroke="#FF5C00"/></svg>
								<svg class="account-info__cancel" viewBox="0 0 10 11" width="10" height="11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 .963L9.125 0 5 4.537.875 0 0 .963 4.125 5.5 0 10.037.875 11 5 6.463 9.125 11l.875-.963L5.875 5.5 10 .963z" fill="#D0D0D0"/></svg>
							</div>
						</div>
					</div>
					<div class="account-info__row account-info__row_phone">
						<p class="account-info__title">Phone</p>
						<div class="account-info__content">
							<div class="account-info__text">
								<p>+3 8 095 999 99 99</p>
								<svg class="account-info__edit" viewBox="0 0 12 12" width="12" height="12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.407 7.733l-.633 2.734a.686.686 0 00.666.833.715.715 0 00.144 0l2.75-.633 5.28-5.26-2.947-2.94-5.26 5.266zM11.274 2.773L9.307.806a.69.69 0 00-.973 0L7.24 1.9l2.944 2.943 1.093-1.093a.689.689 0 00-.003-.977z" fill="#FF5C00"/></svg>
							</div>
							<div class="account-info__input">
								<input type="text" value="+3 8 095 999 99 99">
								<svg class="account-info__apply" viewBox="0 0 12 10" width="12" height="10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M.4 5l4.8 4 6.4-8" stroke="#FF5C00"/></svg>
								<svg class="account-info__cancel" viewBox="0 0 10 11" width="10" height="11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 .963L9.125 0 5 4.537.875 0 0 .963 4.125 5.5 0 10.037.875 11 5 6.463 9.125 11l.875-.963L5.875 5.5 10 .963z" fill="#D0D0D0"/></svg>
							</div>
						</div>
					</div>
					<div class="account-info__row account-info__row_delivery">
						<p class="account-info__title">Delivery address</p>
						<div class="account-info__content">
							<div class="account-info__radio">
								<input checked="checked" type="radio" name="accountLocation" id="accountLocation1">
								<label for="accountLocation1">Kyiv, st. Taras Shevchenko</label>
								<svg viewBox="0 0 8 8" width="8" height="8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 .7L7.3 0 4 3.3.7 0 0 .7 3.3 4 0 7.3l.7.7L4 4.7 7.3 8l.7-.7L4.7 4 8 .7z" fill="#FF5C00"/></svg>
							</div>
							<div class="account-info__radio">
								<input type="radio" name="accountLocation" id="accountLocation2">
								<label for="accountLocation2">Kyiv, st. Taras Shevchenko</label>
								<svg viewBox="0 0 8 8" width="8" height="8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 .7L7.3 0 4 3.3.7 0 0 .7 3.3 4 0 7.3l.7.7L4 4.7 7.3 8l.7-.7L4.7 4 8 .7z" fill="#FF5C00"/></svg>
							</div>
							<button class="account-info__add">+ Add address</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include("footer.php"); ?>