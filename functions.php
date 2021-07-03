<?php

function mytheme_title_support(){

    add_theme_support('title-tag');

}

add_action( "after_setup_theme","mytheme_title_support");

function mytheme_register_styles(){
    $version = wp_get_theme()->get('Version');
    
    wp_enqueue_style(
        'mytheme-main-style',
        get_template_directory_uri()."/style.css", 
        array(), 
        $version,
        "all"
    );
    // array is used to order the styles
}

add_action("wp_enqueue_scripts","mytheme_register_styles",1);

function mytheme_register_scripts(){
    wp_enqueue_script(
        'mytheme-main-javascript',
        get_template_directory_uri()."/assests/main.js",
        array(),
        '1.0',
        true
    );
}
add_action( "wp_enqueue_scripts", "mytheme_register_scripts");




?>