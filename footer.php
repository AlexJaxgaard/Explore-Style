<footer>
        <div class="footer">
            <div class="footer-container">
                <h3 class="footer-container__heading">How can we help? <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></h3>
               

<?php 
wp_nav_menu(array(
'menu' => '20', 
'menu_class' => 'footer-container__body'


))
?>

            </div>
            <div class="footer-container">
                <h3 class="footer-container__heading">Useful Info <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></h3>
                <?php 
wp_nav_menu(array(
'menu' => '24', 
'menu_class' => 'footer-container__body'


))
?>
            </div>
            <div class="footer-container">
                <h3 class="footer-container__heading">Company <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></h3>
                <?php 
wp_nav_menu(array(
'menu' => '25', 
'menu_class' => 'footer-container__body'


))
?>
            </div>
        </div>

        <div class="copyright">
            

            <div class="copyright__body">&copy; 2021 Explore Style.</div>
        </div> 
    </footer>




<?php wp_footer(); ?>



</body>
</html>