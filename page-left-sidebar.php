<?php
/**
 * Basic page
 *
 * This page template has a sidebar at the left.
 *
 * @package GeckoPress
 * @subpackage Main
 * @since 0.4
 * 
 * Template name: Left Sidebar
 */

defined( 'ABSPATH' ) or die( 'Cannot access pages directly.' );

get_header();

?>

<?php get_template_part('snippets/common/page-single-title'); ?>

<?php get_template_part('snippets/layouts/layout-sidebar-left-start'); ?>
            
<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>
    
        <?php get_template_part( 'snippets/loops/single', 'page' ); ?>
    
    <?php endwhile; ?>

<?php endif; ?>

<?php get_template_part('snippets/layouts/layout-sidebar-left-end'); ?>


<?php get_footer(); ?>
