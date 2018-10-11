<?php
function customScripts(){
    //Registrar JS
    wp_enqueue_script('scripts',get_template_directory_uri() . '/js/app.min.js',array(),'1.0.0',true);
    //tinySlider
    wp_enqueue_script('tinyslider', get_template_directory_uri() . '/js/node_modules/tiny-slider/dist/min/tiny-slider.js',array(),'1.0.0',false);
    //live
    wp_enqueue_script('live', get_template_directory_uri() . '/js/live.js',array(),'1.0.0',false);
}
add_action('wp_enqueue_scripts','customScripts');
?>