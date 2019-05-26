<?php /* Template Name: Galeria */ ?>

<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'gallery' ); ?>

    <?php endwhile; ?>

</article>

<?php get_footer(); ?>