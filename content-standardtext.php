<?php
/*
 * The template used for displaying page content in page-standardtext.php
 */
?>
<div class="main-offer gallery-offer">

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
        <?php edit_post_link( __( 'Edytuj', 'motywgrafit' ), '<button class="edit-link btn btn-success">', '</button>' ); ?>
    </footer><!-- .edit-footer -->

</div>