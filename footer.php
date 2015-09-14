<?php
/**
 * The footer.
 *
 * @package GeckoPress
 * @subpackage Main
 * @since 0.1
 */

defined( 'ABSPATH' ) or die( 'Cannot access pages directly.' );

?>

    <?php get_template_part( 'snippets/footer/footer' ); ?>

</div> <!-- end of #main -->

<?php
	$gp_analytics = ot_get_option( 'gp-analytics', false );
if ( $gp_analytics ) {
	echo $gp_analytics;
}
?>

<?php wp_footer(); ?>

<?php
$gp_custom_js = ot_get_option( 'gp-custom-js', false );
?>

<?php if ( $gp_custom_js ) : ?>

<script type="text/javascript">
/* <![CDATA[ */
    <?php echo $gp_custom_js; ?>
/* ]]> */
</script>

<?php endif; ?>

<script type="text/javascript">

    function hover_dropdown_fix()
    {
        console.log('dropdown fixing');
        if(jQuery(window).width() <= 768)
        {
            console.log('mobile');
            jQuery('.navbar-nav.hover-dropdown.mobile-multilevel .menu-item-has-children > a')
                .addClass('dropdown-toggle')
                .attr('data-toggle','dropdown');
        }
        else
        {
            jQuery('.navbar-nav.hover-dropdown.mobile-multilevel .menu-item-has-children > a')
                .removeClass('dropdown-toggle')
                .attr('data-toggle','');
        }
    }

    jQuery(document).ready(function()
    {
        hover_dropdown_fix();
        jQuery(window).resize(function()
        {
           hover_dropdown_fix();
        });
    });
</script>

</body>
</html>
