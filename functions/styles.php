<?php

require TEMPLATEPATH . '/functions/less.php/Less.php';

function gp_compile_bootstrap() {
		Less_Cache::$cache_dir = TEMPLATEPATH . '/assets/cache/bootstrap';

		$files = array();
		$files[ TEMPLATEPATH . '/assets/less/bootstrap/bootstrap.less' ] = TEMPLATEPATH . '/assets/less/bootstrap/';

		$options = array();
		$options_filtered = apply_filters( 'gp_bootstrap_less_options', $options );

		$variables = array();
		$variables_filtered = apply_filters( 'gp_bootstrap_less_variables', $variables );

		$compiled_file = Less_Cache::Get( $files,
			$options_filtered,
		$variables_filtered );

		return $compiled_file;
}

function gp_register_styles() {
	$bs = gp_compile_bootstrap();
	wp_register_style('bootstrap',
		get_template_directory_uri() . '/assets/cache/bootstrap/' . $bs,
		array(),
		'',
	'all');

	wp_register_style('lightbox',
		get_template_directory_uri() . '/assets/css/lightbox.css',
		array(),
		'',
	'all');

	wp_register_style('theme_main',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'bootstrap' ),
		'',
	'all');
}

function gp_enqueue_styles() {
	if ( ! is_admin() ) {
		if ( GPConfig::getInstance()->get_cfg( 'gp_enqueue_bootstrap' ) ) {
			wp_enqueue_style( 'bootstrap' ); }

		if ( GPConfig::getInstance()->get_cfg( 'gp_lightbox_enabled' ) ) {
			wp_enqueue_style( 'lightbox' ); }

		if ( GPConfig::getInstance()->get_cfg( 'gp_enqueue_theme_main' ) ) {
			wp_enqueue_style( 'theme_main' ); }
	}
}

add_action( 'wp_enqueue_scripts', 'gp_register_styles' );
add_action( 'wp_enqueue_scripts', 'gp_enqueue_styles' );

?>
