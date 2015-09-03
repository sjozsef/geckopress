<?php defined('ABSPATH') or die("Direct access not allowed."); ?>

<?php
/**
 * Registering nav menus by yaml
 */



register_nav_menus( gp_load_yaml( '/etc/nav-menus.yaml' ));



?>