    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-img">
            <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail(); ?>
            <?php endif; ?>
        </div>

        <div class="entry-container">
            <header class="entry-header">
                <?php the_title( '<h3">', '</h3>'); ?>

            </header>
        </div>

        <div class="entry-content">
            <?php the_content(); 
            ?>

        </div><!-- .entry-content -->

        </div>
    </article>