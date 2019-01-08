<?php
// Include
require get_template_directory().'/include/setup.php';


// Hooks
add_action('wp_enqueue_scripts', 'rp_theme_style');

add_action('after_setup_theme', 'rp_after_setup');