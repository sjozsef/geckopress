<?php if(ot_get_option('gp-nav-language-switcher', 'off') == 'on' && 
    GPConfig::getInstance()->get_cfg('gp_allow_nav_language_switcher')) : ?>

    <?php if(function_exists('pll_the_languages') && 
            function_exists('pll_current_language')) : ?>
            
        <?php 
            $classes = '';
            if(ot_get_option('gp-nav-language-switcher-float', 'right') == 'left')
            {
                $classes .= ' navbar-left';
            }
            else 
            {
                $classes .= ' navbar-right';
            }
        ?>
    
        <div class="navbar-form navbar-language-switcher <?php echo $classes; ?>">
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" 
                        type="button" 
                        id="gp-header-language-switcher"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                    <?php
                        
                        $flag = false;
                    
                        if(GPConfig::getInstance()->get_cfg('gp_language_switcher_flag') )
                        {
                            echo '<span class="gp-ls-flag">' .
                            pll_current_language('flag') .
                            '</span>';
                            $flag = true;
                        }
                        if(GPConfig::getInstance()->get_cfg('gp_language_switcher_name') )
                        {
                            if($flag)
                            {
                                echo '&nbsp;';
                            }
                            
                            echo '<span class="gp-ls-name">' .
                            pll_current_language('name') .
                            '</span>';
                        }
                        elseif(GPConfig::getInstance()->get_cfg('gp_language_switcher_slug') )
                        {
                            if($flag)
                            {
                                echo '&nbsp;';
                            }
                            echo '<span class="gp-ls-name">' .
                            pll_current_language('slug') .
                            '</span>';
                        }
                    
                    ?>
                    <!-- <span class="caret"></span> -->
                </button>
                
                <?php 
                    $args = array(
                        'echo' => false,
                        'dropdown' =>false,
                        'show_flags' => true,
                        'show_names' => true,
                        'hide_if_empty' => false,
                        'raw' => false
                        );
                    $list = pll_the_languages(array_merge($args));
                ?>
                
                <ul class="dropdown-menu" aria-labelledby="gp-header-language-switcher">
                    <?php echo $list; ?>
                </ul>
            </div>
        </div>
        
    <?php endif; ?>
<?php endif; ?>