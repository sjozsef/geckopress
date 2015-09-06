<nav class="navbar navbar-default">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-target=
            "#gp-navbar-collapse-1" data-toggle="collapse" type=
            "button"><span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span></button>
            <?php if(ot_get_option('gp-hidden-nav-logo', 'off') == 'off') : ?>
                <?php get_template_part('snippets/header/header-logo'); ?>
            <?php endif; ?>
        </div>

        <div class="collapse navbar-collapse" id=
        "gp-navbar-collapse-1">
            
            <?php get_template_part('snippets/header/header-menu'); ?>
            
            <?php get_template_part('snippets/header/header-language-switcher'); ?>
            
            <?php if(ot_get_option('gp-nav-search', 'off') == 'on') : ?>
                <?php get_template_part('snippets/header/header-search'); ?>
            <?php endif; ?>
            
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>