<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package motywgrafit
 */

get_header(); ?>


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

<div class=" section-padding">

		<div id="primary" class="col-xs-12">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

</div><!-- .container -->
</div>
<?php get_footer(); ?>
