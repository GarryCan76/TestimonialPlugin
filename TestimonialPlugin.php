<?php
/**
 * Plugin Name: TestimonialPlugin
 * Plugin URI: gluwebURL
 * Description: Write stuff about people
Version: 1.0.0
Author: Krijn and Garon
Author URI: gluwebURL
License: GPL-2.0+
 */

// Voeg html toe onderin de pagina.
add_action('get_footer','mybox');
function mybox(){
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap" rel="stylesheet">';
    echo '<div class="infobox">Hier komt wat informatie</div>';
    echo '<div style="font-family: Delicious Handrawn, cursive;" class="infobox">'.get_option('footer_text').'</div>';
}
// Voeg styling toe in de <head>.
add_action('get_header','mystyles');
function mystyles(){
    echo '<style>
  .infobox{
     background-color:black;
   width:100%;
   height:54px;
   color:white;
   display:flex;
   justify-content:center;
   align-items:center;
 }
 </style>';
}

add_action('admin_menu', 'mijnplugin_menu');
function mijnplugin_menu(){
    add_menu_page('Wijzig tekst','Eigen plugin','manage_options','eigenplugin_settings_page','mijnplugin_page');
}
function mijnplugin_page(){
    echo '<h2>'.__('Testimonial Text','menu-test').'</h2>';
    include_once('TestimonialPlugin_settings.php');
}