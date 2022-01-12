<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Style - 404</title>
</head>



<?php get_header(); ?>

<main>



    <div class="page-hero" style="background-image:url('images/404.png')">
        <h1 class="page-hero__heading">404 - Error<?php the_title(); ?></h1>
        
    </div>
    <h3 style="text-align:center;">Looks like this page doesn't exist. Sorry about that.</h3>
    <?php the_content(); ?>    

</main>

<?php get_footer(); ?>

</html>