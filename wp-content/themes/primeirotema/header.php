<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Criando Primeiro Tema Wordpress</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    
<?php 
    wp_head();
?>
</head>
<body>
    <!-- pode adicionar class nesta função -->
<?php body_class(); ?>

<header>
<!-- Adicionando no painel a logo -->
    <?php 
        if(has_custom_logo()) {
            the_custom_logo();
        }
        ?>


<h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>

<div style="clear:both;"></div>
    <?php
        if( has_nav_menu('primary')){
            wp_nav_menu(array( // Este nome é do id do menu nav_menu
                'theme_location' => 'primary', // Pega o registro do menu
                // Adiciona a tag PAI nos itens do menu
                'container' => 'nav', 
                // Adicionando class a esta Nav
                'container_class' => 'main_menu',
                // TRUE gera um menu padrão
                'fallback_cb' => false 
            ));
        }
    ?>
</header>

