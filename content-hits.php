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

                    <a href="<?php the_sub_field('photo') ?>" data-lightbox="hits" data-title="<?php the_title(); ?>"><img src="<?php the_sub_field('photo') ?>" alt=""></a>


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
            <div class="col-md-6 single-post-text product-content">
                <div class="price-small"><?php the_field('price_small'); ?> zł</div>
                <div class="price"><?php the_field('price'); ?> zł</div>
                <div class="product-description"><?php the_field('product_description', $post->ID); ?></div>
                <div>Kup na raty w&nbsp;<img src="<?php echo get_template_directory_uri(); ?>/img/credit_logo_mini.png" alt="">&nbsp;&nbsp;lub&nbsp;&nbsp;<img src="<?php echo get_template_directory_uri(); ?>/img/santander_logo_mini.png" alt=""></div>
                <div class="reservation">Zarezerwuj teraz i odbierz w salonie</div>
                <div class="call"><i class="fas fa-phone"></i> Zadzwoń: 14&nbsp;613&nbsp;21&nbsp;04</div>
            
            </div>
            <footer class="edit-footer container">
                <?php edit_post_link( __( 'Edytuj' ), '<button class="edit-link btn">', '</button>' ); ?>
            </footer>
        </div>
    </div>
</article>