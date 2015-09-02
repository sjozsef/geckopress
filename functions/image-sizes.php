<?php

require_once(TEMPLATEPATH . '/functions/spyc.php');

$img_sizes = SPYC::YAMLLoad(get_stylesheet_directory() . 
    '/etc/image-sizes.yaml' );

foreach($img_sizes as $name => $data)
{
    add_image_size($name, $data['width'], $data['height'], $data['crop']);
}

?>