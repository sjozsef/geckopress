function hover_dropdown_fix()
{
    if(jQuery(window).width() <= 992)
    {
        jQuery('.navbar-nav.hover-dropdown.mobile-multilevel .menu-item-has-children > a')
            .addClass('dropdown-toggle')
            .attr('data-toggle','dropdown');
    }
    else
    {
        jQuery('.navbar-nav.hover-dropdown.mobile-multilevel .menu-item-has-children > a')
            .removeClass('dropdown-toggle')
            .attr('data-toggle','');
    }
}

function init_lightbox()
{
    if(jQuery('body').hasClass('gp-lightbox'))
    {
        var select = jQuery('a[href$=".bmp"],a[href$=".gif"],a[href$=".jpg"],a[href$=".jpeg"],a[href$=".png"],a[href$=".BMP"],a[href$=".GIF"],a[href$=".JPG"],a[href$=".JPEG"],a[href$=".PNG"]');
    	select.attr('data-lightbox', 'post-images');
    	select.attr('class', 'lightbox-link');
    }
}

jQuery(document).ready(function()
{
    hover_dropdown_fix();
    init_lightbox();
    
    jQuery(window).resize(function()
    {
       hover_dropdown_fix();
    });

});