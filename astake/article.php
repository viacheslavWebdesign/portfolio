<?php include("header.php"); ?>	
	<title>Article</title>
</head>
<body class="kmnd-body kmnd-body_article">

<?php include("menu.php"); ?>

<div class="scroll">
	<div class="scroll__indicator"></div>
</div>

<main>

<div id="marker1"></div>
	
<div class="breadcrumbs">
	<div class="container">
		<ul>
			<li><a href="index.php">Main</a></li>
			<li><a href="list.php">blog</a></li>
			<li><a href="list.php">categories</a></li>
			<li><a href="category.php">news</a></li>
			<li>news page where there can be a lot of letterssss</li>
		</ul>
	</div>
</div>

<section class="block-article pt-lg-40 pt-sm-40">
	<div class="container">
		<div class="article__row">
			<aside class="sidebar">
				<div class="labels">
					<div class="label">Staking</div>
					<div class="label">Mining</div>
					<div class="label">Crypt</div>
					<div class="label">Investments</div>
				</div>
				<ul class="article__nav">
					<li class="current" data-marker="1"><a class="link-scroll" href="#marker1">
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#article-nav)"><path fill-rule="evenodd" clip-rule="evenodd" d="M4 1.6a.8.8 0 0 0-.8.8v11.245l4.335-3.096a.8.8 0 0 1 .93 0l4.335 3.096V2.4a.8.8 0 0 0-.8-.8H4ZM2.303.703A2.4 2.4 0 0 1 4 0h8a2.4 2.4 0 0 1 2.4 2.4v12.8a.8.8 0 0 1-1.265.651L8 12.183l-5.135 3.668A.8.8 0 0 1 1.6 15.2V2.4A2.4 2.4 0 0 1 2.303.703Z" fill="#0F0D16"/></g><defs><clipPath id="article-nav"><path fill="#fff" d="M0 0h16v16H0z"/></clipPath></defs></svg>
						TITLE
					</a></li>
					<li data-marker="2"><a class="link-scroll" href="#marker2">How good it was in the beginning</a></li>
					<li data-marker="3"><a class="link-scroll" href="#marker3">Then it got so-so</a></li>
					<li data-marker="4"><a class="link-scroll" href="#marker4">Crash here</a></li>
					<li data-marker="5"><a class="link-scroll" href="#marker5">Well, almost the end of the article</a></li>
					<li data-marker="6"><a class="link-scroll" href="#marker6">Now that's the end for sure</a></li>
				</ul>
			</aside>
			<article class="article__body">
				<div class="article__stats">
					<p class="article__date">Updated <span>April 25, 2022</span></p>
					<div class="article__info">
						<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="7.5" cy="7.5" r="6.8" stroke="#5A5C66" stroke-width="1.4"/><path d="M7 4v4l2 1.5" stroke="#5A5C66" stroke-width="1.4" stroke-linecap="round"/></svg>
						<p>4 min.</p>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.92 2.804a.8.8 0 0 1 .159 0A11.176 11.176 0 0 1 15.504 6.7a1.872 1.872 0 0 1-.015 2.554c-.61.659-1.616 1.632-2.886 2.446-1.268.812-2.853 1.5-4.603 1.5-1.75 0-3.336-.688-4.604-1.5-1.27-.814-2.275-1.787-2.886-2.446A1.872 1.872 0 0 1 .496 6.7 11.176 11.176 0 0 1 7.92 2.804Zm.08 1.6a9.576 9.576 0 0 0-6.325 3.378.272.272 0 0 0 0 .375l.006.006c.557.602 1.46 1.474 2.579 2.19C5.382 11.072 6.666 11.6 8 11.6s2.618-.528 3.74-1.247c1.117-.716 2.021-1.588 2.578-2.19l.007-.006a.272.272 0 0 0 0-.375A9.576 9.576 0 0 0 8 4.404Z" fill="#5A5C66"/><path fill-rule="evenodd" clip-rule="evenodd" d="M6.02 6.02a2.8 2.8 0 1 1 3.96 3.96 2.8 2.8 0 0 1-3.96-3.96ZM8 6.8a1.2 1.2 0 1 0 0 2.4 1.2 1.2 0 0 0 0-2.4Z" fill="#5A5C66"/></svg>
						<p>4756</p>
					</div>
				</div>
				<h1 data-marker="1" class="article__title title-primary has-marker">Why Mark Zuckerberg's stablecoin was doomed to fail from the start</h1>
				<div class="article__image mb-lg-80 mb-sm-45">
					<img src="assets/img/placeholder.webp" width="767" height="316" class="lazyload" data-src="assets/img/img-article1.jpg">
				</div>
				<p class="article__text mb-lg-100 mb-sm-60">
				<b>Facebook</b> (now Meta) was one of the first major companies to try to make their own cryptocurrency project. First it was called Libra, and then Diem. The stablecoin lasted almost three years and was supposed to launch any day when it became known that <b>the project was being closed</b> and the assets were being sold. We decided to remember what Libra (aka Diem) was supposed to be, and why Facebook (aka Meta) didn’t work out in the end.
				</p>
				<h2 data-marker="2" id="marker2" class="title-secondary mb-lg-20 mb-sm-40 has-marker">How it all started</h2>
				<p class="article__text mb-lg-100 mb-sm-60">The Libra project appeared in the summer of 2019 and was positioned by Facebook as a global digital currency that will allow businesses and people to easily make money transactions around the world. The forerunner of Libra can be considered the virtual currency Credits, which could be paid on Facebook in games available on the social network.
				<br><br>
				The first rumors that Mark Zuckerberg's company is working on a crypto project appeared back in 2018.
				<br><br>
				In February 2019, the <b>New York Times</b> reported that Facebook was working on a cryptocurrency that could be used to make transactions on WhatsApp, which is also owned by the company.
				<br><br>
				In May, the media reported that this was not just a currency that could be used on WhatsApp, but a stablecoin pegged to fiat currency. Then it became known that the project is called Libra, and Facebook is trying to negotiate Libra support from Visa and Mastercard. It was, in particular, about financial support - Facebook wanted to receive a billion dollars from companies.</p>
				<h2 data-marker="3" id="marker3" class="title-secondary mb-lg-20 mb-sm-40 has-marker">Libra to Diem</h2>
				<p class="article__text mb-lg-40 mb-sm-40">In the months following the announcement, nothing significant happened to Libra. Members left the Libra Association, and new ones took their place. Not a single world regulator during this time has given permission to launch a cryptocurrency. The main concern is that officials do not understand how the launch of Libra could affect the global economy.</p>
				<div class="article__image mb-lg-40 mb-sm-40">
					<img src="assets/img/placeholder.webp" width="767" height="316" class="lazyload" data-src="assets/img/img-article1.jpg">
					<p class="article__image-subtext">Open source photo by Bruce Willis</p>
				</div>
				<blockquote class="quote mb-lg-60 mb-sm-40">
					<div class="quote__ico">"</div>
					<div class="quote__content">
						<p class="quote__text">We believe in the future of dollar-backed stablecoins and their potential to change existing payment systems. We are happy to be a part of this process and continue to work with Diem to bring our product to market.</p>
						<div class="quote__author">
							<figure class="quote__avatar bg-cover" style="background-image: url(assets/img/img-avatar.jpg);"></figure>
							<div class="quote__credentials">
								<p class="quote__name">Viktor Lokotkov</p>
								<p class="quote__position">Marketing director</p>
							</div>
						</div>
					</div>
				</blockquote>
				<p class="article__text mb-lg-60 mb-sm-60">In the months following the announcement, nothing significant happened to Libra. Members left the Libra Association, and new ones took their place. Not a single world regulator during this time has given permission to launch a cryptocurrency. The main concern is that officials do not understand how the launch of Libra could affect the global economy.</p>
				<div class="featuring featuring_third mb-lg-80 mb-sm-60">
					<div class="featuring__image featuring__image_desktop bg-cover" style="background-image: url(assets/img/img-featuring4-desktop.jpg);"></div>
					<div class="featuring__image featuring__image_mobile bg-cover" style="background-image: url(assets/img/img-featuring4-mobile.jpg);"></div>
					<div class="featuring__content featuring__content_third">
						<div class="featuring__row featuring__row_third">
							<div class="featuring__col featuring__col_third">
								<p class="featuring__title featuring__title_white featuring__title_third">Be aware of the latest, subscribe to our telegram channel</p>
							</div>
							<a href="#" class="featuring__button btn-secondary">Subscribe</a>
						</div>
					</div>
				</div>
				<h2 data-marker="4" id="marker4" class="title-secondary mb-lg-20 mb-sm-40 has-marker">Why didn't Diem succeed?</h2>
				<p class="article__text mb-lg-40 mb-sm-40">The Libra project appeared in the summer of 2019 and was positioned by Facebook as a global digital currency that will allow businesses and people to easily make money transactions around the world. The forerunner of Libra can be considered the virtual currency Credits, which could be paid on Facebook in games available on the social network.
				<br><br>
				The first rumors that Mark Zuckerberg's company is working on a crypto project appeared back in 2018.</p>
				<div class="gallery mb-lg-40 mb-sm-40">
					<div class="gallery__slider">
						<div class="gallery__item"><figure class="bg-cover" style="background-image: url(assets/img/img-gallery.jpg);"></figure></div>
						<div class="gallery__item"><figure class="bg-cover" style="background-image: url(assets/img/img-gallery.jpg);"></figure></div>
						<div class="gallery__item"><figure class="bg-cover" style="background-image: url(assets/img/img-gallery.jpg);"></figure></div>
						<div class="gallery__item"><figure class="bg-cover" style="background-image: url(assets/img/img-gallery.jpg);"></figure></div>
						<div class="gallery__item"><figure class="bg-cover" style="background-image: url(assets/img/img-gallery.jpg);"></figure></div>
					</div>
					<div class="gallery__controls">
						<div class="gallery__counter"><span class="gallery__current">1</span> / <span class="gallery__total">1</span></div>
						<div class="gallery__nav">
							<button class="gallery__prev"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.667 8c0-.177.07-.346.195-.471l4-4a.667.667 0 0 1 .943.942L4.943 7.333h7.724a.667.667 0 1 1 0 1.334H4.943l2.862 2.862a.667.667 0 1 1-.943.942l-4-4A.667.667 0 0 1 2.667 8Z" fill="#0F0D16"/></svg></button>
							<button class="gallery__next"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.333 8c0 .177-.07.346-.195.471l-4 4a.667.667 0 0 1-.943-.942l2.862-2.862H3.333a.667.667 0 0 1 0-1.334h7.724L8.195 4.471a.667.667 0 1 1 .943-.942l4 4a.667.667 0 0 1 .195.471Z" fill="#0F0D16"/></svg></button>
						</div>
					</div>
				</div>
				<p class="article__text mb-lg-60 mb-sm-40">The Libra project appeared in the summer of 2019 and was positioned by Facebook as a global digital currency that will allow businesses and people to easily make money transactions around the world. The forerunner of Libra can be considered the virtual currency Credits, which could be paid on Facebook in games available on the social network.
				<br><br>
				The first rumors that Mark Zuckerberg's company is working on a crypto project appeared back in 2018.</p>
				<blockquote class="quote mb-lg-60 mb-sm-40">
					<div class="quote__ico quote__ico_second">!</div>
					<div class="quote__content">
						<p class="quote__text quote__text_second">We believe in the future of dollar-backed stablecoins and their potential to change existing payment systems. We are happy to be a part of this process and continue to work with Diem to bring our product to market.</p>
					</div>
				</blockquote>
				<p class="article__text mb-lg-40 mb-sm-40">The Libra project appeared in the summer of 2019 and was positioned by Facebook as a global digital currency that will allow businesses and people to easily make money transactions around the world. The forerunner of Libra can be considered the virtual currency Credits, which could be paid on Facebook in games available on the social network.
				<br><br>
				The first rumors that Mark Zuckerberg's company is working on a crypto project appeared back in 2018.</p>
				<ol class="list mb-lg-50 mb-sm-40">
					<li class="list__item"><span>The first rumors that Mark Zuckerberg's company is working on a crypto project appeared back in 2018.</span></li>
					<li class="list__item"><span>The first rumors that Mark Zuckerberg's company is working on</span></li>
					<li class="list__item"><span>The first rumors that Mark Zuckerberg's company is working on a crypto project appeared back in 2018.</span></li>
					<li class="list__item"><span>The first rumors that Mark Zuckerberg's company is working on</span></li>
					<li class="list__item"><span>The first rumors that Mark Zuckerberg's company is working on a crypto project appeared back in 2018.</span></li>
				</ol>
				<p class="article__text mb-lg-40 mb-sm-40">The Libra project appeared in the summer of 2019 and was positioned by Facebook as a global digital currency that will allow businesses and people to easily make money transactions around the world. The forerunner of Libra can be considered the virtual currency Credits, which could be paid on Facebook in games available on the social network.
				<br><br>
				The first rumors that Mark Zuckerberg's company is working on a crypto project appeared back in 2018.</p>
				<div class="video mb-lg-100 mb-sm-60">
					<div class="video__holder">
						<figure class="video__preloader bg-cover" data-video="P4BK84zBRWc" style="background-image: url(assets/img/img-video.jpg);">
							<svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M26 52c14.36 0 26-11.64 26-26S40.36 0 26 0 0 11.64 0 26s11.64 26 26 26Zm10.935-24.954a1.186 1.186 0 0 0 0-2.086L20.16 15.574c-.829-.464-1.864.116-1.864 1.042V35.39c0 .928 1.035 1.507 1.864 1.043l16.774-9.386Z" fill="#fff"/></svg>
						</figure>
					    <iframe src="" width="300" height="150" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<p class="video__text">Video taken from open source, <b>You Tube</b></p>
				</div>
				<h2 data-marker="5" id="marker5" class="title-secondary mb-lg-40 mb-sm-40 has-marker">Why didn't Diem succeed?</h2>
				<p class="article__text mb-lg-40 mb-sm-40">The Libra project appeared in the summer of 2019 and was positioned by Facebook as a global digital currency that will allow businesses and people to easily make money transactions around the world. The forerunner of Libra can be considered the virtual currency Credits, which could be paid on Facebook in games available on the social network.
				<br><br>
				The first rumors that Mark Zuckerberg's company is working on a crypto project appeared back in 2018.</p>
				<ul class="list list_dotted mb-lg-40 mb-sm-40">
					<li class="list__item list__item_dotted">The first rumors that Mark Zuckerberg's company is working on a crypto project appeared back in 2018.</li>
					<li class="list__item list__item_dotted">The first rumors that Mark Zuckerberg's company is working on</li>
					<li class="list__item list__item_dotted">The first rumors that Mark Zuckerberg's company is working on a crypto project appeared back in 2018.</li>
					<li class="list__item list__item_dotted">The first rumors that Mark Zuckerberg's company is working on</li>
					<li class="list__item list__item_dotted">The first rumors that Mark Zuckerberg's company is working on a crypto project appeared back in 2018.</li>
				</ul>
				<p class="article__text mb-lg-40 mb-sm-40">The Libra project appeared in the summer of 2019 and was positioned by Facebook as a global digital currency that will allow businesses and people to easily make money transactions around the world. The forerunner of Libra can be considered the virtual currency Credits, which could be paid on Facebook in games available on the social network.
				<br><br>
				The first rumors that Mark Zuckerberg's company is working on a crypto project appeared back in 2018.</p>
				<p class="article__text article__text_small">The material provided on this website is for informational purposes only, does not constitute investment research, and should not be construed as investment advice. Any opinion that may be presented on this page is a subjective point of view on the object of the message of the author of the material, and is not a recommendation of Currency Com Bel LLC or its partners. We make no representations or warranties of any kind as to the accuracy or completeness of the information provided on this page. By relying on the information on this page, you acknowledge that you are acting knowingly and independently and accepting the associated risk.</p>
			</article>
		</div>
	</div>
</section>

<div class="container">
	<hr class="mt-lg-60 mt-sm-40 mb-lg-80 mb-sm-40">
</div>

<section class="block-recomendation pb-lg-80 pb-sm-40">
	<div class="container">
		<div class="recomendation__row">
			<div class="recomendation__side">
				<a href="#marker1" class="btn-up link-scroll">
					<figure><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.667c.177 0 .346.07.471.195l4 4a.667.667 0 1 1-.943.943L8.667 4.943v7.724a.667.667 0 1 1-1.334 0V4.943L4.471 7.805a.667.667 0 1 1-.942-.943l4-4a.667.667 0 0 1 .47-.195Z" fill="#0F0D16"/></svg></figure>
					<span>Up</span>
				</a>
			</div>
			<div class="recomendation__content">
				<h2 class="title-secondary mb-lg-60 mb-sm-40">Similar articles</h2>
				<div class="recomendation__grid">
					<div class="recomendation__col">
						<div class="item">
							<a href="article.php">
								<figure class="item__image bg-cover" style="background-image: url(assets/img/img-item2.jpg);">
									<div class="label">Category</div>
								</figure>
							</a>
							<div class="item__info">
								<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="7.5" cy="7.5" r="6.8" stroke="#5A5C66" stroke-width="1.4"/><path d="M7 4v4l2 1.5" stroke="#5A5C66" stroke-width="1.4" stroke-linecap="round"/></svg>
								<p>4 min.</p>
								<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.92 2.804a.8.8 0 0 1 .159 0A11.176 11.176 0 0 1 15.504 6.7a1.872 1.872 0 0 1-.015 2.554c-.61.659-1.616 1.632-2.886 2.446-1.268.812-2.853 1.5-4.603 1.5-1.75 0-3.336-.688-4.604-1.5-1.27-.814-2.275-1.787-2.886-2.446A1.872 1.872 0 0 1 .496 6.7 11.176 11.176 0 0 1 7.92 2.804Zm.08 1.6a9.576 9.576 0 0 0-6.325 3.378.272.272 0 0 0 0 .375l.006.006c.557.602 1.46 1.474 2.579 2.19C5.382 11.072 6.666 11.6 8 11.6s2.618-.528 3.74-1.247c1.117-.716 2.021-1.588 2.578-2.19l.007-.006a.272.272 0 0 0 0-.375A9.576 9.576 0 0 0 8 4.404Z" fill="#5A5C66"/><path fill-rule="evenodd" clip-rule="evenodd" d="M6.02 6.02a2.8 2.8 0 1 1 3.96 3.96 2.8 2.8 0 0 1-3.96-3.96ZM8 6.8a1.2 1.2 0 1 0 0 2.4 1.2 1.2 0 0 0 0-2.4Z" fill="#5A5C66"/></svg>
								<p>4756</p>
							</div>
							<a href="article.php">
								<p class="item__title">How, in fact, can you get money by posting short videos?</p>
							</a>
						</div>
					</div>
					<div class="recomendation__col">
						<div class="item">
							<a href="article.php">
								<figure class="item__image bg-cover" style="background-image: url(assets/img/img-item3.jpg);">
									<div class="label">Category</div>
								</figure>
							</a>
							<div class="item__info">
								<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="7.5" cy="7.5" r="6.8" stroke="#5A5C66" stroke-width="1.4"/><path d="M7 4v4l2 1.5" stroke="#5A5C66" stroke-width="1.4" stroke-linecap="round"/></svg>
								<p>4 min.</p>
								<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.92 2.804a.8.8 0 0 1 .159 0A11.176 11.176 0 0 1 15.504 6.7a1.872 1.872 0 0 1-.015 2.554c-.61.659-1.616 1.632-2.886 2.446-1.268.812-2.853 1.5-4.603 1.5-1.75 0-3.336-.688-4.604-1.5-1.27-.814-2.275-1.787-2.886-2.446A1.872 1.872 0 0 1 .496 6.7 11.176 11.176 0 0 1 7.92 2.804Zm.08 1.6a9.576 9.576 0 0 0-6.325 3.378.272.272 0 0 0 0 .375l.006.006c.557.602 1.46 1.474 2.579 2.19C5.382 11.072 6.666 11.6 8 11.6s2.618-.528 3.74-1.247c1.117-.716 2.021-1.588 2.578-2.19l.007-.006a.272.272 0 0 0 0-.375A9.576 9.576 0 0 0 8 4.404Z" fill="#5A5C66"/><path fill-rule="evenodd" clip-rule="evenodd" d="M6.02 6.02a2.8 2.8 0 1 1 3.96 3.96 2.8 2.8 0 0 1-3.96-3.96ZM8 6.8a1.2 1.2 0 1 0 0 2.4 1.2 1.2 0 0 0 0-2.4Z" fill="#5A5C66"/></svg>
								<p>4756</p>
							</div>
							<a href="article.php">
								<p class="item__title">We believe in the future of dollar-backed stablecoins and their potential</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="block-articles pt-lg-120 pt-sm-40 bg-secondary">
	<div class="container">
		<h2 class="title-secondary mb-lg-40 mb-sm-40">Read also</h2>
		<div class="articles__grid">
			<div class="articles__col">
				<div class="item">
					<a href="article.php">
						<figure class="item__image bg-cover" style="background-image: url(assets/img/img-item1.jpg);">
							<div class="label">Category</div>
						</figure>
					</a>
					<div class="item__info">
						<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="7.5" cy="7.5" r="6.8" stroke="#5A5C66" stroke-width="1.4"/><path d="M7 4v4l2 1.5" stroke="#5A5C66" stroke-width="1.4" stroke-linecap="round"/></svg>
						<p>4 min.</p>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.92 2.804a.8.8 0 0 1 .159 0A11.176 11.176 0 0 1 15.504 6.7a1.872 1.872 0 0 1-.015 2.554c-.61.659-1.616 1.632-2.886 2.446-1.268.812-2.853 1.5-4.603 1.5-1.75 0-3.336-.688-4.604-1.5-1.27-.814-2.275-1.787-2.886-2.446A1.872 1.872 0 0 1 .496 6.7 11.176 11.176 0 0 1 7.92 2.804Zm.08 1.6a9.576 9.576 0 0 0-6.325 3.378.272.272 0 0 0 0 .375l.006.006c.557.602 1.46 1.474 2.579 2.19C5.382 11.072 6.666 11.6 8 11.6s2.618-.528 3.74-1.247c1.117-.716 2.021-1.588 2.578-2.19l.007-.006a.272.272 0 0 0 0-.375A9.576 9.576 0 0 0 8 4.404Z" fill="#5A5C66"/><path fill-rule="evenodd" clip-rule="evenodd" d="M6.02 6.02a2.8 2.8 0 1 1 3.96 3.96 2.8 2.8 0 0 1-3.96-3.96ZM8 6.8a1.2 1.2 0 1 0 0 2.4 1.2 1.2 0 0 0 0-2.4Z" fill="#5A5C66"/></svg>
						<p>4756</p>
					</div>
					<a href="article.php">
						<p class="item__title">We believe in the future of dollar-backed stablecoins and their potential</p>
					</a>
				</div>
			</div>
			<div class="articles__col">
				<div class="item">
					<a href="article.php">
						<figure class="item__image bg-cover" style="background-image: url(assets/img/img-item2.jpg);">
							<div class="label">Category</div>
						</figure>
					</a>
					<div class="item__info">
						<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="7.5" cy="7.5" r="6.8" stroke="#5A5C66" stroke-width="1.4"/><path d="M7 4v4l2 1.5" stroke="#5A5C66" stroke-width="1.4" stroke-linecap="round"/></svg>
						<p>4 min.</p>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.92 2.804a.8.8 0 0 1 .159 0A11.176 11.176 0 0 1 15.504 6.7a1.872 1.872 0 0 1-.015 2.554c-.61.659-1.616 1.632-2.886 2.446-1.268.812-2.853 1.5-4.603 1.5-1.75 0-3.336-.688-4.604-1.5-1.27-.814-2.275-1.787-2.886-2.446A1.872 1.872 0 0 1 .496 6.7 11.176 11.176 0 0 1 7.92 2.804Zm.08 1.6a9.576 9.576 0 0 0-6.325 3.378.272.272 0 0 0 0 .375l.006.006c.557.602 1.46 1.474 2.579 2.19C5.382 11.072 6.666 11.6 8 11.6s2.618-.528 3.74-1.247c1.117-.716 2.021-1.588 2.578-2.19l.007-.006a.272.272 0 0 0 0-.375A9.576 9.576 0 0 0 8 4.404Z" fill="#5A5C66"/><path fill-rule="evenodd" clip-rule="evenodd" d="M6.02 6.02a2.8 2.8 0 1 1 3.96 3.96 2.8 2.8 0 0 1-3.96-3.96ZM8 6.8a1.2 1.2 0 1 0 0 2.4 1.2 1.2 0 0 0 0-2.4Z" fill="#5A5C66"/></svg>
						<p>4756</p>
					</div>
					<a href="article.php">
						<p class="item__title">How, in fact, can you get money by posting short videos? </p>
					</a>
				</div>
			</div>
			<div class="articles__col">
				<div class="item">
					<a href="article.php">
						<figure class="item__image bg-cover" style="background-image: url(assets/img/img-item3.jpg);">
							<div class="label">Category</div>
						</figure>
					</a>
					<div class="item__info">
						<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="7.5" cy="7.5" r="6.8" stroke="#5A5C66" stroke-width="1.4"/><path d="M7 4v4l2 1.5" stroke="#5A5C66" stroke-width="1.4" stroke-linecap="round"/></svg>
						<p>4 min.</p>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.92 2.804a.8.8 0 0 1 .159 0A11.176 11.176 0 0 1 15.504 6.7a1.872 1.872 0 0 1-.015 2.554c-.61.659-1.616 1.632-2.886 2.446-1.268.812-2.853 1.5-4.603 1.5-1.75 0-3.336-.688-4.604-1.5-1.27-.814-2.275-1.787-2.886-2.446A1.872 1.872 0 0 1 .496 6.7 11.176 11.176 0 0 1 7.92 2.804Zm.08 1.6a9.576 9.576 0 0 0-6.325 3.378.272.272 0 0 0 0 .375l.006.006c.557.602 1.46 1.474 2.579 2.19C5.382 11.072 6.666 11.6 8 11.6s2.618-.528 3.74-1.247c1.117-.716 2.021-1.588 2.578-2.19l.007-.006a.272.272 0 0 0 0-.375A9.576 9.576 0 0 0 8 4.404Z" fill="#5A5C66"/><path fill-rule="evenodd" clip-rule="evenodd" d="M6.02 6.02a2.8 2.8 0 1 1 3.96 3.96 2.8 2.8 0 0 1-3.96-3.96ZM8 6.8a1.2 1.2 0 1 0 0 2.4 1.2 1.2 0 0 0 0-2.4Z" fill="#5A5C66"/></svg>
						<p>4756</p>
					</div>
					<a href="article.php">
						<p class="item__title">We believe in the future of dollar-backed stablecoins and their potential</p>
					</a>
				</div>
			</div>
			<div class="articles__col">
				<div class="item">
					<a href="article.php">
						<figure class="item__image bg-cover" style="background-image: url(assets/img/img-item4.jpg);">
							<div class="label">Category</div>
						</figure>
					</a>
					<div class="item__info">
						<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="7.5" cy="7.5" r="6.8" stroke="#5A5C66" stroke-width="1.4"/><path d="M7 4v4l2 1.5" stroke="#5A5C66" stroke-width="1.4" stroke-linecap="round"/></svg>
						<p>4 min.</p>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.92 2.804a.8.8 0 0 1 .159 0A11.176 11.176 0 0 1 15.504 6.7a1.872 1.872 0 0 1-.015 2.554c-.61.659-1.616 1.632-2.886 2.446-1.268.812-2.853 1.5-4.603 1.5-1.75 0-3.336-.688-4.604-1.5-1.27-.814-2.275-1.787-2.886-2.446A1.872 1.872 0 0 1 .496 6.7 11.176 11.176 0 0 1 7.92 2.804Zm.08 1.6a9.576 9.576 0 0 0-6.325 3.378.272.272 0 0 0 0 .375l.006.006c.557.602 1.46 1.474 2.579 2.19C5.382 11.072 6.666 11.6 8 11.6s2.618-.528 3.74-1.247c1.117-.716 2.021-1.588 2.578-2.19l.007-.006a.272.272 0 0 0 0-.375A9.576 9.576 0 0 0 8 4.404Z" fill="#5A5C66"/><path fill-rule="evenodd" clip-rule="evenodd" d="M6.02 6.02a2.8 2.8 0 1 1 3.96 3.96 2.8 2.8 0 0 1-3.96-3.96ZM8 6.8a1.2 1.2 0 1 0 0 2.4 1.2 1.2 0 0 0 0-2.4Z" fill="#5A5C66"/></svg>
						<p>4756</p>
					</div>
					<a href="article.php">
						<p class="item__title">We believe in the future of dollar-backed stablecoins and their potential</p>
					</a>
				</div>
			</div>
			<div class="articles__col">
				<div class="item">
					<a href="article.php">
						<figure class="item__image bg-cover" style="background-image: url(assets/img/img-item5.jpg);">
							<div class="label">Category</div>
						</figure>
					</a>
					<div class="item__info">
						<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="7.5" cy="7.5" r="6.8" stroke="#5A5C66" stroke-width="1.4"/><path d="M7 4v4l2 1.5" stroke="#5A5C66" stroke-width="1.4" stroke-linecap="round"/></svg>
						<p>4 min.</p>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.92 2.804a.8.8 0 0 1 .159 0A11.176 11.176 0 0 1 15.504 6.7a1.872 1.872 0 0 1-.015 2.554c-.61.659-1.616 1.632-2.886 2.446-1.268.812-2.853 1.5-4.603 1.5-1.75 0-3.336-.688-4.604-1.5-1.27-.814-2.275-1.787-2.886-2.446A1.872 1.872 0 0 1 .496 6.7 11.176 11.176 0 0 1 7.92 2.804Zm.08 1.6a9.576 9.576 0 0 0-6.325 3.378.272.272 0 0 0 0 .375l.006.006c.557.602 1.46 1.474 2.579 2.19C5.382 11.072 6.666 11.6 8 11.6s2.618-.528 3.74-1.247c1.117-.716 2.021-1.588 2.578-2.19l.007-.006a.272.272 0 0 0 0-.375A9.576 9.576 0 0 0 8 4.404Z" fill="#5A5C66"/><path fill-rule="evenodd" clip-rule="evenodd" d="M6.02 6.02a2.8 2.8 0 1 1 3.96 3.96 2.8 2.8 0 0 1-3.96-3.96ZM8 6.8a1.2 1.2 0 1 0 0 2.4 1.2 1.2 0 0 0 0-2.4Z" fill="#5A5C66"/></svg>
						<p>4756</p>
					</div>
					<a href="article.php">
						<p class="item__title">We believe in the future of dollar-backed stablecoins and their potential</p>
					</a>
				</div>
			</div>
			<div class="articles__col">
				<div class="item">
					<a href="article.php">
						<figure class="item__image bg-cover" style="background-image: url(assets/img/img-item6.jpg);">
							<div class="label">Category</div>
						</figure>
					</a>
					<div class="item__info">
						<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="7.5" cy="7.5" r="6.8" stroke="#5A5C66" stroke-width="1.4"/><path d="M7 4v4l2 1.5" stroke="#5A5C66" stroke-width="1.4" stroke-linecap="round"/></svg>
						<p>4 min.</p>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.92 2.804a.8.8 0 0 1 .159 0A11.176 11.176 0 0 1 15.504 6.7a1.872 1.872 0 0 1-.015 2.554c-.61.659-1.616 1.632-2.886 2.446-1.268.812-2.853 1.5-4.603 1.5-1.75 0-3.336-.688-4.604-1.5-1.27-.814-2.275-1.787-2.886-2.446A1.872 1.872 0 0 1 .496 6.7 11.176 11.176 0 0 1 7.92 2.804Zm.08 1.6a9.576 9.576 0 0 0-6.325 3.378.272.272 0 0 0 0 .375l.006.006c.557.602 1.46 1.474 2.579 2.19C5.382 11.072 6.666 11.6 8 11.6s2.618-.528 3.74-1.247c1.117-.716 2.021-1.588 2.578-2.19l.007-.006a.272.272 0 0 0 0-.375A9.576 9.576 0 0 0 8 4.404Z" fill="#5A5C66"/><path fill-rule="evenodd" clip-rule="evenodd" d="M6.02 6.02a2.8 2.8 0 1 1 3.96 3.96 2.8 2.8 0 0 1-3.96-3.96ZM8 6.8a1.2 1.2 0 1 0 0 2.4 1.2 1.2 0 0 0 0-2.4Z" fill="#5A5C66"/></svg>
						<p>4756</p>
					</div>
					<a href="article.php">
						<p class="item__title">How, in fact, can you get money by posting short videos?</p>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="block-featuring bg-half pt-lg-20 pt-sm-20 mb-lg-120 mb-sm-80">
	<div class="container">
		<div class="featuring">
			<div class="featuring__image featuring__image_desktop bg-cover" style="background-image: url(assets/img/img-featuring3-desktop.jpg);"></div>
			<div class="featuring__image featuring__image_mobile bg-cover" style="background-image: url(assets/img/img-featuring3-mobile.jpg);"></div>
			<div class="featuring__content">
				<div class="featuring__row">
					<div class="featuring__col">
						<p class="featuring__title featuring__title_white">Your money must be earned</p>
						<p class="featuring__text featuring__text_white">The best time to create capital on cryptocurrencies is now.</p>
					</div>
					<a href="#" class="featuring__button featuring__button_resize btn-secondary">Join aStake</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="block-communication mb-lg-120 mb-sm-80">
	<div class="container">
		<h2 class="communication__title">Do you have any questions? We are ready to answer them</h2>
		<div class="communication__row">
			<div class="communication__col">
				<a href="#" class="communication__item">
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 0C4.478 0 0 4.145 0 9.259c0 2.913 1.454 5.512 3.726 7.21V20l3.405-1.869c.909.252 1.871.388 2.869.388 5.523 0 10-4.145 10-9.259C20 4.146 15.523 0 10 0Zm.994 12.469L8.448 9.753l-4.97 2.716 5.467-5.803 2.609 2.716 4.906-2.716-5.466 5.803Z" fill="#FF4338"/></svg>
					<p class="communication__name">Messenger</p>
				</a>
			</div>
			<div class="communication__col">
				<a href="#" class="communication__item">
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M.074 19.925a.254.254 0 0 0 .245.066l5.025-1.317a9.94 9.94 0 0 0 4.653 1.159c5.465 0 9.914-4.447 9.916-9.913a9.853 9.853 0 0 0-2.902-7.013A9.855 9.855 0 0 0 9.997 0C4.531 0 .083 4.446.081 9.913a9.913 9.913 0 0 0 1.27 4.862L.01 19.68a.255.255 0 0 0 .065.246ZM7.039 5.458c.173.007.363.015.544.417.126.28.34.809.507 1.221.118.29.212.521.236.571.06.12.101.262.02.423a9.332 9.332 0 0 0-.033.07c-.06.122-.105.213-.208.333l-.126.151c-.082.1-.164.2-.236.272-.121.12-.247.25-.106.492.141.242.626 1.032 1.343 1.672.77.687 1.44.977 1.78 1.125.068.03.122.053.162.073.24.12.382.1.523-.061.14-.16.603-.705.764-.946.161-.242.322-.202.543-.121.222.08 1.409.664 1.65.785l.135.066c.166.08.28.135.328.216.06.1.06.584-.141 1.147-.201.564-1.187 1.108-1.63 1.148l-.128.014c-.41.048-.926.109-2.769-.618-2.267-.894-3.763-3.11-4.072-3.569l-.051-.075-.002-.002c-.127-.169-.984-1.312-.984-2.495 0-1.11.546-1.693.798-1.962l.047-.05a.887.887 0 0 1 .644-.303h.034c.15 0 .298 0 .428.006Z" fill="#FF4338"/></svg>
					<p class="communication__name">Whatsapp</p>
				</a>
			</div>
			<div class="communication__col">
				<a href="#" class="communication__item">
					<svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.163 2.138a9.062 9.062 0 0 1-2.616.703c.985-.59 1.65-1.425 1.997-2.503-.9.534-1.86.9-2.883 1.097C17.762.478 16.655 0 15.343 0c-1.256 0-2.327.443-3.213 1.329-.886.886-1.329 1.957-1.329 3.213 0 .338.038.685.113 1.04a12.657 12.657 0 0 1-5.225-1.398A12.878 12.878 0 0 1 1.547.83a4.45 4.45 0 0 0-.619 2.292c0 .778.183 1.5.549 2.166a4.537 4.537 0 0 0 1.476 1.617A4.506 4.506 0 0 1 .9 6.328v.056c0 1.097.345 2.06 1.034 2.89a4.469 4.469 0 0 0 2.608 1.568 4.706 4.706 0 0 1-1.195.155c-.263 0-.549-.024-.858-.07.29.909.825 1.656 1.603 2.243.778.586 1.66.888 2.644.907-1.65 1.293-3.53 1.94-5.64 1.94-.402 0-.768-.018-1.096-.056C2.11 17.321 4.434 18 6.975 18c1.613 0 3.127-.255 4.542-.766 1.416-.511 2.625-1.196 3.629-2.054a13.734 13.734 0 0 0 2.594-2.96 13.196 13.196 0 0 0 1.624-3.494 12.907 12.907 0 0 0 .52-4.24 9.512 9.512 0 0 0 2.279-2.348Z" fill="#FF4338"/></svg>
					<p class="communication__name">Twitter</p>
				</a>
			</div>
			<div class="communication__col">
				<a href="#" class="communication__item">
					<svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m8.633 11.863-.364 5.026c.52 0 .746-.22 1.016-.483l2.441-2.291 5.059 3.637c.927.508 1.581.24 1.831-.838l3.32-15.275h.001c.295-1.347-.495-1.874-1.4-1.543L1.022 7.432C-.31 7.939-.29 8.668.795 8.999l4.99 1.523 11.59-7.12c.545-.354 1.04-.158.633.197l-9.375 8.264Z" fill="#FF4338"/></svg>
					<p class="communication__name">Telegram</p>
				</a>
			</div>
		</div>
	</div>
</section>

</main>

<?php include("footer.php"); ?>