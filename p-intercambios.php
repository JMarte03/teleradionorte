<?php
/**
 * Template Name: Intercambios
 */
	$latest_intercambios_posts = new WP_Query([
		'post_type'      => 'post', // Only posts
		'category_name'  => 'intercambios', // Only 'Intercambios' category
	]);

	$posts_array = [];
	$default_image = get_template_directory_uri() . '/resources/img/trn-placeholder.png';

	if ($latest_intercambios_posts->have_posts()) {
		while ($latest_intercambios_posts->have_posts()) {
			$latest_intercambios_posts->the_post();
			
			// Storing each post's data in an array
			$posts_array[] = [
				'titulo'    => wp_trim_words(get_the_title(), 10, '...'),
				'desc'   => wp_trim_words(get_the_content(), 10, '...'),
				'categoria' => !empty(get_the_category()) ? get_the_category()[0]->name : 'Sin categoría',
				'link'      => get_permalink(),
				'imagen'    => get_the_post_thumbnail_url(get_the_ID(), 'medium') ?: $default_image,
				'fecha'     => get_the_date(),
				'autor'     => get_the_author(),
			];
		}
	}

	// Restore original post data
	wp_reset_postdata();

?>
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
<body class="antialiased bg-white">
	<main class="bg-white pb-12 pt-0">
		<!-- Navegación -->
		<div class="sticky top-0 z-[999] backdrop-blur breadcrumbs flex items-center justify-between  pt-10 px-12 md:mb-5">
			<a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-x-6">
				<img src="<?php echo get_theme_file_uri('/resources/img/logo.png'); ?>" alt="Logo de Teleradio Norte" class="w-14 h-auto">
				<span class="hidden md:block font-encodeSans text-darkGreen text-md">Teleradionorte</span>
			</a>
			<ul class="w-fit px-6 py-3 rounded-lg bg-gray-100 text-sm font-encodeSans">
				<li class="text-gray-500 py-2 px-4 rounded-lg hover:underline-none hover:bg-gray-200"><a href="<?php echo esc_url(home_url('/')); ?>" class="no-underline">Inicio</a></li>
				<li class="text-gray-500 py-2 px-4 rounded-lg hover:underline-none hover:bg-gray-200"><a href="<?php echo esc_url(get_permalink(get_page_by_path('noticias'))); ?>" class="no-underline">Noticias</a></li>
				<li>Intercambios</li>
			</ul>
		</div>
        <section class="bg-white p-12">
			<div class="w-full mx-auto max-w-[95%]">
				<div class="w-full">
					<div class="flex items-center justify-between mb-10">
						<h2 data-aos="fade-right" class="font-gothicExpanded text-4xl text-softGreen">Intercambios</h2>
					</div>
				</div>
				<?php include 'partials/posts-galleryView.php' ;?>
			</div>
		</section>

<?php get_footer(); ?>
