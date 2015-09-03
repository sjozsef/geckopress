<?php defined('ABSPATH') or die("Direct access not allowed."); ?>

    <?php get_template_part('snippets/footer/footer'); ?>

</div> <!-- end of #main -->

<?php 
    $gp_analytics = ot_get_option('gp-analytics', false);
    if($gp_analytics)
    {
        echo $gp_analytics;
    }
?>

<?php wp_footer(); ?>

<?php 
$gp_custom_js = ot_get_option('gp-custom-js', false);
?>

<?php if($gp_custom_js) : ?>

<script type="text/javascript">
    <?php echo $gp_custom_js; ?>
</script>

<?php endif; ?>
</body>
</html>