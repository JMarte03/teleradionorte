<?php
/**
 * Template Name: Loteria
 */
get_header();
?>

<main class="bg-white px-12 space-y-7">
    <h1 class="mt-8 text-2xl font-bold text-brandGreen md:text-3xl md:mt-4">Resultados de todas las loterías dominicanas</h1>
    <p class="text-black font-hanken">
        Entérese de los números ganadores y resultados del Gana Más, 
        Lotería Nacional, Leidsa, Loto Leidsa, Loteka, Loteria 
        Real de la tarde y Nueva York al momento de salir. 
    </p>
    <div class="flex flex-col gap-y-14 gap-x-10 lg:flex-row-reverse">
        <!-- Date Picker y Horarios -->
        <section class="space-y-7 lg:basis-[20%]">
            <!-- Calendario -->
            <div>
                <calendar-date class="cally w-full bg-base-100 border border-base-300 shadow-md rounded-box">
                    <svg aria-label="Previous" class="fill-current size-4" slot="previous" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M15.75 19.5 8.25 12l7.5-7.5"></path></svg>
                    <svg aria-label="Next" class="fill-current size-4" slot="next" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path></svg>
                    <calendar-month></calendar-month>
                </calendar-date>
            </div>
            <!-- Horarios -->
            <div class="space-y-7 bg-stone-50/70 rounded-xl p-8">
                <!-- loterías dominicanas -->
                <div>
                    <h2 class="my-6 pl-4 text-xl font-bold font-hanken text-grayTitle">Horarios de loterías dominicanas</h2>
                    <div class="overflow-x-auto overflow-y-scroll h-82 md:h-auto">
                        <table class="table table-zebra">
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
                    <h2 class="my-7 pl-4  text-xl font-bold font-hanken text-grayTitle">Horarios de sorteos millonarios</h2>
                    <div class="overflow-x-auto overflow-y-scroll h-82 md:h-auto">
                        <table class="table table-zebra">
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
                    <h2 class="my-7 pl-4  text-xl font-bold font-hanken text-grayTitle">Horarios de loterías extranjeras</h2>
                    <div class="overflow-x-auto overflow-y-scroll h-82 md:h-auto">
                        <table class="table table-zebra">
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
        <section class="flex flex-col gap-y-12 lg:basis-[60%] lg:h-full lg:overflow-y-scroll">
            <!-- Lotería Nacional -->
            <div class="border rounded-t-xl b-darkGreen">
                <h3 class="text-white bg-darkGreen max-w-full p-4 rounded-t-xl">Lotería Nacional</h3>
                <!-- Sorteos -->
                <div>
                    <div class="sorteo p-4 flex justify-between items-center">
                        <div id="game-info" class="flex flex-col gap-y-5">
                            <span class="w-fit p-2 rounded-xl bg-gray-200 text-xs text-black">10-04</span>
                            <span class="text-lg">Juega + Pega +</span>
                            <ul class="flex flex-wrap gap-x-2 gap-y-2">
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">03</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">26</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">11</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">08</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">13</li>
                            </ul>
                        </div>
                        <div id="game-logo">
                            <img src="https://cdn-lottery.kiskoo.com/loterias-dominicanas/juega-mas-pega-mas-loteria-nacional.png" class="w-20" alt="">
                        </div>
                    </div>
                    <div class="divider m-0"></div>
                    <div class="sorteo p-4 flex justify-between items-center">
                        <div id="game-info" class="flex flex-col gap-y-5">
                            <span class="w-fit p-2 rounded-xl bg-gray-200 text-xs text-black">10-04</span>
                            <span class="text-lg">Juega + Pega +</span>
                            <ul class="flex flex-wrap gap-x-2 gap-y-2">
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">03</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">26</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">11</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">08</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">13</li>
                            </ul>
                        </div>
                        <div id="game-logo">
                            <img src="https://cdn-lottery.kiskoo.com/loterias-dominicanas/juega-mas-pega-mas-loteria-nacional.png" class="w-20" alt="">
                        </div>
                    </div>
                </div>

            </div>
            <!-- Otra Lotería -->
            <div class="border rounded-t-xl b-darkGreen">
                <h3 class="text-white bg-darkGreen max-w-full p-4 rounded-t-xl">Lotería Nacional</h3>
                <!-- Sorteos -->
                <div>
                    <div class="sorteo p-4 flex justify-between items-center">
                        <div id="game-info" class="flex flex-col gap-y-5">
                            <span class="w-fit p-2 rounded-xl bg-gray-200 text-xs text-black">10-04</span>
                            <span class="text-lg">Juega + Pega +</span>
                            <ul class="flex gap-x-2">
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">03</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">26</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">11</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">08</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">13</li>
                            </ul>
                        </div>
                        <div id="game-logo">
                            <img src="https://cdn-lottery.kiskoo.com/loterias-dominicanas/juega-mas-pega-mas-loteria-nacional.png" class="w-20" alt="">
                        </div>
                    </div>
                    <div class="divider m-0"></div>
                    <div class="sorteo p-4 flex justify-between items-center">
                        <div id="game-info" class="flex flex-col gap-y-5">
                            <span class="w-fit p-2 rounded-xl bg-gray-200 text-xs text-black">10-04</span>
                            <span class="text-lg">Juega + Pega +</span>
                            <ul class="flex gap-x-2">
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">03</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">26</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">11</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">08</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">13</li>
                            </ul>
                        </div>
                        <div id="game-logo">
                            <img src="https://cdn-lottery.kiskoo.com/loterias-dominicanas/juega-mas-pega-mas-loteria-nacional.png" class="w-20" alt="">
                        </div>
                    </div>
                </div>

            </div>
             <!-- Otra Lotería -->
             <div class="border rounded-t-xl b-darkGreen">
                <h3 class="text-white bg-darkGreen max-w-full p-4 rounded-t-xl">Lotería Nacional</h3>
                <!-- Sorteos -->
                <div>
                    <div class="sorteo p-4 flex justify-between items-center">
                        <div id="game-info" class="flex flex-col gap-y-5">
                            <span class="w-fit p-2 rounded-xl bg-gray-200 text-xs text-black">10-04</span>
                            <span class="text-lg">Juega + Pega +</span>
                            <ul class="flex gap-x-2">
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">03</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">26</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">11</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">08</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">13</li>
                            </ul>
                        </div>
                        <div id="game-logo">
                            <img src="https://cdn-lottery.kiskoo.com/loterias-dominicanas/juega-mas-pega-mas-loteria-nacional.png" class="w-20" alt="">
                        </div>
                    </div>
                    <div class="divider m-0"></div>
                    <div class="sorteo p-4 flex justify-between items-center">
                        <div id="game-info" class="flex flex-col gap-y-5">
                            <span class="w-fit p-2 rounded-xl bg-gray-200 text-xs text-black">10-04</span>
                            <span class="text-lg">Juega + Pega +</span>
                            <ul class="flex gap-x-2">
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">03</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">26</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">11</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">08</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">13</li>
                            </ul>
                        </div>
                        <div id="game-logo">
                            <img src="https://cdn-lottery.kiskoo.com/loterias-dominicanas/juega-mas-pega-mas-loteria-nacional.png" class="w-20" alt="">
                        </div>
                    </div>
                </div>

            </div>
             <!-- Otra Lotería -->
             <div class="border rounded-t-xl b-darkGreen">
                <h3 class="text-white bg-darkGreen max-w-full p-4 rounded-t-xl">Lotería Nacional</h3>
                <!-- Sorteos -->
                <div>
                    <div class="sorteo p-4 flex justify-between items-center">
                        <div id="game-info" class="flex flex-col gap-y-5">
                            <span class="w-fit p-2 rounded-xl bg-gray-200 text-xs text-black">10-04</span>
                            <span class="text-lg">Juega + Pega +</span>
                            <ul class="flex gap-x-2">
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">03</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">26</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">11</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">08</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">13</li>
                            </ul>
                        </div>
                        <div id="game-logo">
                            <img src="https://cdn-lottery.kiskoo.com/loterias-dominicanas/juega-mas-pega-mas-loteria-nacional.png" class="w-20" alt="">
                        </div>
                    </div>
                    <div class="divider m-0"></div>
                    <div class="sorteo p-4 flex justify-between items-center">
                        <div id="game-info" class="flex flex-col gap-y-5">
                            <span class="w-fit p-2 rounded-xl bg-gray-200 text-xs text-black">10-04</span>
                            <span class="text-lg">Juega + Pega +</span>
                            <ul class="flex gap-x-2">
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">03</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">26</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">11</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">08</li>
                                <li class="w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center">13</li>
                            </ul>
                        </div>
                        <div id="game-logo">
                            <img src="https://cdn-lottery.kiskoo.com/loterias-dominicanas/juega-mas-pega-mas-loteria-nacional.png" class="w-20" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
