<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 */

get_header(); ?>

<div class="section-padding">
		<div id="primary" class="col-xs-12">
			<main id="main" class="site-main" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
					<?php if ( comments_open() || get_comments_number() ) :
							comments_template();
					endif; ?>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</main>
		</div>
</div>
<?php get_footer(); ?>
