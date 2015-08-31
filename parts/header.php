<?php defined('ABSPATH') or die("Direct access not allowed."); ?>

<?php
get_template_part('snippets/header/header-navigation');

if(is_home() || is_front_page())
{
    get_template_part('snippets/header/header-home-slider');
}

?>