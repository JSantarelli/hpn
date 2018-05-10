<?php get_header(); /* Template name: card */ ?>

	<section id="post-<?php the_ID(); ?>" class="hpn-content-card" <?php post_class(); ?>>


		
			<?php get_template_part( 'components/content', 'card' ); ?>



	</section>

<?php get_footer(); ?>