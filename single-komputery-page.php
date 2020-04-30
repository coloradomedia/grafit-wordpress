<?php
/*
Template Name: Komputery
Template Post Type: post
*/
get_header(); ?>

<header class="entry-header">

        <div class="entry-img" style="background: url(<?php echo get_template_directory_uri(); ?>/img/pattern.jpg);">
    
            <div class="dark-image-overlay"></div>
            <div class="container">
                <div class="entry-title animated fadeInUp">
                    <?php the_title('<h1 class="entry-title-header">', '</h1>'); ?>
                </div>
            </div>
        </div>
</header>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'template-parts/content', 'komputery' ); ?>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<div class="space"></div>
<?php get_footer(); ?>