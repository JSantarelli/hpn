<!-- Componente card -->
<?php query_posts ('category_name=servicios&posts_per_page=20'); 
        if ( have_posts() ) : while ( have_posts()) : the_post(); ?>
        
			<div class="hpn-card-container">
				<img class="hpn-img w-xxxs h-xxxs circular cover" src=<?php the_post_thumbnail(); ?>>
				<div class="hpn-badge outline verde"><?php the_category(); ?></div>
				<h3 class="hpn-card-titulo"><?php the_title();?></h3>
				<hr class="cyan xs"></hr>
				<div class="hpn-card-subtitulo"><?php the_excerpt(); ?></div>
				<h5 class="hpn-card-link txt-gris">custom fields</h5>
				<button class="hpn-btn rounded azul w-xs h-xs txt-xxv uppercase">VER<a href="<?php the_permalink(); ?>"></a></button>
			</div>
        
    <?php endwhile; else: ?>
    <p><?php _e('La pagina solicitada no existe'); ?></p>
    <?php endif; ?>


