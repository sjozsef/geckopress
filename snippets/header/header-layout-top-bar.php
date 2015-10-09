<nav class="gp-top-bar small navbar-inverse">
    <div class="bs-container">
        <div class="navbar-collapse">
        <?php get_template_part( 'snippets/header/header-item-menu-secondary' ); ?>
        
        <?php if ( ot_get_option( 'gp-nav-language-switcher-position', 'top' ) == 'top' ) : ?>
            <?php get_template_part( 'snippets/header/header-item-language-switcher' ); ?>
        <?php endif; ?>
        
        <?php if ( ot_get_option( 'gp-nav-social-position', 'bottom' ) == 'top' ) : ?>
            <?php get_template_part( 'snippets/header/header-item-social' ); ?>
        <?php endif; ?>
        
        </div>
            
    </div><!-- /.bs-container -->
</nav>
<nav class="navbar navbar-default">
    <div class="bs-container">

        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-target=
            ".gp-navbar-collapse" data-toggle="collapse" type=
            "button"><span class="sr-only"><?php _e( 'Toggle navigation', 'geckopress' ); ?></span>
            <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span></button>
            <?php get_template_part( 'snippets/header/header-item-logo' ); ?>
        </div>

        <div class="collapse navbar-collapse gp-navbar-collapse">
            
            <?php get_template_part( 'snippets/header/header-item-menu-primary' ); ?>
            <div class="mobile-secondary-menu">
                <?php get_template_part( 'snippets/header/header-item-menu-secondary' ); ?>
            </div>
            <?php if ( ot_get_option( 'gp-nav-language-switcher-position', 'top' ) == 'bottom' ) : ?>
                <?php get_template_part( 'snippets/header/header-item-language-switcher' ); ?>
            <?php endif; ?>
            <?php if ( ot_get_option( 'gp-nav-social-position', 'bottom' ) == 'bottom' ) : ?>
                <?php get_template_part( 'snippets/header/header-item-social' ); ?>
            <?php endif; ?>
            <?php get_template_part( 'snippets/header/header-item-search' ); ?>
            
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>