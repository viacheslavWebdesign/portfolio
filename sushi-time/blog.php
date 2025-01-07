<?php include("header.php"); ?>	
	<title>Blog</title>
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
            <li>Блог</li>
         </ul>
      </div>
      <h1 class="heading__title h1 text-center uppercase">Блог</h1>
   </div>
</section>

<section class="blog-page__section">
   <div class="container">
      <div class="blog-page__filters">
         <a href="#" class="blog-page__filter blog-page__filter_current">Всі <span></span></a>
         <a href="#" class="blog-page__filter">Статті <span></span></a>
         <a href="#" class="blog-page__filter">Рецепти <span></span></a>
         <a href="#" class="blog-page__filter">Цікаве <span></span></a>
         <a href="#" class="blog-page__filter">Розіграші <span></span></a>
      </div>
      <div class="blog-page__grid">
         <div class="blog-page__col">
            <a href="article.php" class="blog-item">
               <figure>
                  <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-blog-item1.jpg">
               </figure>
               <div class="blog-item__content">
                  <div class="blog-item__labels">
                     <div class="label label_outlined blog-item__label">Рецепт</div>
                     <div class="label label_outlined blog-item__label blog-item__label_green">New</div>
                  </div>
                  <p class="blog-item__title">ЯК ЗРОБИТИ МАРИНОВАНИЙ ІМБИР В ДОМАШНІХ УМОВАХ?</p>
                  <p class="blog-item__date">Сьогодні</p>
               </div>
            </a>
         </div>
         <div class="blog-page__col">
            <a href="article.php" class="blog-item">
               <figure>
                  <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-blog-item2.jpg">
               </figure>
               <div class="blog-item__content">
                  <div class="blog-item__labels">
                     <div class="label label_outlined blog-item__label">Стаття</div>
                     <div class="label label_outlined blog-item__label blog-item__label_green">New</div>
                  </div>
                  <p class="blog-item__title">Рисовий папір в японській кухні: мистецтво створення та кулінарні можливості</p>
                  <p class="blog-item__date">Сьогодні</p>
               </div>
            </a>
         </div>
         <div class="blog-page__col">
            <a href="article.php" class="blog-item">
               <figure>
                  <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-blog-item3.jpg">
               </figure>
               <div class="blog-item__content">
                  <div class="blog-item__labels">
                     <div class="label label_outlined blog-item__label">Рецепт</div>
                  </div>
                  <p class="blog-item__title">Як готувати СУШІ <br>НА ДІЄТІ?</p>
                  <p class="blog-item__date">2 дня назад</p>
               </div>
            </a>
         </div>
         <div class="blog-page__col">
            <a href="article.php" class="blog-item">
               <figure>
                  <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-blog-item4.jpg">
               </figure>
               <div class="blog-item__content">
                  <div class="blog-item__labels">
                     <div class="label label_outlined blog-item__label">Стаття</div>
                  </div>
                  <p class="blog-item__title">ЯК ПРАВИЛЬНО ЗБЕРІГАТИ СУШІ ТА РОЛИ?</p>
                  <p class="blog-item__date">5 днів назад</p>
               </div>
            </a>
         </div>
         <div class="blog-page__col">
            <a href="article.php" class="blog-item">
               <figure>
                  <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-blog-item5.jpg">
               </figure>
               <div class="blog-item__content">
                  <div class="blog-item__labels">
                     <div class="label label_outlined blog-item__label">Цікаве</div>
                  </div>
                  <p class="blog-item__title">ЯК ОБРАТИ АВОКАДО ДЛЯ РОЛІВ?</p>
                  <p class="blog-item__date">5 днів назад</p>
               </div>
            </a>
         </div>
         <div class="blog-page__col">
            <a href="article.php" class="blog-item">
               <figure>
                  <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-blog-item6.jpg">
               </figure>
               <div class="blog-item__content">
                  <div class="blog-item__labels">
                     <div class="label label_outlined blog-item__label">Стаття</div>
                  </div>
                  <p class="blog-item__title">ЯК ВИБРАТИ ІДЕАЛЬНИЙ РИС ДЛЯ СУШІ: ПОСІБНИК ДЛЯ ПОЦІНОВУВАЧІВ ЯПОНСЬКОЇ КУХНІ</p>
                  <p class="blog-item__date">10 днів назад</p>
               </div>
            </a>
         </div>
         <div class="blog-page__col">
            <a href="article.php" class="blog-item">
               <figure>
                  <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-blog-item7.jpg">
               </figure>
               <div class="blog-item__content">
                  <div class="blog-item__labels">
                     <div class="label label_outlined blog-item__label">Стаття</div>
                  </div>
                  <p class="blog-item__title">ВАСАБІ: З ЧОГО ЙОГО РОБЛЯТЬ ТА З ЧИМ ЇДЯТЬ?</p>
                  <p class="blog-item__date">10 днів назад</p>
               </div>
            </a>
         </div>
         <div class="blog-page__col">
            <a href="article.php" class="blog-item">
               <figure>
                  <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-blog-item8.jpg">
               </figure>
               <div class="blog-item__content">
                  <div class="blog-item__labels">
                     <div class="label label_outlined blog-item__label">Стаття</div>
                  </div>
                  <p class="blog-item__title">КОРОБОЧКИ ВОК: ХТО ПРИДУМАВ ТАКУ ПОДАЧУ СТРАВИ?</p>
                  <p class="blog-item__date">15 днів назад</p>
               </div>
            </a>
         </div>
         <div class="blog-page__col">
            <a href="article.php" class="blog-item">
               <figure>
                  <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-blog-item9.jpg">
               </figure>
               <div class="blog-item__content">
                  <div class="blog-item__labels">
                     <div class="label label_outlined blog-item__label">Стаття</div>
                  </div>
                  <p class="blog-item__title">ЯК ПРАВИЛЬНО НАРІЗАТИ РИБУ ДЛЯ РОЛІВ ТА СУШІ?</p>
                  <p class="blog-item__date">12 днів назад</p>
               </div>
            </a>
         </div>
         <div class="blog-page__col">
            <a href="article.php" class="blog-item">
               <figure>
                  <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-blog-item10.jpg">
               </figure>
               <div class="blog-item__content">
                  <div class="blog-item__labels">
                     <div class="label label_outlined blog-item__label">Цікаве</div>
                  </div>
                  <p class="blog-item__title">РІЗНИЦЯ МІЖ СУШІ ТА РОЛИ</p>
                  <p class="blog-item__date">Білше місяця</p>
               </div>
            </a>
         </div>
         <div class="blog-page__col">
            <a href="article.php" class="blog-item">
               <figure>
                  <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-blog-item11.jpg">
               </figure>
               <div class="blog-item__content">
                  <div class="blog-item__labels">
                     <div class="label label_outlined blog-item__label">Рецепт</div>
                  </div>
                  <p class="blog-item__title">РЕЦЕПТ ЗАПЕЧЕНИХ РОЛІВ В ДОМАШНІХ УМОВАХ</p>
                  <p class="blog-item__date">Білше місяця</p>
               </div>
            </a>
         </div>
         <div class="blog-page__col">
            <a href="article.php" class="blog-item">
               <figure>
                  <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-blog-item12.jpg">
               </figure>
               <div class="blog-item__content">
                  <div class="blog-item__labels">
                     <div class="label label_outlined blog-item__label">Рецепт</div>
                  </div>
                  <p class="blog-item__title">ПОПУЛЯРНІ МІФИ ПРО РОЛИ</p>
                  <p class="blog-item__date">Білше місяця</p>
               </div>
            </a>
         </div>
      </div>
      <div class="blog-page__bottom">
         <button class="btn btn_outlined btn_inside">Показати ще <span></span></button>
      </div>
   </div>
</section>

</div>



</main>

<?php include("footer.php"); ?>