<?php
/*
Template name: Page (fullwidth)
*/
?>

<?php get_header(); ?>

<div class="container">
            
    <div class="main-content">
    
        <?php if(have_posts()) : ?>

            <?php while(have_posts()) : the_post(); ?>
            
                <?php get_template_part('snippets/loops/single', 'page'); ?>
            
            <?php endwhile; ?>
        
        <?php endif; ?>
    
    </div>
    
</div>

<?php get_footer(); ?>