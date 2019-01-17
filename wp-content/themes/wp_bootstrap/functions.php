<?php
// INCLUDE
require get_template_directory().'/include/setup.php';


// HOOKS
            // método             // nome da função
add_action("wp_enqueue_scripts", "rw_theme_styles");

add_action("after_setup_theme", "rw_after_setup");