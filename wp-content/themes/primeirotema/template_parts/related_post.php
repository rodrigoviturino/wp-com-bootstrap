<div class="post_related_item">

    <!-- FOTO THUMBNAIL -->
    <?php if(has_post_thumbnail()): ?>
        <!-- Puxa o link de tudo -->
        <a href="<?php the_permalink(); ?>" class="post_thumbnail">
        <!-- Tamanho da foto ex: thumbnail, medium,large // Array é para adicionar 1 unica class para cada imagem --> 
            <?php the_post_thumbnail('full', array('class' => 'post_miniatura')); ?>
        </a>
    <?php endif; ?>

    <h4> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h4>

    
    <!-- mostrar a quantidade de comentarios do post --> 
    <p>
        <?php comments_number('0 comentários', 'um comentário', '% comentários'); ?> 
        |
        <a href="<?php the_permalink(); ?>"> LEIA MAIS </a>
    </p>

</div>