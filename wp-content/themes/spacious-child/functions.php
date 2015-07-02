<?php
add_action( 'wp_enqueue_scripts', 'wpsites_load_parent_styles');
function wpsites_load_parent_styles() {
wp_enqueue_style( 'parent-styles', get_template_directory_uri().'/style.css' );
}
