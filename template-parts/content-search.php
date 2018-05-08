<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HPN
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<ul class="hpn-container-listado vertical"><?php if ( 'post' === get_post_type() ) : ?>
			<li class="hpn-list-item">
				<img class="w-md h-md circular cover" scr="<?php the_post_thumbnail(); ?>
					<div class="hpn-bloque-texto">
						<div class="hpn-container-badges">
							<div class="hpn-badge verde"><?php hpn_posted_on(); ?></div>
							<div class="hpn-badge verde"><?php hpn_posted_by(); ?></div>  
							<div class="hpn-badge verde"><?php the_category(); ?></div>
						</div>
						<div class="hpn-titulo azul-oscuro"><?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?></div>
						<div class="txt-gris"><?php the_excerpt(); ?></div>
						<div class="txt-cyan"><?php hpn_entry_footer(); ?></div> <!--	.entry-footer -->
					</div>
					<button class="hpn-btn rounded txt-xxs w-xs cyan">Ver<?php get_permalink(); ?></button>
			</li>
			<?php endif; ?>
		</ul>
</article><!-- #post-<?php the_ID(); ?> -->
