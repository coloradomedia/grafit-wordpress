<?php get_header(); ?>

<!-- sekcja Top slider -->
<!-- <div class="top-slider">
		<//?php
		// $posts = get_posts(array(
		// 'include' => 43,
		// 'post_type' => 'any',
		// 'numberposts' => 1,
		// 'suppress_filters' => false,
		// ));

		// echo apply_filters('the_content', $posts[0]->post_content);
		?>
</div> -->


<div class="cards">
	<div class="row">
		<div class="col-xl-6 col-lg-8 col-md-8 one-2">
		<img src="<?php echo get_template_directory_uri(); ?>/img/foto1-2.png" class="img-fluid">

		</div>
		<div class="col-xl-3 col-lg-4 col-md-4 one-4">
		<img src="<?php echo get_template_directory_uri(); ?>/img/foto1-4.png" class="img-fluid">

		</div>
		<div class="col-xl-3 col-lg-4 col-md-4 one-4">
		<img src="<?php echo get_template_directory_uri(); ?>/img/foto1-4.png" class="img-fluid">

		</div>
		<div class="col-xl-3 col-lg-4 col-md-4 one-4">
			<img src="<?php echo get_template_directory_uri(); ?>/img/foto1-4.png" class="img-fluid">
			
		</div>
		<div class="col-xl-3 col-lg-4 col-md-4 one-4">
			<img src="<?php echo get_template_directory_uri(); ?>/img/foto1-4.png" class="img-fluid">
			
		</div>
		<div class="col-xl-6 col-lg-8 col-md-8 one-2">
		<img src="<?php echo get_template_directory_uri(); ?>/img/foto1-2.png" class="img-fluid">

		</div>
		<div class="col-xl-3 col-lg-4 col-md-4 one-4">
		<img src="<?php echo get_template_directory_uri(); ?>/img/foto1-4.png" class="img-fluid">

		</div>
		<div class="col-xl-6 col-lg-8 col-md-8 one-2">
		<img src="<?php echo get_template_directory_uri(); ?>/img/foto1-2.png" class="img-fluid">

		</div>
		<div class="col-xl-3 col-lg-4 col-md-4 one-4">
		<img src="<?php echo get_template_directory_uri(); ?>/img/foto1-4.png" class="img-fluid">

		</div>
		<!-- <div class="w-100"></div> -->
		<div class="col-xl-4 col-lg-4 col-md-4 one-4 one-3">
		<img src="<?php echo get_template_directory_uri(); ?>/img/foto1-3.png" class="img-fluid">

		</div>
		<div class="col-xl-4 col-lg-4 col-md-4 one-2 one-3">
		<img src="<?php echo get_template_directory_uri(); ?>/img/foto1-3.png" class="img-fluid">

		</div>
		<div class="col-xl-4 col-lg-4 col-md-4 one-4 one-3">
		<img src="<?php echo get_template_directory_uri(); ?>/img/foto1-3.png" class="img-fluid">

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