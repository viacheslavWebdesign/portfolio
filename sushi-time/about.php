<?php include("header.php"); ?>	
	<title>About</title>
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
            <li>Про суші бари</li>
         </ul>
      </div>
      <h1 class="heading__title h1 text-center uppercase">Про суші бари</h1>
   </div>
</section>

<section class="about__section">
   <div class="container">
      <div class="about__filters">
         <a href="#aboutContent1" class="about__filter about__filter_current">Контакти <span></span></a>
         <a href="#aboutContent2" class="about__filter">Про нас <span></span></a>
         <a href="#aboutContent3" class="about__filter">Якість <span></span></a>
      </div>
      <div class="about__content about__content_active" id="aboutContent1">
         <div class="about__contacts">
            <div class="about__contacts-col">
               <div class="about__contacts-item">
                  <p>Замовлення</p>
                  <p><a href="tel:+380634020939">+380 (63) 4020–939</a></p>
               </div>
               <div class="about__contacts-item">
                  <p>Звернення</p>
                  <p><a href="mailto:sushi.time.kiev@gmail.com">sushi.time.kiev@gmail.com</a></p>
               </div>
            </div>
            <div class="about__contacts-col">
               <div class="about__contacts-item">
                  <p>Гр. роб. м. Київ</p>
                  <p>Щодня з 10:00-22:00 год</p>
               </div>
               <div class="about__contacts-item">
                  <p>Гр. роб. м. Львів</p>
                  <p>Щодня з 09:00-22:00 год</p>
               </div>
            </div>
         </div>
         <div class="about__bars">
            <h2 class="h2 bars__title uppercase text-center">суші бари</h2>
            <div class="bars__wrapper">
               <div class="bars__location">
                  <a href="#locationKyiv" class="bars__location-item bars__location-item_current">
                     <p>Київ</p>
                     <p>Пр. С. Бандери 16</p>
                     <span></span>
                  </a>
                  <a href="#locationLviv" class="bars__location-item">
                     <p>Львів</p>
                     <p>вул. Зелена 6</p>
                     <span></span>
                  </a>
               </div>
               <div class="bars__row bars__row_current" id="locationKyiv">
                  <div class="bars__col">
                     <div class="bars__content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="650" height="580" fill="none" viewBox="0 0 650 580">
                           <path stroke="#ED1A21" stroke-width="2" d="M470 290h180M0 290h180"/>
                           <path stroke="#202020" stroke-width="2" d="m407.783 212.217 127.279-127.28M330 180V0M330 580V400"/>
                        </svg>
                        <div class="bars__location-block">
                           <p>Проспект степана <br>Бандери 16</p>
                           <p>Щодня з 10:00–22:00 год</p>
                        </div>
                     </div>
                     <div class="bars__notice">100 метрів від метро <br>Почайна (Петрівка)</div>
                  </div>
                  <div class="bars__col">
                     <div class="bars__map">
                        <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-bars-map.jpg">
                     </div>
                  </div>
               </div>
               <div class="bars__row" id="locationLviv">
                  <div class="bars__col">
                     <div class="bars__content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="650" height="580" fill="none" viewBox="0 0 650 580">
                           <path stroke="#ED1A21" stroke-width="2" d="M470 290h180M0 290h180"/>
                           <path stroke="#202020" stroke-width="2" d="m407.783 212.217 127.279-127.28M330 180V0M330 580V400"/>
                        </svg>
                        <div class="bars__location-block">
                           <p>Проспект степана <br>вул. Зелена 6</p>
                           <p>Щодня з 10:00–22:00 год</p>
                        </div>
                     </div>
                     <div class="bars__notice">100 метрів від метро <br>Почайна (Петрівка)</div>
                  </div>
                  <div class="bars__col">
                     <div class="bars__map">
                        <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-bars-map.jpg">
                     </div>
                  </div>
               </div>
            </div>
            <div class="bars__interior">
               <p class="bars__interior-title">Інтер'єр</p>
               <div class="bars__interior-slider-wrapper">
                  <div class="swiper bars__interior-slider">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="bars__interior-slide">
                              <figure>
                                 <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-interior1.jpg">
                              </figure>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="bars__interior-slide">
                              <figure>
                                 <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-interior2.jpg">
                              </figure>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="bars__interior-slide">
                              <figure>
                                 <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-interior3.jpg">
                              </figure>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="bars__interior-slide">
                              <figure>
                                 <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-interior1.jpg">
                              </figure>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="bars__interior-slide">
                              <figure>
                                 <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-interior2.jpg">
                              </figure>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="bars__interior-slide">
                              <figure>
                                 <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-interior3.jpg">
                              </figure>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-pagination bars__interior-pagination slider__pagination"></div>
                  </div>
                  <div class="bars__interior-arrow slider__arrow bars__interior-arrow_prev">
                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none" viewBox="0 0 12 12">
                        <path fill="#fff" d="M11 6.75a.75.75 0 0 0 0-1.5v1.5ZM.47 5.47a.75.75 0 0 0 0 1.06l4.773 4.773a.75.75 0 1 0 1.06-1.06L2.061 6l4.242-4.243a.75.75 0 1 0-1.06-1.06L.47 5.47ZM11 5.25H1v1.5h10v-1.5Z"/>
                     </svg>
                  </div>
                  <div class="bars__interior-arrow slider__arrow bars__interior-arrow_next">
                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none" viewBox="0 0 12 12">
                        <path fill="#fff" d="M1 5.25a.75.75 0 0 0 0 1.5v-1.5Zm10.53 1.28a.75.75 0 0 0 0-1.06L6.757.697a.75.75 0 1 0-1.06 1.06L9.939 6l-4.242 4.243a.75.75 0 0 0 1.06 1.06L11.53 6.53ZM1 6.75h10v-1.5H1v1.5Z"/>
                     </svg>
                  </div>
               </div>
               <div class="bars__interior-bottom">
                  <a href="#" class="btn btn_outlined btn_inside">Про суши-бари <span></span></a>
               </div>
            </div>
         </div>
         <div class="about__request">
            <h2 class="h2 text-center uppercase about__request-title">Задати запитання</h2>
            <div class="request__form">
               <form>
                  <div class="input">
                     <input type="text" placeholder="Iм'я*" required="required">
                  </div>
                  <div class="input">
                     <input type="phone" placeholder="Телефон*" required="required">
                  </div>
                  <div class="input">
                     <input type="email" placeholder="E–mail*" required="required">
                  </div>
                  <div class="textarea">
                     <textarea placeholder="Коротко опишіть себе*" required="required"></textarea>
                  </div>
                  <div class="request__bottom">
                     <button class="btn btn_outlined btn_inside">Надіслати <span></span></button>
                  </div>
               </form>
            </div>
            <p class="request__notice">Надіславши цей запит, Ви надаєте згоду на збір, обробку та зберігання Ваших персональних даних</p>
         </div>
         <div class="about__instagram">
            <h2 class="instagram__title uppercase h2 text-center">Ми в Instagram</h2>
            <div class="instagram__slider-wrapper">
               <div class="swiper instagram__slider">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <a href="#" class="instagram__slide">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-instagram1.jpg">
                           </figure>
                        </a>
                     </div>
                     <div class="swiper-slide">
                        <a href="#" class="instagram__slide">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-instagram2.jpg">
                           </figure>
                        </a>
                     </div>
                     <div class="swiper-slide">
                        <a href="#" class="instagram__slide">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-instagram3.jpg">
                           </figure>
                        </a>
                     </div>
                     <div class="swiper-slide">
                        <a href="#" class="instagram__slide">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-instagram4.jpg">
                           </figure>
                        </a>
                     </div>
                     <div class="swiper-slide">
                        <a href="#" class="instagram__slide">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-instagram5.jpg">
                           </figure>
                        </a>
                     </div>
                     <div class="swiper-slide">
                        <a href="#" class="instagram__slide">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-instagram6.jpg">
                           </figure>
                        </a>
                     </div>
                     <div class="swiper-slide">
                        <a href="#" class="instagram__slide">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-instagram1.jpg">
                           </figure>
                        </a>
                     </div>
                     <div class="swiper-slide">
                        <a href="#" class="instagram__slide">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-instagram2.jpg">
                           </figure>
                        </a>
                     </div>
                     <div class="swiper-slide">
                        <a href="#" class="instagram__slide">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-instagram3.jpg">
                           </figure>
                        </a>
                     </div>
                     <div class="swiper-slide">
                        <a href="#" class="instagram__slide">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-instagram4.jpg">
                           </figure>
                        </a>
                     </div>
                     <div class="swiper-slide">
                        <a href="#" class="instagram__slide">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-instagram5.jpg">
                           </figure>
                        </a>
                     </div>
                     <div class="swiper-slide">
                        <a href="#" class="instagram__slide">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-instagram6.jpg">
                           </figure>
                        </a>
                     </div>
                  </div>
                  <div class="swiper-pagination instagram__pagination slider__pagination"></div>
               </div>
               <div class="instagram__arrow slider__arrow instagram__arrow_prev">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none" viewBox="0 0 12 12">
                     <path fill="#fff" d="M11 6.75a.75.75 0 0 0 0-1.5v1.5ZM.47 5.47a.75.75 0 0 0 0 1.06l4.773 4.773a.75.75 0 1 0 1.06-1.06L2.061 6l4.242-4.243a.75.75 0 1 0-1.06-1.06L.47 5.47ZM11 5.25H1v1.5h10v-1.5Z"/>
                  </svg>
               </div>
               <div class="instagram__arrow slider__arrow instagram__arrow_next">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none" viewBox="0 0 12 12">
                     <path fill="#fff" d="M1 5.25a.75.75 0 0 0 0 1.5v-1.5Zm10.53 1.28a.75.75 0 0 0 0-1.06L6.757.697a.75.75 0 1 0-1.06 1.06L9.939 6l-4.242 4.243a.75.75 0 0 0 1.06 1.06L11.53 6.53ZM1 6.75h10v-1.5H1v1.5Z"/>
                  </svg>
               </div>
            </div>
            <div class="instagram__bottom">
               <a href="#" class="btn btn_outlined btn_inside">Перейти <span></span></a>
            </div>
         </div>
      </div>
      <div class="about__content" id="aboutContent2">
         <div class="about__description">
            <div class="about__description-row">
               <div class="about__description-col">
                  <div class="about__description-text">
                     <p>Бажаєте скуштувати чогось смачного і неповторного, проте не хочеться виходити з дому? Зустрічайте наш суші-бар який пропонує скористатися послугою з доставки вишуканих страв японської кухні. Також ми пропонуємо замовити суші на самовивіз з нашого сушы-бару за вказаними адресами. Ви зможете забрати суші самостійно з додатковою знижкою.</p>
                  </div>
               </div>
               <div class="about__description-col">
                  <div class="about__description-text">
                     <p>Ми працюємо, для того щоб Ви змогли насолоджуватися високим мистецтвом Японії в затишній атмосфері оформивши замовлення суші додому або, замовивши доставку в офіс, перетворивши невелику обідню перерву в яскраву смачну подію.</p>
                  </div>
               </div>
            </div>
            <figure class="about__description-image">
               <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-about-description.jpg">
            </figure>
         </div>
         <div class="about__advantages">
            <h2 class="h2 uppercase text-center about__advantages-title">Наші переваги</h2>
            <div class="about__advantages-slider-wrapper">
               <div class="about__advantages-slider swiper">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="about__advantages-slide">
                           <div class="about__advantages-item">
                              <figure class="about__advantages-icon">
                                 <img src="assets/img/icon-advantages1.svg">
                              </figure>
                              <p class="about__advantages-name">ПРАЦЮЄМО</p>
                              <p class="about__advantages-text">Законно в правовому полі, ніяких підпільних цехів, ми фізично існуємо за адресами, і ви ЗАВЖДИ можете бачити своїми очима як кухар готує для Вас смачну Філадельфію.</p>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="about__advantages-slide">
                           <div class="about__advantages-item">
                              <figure class="about__advantages-icon">
                                 <img src="assets/img/icon-advantages2.svg">
                              </figure>
                              <p class="about__advantages-name">ДОТРИМУЄМОСЯ</p>
                              <p class="about__advantages-text">Міжнародної системи безпеки харчових продуктів ХАСП (НАССР).</p>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="about__advantages-slide">
                           <div class="about__advantages-item">
                              <figure class="about__advantages-icon">
                                 <img src="assets/img/icon-advantages3.svg">
                              </figure>
                              <p class="about__advantages-name">МАЄМО</p>
                              <p class="about__advantages-text">Власні технічні умови узгоджені та затверджені Держпродспоживслужбою України.</p>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="about__advantages-slide">
                           <div class="about__advantages-item">
                              <figure class="about__advantages-icon">
                                 <img src="assets/img/icon-advantages4.svg">
                              </figure>
                              <p class="about__advantages-name">ВЕДЕМО</p>
                              <p class="about__advantages-text">Відомчий контроль продукції, проводячи дослідження сировини та готових страв на санітарно-мікробіологічній експертизі 4 рази на місяць! Результати та акти оновлюються в даному розділі.</p>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="about__advantages-slide">
                           <div class="about__advantages-item">
                              <figure class="about__advantages-icon">
                                 <img src="assets/img/icon-advantages5.svg">
                              </figure>
                              <p class="about__advantages-name">ВИКОРИСТОВУЄМО</p>
                              <p class="about__advantages-text">Тільки сертифіковану сировину і СТЕЖИМО за здоров’ям персоналу</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-pagination about__advantages-pagination slider__pagination"></div>
               </div>
               <div class="about__advantages-arrow slider__arrow about__advantages-arrow_prev">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none" viewBox="0 0 12 12">
                  <path fill="#fff" d="M11 6.75a.75.75 0 0 0 0-1.5v1.5ZM.47 5.47a.75.75 0 0 0 0 1.06l4.773 4.773a.75.75 0 1 0 1.06-1.06L2.061 6l4.242-4.243a.75.75 0 1 0-1.06-1.06L.47 5.47ZM11 5.25H1v1.5h10v-1.5Z"/>
                  </svg>
               </div>
               <div class="about__advantages-arrow slider__arrow about__advantages-arrow_next">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none" viewBox="0 0 12 12">
                  <path fill="#fff" d="M1 5.25a.75.75 0 0 0 0 1.5v-1.5Zm10.53 1.28a.75.75 0 0 0 0-1.06L6.757.697a.75.75 0 1 0-1.06 1.06L9.939 6l-4.242 4.243a.75.75 0 0 0 1.06 1.06L11.53 6.53ZM1 6.75h10v-1.5H1v1.5Z"/>
                  </svg>
               </div>
            </div>
         </div>
         <div class="about__manufacturing">
            <h2 class="h2 text-center uppercase about__manufacturing-title">Процес виробництва</h2>
            <div class="about__manufacturing-slider-wrapper">
               <div class="swiper about__manufacturing-slider">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="about__manufacturing-slide">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-about-manufacturing1.jpg">
                           </figure>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="about__manufacturing-slide">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-about-manufacturing2.jpg">
                           </figure>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="about__manufacturing-slide">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-about-manufacturing3.jpg">
                           </figure>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="about__manufacturing-slide">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-about-manufacturing1.jpg">
                           </figure>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="about__manufacturing-slide">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-about-manufacturing2.jpg">
                           </figure>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="about__manufacturing-slide">
                           <figure>
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-about-manufacturing3.jpg">
                           </figure>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-pagination about__manufacturing-pagination slider__pagination"></div>
               </div>
               <div class="about__manufacturing-arrow slider__arrow about__manufacturing-arrow_prev">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none" viewBox="0 0 12 12">
                  <path fill="#fff" d="M11 6.75a.75.75 0 0 0 0-1.5v1.5ZM.47 5.47a.75.75 0 0 0 0 1.06l4.773 4.773a.75.75 0 1 0 1.06-1.06L2.061 6l4.242-4.243a.75.75 0 1 0-1.06-1.06L.47 5.47ZM11 5.25H1v1.5h10v-1.5Z"/>
                  </svg>
               </div>
               <div class="about__manufacturing-arrow slider__arrow about__manufacturing-arrow_next">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none" viewBox="0 0 12 12">
                  <path fill="#fff" d="M1 5.25a.75.75 0 0 0 0 1.5v-1.5Zm10.53 1.28a.75.75 0 0 0 0-1.06L6.757.697a.75.75 0 1 0-1.06 1.06L9.939 6l-4.242 4.243a.75.75 0 0 0 1.06 1.06L11.53 6.53ZM1 6.75h10v-1.5H1v1.5Z"/>
                  </svg>
               </div>
            </div>
         </div>
      </div>
      <div class="about__content" id="aboutContent3">
         <div class="about__research">
            <div class="about__research-row">
               <div class="about__research-col">
                  <a href="#" class="about__research-item">
                     <figure class="about__research-image">
                        <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-about-research1.jpg">
                     </figure>
                     <p class="about__research-title">сес РЕЗУЛЬТАТИ ДОСЛІДЖЕНЬ</p>
                     <p class="about__research-date">7 фото</p>
                  </a>
               </div>
               <div class="about__research-col">
                  <a href="#" class="about__research-item">
                     <figure class="about__research-image">
                        <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-about-research2.jpg">
                     </figure>
                     <p class="about__research-title">ТУ "ПРОДУКЦІЯ КУЛІНАРНА ЯПОНСЬКОЇ КУХНІ"</p>
                     <p class="about__research-date">5 фото</p>
                  </a>
               </div>
               <div class="about__research-col">
                  <a href="#" class="about__research-item">
                     <figure class="about__research-image">
                        <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-about-research3.jpg">
                     </figure>
                     <p class="about__research-title">Сертифікати на сировину і дезінфекційні засоби</p>
                     <p class="about__research-date">19 фото</p>
                  </a>
               </div>
               <div class="about__research-col">
                  <a href="#" class="about__research-item">
                     <figure class="about__research-image">
                        <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-about-research4.jpg">
                     </figure>
                     <p class="about__research-title">Візуальні умови та процес виробництва</p>
                     <p class="about__research-date">10 фото</p>
                  </a>
               </div>
               <div class="about__research-col">
                  <a href="#" class="about__research-item">
                     <figure class="about__research-image">
                        <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-about-research5.jpg">
                     </figure>
                     <p class="about__research-title">ДЕРЖАВНА РЕЄСТРАЦІЯ ПОТУЖНОСТЕЙ</p>
                     <p class="about__research-date">7 фото</p>
                  </a>
               </div>
               <div class="about__research-col">
                  <a href="#" class="about__research-item">
                     <figure class="about__research-image">
                        <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-about-research6.jpg">
                     </figure>
                     <p class="about__research-title">Акти прийому-передачі виконаних робіт (наданих послуг). Київський міський</p>
                     <p class="about__research-date">17 фото</p>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


</div>



</main>

<?php include("footer.php"); ?>