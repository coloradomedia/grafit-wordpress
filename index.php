<?php get_header(); ?>

<header class="entry-header">
	<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(5000,1000), false, ''); ?>
	<div class="entry-img" style="background: url(<?php echo $src[0]; ?>);">
		<div class="dark-image-overlay">
		</div>
		<!-- tytul strony -->
		<div class="container">
			<div class="entry-title">
				<?php the_title('<h1 class="entry-title-header">', '</h1>'); ?>
			</div>
		</diV>
	</div>
</header>

<div class="blog-index">
	<div class="row justify-content-center">

	<div id="primary" class="col-md-6 col-lg-9">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>


		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		</div><!-- close container -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>