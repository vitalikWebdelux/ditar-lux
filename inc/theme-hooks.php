<?php
/**
 * Custom hooks.
 *
 * @package ditarlux
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_filter('admin_footer_text', 'footer_admin_func');
function footer_admin_func () {
	echo 'Разработка теми: <a href="https://web-deluxe.com" target="_blank">Web-Deluxe</a>. Работает на <a href="http://wordpress.org" target="_blank">WordPress</a>.';
}

function address_mobile_address_bar() {
	$color = "#1bd0e0";
	//this is for Chrome, Firefox OS, Opera and Vivaldi
	echo '<meta name="theme-color" content="'.$color.'">';
	//Windows Phone **
	echo '<meta name="msapplication-navbutton-color" content="'.$color.'">';
	// iOS Safari
	echo '<meta name="apple-mobile-web-app-capable" content="yes">';
	echo '<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">';
}
add_action( 'wp_head', 'address_mobile_address_bar' );