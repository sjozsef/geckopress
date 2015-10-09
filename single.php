<?php
/**
 * Template file displaying single blog posts.
 *
 * This page template has no margins and does not displaying the page title.
 *
 * @package GeckoPress
 * @subpackage Main
 * @since 0.1
 */

defined( 'ABSPATH' ) or die( 'Cannot access pages directly.' );

get_header();

?>

<div class="gp-page-title-wrap">
    <div class="container single-post-page-title">
        <h6><?php _e('Blog', 'geckopress'); ?></h6>
    </div>
</div>

<?php 

$gp_layout = ot_get_option('gp-blog-layout', 'right-sidebar');
$gp_layout_snippet = '';

switch($gp_layout)
{
    case 'right-sidebar':
        $gp_layout_snippet='snippets/layouts/layout-sidebar-right-';
    break;
    
    case 'left-sidebar':
        $gp_layout_snippet='snippets/layouts/layout-sidebar-left-';
    break;
    
    case 'fullwidth':
        $gp_layout_snippet='snippets/layouts/layout-fullwidth-';
    break;
}

?>

<?php get_template_part($gp_layout_snippet . 'start'); ?>

<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>
    
        <?php get_template_part( 'snippets/loops/single', 'post' ); ?>
    
    <?php endwhile; ?>

<?php endif; ?>

<?php get_template_part($gp_layout_snippet . 'end'); ?>

<?php get_footer(); ?>
