<?php
/**
 * morskaya10 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package morskaya10
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'morskaya10_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function morskaya10_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on morskaya10, use a find and replace
		 * to change 'morskaya10' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'morskaya10', get_template_directory() . '/languages' );

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
				'header-menu' => esc_html__( 'Header Menu', 'morskaya10' )
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
				'morskaya10_custom_background_args',
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
add_action( 'after_setup_theme', 'morskaya10_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function morskaya10_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'morskaya10_content_width', 640 );
}
add_action( 'after_setup_theme', 'morskaya10_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function morskaya10_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'morskaya10' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'morskaya10' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'morskaya10_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function morskaya10_scripts() {
	wp_enqueue_style( 'morskaya10-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'morskaya10-style', 'rtl', 'replace' );

	//custom styles
	wp_enqueue_style( 'morskaya10-custom-style', get_template_directory_uri() . '/assets/styles/style.css' );
	wp_enqueue_style( 'morskaya10-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );
	wp_enqueue_style( 'morskaya10-font1', 'https://fonts.googleapis.com/css?family=Open+Sans&display=swap' );
	wp_enqueue_style( 'morskaya10-font2', 'https://fonts.googleapis.com/css?family=Gabriela&display=swap&subset=cyrillic' );
	wp_enqueue_style( 'morskaya10-font3', 'https://fonts.googleapis.com/css?family=Lobster&display=swap&subset=cyrillic' );
	wp_enqueue_style( 'morskaya10-icons', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css' );



	wp_enqueue_script( 'morskaya10-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	// custom scripts
	// jQuery
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js' );
	wp_enqueue_script( 'jquery' );

	// Скрипты 
	wp_enqueue_script( 'morskaya10-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '', true );
	wp_enqueue_script( 'morskaya10-js', get_template_directory_uri() . '/assets/js/js.js', array(), '', true );
	wp_enqueue_script( 'morskaya10-gallery-js', get_template_directory_uri() . '/assets/js/gallery.js', array(), '', true );
	wp_enqueue_script( 'morskaya10-order-js', get_template_directory_uri() . '/assets/js/order.js', array(), '', true );
	wp_enqueue_script( 'morskaya10-quest-js', get_template_directory_uri() . '/assets/js/quest.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'morskaya10_scripts' );

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

require_once get_template_directory() . '/inc/tgm/tgm.php';


// // Customizer
// function morskaya10_customize_register($wp_customize) {
// 	$wp_customize->add_setting('morskaya10_nav_color', array(
// 		'default' => '#ffffff'
// 	));
// 	$wp_customize->add_control(
// 		new WP_Customize_Color_Control(
// 			$wp_customize,
// 			'morskaya10_nav_color',
// 			array(
// 				'label' => 'Цвет ссылок меню',
// 				'section' => 'colors',
// 				'settings' => 'morskaya10_nav_color'
// 			)
// 		)
// 	);
// }

// add_action( 'customize_register', 'morskaya10_customize_register' );

function morskaya10_customize_js() {
	wp_enqueue_script( 'morskaya10_customizer', get_template_directory_uri() . '/assets/js/customize.js', array( 'jquery','customize-preview' ), '', true );
}

add_action( 'customize_preview_init', 'morskaya10_customize_js' );