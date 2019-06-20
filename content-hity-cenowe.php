<?php
/*
 * The template used for displaying post content in index.php
 */
?>
<div class="news-box animated zoomIn">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="row list-post">
            <div class="list-post-img col-sm-4">
                <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php echo get_permalink($post->ID)?>">
                    <?php the_post_thumbnail('Galeria'); ?>
                </a>
                <?php else : ?>
                <a href="<?php echo get_permalink($post->ID)?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder_logo.jpg" alt="Logo Grafit">
                </a>
                <?php endif; ?>
            </div>
            <div class="list-post-content col-sm-8">
                <?php the_title( '<h2>', '</h2>' ); ?>
                      <p><?php the_field('short_description', $post->ID); ?></p>
                <a href="<?php echo get_permalink($post->ID)?>" class="btn red-btn">Sprawdź cenę</a>
            </div>


            <!-- <div class="space"></div> -->
        </div>
    </article>
</div>
<footer class="edit-footer">
    <?php edit_post_link( __( 'Edytuj' ), '<button class="edit-link btn animated zoomIn delay-05s">', '</button>' ); ?>
</footer>