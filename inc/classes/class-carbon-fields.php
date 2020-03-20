<?php
/**
 * effectprof carbon fields
 *
 * @package ditarlux
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

if( class_exists( "\\Carbon_Fields\\Field\\Field" ) ){
	Container::make( 'theme_options', __( 'effectprof' ) )
		->add_tab( __('Загальні'), array(
			Field::make( 'text', 'ch_phone', __( 'Номер телефона' ) ),
			Field::make( 'text', 'ch_email', __( 'E-mail' ) ),
			Field::make( 'map', 'sd_location', __( 'Локация' ) )
				->set_position( 37.423156, -122.084917, 14 ),
		) )
		->add_tab( __('Соц. мережі'), array(
			Field::make( 'text', 'sd_instagram', __( 'Instagram' ) )
				->set_help_text( 'Введіть посилланя на ваш Instagram' ),
			Field::make( 'text', 'sd_facebook', __( 'Facebook' ) )
				->set_help_text( 'Введіть посилланя на ваш Facebook' ),
		) )
		->add_tab( __('Сертифікати'), array(
			Field::make( 'complex', 'ch_sertificats', __( 'Сертифікат' ) )
				->add_fields( array(
					Field::make( 'image', 'image', __( 'Зображення' ) )->set_width(100),
				) )
		) );
}
