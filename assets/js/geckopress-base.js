function hover_dropdown_fix()
{
    console.log('dropdown fixing');
    if(jQuery(window).width() <= 768)
    {
        console.log('mobile');
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

jQuery(document).ready(function()
{
    hover_dropdown_fix();
    jQuery(window).resize(function()
    {
       hover_dropdown_fix();
    });
});