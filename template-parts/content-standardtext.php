<?php
/*
 * The template used for displaying page content in page-standardtext.php
 */
?>
<div class="page-content">

    <div class="space"></div>


    <div class="container-standard">
        <div class="row">
            <div class="col-sm-12 page-standard-col">
                <div class="page-standard-content">
                <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
    <footer class="edit-footer container">
        <?php edit_post_link( __( 'Edytuj' ), '<button class="edit-link btn">', '</button>' ); ?>
    </footer><!-- .edit-footer -->

</div>