<?php if ( ot_get_option( 'gp-nav-search', 'off' ) == 'on' &&
	GPConfig::getInstance()->get_cfg( 'gp_allow_nav_search' ) ) : ?>
    
    <?php
		$classes = '';
	if ( ot_get_option( 'gp-nav-search-float', 'right' ) == 'left' ) {
		$classes .= ' navbar-left';
	} else {
		$classes .= ' navbar-right';
	}
	?>
    
    <form class="navbar-form navbar-search <?php echo $classes; ?>" method="GET">
        <label for="form-search-input" class="sr-only"><?php esc_html_e( 'Search for', 'geckopress' ); ?></label>
    	<div class="input-group">
    		<input type="search" class="search-form-input form-control" placeholder="<?php esc_attr_e( 'Search &hellip;', 'geckopress' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php esc_attr_e( 'Search for:', 'geckopress' ); ?>">
    		<span class="input-group-btn">
    			<button type="submit" class="btn btn-default"><?php esc_html_e( 'Search', 'geckopress' ); ?></button>
    		</span>
    	</div>
    </form>
<?php endif; ?>
