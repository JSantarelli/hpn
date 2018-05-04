<?php get_header(); ?>

    <section class="hpn-container-noticia">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <section class="hpn-container-titulo-img">
                <img class="hpn-banner-img-principal cover" src="<?php the_post_thumbnail(); ?>">
                <div class="mask"></div>
                <div class="hpn-container-titulo">
                    <div class="hpn-badge azul sm"><?php get_category( $category, $output, $filter ) ?></div>
                    <div class="hpn-titulo shadow txt bold txt-blanco"><?php the_title();?></h3>
                    <hr class="blanco xs"></hr>
                    <div class="hpn-bajada"><?php get_the_excerpt($limit) ?></div>
                </div>
        </section>
        <section class="hpn-container-nota">
                <div class="hpn-text text-gris"><?php the_content(); ?></div>
                <?php endwhile; else: ?>
                <p><?php _e('Sorry, this page does not exist.'); ?></p>
                <?php endif; ?>
        </section>
    </section>

<?php get_footer(); ?>