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

<div class="bs-container">
            
    <div class="main-content">
    
        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>
            
                <?php get_template_part( 'snippets/loops/single', 'page' ); ?>
            
            <?php endwhile; ?>
        
        <?php endif; ?>
    
    </div>
    
</div>

<?php get_footer(); ?>
