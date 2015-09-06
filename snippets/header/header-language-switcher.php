<?php if(function_exists('pll_the_languages') && 
        function_exists('pll_current_language')) : ?>

    <div class="navbar-form navbar-right">
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" 
                    type="button" 
                    id="gp-header-language-switcher"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                <?php echo pll_current_language('flag'); ?>
                <!-- <span class="caret"></span> -->
            </button>
            
            <?php 
                $args = [
                    'echo' => false,
                    'dropdown' =>false,
                    'show_flags' => true,
                    'show_names' => true,
                    'hide_if_empty' => false,
                    'raw' => false
                    ];
                $list = pll_the_languages(array_merge($args));
            ?>
            
            <ul class="dropdown-menu" aria-labelledby="gp-header-language-switcher">
                <?php echo $list; ?>
            </ul>
        </div>
    </div>
    
<?php endif; ?>