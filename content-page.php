<?php
/*
 * The template used for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php the_content(); ?>

    <footer class="edit-footer">
        <?php edit_post_link( __( 'Edytuj', 'motywgrafit' ), '<button class="edit-link btn btn-success">', '</button>' ); ?>
    </footer><!-- .edit-footer -->

</article><!-- #post-## -->