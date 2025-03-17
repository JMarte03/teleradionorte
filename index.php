<?php get_header(); ?>

<!-- Obteniendo las 5 últimas noticias de la página -->
<?php
	$latest_posts = new WP_Query([
		'post_type'      => 'post', // Solmente posts
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
		<div class="ctn relative z-10">
			<video id="player" controls crossorigin playsinline class="relative aspect-video max-h-96">
				<source src="https://angelistic.live:3785/hybrid/play.m3u8" type="application/vnd.apple.mpegurl">
				<a>Video Oynatılamıyor</a>
			</video>
		</div>
		<div class="mt-8">
			<!-- title -->
			<a href="<?php echo esc_url(get_permalink(get_page_by_path('programa')));?>" class="flex items-center justify-between text-2xl font-anton text-darkGreen hover:text-brandGreen transition-all transition-duration-150">
				<h2>Programa</h2>
				<i class='bx bx-link-external bx-sm text-darkGreen transition-all transition-duration-150 hover:text-brandGreen'></i>
			</a>
			<!-- divider -->
			<div class="w-full border-b border-b-darkGreen my-2"></div>
			<!-- descripción -->
			<div class="mt-8 w-full">
				<ul class="w-full space-y-3">
					<li class="flex w-full">
						<div class="inline-flex items-center p-4 w-28 bg-lightGreen rounded-l-md text-center text-brandGreen font-hanken font-medium">8:00 A.M</div>
						<div class="p-4 w-[90%] bg-lightestGreen rounded-r-md text-black font-hanken font-light">Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</div>
					</li>
					<li class="flex w-full">
						<div class="inline-flex items-center p-4 w-28 bg-lightGreen rounded-l-md text-center text-brandGreen font-hanken font-medium">9:00 A.M</div>
						<div class="p-4 w-[90%] bg-lightestGreen rounded-r-md text-black font-hanken font-light">Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</div>
					</li>
					<li class="flex w-full">
						<div class="inline-flex items-center p-4 w-28 bg-lightGreen rounded-l-md text-center text-brandGreen font-hanken font-medium">10:00 A.M</div>
						<div class="p-4 w-[90%] bg-lightestGreen rounded-r-md text-black font-hanken font-light">Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</div>
					</li>
					<li class="flex w-full">
						<div class="inline-flex items-center p-4 w-28 bg-lightGreen rounded-l-md text-center text-brandGreen font-hanken font-medium">11:00 A.M</div>
						<div class="p-4 w-[90%] bg-lightestGreen rounded-r-md text-black font-hanken font-light">Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</div>
					</li>
					<li class="flex w-full">
						<div class="inline-flex items-center p-4 w-28 bg-lightGreen rounded-l-md text-center text-brandGreen font-hanken font-medium">12:00 p.M</div>
						<div class="p-4 w-[90%] bg-lightestGreen rounded-r-md text-black font-hanken font-light">Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</div>
					</li>
				</ul>
				
			</div>
		</div>
	</section>
	<!-- Sección últimas noticias -->
	<section class="mt-12">
		<!-- Noticias -->
		<div class="p-4 md:py-12 md:px-20 bg-lightestGreen w-full space-y-10">
			<div class="w-full mx-auto max-w-6xl">
				<a href="<?php echo esc_url(get_permalink(get_page_by_path('noticias')));?>" class="flex items-center justify-between text-2xl font-anton text-darkGreen hover:text-brandGreen transition-all transition-duration-150">
					<h2>Noticias Recientes</h2>
					<i class='bx bx-link-external bx-sm text-darkGreen transition-all transition-duration-150 hover:text-brandGreen'></i>
				</a>
				<div class="w-full border-b border-b-darkGreen my-2"></div>
			</div>
			<div class="w-full mx-auto max-w-6xl flex flex-col gap-y-3 gap-x-8 lg:flex-row">
				<?php foreach ($posts_array as $index => $post) : ?>
					<?php if ( $index == 0 ) : ?>
						<a href="<?php echo esc_url($post['link']); ?>" class="basis-1/2">
							<div class="bg-cover bg-center" style="background-image: url('<?php echo esc_url($post['imagen']); ?>');">
								<div class="flex flex-col justify-end bg-black/50 p-5 h-80 gap-y-3">
									<span class="uppercase w-fit font-hanken font-light text-sm text-white pt-2 border-t border-white"><?php echo esc_html($post['categoria']);?></span>
									<h3 class="w-[80%] font-anton text-white text-2xl"><?php echo esc_html($post['titulo']); ?></h3>
									<span class="font-hanken font-light text-white"><?php echo esc_html($post['autor']);?> • <?php echo esc_html($post['fecha']); ?></span>
								</div>
							</div>
						</a>
					<?php elseif ( $index == 1 ) : ?>
						<a href="<?php echo esc_url($post['link']); ?>" class="basis-1/2">
							<div class="flex flex-col h-80">
								<div class="bg-cover bg-center basis-4/6" style="background-image: url('<?php echo esc_url($post['imagen']); ?>');">
								</div>
								<div class="p-5 pl-0 flex flex-col gap-3">
									<span class="uppercase w-fit font-hanken font-light text-sm text-brandGreen pt-2 border-t border-brandGreen"><?php echo esc_html($post['categoria']);?></span>
									<h3 class="font-hanken font-bold text-black/70 text-xl"><?php echo esc_html($post['titulo']); ?></h3>
									<span class="font-hanken font-light text-black/50"><?php echo esc_html($post['autor']);?> • <?php echo esc_html($post['fecha']); ?></span>
								</div>
							</div>		
						</a>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
			<div class="w-full mx-auto max-w-6xl lg:mt-0 flex flex-col gap-y-5 gap-x-4 lg:flex-row lg:justify-between">
				<?php foreach ($posts_array as $index => $post) : ?>
					<?php if ( $index == 2 || $index == 4 ) : ?>
						<a href="<?php echo esc_url($post['link']); ?>" class="basis-1/2">
							<div class=" border-t border-lightGreen pt-5 flex flex-col gap-y-3 lg:border-none lg:pt-0">
								<span class="uppercase  w-fit font-hanken text-sm text-brandGreen pt-2 lg:border-t border-brandGreen"><?php echo esc_html($post['categoria']);?></span>
								<h3 class="font-hanken font-normal text-black text-lg"><?php echo esc_html($post['titulo']); ?></h3>
								<span class="font-hanken font-light text-black/50 text-sm"><?php echo esc_html($post['autor']);?> • <?php echo esc_html($post['fecha']); ?></span>
							</div>
						</a>
					<?php endif; ?>
					<?php if ( $index == 3 ) : ?>
						<a href="<?php echo esc_url($post['link']); ?>" class="basis-1/2">
							<div class="border-t border-lightGreen pt-5 flex flex-col gap-y-3 lg:pt-0 lg:border-t-0 lg:border-x lg:px-6">
								<span class="uppercase w-fit font-hanken text-sm text-brandGreen pt-2 lg:border-t border-brandGreen"><?php echo esc_html($post['categoria']);?></span>
								<h3 class="font-hanken font-normal text-black text-lg lg:w-[90%]"><?php echo esc_html($post['titulo']); ?></h3>
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