<?php

require_once( TEMPLATEPATH . '/functions/wp_bootstrap_navwalker.php' );

$classes = '';

if ( ot_get_option( 'gp-nav-hover-dropdowns', 'off' ) == 'on' ) {
	$classes .= ' hover-dropdown';

	if ( ot_get_option( 'gp-nav-disable-mobile-dropdowns', 'off' ) == 'off' ) {
		$classes .= ' mobile-multilevel';
	}
}

if ( ot_get_option( 'gp-primary-nav-float', 'left' ) == 'right' ) {
	$classes .= ' navbar-right';
}

wp_nav_menu( array(
	'theme_location' => 'primary',
	'depth'      => 2,
	'container'  => false,
	'menu_class' => 'nav navbar-nav gp-nav-primary' . $classes,
	'fallback_cb' => '',
	'walker'     => new wp_bootstrap_navwalker(),
	)
);

?>