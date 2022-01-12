<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Style</title>
</head>



<?php get_header(); ?>
<main>

    <?php
        if(have_posts()) {
            while(have_posts()) : the_post();
    ?>

    <div class="page-hero" style="background-image:url('<?php the_post_thumbnail_url('../images/cart.jpeg'); ?>')">
        <h1 class="page-hero__heading"><?php the_title(); ?></h1>
    </div>

    <?php the_content(); ?>    
    <?php endwhile; } ?>

</main>
<?php get_footer(); ?>

</html>