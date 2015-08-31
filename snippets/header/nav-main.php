<nav class="navbar navbar-default">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-target=
            "#gp-navbar-collapse-1" data-toggle="collapse" type=
            "button"><span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span></button> <a class="navbar-brand"
            href="#">Brand</a>
        </div>

        <div class="collapse navbar-collapse" id=
        "gp-navbar-collapse-1">
            
            <?php get_template_part('snippets/header/menu-primary'); ?>
            <?php if(ot_get_option('gp-nav-search', 'off') == 'on') : ?>
                <?php get_template_part('snippets/header/header-search'); ?>
            <?php endif; ?>
            
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>