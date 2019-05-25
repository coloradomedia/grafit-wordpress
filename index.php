<?php 
/* The template for displaying blog page. */
get_header(); ?>
<div class="news-container">
    <header class="entry-header">
        <?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(5000,1000), false, ''); ?>
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="entry-img" style="background: url(<?php echo $src[0]; ?>);">
        <?php else : ?>
            <div class="entry-img"
                style="background: url(<?php echo get_template_directory_uri(); ?>/img/slider1.jpg);">
        <?php endif; ?>
                <div class="dark-image-overlay"></div>
                <div class="container">
                    <div class="entry-title">
                        <h1 class="entry-title-header animated fadeInUp">Aktualności</h1>
                    </div>
                </diV>
            </div>
    </header>

    <div class="space-news"></div>

    <div class="container">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', 'news' ); ?>
        <?php endwhile; ?>

        <?php pagination(); ?>

    </div>
</div>
<?php get_footer(); ?>