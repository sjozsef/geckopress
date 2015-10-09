<?php
/**
 * The homepage template file.
 *
 * If there is not a static home page, this file will be loaded.
 *
 * @package GeckoPress
 * @subpackage Main
 * @since 0.1
 */

defined( 'ABSPATH' ) or die( 'Cannot access pages directly.' );

get_header();

?>

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
    
        <?php get_template_part( 'snippets/loops/archive', 'blog' ); ?>
    
    <?php endwhile; ?>

<?php endif; ?>

<?php wp_bootstrap_pagination(); ?>
        
<?php get_template_part($gp_layout_snippet . 'end'); ?>

<?php get_footer(); ?>
