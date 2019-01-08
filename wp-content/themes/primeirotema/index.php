<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Criando Primeiro Tema Wordpress</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
<?php 
    wp_head();
?>
</head>
<body>

<h1>Meu Primeiro Tema</h1>
    
    <?php
        if( has_nav_menu('primary')){
            wp_nav_menu(array(
                'theme_location' => 'primary', // Pega o registro do menu
                'container' => 'nav', // Adiciona a tag PAI nos itens do menu
                'container_class' => 'main_menu',
                // 'container_class' => '', // Adicionando class a esta Nav
                'fallback_cb' => false // TRUE gera um menu padrão
            ));
        }
    ?>


<?php
    wp_footer();
?>
</body>
</html>
