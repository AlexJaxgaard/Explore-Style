


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<!-- Above script pulls information from WordPress -->
<body <?php body_class(); ?>>
    <header class="main-header">
        <div class="main-header__logo">
            <a href="/">Explore Style.</a>
        </div>

        <nav class="main-header__nav">
            <div class="menu-link">
                <span></span>
                <span></span>
            </div>
            
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'top-menu',
                    'container' => false
                ));
            ?>
<!-- Above script defines menu, connects with Wordpress -->

        </nav>


        <div id="search_popup" style="display: none;">
        <form action="/" method="get">
        <input type="text" name="s" placeholder="Search..." id="search" value="<?php the_search_query(); ?>" />
        <input type="submit" alt="search" />
            </form>
            </div>
 
<!-- Script above used for search queries, not used. For use, remove style -->


        <div class="main-header__tools">
            <a class="tools-icon"> 
 
            </a>

            <a href="<?php echo wc_get_cart_url(); ?>" class="tools-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
            </a>
        </div>
<!-- Above script creates icon for cart  -->
    </header>
    



    <div class="mobile-menu">

        <?php
            wp_nav_menu( array(
                'theme_location' => 'top-menu',
                'container' => false
            ));
        ?>
<!-- Above script defines the top menu for mobile devices for responsive reasons, does the same job as default menu, but smaller. -->

    </div>