<?php
$style = ot_get_option('gp-header-style', 'nav-style-1');
get_template_part('snippets/header/' . $style); //TODO: Validate this before include!!!
?>