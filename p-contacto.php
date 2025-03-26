<?php
/**
 * Template Name: Contacto
 */
get_header();
?>

<main class="p-12">
    <!-- Contact heading -->
    <section class="space-y-6">
            <h1 class="font-anton text-darkGreen text-2xl md:text-3xl">Conecta con nosotros</h1>
            <p class="font-hanken text-black font-light text-md md:text-lg">
                ¿Tienes preguntas, sugerencias o quieres colaborar con nosotros? 
                En Teleradionorte, valoramos tu opinión y estamos 
                aquí para escucharte. Contáctanos a través de 
                nuestras redes sociales, llámanos o envíanos un 
                mensaje y con gusto te atenderemos. 
            </p>
    </section>
    <div class="w-full border-b border-lightGreen my-16"></div>
    <!-- Contact info -->
    <section class="flex flex-col gap-x-16 lg:flex-row">
        <!-- Form -->
        <form id="contact-form" action="" class="space-y-4 lg:basis-1/2">
            <h2 class="font-hanken font-semibold text-grayTitle text-xl">Envíanos un mensaje</h2>
            <fieldset class="fieldset">
                <label for="name" class="font-hanken text-grayTitle text-md mb-2">Nombre y Apellido</label>
                <input id="name" name="name" type="text" class="input w-full text-grayTitle bg-stone-50 border" />
            </fieldset>
            <fieldset class="fieldset">
                <label for="email" class="font-hanken text-grayTitle text-md mb-2">Correo electrónico</label>
                <input id="email" name="email" type="email" class="input w-full text-grayTitle bg-stone-50 border" />
            </fieldset>
            <fieldset class="fieldset">
                <label for="subject" class="font-hanken text-grayTitle text-md mb-2">Asunto</label>
                <input id="subject" name="subject" type="text" class="input w-full text-grayTitle bg-stone-50 border" />
            </fieldset>
            <fieldset class="fieldset">
                <label for="message" class="font-hanken text-grayTitle text-md mb-2">Comentario</label>
                <textarea id="message" name="message" class="textarea w-full bg-stone-50 h-24 text-grayTitle"></textarea>
            </fieldset>
            <button type="submit" class="btn mt-2 shadow-none w-full font-hanken text-white bg-darkGreen transition-all transition-duration-150 hover:bg-darkGreen/90">Enviar Mensaje</button>
            <div id="alert-message" role="alert" class="hidden alert alert-succes rounded-sm bg-lightGreen shadow-none border-0 text-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>Su mensaje ha sido enviado.</span>
            </div>
        </form>
        <!-- Separator -->
        <div class="w-full border-b border-lightGreen my-16 lg:hidden"></div>
        <!-- More info -->
        <section class="flex flex-col md:flex-row lg:flex-col gap-y-10 gap-x-16">
            <div class="basis-1/2 space-y-10">
                <div>
                    <h2 class="font-hanken font-semibold text-grayTitle text-xl mb-4">Síguenos en nuestras redes sociales</h2>
                    <ul class="space-y-1">
                        <li>
                            <a href="https://www.facebook.com/teleradionorte?ref=embed_page" class="inline-flex items-center gap-x-2 font-hanken text-grayTitle transition-all transition-duration-300 hover:text-grayBg hover:underline"><i class='bx bxl-facebook-circle text-grayTitle'></i> teleradionorte</a>
                        </li>
                        <li>
                            <a href="https://x.com/teleradionorte1" class="inline-flex items-center gap-x-2 font-hanken text-grayTitle transition-all transition-duration-300 hover:text-grayBg hover:underline"><i class='bx bxl-twitter text-grayTitle'></i> @teleradionorte</a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/teleradionorte/" class="inline-flex items-center gap-x-2 font-hanken text-grayTitle transition-all transition-duration-300 hover:text-grayBg hover:underline"><i class='bx bxl-instagram-alt text-grayTitle'></i> @teleradionorte1</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="font-hanken font-semibold text-grayTitle text-xl mb-4">Envíanos un correo</h2>
                    <a href="mailto:teleradionorte@gmail.com" class="inline-flex items-center gap-x-2 font-hanken text-grayTitle transition-all transition-duration-300 hover:text-grayBg hover:underline"><i class='bx bxs-envelope text-grayTitle'></i> teleradionorte@hotmail.com</a>
                </div>
            </div>
            <div class="basis-1/2 space-y-10">
                <div class="space-y-3">
                    <h2 class="font-hanken font-semibold text-grayTitle text-xl mb-4">Llámanos</h2>
                    <p class="text-grayTitle font-hanken font-light">Disponibles Lunes a Viernes de 8 A.M a 5 P.M</p>
                    <span class="inline-flex items-center gap-x-2 font-hanken  text-grayTitle"><i class='bx bxs-phone text-grayTitle'></i> +1 (809) 590-0144</span>
                </div>
                <div class="space-y-3">
                    <h2 class="font-hanken font-semibold text-grayTitle text-xl mb-4">Visítanos</h2>
                    <p class="text-grayTitle font-hanken font-light">Estamos ubicados en Santo Domingo Norte, Sector Los Palmares</p>
                    <a href="https://maps.app.goo.gl/LfPSG88UQsTnt5XDA" class="inline-flex items-center gap-x-2 font-hanken text-grayTitle transition-all transition-duration-300 hover:text-grayBg hover:underline"><i class='bx bxs-map text-grayTitle'></i> C. Amín Abel 3, S.D. 11404</a>
                </div>
            </div>
        </section>
    </section>
</main>


<?php get_footer(); ?>
