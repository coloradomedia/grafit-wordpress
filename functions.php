<?php
add_theme_support( 'post-thumbnails' );
add_image_size( 'Full HD', 1920, 1024 );
add_image_size( 'Galeria', 500, 330, true );

function grafit_widgets_init() {
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
     
     wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/styles/animate.css', array(), '', 'all' );

//slick slider
     wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/slick/css/slick.css', array(), '', 'all' );

	 wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/slick/css/slick-theme.css', array(), '', 'all' );

	 wp_enqueue_style( 'bootstrap-dropdownhover-css', get_template_directory_uri() . '/styles/bootstrap-dropdownhover.css', array(), '', 'all' );

	 wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/styles/lightbox.min.css', array(), '', 'all' );



    wp_enqueue_style( 'grafit-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'slick-min-js', get_template_directory_uri() . '/slick/js/slick.min.js', array('jquery'), '', true );
    
    wp_enqueue_script( 'script-js', get_template_directory_uri() . '/slick/js/script.js', array('jquery'), '', true );
	
	wp_enqueue_script( 'bootstrap-dropdownhover-js', get_template_directory_uri() . '/js/bootstrap-dropdownhover.js', array('jquery'), '', true );
	
    wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/js/lightbox-plus-jquery.min.js', array('jquery'), '', true );

    
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
}}
add_action( 'wp_enqueue_scripts', 'grafit_scripts' );



// Register custom login stylesheet
function my_custom_login() { echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/login-styles.css" />';
}
add_action('login_head', 'my_custom_login');

function my_login_logo_url(){
	return ( 'coloradomedia.pl' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title(){
	return ( 'ColoradoMedia.pl' );
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

function hide_logo() {
	global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
    $wp_admin_bar->remove_menu('about');
    $wp_admin_bar->remove_menu('wporg');
    $wp_admin_bar->remove_menu('documentation');
    $wp_admin_bar->remove_menu('support-forums');
    $wp_admin_bar->remove_menu('feedback');
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'hide_logo' );

function thanks() {
    echo 'ColoradoMedia.pl - Piotr Majkrzak, FrontEnd Developer'; //wpisz swój tekst
}
add_filter('admin_footer_text', 'thanks');


function new_excerpt_length($length) {
	return 20;
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
// Wyświetlanie aktualności na stronie bloga
function my_home_category( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'cat', '10' );
    }
	
    if ( ! $query->is_main_query() || $query->is_admin() )
	return false; 
	
    // if ( $query->is_category() ) {
		// $query->set( 'cat', '11' );
    //     $query->set( 'posts_per_page', 10 );
    // }
    // return $query;
}
add_action( 'pre_get_posts', 'my_home_category' );

//CUSTOM POST TYPES
function laptops_post_type() {
    $labels = array(
        'name' => 'Laptopy',
        'singular_name' => 'Laptop',
        'edit_item' => 'Edytuj laptopa',
        'new_item' => 'Nowy laptop',
        'add_new_item' => 'Dodaj nowego laptopa',
        'add_new' => 'Dodaj laptopa',
        'all_items' => 'Wszystkie laptopy',
        'view_item' => 'Wyświetl laptopa',
        'search_item' => 'Szukaj laptopa'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'default_category' => 2,
        'supports' => array( 
            'title',
            'thumbnail',
            'revisions'
        ),
        'taxonomies' => array(
            'category', 
            'post_tag'
        ),
        'menu_position' => 4
    );
    register_post_type( 'laptops', $args );
}
add_action( 'init', 'laptops_post_type' );