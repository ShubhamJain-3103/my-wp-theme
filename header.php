<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
        wp_head();
    ?>
</head>

<body>
    <?php
        echo get_bloginfo('name');
    ?>
    <?php
        // walker class has to be added for more cutomisation
        wp_nav_menu( 
            array(
                "menu"=>"primary",
                "conatiner"=>"",
                "theme_location"=>"primary",
                "items_wrap"=>'<ul id="" class="">%3$s</ul>'
            )
        );
    ?>
    <?php
        if(function_exists('the_custom_logo')){
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src( $custom_logo_id);   
            the_custom_logo();
        }
    ?>
    <div class="navbar">
        <nav>
            <ul>
                <li>Logo</li>
            </ul>
            <ul>
                <li>About</li>
                <li>Blogs</li>
                <li>Posts</li>
                <li>Contact</li>
            </ul>
        </nav>
    </div>