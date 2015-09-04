<?php
/**
 * Registering sidebars by yaml
 */

$sidebars = gp_load_yaml( '/etc/sidebars.yaml' );

foreach($sidebars as $sidebar)
    register_sidebar($sidebar);