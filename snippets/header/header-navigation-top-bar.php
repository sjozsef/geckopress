<nav class="gp-top-bar small">
    <div class="bs-container">

        <?php get_template_part('snippets/header/header-menu-secondary'); ?>
        <?php get_template_part('snippets/header/header-social'); ?>
        <?php get_template_part('snippets/header/header-language-switcher'); ?>
            
    </div><!-- /.bs-container -->
</nav>
<nav class="navbar navbar-default">
    <div class="bs-container">

        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-target=
            "#gp-navbar-collapse-1" data-toggle="collapse" type=
            "button"><span class="sr-only"><?php _e('Toggle navigation'); ?></span>
            <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span></button>
            <?php get_template_part('snippets/header/header-logo'); ?>
        </div>

        <div class="collapse navbar-collapse" id=
        "gp-navbar-collapse-1">
            
            <?php get_template_part('snippets/header/header-menu'); ?>
            <div class="mobile-secondary-menu">
                <?php get_template_part('snippets/header/header-menu-secondary'); ?>
            </div>
            <?php get_template_part('snippets/header/header-search'); ?>
            
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>