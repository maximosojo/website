<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Website
 * @since 1.0.0
 */

if ( ! function_exists( 'website_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function website_setup() {

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
		set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'top' => __( 'Top Menu', 'website' ),
				'footer' => __( 'Footer Menu', 'website' )
			)
		);

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );
	}
endif;
add_action( 'after_setup_theme', 'website_setup' );


function website_menu_classes($classes,$item,$args)
{
	if ($args->theme_location == "top") {
		$classes[] = "nav-item";
	}
	return $classes;
}
add_filter("nav_menu_css_class","website_menu_classes",1,3);


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function website_custom_excerpt_length( $length )
{
    return 20;
}
add_filter( 'excerpt_length', 'website_custom_excerpt_length', 999 );

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';