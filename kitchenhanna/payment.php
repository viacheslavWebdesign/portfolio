<!DOCTYPE html>
<html lang="en">
<head>
	<title>Payment</title>
	
	
<?php include("header.php"); ?>	

<div class="page-payment">

<section class="page-heading lazyload" data-bg="assets/img/bg-page-heading.jpg">
	<div class="container">
		<h1>Payment</h1>
	</div>
</section>

<section class="block-payment">
	<div class="container">
		<div class="row">
			<div class="col-6 col-lg-3">
				<figure class="lazyload" data-bg="assets/img/img-payment1.jpg"></figure>
				<p>Cash on the day of delivery and installation</p>
			</div>
			<div class="col-6 col-lg-3">
				<figure class="lazyload" data-bg="assets/img/img-payment2.jpg"></figure>
				<p>By card on the day of delivery and installation</p>
			</div>
			<div class="col-6 col-lg-3">
				<figure class="lazyload" data-bg="assets/img/img-payment3.jpg"></figure>
				<p>Online payment through the site</p>
			</div>
			<div class="col-6 col-lg-3">
				<figure class="lazyload" data-bg="assets/img/img-payment4.jpg"></figure>
				<p>Installment plan</p>
			</div>
		</div>
	</div>
	<div class="container-wide">
		<div class="container">
			<div class="discount-row">
				<div class="discount-left">
					<img width="60" height="60" class="lazyload" data-src="assets/img/ico-discount1.svg" src="assets/img/placeholder.webp">
					<div class="discount-content">
						<p>Would you like a no down payment? <br>Let's do it!</p>
						<p>Leave a request for approval</p>
					</div>
				</div>
				<form id="formDiscount" class="discount-right">
					<input type="tel" name="phone" placeholder="Phone number" required="required">
					<button type="submit">I want installments</button>
				</form>
			</div>
		</div>
	</div>
</section>

</div>

<?php include("footer.php"); ?>