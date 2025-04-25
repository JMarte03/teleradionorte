<?php get_header(); ?>

<!-- Obteniendo las 5 últimas noticias de la página -->
<?php
	$latest_posts = new WP_Query([
		'post_type'      => 'post', // Solamente posts
		'posts_per_page' => 5,      // 5 posts
	]);

	$posts_array = [];
	$default_image = get_template_directory_uri() . '/resources/img/trn-placeholder.png';

	if ($latest_posts->have_posts()) {
		while ($latest_posts->have_posts()) {
			$latest_posts->the_post();
			
			// Almacenando los datos de cada noticia (post) en un array
			$posts_array[] = [
				'titulo'   => wp_trim_words(get_the_title(), 10, '...'),
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
	<section class="p-3">
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
	<section id="programacion" class="w-full p-12 bg-white flex flex-col gap-x-12 gap-y-8 lg:flex-row">
		<div class="space-y-4 lg:min-h-96 lg:max-h-96">
			<div class="ctn">
				<video id="player" controls crossorigin playsinline class="lg:max-h-80">
					<source src="https://angelistic.live:3785/hybrid/play.m3u8" type="application/vnd.apple.mpegurl">
					<a>Video Oynatılamıyor</a>
				</video>
			</div>
			<div class="bg-lightestGreen flex items-center gap-3 p-3 font-encodeSans text-softGreen text-xl font-semibold">
				<i class="bx bxs-square"></i>
				<span id="ahora" class="">En Vivo: <span class="text-black font-normal">Amaneciendo con TRN</span></span>
			</div>
		</div>
		<div class="flex-grow lg:h-96">
			<!-- title -->
			<a href="<?php echo esc_url(get_permalink(get_page_by_path('programa')));?>" class="flex items-center justify-between font-semibold text-2xl text-brandGreen hover:text-darkGreen/80 transition-all transition-duration-150">
				<h2>Programación de Hoy</h2>
			</a>
			<!-- descripción -->
			<div id="programa-hoy" class="lg:overflow-y-scroll lg:max-h-80 mt-8 w-full">
				<ul class="space-y-2">
					<li class="flex items-center p-3 rounded-sm gap-x-3">
						<i class='bx bx-sm'></i>
						<p class="font-light"><span id="time">7:00 AM - 9:00 AM</span>: Amaneciendo TRN</p>
					</li>
					<li class="flex items-center p-3 rounded-sm gap-x-3">
						<i class='bx bx-sm'></i>
						<p class=" font-light"><span id="time">9:00 AM - 12:00 PM</span>: Documental</p>
					</li>
					<li class="flex items-center p-3 rounded-sm gap-x-3">
						<i class='bx bx-sm'></i>
						<p class=" font-light"><span id="time">12:00 PM - 1:00 PM</span>: La Belleza Es Mía</p>
					</li>
					<li class="flex items-center p-3 rounded-sm gap-x-3">
						<i class='bx bx-sm'></i>
						<p class=" font-light"><span id="time">1:00 PM - 3:00 PM</span>: Documental</p>
					</li>
					<li class="flex items-center p-3 rounded-sm gap-x-">
						<i class='bx bx-sm'></i>
						<p class=" font-light"><span id="time">3:00 PM - 4:00 PM</span>: Tiempo de Amparo</p>
					</li>
					<li class="flex items-center p-3 rounded-sm gap-x-">
						<i class='bx bx-sm'></i>
						<p class=" font-light"><span id="time">4:00 PM - 6:00 PM</span>: Documental</p>
					</li>
					<li class="flex items-center p-3 rounded-sm gap-x-3">
						<i class='bx bx-sm'></i>
						<p class=" font-light"><span id="time">6:00 PM - 8:00 PM</span>: Comentando La Actualidad</p>
					</li>
					<li class="flex items-center p-3 rounded-sm gap-x-3">
						<i class='bx bx-sm'></i>
						<p class=" font-light"><span id="time">8:00 PM</span>: Repetición La Belleza Es Mía</p>
					</li>
					<li class="flex items-center p-3 rounded-sm gap-x-3">
						<i class='bx bx-sm'></i>
						<p class=" font-light"><span id="time">11:00 PM</span>: Programaciones Variadas</p>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- Sección últimas noticias -->
	<section class="mt-12">
		<!-- Noticias -->
		<div class="p-8 md:py-12 md:px-12 bg-lightestGreen w-full space-y-10">
			<div class="w-full max-w-8xl">
				<a href="<?php echo esc_url(get_permalink(get_page_by_path('noticias')));?>">
					<div class="flex items-center justify-between text-2xl  text-brandGreen font-semibold hover:text-darkGreen/80 transition-all transition-duration-150">
						<h2>Noticias Recientes</h2>
					</div>
					<div class="w-full border-b pt-4 border-gray-200"></div>
				</a>
			</div>
			<div class="w-full max-w-8xl flex flex-col gap-y-3 gap-x-8 transition-all transition-duration-150 lg:flex-row">
				<?php foreach ($posts_array as $index => $post) : ?>
					<?php if ( $index == 0 ) : ?>
						<a href="<?php echo esc_url($post['link']); ?>" class="basis-1/2">
							<div class="bg-cover bg-center basis-4/6" style="background-image: url('<?php echo esc_url($post['imagen']); ?>');">
								<div class="flex flex-col justify-end bg-black/50 p-5 h-80 gap-y-5">
									<span class="uppercase w-fit  text-sm text-white pt-2 border-t border-white"><?php echo esc_html($post['categoria']);?></span>
									<h3 class="w-[80%]  text-white text-2xl hover:underline"><?php echo esc_html($post['titulo']); ?></h3>
									<span class=" font-light text-white"><?php echo esc_html($post['autor']);?> • <?php echo esc_html($post['fecha']); ?></span>
								</div>
							</div>
						</a>
					<?php elseif ( $index == 1 ) : ?>
						<a href="<?php echo esc_url($post['link']); ?>" class="basis-1/2">
							<div class="flex flex-col h-80 hover:scale-95 transition-all transition-duration-300">
								<div class="bg-cover bg-center basis-4/6" style="background-image: url('<?php echo esc_url($post['imagen']); ?>');">
								</div>
								<div class="p-5 pl-0 flex flex-col gap-5">
									<span class="uppercase w-fit  text-sm text-brandGreen pt-2 border-t border-brandGreen"><?php echo esc_html($post['categoria']);?></span>
									<h3 class=" font-bold text-darkGreen text-xl md:text-2xl transition-all transition-duration-150 hover:underline"><?php echo esc_html($post['titulo']); ?></h3>
									<span class=" font-light text-black/50"><?php echo esc_html($post['autor']);?> • <?php echo esc_html($post['fecha']); ?></span>
								</div>
							</div>		
						</a>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
			<div class="w-full max-w-8xl lg:mt-0 flex flex-col gap-y-5 gap-x-4 lg:flex-row lg:justify-between">
				<?php foreach ($posts_array as $index => $post) : ?>
					<?php if ( $index == 2 || $index == 4 ) : ?>
						<a href="<?php echo esc_url($post['link']); ?>" class="basis-1/2">
							<div class="border-t border-lightGreen pt-5 flex flex-col gap-y-3 lg:border-none lg:pt-0 hover:scale-95 transition-all transition-duration-300">
								<span class="uppercase  w-fit  text-sm text-brandGreen pt-2 lg:border-t border-brandGreen"><?php echo esc_html($post['categoria']);?></span>
								<h3 class=" font-normal text-black text-lg transition-all transition-duration-300 hover:underline"><?php echo esc_html($post['titulo']); ?></h3>
								<span class=" font-light text-black/50 text-sm"><?php echo esc_html($post['autor']);?> • <?php echo esc_html($post['fecha']); ?></span>
							</div>
						</a>
					<?php endif; ?>
					<?php if ( $index == 3 ) : ?>
						<a href="<?php echo esc_url($post['link']); ?>" class="basis-1/2">
							<div class="border-t border-lightGreen pt-5 flex flex-col gap-y-3 lg:pt-0 lg:border-t-0 lg:border-x lg:px-6 hover:scale-95 transition-all transition-duration-300">
								<span class="uppercase w-fit  text-sm text-brandGreen pt-2 lg:border-t border-brandGreen"><?php echo esc_html($post['categoria']);?></span>
								<h3 class=" font-normal text-black text-lg lg:w-[90%] transition-all transition-duration-300 hover:underline"><?php echo esc_html($post['titulo']); ?></h3>
								<span class=" font-light text-black/50 text-sm"><?php echo esc_html($post['autor']);?> • <?php echo esc_html($post['fecha']); ?></span>
							</div>
						</a>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();

// <?php echo esc_url(get_permalink(get_page_by_path('sobre-nosotros'))); ?> 