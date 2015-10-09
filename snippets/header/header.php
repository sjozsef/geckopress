<div id="header">
    <?php

		$nav_layout = ot_get_option( 'gp-nav-layout', 'default' );
	switch ( $nav_layout ) {
		case 'top-bar':
			get_template_part( 'snippets/header/header-layout-top-bar' );
			break;

		case 'simple':
			get_template_part( 'snippets/header/header-layout-simple' );
			break;
			
		case 'default':
			get_template_part( 'snippets/header/header-layout-default' );
			break;
	}


	if ( is_home() || is_front_page() ) {
		get_template_part( 'snippets/header/header-home-slider' );
	}

	?>
</div>

<?php get_template_part( 'snippets/header/header-after' ); ?>
