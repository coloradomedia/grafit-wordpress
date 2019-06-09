<?php
/*
 * The template used for displaying hits in front-page.php
 */
?>
<div class="container-fluid">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="mini-post-img img-fluid">
            <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php echo get_permalink($post->ID)?>">
                    <div class="img-fluid">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </a>
            <?php else : ?>
                <a class="logo-placeholder" href="<?php echo get_permalink($post->ID)?>">
                    <div class="img-fluid">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/blue-placeholder.jpg" alt="Logo Grafit">
                    </div> 
                </a>
            <?php endif; ?>

            <div class="mini-post-content">
                <?php the_title( '<h3>', '</h3>'); ?>
                <?php the_field('cena', $post->ID); ?>
                <div class="btn-small"><a href="<?php echo get_permalink($post->ID)?>" class="btn btn-small-post">Zobacz cenę</a></div>
            </div>
        </div>
    </article>
</div>