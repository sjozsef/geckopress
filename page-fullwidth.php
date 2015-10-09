<?php
/**
 * A fullwidth page template
 *
 * This page template has no sidebars.
 *
 * @package GeckoPress
 * @subpackage Main
 * @since 0.1
 *
 * Template name: Fullwidth page
 */

defined( 'ABSPATH' ) or die( 'Cannot access pages directly.' );

get_header();

?>

<?php get_template_part('snippets/common/page-single-title'); ?>

<?php get_template_part('snippets/layouts/layout-fullwidth-start'); ?>
    
<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>
    
        <?php get_template_part( 'snippets/loops/single', 'page' ); ?>
    
    <?php endwhile; ?>

<?php endif; ?>
    
<?php get_template_part('snippets/layouts/layout-fullwidth-end'); ?>

<?php get_footer(); ?>
