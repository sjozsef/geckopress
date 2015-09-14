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
    <?= $gp_custom_js; ?>
/* ]]> */
</script>

<?php endif; ?>
</body>
</html>
