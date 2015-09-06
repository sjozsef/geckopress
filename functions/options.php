<?php

/**
 * Loading theme options by YAML
 */

add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_show_pages', '__return_false');

require_once( TEMPLATEPATH . '/option-tree/ot-loader.php' );

add_action('admin_init', 'ph_theme_options');

function ph_theme_options()
{
	$saved_settings = get_option( ot_settings_id(), array());

	$settings = array(
		'contextual_help' => array(
			'content'	=> array(
				array(
					'id'		=> 	'option_types_help',
					'title'		=>	'Help',
					'content'	=>	''
				)
			),
			'sidebar'	=>	'',
			), //end of contextual_help
		'sections'	=> gp_load_yaml('/etc/sections.yaml'), //TODO: Separated framework and child theme options
		'settings'	=> gp_load_yaml( '/etc/settings.yaml')
	); //end of $settings

	$settings = apply_filters( ot_settings_id() . '_args', $settings );
  
    /* settings are not the same update the DB */
    if ( $saved_settings !== $settings )
    {
        update_option( ot_settings_id(), $settings ); 
    }
}