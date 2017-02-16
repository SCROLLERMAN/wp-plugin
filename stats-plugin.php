<?php
/*
Plugin Name: WP Stats Plguin
Plugin URI: http://example.com
Description: Plugin that displays some stats
Version: 1.0
Author: Travis Roberts
Author URL: http://example.com
*/

function html_code() {
    
    $result = count_users();
    echo 'There are ', $result['total_users'], ' total users';
    foreach($result['avail_roles'] as $role => $count)
        echo ', ', $count, ' are ', $role, 's';
    echo '.';
        
    echo "<h3>Hello World</h3>";
}

function sp_shortcode() {
    ob_start(); // WP function, way to display plugin fast as it can
    
    html_code();
    
    return ob_get_clean(); 
}

add_shortcode( 'wp_stats', 'sp_shortcode' );

?>