<?php get_header(); ?>

<!-- sekcja Top slider -->
<div class="top-slider">
	<?php
		$posts = get_posts(array(
		'include' => 43,
		'post_type' => 'any',
		'numberposts' => 1,
		'suppress_filters' => false,
		));

		echo apply_filters('the_content', $posts[0]->post_content);
		?>
</div>

<div class="container main-offer">
<h2><span>O</span>ferta</h2>
	<hr>
	<article>GRAFIT to niepowtarzalne miejsce, w którym pasja i doświadczenie idą w parze ze stylem. <br>
		W naszym salonie o powierzchni 1000 m&#178; oferujemy szeroki wybór mebli wypoczynkowych, kuchennych, stołów,
		szaf, biurek, mebli kalwaryjskich, krzeseł, oświetlenia oraz dodatków. <br><br>
		Dla nas ważne jest aby każdy klient był zadowolony. Dlatego mili i doświadczeni doradcy zawsze służą pomocą.
		Możesz z nami zaprojektować swoją kuchnię marzeń, a dowolny mebel wykonamy według podanych przez Ciebie
		wymiarów. Współpraca z wieloma znanymi markami daje nam szelokie pole manewru a Tobie nieograniczony wybór.
		<br><br>
		W GRAFIT podążamy za aktualnymi trendami i dzięki temu każdy znajdzie w naszej ofercie coś dla siebie.
	</article>


</div>

<div class="cards">
	<div class="row">


		<div class="col-xl-6 col-lg-8 col-md-8 one-two">
			<a href="salon">
				<div class="wrapper">
					<p class="card-text">Pokój&nbsp;dzienny</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/living_room.png" class="img-fluid">
			</a>
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 one-four">
			<a href="kids">
				<div class="wrapper">
					<p class="card-text">Pokój dziecięcy</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/kids_room.png" class="img-fluid">
			</a>
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 one-four">
			<a href="bedrooms">
				<div class="wrapper">
					<p class="card-text">Sypialnia</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/bedroom.png" class="img-fluid">
			</a>
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 one-four">
			<a href="office">
				<div class="wrapper">
					<p class="card-text">Biuro</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/office.png" class="img-fluid">
			</a>
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 one-four">
			<a href="bathrooms">
				<div class="wrapper">
					<p class="card-text">Łazienka</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/bathroom.png" class="img-fluid">
			</a>
		</div>

		<div class="col-xl-6 col-lg-8 col-md-8 one-two">
			<a href="kitchen">
				<div class="wrapper">
					<p class="card-text">Kuchnia&nbsp;na&nbsp;wymiar</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/foto1-2.png" class="img-fluid">
			</a>
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 one-four">
			<a href="extras">
				<div class="wrapper">
					<p class="card-text">Dodatki</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/extras.png" class="img-fluid">
			</a>
		</div>

		<div class="col-xl-6 col-lg-8 col-md-8 one-two">
			<a href="teens">
				<div class="wrapper">
					<p class="card-text">Pokój&nbsp;młodzieżowy</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/teen_room.png" class="img-fluid">
			</a>
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 one-four">
			<a href="agdrtv">
				<div class="wrapper">
					<p class="card-text">AGD/RTV</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/agd.png" class="img-fluid">
			</a>
		</div>

		<div class="col-xl-4 col-lg-4 col-md-4 one-four">
			<a href="doors">
				<div class="wrapper">
					<p class="card-text">Drzwi</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/door.png" class="img-fluid">
			</a>
		</div>

		<div class="col-xl-4 col-lg-4 col-md-4 one-two one-3">
			<a href="wood">
				<div class="wrapper">
					<p class="card-text">Panele</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/floor_panels.png" class="img-fluid">
			</a>
		</div>

		<div class="col-xl-4 col-lg-4 col-md-4 one-four one-3">
			<a href="gateways">
				<div class="wrapper">
					<p class="card-text">Bramy i ogrodzenia</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/wisniowski.png" class="img-fluid">
			</a>
		</div>

	</div>
</div>

<div class="motto container-fluid">
	<h2>Bo wygoda, jest najważniejsza
		<hr>
	</h2>

</div>

<div class="container brand">
	<h2><span>Partnerzy </span>handlowi</h2>
	<article>Współpracujemy z wieloma znanymi markami i dzięki temu jesteśmy w stanie zaoferować bardzo wiele.</article>
	<hr>
	<div class="brand-slider">
		<div><img src="<?php echo get_template_directory_uri(); ?>/slick/img/ml_logo.png" alt=""></div>
		<div><img src="<?php echo get_template_directory_uri(); ?>/slick/img/halmar_logo.png" alt=""></div>
		<div><img src="<?php echo get_template_directory_uri(); ?>/slick/img/bogfran_logo.png" alt=""></div>
		<div><img src="<?php echo get_template_directory_uri(); ?>/slick/img/signal_logo.png" alt=""></div>
		<div><img src="<?php echo get_template_directory_uri(); ?>/slick/img/rabalux_logo.png" alt=""></div>
		<div><img src="<?php echo get_template_directory_uri(); ?>/slick/img/fadome_logo.png" alt=""></div>
		<div><img src="<?php echo get_template_directory_uri(); ?>/slick/img/meblik_logo.png" alt=""></div>
		<div><img src="<?php echo get_template_directory_uri(); ?>/slick/img/specjalisci.jpg" alt=""></div>
	</div>
</div>


<!-- sekcja kontakt -->
<div class="product-advantages darker-bg">
	<div class="container">
		<?php
		$posts = get_posts(array(
		'include' => 30,
		'post_type' => 'any',
		'numberposts' => 1,
		'suppress_filters' => false,
		));
	
		echo apply_filters('the_content', $posts[0]->post_content);
		?>
	</div>
</div>


<!-- sekcja Call to action-->
<div class="call-to-action accent-bg">
	<div class="container section-padding">
		<?php
		$posts = get_posts(array(
		'include' => 40,
		'post_type' => 'any',
		'numberposts' => 1,
		'suppress_filters' => false,
		));

		echo apply_filters('the_content', $posts[0]->post_content);
		?>
	</div>
</div>

<?php get_footer(); ?>