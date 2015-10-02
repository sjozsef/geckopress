<nav class="navbar navbar-default gp-header">
    <div class="bs-container">
        
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-target=
            ".gp-navbar-collapse" data-toggle="collapse" type=
            "button"><span class="sr-only"><?php _e( 'Toggle navigation', 'geckopress' ); ?></span>
            <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span></button>
            <?php get_template_part( 'snippets/header/header-logo' ); ?>
        </div>
        
        <div class="collapse navbar-collapse gp-navbar-collapse">
        
        <?php if ( ot_get_option( 'gp-nav-social-position', 'bottom' ) == 'top' ) : ?>
            <?php get_template_part( 'snippets/header/header-social' ); ?>
        <?php endif; ?>
        
        <?php if ( ot_get_option( 'gp-nav-language-switcher-position', 'top' ) == 'top' ) : ?>
            <?php get_template_part( 'snippets/header/header-language-switcher' ); ?>
        <?php endif; ?>
        
        </div>
            
    </div><!-- /.bs-container -->
</nav>
<nav class="navbar navbar-default collapse navbar-collapse gp-navbar-collapse">
    <div class="bs-container">
            
            <?php get_template_part( 'snippets/header/header-menu' ); ?>
            
            <?php get_template_part( 'snippets/header/header-menu-secondary' ); ?>
            
            <?php if ( ot_get_option( 'gp-nav-language-switcher-position', 'top' ) == 'bottom' ) : ?>
                <?php get_template_part( 'snippets/header/header-language-switcher' ); ?>
            <?php endif; ?>
            <?php if ( ot_get_option( 'gp-nav-social-position', 'bottom' ) == 'bottom' ) : ?>
                <?php get_template_part( 'snippets/header/header-social' ); ?>
            <?php endif; ?>
            <?php get_template_part( 'snippets/header/header-search' ); ?>
            
    </div><!-- /.container-fluid -->
</nav>
