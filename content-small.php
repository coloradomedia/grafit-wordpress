<div class="col-md-4">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-img">
            <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail(); ?>
            <?php the_title( '<h3">', '</h3>'); ?>
            <?php endif; ?>
            <!-- <header class="entry-header"> -->
            <!-- </header> -->
        </div>
        <div class="entry-content">
            <?php the_excerpt(); 
            ?>

        </div><!-- .entry-content -->

</article>
</div><!-- .col-md-4 -->
