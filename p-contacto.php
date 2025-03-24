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
    <section>
        <!-- Form -->
        <form action="" class="space-y-4">
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
                <label for="asunto" class="font-hanken text-grayTitle text-md mb-2">Asunto</label>
                <input id="asunto" name="asunto" type="text" class="input w-full text-grayTitle bg-stone-50 border" />
            </fieldset>
            <fieldset class="fieldset">
                <label for="comentario" class="font-hanken text-grayTitle text-md mb-2">Comentario</label>
                <textarea id="comentario" name="comentario" class="textarea w-full bg-stone-50 h-24 text-grayTitle"></textarea>
            </fieldset>
        </form>
        <!-- Separator -->
        <div class="w-full border-b border-lightGreen my-16 md:hidden"></div>
        <!-- More info -->
        <section class="">
            <div>
                <h2 class="font-hanken font-semibold text-grayTitle text-xl mb-4">Síguenos en nuestras redes sociales</h2>
                <ul class="space-y-1">
                    <li>
                        <a href="#" class="inline-flex items-center gap-x-2 font-hanken text-grayTitle transition-all transition-duration-300 hover:text-grayBg hover:underline"><i class='bx bxl-facebook-circle text-grayTitle'></i> teleradionorte</a>
                    </li>
                    <li>
                        <a href="#" class="inline-flex items-center gap-x-2 font-hanken text-grayTitle transition-all transition-duration-300 hover:text-grayBg hover:underline"><i class='bx bxl-twitter text-grayTitle'></i> @teleradionorte</a>
                    </li>
                    <li>
                        <a href="#" class="inline-flex items-center gap-x-2 font-hanken text-grayTitle transition-all transition-duration-300 hover:text-grayBg hover:underline"><i class='bx bxl-instagram-alt text-grayTitle'></i> @teleradionorte1</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="font-hanken font-semibold text-grayTitle text-xl mb-4">Síguenos en nuestras redes sociales</h2>
                <ul class="space-y-1">
                    <li>
                        <a href="#" class="inline-flex items-center gap-x-2 font-hanken text-grayTitle transition-all transition-duration-300 hover:text-grayBg hover:underline"><i class='bx bxl-facebook-circle text-grayTitle'></i> teleradionorte</a>
                    </li>
                    <li>
                        <a href="#" class="inline-flex items-center gap-x-2 font-hanken text-grayTitle transition-all transition-duration-300 hover:text-grayBg hover:underline"><i class='bx bxl-twitter text-grayTitle'></i> @teleradionorte</a>
                    </li>
                    <li>
                        <a href="#" class="inline-flex items-center gap-x-2 font-hanken text-grayTitle transition-all transition-duration-300 hover:text-grayBg hover:underline"><i class='bx bxl-instagram-alt text-grayTitle'></i> @teleradionorte1</a>
                    </li>
                </ul>
            </div>
        </section>
    </section>
</main>


<?php get_footer(); ?>
