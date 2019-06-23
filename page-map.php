<?php /* Template Name: Mapa */ ?>

<?php get_header(); ?>
<div class="page-standard">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'map' ); ?>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
</article>
</div>
<?php get_footer(); ?>
