<?php

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/inc/tgm/core/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'khl_register_required_plugins' );

/**
 * Register the required plugins for KHL theme.
 *
 *  <snip />
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function khl_register_required_plugins() {
  /*
   * Array of plugin arrays. Required keys are name and slug.
   * If the source is NOT from the .org repo, then source is also required.
   */
  $plugins = array(

    array(
      'name'      => 'Contact Form 7',
      'slug'      => 'contact-form-7',
      'required'  => false,
    ),

    array(
      'name'      => 'Kirki',
      'slug'      => 'kirki',
      'required'  => true,
    ),

    array(
      'name'      => 'Elementor',
      'slug'      => 'elementor',
      'required'  => true,
    ),

    array(
      'name'      => 'One Click Demo Import',
      'slug'      => 'one-click-demo-import',
      'required'  => false,
    ),

    array(
      'name'      => 'Yoast SEO',
      'slug'      => 'wpseo',
      'required'  => false,
    ),

    array(
      'name'      => 'Cyr To Lat',
      'slug'      => 'cyr-to-lat',
      'required'  => true,
    ),

    array(
      'name'      => 'Carbon Fields',
      'slug'      => 'carbon-fields',
      'required'  => true,
      'location'  => 'bundled',
      'source'    => SD_INC_DIR . '/tgm/plugins/carbon-fields.zip'
    ),
    
    // <snip />
  );

  /*
   * Array of configuration settings. Amend each line as needed.
   *
   * TGMPA will start providing localized text strings soon. If you already have translations of our standard
   * strings available, please help us make TGMPA even better by giving us access to these translations or by
   * sending in a pull-request with .po file(s) with the translations.
   *
   * Only uncomment the strings in the config array if you want to customize the strings.
   */
  $config = array(

    'id'           => 'khl',                 // Unique ID for hashing notices for multiple instances of TGMPA.
    'default_path' => '',                      // Default absolute path to bundled plugins.
    'menu'         => 'tgmpa-install-plugins', // Menu slug.
    'parent_slug'  => 'themes.php',            // Parent menu slug.
    'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
    'has_notices'  => true,                    // Show admin notices or not.
    'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
    'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
    'is_automatic' => false,                   // Automatically activate plugins after installation or not.
    'message'      => '',                      // Message to output right before the plugins table.
    
    'strings'      => array(
      'page_title'                      => __( 'Install Required Plugins', 'theme-slug' ),
      'menu_title'                      => __( 'Install Plugins', 'theme-slug' ),
      // <snip>...</snip>
      'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
    )
    
  );

  tgmpa( $plugins, $config );

}