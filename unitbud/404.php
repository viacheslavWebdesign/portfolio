<?php include("header.php"); ?>	
	<title>404</title>
</head>
<body class="kmnd-body">

<?php include("menu2.php"); ?>

<main class="kmnd-main">

<section class="error__section bg-cover" style="background-image: url(assets/img/bg-404-desktop.jpeg);">
   <figure class="error__bg bg-cover" style="background-image: url(assets/img/bg-404-mobile.jpg);"></figure>
   <div class="container">
      <p class="text-center c-primary-inverted text-uppercase error__text">Кажется страница которую вы пытаетесь посмотреть поехала к заказчику
         <br><br>а пока можете просмотреть наши дома или вернутся на главную
         <img src="assets/img/placeholder.webp" class="lazyload" data-src="assets/img/img-arrow-rounded.png">
      </p>
      <p class="text-center error__link c-primary-inverted"><a href="#" class="btn btn_link">ПОСМОТРЕТЬ ДОМА</a></p>
      <div class="error__btn">
         <a href="#" class="btn btn_rounded">вернуться назад</a>
         <a href="/front/" class="btn btn_wrapped">на главную</a>
      </div>
   </div>
</section>

</main>

<?php include("footer.php"); ?>
