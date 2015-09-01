<?php defined('ABSPATH') or die("Direct access not allowed."); ?>

<?php

function gp_register_styles()
{
    wp_register_style('bootstrap', 
        get_template_directory_uri() . '/assets/css/bootstrap.min.css',
        array(),
        '',
        'all');
        
    wp_register_style('gp_base', 
        get_template_directory_uri() . '/assets/css/geckopress-base.css',
        array('bootstrap'),
        '',
        'all');
        
    wp_register_style('theme_main', 
        get_stylesheet_directory_uri() . '/style.css',
        array('gp_base'),
        '',
        'all');
}

function gp_enqueue_styles()
{
    if(!is_admin())
    {
        wp_enqueue_style('bootstrap');
        wp_enqueue_style('gp_base');
        wp_enqueue_style('theme_main');
    }
}

add_action('wp_enqueue_scripts', 'gp_register_styles');
add_action('wp_enqueue_scripts', 'gp_enqueue_styles');

?>