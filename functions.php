<?php
/**
 * lineasavanzadas functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lineasavanzadas
 */

if ( ! function_exists( 'lineasavanzadas_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lineasavanzadas_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on lineasavanzadas, use a find and replace
	 * to change 'lineasavanzadas' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'lineasavanzadas', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'lineasavanzadas' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'lineasavanzadas_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'lineasavanzadas_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lineasavanzadas_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lineasavanzadas_content_width', 640 );
}
add_action( 'after_setup_theme', 'lineasavanzadas_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lineasavanzadas_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lineasavanzadas' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'lineasavanzadas' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'lineasavanzadas_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lineasavanzadas_scripts() {


	/* css ======== */

	wp_enqueue_style( 'lineasavanzadas-style', get_stylesheet_uri() );

	wp_enqueue_style('site-css', get_template_directory_uri().'/css/app.css');

	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.css');

	wp_enqueue_style('owlcarouselthemes', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

	wp_enqueue_style('owlcarousel', get_template_directory_uri().'/owl-carousel/owl.carousel.css');

	wp_enqueue_style('foundation-css', 'https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css' );



	/* JS ========= */

	wp_enqueue_script('jquery');

	wp_enqueue_script( 'lineasavanzadas-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'lineasavanzadas-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );


	wp_enqueue_script('foundation-site-js', get_template_directory_uri().'/bower_components/foundation-sites/dist/js/foundation.js', array(), '6.4.0', true );

	wp_enqueue_script('what-input', get_template_directory_uri().'/bower_components/what-input/dist/what-input.js', array(), '4.1.6', true );

	wp_enqueue_script('jquery-foundation', get_template_directory_uri().'/bower_components/jquery/dist/jquery.js', array(), '3.2.1', true );

	wp_enqueue_script('foundation-js', get_template_directory_uri().'/js/app.js', array(), '1.1.1', true );


	wp_enqueue_script('parallax', get_template_directory_uri().'/js/parallax.js', array(), '1.3.1', true );

	wp_enqueue_script('owlcarouselJS', get_template_directory_uri().'/owl-carousel/owl.carousel.js', array(), '1.3.1', true );


  wp_enqueue_script('gmap','https://maps.googleapis.com/maps/api/js?key=AIzaSyAotgXiiIPK1kGYcLrm0FBiB-dyW6EuAvc', array(), '1.3.1');

	wp_enqueue_script('Script', get_template_directory_uri().'/js/scriptsweb.js', array(), '1.3.1', true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


}

add_action( 'wp_enqueue_scripts', 'lineasavanzadas_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Additional features to allow styling of the templates.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/* Código extra - EfectoVirtual*/
require get_template_directory() . '/inc/ev.php';
