<div class="col-md-4">
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
            <?php endif; ?>
        </div>
    </article>
</div><!-- .col-md-4 -->