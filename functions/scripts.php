<?php

function gp_register_scripts()
{
    wp_register_script('bootstrap', 
        get_template_directory_uri() . '/assets/js/bootstrap.min.js',
        array('jquery'),
        '',
        true);
}

function gp_enqueue_scripts()
{
    if(!is_admin() && GPConfig::getInstance()->get_cfg('gp_enqueue_bootstrap'))
    {
        wp_enqueue_script('bootstrap');
    }
}

add_action('wp_enqueue_scripts', 'gp_register_scripts');
add_action('wp_enqueue_scripts', 'gp_enqueue_scripts');

?>