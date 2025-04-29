<?php get_header(); ?>

<!-- Obteniendo las 5 últimas noticias de la página -->
<?php
	$latest_posts = new WP_Query([
		'post_type'      => 'post', // Solamente posts
		'posts_per_page' => 4,      // 4 posts
	]);

	$posts_array = [];
	$default_image = get_template_directory_uri() . '/resources/img/trn-placeholder.png';

	if ($latest_posts->have_posts()) {
		while ($latest_posts->have_posts()) {
			$latest_posts->the_post();
			
			// Almacenando los datos de cada noticia (post) en un array
			$posts_array[] = [
				'titulo'   => wp_trim_words(get_the_title(), 10, '...'),
				'desc'   => wp_trim_words(get_the_content(), 10, '...'),
				'categoria' => !empty(get_the_category()) ? get_the_category()[0]->name : 'Sin categoría',
				'link'    => get_permalink(),
				'imagen'   => get_the_post_thumbnail_url(get_the_ID(), 'medium') ?: $default_image,
				'fecha'    => get_the_date(),
				'autor' => get_the_author(),
			];
		}
	}

	// Restaurar los datos del post
	wp_reset_postdata();
?>

<main class="w-full">
	<!-- Hero section -->
	<section class="p-3 bg-lightGreen">
		<div class="min-h-screen w-full flex items-stretch bg-cover bg-center rounded-2xl" style="background-image: url('<?php echo get_theme_file_uri('/resources/img/hero2-bg.gif'); ?>');">
			<div class="flex items-center">
				<div class="px-12 space-y-15 md:w-[600px] lg:w-[700px]">
					<h1 data-aos="fade-right" class="text-4xl text-lightGreen font-gothicExpanded md:text-5xl lg:text-7xl">Más allá de tu provincia.</h1>
					<p data-aos="fade-right" class="text-sm font-encodeSans text-white md:text-lg">
						Un grupo de medios comprometido con la sociedad 
						dominicana a través del servicio; con cobertura
						a nivel nacional e internacional.
					</p>
					<a data-aos="fade-right" href="#programacion" class="py-5 px-10 rounded-full text-sm font-encodeSans text-white bg-softGreen transition-all trasition-duration-150 hover:bg-brandGreen md:text-lg">
						Ver transmisión en vivo
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- About Us Section -->
	<section id="sobre-nosotros" class="p-12 w-full flex flex-col gap-8 bg-cover bg-center lg:flex-row lg:overflow-x-scroll overflow-y-visible" style="background-image: url('<?php echo get_theme_file_uri('/resources/img/about-us-bg.png'); ?>');">
		<div class="flex flex-col gap-y-4 gap-x-8 md:flex-row lg:w-[1060px] lg:flex-shrink-0">
			<img data-aos="fade-right" src="<?php echo get_theme_file_uri('/resources/img/about-1.jpeg'); ?>" alt="Estudio de grabación de Teleradionorte" class="md:w-[50%] basis-1/2 md:h-60 rounded-2xl lg:h-96 lg:w-[500px] lg:flex-shrink-0">
			<div data-aos="fade-up" data-aos-duration="1000" class="flex-grow flex flex-col justify-center gap-y-4 bg-[#0c440a]/30 p-7 rounded-2xl md:h-60 md:text-center lg:px-20 lg:h-96 lg:w-[500px] lg:flex-shrink-0">
				<span class="text-md text-lightGreen font-encodeSans font-semibold">Desde el 2015</span>
				<p class="text-white text-sm font-encodeSans">
					Comprometidos con la verdad,
					la comunidad y la comunicación
					responsable.
				</p>
			</div>
		</div>
		<div class="flex flex-col gap-y-4 gap-x-8 md:flex-row-reverse lg:flex-row lg:w-[1060px] lg:flex-shrink-0">
			<img data-aos="fade-left" src="<?php echo get_theme_file_uri('/resources/img/about-2.jpeg'); ?>" alt="Estudio de grabación de Teleradionorte" class="md:w-[50%] basis-1/2 md:h-60 rounded-2xl lg:h-96 lg:w-[500px] lg:flex-shrink-0">
			<div data-aos="fade-up" data-aos-duration="1000" class="flex flex-col justify-center gap-y-4 bg-[#0c440a]/30 p-7 flex-grow rounded-2xl md:h-60 md:text-center lg:px-20 lg:h-96 lg:w-[500px] lg:flex-shrink-0">
				<span class="text-md text-lightGreen font-encodeSans font-semibold">Desde Santo Domingo Norte</span>
				<p class="text-white text-sm font-encodeSans">
					Representando y proyectando la voz de una 
					comunidad vibrante y llena de historia.
				</p>
			</div>
		</div>
		<div class="flex flex-col gap-y-4 gap-x-8 md:flex-row lg:w-[1060px] lg:flex-shrink-0">
			<img data-aos="fade-right" src="<?php echo get_theme_file_uri('/resources/img/about-3.jpeg'); ?>" alt="Estudio de grabación de Teleradionorte" class="md:w-[50%] basis-1/2 md:h-60  rounded-2xl lg:h-96 lg:w-[500px] lg:flex-shrink-0">
			<div data-aos="fade-up" data-aos-duration="1000" class="flex flex-col justify-center gap-y-4 bg-[#0c440a]/30 p-7 rounded-2xl md:h-60 flex-grow md:text-center lg:px-20 lg:h-96 lg:w-[500px] lg:flex-shrink-0">
				<span class="text-md text-lightGreen font-encodeSans font-semibold">Más que un grupo de medios</span>
				<p class="text-white text-sm font-encodeSans">
					Informamos, educamos y entretenemos 
					con valores, visión y sentido de 
					responsabilidad social.
				</p>
			</div>
		</div>
	</section>

	<!-- Sección programa -->
	<section class="w-full bg-white">
		<div class="w-full mx-auto max-w-[95%] px-12 py-30 bg-white">
			<h2 data-aos="fade-right" class="mb-10 font-gothicExpanded text-4xl text-softGreen">Transmisión en Vivo</h2>
			<div data-aos="fade-up" id="programacion" class="flex flex-col gap-x-12 gap-y-8 lg:flex-row">
				<!-- Video -->
				<div class="space-y-4 lg:min-h-96 lg:max-h-96">
					<div class="ctn">
						<video id="player" controls crossorigin playsinline class="lg:max-h-80">
							<source src="https://angelistic.live:3785/hybrid/play.m3u8" type="application/vnd.apple.mpegurl">
							<a>Video Oynatılamıyor</a>
						</video>
					</div>
					<div class="bg-lightestGreen flex items-center gap-3 p-3 font-encodeSans text-softGreen text-lg font-semibold">
						<i class="bx bxs-square"></i>
						<span id="ahora" class="">En Vivo: <span class="text-black font-normal">Amaneciendo con TRN</span></span>
					</div>
				</div>
				<!-- Programación -->
				<div class="flex-grow lg:h-96">
					<!-- title -->
					<a href="<?php echo esc_url(get_permalink(get_page_by_path('programa')));?>" class="font-semibold font-encodeSans text-lg text-gray-600 hover:text-darkGreen/80 transition-all transition-duration-150">
						<h3 class="mb-6">Programación de Hoy</h2>
					</a>
					<!-- descripción -->
					<div id="programa-hoy" class="lg:overflow-y-scroll lg:max-h-80 w-full">
						<ul class="space-y-6">
							<li class="flex items-center pb-3 border-b rounded-sm gap-x-3">
								<i class='bx bx-sm'></i>
								<p class="font-light"><span id="time">7:00 AM - 9:00 AM</span>: Amaneciendo TRN</p>
							</li>
							<li class="flex items-center pb-3 border-b rounded-sm gap-x-3">
								<i class='bx bx-sm'></i>
								<p class="font-light"><span id="time">9:00 AM - 12:00 PM</span>: Documental</p>
							</li>
							<li class="flex items-center pb-3 border-b rounded-sm gap-x-3">
								<i class='bx bx-sm'></i>
								<p class="font-light"><span id="time">12:00 PM - 1:00 PM</span>: La Belleza Es Mía</p>
							</li>
							<li class="flex items-center pb-3 border-b rounded-sm gap-x-3">
								<i class='bx bx-sm'></i>
								<p class="font-light"><span id="time">1:00 PM - 3:00 PM</span>: Documental</p>
							</li>
							<li class="flex items-center pb-3 border-b rounded-sm gap-x-">
								<i class='bx bx-sm'></i>
								<p class="font-light"><span id="time">3:00 PM - 4:00 PM</span>: Tiempo de Amparo</p>
							</li>
							<li class="flex items-center pb-3 border-b rounded-sm gap-x-">
								<i class='bx bx-sm'></i>
								<p class="font-light"><span id="time">4:00 PM - 6:00 PM</span>: Documental</p>
							</li>
							<li class="flex items-center pb-3 border-b rounded-sm gap-x-3">
								<i class='bx bx-sm'></i>
								<p class="font-light"><span id="time">6:00 PM - 8:00 PM</span>: Comentando La Actualidad</p>
							</li>
							<li class="flex items-center pb-3 border-b rounded-sm gap-x-3">
								<i class='bx bx-sm'></i>
								<p class="font-light"><span id="time">8:00 PM</span>: Repetición La Belleza Es Mía</p>
							</li>
							<li class="flex items-center pb-3 border-b rounded-sm gap-x-3">
								<i class='bx bx-sm'></i>
								<p class="font-light"><span id="time">11:00 PM</span>: Programaciones Variadas</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Sección últimas noticias -->
	<section id="noticias" class="w-full bg-lightestGreen">
		<!-- Noticias -->
		<div class="w-full mx-auto max-w-[95%] px-12 py-18 bg-lightestGreen">
			<div class="w-full">
				<div class="flex items-center justify-between mb-10">
					<h2 data-aos="fade-right" class="font-gothicExpanded text-4xl text-softGreen">Noticias Recientes</h2>
					<a 
						data-aos="fade-top"
						href="<?php echo esc_url(get_permalink(get_page_by_path('noticias')));?>"
						class="py-3 px-6 bg-softGreen text-white rounded-full hover:bg-darkGreen"
					>		
						<span class="hidden text-white font-encodeSans md:block">Más noticias</span>
						<span class="md:hidden"><i class='bx bx-link-external'></i></span>
					</a>
				</div>
			</div>
			<div class="w-full mt-6 flex flex-wrap gap-3">
				<?php foreach ($posts_array as $index => $post) : ?>
					<a data-aos="fade-up" href="<?php echo esc_url($post['link']); ?>" class="md:basis-[49%] xl:basis-[24%] h-auto">	
						<div class="card card-compact bg-white shadow-sm">
							<figure class="hover:scale-95 transition-all transition-duration-300">
								<img
									src="<?php echo esc_url($post['imagen']); ?>"
									class="w-full h-52 object-cover" 
								/>
							</figure>
							<div class="card-body">
								<div class="body-top bg-gray-100 w-fit py-3 px-6 rounded-full">
									<span class="font-encodeSans text-xs font-light text-black"><?php echo esc_html($post['categoria']);?></span>
								</div>
								<div class="body-middle pt-5 pb-8 border-b border-gray-200 space-y-4">
									<h3 class="font-encodeSans text-darkGreen text-lg pb-3 hover:underline"><?php echo esc_html($post['titulo']);?></h3>
									<p class="text-lightText font-encodeSans"><?php echo esc_html($post['desc']);?></p>
								</div>
								<div class="body-bottom py-5">
									<span class="text-brandGreen font-encodeSans text-xs"><?php echo esc_html($post['autor']);?> • <?php echo esc_html($post['fecha']); ?></span>
								</div>
							</div>
						</div>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	
	<!-- Sección contacto -->
	<section id="contacto" class="w-full bg-white">
		<div class="w-full mx-auto max-w-[95%] px-12 py-30 bg-white">
			<!-- Contact heading -->
			<section data-aos="fade-up" class="space-y-6">
					<h2 class="mb-10 font-gothicExpanded text-4xl text-softGreen">Conecta con nosotros</h2>
					<p class="font-encodeSans text-black font-light text-sm md:text-lg leading-7">
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
				<form data-aos="fade-right" id="contact-form" class="space-y-4 lg:basis-1/2">
					<h3 class="font-encodeSans font-semibold text-grayTitle text-xl">Envíanos un mensaje</h3>
					<fieldset class="fieldset">
						<label for="name" class="font-encodeSans text-grayTitle text-md mb-2">Nombre y Apellido</label>
						<input id="name" name="name" type="text" class="input w-full text-grayTitle bg-stone-50 border" />
					</fieldset>
					<fieldset class="fieldset">
						<label for="email" class="font-encodeSans text-grayTitle text-md mb-2">Correo electrónico</label>
						<input id="email" name="email" type="email" class="input w-full text-grayTitle bg-stone-50 border" />
					</fieldset>
					<fieldset class="fieldset">
						<label for="subject" class="font-encodeSans text-grayTitle text-md mb-2">Asunto</label>
						<input id="subject" name="subject" type="text" class="input w-full text-grayTitle bg-stone-50 border" />
					</fieldset>
					<fieldset class="fieldset">
						<label for="message" class="font-encodeSans text-grayTitle text-md mb-2">Comentario</label>
						<textarea id="message" name="message" class="textarea w-full bg-stone-50 h-24 text-grayTitle"></textarea>
					</fieldset>
					<button type="submit" class="btn mt-2 shadow-none w-full font-encodeSans text-white bg-darkGreen transition-all transition-duration-150 hover:bg-darkGreen/90">Enviar Mensaje</button>
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
				<section data-aos="fade-left" class="flex flex-col md:flex-row lg:flex-col gap-y-10 gap-x-16">
					<div class="basis-1/2 space-y-10">
						<div>
							<h3 class="font-encodeSans font-semibold text-grayTitle text-xl mb-4">Síguenos en nuestras redes sociales</h3>
							<ul class="space-y-1 text-sm md:text-lg">
								<li>
									<a href="https://www.facebook.com/teleradionorte?ref=embed_page" class="inline-flex items-center gap-x-2 font-encodeSans text-grayTitle transition-all transition-duration-300 hover:text-grayBg hover:underline"><i class='bx bxl-facebook-circle text-grayTitle'></i> teleradionorte</a>
								</li>
								<li>
									<a href="https://x.com/teleradionorte1" class="inline-flex items-center gap-x-2 font-encodeSans text-grayTitle transition-all transition-duration-300 hover:text-grayBg hover:underline"><i class='bx bxl-twitter text-grayTitle'></i> @teleradionorte</a>
								</li>
								<li>
									<a href="https://www.instagram.com/teleradionorte/" class="inline-flex items-center gap-x-2 font-encodeSans text-grayTitle transition-all transition-duration-300 hover:text-grayBg hover:underline"><i class='bx bxl-instagram-alt text-grayTitle'></i> @teleradionorte1</a>
								</li>
							</ul>
						</div>
						<div>
							<h3 class="font-encodeSans font-semibold text-grayTitle text-xl mb-4">Envíanos un correo</h3>
							<a href="mailto:teleradionorte@gmail.com" class="inline-flex items-center gap-x-2 font-encodeSans text-grayTitle transition-all transition-duration-300 hover:text-grayBg text-sm md:text-lg hover:underline"><i class='bx bxs-envelope text-grayTitle'></i> teleradionorte@hotmail.com</a>
						</div>
					</div>
					<div class="basis-1/2 space-y-10">
						<div class="space-y-3">
							<h3 class="font-encodeSans font-semibold text-grayTitle text-xl mb-4">Llámanos</h3>
							<p class="text-grayTitle font-encodeSans font-light text-sm md:text-lg">Disponibles Lunes a Viernes de 8 A.M a 5 P.M</p>
							<span class="inline-flex items-center gap-x-2 font-encodeSans text-sm md:text-lg text-grayTitle"><i class='bx bxs-phone text-grayTitle'></i> +1 (809) 590-0144</span>
						</div>
						<div class="space-y-3">
							<h3 class="font-encodeSans font-semibold text-grayTitle text-xl mb-4">Visítanos</h3>
							<p class="text-grayTitle font-encodeSans font-light text-sm md:text-lg">Estamos ubicados en Santo Domingo Norte, Sector Los Palmares</p>
							<a href="https://maps.app.goo.gl/LfPSG88UQsTnt5XDA" class="inline-flex items-center gap-x-2 font-encodeSans text-grayTitle transition-all transition-duration-300 text-sm md:text-lg hover:text-grayBg hover:underline"><i class='bx bxs-map text-grayTitle'></i> C. Amín Abel 3, S.D. 11404</a>
						</div>
					</div>
				</section>
			</section>
		</div>
	</section>				

</main>

<?php
get_footer();