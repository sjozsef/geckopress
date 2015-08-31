<?php defined('ABSPATH') or die("Direct access not allowed."); ?>

<?php
/**
 * Registering sidebars by yaml
 */

require_once(TEMPLATEPATH . '/functions/spyc.php');

$sidebars = SPYC::YAMLLoad(get_stylesheet_directory() . 
    '/etc/sidebars.yaml' );

foreach($sidebars as $sidebar)
    register_sidebar($sidebar);