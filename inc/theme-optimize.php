<?php
/**
 * Theme optimize.
 *
 * @package ditarlux
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Disable Emojis
 */
add_action( 'init', 'disable_emojis' );

function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}

function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

/**
 * Remove jquery migrate
 */
add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );

function remove_jquery_migrate( &$scripts ) {
	if( ! is_admin() ) {
		$scripts->remove( 'jquery' );
		$scripts->add( 'jquery', false, array('jquery-core') );
	}
}

/**
 * Remove styles for .recentcomments a
 */
add_action( 'widgets_init', 'remove_recent_comments_style' );

function remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}

/**
 * Remove unnecessary tags from head
 */
function remove_tags_from_head() {
	remove_action( 'wp_head', 'wp_generator' );
	add_filter( 'the_generator', '__return_empty_string' );
	remove_action( 'wp_head', 'wp_resource_hints', 2 );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
	remove_action( 'template_redirect', 'wp_shortlink_header', 11, 0 );         
	//remove_action( 'wp_head', 'index_rel_link' );
	//remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	//remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
}
remove_tags_from_head();

/**
 * Remove wp-embed
 */
function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

/**
 * Disable feed
 */
function disable_feed() {
	//Remove feed links from the <head> section
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'feed_links', 2 );
	//Redirect feed URLs to home page
	add_action( 'do_feed', 'disable_feed_redirect', 1 );
	add_action( 'do_feed_rdf', 'disable_feed_redirect', 1 );
	add_action( 'do_feed_rss', 'disable_feed_redirect', 1 );
	add_action( 'do_feed_rss2', 'disable_feed_redirect', 1 );
	add_action( 'do_feed_atom', 'disable_feed_redirect', 1 );
}

function disable_feed_redirect() {
	// if GET param - remove and redirect
	if( isset( $_GET['feed'] ) ) {
		wp_redirect( esc_url_raw( remove_query_arg( 'feed' ) ), 301 );
	exit;
	}
	// if beauty permalink - remove and redirect
	if( get_query_var( 'feed' ) !== 'old' ) {
		set_query_var( 'feed', '' );
	}
	redirect_canonical();
	wp_redirect( get_option( 'siteurl' ), 301 );
	die();
}
disable_feed();


/**
 * Add web app data
 */
function mobile_web_app_meta() {
	echo '<meta name="mobile-web-app-capable" content="yes">' . "\n";
	echo '<meta name="apple-mobile-web-app-capable" content="yes">' . "\n";
	echo '<meta name="apple-mobile-web-app-title" content="' . esc_attr( get_bloginfo( 'name' ) ) . ' - ' . esc_attr( get_bloginfo( 'description' ) ) . '">' . "\n";
}
// add_action( 'wp_head', 'mobile_web_app_meta' );