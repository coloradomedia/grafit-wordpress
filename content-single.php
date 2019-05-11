<?php
/*
 * The template used for displaying post content in single.php
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container single-post-content">
        
        <div class="single-post-fullwidth">
            <div class="post-date-fullwidth">
                <?php the_date(); ?>
            </div>
            <?php the_content(); ?>
        </div>

        <footer class="edit-footer">
            <?php edit_post_link( __( 'Edytuj', 'motywgrafit' ), '<button class="edit-link btn btn-success">', '</button>' ); ?>
        </footer>

    </div>
</article>