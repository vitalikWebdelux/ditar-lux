<?php
/**
 * ditarlux carbon fields
 *
 * @package ditarlux
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

	Container::make( 'theme_options', __( 'Ditar Lux' ) )
		->add_fields( array(
			Field::make( 'separator', 'dl_separator_phones', __( 'Телефони:' ) ),
			
			Field::make( 'text', 'dl_phone', __( 'Номер телефону' ) )
				->set_width(50),
			Field::make( 'text', 'dl_phone_2', __( 'Номер телефону' ) )
				->set_width(50),

			Field::make( 'separator', 'dl_separator_soc', __( 'Соціальні мережі:' ) ),

			Field::make( 'text', 'dl_instagram', __( 'Instagram' ) )
				->set_help_text( 'Введіть посилланя на ваш Instagram' )->set_width(50),
			Field::make( 'text', 'dl_facebook', __( 'Facebook' ) )
				->set_help_text( 'Введіть посилланя на ваш Facebook' )->set_width(50),
			Field::make( 'text', 'dl_telegram', __( 'Telegram' ) )
				->set_help_text( 'Введіть телефон на ваш Telegram' )->set_width(50),
			Field::make( 'text', 'dl_viber', __( 'Viber' ) )
				->set_help_text( 'Введіть телефон на ваш Viber' )->set_width(50),

			Field::make( 'separator', 'dl_separator_adress', __( 'Адрес:' ) ),

			Field::make( 'rich_text', 'dl_address', __( 'Адреса' ) )
				->set_help_text( 'Введіть вашу адресу' ),

		)	);
