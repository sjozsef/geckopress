<?php $slider = ot_get_option( 'gp-home-slider', false ); ?>

<?php if ( $slider ) : ?>

<?php echo do_shortcode( $slider ); ?>

<?php endif; ?>
