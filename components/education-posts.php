<!-- Obteniendo las 5 últimas noticias de la página -->
<?php
	$latest_education_posts = new WP_Query([
		'post_type'      => 'post',
		'posts_per_page' => 5, 
        'category_name' => 'educacion'    
	]);

	$posts_array = [];

	$default_image = get_template_directory_uri() . '/resources/img/trn-placeholder.png';

	if ($latest_education_posts->have_posts()) {
		while ($latest_education_posts->have_posts()) {
			$latest_education_posts->the_post();
			
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

<div class="space-y-12">
    <div class="w-full">
        <a href="#" class="space-y-5">
			<div class="flex items-center justify-between text-2xl font-anton text-white hover:text-white/80 transition-all transition-duration-150 md:text-3xl">
				<h2>Educación</h2>
				<i class='bx bx-link-external bx-sm text-white transition-all transition-duration-150 hover:text-white/80'></i>
			</div>
			<div class="w-full border-b border-white my-2 hover:border-white/80 transition-all transition-duration-150"></div>
		</a>
	</div>
	<div class="w-full flex flex-col gap-y-12 gap-x-12 transition-all transition-duration-150 md:flex-row">
		<?php foreach ($posts_array as $index => $post) : ?>
			<?php if ( $index == 0 || $index == 1 ) : ?>
				<a href="<?php echo esc_url($post['link']); ?>" class="basis-1/2">
					<div class="bg-cover bg-center basis-4/6 hover:scale-95 transition-all transition-duration-150" style="background-image: url('<?php echo esc_url($post['imagen']); ?>');">
						<div class="flex flex-col justify-end bg-black/50 p-5 h-96 gap-y-5">
							<span class="uppercase w-fit font-hanken text-sm text-white pt-2 border-t border-white"><?php echo esc_html($post['categoria']);?></span>
							<h3 class="w-[80%] font-anton text-white text-2xl hover:underline"><?php echo esc_html($post['titulo']); ?></h3>
							<span class="font-hanken font-light text-white"><?php echo esc_html($post['autor']);?> • <?php echo esc_html($post['fecha']); ?></span>
						</div>
					</div>
				</a>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
	<div class="w-full lg:mt-0 flex flex-col gap-y-12 gap-x-4 lg:flex-row lg:justify-between">
		<?php foreach ($posts_array as $index => $post) : ?>
			<?php if ( $index == 2) : ?>
				<a href="<?php echo esc_url($post['link']); ?>" class="basis-1/2">
					<div class="border-t border-white/30 pt-5 flex flex-col gap-y-3 lg:border-none lg:pt-0 hover:scale-95 transition-all transition-duration-300">
						<span class="uppercase  w-fit font-hanken text-sm text-white pt-2 lg:border-t border-white/30"><?php echo esc_html($post['categoria']);?></span>
						<h3 class="font-hanken font-normal text-white text-lg transition-all transition-duration-300 hover:underline"><?php echo esc_html($post['titulo']); ?></h3>
						<span class="font-hanken font-light text-white text-sm"><?php echo esc_html($post['autor']);?> • <?php echo esc_html($post['fecha']); ?></span>
					</div>
				</a>
			<?php elseif ( $index == 3 || $index == 4 ) : ?>
				<a href="<?php echo esc_url($post['link']); ?>" class="basis-1/2">
					<div class="border-t border-white/30 pt-5 flex flex-col gap-y-3 lg:pt-0 lg:border-t-0 lg:border-l lg:px-6 hover:scale-95 transition-all transition-duration-300">
						<span class="uppercase w-fit font-hanken text-sm text-white pt-2 lg:border-t border-white/30"><?php echo esc_html($post['categoria']);?></span>
						<h3 class="font-hanken font-normal text-white text-lg lg:w-[90%] transition-all transition-duration-300 hover:underline"><?php echo esc_html($post['titulo']); ?></h3>
						<span class="font-hanken font-light text-white text-sm"><?php echo esc_html($post['autor']);?> • <?php echo esc_html($post['fecha']); ?></span>
					</div>
				</a>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
</div>