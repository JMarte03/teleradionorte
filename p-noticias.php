<?php
/**
 * Template Name: Noticias
 */
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
				<li>Noticias</li>
			</ul>
		</div>

		<!-- RECIENTES -->
		<section class="w-full p-12 bg-white">
			<div class="w-full">
				<div class="flex items-center justify-between mb-10">
					<h2 data-aos="fade-right" class="font-gothicExpanded text-4xl text-softGreen">Recientes</h2>
				</div>
			</div>
			<?php include 'partials/recent-posts.php' ;?>
		</section>

		<!-- POLITICA -->
		<section class="w-full p-12 bg-lightestGreen">
			<div class="w-full">
				<div class="flex items-center justify-between mb-10">
					<h2 data-aos="fade-right" class="font-gothicExpanded text-4xl text-softGreen">Política</h2>
					<a 
						data-aos="fade-top"
						href="<?php echo esc_url(get_permalink(get_page_by_path('politica')));?>"
						class="py-3 px-6 bg-softGreen text-white rounded-full hover:bg-darkGreen"
					>		
						<span class="hidden text-white font-encodeSans md:block">Ver Todas</span>
						<span class="md:hidden"><i class='bx bx-link-external'></i></span>
					</a>
				</div>
			</div>
			<?php include 'partials/politics-posts.php' ;?>
		</section>

		<!-- EDUCACION -->
		<section class="p-12 w-full bg-white">
			<div class="w-full">
				<div class="flex items-center justify-between mb-10">
					<h2 data-aos="fade-right" class="font-gothicExpanded text-4xl text-softGreen">Educación</h2>
					<a 
						data-aos="fade-top"
						href="<?php echo esc_url(get_permalink(get_page_by_path('educacion')));?>"
						class="py-3 px-6 bg-softGreen text-white rounded-full hover:bg-darkGreen"
					>		
						<span class="hidden text-white font-encodeSans md:block">Ver Todas</span>
						<span class="md:hidden"><i class='bx bx-link-external'></i></span>
					</a>
				</div>
			</div>
			<?php include 'partials/education-posts.php' ;?>
		</section>

		<!-- ECONOMIA -->
		<section class="w-full p-12 bg-lightestGreen">
			<div class="w-full">
				<div class="flex items-center justify-between mb-10">
					<h2 data-aos="fade-right" class="font-gothicExpanded text-4xl text-softGreen">Economía</h2>
					<a 
						data-aos="fade-top"
						href="<?php echo esc_url(get_permalink(get_page_by_path('economia')));?>"
						class="py-3 px-6 bg-softGreen text-white rounded-full hover:bg-darkGreen"
					>		
						<span class="hidden text-white font-encodeSans md:block">Ver Todas</span>
						<span class="md:hidden"><i class='bx bx-link-external'></i></span>
					</a>
				</div>
			</div>
			<?php include 'partials/economy-posts.php' ;?>
		</section>

		<!-- INTERCAMBIOS -->
		<section class="p-12 w-full bg-white">
			<div class="w-full">
				<div class="flex items-center justify-between mb-10">
					<h2 data-aos="fade-right" class="font-gothicExpanded text-4xl text-softGreen">Intercambios</h2>
					<a 
						data-aos="fade-top"
						href="<?php echo esc_url(get_permalink(get_page_by_path('intercambios')));?>"
						class="py-3 px-6 bg-softGreen text-white rounded-full hover:bg-darkGreen"
					>		
						<span class="hidden text-white font-encodeSans md:block">Ver Todas</span>
						<span class="md:hidden"><i class='bx bx-link-external'></i></span>
					</a>
				</div>
			</div>
			<?php include 'partials/intercambios-posts.php' ;?>
		</section>

		<!-- DEPORTES -->
		<section class="w-full p-12 bg-lightestGreen">
			<div class="w-full">
				<div class="flex items-center justify-between mb-10">
					<h2 data-aos="fade-right" class="font-gothicExpanded text-4xl text-softGreen">Deportes</h2>
					<a 
						data-aos="fade-top"
						href="<?php echo esc_url(get_permalink(get_page_by_path('deportes')));?>"
						class="py-3 px-6 bg-softGreen text-white rounded-full hover:bg-darkGreen"
					>		
						<span class="hidden text-white font-encodeSans md:block">Ver Todas</span>
						<span class="md:hidden"><i class='bx bx-link-external'></i></span>
					</a>
				</div>
			</div>
			<?php include 'partials/sports-posts.php' ;?>
		</section>

		<!-- MAS TEMAS -->
		<section class="p-12 w-full bg-white">
			<div class="w-full">
				<div class="flex items-center justify-between mb-10">
					<h2 data-aos="fade-right" class="font-gothicExpanded text-4xl text-softGreen">Más Temas</h2>
					<a 
						data-aos="fade-top"
						href="<?php echo esc_url(get_permalink(get_page_by_path('mas-temas')));?>"
						class="py-3 px-6 bg-softGreen text-white rounded-full hover:bg-darkGreen"
					>		
						<span class="hidden text-white font-encodeSans md:block">Ver Todas</span>
						<span class="md:hidden"><i class='bx bx-link-external'></i></span>
					</a>
				</div>
			</div>
			<?php include 'partials/more-posts.php' ;?>
		</section>

	</main>

	<?php get_footer(); ?>