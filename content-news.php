<?php
/*
 * The template used for displaying post content in index.php
 */
?>
<div class="news-box">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="row list-post">
            <div class="list-post-img col-md-4">
                <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php echo get_permalink($post->ID)?>">
                    <?php the_post_thumbnail('.mini-post-img'); ?>
                </a>
                <?php else : ?>
                <a href="<?php echo get_permalink($post->ID)?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder_logo.jpg" alt="">
                </a>
                <?php endif; ?>
            </div>
            <div class="list-post-content col-md-8">
                <?php the_title( '<h2>', '</h2>');
                      the_excerpt();?>



</div>


<!-- <div class="space"></div> -->
</div>
</article>
</div>
                <footer class="edit-footer">
                    <?php edit_post_link( __('Edytuj'), '<button class="edit-link btn btn-success">', '</button>' ); ?>
                </footer>