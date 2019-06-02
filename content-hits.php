<?php
/*
 * The template used for displaying post content in single-hits.php
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="hits-container single-post-content">
        <div class="row">
            <div class="col-md-6 single-post-img">
            <div class="hits">
                <?php

                if( have_rows('photos') ):

                    while ( have_rows('photos') ) : the_row(); ?>

                    <img src="<?php the_sub_field('photo') ?>" alt="">


                    <?php endwhile; else :?> <span>BRAK ZDJĘĆ</span> <?php endif; ?>
            </div>

            <div class="hits-nav">
                <?php

                if( have_rows('photos') ):

                    while ( have_rows('photos') ) : the_row(); ?>

                    <img src="<?php the_sub_field('photo') ?>" alt="">


                    <?php endwhile; else :?> <span>BRAK ZDJĘĆ</span> <?php endif; ?>
            </div>

            </div>
            <div class="col-md-6 single-post-text">
                <div><?php the_field('price'); ?></div>
                <div><?php the_field('product_description', $post->ID); ?></div>
            
            </div>
            <footer class="edit-footer container">
                <?php edit_post_link( __( 'Edytuj' ), '<button class="edit-link btn">', '</button>' ); ?>
            </footer>
        </div>
    </div>
</article>