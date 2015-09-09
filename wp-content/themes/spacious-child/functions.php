<?php
add_action( 'wp_enqueue_scripts', 'wpsites_load_parent_styles');
function wpsites_load_parent_styles() {
wp_enqueue_style( 'parent-styles', get_template_directory_uri().'/style.css' );
}
//  kc add just to test add info to wp_footer

add_action( 'wp_footer', 'wp_footer_example' );
 
function wp_footer_example() {
    $stat = sprintf( '%d queries in %.3f seconds, using %.2fMB memory',
        get_num_queries(),
        timer_stop( 0, 3 ),
        memory_get_peak_usage() / 1024 / 1024
    );
    if( current_user_can( 'manage_options' ) ) {
        echo "<!-- {$stat} -->";
    }
}
 
// Example Source: http://wordpress.stackexchange.com/a/1866

?>
