<?php /* Template Name: Galeria */ ?>

<?php get_header(); ?>

<div class="space"></div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="main-offer gallery-offer">

        <?php the_title('<h2 class="main-offer">', '</h2>'); ?>

        <?php the_content(); ?>
        
    </div>

    <footer class="edit-footer container">
        <?php edit_post_link( __( 'Edytuj', 'motywgrafit' ), '<button class="edit-link btn btn-success">', '</button>' ); ?>
    </footer><!-- .edit-footer -->

</article><!-- #post-## -->

<?php get_footer(); ?>