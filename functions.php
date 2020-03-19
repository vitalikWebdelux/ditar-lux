<?php
/**
 * effectprof functions and definitions
 *
 * @package effectprof
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Define constant
 */
$theme = wp_get_theme();

if ( ! empty( $theme['Template'] ) ) {
	$theme = wp_get_theme( $theme['Template'] );
}

if ( ! defined( 'DS' ) ) {
	define( 'DS', DIRECTORY_SEPARATOR );
}

define( 'SD_THEME_NAME', $theme['Name'] );
define( 'SD_THEME_SLUG', $theme['Template'] );
define( 'SD_THEME_VERSION', $theme['Version'] );
define( 'SD_THEME_DIR', get_template_directory() );
define( 'SD_THEME_URI', get_template_directory_uri() );
define( 'SD_THEME_IMAGE_URI', get_template_directory_uri() . '/assets/img' );
define( 'SD_INC_DIR', wp_normalize_path( SD_THEME_DIR . DS . 'inc') );

$smoky_dance_includes = array(
	// Base Theme
	'/theme-settings.php',                  // Initialize theme default settings.
	'/theme-ajax.php',                  // ajax
	'/theme-setup.php',                           // Theme setup and custom theme supports.
	'/theme-widgets.php',                         // Register widget area.
	'/theme-enqueue.php',                         // Enqueue scripts and styles.
	'/theme-optimize.php',
	'/template-tags.php',                   // Custom template tags for this theme.
	'/theme-pagination.php',                      // Custom pagination for this theme.
	'/theme-hooks.php',                           // Custom hooks.
	'/theme-extras.php',                          // Custom functions that act independently of the theme templates.
	'/tgm/khl-register-plugins.php',        // Register Plugins.
	'/classes/class-carbon-fields.php',  // Carbon fields
	'/classes/class-nav-walker.php',
	'/classes/class-seo-walker.php',
);

foreach ( $smoky_dance_includes as $file ) {
	// Retrieve the name of the highest priority template file that exists, optionally loading that file.
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}