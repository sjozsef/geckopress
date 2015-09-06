<?php

require_once( TEMPLATEPATH . '/functions/spyc.php' );
require_once( TEMPLATEPATH . '/functions/utils.php' );
require_once( TEMPLATEPATH . '/functions/config.php' );
require_once( TEMPLATEPATH . '/functions/scripts.php' );
require_once( TEMPLATEPATH . '/functions/styles.php' );
require_once( TEMPLATEPATH . '/functions/options.php' ); 
require_once( TEMPLATEPATH . '/functions/nav-menus.php' );
require_once( TEMPLATEPATH . '/functions/sidebars.php' );
require_once( TEMPLATEPATH . '/functions/image-sizes.php' );
require_once( TEMPLATEPATH . '/functions/theme-supports.php' );

if(!is_admin())
{
    require_once( TEMPLATEPATH . '/functions/wp_bootstrap_pagination.php');
}

?>