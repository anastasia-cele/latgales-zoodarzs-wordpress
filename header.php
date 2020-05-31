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

    <link rel="shortcut icon" href="../wp-content/themes/latgales-zoodarzs/public/img/favicon.png" type="image/png">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:900&display=swap" rel="stylesheet">
</head>

<body>
    <!--Navigation-->
    <div id="navigation">
        <div class="logo">
            <div class="nav-button"><a href="/"><img src="../wp-content/themes/latgales-zoodarzs/public/img/logo.png" alt=""></a></div>
        </div>        
            <?php
            $defaults = array(
              'container' => '', 
              'menu_class' => 'menu', 
              'menu' => 'Main Menu'
            );
            wp_nav_menu($defaults); ?>
            <div id="mySidenav" class="sidenav">                
                <div class="nav-button"><a onclick="closeNav()" href="/"><img src="../wp-content/themes/latgales-zoodarzs/public/img/logo-green.png" alt=""></a></div>
                    <?php
                        $defaults = array(
                        'container' => '', 
                        'menu_class' => 'menu', 
                        'menu' => 'Main Menu'
                        );
                    wp_nav_menu($defaults); ?>    
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>            
            </div>
            <span style="cursor:pointer" onclick="openNav()">
                <div class="hamburger"></div>
                <div class="hamburger"></div>
                <div class="hamburger"></div>
            </span>
        </ul>
    </div>  