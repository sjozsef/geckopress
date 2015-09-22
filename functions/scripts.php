<?php

function gp_register_scripts() {
	wp_register_script('bootstrap',
		get_template_directory_uri() . '/assets/js/bootstrap.min.js',
		array( 'jquery' ),
		'',
	true);

	wp_register_script('lightbox',
		get_template_directory_uri() . '/assets/js/lightbox.js',
		array( 'jquery' ),
		'',
	true);

	wp_register_script('gp_base',
		get_template_directory_uri() . '/assets/js/geckopress-base.js',
		array( 'jquery' ),
		'',
	true);
}

function gp_enqueue_scripts() {
	if ( ! is_admin() ) {
		if ( GPConfig::getInstance()->get_cfg( 'gp_enqueue_bootstrap' ) ) {
			wp_enqueue_script( 'bootstrap' );
		}

		wp_enqueue_script( 'gp_base' );

		if ( GPConfig::getInstance()->get_cfg( 'gp_lightbox_enabled' ) ) {
			wp_enqueue_script( 'lightbox' );
		}
	}
}

add_action( 'wp_enqueue_scripts', 'gp_register_scripts' );
add_action( 'wp_enqueue_scripts', 'gp_enqueue_scripts' );

?>
