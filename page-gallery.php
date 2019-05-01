<?php /* Template Name: Galeria */ ?>

<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="main-offer gallery-offer">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', 'page' ); ?>

        <?php endwhile; // end of the loop. ?>
    </div>

</article><!-- #post-## -->

<?php get_footer(); ?>