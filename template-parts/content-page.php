<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HPN
 */

?>

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