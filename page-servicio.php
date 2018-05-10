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

get_header(); /* Template Name: Servicio */ ?>

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

			<?php get_template_part( 'template-parts/content', 'page-servicio' ); ?>

		</article>
		<?php endwhile; else: ?>
		<p><?php _e('La pagina solicitada no existe'); ?></p>
		<?php endif; ?>
	</section>

<?php
// get_sidebar();
get_footer();
