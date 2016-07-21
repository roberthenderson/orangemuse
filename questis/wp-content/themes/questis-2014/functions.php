<?php
/**
 * questis-2014 functions and definitions
 *
 * @package questis-2014
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'questis_2014_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function questis_2014_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on questis-2014, use a find and replace
	 * to change 'questis-2014' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'questis-2014', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'questis-2014' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'questis_2014_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // questis_2014_setup
add_action( 'after_setup_theme', 'questis_2014_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function questis_2014_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'questis-2014' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'questis_2014_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function questis_2014_scripts() {
	wp_enqueue_style( 'questis-2014-style', get_stylesheet_uri() );

	wp_enqueue_script( 'questis-2014-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'questis-2014-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'questis_2014_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Questis Specific Functions:
 */
function digwp_bloginfo_shortcode( $atts ) {
	extract(shortcode_atts(array(
		'key' => '',
	), $atts));
	return get_bloginfo($key);
}
add_shortcode('bloginfo', 'digwp_bloginfo_shortcode');

function add_head_js() {
	wp_register_script('head-js', get_template_directory_uri() . '/js/head.min.js');
	wp_enqueue_script('head-js');
}
add_action('wp_enqueue_scripts', 'add_head_js');

// Add Flexslider script to only Advice and Invest page
function add_flexslider() {
	if(is_page('advice')) {
		wp_register_script('flexslider-script', get_template_directory_uri() . '/js/flexslider/jquery.flexslider-min.js', array('jquery'));
		wp_enqueue_script('flexslider-script');
	}
}
add_action('wp_enqueue_scripts', 'add_flexslider');

function add_flexslider_invest() {
	if(is_page('invest')) {
		wp_register_script('flexslider-invest-script', get_template_directory_uri() . '/js/flexslider/jquery.flexslider-min-invest.js', array('jquery'));
		wp_enqueue_script('flexslider-invest-script');
	}
}
add_action('wp_enqueue_scripts', 'add_flexslider_invest');

// Add Flexslider script to only Advice and Invest page
function add_fancybox() {
	if(is_page('home')) {
		wp_register_script('fancybox-script', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array('jquery'));
		wp_enqueue_script('fancybox-script');
	}
}
add_action('wp_enqueue_scripts', 'add_fancybox');

// Add jQuery UI script to only Invest page
function add_jquery_ui() {
	if(is_page('invest')) {
		wp_register_script('jquery-ui-script', get_template_directory_uri() . '/js/jquery-ui.min.js', array('jquery'));
		wp_enqueue_script('jquery-ui-script');
	}
}
add_action('wp_enqueue_scripts', 'add_jquery_ui');

// Add Froogaloop script
function add_froogaloop() {
	wp_register_script('froogaloop', '//f.vimeocdn.com/js/froogaloop2.min.js', array('jquery'));
	wp_enqueue_script('froogaloop');
}
add_action('wp_enqueue_scripts', 'add_froogaloop');

function add_scripts_file() {
	wp_register_script('questis-script', get_template_directory_uri() . '/js/questis-scripts.min.js', array('jquery'));
	wp_enqueue_script('questis-script');
}
add_action('wp_enqueue_scripts', 'add_scripts_file');


function filter_ptags_on_images($content){
	return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');

// From: http://diythemes.com/thesis/rtfm/remove-more-anchor-permalinks/
function remove_more_jump_link($link) {
	$offset = strpos($link, '#more-');
	if ($offset) { $end = strpos($link, '"',$offset); }
	if ($end) { $link = substr_replace($link, '', $offset, $end-$offset); }
	return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');