<?php
/**
 * Displaying a basic 404 page
 *
 * This file is loaded by WordPres if the content does not exists. Message is translateable with gettext.
 *
 * @package GeckoPress
 * @subpackage Main
 * @since 0.1
 */

get_header(); ?>

<div class="bs-container">
            
    <div class="main-content not-found-content">
    
    <h1>404</h1>
    <p><?php esc_attr_e( "It seems that the page you were trying to reach couldn't be found, or maybe you have mis-typed the URL, please check your spelling. We think that the best thing to do is to use the search bar at the upper right of this page, or check out our homepage. Please contact us if the problem persists or if you definitely can't find what you are looking for. Thank you very much." ); ?></p>
    
    </div>
    
</div>

<?php get_footer(); ?>
