<!DOCTYPE html>
<html lang="en">
<head>
	<title>Calculator</title>
	
	
<?php include("header.php"); ?>	

<div class="page-calculator">

<section class="page-heading lazyload" data-bg="assets/img/bg-page-heading.jpg">
	<div class="container">
		<h1>Kitchen calculator</h1>
	</div>
</section>

<form id="calculator" class="block-calculator">
	<div class="container">
		<p class="title">Kitchen shape:</p>
		<div class="calculator-type">
			<input checked type="radio" name="type" id="typeStraight" hidden value="Прямая">
			<label for="typeStraight">
				<figure>
					<svg width="120" height="52" viewBox="0 0 120 52" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M119.354 48.354a.5.5 0 000-.707l-3.182-3.182a.501.501 0 00-.708.707L118.293 48l-2.829 2.828a.5.5 0 00.708.707l3.182-3.181zM1 48.5h118v-1H1v1z" fill="#8C989F"/><path class="colorme" fill="#D0D9DE" d="M0 0h120v41H0z"/><path d="M54.016 27l4.896-11.36h2.064L65.888 27h-2.432l-1.104-2.592h-4.848L56.416 27h-2.4zm5.92-8.304l-1.568 3.68h3.12l-1.552-3.68z" fill="#fff"/><path d="M.646 47.646a.5.5 0 000 .708l3.182 3.181a.5.5 0 10.708-.707L1.707 48l2.829-2.828a.5.5 0 00-.708-.707L.646 47.645zM119 47.5H1v1h118v-1z" fill="#8C989F"/></svg>
				</figure>
				<p>Straight</p>
			</label>
			<input type="radio" name="type" id="typeGshapedLeft" hidden value="Г— образная, левая">
			<label for="typeGshapedLeft">
				<figure>
					<svg width="120" height="121" viewBox="0 0 120 121" fill="none" xmlns="http://www.w3.org/2000/svg"><path class="colorme" fill="#D0D9DE" d="M41 .5v120H0V.5z"/><path class="colorme" fill="#D0D9DE" d="M0 0h120v41H0z"/><path d="M15.016 66l4.896-11.36h2.064L26.888 66h-2.432l-1.104-2.592h-4.848L17.416 66h-2.4zm5.92-8.304l-1.568 3.68h3.12l-1.552-3.68zM55.264 26V14.64h4.16c.95 0 1.75.325 2.4.976.65.64.976 1.413.976 2.32 0 .821-.299 1.499-.896 2.032 1.12.555 1.68 1.45 1.68 2.688 0 .95-.336 1.744-1.008 2.384-.672.64-1.51.96-2.512.96h-4.8zm2.32-2.128h2.32c.437 0 .784-.117 1.04-.352.256-.245.384-.56.384-.944 0-.384-.128-.699-.384-.944s-.603-.368-1.04-.368h-2.32v2.608zm0-4.576H59.2c.405 0 .73-.117.976-.352.245-.245.368-.55.368-.912 0-.352-.128-.65-.384-.896-.245-.256-.565-.384-.96-.384h-1.616v2.544z" fill="#fff"/><path d="M119.353 48.354a.499.499 0 000-.708l-3.182-3.181a.5.5 0 10-.707.707L118.293 48l-2.829 2.828a.5.5 0 00.707.707l3.182-3.181zM47.5 48.5H119v-1H47.5v1z" fill="#8C989F"/><path d="M47.646 120.354a.5.5 0 00.707 0l3.182-3.182a.5.5 0 00-.707-.707L48 119.293l-2.828-2.828a.5.5 0 10-.707.707l3.181 3.182zM47.5 47.5V120h1V47.5h-1z" fill="#8C989F"/></svg>
				</figure>
				<p>L - figurative, left</p>
			</label>
			<input type="radio" name="type" id="typeGshapedRight" hidden value="Г— образная, правая">
			<label for="typeGshapedRight">
				<figure>
					<svg width="120" height="121" viewBox="0 0 120 121" fill="none" xmlns="http://www.w3.org/2000/svg"><path class="colorme" fill="#D0D9DE" d="M79 0v120h41V0z"/><path class="colorme" fill="#D0D9DE" d="M120 0H0v41h120z"/><path d="M94.016 66l4.896-11.36h2.064L105.888 66h-2.432l-1.104-2.592h-4.848L96.416 66h-2.4zm5.92-8.304l-1.568 3.68h3.12l-1.552-3.68zM56.264 26V14.64h4.16c.95 0 1.75.325 2.4.976.65.64.976 1.413.976 2.32 0 .821-.299 1.499-.896 2.032 1.12.555 1.68 1.45 1.68 2.688 0 .95-.336 1.744-1.008 2.384-.672.64-1.51.96-2.512.96h-4.8zm2.32-2.128h2.32c.437 0 .784-.117 1.04-.352.256-.245.384-.56.384-.944 0-.384-.128-.699-.384-.944s-.603-.368-1.04-.368h-2.32v2.608zm0-4.576H60.2c.405 0 .73-.117.976-.352.245-.245.368-.55.368-.912 0-.352-.128-.65-.384-.896-.245-.256-.565-.384-.96-.384h-1.616v2.544z" fill="#fff"/><path d="M71.646 120.104a.5.5 0 00.708 0l3.181-3.182a.501.501 0 00-.707-.708L72 119.043l-2.828-2.829a.5.5 0 00-.707.708l3.181 3.182zM71.5 47.75v72h1v-72h-1z" fill="#8C989F"/><path d="M.646 47.396a.5.5 0 000 .708l3.182 3.181a.5.5 0 10.707-.707L1.707 47.75l2.828-2.828a.5.5 0 10-.707-.707L.646 47.395zM72.5 47.25H1v1h71.5v-1z" fill="#8C989F"/></svg>
				</figure>
				<p>L - figurative, right</p>
			</label>
			<input type="radio" name="type" id="typePshaped" hidden value="П— образная">
			<label for="typePshaped">
				<figure>
					<svg width="120" height="121" viewBox="0 0 120 121" fill="none" xmlns="http://www.w3.org/2000/svg"><path class="colorme" fill="#D0D9DE" d="M79 .5v120h41V.5z"/><path class="colorme" fill="#D0D9DE" d="M120 0H0v41h120z"/><path class="colorme" fill="#D0D9DE" d="M41 121V1H0v120z"/><path d="M15.016 66l4.896-11.36h2.064L26.888 66h-2.432l-1.104-2.592h-4.848L17.416 66h-2.4zm5.92-8.304l-1.568 3.68h3.12l-1.552-3.68zM99.464 66.192c-1.621 0-3.008-.57-4.16-1.712-1.141-1.152-1.712-2.539-1.712-4.16s.57-3.003 1.712-4.144c1.152-1.152 2.539-1.728 4.16-1.728 1.131 0 2.165.277 3.104.832.939.544 1.653 1.275 2.144 2.192l-2.016 1.12c-.747-1.27-1.824-1.904-3.232-1.904-.981 0-1.819.357-2.512 1.072-.683.704-1.024 1.557-1.024 2.56 0 1.003.341 1.861 1.024 2.576.693.704 1.53 1.056 2.512 1.056 1.408 0 2.485-.635 3.232-1.904l2.016 1.12a5.503 5.503 0 01-2.128 2.208c-.928.544-1.968.816-3.12.816zM55.264 26V14.64h4.16c.95 0 1.75.325 2.4.976.65.64.976 1.413.976 2.32 0 .821-.299 1.499-.896 2.032 1.12.555 1.68 1.45 1.68 2.688 0 .95-.336 1.744-1.008 2.384-.672.64-1.51.96-2.512.96h-4.8zm2.32-2.128h2.32c.437 0 .784-.117 1.04-.352.256-.245.384-.56.384-.944 0-.384-.128-.699-.384-.944s-.603-.368-1.04-.368h-2.32v2.608zm0-4.576H59.2c.405 0 .73-.117.976-.352.245-.245.368-.55.368-.912 0-.352-.128-.65-.384-.896-.245-.256-.565-.384-.96-.384h-1.616v2.544z" fill="#fff"/><path d="M71.646 120.104a.5.5 0 00.708 0l3.181-3.182a.501.501 0 00-.707-.708L72 119.043l-2.828-2.829a.5.5 0 00-.707.708l3.181 3.182zM71.5 47.75v72h1v-72h-1zM47.646 120.104a.5.5 0 00.708 0l3.181-3.182a.501.501 0 00-.707-.708L48 119.043l-2.828-2.829a.5.5 0 00-.707.708l3.181 3.182zM47.5 47.75v72h1v-72h-1z" fill="#8C989F"/><path d="M47.5 47.5h25" stroke="#8C989F"/></svg>
				</figure>
				<p>U- shaped</p>
			</label>
		</div>
		<p class="title">facade material:</p>
		<select name="material">
			<option selected disabled hidden value="notselected">Select material</option>
			<option value="Array" data-price="45000">Array</option>
			<option value="Enamel" data-price="42000">Enamel</option>
			<option value="Plastic" data-price="37000">Plastic</option>
			<option value="Glass" data-price="45000">Glass</option>
		</select>
		<p class="title">Kitchen dimensions in centimeters:</p>
		<div class="calculator-size">
			<div class="calculator-size-item size-a visible">
				<label for="sideA">Side A</label>
				<div class="input-wrap">
					<input type="number" id="sideA" min="0" name="sizea">
					<span>cm</span>
				</div>
			</div>
			<div class="calculator-size-item size-b">
				<label for="sideB">Side B</label>
				<div class="input-wrap">
					<input type="number" id="sideB" min="0" name="sizeb">
					<span>cm</span>
				</div>
			</div>
			<div class="calculator-size-item size-c">
				<label for="sideC">Side C</label>
				<div class="input-wrap">
					<input type="number" id="sideC" min="0" name="sizec">
					<span>cm</span>
				</div>
			</div>
		</div>
		<input type="text" name="price" hidden>
		<div class="price-line">Approximate cost of your kitchen: <span>0 $</span></div>
	</div>
	<div class="container-wide">
		<div class="container">
			<div class="discount-row">
				<div class="discount-left">
					<img width="60" height="60" class="lazyload" data-src="assets/img/ico-discount.svg" src="assets/img/placeholder.webp">
					<p>Do you want cheaper? Let's make a discount! Leave a request <br>and save up to 10% on the kitchen</p>
				</div>
				<div class="discount-right">
					<input type="tel" name="phone" placeholder="Phone number" required="required">
					<button type="submit">Calculate with discount</button>
				</div>
			</div>
		</div>
	</div>
</form>

<?php include("include/advantages.php"); ?>

</div>

<?php include("footer.php"); ?>