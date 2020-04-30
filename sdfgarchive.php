<?php 
/* The template for displaying product list page. */

get_header(); ?>
<div class="news-container">
    <header class="entry-header">

            <div class="entry-img" style="background: url(<?php echo get_template_directory_uri(); ?>/img/pattern.jpg);">

                <div class="dark-image-overlay"></div>
                <div class="container">
                    <div class="entry-title">
                        <?php if(is_post_type_archive( 'laptops' )) : ?>
                        <h1 class="entry-title-header animated fadeInUp">Laptopy</h1>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
    </header>
    <div class="space"></div>
                <div class="container list-container">

                    <?php

                    $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

                    if(is_post_type_archive( 'laptops' )) : 
                        $args = array(
                            'paged' => $paged,
                            'post_type' => 'laptops'
                    );
                        $the_query = new WP_Query( $args );
                    while ($the_query->have_posts() ) : $the_query->the_post(); 
                        get_template_part( 'content', 'product-list' ); 
                    endwhile;
                        wp_reset_postdata();

                    endif; 

                    $big = 999999999; // need an unlikely integer
                    echo '<div class="pagination" role="navigation"><p>' .
                    paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $the_query->max_num_pages,
                        'prev_text' => __('&laquo;'),
                        'next_text'    => __('&raquo;'),
                    )) . '</p></div>';


                    ?>


    </div>
</div>
<?php get_footer(); ?>