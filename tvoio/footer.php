
<footer class="footer footer_gray d-none d-lg-block">
	<div class="container">
		<div class="footer__row">
			<a href="index.php" class="footer__logo"><img src="assets/img/logo.svg" width="171" height="46"></a>
			<div class="footer__menu">
				<ul>
					<li><a href="info.php">Payment and delivery</a></li>
					<li><a href="info.php">Warranty and returns</a></li>
				</ul>
				<ul>
					<li><a href="category.php">Towel dryers</a></li>
					<li><a href="category.php">Shower systems</a></li>
				</ul>
				<ul>
					<li><a href="category.php">Toilet bowls</a></li>
					<li><a href="category.php">Baths</a></li>
				</ul>
				<ul>
					<li><a href="category.php">Faucets</a></li>
					<li><a href="category.php">Towel dryers</a></li>
				</ul>
			</div>
			<div class="footer__contacts">
				<p class="footer__phone"><a href="tel:+3806776830012">(067) 768 30 012</a></p>
				<p class="footer__worktime">Working hours: <br class="d-xxl-none">10:00 - 20:00</p>
			</div>
		</div>
	</div>
	<hr>
	<div class="container">
		<div class="footer__line">
			<p class="footer__copy">&copy; All rights reserved - 2021</p>
			<p class="footer__link"><a href="info.php">Terms of sale and processing of personal data</a></p>
		</div>
	</div>
</footer>

<div class="footer-mobile d-lg-none">
	<div class="container">
		<p class="footer-mobile__phone"><a href="tel:+3806776830012">(067) 768 30 012</a></p>
		<p class="footer-mobile__worktime">Working hours: 10:00 - 20:00</p>
		<button class="footer-mobile__recall call-modal-recall">
			<svg viewBox="0 0 12 12" width="12" height="12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.658 9.427l-2.71-2.464a.667.667 0 00-.927.028L6.426 8.632c-.384-.073-1.156-.314-1.951-1.107-.795-.795-1.035-1.569-1.107-1.95l1.64-1.596a.667.667 0 00.028-.928L2.573.342a.667.667 0 00-.927-.058L.199 1.524a.667.667 0 00-.193.433c-.01.167-.201 4.115 2.86 7.178C5.536 11.805 8.882 12 9.804 12c.134 0 .217-.004.239-.005a.662.662 0 00.432-.194l1.24-1.448a.665.665 0 00-.057-.926z" fill="#FF5C00"/></svg>
			Feedback form
		</button>
		<p class="footer-mobile__subscribe-text">Subscribe to news and promotions</p>
		<form>
			<div class="footer-mobile__subscribe">
				<input type="text" placeholder="Ваш e-mail">
				<button>Subscribe</button>
			</div>
			<div class="footer-mobile__check">
				<input type="checkbox" name="subscribe" id="subscribe">
				<label for="subscribe"><svg viewBox="0 0 10 7" width="10" height="7" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.21 3.398l3.25 2.707L8.79.692" stroke="#FF5C00"/></svg>I agree with the terms <a href="info.php">processing of personal data</a></label>
			</div>
		</form>
		<div class="footer-mobile__row">
			<a href="#">Payment and delivery</a>
			<a href="#" style="padding: 12px 21px 12px 22px;">Warranty and returns</a>
		</div>
	</div>
</div>

<div class="modal-shadow"></div>

<div class="modal-recall">
	<div class="modal-recall__wrap">
		<svg class="modal-recall__close" viewBox="0 0 17 17" width="17" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 1.488L15.512 0 8.5 7.013 1.487 0 0 1.488 7.013 8.5 0 15.512 1.488 17 8.5 9.988 15.512 17 17 15.512 9.988 8.5 17 1.487z" fill="#D9D9D9"/></svg>
		<form id="form">
			<div class="modal-recall__head">
				<p>Callback</p>
			</div>
			<p class="modal-recall__text">Leave your phone number and our <br>manager will contact you within 3 minutes</p>
			<div class="modal-recall__body">
				<label for="name" class="modal-recall__label">Name:</label>
				<input type="text" required="" name="name" id="name" class="modal-recall__input" placeholder="How can we call you?">
				<label for="phone" class="modal-recall__label">Phone number:</label>
				<input type="tel" required="" name="phone" id="phone" class="modal-recall__input" placeholder="+38 (---)---_--_--">
				<button type="submit">Call me</button>
				<div class="modal-recall__check">
					<input type="checkbox" name="agreement" id="agreement" required="required">
					<label for="agreement"><svg viewBox="0 0 14 12" width="14" height="12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 5.5L6.143 10 13 1" stroke="#FF5C00" stroke-width="2"/></svg>I agree with the terms <a href="info.php">processing of personal data</a></label>
				</div>
			</div>
		</form>
		<div class="modal-recall__success d-none">
			<svg viewBox="0 0 95 73" width="95" height="73" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 34.667l38 31.666L91.667 3" stroke="#47B27F" stroke-width="8"/></svg>
			<p>Application sent</p>
			<p>Wait for a call from our<br>manager</p>
		</div>
		<div class="modal-recall__error d-none">
			<svg viewBox="0 0 67 67" width="67" height="67" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M41.365 33.495L65.35 9.562a5.602 5.602 0 00-7.92-7.921L33.5 25.629 9.57 1.641a5.6 5.6 0 10-7.92 7.921l23.985 23.933L1.65 57.428a5.578 5.578 0 000 7.922 5.579 5.579 0 007.92 0L33.5 41.36 57.43 65.35a5.578 5.578 0 007.92 0 5.579 5.579 0 000-7.922L41.365 33.495z" fill="#D74D4D"/></svg>
			<p>Error ;(</p>
			<p>Try to apply<br>again</p>
		</div>
	</div>
</div>

<div class="modal-authorize">
	<div class="modal-authorize__wrap">
		<svg class="modal-authorize__close" viewBox="0 0 17 17" width="17" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 1.488L15.512 0 8.5 7.013 1.487 0 0 1.488 7.013 8.5 0 15.512 1.488 17 8.5 9.988 15.512 17 17 15.512 9.988 8.5 17 1.487z" fill="#D9D9D9"/></svg>
		<div class="modal-authorize__head">
			<p class="modal-authorize__tab modal-authorize__tab_login modal-authorize__tab_current">Login</p>
			<p class="modal-authorize__tab modal-authorize__tab_reg">Registration</p>
		</div>
		<div class="modal-authorize__body modal-authorize__body_reg">
			<form>
				<label for="regName" class="modal-authorize__label">Name:</label>
				<input type="text" class="modal-authorize__input" id="regName" name="regName" placeholder="How can we call you?" required="required">
				<label for="regPhone" class="modal-authorize__label">Phone number:</label>
				<input type="tel" class="modal-authorize__input" id="regPhone" name="regPhone" placeholder="+38 (---)---_--_--" required="required">
				<label for="regEmail" class="modal-authorize__label">Email:</label>
				<input type="email" class="modal-authorize__input" id="regEmail" name="regEmail" placeholder="Email" required="required">
				<label for="regPass" class="modal-authorize__label">Password:</label>
				<input type="password" class="modal-authorize__input" id="regPass" name="regPass" placeholder="Password" required="required">
				<button class="modal-authorize__button">Register</button>
				<p class="modal-authorize__or">or login via</p>
				<div class="modal-authorize__row">
					<a href="#" class="modal-authorize__soc">
						<svg viewBox="0 0 24 24" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 12.067C0 18.033 4.333 22.994 10 24v-8.667H7V12h3V9.333c0-3 1.933-4.666 4.667-4.666.866 0 1.8.133 2.666.266V8H15.8c-1.467 0-1.8.733-1.8 1.667V12h3.2l-.533 3.333H14V24c5.667-1.006 10-5.966 10-11.933C24 5.43 18.6 0 12 0S0 5.43 0 12.067z" fill="#0085FF"/></svg>
						Facebook
					</a>
					<a href="#" class="modal-authorize__soc">
						<svg viewBox="0 0 24 24" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.clip111)"><path d="M5.266 9.765A7.077 7.077 0 0112 4.909c1.69 0 3.218.6 4.418 1.582L19.91 3C17.782 1.145 15.055 0 12 0 7.27 0 3.198 2.698 1.24 6.65l4.026 3.115z" fill="#EA4335"/><path d="M16.04 18.013c-1.09.703-2.474 1.078-4.04 1.078a7.077 7.077 0 01-6.723-4.823l-4.04 3.067A11.964 11.964 0 0012 24c2.933 0 5.735-1.043 7.834-3l-3.793-2.987z" fill="#34A853"/><path d="M19.834 21c2.195-2.048 3.62-5.096 3.62-9 0-.71-.109-1.473-.272-2.182H12v4.637h6.436c-.317 1.559-1.17 2.766-2.395 3.558L19.834 21z" fill="#4A90E2"/><path d="M5.277 14.268A7.12 7.12 0 014.91 12c0-.782.125-1.533.357-2.235L1.24 6.65A11.934 11.934 0 000 12c0 1.92.445 3.73 1.237 5.335l4.04-3.067z" fill="#FBBC05"/></g><defs><clipPath class="clip111"><path fill="#fff" d="M0 0h24v24H0z"/></clipPath></defs></svg>
						Google
					</a>
				</div>
			</form>
			<div class="modal-authorize__footer">
				<p>Already have account? <span class="modal-authorize__gotologin">Login</span></p>
			</div>
		</div>
		<div class="modal-authorize__body modal-authorize__body_visible modal-authorize__body_login">
			<form>
				<label for="loginEmail" class="modal-authorize__label">Email</label>
				<input type="email" class="modal-authorize__input" id="loginEmail" name="loginEmail" placeholder="Email" required="required">
				<label for="loginPass" class="modal-authorize__label">Password:</label>
				<input type="password" class="modal-authorize__input" id="loginPass" name="loginPass" placeholder="Password" required="required">
				<button class="modal-authorize__button">Login</button>
				<p class="modal-authorize__text">Forgot your password? <span>Restore</span></p>
				<p class="modal-authorize__or">or login via</p>
				<div class="modal-authorize__row">
					<a href="#" class="modal-authorize__soc">
						<svg viewBox="0 0 24 24" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 12.067C0 18.033 4.333 22.994 10 24v-8.667H7V12h3V9.333c0-3 1.933-4.666 4.667-4.666.866 0 1.8.133 2.666.266V8H15.8c-1.467 0-1.8.733-1.8 1.667V12h3.2l-.533 3.333H14V24c5.667-1.006 10-5.966 10-11.933C24 5.43 18.6 0 12 0S0 5.43 0 12.067z" fill="#0085FF"/></svg>
						Facebook
					</a>
					<a href="#" class="modal-authorize__soc">
						<svg viewBox="0 0 24 24" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(.clip111)"><path d="M5.266 9.765A7.077 7.077 0 0112 4.909c1.69 0 3.218.6 4.418 1.582L19.91 3C17.782 1.145 15.055 0 12 0 7.27 0 3.198 2.698 1.24 6.65l4.026 3.115z" fill="#EA4335"/><path d="M16.04 18.013c-1.09.703-2.474 1.078-4.04 1.078a7.077 7.077 0 01-6.723-4.823l-4.04 3.067A11.964 11.964 0 0012 24c2.933 0 5.735-1.043 7.834-3l-3.793-2.987z" fill="#34A853"/><path d="M19.834 21c2.195-2.048 3.62-5.096 3.62-9 0-.71-.109-1.473-.272-2.182H12v4.637h6.436c-.317 1.559-1.17 2.766-2.395 3.558L19.834 21z" fill="#4A90E2"/><path d="M5.277 14.268A7.12 7.12 0 014.91 12c0-.782.125-1.533.357-2.235L1.24 6.65A11.934 11.934 0 000 12c0 1.92.445 3.73 1.237 5.335l4.04-3.067z" fill="#FBBC05"/></g><defs><clipPath class="clip111"><path fill="#fff" d="M0 0h24v24H0z"/></clipPath></defs></svg>
						Google
					</a>
				</div>
			</form>
			<div class="modal-authorize__footer">
				<p>Have no account? <span class="modal-authorize__gotoreg">Registration</span></p>
			</div>
		</div>
	</div>
</div>
<link rel="preload" href="assets/js/jquery.min.js" as="script">
<link rel="preload" href="assets/js/slick.js" as="script">
<link rel="preload" href="assets/js/maskedinput.js" as="script">
<link rel="preload" href="assets/js/validate.js" as="script">
<link rel="preload" href="assets/js/jquery-ui.min.js" as="script">
<link rel="preload" href="assets/js/jquery.ui.touch-punch.min.js" as="script">
<link rel="preload" href="assets/js/main.js" as="script">
<script charset="UTF-8" src="assets/js/jquery.min.js"></script>
<script charset="UTF-8" src="assets/js/slick.js"></script>
<script charset="UTF-8" src="assets/js/maskedinput.js"></script>
<script charset="UTF-8" src="assets/js/validate.js"></script>
<script charset="UTF-8" src="assets/js/jquery-ui.min.js"></script>
<script charset="UTF-8" src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script charset="UTF-8" src="assets/js/main.js"></script>
</body>
</html>