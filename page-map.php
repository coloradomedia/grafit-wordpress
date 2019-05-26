<?php /* Template Name: Mapa */ ?>

<?php get_header(); ?>
<div class="page-standard">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'map' ); ?>

    <?php endwhile; ?>

</article>
</div>
<?php get_footer(); ?>
