<?php
    get_header();
?>

<section>
    <div class="container">

    <!-- Verifica se tem POST -->
    <?php if(have_posts()): ?>
        <!-- Inicio Loop -->
        <?php while(have_posts()): ?>
            <?php
                the_post();
            ?>
                <article>
                    <h2> <?= the_title(); ?> </h2>
                    
                    <!-- Tumbnail -->
                    <?php if(has_post_thumbnail()): ?>
                        <!-- Tamanho da foto ex: thumbnail, medium,large -->
                            <?php the_post_thumbnail('full'); ?>
                    <?php endif; ?> 


                    <p>
                    <!-- Exibir o conteudo -->  
                    <?php echo get_the_date(); ?> 
                        ||| Autor: 
                        <a href="
                            <?php echo get_author_posts_url(
                                    get_the_author('ID') ) ?>">
                            <?php the_author(); ?>
                        </a> 
                        ||| Categoria: 
                        <?php the_category(','); ?>
                    </p>

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
                </article>

        <?php endwhile ?> <!-- End Loop -->
    <?php endif ?> <!-- End Verificação de POST -->

    <!-- Inicio Paginação -->
        <div class="paginacao">
            <div class="pagina_anterior"> <?php previous_post_link(); ?> </div>
            <div class="pagina_proxima"> <?php next_post_link(); ?> </div>
        </div>

    </div>

<?php get_sidebar(); ?>

    <div style="clear:both">   </div>
</section>

<?php
    get_footer();
?>


