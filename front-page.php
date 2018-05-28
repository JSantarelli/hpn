  <?php get_header(); /* Template Name: Home */ ?>
    <!-- Primer Scroll -->
    <section id="primer-scroll" class="hpn-home-primer-scroll">
        <!-- Banner -->
        <div class="hpn-banner">
        <?php $posts = query_posts('category_name=principal&posts_per_page=1');
            add_filter( 'the_title', 'max_title_length');
            add_filter( 'the_excerpt', 'max_excerpt_length');
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
            <?php $secundaria = new WP_Query('category_name=secundaria&posts_per_page=2');
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
                <input home-mobile type="text"  method="get" action="http://localhost/hpn/?s=&post_type=wpdmpro" >
            </div>
            <button type="submit" class="hpn-search-icon rounded-left icon txt-blanco"><i class="mdi mdi-magnify mdi-48px"></i></button type="submit">
        </div>

        <!-- Bottombar -->
        <?php get_template_part( 'template-parts/home/home', 'bottombar' ); ?>

    </section>
    <!-- Segundo Scroll -->
    <section id="segundo-scroll" class="hpn-home-segundo-scroll">
   
        <!-- Repositorio digital -->
        <div id="sidebar" class="hpn-home-sidebar">
            <?php get_template_part( 'template-parts/home/home', 'repositorio' ); ?>
        </div>
        
        <!-- FAQ -->
        <div id="faq" class="hpn-home-faq">
           <?php get_template_part( 'template-parts/home/home', 'faqs' ); ?>
        </div>

        <!-- Formulario Contact Form 7 (plugin) -->
        <div id="contacto" class="hpn-home-contacto">
            <?php get_template_part( 'template-parts/home/home', 'contacto' ); ?>
        </div>    
    </section>
    </body>
    <?php get_footer(); ?> 