<?php
/**
 * alfa-capital functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package alfa-capital
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'alfa_capital_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function alfa_capital_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on alfa-capital, use a find and replace
		 * to change 'alfa-capital' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'alfa-capital', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'alfa-capital' ),
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
				'alfa_capital_custom_background_args',
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
add_action( 'after_setup_theme', 'alfa_capital_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function alfa_capital_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'alfa_capital_content_width', 640 );
}
add_action( 'after_setup_theme', 'alfa_capital_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function alfa_capital_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'alfa-capital' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'alfa-capital' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'alfa_capital_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function alfa_capital_scripts() {
	wp_enqueue_style( 'alfa-capital-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'alfa-capital-style', 'rtl', 'replace' );
	wp_enqueue_style('alfa-capital-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style('alfa-capital-custom', get_template_directory_uri() . '/assets/css/custom.css');
	wp_enqueue_style('alfa-capital-normalize', get_template_directory_uri() . '/assets/css/normalize.css');
	wp_enqueue_style('alfa-capital-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css');
	wp_enqueue_style('alfa-capital-slick', get_template_directory_uri() . '/assets/css/slick.css');



	wp_enqueue_script('deckkorate-jquery', 	'https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js', array(), '20151215', true);
	wp_enqueue_script( 'alfa-capital-bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'alfa-capital-customjs', get_template_directory_uri() . '/assets/js/custom.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'alfa-capital-slickjs', get_template_directory_uri() . '/assets/js/slick.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'alfa-capital-html5lightbox', get_template_directory_uri() . '/assets/js/html5lightbox.js', array(), _S_VERSION, true );

	
	wp_enqueue_script( 'alfa-capital-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'alfa_capital_scripts' );

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

