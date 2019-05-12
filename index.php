<?php get_header(); ?>

<header class="entry-header">
    <?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(5000,1000), false, ''); ?>
    <div class="entry-img" style="background: url(<?php echo $src[0]; ?>);">
        <div class="dark-image-overlay"></div>
        <div class="container">
            <div class="entry-title">
                <h1 class="entry-title-header">Aktualności</h1>
            </div>
        </diV>
    </div>
</header>
<div class="container">
<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', 'news' ); ?>
<?php endwhile; ?>


<?php pagination(); /*wyświetlamy paginację*/ ?>


</div>
<?php get_footer(); ?>