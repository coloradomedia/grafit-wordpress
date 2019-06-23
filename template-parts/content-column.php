<?php
/*
 * The template used for displaying post content in single-column.php
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container single-post-content">
        <div class="row">
            <div class="col-md-3 single-post-img">

                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail(); ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder_logo.jpg" alt="Logo Grafit">
                <?php endif; ?>

                <div class="date">
                    <?php the_date(); ?>
                </div>
            </div>
            <div class="col-md-9 single-post-text">
                <?php the_content(); ?>
            </div>
            <footer class="edit-footer container">
                <?php edit_post_link( __( 'Edytuj' ), '<button class="edit-link btn">', '</button>' ); ?>
            </footer>
        </div>
    </div>
</article>