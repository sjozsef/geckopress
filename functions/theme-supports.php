<?php

function gp_theme_supports()
{
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('html5');
}
add_action( 'after_setup_theme', 'gp_theme_supports' );

?>