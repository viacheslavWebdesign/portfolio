<?php include("header.php"); ?>	
	<title>404</title>
</head>
<body class="kmnd-body">

<?php include("menu.php"); ?>

<main class="kmnd-main">

<section class="error__section">
   <div class="error__bg d-none d-md-block bg-cover" style="background-image: url(assets/img/bg-error-desktop.jpg);"></div>
   <div class="error__bg d-md-none bg-cover" style="background-image: url(assets/img/bg-error-mobile.jpg);"></div>
   <div class="container">
      <div class="error__content">
         <p class="error__num text-center">404</p>
         <p class="error__text text-center text-uppercase">здається ти заблукав,<br> в мене тут ремонт</p>
         <div class="error__bottom d-flex justify-content-center">
            <a href="/front/" class="stages__btn btn">
               <div class="btn__border"></div>
               <div class="btn__background"></div>
               <div class="btn__content">На головну</div>
            </a>
         </div>
      </div>
   </div>
</section>

</main>

<?php include("footer.php"); ?>