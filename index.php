<?php get_header(); ?>

<!-- Obteniendo las 5 últimas noticias de la página -->
<?php
	$latest_posts = new WP_Query([
		'post_type'      => 'post', // Solamente posts
		'posts_per_page' => 5,      // 5 posts
	]);

	$posts_array = [];

	if ($latest_posts->have_posts()) {
		while ($latest_posts->have_posts()) {
			$latest_posts->the_post();
			
			// Almacenando los datos de cada noticia (post) en un array
			$posts_array[] = [
				'titulo'   => wp_trim_words(get_the_title(), 10, '...'),
				'categoria' => !empty(get_the_category()) ? get_the_category()[0]->name : 'Sin categoría',
				'link'    => get_permalink(),
				'imagen'   => get_the_post_thumbnail_url(get_the_ID(), 'medium'),
				'fecha'    => get_the_date(),
				'autor' => get_the_author(),
			];
		}
	}

	// Restaurar los datos del post
	wp_reset_postdata();
?>

<main class="pb-8 px-12 bg-white">
	<!-- Sección programa -->
	<section>
		<div class="ctn bg-white z-10">
			<video id="player" controls crossorigin playsinline class="relative aspect-video max-h-96 bg-stone-100 py-6">
				<source src="https://angelistic.live:3785/hybrid/play.m3u8" type="application/vnd.apple.mpegurl">
				<a>Video Oynatılamıyor</a>
			</video>
		</div>
		<div class="mt-10">
			<!-- title -->
			<a href="<?php echo esc_url(get_permalink(get_page_by_path('programa')));?>" class="flex items-center justify-between font-anton text-2xl text-darkGreen hover:text-darkGreen/80 transition-all transition-duration-150 md:text-3xl">
				<h2>Programación de Hoy</h2>
				<i class='bx bx-link-external bx-sm text-darkGreen transition-all transition-duration-150 hover:text-darkGreen/80'></i>
			</a>
			<!-- divider -->
			<div class="w-full border-b border-b-darkGreen my-2"></div>
			<!-- descripción -->
			<div id="programa-hoy" class="mt-8 w-full">
				<ul class="space-y-2">
					<li class="flex items-center p-3 rounded-sm gap-x-3">
						<i class='bx bx-sm'></i>
						<p class="font-hanken font-light"><span id="time">7:00 AM - 9:00 AM</span>: Amaneciendo TRN</p>
					</li>
					<li class="flex items-center p-3 rounded-sm gap-x-3">
						<i class='bx bx-sm'></i>
						<p class="font-hanken font-light"><span id="time">9:00 AM - 12:00 PM</span>: Documental</p>
					</li>
					<li class="flex items-center p-3 rounded-sm gap-x-3">
						<i class='bx bx-sm'></i>
						<p class="font-hanken font-light"><span id="time">12:00 PM - 1:00 PM</span>: La Belleza Es Mía</p>
					</li>
					<li class="flex items-center p-3 rounded-sm gap-x-3">
						<i class='bx bx-sm'></i>
						<p class="font-hanken font-light"><span id="time">1:00 PM - 3:00 PM</span>: Documental</p>
					</li>
					<li class="flex items-center p-3 rounded-sm gap-x-">
						<i class='bx bx-sm'></i>
						<p class="font-hanken font-light"><span id="time">3:00 PM - 4:00 PM</span>: Tiempo de Amparo</p>
					</li>
					<li class="flex items-center p-3 rounded-sm gap-x-">
						<i class='bx bx-sm'></i>
						<p class="font-hanken font-light"><span id="time">4:00 PM - 6:00 PM</span>: Documental</p>
					</li>
					<li class="flex items-center p-3 rounded-sm gap-x-3">
						<i class='bx bx-sm'></i>
						<p class="font-hanken font-light"><span id="time">6:00 PM - 8:00 PM</span>: Comentando La Actualidad</p>
					</li>
					<li class="flex items-center p-3 rounded-sm gap-x-3">
						<i class='bx bx-sm'></i>
						<p class="font-hanken font-light"><span id="time">8:00 PM</span>: Repetición La Belleza Es Mía</p>
					</li>
					<li class="flex items-center p-3 rounded-sm gap-x-3">
						<i class='bx bx-sm'></i>
						<p class="font-hanken font-light"><span id="time">11:00 PM</span>: Programaciones Variadas</p>
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
					<div class="flex items-center justify-between text-2xl font-anton text-darkGreen hover:text-darkGreen/80 transition-all transition-duration-150 md:text-3xl">
						<h2>Noticias Recientes</h2>
						<i class='bx bx-link-external bx-sm text-darkGreen transition-all transition-duration-150 hover:text-darkGreen/80'></i>
					</div>
					<div class="w-full border-b border-brandGreen my-2 hover:border-green-600 transition-all transition-duration-150"></div>
				</a>
			</div>
			<div class="w-full max-w-8xl flex flex-col gap-y-3 gap-x-8 transition-all transition-duration-150 lg:flex-row">
				<?php foreach ($posts_array as $index => $post) : ?>
					<?php if ( $index == 0 ) : ?>
						<a href="<?php echo esc_url($post['link']); ?>" class="basis-1/2">
							<div class="bg-cover bg-center basis-4/6" style="background-image: url('<?php echo esc_url($post['imagen']); ?>');">
								<div class="flex flex-col justify-end bg-black/50 p-5 h-80 gap-y-5">
									<span class="uppercase w-fit font-hanken text-sm text-white pt-2 border-t border-white"><?php echo esc_html($post['categoria']);?></span>
									<h3 class="w-[80%] font-anton text-white text-2xl hover:underline"><?php echo esc_html($post['titulo']); ?></h3>
									<span class="font-hanken font-light text-white"><?php echo esc_html($post['autor']);?> • <?php echo esc_html($post['fecha']); ?></span>
								</div>
							</div>
						</a>
					<?php elseif ( $index == 1 ) : ?>
						<a href="<?php echo esc_url($post['link']); ?>" class="basis-1/2">
							<div class="flex flex-col h-80 hover:scale-95 transition-all transition-duration-300">
								<div class="bg-cover bg-center basis-4/6" style="background-image: url('<?php echo esc_url($post['imagen']); ?>');">
								</div>
								<div class="p-5 pl-0 flex flex-col gap-5">
									<span class="uppercase w-fit font-hanken text-sm text-brandGreen pt-2 border-t border-brandGreen"><?php echo esc_html($post['categoria']);?></span>
									<h3 class="font-antonio font-bold text-darkGreen text-xl md:text-2xl transition-all transition-duration-150 hover:underline"><?php echo esc_html($post['titulo']); ?></h3>
									<span class="font-hanken font-light text-black/50"><?php echo esc_html($post['autor']);?> • <?php echo esc_html($post['fecha']); ?></span>
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
								<span class="uppercase  w-fit font-hanken text-sm text-brandGreen pt-2 lg:border-t border-brandGreen"><?php echo esc_html($post['categoria']);?></span>
								<h3 class="font-hanken font-normal text-black text-lg transition-all transition-duration-300 hover:underline"><?php echo esc_html($post['titulo']); ?></h3>
								<span class="font-hanken font-light text-black/50 text-sm"><?php echo esc_html($post['autor']);?> • <?php echo esc_html($post['fecha']); ?></span>
							</div>
						</a>
					<?php endif; ?>
					<?php if ( $index == 3 ) : ?>
						<a href="<?php echo esc_url($post['link']); ?>" class="basis-1/2">
							<div class="border-t border-lightGreen pt-5 flex flex-col gap-y-3 lg:pt-0 lg:border-t-0 lg:border-x lg:px-6 hover:scale-95 transition-all transition-duration-300">
								<span class="uppercase w-fit font-hanken text-sm text-brandGreen pt-2 lg:border-t border-brandGreen"><?php echo esc_html($post['categoria']);?></span>
								<h3 class="font-hanken font-normal text-black text-lg lg:w-[90%] transition-all transition-duration-300 hover:underline"><?php echo esc_html($post['titulo']); ?></h3>
								<span class="font-hanken font-light text-black/50 text-sm"><?php echo esc_html($post['autor']);?> • <?php echo esc_html($post['fecha']); ?></span>
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