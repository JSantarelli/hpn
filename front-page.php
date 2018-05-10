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
            <?php $second_query = new WP_Query('cat=220'); // exclude category
                $i = 1;
                while($second_query->have_posts()) : $second_query->the_post(); ?> 
            <div class="hpn-banner-02">
                <img class="hpn-banner-img-secundaria cover" src="<?php the_post_thumbnail(); ?>
                <div class="hpn-banner-bloque-texto">
                    <div class="hpn-badge bg-verde"><?php the_category(', ') ?></div>
                    <h3 class="hpn-titulo blanco shadow"><?php the_title(); ?></h3>
                </div> 
            </div>
            <?php $i++; endwhile;
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
        <div class="hpn-bottombar">
            <div class="card-01 azul-oscuro">
                <div class="hpn-card-bloque-texto">
                    <div class="hpn-card-titulo txt-blanco">HPN titulo</div>
                    <p class="hpn-card-texto txt-blanco">Este es un texto con la clase hpn-card-text</p>
                </div>
            </div>
            <div class="card-02 azul">
                <div class="hpn-card-img magenta">
                    <div class="hpn-icon magenta mdi mdi-github-circle mdi-48px"></div>
                </div>
                <div class="hpn-card-bloque-texto">
                    <div class="hpn-card-titulo txt-negro">HPN titulo</div>
                    <p class="hpn-card-texto txt-negro">Este es un texto con la clase hpn-card-text</p>
                </div>
            </div>
            <div class="card-03 verde">
                <div class="hpn-card-img cyan">
                    <div class="hpn-icon cyan mdi mdi-github-circle mdi-48px"></div>
                </div>
                <div class="hpn-card-bloque-texto">
                    <div class="hpn-card-titulo txt-negro">HPN titulo</div>
                    <p class="hpn-card-texto txt-negro">Este es un texto con la clase hpn-card-text</p>
                </div>
            </div>
            <div class="card-04 rojo">
                <div class="hpn-card-img verde">
                    <div class="hpn-icon verde mdi mdi-github-circle mdi-48px"></div>
                </div>
                <div class="hpn-card-bloque-texto">
                    <div class="hpn-card-titulo txt-negro">HPN titulo</div>
                    <p class="hpn-card-texto txt-negro">Este es un texto con la clase hpn-card-text</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Segundo Scroll -->
    <section id="segundo-scroll" class="hpn-home-segundo-scroll">
    <!-- Guias -->
    <div id="sidebar" class="hpn-home-sidebar">
            <div class="hpn-bloque-titulo margin-bottom">
                <h6 class="prefix magenta">Vias de contacto</h6>
                <h4 class="txt-blanco">Titulo lateral a tres lineas o mas</h4>
                <hr class="border blanco xs separate"></hr>
                <h5 class="txt-xxs txt-blanco">Bajada lateral a varias lineas. m cati soluta molestias iure facere dolorum adipisci eum? Sae</h5>
                <div class="container-input-btn margin-top sm">    
                    <input type="search" class="rounded-left w-xl h-sm"></input>
                    <button class="rounded-right magenta h-sm mdi mdi-github-circle mdi-18px"></button>
                </div>
            </div>
            <div class="container-inputs separate">
                <img alt="guias" class="md celeste fondo rounded" scr="">
            </div>
        </div>
        <!-- FAQ -->
        <div id="faq" class="hpn-home-faq">
            <div class="hpn-bloque-titulo margin-bottom">
                <h6 class="prefix magenta">Vias de contacto</h6>
                <h4 class="txt-negro">Preguntas frecuentes</h4>
                <hr class="border cyan xs separate"></hr>
                <h5 class="txt-xxs txt-negro">Bajada lateral a varias lineas. m cati soluta molestias iure facere dolorum adipisci eum? Sae</h5>
            </div>
            <div class="container-inputs separate">
                <!-- Accordion -->
                <div hpn-accordion class="tab">
                    <input id="tab-one" type="checkbox" name="tabs">
                    <label for="tab-one">Pregunta 1</label>
                    <div class="tab-content">
                    <p>Lorem ipsum cati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                    </div>
                </div>
                <!-- Accordion -->
                <div hpn-accordion class="tab">
                        <input id="tab-two" type="checkbox" name="tabs">
                        <label for="tab-two">Pregunta 2</label>
                        <div class="tab-content">
                        <p>Lorem ipsum cati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                        </div>
                    </div>
                <!-- Accordion -->
                <div hpn-accordion class="tab">
                    <input id="tab-three" type="checkbox" name="tabs">
                    <label for="tab-three">Pregunta 3</label>
                    <div class="tab-content">
                    <p>Lorem ipsum cati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                    </div>
                </div>
                <!-- Accordion -->
                <div hpn-accordion class="tab">
                        <input id="tab-two" type="checkbox" name="tabs">
                        <label for="tab-two">Pregunta 2</label>
                        <div class="tab-content">
                        <p>Lorem ipsum cati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                        </div>
                    </div>
                <!-- Accordion -->
                <div hpn-accordion class="tab">
                    <input id="tab-three" type="checkbox" name="tabs">
                    <label for="tab-three">Pregunta 3</label>
                    <div class="tab-content">
                    <p>Lorem ipsum cati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                    </div>
                </div>
            </div>
        </div>
    
        <div id="contacto" class="hpn-home-contacto">
            <div class="hpn-bloque-titulo margin-bottom">
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