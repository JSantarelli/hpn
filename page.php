<?php
/**
 *
 * @package HPN
 */

get_header(); /* Template Name: Seccion */ ?>

	<section id="post-<?php the_ID(); ?>" class="hpn-container-default" <?php post_class(); ?>>
		<?php get_template_part( 'template-parts/content', 'page' ); ?>
	</section>

<?php
// get_sidebar();
get_footer();
