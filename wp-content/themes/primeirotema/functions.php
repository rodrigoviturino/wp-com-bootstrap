<?php
// Include
// Adicionando o arquivo SETUP.PHP
require get_template_directory().'/include/setup.php';


// Hooks
// é carregado, somente quando o tema for todo carregado

add_action('wp_enqueue_scripts', 'rp_theme_style');
// SETUP                    
add_action('after_setup_theme', 'rp_after_setup');