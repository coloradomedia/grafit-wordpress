<?php
/*
 * The template used for displaying page content in page-gallerycatalogs.php
 */
?>
<div class="page-content">
    
    <div class="space"></div>

    <div class="container catalog-container">
        <?php if( have_rows('catalog') ):
            while ( have_rows('catalog') ) : the_row(); ?>

                <div class="row justify-content-center animated zoomIn">
                        <div class="col-sm-2">
                            <img class="img-fluid" src="<?php the_sub_field('catalog_brand'); ?>" alt="Marka">
                        </div>
                        <div class="col-sm-6"><p class="catalog-description"><?php the_sub_field('catalog_description'); ?></p></div>
                        <div class="col-sm-2"><a class="btn catalog-link" href="<?php the_sub_field('catalog_link'); ?>" target="_blank">Zobacz</a></div>
                </div>
                
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>

                <h3 class="nothing">Tu nic nie ma :(</h3>

        <?php endif; ?>
    </div>


    <footer class="edit-footer container">
        <?php edit_post_link( __( 'Edytuj' ), '<button class="edit-link btn">', '</button>' ); ?>
    </footer>

</div>