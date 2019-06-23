<?php
/*
 * The template used for displaying page content in page-map.php
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2575.125434606476!2d20.417024315927094!3d49.80250944171894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716193cc9dcd637%3A0xe6da349ac38915b9!2sMEBLE+%C5%BBEGOCINA+GRAFIT+S.C+.SALON+MEBLOWY!5e0!3m2!1spl!2spl!4v1558877525572!5m2!1spl!2spl" width="100%" height="450" frameborder="0" style="border:0; margin-bottom: -10px" allowfullscreen=""></iframe>
    </div>


    <footer class="edit-footer container">
        <?php edit_post_link( __( 'Edytuj' ), '<button class="edit-link btn">', '</button>' ); ?>
    </footer>

</div>