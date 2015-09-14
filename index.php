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

<div class="bs-container">
    
    <div class="row">
        
        <div class="col-md-8">
            
            <div id="main-content-wrap">
            
                <?php if ( have_posts() ) : ?>
        
                    <?php while ( have_posts() ) : the_post(); ?>
                    
                        <?php get_template_part( 'snippets/loops/archive', 'blog' ); ?>
                    
                    <?php endwhile; ?>
                
                <?php endif; ?>
            
            </div>
            
            <?php wp_bootstrap_pagination(); ?>
            
        </div>
        
        <div class="col-md-4">
            
            <div id="sidebar-left" class="sidebar">
                
                <?php dynamic_sidebar( 'sidebar' ); ?>
                
            </div>
            
        </div>
        
    </div>
    
</div>

<?php get_footer(); ?>
