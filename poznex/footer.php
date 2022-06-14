<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-auto col-logo">
				<a href="index.php" class="logo">
					<img class="lazyload" data-srcset="assets/img/logo_poznex-white.png,
					assets/img/logo_poznex-white@1_5x.png 1.5x,
					assets/img/logo_poznex-white@2x.png 2x,
					assets/img/logo_poznex-white@3x.png 3x,
					assets/img/logo_poznex-white@4x.png 4x"
					data-src="assets/img/logo_poznex-white.png">
				</a>
				<p class="p-social d-none d-lg-block">Follow us at</p>
				<div class="social-row d-none d-lg-flex">
					<a href="#">
						<svg width="16.98" height="16.98" viewBox="0 0 35 35">
							<use xlink:href="assets/img/set.svg#instagram"></use>
						</svg>
					</a>
					<a href="#">
						<svg width="16" height="17" viewBox="0 0 33 35">
							<use xlink:href="assets/img/set.svg#facebook"></use>
						</svg>
					</a>
					<a href="#">
						<svg width="21" height="15" viewBox="0 0 44 31">
							<use xlink:href="assets/img/set.svg#youtube"></use>
						</svg>
					</a>
				</div>
			</div>
			<div class="col-lg-auto col-menu-first">
				<ul>
					<li><a href="service.php">Service</a></li>
					<li><a href="#">Shipping and payment</a></li>
					<li><a href="contacts.php">Contacts</a></li>
				</ul>
			</div>
			<div class="col-lg-auto col-menu-second">
				<ul>
					<li><a href="#">Jobs</a></li>
					<li><a href="#">Contract offer</a></li>
				</ul>
			</div>
			<div class="col-lg-auto col-phone">
				<p class="p-phone"><a href="tel:+380674010066">+38 067 401 00 66</a></p>
				<img class="img-pay lazyload" data-srcset="assets/img/3logos.png,
					assets/img/3logos@1_5x.png 1.5x,
					assets/img/3logos@2x.png 2x,
					assets/img/3logos@3x.png 3x,
					assets/img/3logos@4x.png 4x"
					data-src="assets/img/3logos.png">
			</div>
			<div class="col-lg-auto col-contacts">
				<p class="p-contacts">Ukraine, 03062
				<br>Gostomel, st. Labor, 1U</p>	
				<p class="p-email"><a href="mailto:info@tsk.ua">info@tsk.ua</a></p>
			</div>
			<div class="col-lg-auto d-lg-none">
				<p class="p-social">Follow us at</p>
				<div class="social-row">
					<a href="#">
						<svg width="34.86" height="34.86" viewBox="0 0 35 35">
							<use xlink:href="assets/img/set.svg#instagram"></use>
						</svg>
					</a>
					<a href="#">
						<svg width="32.85" height="34.9" viewBox="0 0 33 35">
							<use xlink:href="assets/img/set.svg#facebook"></use>
						</svg>
					</a>
					<a href="#">
						<svg width="43.12" height="30.8" viewBox="0 0 44 31">
							<use xlink:href="assets/img/set.svg#youtube"></use>
						</svg>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>

<div class="modal-shadow"></div>

<div class="modal-wrap modal-auth">
	<form class="modal-body">
		<p class="modal-title">Authorization</p>
		<label for="login">Phone / Е-mail</label>
		<input type="text" placeholder="Enter your phone number or e-mail" id="login">
		<label for="password">Password</label>
		<input type="password" placeholder="********" id="password">
		<div class="modal-footer">
			<button class="btn-white" type="submit">Login</button>
			<a href="#" class="btn-red">Registration</a>
		</div>
	</form>
</div>

<a href="#headpoint" class="goup d-none">
	<svg viewBox="0 0 25 48">
		<use xlink:href="assets/img/set.svg#slide-arrow"></use>
	</svg>
</a>

<script src="assets/js/jquery.min.js"></script>
<script>
jQuery.event.special.touchstart = {
    setup: function( _, ns, handle ) {
        this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
    }
};
jQuery.event.special.touchmove = {
    setup: function( _, ns, handle ) {
        this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
    }
};
</script>
<script src="assets/js/lazysizes.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/datepicker-ru.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/jquery.timepicker.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>