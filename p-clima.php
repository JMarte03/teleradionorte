<?php
/**
 * Template Name: Clima
 */
get_header();
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

<main class="bg-white px-12">
    <!-- Clima de hoy -->
    <section class="mt-6 w-full space-y-5">
        <!-- Contenido -->
        <section class="flex flex-col gap-y-3 gap-x-3 lg:flex-row">
            <!-- Display de ahora -->
            <div class="flex justify-center w-full p-10 bg-lightestGreen rounded-xl md:justify-start lg:w-fit lg:px-14">
                <div class="flex flex-col gap-x-18 gap-y-8 md:flex-row md:items-center md:m-auto">
                    <!-- left -->
                    <div class="space-y-8">
                            <div class="flex flex-col justify-center items-center gap-y-5 gap-x-5 md:flex-row md:justify-start md:items-center">
                                <img id="now-icon" src="" alt="Icono del clima" class="w-12 lg:w-20 h-auto">
                                <span class="font-anton text-grayTitle text-2xl "><?php echo "$day de $month";?></span>
                            </div>
                            <span id="now-description" class="text-center block font-hanken font-semibold text-2xl text-grayBg md:text-left"></span>
                            <span class="block font-hanken text-sm text-grayBg ">Santo Domingo, República Dominicana</span>
                    </div>
                    <!-- right -->
                    <div class="flex items-center flex-col gap-x-8 gap-y-10 md:items-start">
                            <div class="space-y-2">
                                <h3 class="font-hanken font-semibold text-grayBg">Temperatura</h3>
                                <div class="flex justify-center items-center gap-x-3 md:justify-start">
                                    <img src="<?php echo get_theme_file_uri('/resources/img/temperature.png'); ?>" alt="Logo de Teleradio Norte" class="w-4 h-auto">
                                    <span id="now-temperature" class="font-hanken font-light text-grayBg"></span>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <h3 class="font-hanken font-semibold text-grayBg">Precipitaciones</h3>
                                <div class="flex justify-center items-center gap-x-3 md:justify-start">
                                    <img src="<?php echo get_theme_file_uri('/resources/img/precip.png'); ?>" alt="Logo de Teleradio Norte" class="w-4 h-auto">
                                    <span id="now-precipitation" class="font-hanken font-light text-grayBg"></span>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <h3 class="font-hanken font-semibold text-grayBg">Humedad</h3>
                                <div class="flex justify-center items-center gap-x-3 md:justify-start">
                                    <img src="<?php echo get_theme_file_uri('/resources/img/humidity.png'); ?>" alt="Logo de Teleradio Norte" class="w-4 h-auto">
                                    <span id="now-humidity" class="font-hanken font-light text-grayBg"></span>
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
        <h2 class="font-hanken font-bold text-brandGreen text-2xl">Pronóstico para los próximos 6 días</h2>
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

<?php get_footer(); ?>
