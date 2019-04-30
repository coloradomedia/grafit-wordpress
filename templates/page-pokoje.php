<?php /* Template Name: Pokoje dzienne */ ?>
<?php get_header(); ?>


<div class="container brand">
	<h2><span>Pokoje </span>dzienne</h2>
	<article>Salon to najważniejsze pomieszczenie w całym mieszkaniu. To główne miejsce spotkań, w którym najczęściej przebywamy. Zadbaj więc by była w nim jakaś duża wygodna sofa i fotele.</article>
		<hr>
</div>


<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); $image = $image[0]; ?>
            
    	<header class="featured-img-header" data-speed="8" data-type="background" style="background: url('<?php echo $image; ?>') 50% 0 no-repeat fixed;">

		</header><!-- .entry-header --> 
    
		<?php else : ?>
 
	<?php endif; ?>
    
	<div class="grid grid-pad">
		<div id="primary" class="content-area col-1-1">
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
	</div><!-- grid -->




<?php get_footer(); ?>