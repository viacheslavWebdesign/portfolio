<?php include("header.php"); ?>	
	<title>Search</title>
</head>
<body class="kmnd-body">

<?php include("menu.php"); ?>

<main>
	
<section class="block-error pt-lg-100 pb-lg-120 pt-sm-40 pb-sm-80">
	<div class="container">
		<div class="error__row">
			<div class="error__content">
				<h1 class="error__title">Oops, mistake</h1>
				<hr class="mt-lg-80 mt-sm-30 mb-lg-30 mb-sm-30">
				<p class="error__text mb-lg-60 mb-sm-40">You are lost, but we will help you find the right path</p>
				<a href="index.php" class="btn-primary">Come back</a>
			</div>
			<div class="error__picture">
				<img src="assets/img/placeholder.webp" width="565" height="415" class="lazyload error__image show-light" data-src="assets/img/img-error-light.svg">
				<img src="assets/img/placeholder.webp" width="565" height="415" class="lazyload error__image show-dark" data-src="assets/img/img-error-dark.svg">
				<div class="error__message">
					<div class="error__point"></div>
					<div class="error__message-body">
						<div class="error__notification error__notification_default">
							<svg class="error__notification-close" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m12.666 4.273-.94-.94L8 7.06 4.273 3.333l-.94.94L7.06 8l-3.727 3.727.94.94L8 8.94l3.726 3.727.94-.94L8.94 8l3.726-3.727Z" fill="#fff"/></svg>
							<p class="error__notification-title">Mr. Stake</p>
							<p class="error__notification-text">Nothing is here. I’ve invested all my funds to <a href="https://astake.io">aStake.io</a></p>
						</div>
						<div class="error__notification error__notification_down">
							<svg class="error__notification-close" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m12.666 4.273-.94-.94L8 7.06 4.273 3.333l-.94.94L7.06 8l-3.727 3.727.94.94L8 8.94l3.726 3.727.94-.94L8.94 8l3.726-3.727Z" fill="#fff"/></svg>
							<p class="error__notification-title">Mr. Stake</p>
							<p class="error__notification-text">Wtf.., man we tried, what are you doing? Press like so we don't get nervous</p>
						</div>
						<div class="error__notification error__notification_up">
							<svg class="error__notification-close" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m12.666 4.273-.94-.94L8 7.06 4.273 3.333l-.94.94L7.06 8l-3.727 3.727.94.94L8 8.94l3.726 3.727.94-.94L8.94 8l3.726-3.727Z" fill="#fff"/></svg>
							<p class="error__notification-title">Mr. Stake</p>
							<p class="error__notification-text">That's all, thank you!</p>
						</div>
						<svg class="error__dots" width="16" height="4" viewBox="0 0 16 4" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="4" height="4" rx="2" fill="#fff"/><rect x="6" width="4" height="4" rx="2" fill="#fff"/><rect x="12" width="4" height="4" rx="2" fill="#fff"/></svg>
						<div class="error__emotions">
							<img class="error__emoji error__emoji_up" src="assets/img/thumbs-up.svg" width="15" height="15">
							<img class="error__emoji error__emoji_down" src="assets/img/thumbs-down.svg" width="15" height="15">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

</main>

<?php include("footer.php"); ?>