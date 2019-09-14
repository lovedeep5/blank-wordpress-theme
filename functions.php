<?php 

function load_custom_styles(){

wp_register_script('jquery', get_template_directory_uri()."/js/jquery.js" , array(), 1 , 1);
wp_enqueue_script('jquery');

wp_register_style('bootstrap', get_template_directory_uri()."/css/bootstrap.min.css" , array(), 1 , 'all');
wp_enqueue_style('bootstrap');

wp_register_style('styles', get_template_directory_uri()."/style.css" , array(), 1 , 'all');
wp_enqueue_style('styles');

wp_register_style('fa', get_template_directory_uri()."/css/fa.css" , array(), 1 , 1);
wp_enqueue_style('fa');



wp_register_script('bsjs', get_template_directory_uri()."/js/bootstrap.min.js" , array(), 1 , 1);
wp_enqueue_script('bsjs');	


};
add_theme_support("menus");
register_nav_menus(

array(
'top-menu' => __('Top Menu' , 'theme'),
)

);



add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );

add_action('wp_enqueue_scripts' , 'load_custom_styles');
 ?>