<?php get_header(); ?>

	<main class="px-12 py-5">
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'single' ); ?>
			<?php endwhile; ?>

		<?php endif; ?>
	</main>

<?php get_footer(); ?>
