  <?php get_header(); /* Template Name: Home */ ?>
    <!-- Primer Scroll -->
    <section id="primer-scroll" class="hpn-home-primer-scroll">
        <!-- Banner -->
        <div class="hpn-banner">
        <?php $posts = query_posts('cat=219');
            if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="hpn-banner-01">
                <img class="hpn-banner-img-principal cover" src="<?php the_post_thumbnail(); ?>
                <div class="hpn-banner-bloque-texto">
                    <div class="hpn-badge bg-magenta"><?php the_category(', ') ?></div>
                    <h1 class="hpn-titulo blanco shadow"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <h5 class="hpn-subtitulo blanco lighter shadow"><?php the_excerpt(); ?></h5>
                </div>
            </div>
            <?php endwhile; endif;
            wp_reset_query(); ?>

            <!-- Noticias secundarias -->
            <?php $secundaria = new WP_Query('cat=220&posts_per_page=2');
               while ($secundaria->have_posts()) : $secundaria->the_post(); ?> 
            <div class="hpn-banner-02">
                <img class="hpn-banner-img-secundaria cover" src="<?php the_post_thumbnail(); ?>
                <div class="hpn-banner-bloque-texto">
                    <div class="hpn-badge bg-verde"><?php the_category(', ') ?></div>
                    <h3 class="hpn-titulo blanco shadow"><?php the_title(); ?></h3>
                </div> 
            </div>
            <?php endwhile;
             wp_reset_query(); 
            ?>

        </div>

        <!-- Middlebar -->
        <div class="hpn-middlebar">
            <div class="hpn-search-input">
                <h4 class="hpn-titulo">Algo</h4>
                <h6 class="hpn-subtitulo">Subtitulo</h6>
            </div>
            <div class="hpn-search-icon rounded-left icon"><i class="mdi mdi-github-circle mdi-48px"></i></div>
        </div>

        <!-- Bottombar -->
        <?php get_template_part( 'template-parts/home/home', 'bottombar' ); ?>

    </section>
    <section id="segundo-scroll" class="hpn-home-segundo-scroll">
    <!-- Segundo Scroll -->
    <!-- Repositorio digital -->
    <div id="sidebar" class="hpn-home-sidebar">
    <?php $repositorio = 6472; 
        $post_id_6472 = get_post($repositorio);
        $titulo = $post_id_6472->post_title;
        $content = $post_id_6472->post_content;
        $image = get_the_post_thumbnail($post_id_6472);
        ?>
            <div class="hpn-bloque-titulo margin-bottom">
                <h6 class="prefix celeste">Repositorio digital</h6>
                <h4 class="txt-blanco"><a href="<?php the_permalink($post_id_6472); ?>"><?php echo($titulo); ?></a></h4>
                <hr class="border blanco xs separate"></hr>
                <h5 class="txt-xxs txt-blanco"><?php echo($content); ?></h5>
                <div class="container-input-btn margin-top-25 sm">    
                    <input type="search" class="rounded-left w-xl h-sm"></input>
                    <button class="rounded-right magenta h-sm mdi mdi-file-find mdi-18px"></button>
                </div>
            </div>
            <div class="container-inputs separate">
                <img alt="guias" class="md h-sm w-xs center" scr="<?php echo($image);?>
            </div>
        </div>
        
        <!-- FAQ -->
        <div id="faq" class="hpn-home-faq">
           <?php get_template_part( 'template-parts/home/home', 'faqs' ); ?>
        </div>

        <!-- Formulario Contact Form 7 (plugin) -->
        <div id="contacto" class="hpn-home-contacto">
            <div class="hpn-bloque-titulo margin-bottom-25">
                <h6 class="prefix magenta">Vias de contacto</h6>
                <h4 class="txt-blanco">Consulta rápida</h4>
                <hr class="border cyan xs separate"></hr>
                <h5 class="txt-xxs txt-blanco">Bajada lateral a varias lineas. m cati soluta molestias iure facere dolorum adipisci eum? Sae</h5>
            </div>
            <!-- Formulario -->
            <div class="container-inputs separate">
                <input type="text" class="rounded w-xl h-sm">
                <input type="email" class="rounded w-xl h-sm">
                <input type="text" class="rounded-25 w-xl h-xl">
                <button type="submit" class="txt-bold rounded w-xl h-sm cyan fondo">ENVIAR</button>
            </div>
        </div>    
    </section>
    </body>
    <?php get_footer(); ?> 