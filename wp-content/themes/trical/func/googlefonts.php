<?php

function wpb_add_google_fonts() 
{
//opensans     
wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700', false ); 
}     
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
    
?>