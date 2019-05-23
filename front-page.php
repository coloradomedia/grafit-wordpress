<?php get_header(); ?>

<div id="arrows" class="carousel slide carousel-fade" data-ride="carousel">
	<ol class="carousel-indicators">
		
		<?php
		if( have_rows('slider') ):
		$count = 0;
		while ( have_rows('slider') ) : the_row(); ?>

		<li data-target="#arrows" data-slide-to="<?php the_sub_field('slide'); ?>"
		<?php if (!$count) { ?> class="active"<?php }?>></li>

		<?php $count++; endwhile;

		else :

		endif; ?>

	</ol>
<div class="carousel-inner">
	<?php
		if( have_rows('slider') ):
		$count = 0;
		while ( have_rows('slider') ) : the_row(); ?>
		
		<div class="carousel-item <?php if (!$count) { ?> active<?php } ?>">
			<img class="d-block w-100" src="<?php the_sub_field('slide'); ?>"
				alt="1 slide">
			<div class="carousel-text">
				<h2 class="animated fadeInUp"><?php the_sub_field('top_slide'); ?></h2>
				<h3 class="animated fadeInUp"><?php the_sub_field('bottom_slide'); ?></h3>
				<p class="animated fadeInUp"><?php the_sub_field('bottom_slide_p'); ?></p>
			</div>
		</div>

		<?php $count++; endwhile;

		else :

		endif;
	?>
</div>
	<a class="carousel-control-prev" href="#arrows" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Poprzedni</span>
	</a>
	<a class="carousel-control-next" href="#arrows" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Następny</span>
	</a>
</div>

<div class="space" id="offer"></div>
<div class="container main-offer">
	<h2><span>O</span>ferta</h2>
	<hr>
	<article><?php the_field('offer_text'); ?></article>
</div>

<div class="cards">
	<div class="row">

		<div class="col-xl-6 col-lg-8 col-md-8 col-sm-8 one-two">
			<a href="salon">
				<div class="wrapper">
					<p class="card-text">Pokój&nbsp;dzienny</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/living_room.jpg" class="img-fluid">
			</a>
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 one-four">
			<a href="kids">
				<div class="wrapper">
					<p class="card-text">Pokój dziecięcy</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/kids_room.jpg" class="img-fluid">
			</a>
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 one-four">
			<a href="bedrooms">
				<div class="wrapper">
					<p class="card-text">Sypialnia</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/bedroom.jpg" class="img-fluid">
			</a>
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 one-four">
			<a href="office">
				<div class="wrapper">
					<p class="card-text">Biuro</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/office.jpg" class="img-fluid">
			</a>
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 one-four">
			<a href="bathrooms">
				<div class="wrapper">
					<p class="card-text">Łazienka</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/bathroom.jpg" class="img-fluid">
			</a>
		</div>

		<div class="col-xl-6 col-lg-8 col-md-8 col-sm-8 one-two">
			<a href="kitchen">
				<div class="wrapper">
					<p class="card-text">Kuchnia&nbsp;na&nbsp;wymiar</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/foto1-2.jpg" class="img-fluid">
			</a>
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 one-four">
			<a href="extras">
				<div class="wrapper">
					<p class="card-text">Dodatki</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/extras.jpg" class="img-fluid">
			</a>
		</div>

		<div class="col-xl-6 col-lg-8 col-md-8 col-sm-8 one-two">
			<a href="teens">
				<div class="wrapper">
					<p class="card-text">Pokój&nbsp;młodzieżowy</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/teen_room.jpg" class="img-fluid">
			</a>
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 one-four">
			<a href="agdrtv">
				<div class="wrapper">
					<p class="card-text">AGD/RTV</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/agd.jpg" class="img-fluid">
			</a>
		</div>

		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 one-four">
			<a href="doors">
				<div class="wrapper">
					<p class="card-text">Drzwi</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/door.jpg" class="img-fluid">
			</a>
		</div>

		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 one-two one-3">
			<a href="wood">
				<div class="wrapper">
					<p class="card-text">Panele</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/floor_panels.jpg" class="img-fluid">
			</a>
		</div>

		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 one-four one-3">
			<a href="gateways">
				<div class="wrapper">
					<p class="card-text">Bramy i ogrodzenia</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/wisniowski.jpg" class="img-fluid">
			</a>
		</div>

	</div>
</div>

<div class="motto container-fluid">
	<h2><?php the_field('motto'); ?>
		<hr>
	</h2>
</div>

<div class="news">
<h2>Aktualności</h2>
<hr>
	<div class="row justify-content-center">
			<?php 
			$query = new WP_Query( array(
				'posts_per_page' => 3));
			while ($query->have_posts() ) : $query->the_post(); ?>
			<?php get_template_part( 'content', 'small' ); ?>
			<?php endwhile; ?>
	</div>
	<div class="btn-news"><a class="btn" href="news" role="button">Wszystkie wpisy <i class="far fa-arrow-alt-circle-right"></i></a></div>
</div>

<!-- contact section -->
<div class="contact-form darker-bg">
	<div class="container">
		Formularz kontaktowy
	</div>
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
		<div><img src="<?php echo get_template_directory_uri(); ?>/slick/img/specjalisci.jpg" alt=""></div>
	</div>
</div>


<?php get_footer(); ?>