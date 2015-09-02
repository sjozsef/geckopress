<div class="blog-item">
        
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail('blog-thumbnail'); ?>
            </a>
        </div>
    <?php endif; ?>
    
    <h2>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>
    
    <?php get_template_part('snippets/loops/post-head-meta'); ?>
    
    <div class="post-content">
        <?php the_content(); ?>
    </div>
    
    <?php get_template_part('snippets/loops/post-foot-meta'); ?>
    
</div>