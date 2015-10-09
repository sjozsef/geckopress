<?php
/*
Loop name: 3 Columns
*/
?>

<?php if ( have_posts() ) : ?>

    <div class="row">

    <?php while( have_posts() ) : the_post(); ?>
        
        <div class="gp-post-listing gp-col-3 col-md-4">
            <div class="gp-thumbnail-wrap">
                <div style="width:100%; color: red; height: 170px">
                </div>
            </div>
            <div class="gp-title-wrap">
                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_title(); ?> </a> </h2>
            </div>
            <div class="gp-meta-wrap">
                
            </div>
            <div class="gp-excerpt-wrap">
                <?php the_excerpt(); ?>
            </div>
        </div>
        
    <?php endwhile; ?>
    
    </div>

<?php endif; ?>