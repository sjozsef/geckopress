<?php defined('ABSPATH') or die("Direct access not allowed."); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php wp_title(); ?></title>
    
    <?php wp_head(); ?>
    
    <?php //Custom css
        $custom_css = ot_get_option('gp-custom-css', false);
        if($custom_css)
        {
            echo '<style>' .  $custom_css . '</style>';
        }
    ?>
    
</head>
<body <?php body_class( $class ); ?>>
    <div id="main">
        <?php get_template_part('snippets/header/header'); ?>
        