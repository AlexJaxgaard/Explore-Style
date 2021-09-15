<?php get_header(); ?>
<main>

    <?php
        if(have_posts()) {
            while(have_posts()) : the_post();
    ?>

    <div class="page-hero" style="background-image:url('<?php the_post_thumbnail_url('/Users/scandinaviana/Documents/Explore-Style/images/cart.png'); ?>')">
        <h1 class="page-hero__heading"><?php the_title(); ?></h1>
    </div>

    <?php the_content(); ?>    
    <?php endwhile; } ?>

</main>
<?php get_footer(); ?>