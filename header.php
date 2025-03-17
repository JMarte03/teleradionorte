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
	<?php wp_head(); ?>
</head>
<body class="antialiased bg-white">
	<header class="bg-white text-black py-8 px-12">
		<nav>
			<!-- nav first level -->
			<section class="flex justify-between items-center">
				<!-- Logo and Mobile menu -->
				<div class="flex justify-between items-center">
					<div class="drawer lg:hidden">
						<!-- Navigation Toggle -->
						<input id="my-drawer" type="checkbox" class="drawer-toggle" />
						<div class="drawer-content">
							<label for="my-drawer" class="p-3 inline-flex bg-gray-100 opacity-50 justify-center items-center gap-x-2 align-middle rounded-lg transition-all duration-150 hover:opacity-75 focus:outline-none cursor-pointer lg:hidden"><i class="bx bx-menu text-black opacity-100 hover:opacity-50"></i></label>
						</div>
						<div class="drawer-side z-50">
							<label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
							<ul class="menu bg-white text-black min-h-full w-72 p-8 space-y-2">
								<!-- Sidebar content here -->
								<a href="<?php echo esc_url(home_url('/')); ?>">
									<img src="<?php echo get_theme_file_uri('/resources/img/logo.png'); ?>" alt="Logo de Teleradio Norte" class="ml-2 w-28 h-auto">
								</a>
								<div class="w-full border-b border-b-lightGreen my-8"></div>
								<li><a href="<?php echo esc_url(home_url('/')); ?>" class="hover:px-8 font-hanken font-light text-black text-lg rounded-full transition-all transition-duration-150 hover:bg-brandGreen hover:text-white">Inicio</a></li>
								<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('sobre-nosotros'))); ?>" class="hover:px-8 font-hanken font-light text-black text-lg rounded-full transition-all transition-duration-150 hover:bg-brandGreen hover:text-white">Sobre Nosotros</a></li>
								<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('servicios'))); ?>" class="hover:px-8 font-hanken font-light text-black text-lg rounded-full transition-all transition-duration-150 hover:bg-brandGreen hover:text-white">Servicios</a></li>
								<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('contacto'))); ?>" class="hover:px-8 font-hanken font-light text-black text-lg rounded-full transition-all transition-duration-150 hover:bg-brandGreen hover:text-white">Contacto</a></li>
								<div class="w-full border-b border-b-lightGreen my-8"></div>
								<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('noticias'))); ?>" class="hover:px-8 font-hanken font-light text-black text-lg rounded-full transition-all transition-duration-150 hover:bg-brandGreen hover:text-white">Noticias</a></li>
								<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('programa'))); ?>" class="hover:px-8 font-hanken font-light text-black text-lg rounded-full transition-all transition-duration-150 hover:bg-brandGreen hover:text-white">Programa</a></li>
								<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('clima'))); ?>" class="hover:px-8 font-hanken font-light text-black text-lg rounded-full transition-all transition-duration-150 hover:bg-brandGreen hover:text-white">Clima</a></li>
							</ul>
						</div>
					</div>
					<!-- Teleradio Norte Logo -->
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<img src="<?php echo get_theme_file_uri('/resources/img/logo.png'); ?>" alt="Logo de Teleradio Norte" class="w-32 lg:w-20 h-auto">
					</a>
				</div>
				<!-- first menu -->
				<ul class="hidden gap-x-12 font-hanken font-light text-black lg:flex">
					<li class="transition-all transition-duration-150 hover:underline hover:text-grayTitle">
						<a href="<?php echo esc_url(get_permalink(get_page_by_path('sobre-nosotros'))); ?>">Sobre Nosotros</a>
					</li>
					<li class="transition-all transition-duration-150 hover:underline hover:text-grayTitle">
						<a href="<?php echo esc_url(get_permalink(get_page_by_path('servicios'))); ?>">Servicios</a>
					</li>
					<li class="transition-all transition-duration-150 hover:underline hover:text-grayTitle">
						<a href="<?php echo esc_url(get_permalink(get_page_by_path('contacto'))); ?>">Contacto</a>
					</li>
				</ul>
				<!-- search -->
				<form class="hidden font-hanken md:flex">
					<label class="input join-item border border-lightGreen rounded-none rounded-l-full bg-white">
						<input type="search" class="text-gray-500" required placeholder="Buscar"/>
					</label>
					<button type="submit" class="btn bg-lightGreen rounded-none rounded-r-full border-0 shadow-none text-black join-item">
						<svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none" stroke="currentColor">
								<circle cx="11" cy="11" r="8"></circle>
								<path d="m21 21-4.3-4.3"></path>
							</g>
						</svg>
					</button>
				</form>
			</section>
			<!-- divider -->
			<div class="hidden w-full border-b border-b-lightGreen my-8 lg:block"></div>
			<!-- nav second level -->
			<section class="hidden w-full lg:block">
				<ul class="flex justify-between items-center">
					<a class="bg-lightGreen rounded-full text-center w-1/5 py-2 font-hanken font-light text-black transition-all transition-duration-150 hover:bg-brandGreen hover:text-white" href="<?php echo esc_url(home_url('/')); ?>">
						<li>
							Inicio
						</li>
					</a>
					<a class="bg-lightGreen rounded-full text-center w-1/5 py-2 font-hanken font-light text-black transition-all transition-duration-150 hover:bg-brandGreen hover:text-white" href="<?php echo esc_url(get_permalink(get_page_by_path('noticias'))); ?>">
						<li>
							Noticias
						</li>
					</a>
					<a class="bg-lightGreen rounded-full text-center w-1/5 py-2 font-hanken font-light text-black transition-all transition-duration-150 hover:bg-brandGreen hover:text-white" href="<?php echo esc_url(get_permalink(get_page_by_path('programa'))); ?>">
						<li>
							Programa
						</li>
					</a>
					<a class="bg-lightGreen rounded-full text-center w-1/5 py-2 font-hanken font-light text-black transition-all transition-duration-150 hover:bg-brandGreen hover:text-white" href="<?php echo esc_url(get_permalink(get_page_by_path('clima'))); ?>">
						<li>
							Clima
						</li>
					</a>

				</ul>
			</section>
			<!-- divider -->
			<div class="hidden w-full border-b border-b-lightGreen mt-8 lg:block"></div>
		</nav>
	</header>
	
	<script src="<?php echo get_theme_file_uri('/resources/js/preline.js'); ?>"></script>

