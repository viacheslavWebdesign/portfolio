<?php include("header.php"); ?>	
	<title>Text</title>
</head>
<body>

<main>


<div class="header-dark">
	<?php include("menu.php"); ?>
</div>
<!-- Завернуть внутрь .header-dark чтобы добавить черный фон меню -->

<section class="block-breadcrumbs">
	<div class="container">
		<ul class="breadcrumbs">
			<li><a class="animated-link" href="index.php">City spa "Voyage Spa" in Kyiv</a></li>
			<li><a class="animated-link" href="#">About Voyage SPA</a></li>
			<li>Payment and return</li>
		</ul>
	</div>
</section>

<section class="block-image bg-cover" style="background-image: url(assets/img/image.jpg);">
	<div class="container">
		<h1 class="image-title">Payment and return</h1>
	</div>
</section>

<section class="block-article">
	<article class="container container-thin">
		<p class="article-title">Payment and return methods</p>
		<p class="article-text">Terms of payment:
		<br>
		You can purchase a Certificate in several ways:</p>
		<ul class="article-list">
			<li>Cash payment when visiting the spa</li>
			<li>Paying with a bank card using a pos-terminal when visiting the spa center </li>
			<li>Payment using LiqPay on our website using Privat24 or a Visa or Mastercard bank card</li>
		</ul>
		<p class="article-text">
		<span>Note!</span> <br>
		When booking time for any treatment or spa program, you must make an advance payment of at least 30% of the cost of the service or treatment. You can make an advance payment here. <br>
		Attention! The 30% advance payment is non-refundable if the client refused or did not come to the procedure at the booked time. It is not possible to reschedule the date of the visit after approval and prepayment.
		<br><br>
		Once the certificate has expired, it cannot be used. The services included in the certificate cannot be replaced. A certificate for 1 visit cannot be split into several visits.
		<br><br>
		Return conditions:
		<br><br>
		The certificate is non-refundable and cannot be exchanged for cash. 
		<br><br>
		<a href="#">Privacy Policy </a>
		<br>
		<a href="#">Contract offer</a>
		</p>
		<br><br>
		<div class="article-images">
			<img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-visa.png" width="100" height="63.5">
			<img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-mastercard.png" width="107.5" height="63.5">
		</div>
	</article>
</section>

</main>

<?php include("footer.php"); ?>