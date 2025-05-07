<?php
/**
 * Template Name: Loteria
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
    <main class="bg-white min-h-screen p-12 space-y-7">
        <!-- Navegación -->
        <div class="sticky top-0 z-[999] backdrop-blur breadcrumbs flex items-center justify-between mb-10">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-x-6">
				<img src="<?php echo get_theme_file_uri('/resources/img/logo.png'); ?>" alt="Logo de Teleradio Norte" class="w-14 h-auto">
				<span class="hidden md:block font-encodeSans text-darkGreen text-md">Teleradionorte</span>
            </a>
            <ul class="w-fit px-6 py-3 rounded-lg bg-gray-100 text-sm font-encodeSans">
                <li class="text-gray-500 py-2 px-4 rounded-lg hover:underline-none hover:bg-gray-200"><a href="<?php echo esc_url(home_url('/')); ?>" class="no-underline">Inicio</a></li>
                <li>Lotería</li>
            </ul>
        </div>
        <h1 class="mt-8 text-xl font-encodeSans font-bold text-brandGreen md:text-3xl md:mt-4">Resultados de todas las loterías dominicanas</h1>
        <p class="text-black font-encodeSans text-sm leading-6">
            Entérese de los números ganadores y resultados del Gana Más, 
            Lotería Nacional, Leidsa, Loto Leidsa, Loteka, Loteria 
            Real de la tarde y Nueva York al momento de salir. 
        </p>
        <div class="flex flex-col gap-y-14 gap-x-10 lg:flex-row-reverse">
            <!-- Date Picker y Horarios -->
            <section class="space-y-7 lg:basis-[20%]">
                <!-- Calendario -->
                <div>
                    <calendar-date id="calendar" class="cally w-full bg-base-100 border border-base-300 shadow-md rounded-box">
                        <svg aria-label="Previous" class="fill-current size-4" slot="previous" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M15.75 19.5 8.25 12l7.5-7.5"></path></svg>
                        <svg aria-label="Next" class="fill-current size-4" slot="next" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path></svg>
                        <calendar-month></calendar-month>
                    </calendar-date>
                </div>
                <!-- Horarios -->
                <div class="space-y-7 bg-stone-50/70 rounded-xl p-8">
                    <!-- loterías dominicanas -->
                    <div>
                        <h2 class="my-6 pl-4 text-lg font-semibold font-encodeSans text-grayTitle">Horarios de loterías dominicanas</h2>
                        <div class="overflow-x-auto overflow-y-scroll h-82 md:h-auto">
                            <table class="table table-zebra font-encodeSans text-xs">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th><i class='mr-2 bx bx-dice-5'></i> Lotería</th>
                                        <th><i class='mr-2 bx bx-calendar' ></i> Días</th>
                                        <th><i class='mr-2 bx bx-time-five' ></i> Hora</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>La Primera</td>
                                        <td>Diario</td>
                                        <td>12:00pm y 8:00pm</td>
                                    </tr>
                                    <tr>
                                        <td>La Suerte</td>
                                        <td>Diario</td>
                                        <td>12:30pm y 6:00pm</td>
                                    </tr>
                                    <tr>
                                        <td>Lotería Real</td>
                                        <td>Diario</td>
                                        <td>12:55pm</td>
                                    </tr>
                                    <tr>
                                        <td>LoteDom</td>
                                        <td>Diario</td>
                                        <td>1:55pm</td>
                                    </tr>
                                    <tr>
                                        <td>Lotería Nacional</td>
                                        <td>Diario</td>
                                        <td>2:30pm, 9:00pm y 6:00pm</td>
                                    </tr>
                                    <tr>
                                        <td>Loteka</td>
                                        <td>Diario</td>
                                        <td>7:55pm</td>
                                    </tr>
                                    <tr>
                                        <td>Leidsa</td>
                                        <td>Diario</td>
                                        <td>8:55pm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- sorteos dominicanos -->
                    <div>
                        <h2 class="my-7 pl-4 font-encodeSans text-lg font-semibold font-hanken text-grayTitle">Horarios de sorteos millonarios</h2>
                        <div class="overflow-x-auto overflow-y-scroll h-82 md:h-auto">
                            <table class="table table-zebra font-encodeSans text-xs">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th><i class='mr-2 bx bx-dice-5'></i> Sorteo</th>
                                        <th><i class='mr-2 bx bx-calendar' ></i> Días</th>
                                        <th><i class='mr-2 bx bx-time-five' ></i> Hora</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Loto Más</td>
                                        <td>Miércoles y Sábados</td>
                                        <td>8:55pm</td>
                                    </tr>
                                    <tr>
                                        <td>Mega Lotto</td>
                                        <td>Lunes y Jueves</td>
                                        <td>7:55pm</td>
                                    </tr>
                                    <tr>
                                        <td>Loto Real</td>
                                        <td>Martes y Viernes</td>
                                        <td>12:55pm</td>
                                    </tr>
                                    <tr>
                                        <td>Lote 5</td>
                                        <td>Diario</td>
                                        <td>8:00pm</td>
                                    </tr>
                                    <tr>
                                        <td>PowerBall</td>
                                        <td>Lunes, Miércoles y Sábados</td>
                                        <td>10:59pm</td>
                                    </tr>
                                    <tr>
                                        <td>Megamillions</td>
                                        <td>Martes y Viernes</td>
                                        <td>11:00pm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- loterías extranjeras -->
                    <div>
                        <h2 class="my-7 pl-4 font-encodeSans text-lg font-semibold font-hanken text-grayTitle">Horarios de loterías extranjeras</h2>
                        <div class="overflow-x-auto overflow-y-scroll h-82 md:h-auto">
                            <table class="table table-zebra font-encodeSans text-xs">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th><i class='mr-2 bx bx-dice-5'></i> Lotería</th>
                                        <th><i class='mr-2 bx bx-calendar' ></i> Días</th>
                                        <th><i class='mr-2 bx bx-time-five' ></i> Hora</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Anguila Lottery</td>
                                        <td>Diario</td>
                                        <td>10:00am, 1:00pm, 6:00pm y 9:00pm</td>
                                    </tr>
                                    <tr>
                                        <td>King Lottery</td>
                                        <td>Diario</td>
                                        <td>10:00am y 7:30pm</td>
                                    </tr>
                                    <tr>
                                        <td>Florida</td>
                                        <td>Diario</td>
                                        <td>1:30pm y 9:50pm</td>
                                    </tr>
                                    <tr>
                                        <td>New York</td>
                                        <td>Diario</td>
                                        <td>2:30pm y 10:30pm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Resultados -->
            <section id="results-container" class="flex flex-col gap-y-12 lg:flex-grow lg:h-full lg:overflow-y-scroll">
                
            </section>
        </div>
    </main>
    
    <?php get_footer(); ?>
    <script src="<?php echo get_theme_file_uri('/resources/js/loteria.js'); ?>"></script>
