<?php
/**
 * ditarlux enqueue scripts
 *
 * @package ditarlux
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'ditarlux_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function ditarlux_scripts() { 

		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		// Styles
		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/assets/css/main.min.css' );
		wp_enqueue_style( 'sd-map', 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.5.1/leaflet.css', array(), $css_version );
		wp_enqueue_style( 'sd-styles', get_template_directory_uri() . '/assets/css/main.min.css', array(), $css_version );
		
		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/assets/js/custom.min.js' );
		
		wp_enqueue_script( 'td-map', 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.5.1/leaflet.js', array('jquery'), $js_version, true );

		wp_enqueue_script( 'dl-libs', get_template_directory_uri() . '/assets/js/vendor.min.js', array('jquery'), $js_version, true );

		wp_enqueue_script( 'dl-TweenMax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.3/TweenMax.min.js', array('jquery'), $js_version, true );
		wp_enqueue_script( 'dl-amazonaws', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/MorphSVGPlugin.min.js', array('jquery'), $js_version, true );
		wp_enqueue_script( 'dl-custom', get_template_directory_uri() . '/assets/js/custom.min.js', array('dl-libs'), $js_version, true );

		wp_localize_script( 'dl-custom', '$dl_js', array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
		));

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

	}
}

add_action( 'wp_enqueue_scripts', 'ditarlux_scripts' );