<?php

$img_sizes = gp_load_yaml( '/etc/image-sizes.yaml' );

foreach($img_sizes as $name => $data)
{
    add_image_size($name, $data['width'], $data['height'], $data['crop']);
}

?>