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
	<header class="sticky top-0 z-[999] shadow-md flex justify-between items-center mx-3 py-6 px-12 bg-softGreen rounded-b-2xl">
		<!-- Navegación móvil -->
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
					<a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-x-6 mb-10 pl-3">
						<img src="<?php echo get_theme_file_uri('/resources/img/logo.png'); ?>" alt="Logo de Teleradio Norte" class="w-10 h-auto">
						<span class="font-encodeSans text-black text-sm">Teleradionorte</span>
					</a>
					<!-- <div class="w-full border-b border-b-lightGreen my-8"></div> -->
					<li><a href="<?php echo esc_url(home_url('/')); ?>" class="font-encodeSans font-light text-black text-md">Inicio</a></li>
					<li><a href="#sobre-nosotros" class="font-encodeSans font-light text-black text-md -pl-3">Sobre Nosotros</a></li>
					<li><a href="#programacion" class="font-encodeSans font-light text-black text-md -pl-3">Programación</a></li>
					<li><a href="#noticias" class="font-encodeSans font-light text-black text-md -pl-3">Noticias</a></li>
					<li><a href="#contacto" class="font-encodeSans font-light text-black text-md -pl-3">Contacto</a></li>
					<li class="font-encodeSans font-light text-black text-md">
						<details>
							<summary>Más</summary>
							<ul>
								<li><a class="p-2 rounded-lg active:bg-lightGreen weather-btn" href="<?php echo esc_url(get_permalink(get_page_by_path('clima'))); ?>">Clima</a></li>
								<li><a class="p-2 rounded-lg active:bg-lightGreen" href="<?php echo esc_url(get_permalink(get_page_by_path('combustible'))); ?>">Combustible</a></li>
								<li><a class="p-2 rounded-lg active:bg-lightGreen" href="<?php echo esc_url(get_permalink(get_page_by_path('loteria'))); ?>">Lotería</a></li>
								<li><a class="p-2 rounded-lg active:bg-lightGreen" href="<?php echo esc_url(get_permalink(get_page_by_path('dolar'))); ?>">Dólar</a></li>
							</ul>
						</details>
						<!-- <button class="hover:px-8 text-md rounded-full transition-duration-150 hover:bg-brandGreen hover:text-white group relative w-full text-left pl-3 font-encodeSans font-light text-black transition-all transition-duration-150"> 
							Más
							<div class="w-full absolute top-full right-0 p-2 bg-lightestGreen shadow-xm text-black font-hanken font-light rounded-b-lg scale-y-0 group-hover:scale-y-100 origin-top duration-200 z-50">
								
								
								
								
							</div>
						</button> -->
					</li>
				</ul>
			</div>
		</div>
		<!-- Logo -->
		<div class="hidden lg:block">
			<a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-x-4">
				<img src="<?php echo get_theme_file_uri('/resources/img/logo.png'); ?>" alt="Logo de Teleradio Norte" class="w-14 h-auto">
				<p class="font-encodeSans text-sm text-white">Teleradionorte</p>
			</a>
		</div>
		<!-- Menu de navegación -->
		<nav class="hidden lg:block">
			<ul class="flex items-center gap-x-6 font-encodeSans text-sm text-white">
				<li class="hover:underline"><a href="<?php echo esc_url(home_url('/')); ?>" class="">Inicio</a></li>
				<li class="hover:underline"><a href="#sobre-nosotros" class="">Sobre Nosotros</a></li>
				<li class="hover:underline"><a href="#programacion" class="">Programación</a></li>
				<li class="hover:underline"><a href="#noticias" class="">Noticias</a></li>
				<li class="hover:underline"><a href="#contacto" class="">Contacto</a></li>
				<li>
					<button class="bg-brandGreen rounded-xl group relative w-[150px] p-2 transition-all transition-duration-150 z-1"> 
						Más
						<div class="w-full absolute top-full right-0 p-2 bg-lightestGreen/80 shadow-xm text-black font-hanken font-light rounded-b-lg scale-y-0 group-hover:scale-y-100 origin-top duration-200 z-50">
							<a class="block p-2 rounded-lg transition-all transition-duration-300 hover:bg-lightGreen hover:px-8 active:bg-brandGreen active:text-white weather-btn" href="<?php echo esc_url(get_permalink(get_page_by_path('clima'))); ?>">Clima</a>
							<a class="block p-2 rounded-lg transition-all transition-duration-300 hover:bg-lightGreen hover:px-8 active:bg-brandGreen active:text-white" href="<?php echo esc_url(get_permalink(get_page_by_path('combustible'))); ?>">Combustible</a>
							<a class="block p-2 rounded-lg transition-all transition-duration-300 hover:bg-lightGreen hover:px-8 active:bg-brandGreen active:text-white" href="<?php echo esc_url(get_permalink(get_page_by_path('loteria'))); ?>">Lotería</a>
							<a class="block p-2 rounded-lg transition-all transition-duration-300 hover:bg-lightGreen hover:px-8 active:bg-brandGreen active:text-white" href="<?php echo esc_url(get_permalink(get_page_by_path('dolar'))); ?>">Dólar</a>
						</div>
					</button>
				</li>
			</ul>
		</nav>
	</header>

