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

add_action('get_footer','mybox');
function mybox(){
    echo '<div style="background-color: aqua; width: 100px; height: 100px"></div>';
}
