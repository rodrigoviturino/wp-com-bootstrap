<?php
/*
    Template Name: Página largura Total
    
*/
?>

<?php
    get_header();
?>

<section>
    <div class="container fullwidth">

        <!-- Inicio Loop -->
        <?php while(have_posts()): ?>
            <?php
                the_post();
            ?>
                <article>
                    <h2> <?php the_title(); ?> </h2>

                    <!-- Exibir o conteudo do post de acordo com a conf. de leitura que pode deixar o texto completo ou resumo -->
                    <p>
                    <!-- conteudo inteiro -->
                        <?php the_content(); ?>
                    </p>

                    <!-- mostrar a quantidade de comentarios do post --> 
                    <p>
                        <?php comments_number('0 comentários', 'um comentário', '% comentários'); ?> 
                        |
                    </p>

                    <hr>

                    <?php
                        if( comments_open()){
                            comments_template();
                        }
                    ?>

                </article>

        <?php endwhile ?> <!-- End Loop -->

    </div>

    <div style="clear:both">   </div>
</section>

<?php
    get_footer();
?>


