<?php 

if( GPConfig::getInstance()->get_cfg('gp_allow_nav_social', false) && 
    ot_get_option('gp-nav-social-enabled', false) )
{
    ?>
    
    <div class="gp-header-social-wrap navbar-form navbar-right">
        <?php get_template_part('snippets/common/social-links'); ?>
    </div>
    
    <?php
}

?>
