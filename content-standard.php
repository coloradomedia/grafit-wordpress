<?php
/*
 * The template used for displaying page content in page-standard.php
 */
?>
<div class="main-offer gallery-offer">
    
    <div class="space"></div>

    <?php the_title('<h2 class="main-offer">', '</h2>'); ?>

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="page-standard-img">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>

    <?php the_content(); ?>

    <footer class="edit-footer container">
        <?php edit_post_link( __( 'Edytuj', 'motywgrafit' ), '<button class="edit-link btn btn-success">', '</button>' ); ?>
    </footer><!-- .edit-footer -->

</div>