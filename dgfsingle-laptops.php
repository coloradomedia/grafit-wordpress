<?php
/* The template for displaying post type laptops. */
get_header(); ?>
<div class="news-container">
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
    <?php
    while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content', 'laptops' );
    endwhile;
    wp_reset_postdata();
    edit_post_link( __( 'Edytuj' ), '<footer class="edit-footer">', '</footer>', null, 'post-edit-link animated zoomIn');
    ?>
</div>
<?php get_footer(); ?>