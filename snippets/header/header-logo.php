<?php $gp_logo = ot_get_option('gp-logo', false); ?>

<?php if(!$gp_logo) : ?>

<a  class="navbar-brand" 
    href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?>
</a>

<?php else : ?>

<a  class="navbar-brand navbar-brand-image"
    href="<?php bloginfo('home'); ?>"
    title="<?php bloginfo('name'); ?>" >
    <img src="<?php echo $gp_logo; ?>" alt="<?php bloginfo('name'); ?>" />
</a>

<?php endif; ?>

