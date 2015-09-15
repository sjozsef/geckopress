<?php
/**
 * Template file for displaying search form.
 *
 * This search form can be displayed with the built-in WordPress search widget.
 *
 * @package GeckoPress
 * @subpackage Main
 * @since 0.1
 *
 */

defined( 'ABSPATH' ) or die( 'Cannot access pages directly.' );

?>
<form role="search" method="get" class="search-form form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="form-search-input" class="sr-only"><?php esc_html_e( 'Search for', 'geckopress' ); ?></label>
	<div class="input-group">
		<input type="search" id="form-search-input" class="form-control" placeholder="<?php esc_attr_e( 'Search &hellip;', 'geckopress' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php esc_attr_e( 'Search for:', 'geckopress' ); ?>">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default"><?php esc_html_e( 'Search', 'geckopress' ); ?></button>
		</span>
	</div>
</form>