<?php /* Template Name: Standard Text */ ?>

<?php get_header(); ?>
<div class="page-standard">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'content', 'standardtext' ); ?>

    <?php endwhile; // end of the loop. ?>

</article><!-- #post-## -->
</div>
<?php get_footer(); ?>
