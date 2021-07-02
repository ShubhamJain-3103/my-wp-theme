<?php

echo "Hello Functions";

function mytheme_register_styles(){
    wp_enqueue_style( 'mytheme-main-style', get_template_directory_uri(  )."/style.css", array(), "1.0","all" );
}

add_action("wp_enqueue_scripts","mytheme_register_styles",1);

?>