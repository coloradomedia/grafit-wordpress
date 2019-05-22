<div class="col-sm-6 col-md-4 col-sm-auto">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="mini-post-img img-fluid">
            <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php echo get_permalink($post->ID)?>">
            <div class="img-fluid">
                <?php the_post_thumbnail(); ?>
            </div>
            </a>
            <div class="mini-post-content">
                <?php the_title( '<h3>', '</h3>'); ?>
                <?php the_excerpt(); ?>
            </div><!-- .mini-post-content -->
            <?php endif; ?>
        </div>
    </article>
</div><!-- .col-md-4 -->