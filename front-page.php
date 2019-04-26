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

<div class="container offer">
	<h2><span>O</span>ferta</h2>
	<hr>
	<article>GRAFIT to 
W naszym salonie o powierzchni 1000 mkw oferujemy szeroki wybór między innymi mebli wypoczynkowych, kuchennych, stołów, szaf, biurek oraz mebli kalwaryjskich. <br><br>
Dla nas ważne jest żeby każdy klient był zadowolony. Dlatego doświadczeni sprzedawcy zawsze służą pomocą. Możesz z nami zaprojektować swoją kuchnię marzeń, a dowolny mebel wykonamy według podanych przez Ciebie wymiarów. <br><br>

<br><br>
W GRAFIT podążamy za aktualnymi trendami i dzięki temu każdy znajdzie w naszej ofercie coś dla siebie. 
</article>


</div>

<div class="cards">
	<div class="row">
		
		<div class="col-xl-6 col-lg-8 col-md-8 one-two">
			<div class="wrapper">
				<p class="kitchen">Pokój dzienny</p>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/living_room.png" class="img-fluid">
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 one-four">
			<div class="wrapper">
				<p class="kitchen">Pokój dziecięcy</p>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/kids_room.png" class="img-fluid">
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 one-four">
			<div class="wrapper">
				<p class="kitchen">Sypialnia</p>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/bedroom.png" class="img-fluid">
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 one-four">
			<div class="wrapper">
				<p class="kitchen">Biuro</p>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/office.png" class="img-fluid">
		</div>
		
		<div class="col-xl-3 col-lg-4 col-md-4 one-four">
			<div class="wrapper">
				<p class="kitchen">Łazienka</p>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/bathroom.png" class="img-fluid">
		</div>
		
		<div class="col-xl-6 col-lg-8 col-md-8 one-two">
			
			<div class="wrapper">
				<p class="kitchen">Kuchnia&nbsp;na&nbsp;wymiar</p>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/foto1-2.png" class="img-fluid">
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 one-four">
			<div class="wrapper">
				<p class="kitchen">Dodatki</p>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/extras.png" class="img-fluid">
		</div>
		
		<div class="col-xl-6 col-lg-8 col-md-8 one-two">
			<div class="wrapper">
				<p class="kitchen">Pokój&nbsp;młodzieżowy</p>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/teen_room.png" class="img-fluid">
		</div>
		
		<div class="col-xl-3 col-lg-4 col-md-4 one-four">
			<div class="wrapper">
				<p class="kitchen">AGD/RTV</p>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/agd.png" class="img-fluid">
		</div>

		<div class="col-xl-4 col-lg-4 col-md-4 one-four">
			<div class="wrapper">
				<p class="kitchen">Drzwi</p>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/door.png" class="img-fluid">
		</div>
		
		<div class="col-xl-4 col-lg-4 col-md-4 one-two one-3">
		<div class="wrapper">
				<p class="kitchen">Panele</p>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/floor_panels.png" class="img-fluid">
		</div>
		
		<div class="col-xl-4 col-lg-4 col-md-4 one-four one-3">
		<div class="wrapper">
				<p class="kitchen">Bramy i ogrodzenia</p>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/wisniowski.png" class="img-fluid">
		</div>
		
	</div>
</div>


<!-- sekcja Trzy kluczowe cechy -->
<div class="three-features">
	<div class="container-fluid section-padding">
		<?php
		$posts = get_posts(array(
		'include' => 26,
		'post_type' => 'any',
		'numberposts' => 1,
		'suppress_filters' => false,
		));

		echo apply_filters('the_content', $posts[0]->post_content);
		?>
	</div>
</div>

<!-- sekcja Zalety produktu -->
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

<!-- sekcja Zobacz wiecej-->
<div class="product-more">
	<div class="container section-padding">
		<?php
		$posts = get_posts(array(
		'include' => 34,
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