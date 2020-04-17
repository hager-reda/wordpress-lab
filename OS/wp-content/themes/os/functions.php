<?php

// Adding assert
function addAssets(){
    wp_enqueue_style('bootsrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('main',get_template_directory_uri().'/assets/css/main.css');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js',['jquery']);
}
add_action("wp_enqueue_scripts","addAssets");

//add theme options
add_theme_support("post-thumbnails");

?>