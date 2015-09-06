<?php

/**
 * Processing YAML files (ifcfg, ifinstalled)
 * TODO: multiple ifcfg
 * TODO: ifinstalled
 */
function gp_process_yaml_array($array)
{
    if(!is_array($array))
    {
        return false;
    }
    
    $ret = array();
    
    foreach($array as $key => $val)
    {
        $add = true;
        
        if(isset($val['ifcfg']))
        {
            if(!GPConfig::getInstance()->get_cfg($val['ifcfg']))
            {
                $add = false;
            }
        }
        
        if($add)
        {
            $ret[$key]=$val;
        }
    }
    
    return $ret;
}

/**
 * Loads a YAML file into an array. First checks the child tempate's file, then the framework's 
 */
function gp_load_yaml($filename)
{
    $file = locate_template($filename, false, false);
    if($file)
    {
        return gp_process_yaml_array(spyc_load_file($file));
    }
    else 
    {
        return false;
    }
}

/**
 * Modifying read more text
 */
function gp_modify_read_more_link()
{
    return '<a class="btn btn-primary btn-read-more" href="' . get_permalink() . '">'.
    __('Read more', 'geckopress') .
    '</a>';
}
add_filter( 'the_content_more_link', 'gp_modify_read_more_link' );

/**
 * Loading textdomains
 * TODO: if chid template's 'languages' folder exists, load it!
 */
function gp_theme_setup()
{
    load_theme_textdomain('geckopress', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'gp_theme_setup');

?>