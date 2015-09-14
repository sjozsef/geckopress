<?php
/**
 * A page template for Page Builder
 *
 * This page template has no margins and does not displaying the page title.
 *
 * @package GeckoPress
 * @subpackage Main
 * @since 0.1
 *
 * Template name: Template for Page Builder
 */

defined( 'ABSPATH' ) or die( 'Cannot access pages directly.' );

get_header();

?>

<div class="bs-container">
            
    <div class="main-content">
    
        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>
            
                <div class="post-content page-builder-content">
                    <?php the_content(); ?>
                </div>
            
            <?php endwhile; ?>
        
        <?php endif; ?>
    
    </div>
    
</div>

<?php get_footer(); ?>
