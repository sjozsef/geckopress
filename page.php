<?php get_header(); ?>

<div class="container">
    
    <div class="row">
        
        <div class="col-md-8">
            
            <div class="main-content">
            
                <?php if(have_posts()) : ?>
        
                    <?php while(have_posts()) : the_post(); ?>
                    
                        <?php get_template_part('snippets/loops/single', 'page'); ?>
                    
                    <?php endwhile; ?>
                
                <?php endif; ?>
            
            </div>
            
        </div>
        
        <div class="col-md-4">
            
            <div id = "sidebar-left" class="sidebar">
                
                <?php dynamic_sidebar('sidebar'); ?>
                
            </div>
            
        </div>
        
    </div>
    
</div>

<?php get_footer(); ?>