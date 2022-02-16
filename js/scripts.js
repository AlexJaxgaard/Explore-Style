jQuery( document ).ready(function() {

    jQuery( '.menu-link' ).click(function(){
        jQuery( '.mobile-menu' ).toggle("slow", function(){ });
    });

    jQuery("#search_button").click(function() {
        jQuery("#search_popup").slideToggle("fast");
    });




}); 

/*This document defines important scripts, for menus and search queries. DO NOT change this document if you do not know what you're doing.*/