<?php if( !empty( $instance['title'] ) ) echo $args['before_title'] . esc_html($instance['title']) . $args['after_title'] ?>

<div class="gp-cf7-widget-content">
    <?php echo do_shortcode('[contact-form-7 id="' . $instance['cf7-id'] . '"]'); ?>
</div>