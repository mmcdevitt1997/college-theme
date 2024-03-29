<?php

function college_files(){
    wp_enqueue_script( 'js-college', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('icons', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('college_main_styles', get_stylesheet_uri());
}
function college_features(){
    register_nav_menu('headerMenuLocation','Header Menu Location');
    register_nav_menu('footerMenuLocationOne','Footer Location One');
    register_nav_menu('footerMenuLocationTwo','Footer Location Two');
    add_theme_support( 'title-tag');
}

add_action('wp_enqueue_scripts', 'college_files');
add_action('after_setup_theme', 'college_features');