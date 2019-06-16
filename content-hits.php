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
                    $images = get_field('product_gallery');
                    if( $images ): ?>
                        <?php foreach( $images as $image ): ?>
                            <a href="<?php echo $image['url']; ?>" data-lightbox="hits" data-title="<?php the_title(); ?>">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <div class="hits-nav">
                    <?php 
                    $images = get_field('product_gallery');
                    if( $images ): ?>
                        <?php foreach( $images as $image ): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endforeach; ?>
                    <?php endif; ?>
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