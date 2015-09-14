<?php
/*
Template name: Template for Page Builder
*/
?>

<?php get_header(); ?>

<div class="bs-container">
            
    <div class="main-content">
    
        <?php if(have_posts()) : ?>

            <?php while(have_posts()) : the_post(); ?>
            
                <div class="post-content page-builder-content">
                    <?php the_content(); ?>
                </div>
            
            <?php endwhile; ?>
        
        <?php endif; ?>
    
    </div>
    
</div>

<?php get_footer(); ?>