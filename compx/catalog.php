<?php include("header.php"); ?>	
	<title>Catalog</title>
</head>
<body class="kmnd-body">

<?php include("menu.php"); ?>

<main class="kmnd-main">

<section class="breadcrumbs">
   <div class="container">
      <ul class="breadcrumbs__list">
         <li class="breadcrumbs__item"><a href="#">Головна</a></li>
         <li class="breadcrumbs__item"><a href="#">Каталог товарів</a></li>
         <li class="breadcrumbs__item"><a href="#">Ноутбуки</a></li>
         <li class="breadcrumbs__item">Всі ноутбуки</li>
      </ul>
   </div>
</section>

<div class="catalog">
   <div class="container">
      <div class="catalog__holder">
         <div class="catalog__filters">
            <div class="catalog__filters-holder">
               FILTERS
            </div>
         </div>
         <div class="catalog__content">
            <div class="catalog__slider">
               <div class="head__slider-wrapper">
                  <div class="head__slider">
                     <a href="#" class="head__slider-item">
                        <figure class="bg-cover d-none d-xxl-block" style="background-image: url(assets/img/img-catalog-head1.jpg)"></figure>
                        <figure class="bg-cover d-none d-lg-block d-xxl-none" style="background-image: url(assets/img/img-catalog-head-desktop1.jpg)"></figure>
                        <figure class="bg-cover d-block d-lg-none" style="background-image: url(assets/img/img-catalog-head-mob1.jpg)"></figure>
                     </a>
                     <a href="#" class="head__slider-item">
                        <figure class="bg-cover d-none d-xxl-block" style="background-image: url(assets/img/img-catalog-head1.jpg)"></figure>
                        <figure class="bg-cover d-none d-lg-block d-xxl-none" style="background-image: url(assets/img/img-catalog-head-desktop1.jpg)"></figure>
                        <figure class="bg-cover d-block d-lg-none" style="background-image: url(assets/img/img-catalog-head-mob1.jpg)"></figure>
                     </a>
                     <a href="#" class="head__slider-item">
                        <figure class="bg-cover d-none d-xxl-block" style="background-image: url(assets/img/img-catalog-head1.jpg)"></figure>
                        <figure class="bg-cover d-none d-lg-block d-xxl-none" style="background-image: url(assets/img/img-catalog-head-desktop1.jpg)"></figure>
                        <figure class="bg-cover d-block d-lg-none" style="background-image: url(assets/img/img-catalog-head-mob1.jpg)"></figure>
                     </a>
                     <a href="#" class="head__slider-item">
                        <figure class="bg-cover d-none d-xxl-block" style="background-image: url(assets/img/img-catalog-head1.jpg)"></figure>
                        <figure class="bg-cover d-none d-lg-block d-xxl-none" style="background-image: url(assets/img/img-catalog-head-desktop1.jpg)"></figure>
                        <figure class="bg-cover d-block d-lg-none" style="background-image: url(assets/img/img-catalog-head-mob1.jpg)"></figure>
                     </a>
                  </div>
                  <svg class="head__slider-arrow head__slider-arrow_prev" xmlns="http://www.w3.org/2000/svg" width="800" height="800" viewBox="0 0 32 32"><path d="M23.505 0a1.073 1.073 0 0 1 .757 1.831L10.004 16.095l14.05 14.05c.417.417.417 1.098 0 1.515s-1.098.417-1.515 0L7.732 16.853a1.074 1.074 0 0 1 0-1.515L22.747.316c.208-.208.486-.316.757-.316z"/></svg>
                  <svg class="head__slider-arrow head__slider-arrow_next" xmlns="http://www.w3.org/2000/svg" width="800" height="800" viewBox="0 0 32 32"><path d="M8.489 31.975a1.073 1.073 0 0 1-.757-1.831L21.99 15.88 7.94 1.83c-.417-.417-.417-1.098 0-1.515s1.098-.417 1.515 0l14.807 14.807a1.074 1.074 0 0 1 0 1.515L9.247 31.659a1.078 1.078 0 0 1-.757.316z"/></svg>
               </div>
            </div>

            <div class="catalog__sort">
               <select class="catalog__sort-select">
                  <option selected="selected">За популярністю</option>
                  <option>Спочатку дешевше</option>
                  <option>Спочатку дорожче</option>
                  <option>По назві</option>
               </select>
               <div class="catalog__sort-filter-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><g fill="#3C3C3C" clip-path="url(.a123123123)"><path d="M1 4.75h2.736a3.728 3.728 0 0 0 7.195 0H23a1 1 0 1 0 0-2H10.931a3.728 3.728 0 0 0-7.195 0H1a1 1 0 0 0 0 2ZM7.333 2a1.75 1.75 0 1 1 0 3.5 1.75 1.75 0 0 1 0-3.5ZM23 11h-2.736a3.727 3.727 0 0 0-7.194 0H1a1 1 0 0 0 0 2h12.07a3.727 3.727 0 0 0 7.194 0H23a1 1 0 1 0 0-2Zm-6.333 2.75a1.75 1.75 0 1 1 0-3.5 1.75 1.75 0 0 1 0 3.5ZM23 19.25H10.931a3.728 3.728 0 0 0-7.195 0H1a1 1 0 0 0 0 2h2.736a3.728 3.728 0 0 0 7.195 0H23a1 1 0 1 0 0-2ZM7.333 22a1.75 1.75 0 1 1 0-3.5 1.75 1.75 0 0 1 0 3.5Z"/></g><defs><clipPath class="a123123123"><path fill="#fff" d="M0 0h24v24H0z"/></clipPath></defs></svg>
               </div>
               <p class="catalog__sort-text">Сортувати:</p>
               <button class="btn">За популярністю</button>
               <button class="btn btn_sixth">Спочатку дешевше</button>
               <button class="btn btn_sixth">Спочатку дорожче</button>
               <button class="btn btn_sixth">По назві</button>
            </div>

            <div class="catalog__grid">
               <div class="catalog__col">
                  <div class="item">
                     <div class="item__image">
                        <a href="#"><figure class="bg-contain" style="background-image: url(assets/img/img-item.jpg);"></figure></a>
                        <div class="item__label bg-neutral c-primary-inverted">Акція</div>
                        <div class="item__actions">
                           <div class="item__action item__action_comparison item__action_active"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 22 22"><path fill="#02227A" fill-rule="evenodd" d="M4.47 7.627V4.47H2.705v10.587a3.53 3.53 0 0 0 3.53 3.529h12.35V16.82H6.236c-.861 0-1.577-.616-1.734-1.43L8 11.891l2.905 2.905a.881.881 0 0 0 1.247 0l4.412-4.411-1.248-1.248-3.787 3.788-2.906-2.905a.881.881 0 0 0-1.247 0L4.47 12.926v-2.803L7.97 6.62l2.001 2.001a.882.882 0 0 0 1.244.004l3.837-3.795 2.027 2.027 1.247-1.248-2.647-2.646a.882.882 0 0 0-1.244-.004L10.6 6.754 8.595 4.749a.881.881 0 0 0-1.248 0L4.47 7.627Z" clip-rule="evenodd"/></svg></div>
                           <div class="item__action item__action_wishlist item__action_active"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="none" viewBox="0 0 23 23"><g clip-path="url(.a1245dfa123asd123asd123)"><path fill="#02227A" d="M20.81 4.908c-1.207-1.606-2.623-2.43-4.208-2.448h-.053c-2.296 0-4.273 1.723-5.193 2.68-.921-.957-2.898-2.68-5.194-2.68H6.11c-1.586.018-3 .842-4.228 2.476a5.767 5.767 0 0 0 .738 7.341l8.247 8.122a.698.698 0 0 0 .977 0l8.247-8.122a5.775 5.775 0 0 0 .719-7.369Zm-1.697 6.375-7.757 7.643-7.757-7.643a4.364 4.364 0 0 1-.58-5.537c.93-1.24 1.974-1.876 3.104-1.89h.04c2.429 0 4.624 2.737 4.646 2.765a.723.723 0 0 0 1.095 0c.023-.028 2.233-2.827 4.686-2.766a3.993 3.993 0 0 1 3.084 1.863 4.37 4.37 0 0 1-.561 5.565Z"/></g><defs><clipPath class="a1245dfa123asd123asd123"><path fill="#fff" d="M.191.367h22.326v22.326H.191z"/></clipPath></defs></svg></div>
                        </div>
                        <div class="item__plans">
                           <div class="item__plan">
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-privat.png">
                              <span>5</span>
                           </div>
                           <div class="item__plan">
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-mono.png">
                              <span>6</span>
                           </div>
                           <div class="item__plan item__plan_dark">
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-binance.png">
                           </div>
                        </div>
                     </div>
                     <div class="item__body">
                        <a href="#"><p class="item__title">Материнська плата Asus ROG CROSSHAIR X670E EXTREME (sAM5, AMD X670, E-ATX)</p></a>
                        <div class="item__stats">
                           <div class="item__rating">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.asd123fdsaasd123ad)"><path fill="#D8D8D8" d="M14.992 6.367a.75.75 0 0 0-.647-.516l-4.078-.37-1.612-3.774a.751.751 0 0 0-1.381 0L5.662 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.909 4.004a.75.75 0 0 0 1.117.811l3.517-2.102 3.517 2.102a.75.75 0 0 0 1.117-.811l-.909-4.004 3.082-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="asd123fdsaasd123ad"><path fill="#fff" d="M.9.948h14.128v14.128H.9z"/></clipPath></defs></svg>
                           </div>
                           <div class="item__comments">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><path fill="#C7ACFB" d="M13.48 3.086C12.526 2 10.48 1.333 8 1.333c-2.48 0-4.527.667-5.48 1.753-1.573 1.827-1.573 6.667 0 8.494.316.342.688.628 1.1.846l.22 1.334a1.334 1.334 0 0 0 .787 1.006c.166.071.345.108.526.107.262.008.52-.064.74-.207l2-1.333H8c1.947 0 4.367-.46 5.486-1.747 1.567-1.833 1.567-6.673-.006-8.5ZM10.4 7.033l-1.013.807a.26.26 0 0 0-.087.286l.46 1.54a.267.267 0 0 1-.413.294L8.16 9.066a.28.28 0 0 0-.32 0l-1.173.894a.267.267 0 0 1-.414-.294l.46-1.54a.26.26 0 0 0-.086-.286L5.6 7.033a.273.273 0 0 1 .167-.48h1.16a.267.267 0 0 0 .246-.16l.58-1.333a.267.267 0 0 1 .494 0l.58 1.333a.267.267 0 0 0 .246.16h1.16a.273.273 0 0 1 .167.48Z"/><circle cx="8" cy="8" r="4" fill="#C7ACFB"/></svg>
                              15 відгуків
                           </div>
                        </div>
                        <div class="item__bottom">
                           <p class="item__price">9 087 ₴ <del>100 999 ₴</del></p>
                           <button class="item__btn item__btn_active"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="none" viewBox="0 0 27 27"><path fill="#fff" d="M21.22 15.546a.804.804 0 0 1-.07-1.605.804.804 0 1 1 1.596.196 1.617 1.617 0 0 1-1.527 1.409Z"/><path fill="#fff" d="M8.159 16.689a.804.804 0 0 1-.07-1.606l13.059-1.142a.804.804 0 0 1 .14 1.602L8.229 16.685a.797.797 0 0 1-.07.004Z"/><path fill="#fff" d="M21.948 14.843a.804.804 0 0 1-.8-.902l.976-7.92a.804.804 0 0 1 1.596.197l-.975 7.92a.804.804 0 0 1-.797.705Z"/><path fill="#fff" d="M6.018 8.401a.804.804 0 0 1-.07-1.605l16.904-1.48a.804.804 0 0 1 .14 1.602L6.09 8.399a.84.84 0 0 1-.071.003Z"/><path fill="#fff" d="M5.809 6.83a.804.804 0 0 1-.796-.698.804.804 0 0 1 0-1.609c.802 0 1.487.6 1.594 1.396a.805.805 0 0 1-.798.91Z"/><path fill="#fff" d="M5.013 6.132H3.626a.804.804 0 0 1 0-1.608h1.387a.804.804 0 0 1 0 1.608Z"/><path fill="#fff" d="M6.932 15.254a.803.803 0 0 1-.795-.698L5.013 6.132a.804.804 0 1 1 1.594-.212l1.123 8.424a.804.804 0 0 1-.798.91ZM10.548 23.017c-1.525 0-2.814-1.29-2.814-2.814 0-1.526 1.29-2.814 2.814-2.814 1.526 0 2.815 1.288 2.815 2.814 0 1.525-1.29 2.814-2.815 2.814Zm0-4.02c-.642 0-1.206.563-1.206 1.206 0 .642.564 1.206 1.206 1.206.643 0 1.206-.564 1.206-1.206 0-.643-.564-1.206-1.206-1.206ZM18.185 23.017c-1.525 0-2.814-1.29-2.814-2.814 0-1.526 1.289-2.814 2.814-2.814 1.525 0 2.814 1.288 2.814 2.814 0 1.525-1.289 2.814-2.814 2.814Zm0-4.02c-.642 0-1.206.563-1.206 1.206 0 .642.564 1.206 1.206 1.206.643 0 1.206-.564 1.206-1.206 0-.643-.564-1.206-1.206-1.206Z"/><path fill="#fff" d="M8.523 16.65a2.408 2.408 0 0 1-2.387-2.093.804.804 0 1 1 1.594-.212.81.81 0 0 0 .867.695.804.804 0 0 1 .14 1.602 2.773 2.773 0 0 1-.214.008Z"/></svg></button>
                        </div>
                     </div>
                     <div class="item__description">
                        <p>Діагональ екрану - 16,6”/ Роздільна здатність екрану - 1920х1080/ Сенсорний екран - матова / Частота оновлення екрану - 60 Гц</p>
                     </div>
                  </div>
               </div>
               <div class="catalog__col">
                  <div class="item">
                     <div class="item__image">
                        <a href="#"><figure class="bg-contain" style="background-image: url(assets/img/img-item.jpg);"></figure></a>
                        <div class="item__label bg-neutral-inverted c-primary-inverted">Новинка</div>
                        <div class="item__actions">
                           <div class="item__action item__action_comparison"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 22 22"><path fill="#02227A" fill-rule="evenodd" d="M4.47 7.627V4.47H2.705v10.587a3.53 3.53 0 0 0 3.53 3.529h12.35V16.82H6.236c-.861 0-1.577-.616-1.734-1.43L8 11.891l2.905 2.905a.881.881 0 0 0 1.247 0l4.412-4.411-1.248-1.248-3.787 3.788-2.906-2.905a.881.881 0 0 0-1.247 0L4.47 12.926v-2.803L7.97 6.62l2.001 2.001a.882.882 0 0 0 1.244.004l3.837-3.795 2.027 2.027 1.247-1.248-2.647-2.646a.882.882 0 0 0-1.244-.004L10.6 6.754 8.595 4.749a.881.881 0 0 0-1.248 0L4.47 7.627Z" clip-rule="evenodd"/></svg></div>
                           <div class="item__action item__action_wishlist"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="none" viewBox="0 0 23 23"><g clip-path="url(.a1245dfa123asd123asd123)"><path fill="#02227A" d="M20.81 4.908c-1.207-1.606-2.623-2.43-4.208-2.448h-.053c-2.296 0-4.273 1.723-5.193 2.68-.921-.957-2.898-2.68-5.194-2.68H6.11c-1.586.018-3 .842-4.228 2.476a5.767 5.767 0 0 0 .738 7.341l8.247 8.122a.698.698 0 0 0 .977 0l8.247-8.122a5.775 5.775 0 0 0 .719-7.369Zm-1.697 6.375-7.757 7.643-7.757-7.643a4.364 4.364 0 0 1-.58-5.537c.93-1.24 1.974-1.876 3.104-1.89h.04c2.429 0 4.624 2.737 4.646 2.765a.723.723 0 0 0 1.095 0c.023-.028 2.233-2.827 4.686-2.766a3.993 3.993 0 0 1 3.084 1.863 4.37 4.37 0 0 1-.561 5.565Z"/></g><defs><clipPath class="a1245dfa123asd123asd123"><path fill="#fff" d="M.191.367h22.326v22.326H.191z"/></clipPath></defs></svg></div>
                        </div>
                        <div class="item__plans">
                           <div class="item__plan">
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-privat.png">
                              <span>5</span>
                           </div>
                           <div class="item__plan">
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-mono.png">
                              <span>6</span>
                           </div>
                           <div class="item__plan item__plan_dark">
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-binance.png">
                           </div>
                        </div>
                     </div>
                     <div class="item__body">
                        <a href="#"><p class="item__title">Монітор Asus 15.6&quot: MB16AWP IPS Black (90LM07l1-BO1370)</p></a>
                        <div class="item__stats">
                           <div class="item__rating">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.asd123fdsaasd123ad)"><path fill="#D8D8D8" d="M14.992 6.367a.75.75 0 0 0-.647-.516l-4.078-.37-1.612-3.774a.751.751 0 0 0-1.381 0L5.662 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.909 4.004a.75.75 0 0 0 1.117.811l3.517-2.102 3.517 2.102a.75.75 0 0 0 1.117-.811l-.909-4.004 3.082-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="asd123fdsaasd123ad"><path fill="#fff" d="M.9.948h14.128v14.128H.9z"/></clipPath></defs></svg>
                           </div>
                           <div class="item__comments">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><path fill="#C7ACFB" d="M13.48 3.086C12.526 2 10.48 1.333 8 1.333c-2.48 0-4.527.667-5.48 1.753-1.573 1.827-1.573 6.667 0 8.494.316.342.688.628 1.1.846l.22 1.334a1.334 1.334 0 0 0 .787 1.006c.166.071.345.108.526.107.262.008.52-.064.74-.207l2-1.333H8c1.947 0 4.367-.46 5.486-1.747 1.567-1.833 1.567-6.673-.006-8.5ZM10.4 7.033l-1.013.807a.26.26 0 0 0-.087.286l.46 1.54a.267.267 0 0 1-.413.294L8.16 9.066a.28.28 0 0 0-.32 0l-1.173.894a.267.267 0 0 1-.414-.294l.46-1.54a.26.26 0 0 0-.086-.286L5.6 7.033a.273.273 0 0 1 .167-.48h1.16a.267.267 0 0 0 .246-.16l.58-1.333a.267.267 0 0 1 .494 0l.58 1.333a.267.267 0 0 0 .246.16h1.16a.273.273 0 0 1 .167.48Z"/><circle cx="8" cy="8" r="4" fill="#C7ACFB"/></svg>
                              15 відгуків
                           </div>
                        </div>
                        <div class="item__bottom">
                           <p class="item__price">9 087 ₴ <del>100 999 ₴</del></p>
                           <button class="item__btn"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="none" viewBox="0 0 27 27"><path fill="#fff" d="M21.22 15.546a.804.804 0 0 1-.07-1.605.804.804 0 1 1 1.596.196 1.617 1.617 0 0 1-1.527 1.409Z"/><path fill="#fff" d="M8.159 16.689a.804.804 0 0 1-.07-1.606l13.059-1.142a.804.804 0 0 1 .14 1.602L8.229 16.685a.797.797 0 0 1-.07.004Z"/><path fill="#fff" d="M21.948 14.843a.804.804 0 0 1-.8-.902l.976-7.92a.804.804 0 0 1 1.596.197l-.975 7.92a.804.804 0 0 1-.797.705Z"/><path fill="#fff" d="M6.018 8.401a.804.804 0 0 1-.07-1.605l16.904-1.48a.804.804 0 0 1 .14 1.602L6.09 8.399a.84.84 0 0 1-.071.003Z"/><path fill="#fff" d="M5.809 6.83a.804.804 0 0 1-.796-.698.804.804 0 0 1 0-1.609c.802 0 1.487.6 1.594 1.396a.805.805 0 0 1-.798.91Z"/><path fill="#fff" d="M5.013 6.132H3.626a.804.804 0 0 1 0-1.608h1.387a.804.804 0 0 1 0 1.608Z"/><path fill="#fff" d="M6.932 15.254a.803.803 0 0 1-.795-.698L5.013 6.132a.804.804 0 1 1 1.594-.212l1.123 8.424a.804.804 0 0 1-.798.91ZM10.548 23.017c-1.525 0-2.814-1.29-2.814-2.814 0-1.526 1.29-2.814 2.814-2.814 1.526 0 2.815 1.288 2.815 2.814 0 1.525-1.29 2.814-2.815 2.814Zm0-4.02c-.642 0-1.206.563-1.206 1.206 0 .642.564 1.206 1.206 1.206.643 0 1.206-.564 1.206-1.206 0-.643-.564-1.206-1.206-1.206ZM18.185 23.017c-1.525 0-2.814-1.29-2.814-2.814 0-1.526 1.289-2.814 2.814-2.814 1.525 0 2.814 1.288 2.814 2.814 0 1.525-1.289 2.814-2.814 2.814Zm0-4.02c-.642 0-1.206.563-1.206 1.206 0 .642.564 1.206 1.206 1.206.643 0 1.206-.564 1.206-1.206 0-.643-.564-1.206-1.206-1.206Z"/><path fill="#fff" d="M8.523 16.65a2.408 2.408 0 0 1-2.387-2.093.804.804 0 1 1 1.594-.212.81.81 0 0 0 .867.695.804.804 0 0 1 .14 1.602 2.773 2.773 0 0 1-.214.008Z"/></svg></button>
                        </div>
                     </div>
                     <div class="item__description">
                        <p>Діагональ екрану - 16,6”/ Роздільна здатність екрану - 1920х1080/ Сенсорний екран - матова / Частота оновлення екрану - 60 Гц</p>
                     </div>
                  </div>
               </div>
               <div class="catalog__col">
                  <div class="item">
                     <div class="item__image">
                        <a href="#"><figure class="bg-contain" style="background-image: url(assets/img/img-item.jpg);"></figure></a>
                        <div class="item__label bg-accent c-primary-inverted">Знижка</div>
                        <div class="item__actions">
                           <div class="item__action item__action_comparison"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 22 22"><path fill="#02227A" fill-rule="evenodd" d="M4.47 7.627V4.47H2.705v10.587a3.53 3.53 0 0 0 3.53 3.529h12.35V16.82H6.236c-.861 0-1.577-.616-1.734-1.43L8 11.891l2.905 2.905a.881.881 0 0 0 1.247 0l4.412-4.411-1.248-1.248-3.787 3.788-2.906-2.905a.881.881 0 0 0-1.247 0L4.47 12.926v-2.803L7.97 6.62l2.001 2.001a.882.882 0 0 0 1.244.004l3.837-3.795 2.027 2.027 1.247-1.248-2.647-2.646a.882.882 0 0 0-1.244-.004L10.6 6.754 8.595 4.749a.881.881 0 0 0-1.248 0L4.47 7.627Z" clip-rule="evenodd"/></svg></div>
                           <div class="item__action item__action_wishlist"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="none" viewBox="0 0 23 23"><g clip-path="url(.a1245dfa123asd123asd123)"><path fill="#02227A" d="M20.81 4.908c-1.207-1.606-2.623-2.43-4.208-2.448h-.053c-2.296 0-4.273 1.723-5.193 2.68-.921-.957-2.898-2.68-5.194-2.68H6.11c-1.586.018-3 .842-4.228 2.476a5.767 5.767 0 0 0 .738 7.341l8.247 8.122a.698.698 0 0 0 .977 0l8.247-8.122a5.775 5.775 0 0 0 .719-7.369Zm-1.697 6.375-7.757 7.643-7.757-7.643a4.364 4.364 0 0 1-.58-5.537c.93-1.24 1.974-1.876 3.104-1.89h.04c2.429 0 4.624 2.737 4.646 2.765a.723.723 0 0 0 1.095 0c.023-.028 2.233-2.827 4.686-2.766a3.993 3.993 0 0 1 3.084 1.863 4.37 4.37 0 0 1-.561 5.565Z"/></g><defs><clipPath class="a1245dfa123asd123asd123"><path fill="#fff" d="M.191.367h22.326v22.326H.191z"/></clipPath></defs></svg></div>
                        </div>
                        <div class="item__plans">
                           <div class="item__plan">
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-privat.png">
                              <span>5</span>
                           </div>
                           <div class="item__plan">
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-mono.png">
                              <span>6</span>
                           </div>
                           <div class="item__plan item__plan_dark">
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-binance.png">
                           </div>
                        </div>
                     </div>
                     <div class="item__body">
                        <a href="#"><p class="item__title">Материнська плата Asus ROG CROSSHAIR X670E EXTREME (sAM5, AMD X670, E-ATX)</p></a>
                        <div class="item__stats">
                           <div class="item__rating">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.asd123fdsaasd123ad)"><path fill="#D8D8D8" d="M14.992 6.367a.75.75 0 0 0-.647-.516l-4.078-.37-1.612-3.774a.751.751 0 0 0-1.381 0L5.662 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.909 4.004a.75.75 0 0 0 1.117.811l3.517-2.102 3.517 2.102a.75.75 0 0 0 1.117-.811l-.909-4.004 3.082-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="asd123fdsaasd123ad"><path fill="#fff" d="M.9.948h14.128v14.128H.9z"/></clipPath></defs></svg>
                           </div>
                           <div class="item__comments">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><path fill="#C7ACFB" d="M13.48 3.086C12.526 2 10.48 1.333 8 1.333c-2.48 0-4.527.667-5.48 1.753-1.573 1.827-1.573 6.667 0 8.494.316.342.688.628 1.1.846l.22 1.334a1.334 1.334 0 0 0 .787 1.006c.166.071.345.108.526.107.262.008.52-.064.74-.207l2-1.333H8c1.947 0 4.367-.46 5.486-1.747 1.567-1.833 1.567-6.673-.006-8.5ZM10.4 7.033l-1.013.807a.26.26 0 0 0-.087.286l.46 1.54a.267.267 0 0 1-.413.294L8.16 9.066a.28.28 0 0 0-.32 0l-1.173.894a.267.267 0 0 1-.414-.294l.46-1.54a.26.26 0 0 0-.086-.286L5.6 7.033a.273.273 0 0 1 .167-.48h1.16a.267.267 0 0 0 .246-.16l.58-1.333a.267.267 0 0 1 .494 0l.58 1.333a.267.267 0 0 0 .246.16h1.16a.273.273 0 0 1 .167.48Z"/><circle cx="8" cy="8" r="4" fill="#C7ACFB"/></svg>
                              15 відгуків
                           </div>
                        </div>
                        <div class="item__bottom">
                           <p class="item__price">9 087 ₴ <del>100 999 ₴</del></p>
                           <button class="item__btn"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="none" viewBox="0 0 27 27"><path fill="#fff" d="M21.22 15.546a.804.804 0 0 1-.07-1.605.804.804 0 1 1 1.596.196 1.617 1.617 0 0 1-1.527 1.409Z"/><path fill="#fff" d="M8.159 16.689a.804.804 0 0 1-.07-1.606l13.059-1.142a.804.804 0 0 1 .14 1.602L8.229 16.685a.797.797 0 0 1-.07.004Z"/><path fill="#fff" d="M21.948 14.843a.804.804 0 0 1-.8-.902l.976-7.92a.804.804 0 0 1 1.596.197l-.975 7.92a.804.804 0 0 1-.797.705Z"/><path fill="#fff" d="M6.018 8.401a.804.804 0 0 1-.07-1.605l16.904-1.48a.804.804 0 0 1 .14 1.602L6.09 8.399a.84.84 0 0 1-.071.003Z"/><path fill="#fff" d="M5.809 6.83a.804.804 0 0 1-.796-.698.804.804 0 0 1 0-1.609c.802 0 1.487.6 1.594 1.396a.805.805 0 0 1-.798.91Z"/><path fill="#fff" d="M5.013 6.132H3.626a.804.804 0 0 1 0-1.608h1.387a.804.804 0 0 1 0 1.608Z"/><path fill="#fff" d="M6.932 15.254a.803.803 0 0 1-.795-.698L5.013 6.132a.804.804 0 1 1 1.594-.212l1.123 8.424a.804.804 0 0 1-.798.91ZM10.548 23.017c-1.525 0-2.814-1.29-2.814-2.814 0-1.526 1.29-2.814 2.814-2.814 1.526 0 2.815 1.288 2.815 2.814 0 1.525-1.29 2.814-2.815 2.814Zm0-4.02c-.642 0-1.206.563-1.206 1.206 0 .642.564 1.206 1.206 1.206.643 0 1.206-.564 1.206-1.206 0-.643-.564-1.206-1.206-1.206ZM18.185 23.017c-1.525 0-2.814-1.29-2.814-2.814 0-1.526 1.289-2.814 2.814-2.814 1.525 0 2.814 1.288 2.814 2.814 0 1.525-1.289 2.814-2.814 2.814Zm0-4.02c-.642 0-1.206.563-1.206 1.206 0 .642.564 1.206 1.206 1.206.643 0 1.206-.564 1.206-1.206 0-.643-.564-1.206-1.206-1.206Z"/><path fill="#fff" d="M8.523 16.65a2.408 2.408 0 0 1-2.387-2.093.804.804 0 1 1 1.594-.212.81.81 0 0 0 .867.695.804.804 0 0 1 .14 1.602 2.773 2.773 0 0 1-.214.008Z"/></svg></button>
                        </div>
                     </div>
                     <div class="item__description">
                        <p>Діагональ екрану - 16,6”/ Роздільна здатність екрану - 1920х1080/ Сенсорний екран - матова / Частота оновлення екрану - 60 Гц</p>
                     </div>
                  </div>
               </div>
               <div class="catalog__col">
                  <div class="item">
                     <div class="item__image">
                        <a href="#"><figure class="bg-contain" style="background-image: url(assets/img/img-item.jpg);"></figure></a>
                        <div class="item__label bg-neutral c-primary-inverted">Хіт продажу</div>
                        <div class="item__actions">
                           <div class="item__action item__action_comparison"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 22 22"><path fill="#02227A" fill-rule="evenodd" d="M4.47 7.627V4.47H2.705v10.587a3.53 3.53 0 0 0 3.53 3.529h12.35V16.82H6.236c-.861 0-1.577-.616-1.734-1.43L8 11.891l2.905 2.905a.881.881 0 0 0 1.247 0l4.412-4.411-1.248-1.248-3.787 3.788-2.906-2.905a.881.881 0 0 0-1.247 0L4.47 12.926v-2.803L7.97 6.62l2.001 2.001a.882.882 0 0 0 1.244.004l3.837-3.795 2.027 2.027 1.247-1.248-2.647-2.646a.882.882 0 0 0-1.244-.004L10.6 6.754 8.595 4.749a.881.881 0 0 0-1.248 0L4.47 7.627Z" clip-rule="evenodd"/></svg></div>
                           <div class="item__action item__action_wishlist"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="none" viewBox="0 0 23 23"><g clip-path="url(.a1245dfa123asd123asd123)"><path fill="#02227A" d="M20.81 4.908c-1.207-1.606-2.623-2.43-4.208-2.448h-.053c-2.296 0-4.273 1.723-5.193 2.68-.921-.957-2.898-2.68-5.194-2.68H6.11c-1.586.018-3 .842-4.228 2.476a5.767 5.767 0 0 0 .738 7.341l8.247 8.122a.698.698 0 0 0 .977 0l8.247-8.122a5.775 5.775 0 0 0 .719-7.369Zm-1.697 6.375-7.757 7.643-7.757-7.643a4.364 4.364 0 0 1-.58-5.537c.93-1.24 1.974-1.876 3.104-1.89h.04c2.429 0 4.624 2.737 4.646 2.765a.723.723 0 0 0 1.095 0c.023-.028 2.233-2.827 4.686-2.766a3.993 3.993 0 0 1 3.084 1.863 4.37 4.37 0 0 1-.561 5.565Z"/></g><defs><clipPath class="a1245dfa123asd123asd123"><path fill="#fff" d="M.191.367h22.326v22.326H.191z"/></clipPath></defs></svg></div>
                        </div>
                        <div class="item__plans">
                           <div class="item__plan">
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-privat.png">
                              <span>5</span>
                           </div>
                           <div class="item__plan">
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-mono.png">
                              <span>6</span>
                           </div>
                        </div>
                     </div>
                     <div class="item__body">
                        <a href="#"><p class="item__title">Монітор Asus 15.6&quot: MB16AWP IPS Black (90LM07l1-BO1370)</p></a>
                        <div class="item__stats">
                           <div class="item__rating">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.asd123fdsaasd123ad)"><path fill="#D8D8D8" d="M14.992 6.367a.75.75 0 0 0-.647-.516l-4.078-.37-1.612-3.774a.751.751 0 0 0-1.381 0L5.662 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.909 4.004a.75.75 0 0 0 1.117.811l3.517-2.102 3.517 2.102a.75.75 0 0 0 1.117-.811l-.909-4.004 3.082-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="asd123fdsaasd123ad"><path fill="#fff" d="M.9.948h14.128v14.128H.9z"/></clipPath></defs></svg>
                           </div>
                           <div class="item__comments">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><path fill="#C7ACFB" d="M13.48 3.086C12.526 2 10.48 1.333 8 1.333c-2.48 0-4.527.667-5.48 1.753-1.573 1.827-1.573 6.667 0 8.494.316.342.688.628 1.1.846l.22 1.334a1.334 1.334 0 0 0 .787 1.006c.166.071.345.108.526.107.262.008.52-.064.74-.207l2-1.333H8c1.947 0 4.367-.46 5.486-1.747 1.567-1.833 1.567-6.673-.006-8.5ZM10.4 7.033l-1.013.807a.26.26 0 0 0-.087.286l.46 1.54a.267.267 0 0 1-.413.294L8.16 9.066a.28.28 0 0 0-.32 0l-1.173.894a.267.267 0 0 1-.414-.294l.46-1.54a.26.26 0 0 0-.086-.286L5.6 7.033a.273.273 0 0 1 .167-.48h1.16a.267.267 0 0 0 .246-.16l.58-1.333a.267.267 0 0 1 .494 0l.58 1.333a.267.267 0 0 0 .246.16h1.16a.273.273 0 0 1 .167.48Z"/><circle cx="8" cy="8" r="4" fill="#C7ACFB"/></svg>
                              15 відгуків
                           </div>
                        </div>
                        <div class="item__bottom">
                           <p class="item__price">9 087 ₴</p>
                           <button class="item__btn"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="none" viewBox="0 0 27 27"><path fill="#fff" d="M21.22 15.546a.804.804 0 0 1-.07-1.605.804.804 0 1 1 1.596.196 1.617 1.617 0 0 1-1.527 1.409Z"/><path fill="#fff" d="M8.159 16.689a.804.804 0 0 1-.07-1.606l13.059-1.142a.804.804 0 0 1 .14 1.602L8.229 16.685a.797.797 0 0 1-.07.004Z"/><path fill="#fff" d="M21.948 14.843a.804.804 0 0 1-.8-.902l.976-7.92a.804.804 0 0 1 1.596.197l-.975 7.92a.804.804 0 0 1-.797.705Z"/><path fill="#fff" d="M6.018 8.401a.804.804 0 0 1-.07-1.605l16.904-1.48a.804.804 0 0 1 .14 1.602L6.09 8.399a.84.84 0 0 1-.071.003Z"/><path fill="#fff" d="M5.809 6.83a.804.804 0 0 1-.796-.698.804.804 0 0 1 0-1.609c.802 0 1.487.6 1.594 1.396a.805.805 0 0 1-.798.91Z"/><path fill="#fff" d="M5.013 6.132H3.626a.804.804 0 0 1 0-1.608h1.387a.804.804 0 0 1 0 1.608Z"/><path fill="#fff" d="M6.932 15.254a.803.803 0 0 1-.795-.698L5.013 6.132a.804.804 0 1 1 1.594-.212l1.123 8.424a.804.804 0 0 1-.798.91ZM10.548 23.017c-1.525 0-2.814-1.29-2.814-2.814 0-1.526 1.29-2.814 2.814-2.814 1.526 0 2.815 1.288 2.815 2.814 0 1.525-1.29 2.814-2.815 2.814Zm0-4.02c-.642 0-1.206.563-1.206 1.206 0 .642.564 1.206 1.206 1.206.643 0 1.206-.564 1.206-1.206 0-.643-.564-1.206-1.206-1.206ZM18.185 23.017c-1.525 0-2.814-1.29-2.814-2.814 0-1.526 1.289-2.814 2.814-2.814 1.525 0 2.814 1.288 2.814 2.814 0 1.525-1.289 2.814-2.814 2.814Zm0-4.02c-.642 0-1.206.563-1.206 1.206 0 .642.564 1.206 1.206 1.206.643 0 1.206-.564 1.206-1.206 0-.643-.564-1.206-1.206-1.206Z"/><path fill="#fff" d="M8.523 16.65a2.408 2.408 0 0 1-2.387-2.093.804.804 0 1 1 1.594-.212.81.81 0 0 0 .867.695.804.804 0 0 1 .14 1.602 2.773 2.773 0 0 1-.214.008Z"/></svg></button>
                        </div>
                     </div>
                     <div class="item__description">
                        <p>Діагональ екрану - 16,6”/ Роздільна здатність екрану - 1920х1080/ Сенсорний екран - матова / Частота оновлення екрану - 60 Гц</p>
                     </div>
                  </div>
               </div>
               <div class="catalog__col">
                  <div class="item">
                     <div class="item__image">
                        <a href="#"><figure class="bg-contain" style="background-image: url(assets/img/img-item.jpg);"></figure></a>
                        <div class="item__label bg-neutral c-primary-inverted">Акція</div>
                        <div class="item__actions">
                           <div class="item__action item__action_comparison item__action_active"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 22 22"><path fill="#02227A" fill-rule="evenodd" d="M4.47 7.627V4.47H2.705v10.587a3.53 3.53 0 0 0 3.53 3.529h12.35V16.82H6.236c-.861 0-1.577-.616-1.734-1.43L8 11.891l2.905 2.905a.881.881 0 0 0 1.247 0l4.412-4.411-1.248-1.248-3.787 3.788-2.906-2.905a.881.881 0 0 0-1.247 0L4.47 12.926v-2.803L7.97 6.62l2.001 2.001a.882.882 0 0 0 1.244.004l3.837-3.795 2.027 2.027 1.247-1.248-2.647-2.646a.882.882 0 0 0-1.244-.004L10.6 6.754 8.595 4.749a.881.881 0 0 0-1.248 0L4.47 7.627Z" clip-rule="evenodd"/></svg></div>
                           <div class="item__action item__action_wishlist item__action_active"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="none" viewBox="0 0 23 23"><g clip-path="url(.a1245dfa123asd123asd123)"><path fill="#02227A" d="M20.81 4.908c-1.207-1.606-2.623-2.43-4.208-2.448h-.053c-2.296 0-4.273 1.723-5.193 2.68-.921-.957-2.898-2.68-5.194-2.68H6.11c-1.586.018-3 .842-4.228 2.476a5.767 5.767 0 0 0 .738 7.341l8.247 8.122a.698.698 0 0 0 .977 0l8.247-8.122a5.775 5.775 0 0 0 .719-7.369Zm-1.697 6.375-7.757 7.643-7.757-7.643a4.364 4.364 0 0 1-.58-5.537c.93-1.24 1.974-1.876 3.104-1.89h.04c2.429 0 4.624 2.737 4.646 2.765a.723.723 0 0 0 1.095 0c.023-.028 2.233-2.827 4.686-2.766a3.993 3.993 0 0 1 3.084 1.863 4.37 4.37 0 0 1-.561 5.565Z"/></g><defs><clipPath class="a1245dfa123asd123asd123"><path fill="#fff" d="M.191.367h22.326v22.326H.191z"/></clipPath></defs></svg></div>
                        </div>
                        <div class="item__plans">
                           <div class="item__plan">
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-privat.png">
                              <span>5</span>
                           </div>
                           <div class="item__plan">
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-mono.png">
                              <span>6</span>
                           </div>
                           <div class="item__plan item__plan_dark">
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-binance.png">
                           </div>
                        </div>
                     </div>
                     <div class="item__body">
                        <a href="#"><p class="item__title">Материнська плата Asus ROG CROSSHAIR X670E EXTREME (sAM5, AMD X670, E-ATX)</p></a>
                        <div class="item__stats">
                           <div class="item__rating">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.asd123fdsaasd123ad)"><path fill="#D8D8D8" d="M14.992 6.367a.75.75 0 0 0-.647-.516l-4.078-.37-1.612-3.774a.751.751 0 0 0-1.381 0L5.662 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.909 4.004a.75.75 0 0 0 1.117.811l3.517-2.102 3.517 2.102a.75.75 0 0 0 1.117-.811l-.909-4.004 3.082-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="asd123fdsaasd123ad"><path fill="#fff" d="M.9.948h14.128v14.128H.9z"/></clipPath></defs></svg>
                           </div>
                           <div class="item__comments">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><path fill="#C7ACFB" d="M13.48 3.086C12.526 2 10.48 1.333 8 1.333c-2.48 0-4.527.667-5.48 1.753-1.573 1.827-1.573 6.667 0 8.494.316.342.688.628 1.1.846l.22 1.334a1.334 1.334 0 0 0 .787 1.006c.166.071.345.108.526.107.262.008.52-.064.74-.207l2-1.333H8c1.947 0 4.367-.46 5.486-1.747 1.567-1.833 1.567-6.673-.006-8.5ZM10.4 7.033l-1.013.807a.26.26 0 0 0-.087.286l.46 1.54a.267.267 0 0 1-.413.294L8.16 9.066a.28.28 0 0 0-.32 0l-1.173.894a.267.267 0 0 1-.414-.294l.46-1.54a.26.26 0 0 0-.086-.286L5.6 7.033a.273.273 0 0 1 .167-.48h1.16a.267.267 0 0 0 .246-.16l.58-1.333a.267.267 0 0 1 .494 0l.58 1.333a.267.267 0 0 0 .246.16h1.16a.273.273 0 0 1 .167.48Z"/><circle cx="8" cy="8" r="4" fill="#C7ACFB"/></svg>
                              15 відгуків
                           </div>
                        </div>
                        <div class="item__bottom">
                           <p class="item__price">9 087 ₴ <del>100 999 ₴</del></p>
                           <button class="item__btn item__btn_active"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="none" viewBox="0 0 27 27"><path fill="#fff" d="M21.22 15.546a.804.804 0 0 1-.07-1.605.804.804 0 1 1 1.596.196 1.617 1.617 0 0 1-1.527 1.409Z"/><path fill="#fff" d="M8.159 16.689a.804.804 0 0 1-.07-1.606l13.059-1.142a.804.804 0 0 1 .14 1.602L8.229 16.685a.797.797 0 0 1-.07.004Z"/><path fill="#fff" d="M21.948 14.843a.804.804 0 0 1-.8-.902l.976-7.92a.804.804 0 0 1 1.596.197l-.975 7.92a.804.804 0 0 1-.797.705Z"/><path fill="#fff" d="M6.018 8.401a.804.804 0 0 1-.07-1.605l16.904-1.48a.804.804 0 0 1 .14 1.602L6.09 8.399a.84.84 0 0 1-.071.003Z"/><path fill="#fff" d="M5.809 6.83a.804.804 0 0 1-.796-.698.804.804 0 0 1 0-1.609c.802 0 1.487.6 1.594 1.396a.805.805 0 0 1-.798.91Z"/><path fill="#fff" d="M5.013 6.132H3.626a.804.804 0 0 1 0-1.608h1.387a.804.804 0 0 1 0 1.608Z"/><path fill="#fff" d="M6.932 15.254a.803.803 0 0 1-.795-.698L5.013 6.132a.804.804 0 1 1 1.594-.212l1.123 8.424a.804.804 0 0 1-.798.91ZM10.548 23.017c-1.525 0-2.814-1.29-2.814-2.814 0-1.526 1.29-2.814 2.814-2.814 1.526 0 2.815 1.288 2.815 2.814 0 1.525-1.29 2.814-2.815 2.814Zm0-4.02c-.642 0-1.206.563-1.206 1.206 0 .642.564 1.206 1.206 1.206.643 0 1.206-.564 1.206-1.206 0-.643-.564-1.206-1.206-1.206ZM18.185 23.017c-1.525 0-2.814-1.29-2.814-2.814 0-1.526 1.289-2.814 2.814-2.814 1.525 0 2.814 1.288 2.814 2.814 0 1.525-1.289 2.814-2.814 2.814Zm0-4.02c-.642 0-1.206.563-1.206 1.206 0 .642.564 1.206 1.206 1.206.643 0 1.206-.564 1.206-1.206 0-.643-.564-1.206-1.206-1.206Z"/><path fill="#fff" d="M8.523 16.65a2.408 2.408 0 0 1-2.387-2.093.804.804 0 1 1 1.594-.212.81.81 0 0 0 .867.695.804.804 0 0 1 .14 1.602 2.773 2.773 0 0 1-.214.008Z"/></svg></button>
                        </div>
                     </div>
                     <div class="item__description">
                        <p>Діагональ екрану - 16,6”/ Роздільна здатність екрану - 1920х1080/ Сенсорний екран - матова / Частота оновлення екрану - 60 Гц</p>
                     </div>
                  </div>
               </div>
               <div class="catalog__col">
                  <div class="item">
                     <div class="item__image">
                        <a href="#"><figure class="bg-contain" style="background-image: url(assets/img/img-item.jpg);"></figure></a>
                        <div class="item__label bg-neutral-inverted c-primary-inverted">Новинка</div>
                        <div class="item__actions">
                           <div class="item__action item__action_comparison"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 22 22"><path fill="#02227A" fill-rule="evenodd" d="M4.47 7.627V4.47H2.705v10.587a3.53 3.53 0 0 0 3.53 3.529h12.35V16.82H6.236c-.861 0-1.577-.616-1.734-1.43L8 11.891l2.905 2.905a.881.881 0 0 0 1.247 0l4.412-4.411-1.248-1.248-3.787 3.788-2.906-2.905a.881.881 0 0 0-1.247 0L4.47 12.926v-2.803L7.97 6.62l2.001 2.001a.882.882 0 0 0 1.244.004l3.837-3.795 2.027 2.027 1.247-1.248-2.647-2.646a.882.882 0 0 0-1.244-.004L10.6 6.754 8.595 4.749a.881.881 0 0 0-1.248 0L4.47 7.627Z" clip-rule="evenodd"/></svg></div>
                           <div class="item__action item__action_wishlist"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="none" viewBox="0 0 23 23"><g clip-path="url(.a1245dfa123asd123asd123)"><path fill="#02227A" d="M20.81 4.908c-1.207-1.606-2.623-2.43-4.208-2.448h-.053c-2.296 0-4.273 1.723-5.193 2.68-.921-.957-2.898-2.68-5.194-2.68H6.11c-1.586.018-3 .842-4.228 2.476a5.767 5.767 0 0 0 .738 7.341l8.247 8.122a.698.698 0 0 0 .977 0l8.247-8.122a5.775 5.775 0 0 0 .719-7.369Zm-1.697 6.375-7.757 7.643-7.757-7.643a4.364 4.364 0 0 1-.58-5.537c.93-1.24 1.974-1.876 3.104-1.89h.04c2.429 0 4.624 2.737 4.646 2.765a.723.723 0 0 0 1.095 0c.023-.028 2.233-2.827 4.686-2.766a3.993 3.993 0 0 1 3.084 1.863 4.37 4.37 0 0 1-.561 5.565Z"/></g><defs><clipPath class="a1245dfa123asd123asd123"><path fill="#fff" d="M.191.367h22.326v22.326H.191z"/></clipPath></defs></svg></div>
                        </div>
                        <div class="item__plans">
                           <div class="item__plan">
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-privat.png">
                              <span>5</span>
                           </div>
                           <div class="item__plan">
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-mono.png">
                              <span>6</span>
                           </div>
                           <div class="item__plan item__plan_dark">
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-binance.png">
                           </div>
                        </div>
                     </div>
                     <div class="item__body">
                        <a href="#"><p class="item__title">Монітор Asus 15.6&quot: MB16AWP IPS Black (90LM07l1-BO1370)</p></a>
                        <div class="item__stats">
                           <div class="item__rating">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.asd123fdsaasd123ad)"><path fill="#D8D8D8" d="M14.992 6.367a.75.75 0 0 0-.647-.516l-4.078-.37-1.612-3.774a.751.751 0 0 0-1.381 0L5.662 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.909 4.004a.75.75 0 0 0 1.117.811l3.517-2.102 3.517 2.102a.75.75 0 0 0 1.117-.811l-.909-4.004 3.082-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="asd123fdsaasd123ad"><path fill="#fff" d="M.9.948h14.128v14.128H.9z"/></clipPath></defs></svg>
                           </div>
                           <div class="item__comments">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><path fill="#C7ACFB" d="M13.48 3.086C12.526 2 10.48 1.333 8 1.333c-2.48 0-4.527.667-5.48 1.753-1.573 1.827-1.573 6.667 0 8.494.316.342.688.628 1.1.846l.22 1.334a1.334 1.334 0 0 0 .787 1.006c.166.071.345.108.526.107.262.008.52-.064.74-.207l2-1.333H8c1.947 0 4.367-.46 5.486-1.747 1.567-1.833 1.567-6.673-.006-8.5ZM10.4 7.033l-1.013.807a.26.26 0 0 0-.087.286l.46 1.54a.267.267 0 0 1-.413.294L8.16 9.066a.28.28 0 0 0-.32 0l-1.173.894a.267.267 0 0 1-.414-.294l.46-1.54a.26.26 0 0 0-.086-.286L5.6 7.033a.273.273 0 0 1 .167-.48h1.16a.267.267 0 0 0 .246-.16l.58-1.333a.267.267 0 0 1 .494 0l.58 1.333a.267.267 0 0 0 .246.16h1.16a.273.273 0 0 1 .167.48Z"/><circle cx="8" cy="8" r="4" fill="#C7ACFB"/></svg>
                              15 відгуків
                           </div>
                        </div>
                        <div class="item__bottom">
                           <p class="item__price">9 087 ₴ <del>100 999 ₴</del></p>
                           <button class="item__btn"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="none" viewBox="0 0 27 27"><path fill="#fff" d="M21.22 15.546a.804.804 0 0 1-.07-1.605.804.804 0 1 1 1.596.196 1.617 1.617 0 0 1-1.527 1.409Z"/><path fill="#fff" d="M8.159 16.689a.804.804 0 0 1-.07-1.606l13.059-1.142a.804.804 0 0 1 .14 1.602L8.229 16.685a.797.797 0 0 1-.07.004Z"/><path fill="#fff" d="M21.948 14.843a.804.804 0 0 1-.8-.902l.976-7.92a.804.804 0 0 1 1.596.197l-.975 7.92a.804.804 0 0 1-.797.705Z"/><path fill="#fff" d="M6.018 8.401a.804.804 0 0 1-.07-1.605l16.904-1.48a.804.804 0 0 1 .14 1.602L6.09 8.399a.84.84 0 0 1-.071.003Z"/><path fill="#fff" d="M5.809 6.83a.804.804 0 0 1-.796-.698.804.804 0 0 1 0-1.609c.802 0 1.487.6 1.594 1.396a.805.805 0 0 1-.798.91Z"/><path fill="#fff" d="M5.013 6.132H3.626a.804.804 0 0 1 0-1.608h1.387a.804.804 0 0 1 0 1.608Z"/><path fill="#fff" d="M6.932 15.254a.803.803 0 0 1-.795-.698L5.013 6.132a.804.804 0 1 1 1.594-.212l1.123 8.424a.804.804 0 0 1-.798.91ZM10.548 23.017c-1.525 0-2.814-1.29-2.814-2.814 0-1.526 1.29-2.814 2.814-2.814 1.526 0 2.815 1.288 2.815 2.814 0 1.525-1.29 2.814-2.815 2.814Zm0-4.02c-.642 0-1.206.563-1.206 1.206 0 .642.564 1.206 1.206 1.206.643 0 1.206-.564 1.206-1.206 0-.643-.564-1.206-1.206-1.206ZM18.185 23.017c-1.525 0-2.814-1.29-2.814-2.814 0-1.526 1.289-2.814 2.814-2.814 1.525 0 2.814 1.288 2.814 2.814 0 1.525-1.289 2.814-2.814 2.814Zm0-4.02c-.642 0-1.206.563-1.206 1.206 0 .642.564 1.206 1.206 1.206.643 0 1.206-.564 1.206-1.206 0-.643-.564-1.206-1.206-1.206Z"/><path fill="#fff" d="M8.523 16.65a2.408 2.408 0 0 1-2.387-2.093.804.804 0 1 1 1.594-.212.81.81 0 0 0 .867.695.804.804 0 0 1 .14 1.602 2.773 2.773 0 0 1-.214.008Z"/></svg></button>
                        </div>
                     </div>
                     <div class="item__description">
                        <p>Діагональ екрану - 16,6”/ Роздільна здатність екрану - 1920х1080/ Сенсорний екран - матова / Частота оновлення екрану - 60 Гц</p>
                     </div>
                  </div>
               </div>
               <div class="catalog__col">
                  <div class="item">
                     <div class="item__image">
                        <a href="#"><figure class="bg-contain" style="background-image: url(assets/img/img-item.jpg);"></figure></a>
                        <div class="item__label bg-accent c-primary-inverted">Знижка</div>
                        <div class="item__actions">
                           <div class="item__action item__action_comparison"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 22 22"><path fill="#02227A" fill-rule="evenodd" d="M4.47 7.627V4.47H2.705v10.587a3.53 3.53 0 0 0 3.53 3.529h12.35V16.82H6.236c-.861 0-1.577-.616-1.734-1.43L8 11.891l2.905 2.905a.881.881 0 0 0 1.247 0l4.412-4.411-1.248-1.248-3.787 3.788-2.906-2.905a.881.881 0 0 0-1.247 0L4.47 12.926v-2.803L7.97 6.62l2.001 2.001a.882.882 0 0 0 1.244.004l3.837-3.795 2.027 2.027 1.247-1.248-2.647-2.646a.882.882 0 0 0-1.244-.004L10.6 6.754 8.595 4.749a.881.881 0 0 0-1.248 0L4.47 7.627Z" clip-rule="evenodd"/></svg></div>
                           <div class="item__action item__action_wishlist"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="none" viewBox="0 0 23 23"><g clip-path="url(.a1245dfa123asd123asd123)"><path fill="#02227A" d="M20.81 4.908c-1.207-1.606-2.623-2.43-4.208-2.448h-.053c-2.296 0-4.273 1.723-5.193 2.68-.921-.957-2.898-2.68-5.194-2.68H6.11c-1.586.018-3 .842-4.228 2.476a5.767 5.767 0 0 0 .738 7.341l8.247 8.122a.698.698 0 0 0 .977 0l8.247-8.122a5.775 5.775 0 0 0 .719-7.369Zm-1.697 6.375-7.757 7.643-7.757-7.643a4.364 4.364 0 0 1-.58-5.537c.93-1.24 1.974-1.876 3.104-1.89h.04c2.429 0 4.624 2.737 4.646 2.765a.723.723 0 0 0 1.095 0c.023-.028 2.233-2.827 4.686-2.766a3.993 3.993 0 0 1 3.084 1.863 4.37 4.37 0 0 1-.561 5.565Z"/></g><defs><clipPath class="a1245dfa123asd123asd123"><path fill="#fff" d="M.191.367h22.326v22.326H.191z"/></clipPath></defs></svg></div>
                        </div>
                        <div class="item__plans">
                           <div class="item__plan">
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-privat.png">
                              <span>5</span>
                           </div>
                           <div class="item__plan">
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-mono.png">
                              <span>6</span>
                           </div>
                           <div class="item__plan item__plan_dark">
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-binance.png">
                           </div>
                        </div>
                     </div>
                     <div class="item__body">
                        <a href="#"><p class="item__title">Материнська плата Asus ROG CROSSHAIR X670E EXTREME (sAM5, AMD X670, E-ATX)</p></a>
                        <div class="item__stats">
                           <div class="item__rating">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.asd123fdsaasd123ad)"><path fill="#D8D8D8" d="M14.992 6.367a.75.75 0 0 0-.647-.516l-4.078-.37-1.612-3.774a.751.751 0 0 0-1.381 0L5.662 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.909 4.004a.75.75 0 0 0 1.117.811l3.517-2.102 3.517 2.102a.75.75 0 0 0 1.117-.811l-.909-4.004 3.082-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="asd123fdsaasd123ad"><path fill="#fff" d="M.9.948h14.128v14.128H.9z"/></clipPath></defs></svg>
                           </div>
                           <div class="item__comments">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><path fill="#C7ACFB" d="M13.48 3.086C12.526 2 10.48 1.333 8 1.333c-2.48 0-4.527.667-5.48 1.753-1.573 1.827-1.573 6.667 0 8.494.316.342.688.628 1.1.846l.22 1.334a1.334 1.334 0 0 0 .787 1.006c.166.071.345.108.526.107.262.008.52-.064.74-.207l2-1.333H8c1.947 0 4.367-.46 5.486-1.747 1.567-1.833 1.567-6.673-.006-8.5ZM10.4 7.033l-1.013.807a.26.26 0 0 0-.087.286l.46 1.54a.267.267 0 0 1-.413.294L8.16 9.066a.28.28 0 0 0-.32 0l-1.173.894a.267.267 0 0 1-.414-.294l.46-1.54a.26.26 0 0 0-.086-.286L5.6 7.033a.273.273 0 0 1 .167-.48h1.16a.267.267 0 0 0 .246-.16l.58-1.333a.267.267 0 0 1 .494 0l.58 1.333a.267.267 0 0 0 .246.16h1.16a.273.273 0 0 1 .167.48Z"/><circle cx="8" cy="8" r="4" fill="#C7ACFB"/></svg>
                              15 відгуків
                           </div>
                        </div>
                        <div class="item__bottom">
                           <p class="item__price">9 087 ₴ <del>100 999 ₴</del></p>
                           <button class="item__btn"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="none" viewBox="0 0 27 27"><path fill="#fff" d="M21.22 15.546a.804.804 0 0 1-.07-1.605.804.804 0 1 1 1.596.196 1.617 1.617 0 0 1-1.527 1.409Z"/><path fill="#fff" d="M8.159 16.689a.804.804 0 0 1-.07-1.606l13.059-1.142a.804.804 0 0 1 .14 1.602L8.229 16.685a.797.797 0 0 1-.07.004Z"/><path fill="#fff" d="M21.948 14.843a.804.804 0 0 1-.8-.902l.976-7.92a.804.804 0 0 1 1.596.197l-.975 7.92a.804.804 0 0 1-.797.705Z"/><path fill="#fff" d="M6.018 8.401a.804.804 0 0 1-.07-1.605l16.904-1.48a.804.804 0 0 1 .14 1.602L6.09 8.399a.84.84 0 0 1-.071.003Z"/><path fill="#fff" d="M5.809 6.83a.804.804 0 0 1-.796-.698.804.804 0 0 1 0-1.609c.802 0 1.487.6 1.594 1.396a.805.805 0 0 1-.798.91Z"/><path fill="#fff" d="M5.013 6.132H3.626a.804.804 0 0 1 0-1.608h1.387a.804.804 0 0 1 0 1.608Z"/><path fill="#fff" d="M6.932 15.254a.803.803 0 0 1-.795-.698L5.013 6.132a.804.804 0 1 1 1.594-.212l1.123 8.424a.804.804 0 0 1-.798.91ZM10.548 23.017c-1.525 0-2.814-1.29-2.814-2.814 0-1.526 1.29-2.814 2.814-2.814 1.526 0 2.815 1.288 2.815 2.814 0 1.525-1.29 2.814-2.815 2.814Zm0-4.02c-.642 0-1.206.563-1.206 1.206 0 .642.564 1.206 1.206 1.206.643 0 1.206-.564 1.206-1.206 0-.643-.564-1.206-1.206-1.206ZM18.185 23.017c-1.525 0-2.814-1.29-2.814-2.814 0-1.526 1.289-2.814 2.814-2.814 1.525 0 2.814 1.288 2.814 2.814 0 1.525-1.289 2.814-2.814 2.814Zm0-4.02c-.642 0-1.206.563-1.206 1.206 0 .642.564 1.206 1.206 1.206.643 0 1.206-.564 1.206-1.206 0-.643-.564-1.206-1.206-1.206Z"/><path fill="#fff" d="M8.523 16.65a2.408 2.408 0 0 1-2.387-2.093.804.804 0 1 1 1.594-.212.81.81 0 0 0 .867.695.804.804 0 0 1 .14 1.602 2.773 2.773 0 0 1-.214.008Z"/></svg></button>
                        </div>
                     </div>
                     <div class="item__description">
                        <p>Діагональ екрану - 16,6”/ Роздільна здатність екрану - 1920х1080/ Сенсорний екран - матова / Частота оновлення екрану - 60 Гц</p>
                     </div>
                  </div>
               </div>
               <div class="catalog__col">
                  <div class="item">
                     <div class="item__image">
                        <a href="#"><figure class="bg-contain" style="background-image: url(assets/img/img-item.jpg);"></figure></a>
                        <div class="item__label bg-neutral c-primary-inverted">Хіт продажу</div>
                        <div class="item__actions">
                           <div class="item__action item__action_comparison"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 22 22"><path fill="#02227A" fill-rule="evenodd" d="M4.47 7.627V4.47H2.705v10.587a3.53 3.53 0 0 0 3.53 3.529h12.35V16.82H6.236c-.861 0-1.577-.616-1.734-1.43L8 11.891l2.905 2.905a.881.881 0 0 0 1.247 0l4.412-4.411-1.248-1.248-3.787 3.788-2.906-2.905a.881.881 0 0 0-1.247 0L4.47 12.926v-2.803L7.97 6.62l2.001 2.001a.882.882 0 0 0 1.244.004l3.837-3.795 2.027 2.027 1.247-1.248-2.647-2.646a.882.882 0 0 0-1.244-.004L10.6 6.754 8.595 4.749a.881.881 0 0 0-1.248 0L4.47 7.627Z" clip-rule="evenodd"/></svg></div>
                           <div class="item__action item__action_wishlist"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="none" viewBox="0 0 23 23"><g clip-path="url(.a1245dfa123asd123asd123)"><path fill="#02227A" d="M20.81 4.908c-1.207-1.606-2.623-2.43-4.208-2.448h-.053c-2.296 0-4.273 1.723-5.193 2.68-.921-.957-2.898-2.68-5.194-2.68H6.11c-1.586.018-3 .842-4.228 2.476a5.767 5.767 0 0 0 .738 7.341l8.247 8.122a.698.698 0 0 0 .977 0l8.247-8.122a5.775 5.775 0 0 0 .719-7.369Zm-1.697 6.375-7.757 7.643-7.757-7.643a4.364 4.364 0 0 1-.58-5.537c.93-1.24 1.974-1.876 3.104-1.89h.04c2.429 0 4.624 2.737 4.646 2.765a.723.723 0 0 0 1.095 0c.023-.028 2.233-2.827 4.686-2.766a3.993 3.993 0 0 1 3.084 1.863 4.37 4.37 0 0 1-.561 5.565Z"/></g><defs><clipPath class="a1245dfa123asd123asd123"><path fill="#fff" d="M.191.367h22.326v22.326H.191z"/></clipPath></defs></svg></div>
                        </div>
                        <div class="item__plans">
                           <div class="item__plan">
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-privat.png">
                              <span>5</span>
                           </div>
                           <div class="item__plan">
                              <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/ico-mono.png">
                              <span>6</span>
                           </div>
                        </div>
                     </div>
                     <div class="item__body">
                        <a href="#"><p class="item__title">Монітор Asus 15.6&quot: MB16AWP IPS Black (90LM07l1-BO1370)</p></a>
                        <div class="item__stats">
                           <div class="item__rating">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.a123asd123asd123)"><path fill="#FFC107" d="M14.98 6.367a.75.75 0 0 0-.647-.516l-4.077-.37-1.613-3.774a.751.751 0 0 0-1.38 0L5.65 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.908 4.004a.75.75 0 0 0 1.116.811l3.518-2.102 3.516 2.102a.751.751 0 0 0 1.117-.811l-.909-4.004 3.083-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="a123asd123asd123"><path fill="#fff" d="M.889.948h14.128v14.128H.889z"/></clipPath></defs></svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><g clip-path="url(.asd123fdsaasd123ad)"><path fill="#D8D8D8" d="M14.992 6.367a.75.75 0 0 0-.647-.516l-4.078-.37-1.612-3.774a.751.751 0 0 0-1.381 0L5.662 5.481l-4.079.37a.75.75 0 0 0-.426 1.314l3.082 2.703-.909 4.004a.75.75 0 0 0 1.117.811l3.517-2.102 3.517 2.102a.75.75 0 0 0 1.117-.811l-.909-4.004 3.082-2.703a.751.751 0 0 0 .22-.798Z"/></g><defs><clipPath class="asd123fdsaasd123ad"><path fill="#fff" d="M.9.948h14.128v14.128H.9z"/></clipPath></defs></svg>
                           </div>
                           <div class="item__comments">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><path fill="#C7ACFB" d="M13.48 3.086C12.526 2 10.48 1.333 8 1.333c-2.48 0-4.527.667-5.48 1.753-1.573 1.827-1.573 6.667 0 8.494.316.342.688.628 1.1.846l.22 1.334a1.334 1.334 0 0 0 .787 1.006c.166.071.345.108.526.107.262.008.52-.064.74-.207l2-1.333H8c1.947 0 4.367-.46 5.486-1.747 1.567-1.833 1.567-6.673-.006-8.5ZM10.4 7.033l-1.013.807a.26.26 0 0 0-.087.286l.46 1.54a.267.267 0 0 1-.413.294L8.16 9.066a.28.28 0 0 0-.32 0l-1.173.894a.267.267 0 0 1-.414-.294l.46-1.54a.26.26 0 0 0-.086-.286L5.6 7.033a.273.273 0 0 1 .167-.48h1.16a.267.267 0 0 0 .246-.16l.58-1.333a.267.267 0 0 1 .494 0l.58 1.333a.267.267 0 0 0 .246.16h1.16a.273.273 0 0 1 .167.48Z"/><circle cx="8" cy="8" r="4" fill="#C7ACFB"/></svg>
                              15 відгуків
                           </div>
                        </div>
                        <div class="item__bottom">
                           <p class="item__price">9 087 ₴</p>
                           <button class="item__btn"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="none" viewBox="0 0 27 27"><path fill="#fff" d="M21.22 15.546a.804.804 0 0 1-.07-1.605.804.804 0 1 1 1.596.196 1.617 1.617 0 0 1-1.527 1.409Z"/><path fill="#fff" d="M8.159 16.689a.804.804 0 0 1-.07-1.606l13.059-1.142a.804.804 0 0 1 .14 1.602L8.229 16.685a.797.797 0 0 1-.07.004Z"/><path fill="#fff" d="M21.948 14.843a.804.804 0 0 1-.8-.902l.976-7.92a.804.804 0 0 1 1.596.197l-.975 7.92a.804.804 0 0 1-.797.705Z"/><path fill="#fff" d="M6.018 8.401a.804.804 0 0 1-.07-1.605l16.904-1.48a.804.804 0 0 1 .14 1.602L6.09 8.399a.84.84 0 0 1-.071.003Z"/><path fill="#fff" d="M5.809 6.83a.804.804 0 0 1-.796-.698.804.804 0 0 1 0-1.609c.802 0 1.487.6 1.594 1.396a.805.805 0 0 1-.798.91Z"/><path fill="#fff" d="M5.013 6.132H3.626a.804.804 0 0 1 0-1.608h1.387a.804.804 0 0 1 0 1.608Z"/><path fill="#fff" d="M6.932 15.254a.803.803 0 0 1-.795-.698L5.013 6.132a.804.804 0 1 1 1.594-.212l1.123 8.424a.804.804 0 0 1-.798.91ZM10.548 23.017c-1.525 0-2.814-1.29-2.814-2.814 0-1.526 1.29-2.814 2.814-2.814 1.526 0 2.815 1.288 2.815 2.814 0 1.525-1.29 2.814-2.815 2.814Zm0-4.02c-.642 0-1.206.563-1.206 1.206 0 .642.564 1.206 1.206 1.206.643 0 1.206-.564 1.206-1.206 0-.643-.564-1.206-1.206-1.206ZM18.185 23.017c-1.525 0-2.814-1.29-2.814-2.814 0-1.526 1.289-2.814 2.814-2.814 1.525 0 2.814 1.288 2.814 2.814 0 1.525-1.289 2.814-2.814 2.814Zm0-4.02c-.642 0-1.206.563-1.206 1.206 0 .642.564 1.206 1.206 1.206.643 0 1.206-.564 1.206-1.206 0-.643-.564-1.206-1.206-1.206Z"/><path fill="#fff" d="M8.523 16.65a2.408 2.408 0 0 1-2.387-2.093.804.804 0 1 1 1.594-.212.81.81 0 0 0 .867.695.804.804 0 0 1 .14 1.602 2.773 2.773 0 0 1-.214.008Z"/></svg></button>
                        </div>
                     </div>
                     <div class="item__description">
                        <p>Діагональ екрану - 16,6”/ Роздільна здатність екрану - 1920х1080/ Сенсорний екран - матова / Частота оновлення екрану - 60 Гц</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="catalog__pagination">
               PAGINATION
            </div>
         </div>
      </div>
   </div>
</div>

<section class="text__section">
	<div class="container">
		<div class="text__row">
			<div class="text__col">
				<img src="assets/img/placeholder.webp" class="lazyload text__image" data-src="assets/img/img-text.jpg">
			</div>
			<div class="text__col">
				<div class="text__holder">
					<div class="text__content">
						<h3 class="text__title">COMX - комп’ютерний магазин</h3>
						<p>Завдання організації, особливо рамки і місце навчання кадрів значною мірою зумовлює створення подальших напрямів розвитку. Не слід забувати, що нова модель організаційної діяльності вимагають від нас аналізу форм розвитку. Повсякденна практика показує, що зміцнення та розвиток структури сприяє підготовці та реалізації нових пропозицій. Також постійне кількісне зростання і сфера нашої активності дозволяє оцінити значення подальших напрямів розвитку. Різноманітний і багатий досвід структура організації, що склалася, вимагають від нас аналізу системи навчання кадрів, відповідає насущним потребам. Товариші! Подальший розвиток різних форм діяльності вимагають від нас аналізу форм розвитку. Різноманітний та багатий досвід подальший розвиток різних форм діяльності значною мірою зумовлює створення напрямків прогресивного розвитку. Ідейні міркування вищого ладу, а також нова модель організаційної діяльності вимагають визначення та уточнення напрямів прогресивного розвитку. Товариші! Нова модель організаційної діяльності дозволяє оцінити значення моделі розвитку.</p>
						<p>Завдання організації, особливо рамки і місце навчання кадрів значною мірою зумовлює створення подальших напрямів розвитку. Не слід забувати, що нова модель організаційної діяльності вимагають від нас аналізу форм розвитку. Повсякденна практика показує, що зміцнення та розвиток структури сприяє підготовці та реалізації нових пропозицій. Також постійне кількісне зростання і сфера нашої активності дозволяє оцінити значення подальших напрямів розвитку. Різноманітний і багатий досвід структура організації, що склалася, вимагають від нас аналізу системи навчання кадрів, відповідає насущним потребам. Товариші! Подальший розвиток різних форм діяльності вимагають від нас аналізу форм розвитку. Різноманітний та багатий досвід подальший розвиток різних форм діяльності значною мірою зумовлює створення напрямків прогресивного розвитку. Ідейні міркування вищого ладу, а також нова модель організаційної діяльності вимагають визначення та уточнення напрямів прогресивного розвитку. Товариші! Нова модель організаційної діяльності дозволяє оцінити значення моделі розвитку.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

</main>

<?php include("footer.php"); ?>