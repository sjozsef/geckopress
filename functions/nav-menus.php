<?php defined('ABSPATH') or die("Direct access not allowed."); ?>

<?php
/**
 * Registering nav menus by yaml
 */

require_once(TEMPLATEPATH . '/functions/spyc.php');

register_nav_menus( SPYC::YAMLLoad(get_stylesheet_directory() . 
    '/etc/nav-menus.yaml' ));



?>