<?php if ( has_post_thumbnail() ) : ?>
    <div class="post-thumbnail">
        <?php the_post_thumbnail('blog-thumbnail'); ?>
    </div>
<?php endif; ?>

<h1><?php the_title(); ?></h1>

<div id="post-content">
    <?php the_content(); ?>
</div>