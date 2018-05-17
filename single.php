<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package HPN
 */

get_header(); ?>


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

get_header(); /* Template Name: Noticia */ ?>

	<section id="post-<?php the_ID(); ?>" class="hpn-container-noticia" <?php post_class(); ?>>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="hpn-container-titulo-img">
			<img class="hpn-banner-img-principal cover" src="<?php the_post_thumbnail(); ?>
			<div class="mask"></div>
			<div class="hpn-container-titulo">
				<div class="hpn-badge azul sm"><?php the_category(', ') ?></div>
				<h3 class="hpn-titulo shadow txt bold txt-blanco"><?php the_title();?></h3>">
				<hr class="blanco xs"></hr>
				<div class="hpn-bajada"><?php the_excerpt(); ?></div>
			</div>
		</article>
		<article class="hpn-container-data">
			<img class="hpn-img circular h-xxxs w-xxxs right" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" alt="">
			<div class="txt-bold">Fecha</div>
			<?php $post_date = get_the_date( 'l F j, Y' ); ?>
			<div class="txt-xxs"><?php echo $post_date; ?></div><br>
			<div class="txt-bold ">Autor</div>
			<div class="txt-xxs"><?php the_author(''); ?></div><br>
			<div class="txt-bold">Etiquetas</div>
			<div class="txt-xxs"><?php the_tags(); ?></div><br>
		</article>
		<article class="hpn-container-nota">
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
								'<button class="rounded magenta xl w-xl h-sm txt-xxs uppercase">',
								'</button>'
							);
						?>
				<?php endif; ?>

				<div class="hpn-text text-gris"><?php the_content(); ?></div>
				<h5 class="uppercase margin-top-50">Otras noticias</h5>
				<hr class="xl magenta">


				
				<!-- Navegacion posteos -->
				<?php					
					$prevThumbnail = get_the_post_thumbnail( $prevPost->ID, array( 85, 85) );
							
					$nextPost = get_next_post();
					$nextThumbnail = get_the_post_thumbnail( $nextPost->ID, array( 85, 85) );

					previous_post_link( ''.$prevThumbnail.' %link', '%title' );
					next_post_link( ''.$nextThumbnail.'%link', '%title' );
				?>

				<?php endwhile; else: ?>
				<p><?php _e('La pagina solicitada no existe'); ?></p>

				<?php endif; ?>
		</article>
	</section>

<?php
get_footer();