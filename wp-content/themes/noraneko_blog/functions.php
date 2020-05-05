<?php
/**
 * Noraneko Blog Theme functions and definitions
 *
 * @package WordPress
 * @subpackage Noraneko_Blog_Theme
 * @since Noraneko Blog Theme 1.0
 */

if ( ! function_exists( 'noraneko_blog_setup' ) ) :
	/**
	 * Setup for Noraneko Blog Theme
	 */
	function noraneko_blog_setup() {
		/**
		 * Make theme available for translation.
		 */
		load_theme_textdomain( 'noraneko_blog', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// Navigation-menu setting.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'noraneko_blog' ),
				'footer' => __( 'Footer Menu', 'noraneko_blog' ),
				'social' => __( 'Social Links Menu', 'noraneko_blog' ),
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
				'script',
				'style',
			)
		);

		/**
		 * Add support for core custom logo.
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'noraneko_blog' ),
					'shortName' => __( 'S', 'noraneko_blog' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'noraneko_blog' ),
					'shortName' => __( 'M', 'noraneko_blog' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'noraneko_blog' ),
					'shortName' => __( 'L', 'noraneko_blog' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'noraneko_blog' ),
					'shortName' => __( 'XL', 'noraneko_blog' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => 'default' === get_theme_mod( 'primary_color' ) ? __( 'Blue', 'noraneko_blog' ) : null,
					'slug'  => 'primary',
					'color' => '#blue',
				),
				array(
					'name'  => 'default' === get_theme_mod( 'primary_color' ) ? __( 'Dark Blue', 'noraneko_blog' ) : null,
					'slug'  => 'secondary',
					'color' => '#darkblue',
				),
				array(
					'name'  => __( 'Dark Gray', 'noraneko_blog' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'noraneko_blog' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'noraneko_blog' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'noraneko_blog_setup' );

/**
 * Register widget area.
 */
function noraneko_blog_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'noraneko_blog' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'noraneko_blog' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'noraneko_blog_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width Content width.
 */
function noraneko_blog_content_width() {
	// This variable is intended to be overruled from themes.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'noraneko_blog_content_width', 640 );
}
add_action( 'after_setup_theme', 'noraneko_blog_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function noraneko_blog_scripts() {
	$timestamp = time();
	// Add CSS.
	wp_enqueue_style( 'noraneko_blog_style', get_theme_file_uri( '/css/style.css' ), false );

	// Add Script.
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'noraneko_blog_scripts' );
