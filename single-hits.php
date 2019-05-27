<?php
/*
Template Name: Hity cenowe
Template Post Type: post
*/
get_header(); ?>

<header class="entry-header">
    <?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(5000,1000), false, ''); ?>

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="entry-img" style="background: url(<?php echo $src[0]; ?>);">
    <?php else : ?>
        <div class="entry-img" style="background: url(<?php echo get_template_directory_uri(); ?>/img/blue-placeholder.jpg);">
    <?php endif; ?>
    
            <div class="dark-image-overlay"></div>
            <div class="container">
                <div class="entry-title">
                    <?php the_title('<h1 class="entry-title-header">', '</h1>'); ?>
                </div>
            </div>
        </div>
</header>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', 'hits' ); ?>
<?php endwhile; ?>

<?php get_footer(); ?>