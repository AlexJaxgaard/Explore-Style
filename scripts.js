jQuery( document ).ready(function() {

    jQuery( '.menu-link' ).click(function(){
        jQuery( '.mobile-menu' ).toggle("slow", function(){ });
    });

    jQuery("#search_button").click(function() {
        jQuery("#search_popup").slideToggle("fast");
    });




}); 

