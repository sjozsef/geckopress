<?php

if ( GPConfig::getInstance()->get_cfg( 'gp_allow_nav_social', false ) &&
	ot_get_option( 'gp-nav-social-enabled', 'off' ) == 'on' ) {
	$classes = '';

	if ( ot_get_option( 'gp-nav-social-float', 'right' ) == 'left' ) {
		$classes = 'navbar-left';
	} else {
		$classes = 'navbar-right';
	}
	?>
    
    <div class="gp-header-social-wrap <?php echo $classes; ?>">
        <?php get_template_part( 'snippets/common/social-links' ); ?>
    </div>
    
    <?php
}

?>
