<?php
/*
 * The template used for displaying post content in index.php
 */
?>
<div class="col-md-8">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="mini-post-img">
            <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php echo get_permalink($post->ID)?>">
                <?php the_post_thumbnail('.mini-post-img'); ?>
            </a>
            <div class="mini-post-content">
                <?php the_title( '<h3>', '</h3>'); ?>
                <?php the_excerpt(); ?>
            </div><!-- .mini-post-content -->

            <?php else : ?>

                <?php get_template_part( 'content', 'none' ); ?>

            <?php endif; ?>
        </div>
        <footer class="edit-footer">
            <?php edit_post_link( __( 'Edytuj', 'motywgrafit' ), '<button class="edit-link btn btn-success">', '</button>' ); ?>
        </footer>
    </article>
</div><!-- .col-md-4 -->