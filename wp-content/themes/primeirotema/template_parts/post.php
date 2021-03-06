<article>
    <?php if(has_post_thumbnail()): ?>
        <!-- Puxa o link de tudo -->
        <a href="<?php the_permalink(); ?>" class="post_thumbnail">
        <!-- Tamanho da foto ex: thumbnail, medium,large // Array é para adicionar 1 unica class para cada imagem --> 
            <?php the_post_thumbnail('full', array('class' => 'post_miniatura')); ?>
        </a>
    <?php endif; ?>

    <h4> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h4>

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