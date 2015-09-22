<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail( 'blog-thumbnail' ); ?>
        </div>
    <?php endif; ?>
    
    <h1><?php the_title(); ?></h1>
    
    <?php get_template_part( 'snippets/loops/post-head-meta' ); ?>
    
    <div class="post-content">
        <?php the_content(); ?>
    </div>
    
    <?php get_template_part( 'snippets/loops/post-foot-meta' ); ?>
    
</div>
