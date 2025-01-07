<?php include("header.php"); ?>	
	<title>Vacancy</title>
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
            <li>Вакансії</li>
         </ul>
      </div>
      <h1 class="heading__title h1 text-center uppercase">Вакансії</h1>
   </div>
</section>

<section class="vacancy__section">
   <div class="container">
      <div class="vacancy__filters">
         <a href="#" class="vacancy__filter vacancy__filter_current">Київ <span></span></a>
         <a href="#" class="vacancy__filter">Львів <span></span></a>
      </div>
      <div class="vacancy__list">
         <div class="vacancy__item vacancy__item_hidden">
            <div class="vacancy__row">
               <div class="vacancy__col">
                  <p class="vacancy__name">Сушист</p>
               </div>
               <div class="vacancy__col">
                  <div class="vacancy__content">
                     <p>Сервіс доставки смачної їжі запрошує на постійну роботу у місті Дніпро адміністратора ресторану з досвідом роботи від 1 року.</p>
                     <p>Основні обов’язки:</p>
                     <ul>
                        <li>координація роботи персоналу, розподіл обов’язків;</li>
                        <li>забезпечення якості обслуговування клієнтів;</li>
                        <li>контроль за чистотою та охайністю приміщення;</li>
                        <li>забезпечення якості обслуговування клієнтів;</li>
                        <li>контроль за наявністю продуктів та інвентарю;</li>
                     </ul>
                     <p>Якщо Ви маєте досвід роботи в ресторанному бізнесі та бажаєте розвиватися в цій сфері, надсилайте своє резюме!</p>
                     <button class="btn btn_outlined btn_inside">Перейти на ваканцію <span></span></button>
                  </div>
                  <button class="vacancy__spoiler">
                     <span>Більше</span>
                     <span>Згорнути</span>
                  </button>
               </div>
            </div>
         </div>
         <div class="vacancy__item vacancy__item_hidden">
            <div class="vacancy__row">
               <div class="vacancy__col">
                  <p class="vacancy__name">Адміністратор ресторану</p>
               </div>
               <div class="vacancy__col">
                  <div class="vacancy__content">
                     <p>Сервіс доставки смачної їжі запрошує на постійну роботу у місті Дніпро адміністратора ресторану з досвідом роботи від 1 року.</p>
                     <p>Основні обов’язки:</p>
                     <ul>
                        <li>координація роботи персоналу, розподіл обов’язків;</li>
                        <li>забезпечення якості обслуговування клієнтів;</li>
                        <li>контроль за чистотою та охайністю приміщення;</li>
                        <li>забезпечення якості обслуговування клієнтів;</li>
                        <li>контроль за наявністю продуктів та інвентарю;</li>
                     </ul>
                     <p>Якщо Ви маєте досвід роботи в ресторанному бізнесі та бажаєте розвиватися в цій сфері, надсилайте своє резюме!</p>
                     <button class="btn btn_outlined btn_inside">Перейти на ваканцію <span></span></button>
                  </div>
                  <button class="vacancy__spoiler">
                     <span>Більше</span>
                     <span>Згорнути</span>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="request__section">
   <div class="container">
      <h2 class="h2 text-center uppercase request__title">Бажаєте <br>почати кар'єру <br class="hide-for-large">разом <br class="show-for-large">із <span class="c-accent">Sushi-Time</span></h2>
      <p class="request__subtitle">Ми завжди відкриті до нових талантів і пропозицій, просто розкажіть нам, чим ми зможемо бути одні одним корисні</p>
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
</section>

</div>

</main>

<?php include("footer.php"); ?>