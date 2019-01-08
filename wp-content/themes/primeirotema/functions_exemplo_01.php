<?php
// Incluir outros arquivos/functions
require get_template_directory().'/include/rp_footer_functions.php';

// Hooks
//Parametros |método  |nomeFunção
add_action('shutdown','rp_fim');


// Boa prática: Se tiver nome de função IGUAL é usar primeira letra do Autor e do Tema
    // function rp_fim() {
    //     echo "Vai encerrar tudo!";
    // }

