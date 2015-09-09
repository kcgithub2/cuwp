<?php
add_action( 'wp_enqueue_scripts', 'wpsites_load_parent_styles');
function wpsites_load_parent_styles() {
wp_enqueue_style( 'parent-styles', get_template_directory_uri().'/style.css' );
}
//  kc add just to test add info to wp_footer

add_action( 'wp_footer', 'wp_footer_example' );
 
function wp_footer_example() {
    echo '<h4 style="color:red">This show at very end of footer</h4>' . "\n";
}
 
// Example Source: http://wordpress.stackexchange.com/a/1866

?>
