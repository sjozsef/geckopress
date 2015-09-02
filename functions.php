<?php defined('ABSPATH') or die("Direct access not allowed."); ?>

<?php

require_once( TEMPLATEPATH . '/functions/scripts.php' );
require_once( TEMPLATEPATH . '/functions/styles.php' );
require_once( TEMPLATEPATH . '/functions/options.php'); 
require_once( TEMPLATEPATH . '/functions/nav-menus.php');
require_once( TEMPLATEPATH . '/functions/sidebars.php');
require_once( TEMPLATEPATH . '/functions/image-sizes.php');
require_once( TEMPLATEPATH . '/functions/theme-supports.php');
require_once( TEMPLATEPATH . '/functions/wp_bootstrap_pagination.php');

function modify_read_more_link()
{
    return '<a class="btn btn-primary btn-read-more" href="' . get_permalink() . '">'.
    __('Read more', 'geckopress') .
    '</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

?>