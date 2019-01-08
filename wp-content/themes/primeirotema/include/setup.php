<?php
// Aqui vai os arquivos que vai ser os primeiros a ser carregado pelo TEMA

// Adicionando Css e Script
function rp_theme_style() {
                // Id do arquivo // Local do arquivo
    wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/theme.css');
    
    wp_enqueue_script('theme_js', get_template_directory_uri().'/assets/js/script.js', array('jquery'),'1.0', true);
}

// Vai adicionar os recursos do painel do Wordpress
function rp_after_setup() {
    // add_theme_support('menus'); // Faz o suporte de versoes antigas WP
                // ID da função // o que vai aparecer no painel
    register_nav_menu('primary', __('Primary Menu','primeirotema'));
    register_nav_menu('footer', 'Menu Footer');
}