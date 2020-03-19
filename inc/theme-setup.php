<?php
/**
 * Theme basic setup.
 *
 * @package effectprof
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Set the content width based on the theme's design and stylesheet.
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

add_action( 'after_setup_theme', 'effectprof_setup' );

if ( ! function_exists ( 'effectprof_setup' ) ) {

	function effectprof_setup() {

		load_theme_textdomain( 'effectprof', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		register_nav_menus( array(
			'main_menu'   => esc_html__( 'Main menu', 'effectprof' ),
			'lang_menu'   => esc_html__( 'Lang menu', 'effectprof' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'post-thumbnails' );
		add_image_size( 'progressive', 25, 25, true ); // Кадрирование изображения

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
		) );

		add_theme_support( 'custom-background', apply_filters( 'sd_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		add_theme_support( 'custom-logo' );

		add_theme_support( 'responsive-embeds' );
	}
}


add_filter( 'excerpt_more', 'effectprof_custom_excerpt_more' );

if ( ! function_exists( 'effectprof_custom_excerpt_more' ) ) {

	function effectprof_custom_excerpt_more( $more ) {
		if ( ! is_admin() ) {
			$more = '';
		}
		return $more;
	}

}

add_filter( 'wp_trim_excerpt', 'effectprof_all_excerpts_get_more_link' );

if ( ! function_exists( 'effectprof_all_excerpts_get_more_link' ) ) {

	function effectprof_all_excerpts_get_more_link( $post_excerpt ) {
		if ( ! is_admin() ) {
			$post_excerpt = $post_excerpt . ' <a href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . __( 'Read More...',
			'effectprof' ) . '</a>';
		}
		return $post_excerpt;
	}

}
