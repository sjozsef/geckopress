<?php

$social = ot_get_option('gp-social-links', array());

?>

<?php if(!empty($social)) : ?>

    <ul class="nav navbar-nav gp-social-links">

    <?php foreach($social as $soc) : ?>
        <li>
            <a  class="gp-social-link <?php echo $soc['gp-nav-social-site']; ?>"
                href="<?php echo $soc['gp-nav-social-href']; ?>"
                title="<?php $soc['title']; ?>" >
            </a>
        </li>
    <?php endforeach; ?>
    
    </ul>

<?php endif; ?>