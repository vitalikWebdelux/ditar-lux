<?php /*Template Name: Autoservice */ get_header();
	get_template_part( 'template-parts/sections/hero/section', 'hero_autoservice' );
	get_template_part( 'template-parts/sections/section', 'services_components' );

	echo '<div class="bg--white-blue">';
	get_template_part( 'template-parts/sections/section', 'form_autoservice' );
	get_template_part( 'template-parts/sections/section', 'features' );
	get_template_part( 'template-parts/sections/section', 'services_others' );
	echo '</div>';

	get_template_part( 'template-parts/sections/section', 'contacts' );
get_footer();                                                                       