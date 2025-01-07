<?php include("header.php"); ?>	
	<title>Contacts</title>
</head>
<body class="kmnd-body">

<?php include("menu1.php"); ?>

<main class="kmnd-main">

<section class="contacts__section">
   <div class="container">
      <div class="breadcrumbs">
         <ul>
            <li><a href="#">Unitbud</a></li>
            <li>контакты</li>
         </ul>
      </div>
      <h1 class="contacts__title h2 text-uppercase c-primary">контакты
      <br>/info</h1>
      <div class="contacts__row">
         <div class="contacts__col">
            <p class="text-uppercase fz-lg">телефон/почта</p>
         </div>
         <div class="contacts__col">
            <div class="contacts__item">
               <p class="contacts__subtitle text-uppercase">kyivstar</p>
               <p class="contacts__content">
                  <a href="tel:+380671067506">+38 (067) 106 75 06</a>
               </p>
            </div>
            <div class="contacts__item">
               <p class="contacts__subtitle text-uppercase">lifecell</p>
               <p class="contacts__content">
                  <a href="tel:+380935169654">+38 (093) 516 96 54</a>
               </p>
            </div>
            <div class="contacts__item">
               <p class="contacts__subtitle text-uppercase">Vodafone</p>
               <p class="contacts__content">
                  <a href="tel:+380505169654">+38 (050) 516 96 54</a>
               </p>
            </div>
            <div class="contacts__item">
               <p class="contacts__subtitle text-uppercase">почта</p>
               <p class="contacts__content">
                  <a href="mailto:office@unitbud.com">office@unitbud.com</a>
               </p>
            </div>
         </div>
      </div>
      <div class="contacts__row">
         <div class="contacts__col">
            <p class="text-uppercase fz-lg">соц сети</p>
         </div>
         <div class="contacts__col">
            <div class="contacts__item contacts__item_soc">
               <div class="contacts__content">
                  <figure><img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-contacts1.png"></figure>
                  <a href="#">instagram</a>
               </div>
            </div>
            <div class="contacts__item contacts__item_soc">
               <div class="contacts__content">
                  <figure><img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-contacts2.png"></figure>
                  <a href="#">facebook</a>
               </div>
            </div>
            <div class="contacts__item contacts__item_soc">
               <div class="contacts__content">
                  <figure><img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-contacts3.png"></figure>
                  <a href="#">youtube</a>
               </div>
            </div>
            <div class="contacts__item contacts__item_soc">
               <div class="contacts__content">
                  <figure><img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-contacts4.png"></figure>
                  <a href="#">twitter</a>
               </div>
            </div>
         </div>
      </div>
      <div class="contacts__row">
         <div class="contacts__col">
            <p class="text-uppercase fz-lg">Наш офис</p>
         </div>
         <div class="contacts__col">
            <div class="contacts__item" style="width: 100%;">
               <div class="contacts__content">
                  украина, м. Житомир, <br>вул. Героїв Чорнобиля, 6а
               </div>
            </div>
         </div>
      </div>
      <iframe class="contacts__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2549.7265360732663!2d28.657178116062955!3d50.27836447945201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472c64cdfb8180f7%3A0xfabc8d24af738a44!2sVulytsya%20Heroyiv%20Chornobylya%2C%206%D0%B0%2C%20Zhytomyr%2C%20Zhytomyrs&#39;ka%20oblast%2C%2010002!5e0!3m2!1sen!2sua!4v1671112383743!5m2!1sen!2sua" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <hr class="contacts__divider">
   </div>
</section>

<section class="consult__section consult__section_grid bg-primary">
	<div class="container">
		<div class="consult__row">
			<div class="consult__col">
				<h2 class="why__title h2 c-primary text-uppercase">обратная 
				<br>связь</h2>
			</div>
			<div class="consult__col">
				<h4 class="h4 c-secondary text-uppercase">Если у вас есть вопросы, предложения или комментарии по работе — обязательно сообщите нам об этом!</h4>
				<div class="consult__input consult__input_grid">
					<div class="input">
						<input type="text" placeholder="Имя">
					</div>
					<div class="input">
						<input type="text" placeholder="мобильный номер">
					</div>
               <div class="input">
						<input type="email" placeholder="Электронная почта">
					</div>
               <div class="input">
						<input type="text" placeholder="Текст сообщения">
					</div>
				</div>
				<div class="checkbox consult__checkbox">
					<input type="checkbox" id="agreement2" hidden>
					<label for="agreement2"> я даю согласие на обработку <a href="#">персональных данных</a></label>
				</div>
				<button class="btn btn_inverted">
					отправить
					<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 8" width="13" height="8" fill="none"><path fill="#000" d="M12.403 4.095a.5.5 0 0 0 0-.707L9.22.206a.5.5 0 1 0-.707.707l2.828 2.829L8.514 6.57a.5.5 0 1 0 .707.707l3.182-3.182ZM.256 4.242h11.793v-1H.256v1Z"/></svg></span>
				</button>
			</div>
		</div>
	</div>
</section>

</main>

<?php include("footer.php"); ?>
