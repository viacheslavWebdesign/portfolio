<?php include("header.php"); ?>	
	<title>Product</title>
</head>
<body class="kmnd-body">

<?php include("menu.php"); ?>

<main class="kmnd-main">

<div class="background">
<!-- <img class="background__image" src="assets/img/bg1.svg"> -->

<section class="product__section">
   <div class="container">
      <div class="breadcrumbs">
         <ul>
            <li><a href="/front/">Головна</a></li>
            <li><a href="sets.php">Сети</a></li>
            <li>Сет Асорті</li>
         </ul>
      </div>
      <div class="product__row">
         <div class="product__col">
            <div class="product__head">
               <div class="product__image">
                  <figure>
                     <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-product1.png">
                  </figure>
               </div>
               <div class="product__labels">
                  <div class="product__label label">-18<span>%</span></div>
                  <div class="product__label label label_outlined label_gold">best</div>
               </div>
            </div>
         </div>
         <div class="product__col">
            <div class="product__content">
               <h1 class="product__title uppercase">Сет Асорті</h1>
               <div class="product__description">
                  <p>Футомак Лосось, Каліфорнія Тобіко, Філадельфія в кунжуті, Каліфорнія Краб</p>
               </div>
               <div class="product__specs">
                  <ul>
                     <li><span>Вага:</span> <span>810 г + 100 г</span></li>
                     <li><span>кілкість:</span> <span>32 шт</span></li>
                     <li><span>Калорійність:</span> <span>326 к</span></li>
                  </ul>
               </div>
               <div class="product__price">
                  <p class="product__current-price">399 <span>грн</span></p>
                  <p class="product__old-price">543 <span>грн</span></p>
               </div>
               <div class="product__actions">
                  <div class="calc product__calc">
                     <button class="calc__btn calc__btn_minus"></button>
                     <input type="number" class="calc__value" value="1" min="1">
                     <button class="calc__btn calc__btn_plus"></button>
                  </div>
                  <div class="btn-bubbles product__btn-bubbles"><button class="btn btn_inside product__btn btn_hasclickedeffect"><span></span>Замовити</button></div>
               </div>
               <div class="product__sharing">
                  <p>Діліться з вашими <br>друзями та близькими</p>
                  <div class="product__sharing-soc">
                     <a href="#" class="btn btn_outlined product__sharing-soc-item">
                        <img src="assets/img/icon-telegram.svg">
                        Telegram
                     </a>
                     <a href="#" class="btn btn_outlined product__sharing-soc-item">
                        <img src="assets/img/icon-viber.svg">
                        Viber
                     </a>
                     <a href="#" class="btn btn_outlined product__sharing-soc-item">
                        <img src="assets/img/icon-whatsapp.svg">
                        WhatsApp
                     </a>
                     <a href="#" class="btn btn_outlined product__sharing-soc-item">
                        <img src="assets/img/icon-link.svg">
                        посилання
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="additional__section">
   <div class="container">
      <h2 class="text-center h2 additional__title uppercase">Також спробуйте</h2>
      <div class="additional__slider-wrapper">
         <div class="swiper additional__slider additional__slider-1">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="item">
                     <div class="item__heading">
                        <div class="item__info">
                           <div class="item__labels">
                              
                           </div>
                           <div class="item__specs">
                              <div class="item__spec item__spec_quantity label label_unactive">8 <span>шт</span></div>
                              <div class="item__spec item__spec_weight label label_unactive">180 <span>г</span></div>
                           </div>
                        </div>
                        <a href="product.php" class="item__image">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-additional1-1.png">
                           </figure>
                        </a>
                        <div class="item__content">
                           <a href="product.php"><p class="item__title">Каліфорнія Classic</p></a>
                           <p class="item__text">Краб, ікра Тобіко, огірок, японський майонез</p>
                        </div>
                     </div>
                     <div class="item__bottom">
                        <div class="item__price">
                           <p class="item__current-price item__current-price_default">160 <span>грн</span></p>
                        </div>
                        <div class="btn-bubbles"><button class="btn btn_inside item__btn call-modal-item-added btn_hasclickedeffect"><span></span>Замовити</button></div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="item">
                     <div class="item__heading">
                        <div class="item__info">
                           <div class="item__labels">
                              <div class="item__label label label_outlined label_gold">BEST</div>
                           </div>
                           <div class="item__specs">
                              <div class="item__spec item__spec_quantity label label_unactive">8 <span>шт</span></div>
                              <div class="item__spec item__spec_weight label label_unactive">180 <span>г</span></div>
                           </div>
                        </div>
                        <a href="product.php" class="item__image">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-additional1-1.png">
                           </figure>
                        </a>
                        <div class="item__content">
                           <a href="product.php"><p class="item__title">Каліфорнія Лосось</p></a>
                           <p class="item__text">Лосось, огірок, японський майонез, кунжут</p>
                        </div>
                     </div>
                     <div class="item__bottom">
                        <div class="item__price">
                           <p class="item__current-price item__current-price_default">155 <span>грн</span></p>
                        </div>
                        <div class="btn-bubbles"><button class="btn btn_inside item__btn call-modal-item-added btn_hasclickedeffect"><span></span>Замовити</button></div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="item">
                     <div class="item__heading">
                        <div class="item__info">
                           <div class="item__labels">
                              
                           </div>
                           <div class="item__specs">
                              <div class="item__spec item__spec_quantity label label_unactive">8 <span>шт</span></div>
                              <div class="item__spec item__spec_weight label label_unactive">180 <span>г</span></div>
                           </div>
                        </div>
                        <a href="product.php" class="item__image">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-additional1-1.png">
                           </figure>
                        </a>
                        <div class="item__content">
                           <a href="product.php"><p class="item__title">Каліфорнія Тобіко</p></a>
                           <p class="item__text">Лосось, ікра Тобіко, огірок, японський майонез</p>
                        </div>
                     </div>
                     <div class="item__bottom">
                        <div class="item__price">
                           <p class="item__current-price item__current-price_default">160 <span>грн</span></p>
                        </div>
                        <div class="btn-bubbles"><button class="btn btn_inside item__btn call-modal-item-added btn_hasclickedeffect"><span></span>Замовити</button></div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="item">
                     <div class="item__heading">
                        <div class="item__info">
                           <div class="item__labels">
                              
                           </div>
                           <div class="item__specs">
                              <div class="item__spec item__spec_quantity label label_unactive">8 <span>шт</span></div>
                              <div class="item__spec item__spec_weight label label_unactive">180 <span>г</span></div>
                           </div>
                        </div>
                        <a href="product.php" class="item__image">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-additional1-1.png">
                           </figure>
                        </a>
                        <div class="item__content">
                           <a href="product.php"><p class="item__title">Каліфорнія Classic</p></a>
                           <p class="item__text">Краб, ікра Тобіко, огірок, японський майонез</p>
                        </div>
                     </div>
                     <div class="item__bottom">
                        <div class="item__price">
                           <p class="item__current-price item__current-price_default">160 <span>грн</span></p>
                        </div>
                        <div class="btn-bubbles"><button class="btn btn_inside item__btn call-modal-item-added btn_hasclickedeffect"><span></span>Замовити</button></div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="item">
                     <div class="item__heading">
                        <div class="item__info">
                           <div class="item__labels">
                              <div class="item__label label label_outlined label_gold">BEST</div>
                           </div>
                           <div class="item__specs">
                              <div class="item__spec item__spec_quantity label label_unactive">8 <span>шт</span></div>
                              <div class="item__spec item__spec_weight label label_unactive">180 <span>г</span></div>
                           </div>
                        </div>
                        <a href="product.php" class="item__image">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-additional1-1.png">
                           </figure>
                        </a>
                        <div class="item__content">
                           <a href="product.php"><p class="item__title">Каліфорнія Лосось</p></a>
                           <p class="item__text">Лосось, огірок, японський майонез, кунжут</p>
                        </div>
                     </div>
                     <div class="item__bottom">
                        <div class="item__price">
                           <p class="item__current-price item__current-price_default">155 <span>грн</span></p>
                        </div>
                        <div class="btn-bubbles"><button class="btn btn_inside item__btn call-modal-item-added btn_hasclickedeffect"><span></span>Замовити</button></div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="item">
                     <div class="item__heading">
                        <div class="item__info">
                           <div class="item__labels">
                              
                           </div>
                           <div class="item__specs">
                              <div class="item__spec item__spec_quantity label label_unactive">8 <span>шт</span></div>
                              <div class="item__spec item__spec_weight label label_unactive">180 <span>г</span></div>
                           </div>
                        </div>
                        <a href="product.php" class="item__image">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-additional1-1.png">
                           </figure>
                        </a>
                        <div class="item__content">
                           <a href="product.php"><p class="item__title">Каліфорнія Тобіко</p></a>
                           <p class="item__text">Лосось, ікра Тобіко, огірок, японський майонез</p>
                        </div>
                     </div>
                     <div class="item__bottom">
                        <div class="item__price">
                           <p class="item__current-price item__current-price_default">160 <span>грн</span></p>
                        </div>
                        <div class="btn-bubbles"><button class="btn btn_inside item__btn call-modal-item-added btn_hasclickedeffect"><span></span>Замовити</button></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="swiper-pagination additional__pagination additional__pagination-1 slider__pagination"></div>
         </div>
         <div class="additional__arrow slider__arrow additional__arrow_prev additional__arrow_prev-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none" viewBox="0 0 12 12">
               <path fill="#fff" d="M11 6.75a.75.75 0 0 0 0-1.5v1.5ZM.47 5.47a.75.75 0 0 0 0 1.06l4.773 4.773a.75.75 0 1 0 1.06-1.06L2.061 6l4.242-4.243a.75.75 0 1 0-1.06-1.06L.47 5.47ZM11 5.25H1v1.5h10v-1.5Z"/>
            </svg>
         </div>
         <div class="additional__arrow slider__arrow additional__arrow_next additional__arrow_next-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none" viewBox="0 0 12 12">
               <path fill="#fff" d="M1 5.25a.75.75 0 0 0 0 1.5v-1.5Zm10.53 1.28a.75.75 0 0 0 0-1.06L6.757.697a.75.75 0 1 0-1.06 1.06L9.939 6l-4.242 4.243a.75.75 0 0 0 1.06 1.06L11.53 6.53ZM1 6.75h10v-1.5H1v1.5Z"/>
            </svg>
         </div>
      </div>
   </div>
</section>

</div>

<section class="additional__section additional__section_secondary">
   <div class="container">
      <h2 class="text-center h2 additional__title uppercase">Буде смакувати разом</h2>
      <div class="additional__slider-wrapper">
         <div class="swiper additional__slider additional__slider-2">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="item">
                     <div class="item__heading">
                        <div class="item__info">
                           <div class="item__labels">
                              
                           </div>
                           <div class="item__specs">
                              <div class="item__spec item__spec_quantity label label_unactive">1 <span>шт</span></div>
                              <div class="item__spec item__spec_weight label label_unactive">1 <span>л</span></div>
                           </div>
                        </div>
                        <a href="product.php" class="item__image">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-additional2-1.png">
                           </figure>
                        </a>
                        <div class="item__content">
                           <a href="product.php"><p class="item__title">Сік “Rich” апельсиновий</p></a>
                        </div>
                     </div>
                     <div class="item__bottom">
                        <div class="item__price">
                           <p class="item__current-price item__current-price_default">70 <span>грн</span></p>
                        </div>
                        <div class="btn-bubbles"><button class="btn btn_inside item__btn call-modal-item-added btn_hasclickedeffect"><span></span>Замовити</button></div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="item">
                     <div class="item__heading">
                        <div class="item__info">
                           <div class="item__labels">
                              
                           </div>
                           <div class="item__specs">
                              <div class="item__spec item__spec_quantity label label_unactive">1 <span>шт</span></div>
                              <div class="item__spec item__spec_weight label label_unactive">1 <span>л</span></div>
                           </div>
                        </div>
                        <a href="product.php" class="item__image">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-additional2-2.png">
                           </figure>
                        </a>
                        <div class="item__content">
                           <a href="product.php"><p class="item__title">Сік “Rich” Яблучний</p></a>
                        </div>
                     </div>
                     <div class="item__bottom">
                        <div class="item__price">
                           <p class="item__current-price item__current-price_default">70 <span>грн</span></p>
                        </div>
                        <div class="btn-bubbles"><button class="btn btn_inside item__btn call-modal-item-added btn_hasclickedeffect"><span></span>Замовити</button></div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="item">
                     <div class="item__heading">
                        <div class="item__info">
                           <div class="item__labels">
                              
                           </div>
                           <div class="item__specs">
                              <div class="item__spec item__spec_quantity label label_unactive">1 <span>шт</span></div>
                              <div class="item__spec item__spec_weight label label_unactive">0.5 <span>л</span></div>
                           </div>
                        </div>
                        <a href="product.php" class="item__image">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-additional2-3.png">
                           </figure>
                        </a>
                        <div class="item__content">
                           <a href="product.php"><p class="item__title">Вода “Bonaqua” негазована</p></a>
                        </div>
                     </div>
                     <div class="item__bottom">
                        <div class="item__price">
                           <p class="item__current-price item__current-price_default">160 <span>грн</span></p>
                        </div>
                        <div class="btn-bubbles"><button class="btn btn_inside item__btn call-modal-item-added btn_hasclickedeffect"><span></span>Замовити</button></div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="item">
                     <div class="item__heading">
                        <div class="item__info">
                           <div class="item__labels">
                              
                           </div>
                           <div class="item__specs">
                              <div class="item__spec item__spec_quantity label label_unactive">1 <span>шт</span></div>
                              <div class="item__spec item__spec_weight label label_unactive">1 <span>л</span></div>
                           </div>
                        </div>
                        <a href="product.php" class="item__image">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-additional2-1.png">
                           </figure>
                        </a>
                        <div class="item__content">
                           <a href="product.php"><p class="item__title">Сік “Rich” апельсиновий</p></a>
                        </div>
                     </div>
                     <div class="item__bottom">
                        <div class="item__price">
                           <p class="item__current-price item__current-price_default">70 <span>грн</span></p>
                        </div>
                        <div class="btn-bubbles"><button class="btn btn_inside item__btn call-modal-item-added btn_hasclickedeffect"><span></span>Замовити</button></div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="item">
                     <div class="item__heading">
                        <div class="item__info">
                           <div class="item__labels">
                              
                           </div>
                           <div class="item__specs">
                              <div class="item__spec item__spec_quantity label label_unactive">1 <span>шт</span></div>
                              <div class="item__spec item__spec_weight label label_unactive">1 <span>л</span></div>
                           </div>
                        </div>
                        <a href="product.php" class="item__image">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-additional2-2.png">
                           </figure>
                        </a>
                        <div class="item__content">
                           <a href="product.php"><p class="item__title">Сік “Rich” Яблучний</p></a>
                        </div>
                     </div>
                     <div class="item__bottom">
                        <div class="item__price">
                           <p class="item__current-price item__current-price_default">70 <span>грн</span></p>
                        </div>
                        <div class="btn-bubbles"><button class="btn btn_inside item__btn call-modal-item-added btn_hasclickedeffect"><span></span>Замовити</button></div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="item">
                     <div class="item__heading">
                        <div class="item__info">
                           <div class="item__labels">
                              
                           </div>
                           <div class="item__specs">
                              <div class="item__spec item__spec_quantity label label_unactive">1 <span>шт</span></div>
                              <div class="item__spec item__spec_weight label label_unactive">0.5 <span>л</span></div>
                           </div>
                        </div>
                        <a href="product.php" class="item__image">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-additional2-3.png">
                           </figure>
                        </a>
                        <div class="item__content">
                           <a href="product.php"><p class="item__title">Вода “Bonaqua” негазована</p></a>
                        </div>
                     </div>
                     <div class="item__bottom">
                        <div class="item__price">
                           <p class="item__current-price item__current-price_default">160 <span>грн</span></p>
                        </div>
                        <div class="btn-bubbles"><button class="btn btn_inside item__btn call-modal-item-added btn_hasclickedeffect"><span></span>Замовити</button></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="swiper-pagination additional__pagination additional__pagination-2 slider__pagination"></div>
         </div>
         <div class="additional__arrow slider__arrow additional__arrow_prev additional__arrow_prev-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none" viewBox="0 0 12 12">
               <path fill="#fff" d="M11 6.75a.75.75 0 0 0 0-1.5v1.5ZM.47 5.47a.75.75 0 0 0 0 1.06l4.773 4.773a.75.75 0 1 0 1.06-1.06L2.061 6l4.242-4.243a.75.75 0 1 0-1.06-1.06L.47 5.47ZM11 5.25H1v1.5h10v-1.5Z"/>
            </svg>
         </div>
         <div class="additional__arrow slider__arrow additional__arrow_next additional__arrow_next-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none" viewBox="0 0 12 12">
               <path fill="#fff" d="M1 5.25a.75.75 0 0 0 0 1.5v-1.5Zm10.53 1.28a.75.75 0 0 0 0-1.06L6.757.697a.75.75 0 1 0-1.06 1.06L9.939 6l-4.242 4.243a.75.75 0 0 0 1.06 1.06L11.53 6.53ZM1 6.75h10v-1.5H1v1.5Z"/>
            </svg>
         </div>
      </div>
   </div>
</section>

<section class="seo-text__section seo-text__section_hidden">
	<div class="container">
		<div class="seo-text__content">
			<h3 class="seo-text__title text-center uppercase">Ми раді вітати <br class="hide-for-large">Вас на сайті нашої <br class="hide-for-large">компанії!</h3>
			<p>Бажаєте скуштувати чогось смачного і неповторного, проте не хочеться виходити з дому? Зустрічайте наш суші-бар який пропонує скористатися послугою з доставки вишуканих страв японської кухні. Також ми пропонуємо замовити суші на самовивіз з нашого сушы-бару за вказаними адресами. Ви зможете забрати суші самостійно з додатковою знижкою.</p>
			<p>Ми працюємо, для того щоб Ви змогли насолоджуватися високим мистецтвом Японії в затишній атмосфері оформивши замовлення суші додому або, замовивши доставку в офіс, перетворивши невелику обідню перерву в яскраву смачну подію.</p>
			<p>Бажаєте скуштувати чогось смачного і неповторного, проте не хочеться виходити з дому? Зустрічайте наш суші-бар який пропонує скористатися послугою з доставки вишуканих страв японської кухні. Також ми пропонуємо замовити суші на самовивіз з нашого сушы-бару за вказаними адресами. Ви зможете забрати суші самостійно з додатковою знижкою.</p>
			<p>Ми працюємо, для того щоб Ви змогли насолоджуватися високим мистецтвом Японії в затишній атмосфері оформивши замовлення суші додому або, замовивши доставку в офіс, перетворивши невелику обідню перерву в яскраву смачну подію.</p>
			<p>Бажаєте скуштувати чогось смачного і неповторного, проте не хочеться виходити з дому? Зустрічайте наш суші-бар який пропонує скористатися послугою з доставки вишуканих страв японської кухні. Також ми пропонуємо замовити суші на самовивіз з нашого сушы-бару за вказаними адресами. Ви зможете забрати суші самостійно з додатковою знижкою.</p>
			<p>Ми працюємо, для того щоб Ви змогли насолоджуватися високим мистецтвом Японії в затишній атмосфері оформивши замовлення суші додому або, замовивши доставку в офіс, перетворивши невелику обідню перерву в яскраву смачну подію.</p>
		</div>
		<div class="seo-text__spoiler">
			<button class="btn btn_outlined btn_inside"><span>Читати повністю</span><span>Сховати</span><span></span></button>
		</div>
	</div>
</section>

</main>

<?php include("footer.php"); ?>