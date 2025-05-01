<?php
/**
 * Template Name: Combustible
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
    <main class="bg-white p-12">
        <!-- Navegación -->
        <div class="sticky top-0 z-[999] backdrop-blur breadcrumbs flex items-center justify-between mb-10">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-x-6">
				<img src="<?php echo get_theme_file_uri('/resources/img/logo.png'); ?>" alt="Logo de Teleradio Norte" class="w-14 h-auto">
				<span class="hidden md:block font-encodeSans text-darkGreen text-md">Teleradionorte</span>
            </a>
            <ul class="w-fit px-6 py-3 rounded-lg bg-gray-100 text-sm font-encodeSans">
                <li class="text-gray-500 py-2 px-4 rounded-lg hover:underline-none hover:bg-gray-200"><a href="<?php echo esc_url(home_url('/')); ?>" class="no-underline">Inicio</a></li>
                <li>Combustible</li>
            </ul>
        </div>
        <section class="w-full">
            <h1 class="text-softGreen text-xl font-encodeSans mb-5 font-bold md:mb-10 md:text-3xl">Precios del Combustible</h1>
            <!-- Combustibles -->
            <section id="combustibles" class="flex flex-wrap gap-x-3 gap-y-4">
            </section>
        </section>
    </main>
    <script src="<?php echo get_theme_file_uri('/resources/js/combustible.js'); ?>"></script>

<?php get_footer(); ?>