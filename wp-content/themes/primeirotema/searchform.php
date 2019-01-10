<form role="search" method="GET" class="search-form" action="<?php echo esc_url( home_url('/') ); ?>"> <!-- vai pegar a URL RAIZ do projeto -->
                            <!-- vai preencher com o que digitamos -->
    <input type="search" name="s" value="<?php the_search_query(); ?>">

    <input type="submit" value="Buscar">
</form>