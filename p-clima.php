<?php
/**
 * Template Name: Clima
 */
?>

<?php
    date_default_timezone_set('America/Santo_Domingo');
    $date = new DateTime();
    $months = [
        "January" => "Enero", "February" => "Febrero", "March" => "Marzo",
        "April" => "Abril", "May" => "Mayo", "June" => "Junio",
        "July" => "Julio", "August" => "Agosto", "September" => "Septiembre",
        "October" => "Octubre", "November" => "Noviembre", "December" => "Diciembre"
    ];

    $day = $date->format("d");
    $month = $months[$date->format("F")];
    $year = $date->format("Y");
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
        <div class="sticky top-0 z-[999] backdrop-blur breadcrumbs flex items-center justify-between lg:mb-20">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-x-6">
				<img src="<?php echo get_theme_file_uri('/resources/img/logo.png'); ?>" alt="Logo de Teleradio Norte" class="w-14 h-auto">
				<span class="hidden md:block font-encodeSans text-darkGreen text-md">Teleradionorte</span>
            </a>
            <ul class="w-fit px-6 py-3 rounded-lg bg-gray-100 text-sm font-encodeSans">
                <li class="text-gray-500 py-2 px-4 rounded-lg hover:underline-none hover:bg-gray-200"><a href="<?php echo esc_url(home_url('/')); ?>" class="no-underline">Inicio</a></li>
                <li>Clima</li>
            </ul>
        </div>
        <!-- Clima de hoy -->
        <section class="mt-6 w-full space-y-5">
            <h2 class="font-gothicExpanded text-softGreen text-xl md:text-2xl mb-10">Clima de Hoy</h2>
            <!-- Contenido -->
            <section class="flex flex-col gap-y-3 gap-x-3 lg:flex-row">
                <!-- Display de ahora -->
                <div class="flex justify-center w-full p-10 bg-lightestGreen rounded-xl md:justify-start lg:w-fit lg:px-14">
                    <div class="flex flex-col gap-x-18 gap-y-8 md:flex-row md:items-center md:m-auto">
                        <!-- left -->
                        <div class="space-y-8">
                                <div class="flex flex-col justify-center items-center gap-y-5 gap-x-5 md:flex-row md:justify-start md:items-center">
                                    <img id="now-icon" src="" alt="Icono del clima" class="w-12 lg:w-20 h-auto">
                                    <span class="font-encodeSans text-grayTitle text-2xl "><?php echo "$day de $month";?></span>
                                </div>
                                <span id="now-description" class="text-center block font-encodeSans font-semibold text-xl text-grayTitle md:text-left"></span>
                                <span class="block font-encodeSans text-sm text-grayBg">Santo Domingo, República Dominicana</span>
                        </div>
                        <!-- right -->
                        <div class="flex items-center flex-col gap-x-8 gap-y-10 md:items-start">
                                <div class="space-y-2">
                                    <h3 class="font-encodeSans font-semibold text-grayTitle">Temperatura</h3>
                                    <div class="flex justify-center items-center gap-x-3 md:justify-start">
                                        <img src="<?php echo get_theme_file_uri('/resources/img/temperature.png'); ?>" alt="Logo de Teleradio Norte" class="w-4 h-auto">
                                        <span id="now-temperature" class="font-encodeSans font-light text-grayBg"></span>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h3 class="font-encodeSans font-semibold text-grayTitle">Precipitaciones</h3>
                                    <div class="flex justify-center items-center gap-x-3 md:justify-start">
                                        <img src="<?php echo get_theme_file_uri('/resources/img/precip.png'); ?>" alt="Logo de Teleradio Norte" class="w-4 h-auto">
                                        <span id="now-precipitation" class="font-encodeSans font-light text-grayBg"></span>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h3 class="font-encodeSans font-semibold text-grayTitle">Humedad</h3>
                                    <div class="flex justify-center items-center gap-x-3 md:justify-start">
                                        <img src="<?php echo get_theme_file_uri('/resources/img/humidity.png'); ?>" alt="Logo de Teleradio Norte" class="w-4 h-auto">
                                        <span id="now-humidity" class="font-encodeSans font-light text-grayBg"></span>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- Display a lo largo del día (móvil sm-md)-->
                <div class="flex md:justify-center lg:hidden">
                    <div id="mobile-forecast" class="overflow-x-scroll overflow-y-visible max-w-6xl flex space-x-4 py-4 md:">
                        
                    </div>
                </div>
                <!-- Display a lo largo del día (lg)-->
                <div id="desktop-forecast" class="hidden flex-grow max-h-82 flex-col overflow-y-scroll px-8 pb-2 shadow-sm rounded-xl lg:flex">
                    
                </div>
            </section>
        </section>
        <!-- Divider -->
        <div class="w-full border-b border-b-lightGreen mt-8 mb-16 lg:mt-16"></div>
        <!-- Clima de los próximos 6 días -->
        <section class="space-y-8">
            <h2 class="font-gothicExpanded text-softGreen text-xl md:text-2xl">Pronóstico para los próximos 6 días</h2>
            <div class="tomorrow"
                data-location-id="031197"
                data-language="EN"
                data-unit-system="METRIC"
                data-skin="light"
                data-widget-type="upcoming"
                style="padding-bottom:22px;position:relative;"
            >
            <a
                href="https://www.tomorrow.io/weather-api/"
                rel="nofollow noopener noreferrer"
                target="_blank"
                style="position: absolute; bottom: 0; transform: translateX(-50%); left: 50%;"
            >
                <img
                alt="Powered by the Tomorrow.io Weather API"
                src="https://weather-website-client.tomorrow.io/img/powered-by.svg"
                width="250"
                height="18"
                />
            </a>
            </div>
        </section>        
    </main>
    <script src="<?php echo get_theme_file_uri('/resources/js/clima.js'); ?>"></script>

<?php get_footer(); ?>
