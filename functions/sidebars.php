<?php
/**
 * Registering sidebars by yaml
 */

function gp_register_sidebars() {
	$sidebars = gp_load_yaml( '/etc/sidebars.yaml' );

	foreach ( $sidebars as $sidebar ) {
		register_sidebar( $sidebar ); }
}

add_action( 'widgets_init', 'gp_register_sidebars' );
