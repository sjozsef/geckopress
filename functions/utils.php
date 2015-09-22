<?php

/**
 * Processing YAML files (ifcfg, ifinstalled)
 * TODO: multiple ifcfg
 * TODO: ifinstalled
 */
function gp_process_yaml_array( $array ) {
	if ( ! is_array( $array ) ) {
		return false;
	}

	$ret = array();

	foreach ( $array as $key => $val ) {
		$add = true;

		if ( is_array( $val ) && isset( $val['ifcfg'] ) ) {
			if ( ! GPConfig::getInstance()->get_cfg( $val['ifcfg'] ) ) {
				$add = false;
			}
		}

		if ( $add ) {
			$ret[ $key ] = $val;
		}
	}

	return $ret;
}

/**
 * Loads a YAML file into an array. First checks the child tempate's file, then the framework's
 */
function gp_load_yaml( $filename ) {
	$file = locate_template( $filename, false, false );
	if ( $file ) {
		return gp_process_yaml_array( spyc_load_file( $file ) );
	} else {
		return false;
	}
}

/**
 * Modifying read more text
 */
function gp_modify_read_more_link() {
	return '<a class="btn btn-primary btn-read-more" href="' . get_permalink() . '">'.
	__( 'Read more', 'geckopress' ) .
	'</a>';
}
add_filter( 'the_content_more_link', 'gp_modify_read_more_link' );

/**
 * Loading textdomains
 * TODO: if chid template's 'languages' folder exists, load it!
 */
function gp_theme_setup() {
	load_theme_textdomain( 'geckopress', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'gp_theme_setup' );

/**
 * Add custom style sheet to the HTML Editor
 * don't forget to also include the editor-style.css in you theme directory
 **/
function gp_add_editor_styles() {
	add_editor_style( 'assets/css/editor-style.css' );
}
add_action( 'init', 'gp_add_editor_styles' );

function gp_body_classes( $classes ) {
	if ( GPConfig::getInstance()->get_cfg( 'gp_lightbox_enabled' ) ) {
		$classes[] = 'gp-lightbox';
	}

	return $classes;
}
add_filter( 'body_class', 'gp_body_classes' );

function gp_oembed_filter( $html, $url, $attr, $post_ID ) {
	$return = '<div class="video-container">'.$html.'</div>';
	return $return;
}
add_filter( 'embed_oembed_html', 'gp_oembed_filter', 10, 4 );

function gp_so_widget_folders( $folders ) {
	$folders[] = TEMPLATEPATH . '/so-widgets/';
	return $folders;
}
add_filter( 'siteorigin_widgets_widget_folders', 'gp_so_widget_folders' );

function gp_add_widget_tabs( $tabs ) {
	$tabs[] = array(
		'title' => __( 'GeckoPress widgets', 'geckopress' ),
		'filter' => array(
			'groups' => array( 'geckopress' ),
		),
	);

	return $tabs;
}
add_filter( 'siteorigin_panels_widget_dialog_tabs', 'gp_add_widget_tabs', 20 );

?>
