<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />
	<link rel="stylesheet" href="<?php echo get_theme_file_uri('resources/css/variants.css'); ?>">
	<link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<?php wp_head(); ?>
</head>

<main class="p-12">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<!-- Navegación -->
				<div class="sticky top-0 z-[999] backdrop-blur breadcrumbs flex items-center justify-between mb-10">
					<ul class="w-full px-6 py-3 rounded-lg bg-gray-100 text-sm font-encodeSans">
						<li class="text-gray-500 py-2 px-4 rounded-lg hover:underline-none hover:bg-gray-200"><a href="<?php echo esc_url(home_url('/')); ?>" class="no-underline">Inicio</a></li>
						<li class="text-gray-500 py-2 px-4 rounded-lg hover:underline-none hover:bg-gray-200"><a href="<?php echo esc_url(get_permalink(get_page_by_path('noticias'))); ?>" class="no-underline">Noticias</a></li>
						<li title="<?php the_title();?>"><?php wp_trim_words(the_title(), 10, '...'); ?></li>
					</ul>
				</div>
	
				<?php get_template_part( 'template-parts/content', 'single' ); ?>
			<?php endwhile; ?>

		<?php endif; ?>
	</main>

<?php get_footer(); ?>
