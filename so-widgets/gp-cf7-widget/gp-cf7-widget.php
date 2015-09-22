<?php
/*
Widget Name: Contact Form 7 Widget
Description: Displaying a Contact Form 7 form
Author: Samu József (sjozsef)
Author URI: http://sjozsef.com/
Widget URI: http://geckopress.com/
*/

class GP_CF7_Widget extends SiteOrigin_Widget {

	function __construct() {
		parent::__construct(
			'gp-cf7-widget',
			__( 'Contact Form 7 Widget', 'geckopress' ),
			array(
				'description' => __( 'Displaying a Contact Form 7 form.', 'geckopress' ),
				'panels_groups' => array( 'geckopress' ),
			),
			array(),
			array(
				'title' => array(
					'type' => 'text',
					'label' => __( 'Widget title', 'geckopress' ),
					'default' => 'Contact Us!',
				),
				'cf7-id' => array(
					'type' => 'number',
					'label' => __( 'Contact Form 7 ID', 'geckopress' ),
					'default' => '-1',
				),
			),
			plugin_dir_path( __FILE__ )
		);
	}

	function get_template_name( $instance ) {
		return 'gp-cf7-template';
	}

	function get_style_name( $instance ) {
		return 'gp-cf7-style';
	}
}

siteorigin_widget_register( 'gp-cf7-widget', __FILE__, 'GP_CF7_Widget' );

?>
