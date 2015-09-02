<div class="search-item">
    <h2>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>
    
    <?php get_template_part('snippets/loops/post-head-meta'); ?>
    
    <div class="post-content">
        <?php the_excerpt(); ?>
        <a class="btn btn-primary btn-read-more" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php _e('Read more', 'geckopress'); ?>
        </a>
    </div>
    
</div>
