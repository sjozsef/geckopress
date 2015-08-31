<?php defined('ABSPATH') or die("Direct access not allowed."); ?>

<?php

function gp_register_styles()
{
    wp_register_style('bootstrap', 
        get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css',
        array(),
        '',
        'all');
}

function gp_enqueue_styles()
{
    wp_enqueue_style('bootstrap');
}

add_action('wp_enqueue_scripts', 'gp_register_styles');
add_action('wp_enqueue_scripts', 'gp_enqueue_styles');

?>