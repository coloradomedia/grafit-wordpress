<?php
/*
 * The template used for displaying page content in page-gallery.php
 */
?>
<div class="main-offer gallery-offer">
    
    <div class="space"></div>

    <?php the_title('<h2 class="main-offer">', '</h2>'); ?>

    <?php the_content(); ?>

    <footer class="edit-footer container">
        <?php edit_post_link( __( 'Edytuj' ), '<button class="edit-link btn">', '</button>' ); ?>
    </footer>

</div>