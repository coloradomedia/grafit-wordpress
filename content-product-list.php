<?php
/* The template used for displaying post content in product lists on single-(laptops, pc).php */
?> 
<div class="animated zoomIn">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="row list-post">
            <div class="list-post-img col-sm-4">
                <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php echo get_permalink($post->ID);?>">
                    <?php the_post_thumbnail('Galeria'); ?>
                </a>
                <?php else : ?>
                <a href="<?php echo get_permalink($post->ID);?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder_logo.jpg" alt="">
                </a>
                <?php endif; ?>
            </div>
            <div class="list-post-content laptops col-sm-8">
                <?php the_title( '<h2>', '</h2>' ); ?>
                    <div class="laptops-spec">
                <div><b>Procesor:</b> <?php the_field('CPU'); ?></div>
                <div><b>Pamięć:</b> <?php the_field('memory'); ?></div>
                <div><b>Grafika:</b> <?php the_field('graphics'); ?></div>
                <div><b>Dysk:</b> <?php the_field('disc'); ?></div>
                <div class="prices">
                    <?php if( get_field('price') ): ?>
                    <div class="old-price"><?php the_field('price'); ?>&nbsp;zł</div>
                    <?php endif; ?>
                    <?php if( get_field('promo_price') ): ?>
                    <div class="mini-price-list"><?php the_field('promo_price'); ?><span>,00&nbsp;zł</span></div>
                    <?php endif; ?>
                </div>
                <a href="<?php echo get_permalink($post->ID)?>" class="btn more">Więcej</a>
            </div>
            </div>
            
        </div>
                <footer class="edit-footer container">
                    <?php edit_post_link( __( 'Edytuj' ), '<button class="edit-link btn">', '</button>' ); ?>
                </footer>
    </article>
</div>
