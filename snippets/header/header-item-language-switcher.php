<?php if ( ot_get_option( 'gp-nav-language-switcher', 'off' ) == 'on' ) : ?>

    <?php if ( function_exists( 'pll_the_languages' ) &&
			function_exists( 'pll_current_language' ) ) : ?>
            
        <?php
			$classes = '';
		if ( ot_get_option( 'gp-nav-language-switcher-float', 'right' ) == 'left' ) {
			$classes .= ' navbar-left';
		} else {
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

					if ( ot_get_option( 'gp-nav-language-switcher-flag', 'on' ) == 'on' ) {
						echo '<span class="gp-ls-flag">' .
						pll_current_language( 'flag' ) .
						'</span>';
						$flag = true;
					}
					if ( ot_get_option( 'gp-nav-language-switcher-text', 'slug' ) == 'name' ) {
						if ( $flag ) {
							echo '&nbsp;';
						}

						echo '<span class="gp-ls-name">' .
						pll_current_language( 'name' ) .
						'</span>';
					} elseif ( ot_get_option( 'gp-nav-language-switcher-text', 'slug' ) == 'slug'  ) {
						if ( $flag ) {
							echo '&nbsp;';
						}
						echo '<span class="gp-ls-name">' .
						pll_current_language( 'slug' ) .
						'</span>';
					}

					?>

                </button>
                
                <?php
                
                	
                
					$args = array(
						'echo' => false,
						'dropdown' => false,
						'show_flags' => ot_get_option( 'gp-nav-language-switcher-flag', 'on' ) == 'on',
						'show_names' => true,
						'hide_if_empty' => false,
						'raw' => false,
						);
					$list = pll_the_languages( array_merge( $args ) );
				?>
                
                <ul class="dropdown-menu" aria-labelledby="gp-header-language-switcher">
                    <?php echo $list; ?>
                </ul>
            </div>
        </div>
        
    <?php endif; ?>
<?php endif; ?>
