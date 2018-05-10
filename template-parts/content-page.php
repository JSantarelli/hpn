<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HPN
 */

?>



	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="hpn-container-titulo-img">
				<img class="hpn-banner-img-principal cover" src=<?php the_post_thumbnail(); ?>
				<div class="mask azul-oscuro"></div>
				<div class="hpn-container-titulo">
					<h3 class="hpn-titulo shadow txt bold txt-blanco"><?php the_title();?></h3>
					<hr class="blanco xs"></hr>
				</div>
		</div>
		<div id="nota" class="hpn-container-nota">
			<p class="hpn-text text-gris"><?php the_content(); ?></p>
		</div>
		<?php endwhile; else: ?>
		<p><?php _e('La pagina solicitada no existe'); ?></p>
	<?php endif; ?>
