<?php 


/* Lägger till CSS & CS */

function woocommerce_custom_theme() {
wp_register_style( 'custom_css', get_template_directory_uri() . '/css/style.css', false, '1.0.0' );
wp_register_style( 'playfair_cdn', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;1,700&display=swap', false, '1.0.0' );




wp_enqueue_style( 'custom_css' );
wp_enqueue_style( 'playfair_cdn' );

}

add_action( 'wp_enqueue_scripts', 'woocommerce_custom_theme' );


/*Skapar custom-meny */

function woocommerce_custom_menu() {
register_nav_menu('top-menu',__('WooCommerce Custom Menu', 'woocommercecustommenu'));
}

add_action( 'init', 'woocommerce_custom_menu' );

/*Skapar funktionalitet för WooCommerce */

if (class_exists('WooCommerce')) {

/*WooCommerce Support*/
function woocommerceshop_add_woocommercesupport_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'woocommerceshop_add_woocommercesupport_support' );

//Ta Bort WooCommerce-stilar


//Lägger till ett filter som avaktiverar stilar from WooCommerce.
//add_filter( 'woocommerce_enqueue_styles', '__return_false' );

//Ta bort shoptitel

//Lägger till ett filter som tar bort den titel på shoppen som WooCommerce installerar automatiskt från början.
//add_filter('woocommerce_show_page_title', '__return_false');


//Lägger till support för olika visningsmetoder för bilder som kommer användas på sidan.

//Gör att bild kan zoomas in på ett snyggt sätt.
add_theme_support('wc-product-gallery-zoom');

//Skapar support för att öppna bild i en separat ruta.
add_theme_support('wc-product-gallery-lightbox');

//Skapar support för bildspel.
add_theme_support('wc-product-gallery-slider');


}