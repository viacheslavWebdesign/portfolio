<footer class="footer">
   <div class="container">
      <div class="footer__row">
         <div class="footer__col">
            <a href="/front/" class="footer__logo">
               <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/logo.svg">
            </a>
            <div class="footer__soc">
               <a href="https://www.facebook.com/prosales.alex" class="soc-item footer__soc-item" target="_blank">
                  <div class="soc-item__border"></div>
                  <div class="soc-item__background"></div>
                  <img src="assets/img/placeholder.webp" class="lazyload soc-item__ico" data-src="assets/img/ico-facebook.svg">
               </a>
               <a href="https://instagram.com/prosales.alex" class="soc-item footer__soc-item" target="_blank">
                  <div class="soc-item__border"></div>
                  <div class="soc-item__background"></div>
                  <img src="assets/img/placeholder.webp" class="lazyload soc-item__ico" data-src="assets/img/ico-instagram.svg">
               </a>
               <a href="https://www.tiktok.com/@prosalesalex" class="soc-item footer__soc-item" target="_blank">
                  <div class="soc-item__border"></div>
                  <div class="soc-item__background"></div>
                  <img src="assets/img/placeholder.webp" class="lazyload soc-item__ico" data-src="assets/img/ico-tiktok.svg">
               </a>
               <a href="https://www.linkedin.com/in/prosales-alex" class="soc-item footer__soc-item" target="_blank">
                  <div class="soc-item__border"></div>
                  <div class="soc-item__background"></div>
                  <img src="assets/img/placeholder.webp" class="lazyload soc-item__ico" data-src="assets/img/ico-linkedin.svg">
               </a>
               <a href="https://youtube.com/@prosalesua" class="soc-item footer__soc-item" target="_blank">
                  <div class="soc-item__border"></div>
                  <div class="soc-item__background"></div>
                  <img src="assets/img/placeholder.webp" class="lazyload soc-item__ico" data-src="assets/img/ico-youtube.svg">
               </a>
            </div>
            <div class="footer__copy fz-xs fw-300 d-none d-md-block">
               <p>2017-2023 &copy; Олександр Мухін | ПроSales</p>
               <p class="footer__dev">Сайт створила <a href="https://komanda.dev/" target="_blank">KOMANDA</a></p>
            </div>
         </div>
         <div class="footer__col">
            <div class="footer__subrow">
               <div class="footer__subcol">
                  <p class="footer__title text-uppercase">Цікаве</p>
                  <div class="footer__menu">
                     <ul>
                        <li><a href="#reviews" class="scroll-link">Відгуки та кейси</a></li>
                        <li><a href="https://youtube.com/@prosalesua" target="_blank">Безкоштовно</a></li>
                        <li><a href="https://instagram.com/prosales.alex" target="_blank">Блог</a></li>
                     </ul>
                  </div>
                  <p class="footer__policy fz-xs  d-none d-md-block"><a href="#">Політика конфіденційності</a></p>
               </div>
               <div class="footer__subcol">
                  <p class="footer__title text-uppercase">Контакти</p>
                  <p class="footer__contacts footer__contacts_mobile"><a href="tel:+380930458863">+380930458863</a></p>
                  <p class="footer__contacts footer__contacts_mobile"><a href="mailto:prosales.alex@gmail.com">prosales.alex@gmail.com</a></p>
                  <p class="footer__contacts"><a href="https://t.me/prosales_alex" target="_blank">Telegram</a></p>
                  <p class="footer__contacts"><a href="viber://chat?number=380930458863" target="_blank">Viber</a></p>
                  <p class="footer__contacts"><a href="https://wa.me/+380930458863" target="_blank">WhatsApp</a></p>
               </div>
            </div>
         </div>
      </div>
      <p class="footer__policy fz-xs d-md-none"><a href="#">Політика конфіденційності</a></p>
      <div class="footer__copy fz-xs fw-300 d-md-none">
         <p>2017-2023 &copy; Олександр Мухін | ПроSales</p>
         <p class="footer__dev">Сайт створила <a href="https://komanda.dev/" target="_blank">KOMANDA</a></p>
      </div>
   </div>
</footer>

<div class="modal-shadow"></div>

<div class="modal modal-request" id="modal-request">
   <div class="modal__body modal-request__body bg-cover" style="background-image: url(assets/img/bg-modal-request.jpg)">
      <svg class="modal__close modal__close-btn" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 18 18"><path stroke="#fff" stroke-opacity=".3" d="m1 1 8 8m8 8L9 9m0 0 8-8L1 17"/></svg>
      <div class="modal-request__content">
         <p class="modal-request__title">обговоримо проєкт</p>
         <p class="modal-request__subtitle">Заповнюй форму нижче та ми обговоримо твою задачу та шляхи її рішення!</p>
         <form class="modal-request__form">
            <div class="input-row">
               <div class="input">
                  <label for="requestName">Твоє ім’я <sup>*</sup></label>
                  <input type="text" id="requestName" required="required">
               </div>
               <div class="input">
                  <label for="requestPhone">Твій телефон <sup>*</sup></label>
                  <input type="tel" id="requestPhone" required="required">
               </div>
            </div>
            <div class="textarea">
               <label for="requestText">Повідомлення</label>
               <textarea id="requestText" rows="1"></textarea>
            </div>
            <div class="modal-request__bottom">
               <p class="modal-request__policy">Тиснучи “Відправити”, ви погоджуєтесь з нашою <a href="#">політикою конфіденційності</a></p>
               <button class="modal-request__btn btn">
                  <div class="btn__border"></div>
                  <div class="btn__background"></div>
                  <div class="btn__content">Відправити</div>
               </button>
            </div>
         </form>
      </div>
   </div>
</div>

<div class="modal modal-review" id="modal-review1">
   <div class="modal__body modal-review__body bg-cover"  style="background-image: url(assets/img/bg-modal-review.jpg)">
      <img src="assets/img/texture.jpg" class="modal-review__gradient">
      <svg class="modal__close modal__close-btn" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 18 18"><path stroke="#fff" stroke-opacity=".3" d="m1 1 8 8m8 8L9 9m0 0 8-8L1 17"/></svg>
      <div class="modal-review__heading">
         <div class="modal-review__author">
            <figure class="modal-review__author-avatar bg-cover" style="background-image: url(assets/img/img-reviews2.jpg);"></figure>
            <div class="modal-review__author-details">
               <p class="modal-review__author-name">сергій сагун</p>
               <p class="modal-review__author-position">CEO</p>
            </div>
         </div>
         <img src="assets/img/placeholder.webp" class="lazyload modal-review__logo" data-src="assets/img/img-reviews-logo2.png">
      </div>
      <div class="modal-review__content">
         <p>Можу підтвердити, що це не було напрасною витратою грошей і часу.  Можу підтвердити, що це не було напрасною витратою грошей і часу. Можу підтвердити, що це не було напрасною витратою грошей і часу. Можу підтвердити, <span>що це не було напрасною витратою грошей і часу.</span>  Можу підтвердити, що це не було напрасною витратою грошей і часу. Можу підтвердити, що це не було напрасною витратою грошей і часу.Можу підтвердити, що це не було напрасною витратою грошей і часу.Можу підтвердити, що це не було напрасною витратою грошей і часу. Можу підтвердити, що це не було напрасною витратою грошей і часу.  Можу підтвердити, що це не було напрасною витратою грошей і часу. Можу підтвердити, що це не було напрасною витратою грошей і часу.Можу підтвердити, що це не було напрасною витратою грошей і часу.Можу підтвердити, що це не було напрасною витратою грошей і часу. </p>
      </div>
   </div>
</div>

<div class="modal modal-review" id="modal-review2">
   <div class="modal__body modal-review__body bg-cover"  style="background-image: url(assets/img/bg-modal-review.jpg)">
      <img src="assets/img/texture.jpg" class="modal-review__gradient">
      <svg class="modal__close modal__close-btn" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 18 18"><path stroke="#fff" stroke-opacity=".3" d="m1 1 8 8m8 8L9 9m0 0 8-8L1 17"/></svg>
      <div class="modal-review__heading">
         <div class="modal-review__author">
            <figure class="modal-review__author-avatar bg-cover" style="background-image: url(assets/img/img-reviews2.jpg);"></figure>
            <div class="modal-review__author-details">
               <p class="modal-review__author-name">сергій сагун</p>
               <p class="modal-review__author-position">CEO</p>
            </div>
         </div>
         <img src="assets/img/placeholder.webp" class="lazyload modal-review__logo" data-src="assets/img/img-reviews-logo2.png">
      </div>
      <div class="video modal-review__video">
         <figure class="bg-cover" style="background-image: url(assets/img/img-video.jpg);">
            <div class="play" data-video="1opFH5wcK_g"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="14" fill="none" viewBox="0 0 12 14"><path fill="#fff" d="M11.316 7 .345 13.334V.665L11.316 7Z"/></svg></div>
         </figure>
         <iframe src="" width="300" height="150" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
      </div>
   </div>
</div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/lazysizes.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/fancybox.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/preloader.js"></script>
</body>
</html>