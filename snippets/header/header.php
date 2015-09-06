<div id="header">
    <?php 
    
        get_template_part('snippets/header/header-navigation');
    
        if(is_home() || is_front_page())
        {
            get_template_part('snippets/header/header-home-slider');
        }

    ?>
</div>

<?php get_template_part('snippets/header/header-after'); ?>