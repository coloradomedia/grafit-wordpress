<?php

// function register_my_menus() {
//     register_nav_menus(
//       array(
//         'header-menu' => __( 'Menu główne' ),
//         'extra-menu' => __( 'Extra Menu' )
//       )
//     );
//   }
//   add_action( 'init', 'register_my_menus' );


// function prefix_modify_nav_menu_args( $args ) {
//     return array_merge( $args, array(
//         'walker' => WP_Bootstrap_Navwalker(),
//     ) );
// }
// add_filter( 'wp_nav_menu_args', 'prefix_modify_nav_menu_args' );

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'Motyw GRAFIT' ),
) );


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
    //  wp_enqueue_style( 'reset-css', get_template_directory_uri() . '/styles/reset.css', array(), '', 'all' );
    
     wp_enqueue_style( 'grafit-bootstrap-styles', get_template_directory_uri() . '/styles/bootstrap.min.css', array(), '4.3.1', 'all' );
     
     wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/styles/animate.css', array(), '', 'all' );

//slick slider
     wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/slick/css/slick.css', array(), '', 'all' );

     wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/slick/css/slick-theme.css', array(), '', 'all' );
     












    wp_enqueue_style( 'grafit-style', get_stylesheet_uri() );

    
    

    wp_enqueue_script( 'mwp-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.3.1', true );
    
	wp_enqueue_script( 'slick-min-js', get_template_directory_uri() . '/slick/js/slick.min.js', array('jquery'), '', true );
    
    wp_enqueue_script( 'script-js', get_template_directory_uri() . '/slick/js/script.js', array('jquery'), '', true );
    
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'grafit_scripts' );



        
// Register custom login stylesheet
function my_custom_login() {
echo '<link rel="stylesheet" type="text/css"
href="' . get_bloginfo('stylesheet_directory') .
'/login/login-styles.css" />';
}
add_action('login_head', 'my_custom_login');