<?php
/**
 * Basic page
 *
 * This page template has a sidebar at the right.
 *
 * @package GeckoPress
 * @subpackage Main
 * @since 0.1
 * 
 * Template name: Right Sidebar
 */

defined( 'ABSPATH' ) or die( 'Cannot access pages directly.' );

get_header();

?>

<?php get_template_part('snippets/common/page-single-title'); ?>

<?php get_template_part('snippets/layouts/layout-sidebar-right-start'); ?>
            
<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>
    
        <?php get_template_part( 'snippets/loops/single', 'page' ); ?>
    
    <?php endwhile; ?>

<?php endif; ?>

<?php get_template_part('snippets/layouts/layout-sidebar-right-end'); ?>

<?php get_footer(); ?>
