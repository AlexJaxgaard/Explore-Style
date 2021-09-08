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

}