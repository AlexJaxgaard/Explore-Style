<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Style - Home</title>
</head>
<!-- Above is used for defining meta data about the specific page. -->


<?php get_header(); ?> <!-- Pulls header from header.php -->


<section class="hero">
        <a href="/product-category/casual/" class="hero__wrapper">
            <div class="wrapper">
                <div class="wrapper__heading" >
                    <span>THE NEW COLLECTION</span>
                    <h1>Classy Casual</h1>
                    <div class="button button-white">EXPLORE NOW</div>
                </div>
            </div>
        </a>
    </section>
    <!-- Main top ad/image for new collection -->

    <section class="top-brands">
        <h2 class="shop-section__heading">Top Brands</h2> <!-- line 28-41 is for the brands-part of the page. shows different selection of brands and will link up with woocommerce to show user the selected brand. -->
    <div class="myGallery">
    <a href="./product-tag/adidas/"><img alt="Adidas Logo" src="/wp-content/themes/Explore-Style/images/brands/adidas.jpeg" /></a>
    <a href="./product-tag/thenorthface/"><img alt="The North Face Logo" src="/wp-content/themes/Explore-Style/images/brands/northface.png" /></a>
    <a href="./product-tag/patagonia/"><img alt="Patagonia Logo" src="/wp-content/themes/Explore-Style/images/brands/patagonia.webp" /></a>
    <a href="./product-tag/weekday/"><img alt="Weekday Logo" src="/wp-content/themes/Explore-Style/images/brands/weekday.png" /></a>
    <a href="./product-tag/dickies/"><img alt="Dickies Logo" src="/wp-content/themes/Explore-Style/images/brands/dickies.png" /></a>
    <a href="./product-tag/levis/"><img alt="Levis Logo" src="/wp-content/themes/Explore-Style/images/brands/levis.png" /></a>
    <a href="./product-tag/vans/"><img alt="Vans Logo" src="/wp-content/themes/Explore-Style/images/brands/vans.jpeg" /></a>
    <a href="./product-tag/fila/"><img alt="Fila Logo" src="/wp-content/themes/Explore-Style/images/brands/fila.png" /></a>

  </div>
</section>



<section class="shop-section">
<h2 class="shop-section__heading">Best Sellers</h2>
<p class="shop-section__body">Explore the hottest trends. Always up to date and high quality.</p>
<div class="items">
    <?php echo do_shortcode(' [best_selling_products] ') ?>
</div>
</section>

<section class="shop-section">
<h2 class="shop-section__heading">New Arrivals</h2>
<p class="shop-section__body">New arrivals. Updated every day.<br/>It's time to explore.</p>
<div class="items">
<?php echo do_shortcode(' [best_selling_products] ') ?>
</div>
</section>

<!-- Pulls product info from WooCommerce, for more information about shortcode, see: https://woocommerce.com/document/woocommerce-shortcodes/ -->



<?php get_footer(); ?>

<!-- Pulls footer from footer.php -->
</html>