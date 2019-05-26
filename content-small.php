<?php
/*
 * The template used for displaying post content in front-page.php
 */
?>
<div class="col-sm-6 col-md-4 col-sm-auto">
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
                <?php the_excerpt(); ?>
                <div class="btn-small"><a href="<?php echo get_permalink($post->ID)?>" class="btn btn-small-post">Więcej</a></div>
            </div>
        </div>
    </article>
</div>