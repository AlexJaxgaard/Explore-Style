<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Style</title>
</head>
        <!-- Defines metadata for the specific page -->


<?php get_header(); ?>
        <!-- Pulls header from header.php -->

<main>
<div class="page-hero" style="background-image:url('/wp-content/themes/Explore-Style/images/cart.jpg'); ?>')">
        <!-- Adds image for all shop-pages ../shop/.. -->
       
<h1 class="page-hero__heading_shop">Shop</h1> 
        <!-- Adds heading for the page -->
        
    </div>
    
 



<?php woocommerce_content(); ?>
        <!-- Pulls products from WooCommerce, can be filtered out for each page when adding blocks -->
</main>

<?php get_footer(); ?>
        <!-- Pulls footer from footer.php -->

</html>