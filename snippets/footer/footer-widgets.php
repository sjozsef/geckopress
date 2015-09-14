<?php if(GPConfig::getInstance()->get_cfg('gp_allow_footer_widgets')) : ?>

<div id="footer-widgets">
    <div class="bs-container">
        <div class="row">
            <div class="col-md-3 footer-widget-container">
                <?php dynamic_sidebar('footer-widget-1'); ?>
            </div>
            <div class="col-md-3">
                <?php dynamic_sidebar('footer-widget-2'); ?>
            </div>
            <div class="col-md-3">
                <?php dynamic_sidebar('footer-widget-3'); ?>
            </div>
            <div class="col-md-3">
                <?php dynamic_sidebar('footer-widget-4'); ?>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>