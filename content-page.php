<?php
/*
 * The template used for displaying page content in page-gallery.php
 */
?>
<div class="space"></div>

<?php the_title('<h2 class="main-offer">', '</h2>'); ?>

<?php the_content(); ?>

<footer class="edit-footer container">
    <?php edit_post_link( __( 'Edytuj', 'motywgrafit' ), '<button class="edit-link btn btn-success">', '</button>' ); ?>
</footer><!-- .edit-footer -->