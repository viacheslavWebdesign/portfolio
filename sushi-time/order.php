<?php include("header.php"); ?>	
	<title>Order</title>
</head>
<body class="kmnd-body">

<?php include("menu.php"); ?>

<main class="kmnd-main">

<div class="background">
<!-- <img class="background__image" src="assets/img/bg1.svg"> -->

<section class="heading__section">
   <div class="container">
      <div class="breadcrumbs">
         <ul>
            <li><a href="/front/">Головна</a></li>
            <li>Оформлення замовлення</li>
         </ul>
      </div>
      <h1 class="heading__title h1 text-center uppercase">Оформлення замовлення</h1>
   </div>
</section>

<section class="order__section">
   <div class="container">
      <form id="orderForm" class="validate">
         <div class="order__row">
            <div class="order__col">
               <fieldset class="fieldset">
                  <legend class="legend">Тип замовлення</legend>
                  <div class="input-row">
                     <div class="radio radio_delivery">
                        <input type="radio" id="orderDelivery" name="orderType" required="required">
                        <label for="orderDelivery">Доставка</label>
                     </div>
                     <div class="radio">
                        <input type="radio" id="orderPickup" name="orderType" required="required">
                        <label for="orderPickup">Забрати у суші-барі <span class="radio__label">-18-44%</span></label>
                     </div>
                  </div>
                  <p class="order__error">*Оберіть тип замовлення</p>
                  <div class="input order__discount order__discount_hidden">
                     <input type="text" placeholder="Є ДИСКОНТ">
                     <div class="order__discount-holder">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" fill="none" viewBox="0 0 23 22">
                           <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.25 21c5.523 0 10-4.477 10-10s-4.477-10-10-10-10 4.477-10 10 4.477 10 10 10Z"/>
                           <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.416 10.167h.833V16h.834"/>
                           <path fill="#fff" d="M11.042 7.458a1.042 1.042 0 1 0 0-2.083 1.042 1.042 0 0 0 0 2.083Z"/>
                        </svg>
                        <div class="order__discount-content">
                           <p>Збережіть дисконт-буклет з Вашого замовлення та користуйтеся знижкою для постійного клієнта - <u>завжди, вказуючи № дисконта з буклета</u></p>
                        </div>
                     </div>
                  </div>
               </fieldset>
               <div class="order__cart hide-for-large">
                  <div class="order__cart-heading">
                     <p class="order__cart-heading-title">Ваше замовлення</p>
                     <p class="order__cart-clear">Очистити</p>
                  </div>
                  <div class="order__cart-list">
                     <div class="order__cart-item">
                        <a href="#" class="order__cart-image">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-cart1.jpg">
                           </figure>
                        </a>
                        <div class="order__cart-body">
                           <a href="#"><p class="order__cart-title">Сет Каліфорнійський</p></a>
                           <p class="order__cart-weight">940 г <span>(56 шт)</span></p>
                           <div class="calc header__cart-calc">
                              <button class="calc__btn calc__btn_minus"></button>
                              <input type="number" class="calc__value" value="1" min="1">
                              <button class="calc__btn calc__btn_plus"></button>
                           </div>
                           <div class="order__cart-remove">
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 14 14">
                                 <path stroke="#6C6C6C" stroke-linecap="round" stroke-width="2" d="M13 13 1 1m12 0L1 13" opacity=".3"/>
                              </svg>
                           </div>
                           <p class="order__cart-price">449 <span>грн</span></p>
                        </div>
                     </div>
                     <div class="order__cart-item">
                        <a href="#" class="order__cart-image">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-cart3.png">
                           </figure>
                        </a>
                        <div class="order__cart-body">
                           <a href="#"><p class="order__cart-title">Філадельфія Вугор</p></a>
                           <p class="order__cart-weight">200 г <span>(8 шт)</span></p>
                           <div class="calc header__cart-calc">
                              <button class="calc__btn calc__btn_minus"></button>
                              <input type="number" class="calc__value" value="1" min="1">
                              <button class="calc__btn calc__btn_plus"></button>
                           </div>
                           <div class="order__cart-remove">
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 14 14">
                                 <path stroke="#6C6C6C" stroke-linecap="round" stroke-width="2" d="M13 13 1 1m12 0L1 13" opacity=".3"/>
                              </svg>
                           </div>
                           <p class="order__cart-price">99 <span>грн</span></p>
                        </div>
                     </div>
                     <div class="order__cart-item order__cart-item_kit">
                        <a href="#" class="order__cart-image">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-cart4.png">
                           </figure>
                        </a>
                        <div class="order__cart-body">
                           <a href="#"><p class="order__cart-title">Набір</p></a>
                           <p class="order__cart-weight"><span>Соєвий соус, васабі, імбир, палички</span></p>
                           <div class="order__cart-remove">
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 14 14">
                                 <path stroke="#6C6C6C" stroke-linecap="round" stroke-width="2" d="M13 13 1 1m12 0L1 13" opacity=".3"/>
                              </svg>
                           </div>
                           <p class="order__cart-price">0 <span>грн</span></p>
                        </div>
                     </div>
                  </div>
               </div>
               <fieldset class="fieldset">
                  <legend class="legend">Контактні дані</legend>
                  <div class="input-row">
                     <div class="input">
                        <input type="text" placeholder="Ім'я*" required="required" name="orderName">
                     </div>
                     <div class="input">
                        <input type="phone" placeholder="Телефон*" required="required" name="orderPhone">
                     </div>
                  </div>
                  <p class="order__error">*Вкажіть всі дані</p>
                  <div class="order__delivery order__delivery_hidden">
                     <div class="input">
                        <input type="text" placeholder="Вулиця*">
                     </div>
                     <div class="order__delivery-row">
                        <div class="input">
                           <input type="text" placeholder="Будинок*">
                        </div>
                        <div class="input">
                           <input type="text" placeholder="Під'їзд*">
                        </div>
                        <div class="input">
                           <input type="text" placeholder="Поверх">
                        </div>
                        <div class="input">
                           <input type="text" placeholder="Квартира / Офіс">
                        </div>
                     </div>
                  </div>
               </fieldset>
               <fieldset class="fieldset">
                  <legend class="legend">Оберіть кількість приборів</legend>
                  <div class="input-row">
                     <div class="counter">
                        <p>Звичайні тримачі</p>
                        <div class="calc counter__calc">
                           <button class="calc__btn calc__btn_minus"></button>
                           <input type="number" class="calc__value" value="1" min="1">
                           <button class="calc__btn calc__btn_plus"></button>
                        </div>
                     </div>
                     <div class="counter">
                        <p>Навчальні тримачі</p>
                        <div class="calc counter__calc">
                           <button class="calc__btn calc__btn_minus"></button>
                           <input type="number" class="calc__value" value="1" min="1">
                           <button class="calc__btn calc__btn_plus"></button>
                        </div>
                     </div>
                  </div>
                  <p class="order__error">*Вкажіть всі дані</p>
               </fieldset>
               <fieldset class="fieldset order__payment-type">
                  <legend class="legend">Спосіб оплати</legend>
                  <div class="input-row">
                     <div class="radio">
                        <input type="radio" id="orderWebsite" name="orderPayment">
                        <label for="orderWebsite">Карткою на сайті 
                           <div class="order__types">
                              <div class="order__type"><img src="assets/img/img-order-type1.svg"></div>
                              <div class="order__type"><img src="assets/img/img-order-type2.svg"></div>
                           </div>
                        </label>
                     </div>
                     <div class="radio order_courier order__payment">
                        <input type="radio" id="orderCourier" name="orderPayment">
                        <label for="orderCourier">Готівкою кур'єру</label>
                     </div>
                     <div class="radio order_bar order__payment order__payment_hidden">
                        <input type="radio" id="orderBar" name="orderPayment">
                        <label for="orderBar">Оплата в суші-барі</label>
                     </div>
                  </div>
               </fieldset>
               <div class="textarea order__textarea">
                  <textarea placeholder="Коментар до замовлення"></textarea>
               </div>
            </div>
            <div class="order__col">
               <div class="order__cart order__cart_full">
                  <div class="show-for-large">
                     <div class="order__cart-heading">
                        <p class="order__cart-heading-title">Ваше замовлення</p>
                        <p class="order__cart-clear">Очистити</p>
                     </div>
                     <div class="order__cart-list">
                        <div class="order__cart-item">
                           <a href="#" class="order__cart-image">
                              <figure>
                                 <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-cart1.jpg">
                              </figure>
                           </a>
                           <div class="order__cart-body">
                              <a href="#"><p class="order__cart-title">Сет Каліфорнійський</p></a>
                              <p class="order__cart-weight">940 г <span>(56 шт)</span></p>
                              <div class="calc header__cart-calc">
                                 <button class="calc__btn calc__btn_minus"></button>
                                 <input type="number" class="calc__value" value="1" min="1">
                                 <button class="calc__btn calc__btn_plus"></button>
                              </div>
                              <div class="order__cart-remove">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 14 14">
                                    <path stroke="#6C6C6C" stroke-linecap="round" stroke-width="2" d="M13 13 1 1m12 0L1 13" opacity=".3"/>
                                 </svg>
                              </div>
                              <p class="order__cart-price">449 <span>грн</span></p>
                           </div>
                        </div>
                        <div class="order__cart-item">
                           <a href="#" class="order__cart-image">
                              <figure>
                                 <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-cart3.png">
                              </figure>
                           </a>
                           <div class="order__cart-body">
                              <a href="#"><p class="order__cart-title">Філадельфія Вугор</p></a>
                              <p class="order__cart-weight">200 г <span>(8 шт)</span></p>
                              <div class="calc header__cart-calc">
                                 <button class="calc__btn calc__btn_minus"></button>
                                 <input type="number" class="calc__value" value="1" min="1">
                                 <button class="calc__btn calc__btn_plus"></button>
                              </div>
                              <div class="order__cart-remove">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 14 14">
                                    <path stroke="#6C6C6C" stroke-linecap="round" stroke-width="2" d="M13 13 1 1m12 0L1 13" opacity=".3"/>
                                 </svg>
                              </div>
                              <p class="order__cart-price">99 <span>грн</span></p>
                           </div>
                        </div>
                        <div class="order__cart-item order__cart-item_kit">
                           <a href="#" class="order__cart-image">
                              <figure>
                                 <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-cart4.png">
                              </figure>
                           </a>
                           <div class="order__cart-body">
                              <a href="#"><p class="order__cart-title">Набір</p></a>
                              <p class="order__cart-weight"><span>Соєвий соус, васабі, імбир, палички</span></p>
                              <div class="order__cart-remove">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 14 14">
                                    <path stroke="#6C6C6C" stroke-linecap="round" stroke-width="2" d="M13 13 1 1m12 0L1 13" opacity=".3"/>
                                 </svg>
                              </div>
                              <p class="order__cart-price">0 <span>грн</span></p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="order__cart-bottom">
                     <div class="order__cart-specs">
                        <div class="order__cart-specs-item">
                           <p>Доставка</p>
                           <p>Безкоштовна</p>
                        </div>
                        <div class="order__cart-specs-item">
                           <p>Знижка</p>
                           <p>0 <span>грн</span></p>
                        </div>
                     </div>
                     <div class="order__cart-total">
                        <p>Разом до оплати</p>
                        <p>548 <span>грн</span></p>
                     </div>
                     <button type="submit" class="btn btn_outlined btn_inside order__cart-btn">оформити замовлення <span></span></button>
                     <p class="order__cart-error">*Заповніть обов'язкові поля</p>
                     <svg class="order__bottom-icon" xmlns="http://www.w3.org/2000/svg" width="610" height="28" fill="none" viewBox="0 0 610 28">
                        <path fill="#111010" d="M610 0H0v19h.065l-.031 6.283a2.115 2.115 0 0 0 3.61 1.506L11.433 19h7.431l7.163 7.163a3 3 0 0 0 4.243 0L37.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L57.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L77.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L97.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L117.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L137.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L157.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L177.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L197.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L217.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L237.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L257.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L277.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L297.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L317.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L337.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L357.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L377.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L397.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L417.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L437.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L457.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L477.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L497.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L517.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L537.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L557.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L577.433 19h1.431l7.163 7.163a3 3 0 0 0 4.243 0L597.433 19h1.431l7.975 7.975a1.852 1.852 0 0 0 3.161-1.31V0Z"/>
                     </svg>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>
</section>

</div>

</main>

<?php include("footer.php"); ?>