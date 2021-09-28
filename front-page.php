<?php get_header(); ?>


<section class="hero">
        <a href="/product-category/casual/" class="hero__wrapper">
            <div class="wrapper">
                <div class="wrapper__heading">
                    <span>THE NEW COLLECTION</span>
                    <h1>Classy Casual</h1>
                    <div class="button button-white">EXPLORE NOW</div>
                </div>
            </div>
        </a>
    </section>




<section class="shop-section">
<h2 class="shop-section__heading">Best Sellers</h2>
<p class="shop-section__body">Explore the hottest trends. Always up to date<br/> and high quality.</p>
<div class="items">
    <?php echo do_shortcode(' [best_selling_products] ') ?>
</div>
</section>

<section class="shop-section">
<h2 class="shop-section__heading">New Arrivals</h2>
<p class="shop-section__body">New arrivals. Updated every<br/> day. It's time to explore.</p>
<div class="items">
<?php echo do_shortcode(' [best_selling_products] ') ?>
</div>





<?php get_footer(); ?>