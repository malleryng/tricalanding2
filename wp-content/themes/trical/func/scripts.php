<?php
function customScripts(){
    //Registrar JS
    wp_enqueue_script('scripts',get_template_directory_uri() . '/js/app.min.js',array(),'1.0.0',true);
}
add_action('wp_enqueue_scripts','customScripts');
?>