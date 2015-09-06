<?php

require_once(TEMPLATEPATH . '/functions/wp_bootstrap_navwalker.php');

wp_nav_menu( array(
    'theme_location' => 'primary',
    'depth'      => 2,
    'container'  => false,
    'menu_class' => 'nav navbar-nav',
    'walker'     => new wp_bootstrap_navwalker())
);

?>