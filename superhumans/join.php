<?php include("header.php"); ?>	
	<title>Join us</title>
</head>
<body class="letsmake-body">

<?php include("menu.php"); ?>

<main class="letsmake-main">

<section class="mission__section">
   <div class="container">
      <div class="mission__row">
         <div class="mission__col">
            <div class="mission__title">
               <div class="mission__title-row mission__title-row_1">
                  <div class="mission__title-col">
                     <p class="mission__text mission__text_1">Be Part of</p>
                  </div>
                  <div class="mission__title-col">
                     <figure class="mission__img mission__img_1 bg-cover" style="background-image: url(assets/img/img-mission1.jpg);"></figure>
                  </div>
               </div>
               <div class="mission__title-row">
                  <div class="mission__title-col">
                     <figure class="mission__img mission__img_2 bg-cover" style="background-image: url(assets/img/img-mission2.jpg);"></figure>
                  </div>
                  <div class="mission__title-col">
                     <p class="mission__text mission__text_2">Our Mission</p>
                  </div>
               </div>
            </div>
            <hr class="divider mission__divider">
            <p class="mission__subtext">Maecenas et nunc purus. Aliquam at erat sit amet dolor rutrum mollis. Nulla aliquet dui eu tortor dictum, ut vestibulum ipsum bibendum. </p>
         </div>
         <div class="mission__col">
            <div class="mission__content">
               <div class="mission__avatar">
                  <figure class="bg-cover" style="background-image: url(assets/img/img-mission-avatar.jpg);"></figure>
               </div>
               <div class="mission__content-head">
                  <p class="mission__name">Andrey Stavnitser</p>
                  <p class="mission__position">Founder</p>
               </div>
               <p class="mission__content-text">
                  “Etiam ullamcorper mi mi. Sed faucibus, justo eget maximus tincidunt, nunc sem ultricies quam, id luctus mauris ipsum sed metus.”
               </p>
            </div>
         </div>
      </div>
      <div class="mission__row">
         <div class="mission__col">
            <div class="mission__bottom">
               <img src="assets/img/placeholder.webp" class="mission__avatars lazyload" data-src="assets/img/img-mission-avatars.jpg">
               <div class="mission__bottom-content">
                  <p>Meet With Our Team</p>
                  <a href="about.php" class="btn btn_seventh">
                     <svg xmlns="http://www.w3.org/2000/svg" width="27.587" height="26.671" viewBox="0 0 27.587 26.671"><path fill="#f7f9f9" stroke="#f7f9f9" stroke-width="1.0004" d="M21.913 6.988a.14.14 0 0 0-.182-.025L11.194 5.435a.511.511 0 0 0-.573.431.511.511 0 0 0 .432.573l9.402 1.322-14.52 11.485a.514.514 0 0 0-.1.726.48.48 0 0 0 .73.103l14.52-11.484-1.401 9.302a.511.511 0 0 0 .431.573.472.472 0 0 0 .521-.393l1.49-10.588c.012-.091-.027-.143.025-.183a.415.415 0 0 0-.238-.314Z" data-name="Path 47"/></svg>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="request__section bg-color--tertiary">
   <div class="container">
      <h2 class="title request__title">Join the Superhumans</h2>
      <hr class="divider request__divider">
      <p class="request__text">If you have medical expertise of the kind, which might be useful for our Clinic, and you are ready to share it with us one way or another, please be so kind to fill in the form below.</p>
      <form class="request__form">
         <div class="input-row">
            <div class="input input_dark">
               <label for="joinName">Name<sup>*</sup></label>
               <input type="text" id="joinName" required="required">
            </div>
            <div class="input input_dark">
               <label for="joinLastName">Last Name<sup>*</sup></label>
               <input type="text" id="joinLastName" required="required">
            </div>
         </div>
         <div class="input-row">
            <div class="input input_dark">
               <label for="joinEmail">Email<sup>*</sup></label>
               <input type="email" id="joinEmail" required="required">
            </div>
            <div class="input input_dark">
               <label for="joinSpecialization">Specialization</label>
               <input type="text" id="joinSpecialization" required="required">
            </div>
         </div>
         <div class="textarea textarea_dark">
            <label for="joinTextarea">How would you like to join?</label>
            <textarea rows="4" id="joinTextarea" required="required"></textarea>
         </div>
         <div class="request__buttons">
            <div class="file file_dark">
               <input type="file" id="file1" hidden>
               <label for="file1"><span>Add Your CV</span> <svg xmlns="http://www.w3.org/2000/svg" width="8.121" height="12.811" viewBox="0 0 8.121 12.811"><g fill="none" stroke="#000" stroke-linecap="round" stroke-width="1.5" data-name="Component 1 – 3"><path d="M4.061 12.061v-11" data-name="Line 1"/><path d="m1.061 4.061 3-3" data-name="Line 2"/><path d="m4.061 1.061 3 3" data-name="Line 3"/></g></svg></label>
            </div>
            <button class="btn request__submit">Send application<svg xmlns="http://www.w3.org/2000/svg" width="12.811" height="8.121" viewBox="0 0 12.811 8.121"><g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5"><path d="M.75 4.061h11"/><path d="m8.75 1.061 3 3"/><path d="m11.75 4.061-3 3"/></g></svg></button>
         </div>
      </form>
   </div>
</section>

</main>

<?php include("footer.php"); ?>