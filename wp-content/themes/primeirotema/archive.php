<?php
    get_header();
?>

<section>
    <div class="container">

<h1> <?php the_archive_title() ?> </h1>
    <!-- Verifica se tem POST -->
    <?php if(have_posts()): ?>
        <!-- Inicio Loop -->
        <?php while(have_posts()): ?>
            <?php
                the_post();
            ?>
                <article>
                    <?php if(has_post_thumbnail()): ?>
                        <!-- Puxa o link de tudo -->
                        <a href="<?= the_permalink(); ?>" class="post_thumbnail">
                        <!-- Tamanho da foto ex: thumbnail, medium,large // Array é para adicionar 1 unica class para cada imagem --> 
                            <?php the_post_thumbnail('full', array('class' => 'post_miniatura')); ?>
                        </a>
                    <?php endif; ?>

                    <h2> <a href="<?= the_permalink(); ?>"> <?= the_title(); ?> </a> </h2>

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
                        <?php the_excerpt(); ?>
                    </p>

                    <!-- mostrar a quantidade de comentarios do post --> 
                    <p>
                        <?php comments_number('0 comentários', 'um comentário', '% comentários'); ?> 
                        |
                        <a href="<?= the_permalink(); ?>"> LEIA MAIS </a>
                    </p>
                </article>

        <?php endwhile ?> <!-- End Loop -->
    <?php endif ?> <!-- End Verificação de POST -->

    <!-- Inicio Paginação -->
        <div class="paginacao">
            <div class="pagina_anterior"> <?php previous_posts_link('Página Anterior'); ?> </div>
            <div class="pagina_proxima"> <?php next_posts_link('Próxima Página'); ?> </div>
        </div>

    </div>

<?php get_sidebar(); ?>

    <div style="clear:both">   </div>
</section>

<?php
    get_footer();
?>


