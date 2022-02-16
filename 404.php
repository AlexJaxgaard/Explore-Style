<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Style - 404</title>
</head>
<!-- Above defines meta data for the specific page -->



<?php get_header(); ?> <!-- Pulls header from header.php -->

<main>



    <div class="page-hero" style="background-image:url('/wp-content/themes/Explore-Style/images/404.png')">
        <h1 class="page-hero__heading">404 - Error<?php the_title(); ?></h1>
        <!-- Adds heading for the page -->

    </div>
    <h3 style="text-align:center;">Looks like this page doesn't exist. Sorry about that.</h3>
            <!-- Adds text for the pag -->
    <?php the_content(); ?>    
        <!-- Pulls any content defined in Wordpress -->

</main>

<?php get_footer(); ?>
        <!-- Pulls footer from footer.php -->

</html>