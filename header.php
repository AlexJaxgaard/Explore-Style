<!DOCTYPE html>
<!-- Hämtar språk, t.ex svenska eller engelska (engelska i detta fall) från WordPress -->
<html <?php language_attributes(); ?>>
<head>
    <!-- Hämtar characterset, t.ex UTC-8 från WordPress -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Hämtar head-kod från WordPress -->
   <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>> 

    <header class="main-header">
        <div class="main-header__logo">
            <a href="#">Explore Style.</a>
        </div>

        <nav class="main-header__nav">
            <div class="menu-link">
                <span></span>
                <span></span>
            </div>

            <?php 
            wp_nav_menu( array(
'theme_location'=> 'top-menu',
'container' => false

            ));
            
            ?>
           
        </nav>

        <div class="main-header__tools">
            
            <a href="#" class="tools-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </a>
            <!-- refererar till wordpress "basket"-->
            <a href="#" class="tools-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
            </a>
        </div>

    </header>