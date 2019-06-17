<?php
/*
 * The template used for displaying page content in page-gallery.php
 */
?>
<div class="page-content">

    <div class="space"></div>

    <?php the_title('<h2 class="page-header">', '</h2>'); ?>

    <div class="container">
       <?php the_content(); ?>     
    </div>


    <div class="row no-gutters justify-content-md-center">

        <?php 
        $images = get_field('gallery');
        if( $images ): ?>
            <?php foreach( $images as $image ): ?>
                <div class="col-md-3 col-sm-4 col-xs-6 align-self-center">
                    <a href="<?php echo $image['url']; ?>" data-lightbox="hits" data-title="<?php echo $image['title']; ?>">
                        <img class="img-fluid" src="<?php echo $image['sizes']['Galeria']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>


    <footer class="edit-footer container">
        <?php edit_post_link( __( 'Edytuj' ), '<button class="edit-link btn">', '</button>' ); ?>
    </footer>

</div>