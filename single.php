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

<div class="bs-container">
    
    <div class="row">
        
        <div class="col-md-8">
            
            <div id="main-content-wrap">
            
                <?php if ( have_posts() ) : ?>
        
                    <?php while ( have_posts() ) : the_post(); ?>
                    
                        <?php get_template_part( 'snippets/loops/single', 'post' ); ?>
                    
                    <?php endwhile; ?>
                
                <?php endif; ?>
            
            </div>
            
        </div>
        
        <div class="col-md-4">
            
            <div id="sidebar-left" class="sidebar">
                
                <?php dynamic_sidebar( 'sidebar' ); ?>
                
            </div>
            
        </div>
        
    </div>
    
</div>

<?php get_footer(); ?>
