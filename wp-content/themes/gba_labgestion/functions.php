<?php
/**
 * GBA | Laboratorio de Gestión functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GBA_|_Laboratorio_de_Gestión
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'gba_labgestion_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gba_labgestion_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on GBA | Laboratorio de Gestión, use a find and replace
		 * to change 'gba_labgestion' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gba_labgestion', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'gba_labgestion' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'gba_labgestion_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'gba_labgestion_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gba_labgestion_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gba_labgestion_content_width', 640 );
}
add_action( 'after_setup_theme', 'gba_labgestion_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gba_labgestion_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'gba_labgestion' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'gba_labgestion' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'gba_labgestion_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gba_labgestion_scripts() {
	wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.14.0/css/all.css' );
	wp_enqueue_style( 'gba_labgestion-style', get_template_directory_uri() . '/assets/css/styles.css', array(), _S_VERSION );
	wp_enqueue_style( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), _S_VERSION );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick/slick-theme.css', array(), _S_VERSION );
	wp_enqueue_style( 'plyr', 'https://cdn.plyr.io/3.6.2/plyr.css', array(), _S_VERSION );
	wp_enqueue_style( 'gba_labgestion_custom', get_template_directory_uri() . '/assets/css/labgestion.css', array(), '2.5' );
	
	wp_style_add_data( 'gba_labgestion-style', 'slick', 'slick-theme', 'plyr', 'finde_custom', 'replace' );

	wp_enqueue_script( 'gba_labgestion-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array(), _S_VERSION );
    wp_enqueue_script( 'boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js', array(), _S_VERSION );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), _S_VERSION );
    wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), _S_VERSION );
    wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array());
	wp_enqueue_script( 'plyr', '//cdn.plyr.io/3.6.2/plyr.js', array());
	
	wp_enqueue_script( 'gba_labgestion-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), '1.3', true );
	wp_enqueue_script( 'gba_labgestion-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gba_labgestion_scripts' );


add_theme_support('align-wide');

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'card-item', 354 ); // 300 pixels wide (and unlimited height)
}


//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
	$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
	}
add_filter( 'body_class', 'add_slug_body_class' );


function prefix_category_title( $title ) {
    if ( is_tax() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'prefix_category_title' );


function add_taxonomies_to_pages() {
	register_taxonomy_for_object_type( 'category', 'page' );
}
add_action( 'init', 'add_taxonomies_to_pages' );
add_filter('body_class','add_category_to_single');

function add_category_to_single($classes) {
	global $post;
	foreach((get_the_category($post->ID)) as $category) {
		// add category slug to the $classes array
		$classes[] = $category->category_nicename;
	}
	// return the $classes array
	return $classes;
}

add_action( 'after_setup_theme', function() {
	add_theme_support( 'responsive-embeds' );
});
   


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

