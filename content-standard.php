<?php
/*
 * The template used for displaying page content in page-standard.php
 */
?>
<div class="page-content">

    <div class="space"></div>


    <div class="container-standard">
        <div class="row">
            <div class="col-sm-12 col-lg-8 page-standard-col">
                <div class="page-standard-content">
                <?php the_content(); ?>
                </div>
            </div>
            <?php if ( has_post_thumbnail() ) : ?>
            <div class="page-standard-col col-sm-12 col-lg-4">
                <div class="page-standard-img">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <footer class="edit-footer container">
        <?php edit_post_link( __( 'Edytuj' ), '<button class="edit-link btn">', '</button>' ); ?>
    </footer>

</div>