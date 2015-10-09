<nav class="navbar navbar-default">
    <div class="bs-container">

        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-target=
            "#gp-navbar-collapse-1" data-toggle="collapse" type=
            "button"><span class="sr-only"><?php _e( 'Toggle navigation', 'geckopress' ); ?></span>
            <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span></button>
            <?php get_template_part( 'snippets/header/header-item-logo' ); ?>
        </div>

        <div class="collapse navbar-collapse" id=
        "gp-navbar-collapse-1">
            
            <?php get_template_part( 'snippets/header/header-item-menu-primary' ); ?>
            
            <?php get_template_part( 'snippets/header/header-item-social' ); ?>
            <?php get_template_part( 'snippets/header/header-item-language-switcher' ); ?>
            <?php get_template_part( 'snippets/header/header-item-search' ); ?>
            
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
