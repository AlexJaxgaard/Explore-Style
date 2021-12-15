<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>



<footer>
        <div class="footer">
            <div class="footer-container">
                <h3 class="footer-container__heading">How can we help? <svg style="display: none;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></h3>
               

<?php 
wp_nav_menu(array(
'menu' => '17', //Change this to the correct menu no.
'menu_class' => 'footer-container__body'


))
?>

            </div>
            <div class="footer-container">
                <h3 class="footer-container__heading">Useful Info <svg style="display: none;" class="arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></h3>
                <?php 
wp_nav_menu(array(
'menu' => '18', //Change this to the correct menu no.
'menu_class' => 'footer-container__body'


))
?>
            </div>
            <div class="footer-container">
                <h3 class="footer-container__heading">Company <svg style="display: none;" class="arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></h3>
                <?php 
wp_nav_menu(array(
'menu' => '19', //Change this to the correct menu no.
'menu_class' => 'footer-container__body'


))
?>
            </div>
            <div class="footer-container">
            <img src="/wp-content/themes/Explore-Style/images/es.png" alt="Explore Style Logo" width="250" height="250">

            </div>
        </div>

        <div class="copyright">
            

            <div class="copyright__body">&copy; 2021 Explore Style.</div>
        </div> 
    </footer>




<?php wp_footer(); ?>



</body>
</html>
