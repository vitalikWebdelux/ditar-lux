<?php
/**
 * chopovskyi ajax
 *
 * @package effectprof
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function calc_form() {

	check_ajax_referer( 'ch-calc', 'security' );

	if( ! wp_verify_nonce( $_POST['security'], 'ch-calc' ) ) die( 'Stop!');

	$to = 'ljutaev@gmail.com';
	$subject = 'Калькулятор';
	$c = true;
	$message = '';

	foreach ( $_POST as $key => $value ) {

		if ( $value != "" && $key != "action" && $key != "security" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
			<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
			<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td></tr>";
		}

	}

	$headers = 'Content-Type: text/html; From: <admin@effectprof.com>' . "\r\n";
  	wp_mail( $to, $subject, $message, $headers );

	$sendToTelegram = fopen('https://api.telegram.org/bot962914608:AAFI7cJIARsmwWRpw5g7tBimsjlznvpFl9s/sendMessage?chat_id=370558652&text=Заявка калькулятор: '.htmlspecialchars( $_POST['your-phone'] ).'',"r");

	wp_die();
}

if( wp_doing_ajax() ){
	add_action('wp_ajax_calc_form', 'calc_form');
	add_action('wp_ajax_nopriv_calc_form', 'calc_form');
}