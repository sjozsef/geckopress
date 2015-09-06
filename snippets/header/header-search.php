<?php if(ot_get_option('gp-nav-search', 'off') == 'on' && 
    GPConfig::getInstance()->get_cfg('gp_allow_nav_search')) : ?>
    <form class="navbar-form navbar-right" method="GET">
        <div class="form-group">
            <input name="s" class="form-control" placeholder="<?php _e('Search', geckopress); ?>" type="text">
        </div>
        <button class="btn btn-default" type="submit"><?php _e('Submit', 'geckopress'); ?></button>
    </form>
<?php endif; ?>