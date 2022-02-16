<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Style</title>
</head>

        <!-- Defines meta data for the page -->


<?php get_header(); ?>
        <!-- Pulls header from header.php -->

<main>

    <?php
        if(have_posts()) {
            while(have_posts()) : the_post();
    ?>
        <!-- for each items in cart, add to cart basically -->

    <div class="page-hero" style="background-image:url('<?php the_post_thumbnail_url('../images/cart.jpg'); ?>')">
            <!-- Adds image for the page -->

        <h1 class="page-hero__heading"><?php the_title(); ?></h1>
                <!-- defines heading for the specific page -->

    </div>

    <?php the_content(); ?> 
            <!-- Pulls user-defined content from wordpress -->
   
    <?php endwhile; } ?>
        <!-- Ends loop so that it doesn't continue forever -->

</main>
<?php get_footer(); ?>
        <!-- Pulls footer from footer.php -->

</html>