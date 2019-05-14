<?php

add_theme_support( 'post-thumbnails' );


function grafit_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Główny widget', 'grafit' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget-sidebar %2$s"><div class="">',
		'after_widget'  => '</div></aside>',
		'before_title'  => ' <div class=""><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 1', 'grafit' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2', 'grafit' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 3', 'grafit' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-title">',
		'after_title'   => '</h3>',
	) );
}        
add_action( 'widgets_init', 'grafit_widgets_init' );

/*
 * Enqueue scripts and styles.
 */
 function grafit_scripts() {
    
    wp_enqueue_script( 'app-js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true );

	wp_enqueue_style( 'all-css', '//use.fontawesome.com/releases/v5.0.0/css/all.css');

     wp_enqueue_style( 'grafit-bootstrap-styles', get_template_directory_uri() . '/styles/bootstrap.min.css', array(), '4.3.1', 'all' );
     
     wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/styles/animate.css', array(), '', 'all' );

//slick slider
     wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/slick/css/slick.css', array(), '', 'all' );

	 wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/slick/css/slick-theme.css', array(), '', 'all' );
	 
     

    //  wp_enqueue_style( 'sensiblewp-open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700');










    wp_enqueue_style( 'grafit-style', get_stylesheet_uri() );

    
    

    wp_enqueue_script( 'mwp-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.3.1', true );
    
    wp_enqueue_script( 'contact-js', get_template_directory_uri() . '/js/contact.js', array('jquery'), '', true );

	wp_enqueue_script( 'slick-min-js', get_template_directory_uri() . '/slick/js/slick.min.js', array('jquery'), '', true );
    
    wp_enqueue_script( 'script-js', get_template_directory_uri() . '/slick/js/script.js', array('jquery'), '', true );


    
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'grafit_scripts' );

add_theme_support( 'post-thumbnails' );
add_image_size( 'duze', 1920, 1024 );


// Register custom login stylesheet
function my_custom_login() { echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/login-styles.css" />';
}
add_action('login_head', 'my_custom_login');

function new_excerpt_more($more){
	global $post;
	return '<div class="post-button"><a href="'. get_permalink($post->ID) .'">Czytaj całość&nbsp;<i class="fas fa-angle-double-right"></i></a></div>';
}

add_filter('excerpt_more', 'new_excerpt_more');

function new_excerpt_length($length) {
	return 15;
}
add_filter('excerpt_length', 'new_excerpt_length');


function pagination() {
    
    global $wp_query;
    
    if ($wp_query->max_num_pages > 1) { echo '<div class="pagination" role="navigation"><p>' . paginate_links( array(
        'base' => @add_query_arg('paged','%#%'),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'prev_text' => __(''),
        'next_text'    => __(''),
    ) ) . '</p></div>'; }
}