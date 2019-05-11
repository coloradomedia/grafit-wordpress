<?php
/*
 * The template for displaying all single posts.
 */
get_header(); ?>

<header class="entry-header">
    <?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(5000,1000), false, ''); ?>
    <div class="entry-img" style="background: url(<?php echo $src[0]; ?>);">
        <div class="dark-image-overlay"></div>
        <div class="container">
            <div class="entry-title">
                <?php the_title('<h1 class="entry-title-header">', '</h1>'); ?>
            </div>
        </diV>
    </div>
</header>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', 'single' ); ?>
<?php endwhile; ?>

<?php get_footer(); ?>