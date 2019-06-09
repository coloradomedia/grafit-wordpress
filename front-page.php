<?php get_header(); ?>

<div id="arrows" class="carousel slide carousel-fade" data-ride="carousel">
	<ol class="carousel-indicators">

		<?php
		if( have_rows('slider') ):
		$count = 0;
		while ( have_rows('slider') ) : the_row(); ?>

		<li data-target="#arrows" data-slide-to="<?php echo $count; ?>" <?php if (!$count) { ?> class="active"
			<?php }?>></li>

		<?php $count++; endwhile;

		endif; ?>

	</ol>
	<div class="carousel-inner">
		<?php
		if( have_rows('slider') ):
		$count = 0;
		while ( have_rows('slider') ) : the_row(); ?>

		<div class="carousel-item <?php if (!$count) { ?> active<?php } ?>">
			<img class="d-block w-100" src="<?php the_sub_field('slide'); ?>" alt="Slide">
			<div class="carousel-text">
				<h2 class="animated fadeInUp delay-05s"><?php the_sub_field('top_slide'); ?></h2>
				<p class="animated fadeInUp delay-1s"><?php the_sub_field('bottom_slide'); ?></p>
			</div>
		</div>

		<?php $count++; endwhile;

		else : ?>
		<h3 class="nothing">Brak slajdów :(</h3>
		<?php endif; ?>
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
<div class="mobile-top">
	<p>Salon Meblowy<br><span>GRAFIT</span><br>32-731 Żegocina 10</p>
</div>
<div class="space" id="offer"></div>
<div class="container page-content">
	<h2><span>O</span>ferta</h2>
	<hr>
	<article><?php the_field('offer_text'); ?></article>
</div>

<div class="cards">
	<div class="row">

		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 one-two">
			<a href="salon">
				<div class="wrapper">
					<p class="card-text">Pokój&nbsp;dzienny</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/living_room.jpg" class="img-fluid"
					alt="Pokój dzienny">
			</a>
		</div>

		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 one-four">
			<a href="kids">
				<div class="wrapper">
					<p class="card-text">Pokój dziecięcy</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/kids_room.jpg" class="img-fluid"
					alt="Pokój dziecięcy">
			</a>
		</div>

		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 one-four">
			<a href="bedrooms">
				<div class="wrapper">
					<p class="card-text">Sypialnia</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/bedroom.jpg" class="img-fluid"
					alt="Sypialnia">
			</a>
		</div>

		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 one-four">
			<a href="office">
				<div class="wrapper">
					<p class="card-text">Biuro</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/office.jpg" class="img-fluid" alt="Biuro">
			</a>
		</div>

		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 one-four">
			<a href="bathrooms">
				<div class="wrapper">
					<p class="card-text">Łazienka</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/bathroom.jpg" class="img-fluid"
					alt="Łazienka">
			</a>
		</div>

		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 one-two">
			<a href="kitchen">
				<div class="wrapper">
					<p class="card-text">Kuchnia&nbsp;na&nbsp;wymiar</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/foto1-2.jpg" class="img-fluid" alt="Kuchnia">
			</a>
		</div>

		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 one-four">
			<a href="extras">
				<div class="wrapper">
					<p class="card-text">Dodatki</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/extras.jpg" class="img-fluid" alt="Dodatki">
			</a>
		</div>

		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 one-two">
			<a href="teens">
				<div class="wrapper">
					<p class="card-text">Pokój&nbsp;młodzieżowy</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/teen_room.jpg" class="img-fluid"
					alt="Pokój młodzieżowy">
			</a>
		</div>

		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 one-four">
			<a href="agdrtv">
				<div class="wrapper">
					<p class="card-text">AGD/RTV</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/agd.jpg" class="img-fluid" alt="AGD i RTV">
			</a>
		</div>

		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 one-four">
			<a href="doors">
				<div class="wrapper">
					<p class="card-text">Drzwi</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/door.jpg" class="img-fluid" alt="Drzwi">
			</a>
		</div>

		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 one-two one-3">
			<a href="wood">
				<div class="wrapper">
					<p class="card-text">Panele</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/floor_panels.jpg" class="img-fluid"
					alt="Panele">
			</a>
		</div>

		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 one-four one-3">
			<a href="gateways">
				<div class="wrapper">
					<p class="card-text">Bramy i ogrodzenia</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/wisniowski.jpg" class="img-fluid"
					alt="Bramy i ogrodzenia">
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
			'posts_per_page' => 3,
			'category_name' => 'aktualnosci' ));
		while ($query->have_posts() ) : $query->the_post(); ?>
		<?php get_template_part( 'content', 'small' ); ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>

	<div class="btn-news"><a class="btn" href="news" role="button">Wszystkie wpisy <i
				class="far fa-arrow-alt-circle-right"></i></a></div>
</div>

<!-- hits section -->
<div class="hits-section">
	<h2><span>Hity </span>cenowe</h2>
	<hr>
	<div class="slider-hits justify-content-center">
		<?php 
		$query = new WP_Query( array(
			'posts_per_page' => 10,
			'category_name' => 'hity-cenowe'));
		while ($query->have_posts() ) : $query->the_post(); ?>
			<?php get_template_part( 'content', 'sale' ); ?>
		<?php endwhile; ?>

		<?php wp_reset_postdata(); ?>

	</div>

	<div class="btn-news"><a class="btn" href="news" role="button">Więcej produktów <i class="far fa-arrow-alt-circle-right"></i></a></div>
</div>


<div class="container brand">
	<h2><span>Partnerzy </span>handlowi</h2>
	<article><?php the_field('brand_description'); ?></article>
	<hr>
	<div class="brand-slider">
		<div><img src="<?php echo get_template_directory_uri(); ?>/slick/img/ml_logo.png" alt="ML Meble"></div>
		<div><img src="<?php echo get_template_directory_uri(); ?>/slick/img/halmar_logo.png" alt="Halmar"></div>
		<div><img src="<?php echo get_template_directory_uri(); ?>/slick/img/bogfran_logo.png" alt="Bogfran"></div>
		<div><img src="<?php echo get_template_directory_uri(); ?>/slick/img/signal_logo.png" alt="Signal"></div>
		<div><img src="<?php echo get_template_directory_uri(); ?>/slick/img/rabalux_logo.png" alt="Rabalux"></div>
		<div><img src="<?php echo get_template_directory_uri(); ?>/slick/img/fadome_logo.png" alt="Fadome"></div>
		<div><img src="<?php echo get_template_directory_uri(); ?>/slick/img/specjalisci.jpg" alt="Specjaliści AGD/RTV">
		</div>
	</div>
</div>

<footer class="edit-footer container">
	<?php edit_post_link( __( 'Edytuj stronę główną' ), '<button class="edit-link btn">', '</button>' ); ?>
</footer>

<?php get_footer(); ?>