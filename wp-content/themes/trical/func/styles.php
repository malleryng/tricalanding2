<?php
function CustomStyles(){
    //Registrar los estilos
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css',array(),'8.0.0');
    wp_register_style('style', get_template_directory_uri() . '/style.css',array('normalize'),'1.0');
    wp_register_style('styleApp', get_template_directory_uri() . '/css/app.css',array('normalize'),'1.0');
    wp_enqueue_style('normalize');
    wp_enqueue_style('style');
    wp_enqueue_style('styleApp');
}
add_action('wp_enqueue_scripts','CustomStyles');
?>