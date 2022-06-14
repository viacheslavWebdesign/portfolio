<footer>
	<div class="container">
		<div class="footer-top">
			<ul>
				<li><a href="#catalog">Catalog</a></li>
				<li><a href="calculator.php">Kitchen calculator</a></li>
				<li><a href="process.php">How we are working</a></li>
				<li><a href="faq.php">Question answer</a></li>
				<li><a href="payment.php">Payment</a></li>
				<li><a href="about.php">About company</a></li>
				<li><a href="contacts.php">Contacts</a></li>
			</ul>
			<div class="phone">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)" stroke="#F6860D" stroke-miterlimit="10"><path d="M16.62 16.62C11.1 22.14 5.82 23.28 3.9 23.4c-1.26-1.8-1.74-3.3-2.1-4.68 1.32-1.32 3.3-2.64 5.1-3.42L9 17.4c.72-.18 2.7-1.02 5.1-3.42 2.4-2.4 3.18-4.38 3.42-5.1l-2.1-2.1c.78-1.8 2.1-3.72 3.42-5.1 1.2.42 2.7.96 4.56 2.22-.12 1.92-1.32 7.2-6.78 12.72z" stroke-width="1.6"/><path d="M9.6 0v4.8M0 9.6h4.8M1.26 4.8L5.4 7.2M4.8 1.26l2.4 4.2" stroke-width="1.4"/></g><defs><clipPath id="clip0"><path fill="#fff" transform="matrix(-1 0 0 1 24 0)" d="M0 0h24v24H0z"/></clipPath></defs></svg>
				<a href="tel:+13034394200">+1 303-439-4200</a>
			</div>
		</div>
		<div class="footer-bottom">
			<p class="copy">&copy; Kitchen Hanna, 2021</p>
			<a href="text.php" class="policy">Privacy Policy</a>
		</div>
	</div>
</footer>

<div class="modal-shadow"></div>

<div class="modal modal-callback">
	<div class="modal-body">
		<svg class="btn-close" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.172 9.995l8.574 8.573a.833.833 0 11-1.178 1.178l-8.573-8.573-8.573 8.573a.833.833 0 01-1.178-1.178l8.573-8.573L.244 1.422A.833.833 0 011.422.244l8.573 8.573L18.568.244a.833.833 0 011.178 1.178l-8.573 8.573z" fill="#333"/></svg>
		<form id="formCallback">
			<p class="title">Let's pick up a stylish <br>and a functional kitchen for you!</p>
			<p class="subtitle">Leave a request and a specialist will contact <br>with you soon</p>
			<input name="name" type="text" placeholder="Your name" required="required">
			<input name="phone" type="tel" placeholder="Phone" required="required">
			<input name="kitchen" type="text" hidden>
			<button type="submit" class="btn-send">Choose a kitchen</button>
			<p class="undertext">By clicking on the button you agree to <a target="_blank" href="text.php">processing of personal data</a></p>
		</form>
	</div>
</div>

<link rel="preload" href="assets/js/jquery.min.js" as="script">
<link rel="preload" href="assets/js/lazysizes.js" as="script">
<link rel="preload" href="assets/js/ls.unveilhooks.js" as="script">
<link rel="preload" href="assets/js/slick.min.js" as="script">
<link rel="preload" href="assets/js/inputmask.js" as="script">
<link rel="preload" href="assets/js/jquery-ui.min.js" as="script">
<link rel="preload" href="assets/js/fancybox.js" as="script">
<link rel="preload" href="assets/js/main.js" as="script">

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
<script src="assets/js/lazysizes.js"></script>
<script src="assets/js/ls.unveilhooks.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/inputmask.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/fancybox.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>