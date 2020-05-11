<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php bloginfo('name'); ?>
    </title>

    <?php wp_head(); ?>

    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:900&display=swap" rel="stylesheet">
</head>

<body>
    <!--Navigation-->
    <div id="navigation">
        <div class="logo">
            <img src="http://localhost/wordpress/wp-content/themes/latgales-zoodarzs/public/img/logo.png" alt="">
        </div>        
            <?php
            $defaults = array(
              'container' => '', 
              'menu_class' => 'menu', 
              'menu' => 'Main Menu'
            );
            wp_nav_menu($defaults); ?>   
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>      
    </div>  