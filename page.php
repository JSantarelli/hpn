<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HPN
 */

get_header(); /* Template Name: Seccion */ ?>

	<section id="post-<?php the_ID(); ?>" class="hpn-container-seccion" <?php post_class(); ?>>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="hpn-container-titulo-img">
				<img class="hpn-banner-img-principal cover" src=<?php the_post_thumbnail(); ?>
				<div class="mask azul-oscuro"></div>
				<div class="hpn-container-titulo">
					<div class="hpn-badge azul sm"><?php the_tags(); ?></div>
					<h3 class="hpn-titulo shadow txt bold txt-blanco"><?php the_title();?></h3>
					<hr class="blanco xs"></hr>
					<div class="hpn-bajada"><?php the_excerpt(); ?></div>
				</div>
		</article>
		<article id="nota" class="hpn-container-nota">
				<!-- Boton edicion entrada al estar loguedo-->
				<?php if ( get_edit_post_link() ) : ?>
						<?php
							edit_post_link(
								sprintf(
									wp_kses(
										/* translators: %s: Name of current post. Only visible to screen readers */
										__( 'Edit <span class="screen-reader-text">%s</span>', 'hpn' ),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									get_the_title()
								),
								'<button class="rounded magenta xl w-xl h-sm txt-xxs txt-bold uppercase">',
								'</button>'
							);
						?>
						
				<?php  endif; ?>

				<div class="hpn-text text-gris"><?php the_content(); ?></div>
				<?php endwhile; else: ?>
				<p><?php _e('La pagina solicitada no existe'); ?></p>
				<?php endif; ?>
		</article>
	</section>

<?php
// get_sidebar();
get_footer();
