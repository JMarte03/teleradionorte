<?php 
	$content = apply_filters('the_content', get_the_content());
	$images = get_attached_media('image');
	$text = preg_replace('/<img[^>]+>/', '', $content);
	setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'Spanish_Spain', 'es'); 
?>

<!-- Obteniendo 6 noticias de forma aleatoria -->
<?php
	$rand_posts = new WP_Query([
		'post_type' => 'post', // Solamente posts
		'posts_per_page' => 8, // 5 posts
		'orderby' => 'rand' // Orden aleatorio
	]);

	$posts_array = [];

	if ($rand_posts->have_posts()) {
		while ($rand_posts->have_posts()) {
			$rand_posts->the_post();
			
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

<h1 class="text-softGreen mb-10 text-xl md:text-3xl font-encodeSans font-semibold"><?php the_title(); ?></h1>

<main class="flex flex-col gap-15 lg:flex-row">
	<article class="basis-3/5" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	
		<!-- Encabezado y fecha -->
		<header class="entry-header mb-7 space-y-7">
			<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w-full rounded-lg" alt="">
	
			<div class="py-3 font-encodeSans italic font-light text-sm text-grayTitle/70 border-b border-grayTitle/20">
				<span class="mr-1"><?php echo get_the_author(); ?></span>
				• 
				<span class="ml-1"><time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished"><?php echo strftime('%d de %B de %Y', get_the_time('U')); ?></time></span> 
			</div>
		</header>
	
	
	
		<!-- Texto -->
		<div class="space-y-6 font-encodeSans text-sm mb-15 leading-8"><?php echo $text; ?></div>
		
		<!-- Images carousel -->
		<section>
			<?php if ($images): ?>
				<div class="carousel w-full">
					<?php $count = 1; ?>
					<?php foreach ($images as $image): ?>
						<div id="slide<?php echo $count; ?>" class="carousel-item relative w-full">
							<img src="<?php echo wp_get_attachment_url($image->ID); ?>" 
								alt="<?php echo get_post_meta($image->ID, '_wp_attachment_image_alt', true); ?>" 
								class="w-full h-[300px] object-contain rounded-sm bg-stone-100/50">
	
							<div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
								<a href="#slide<?php echo ($count == 1) ? count($images) : $count - 1; ?>" class="btn btn-circle">❮</a>
								<a href="#slide<?php echo ($count == count($images)) ? 1 : $count + 1; ?>" class="btn btn-circle">❯</a>
							</div>
						</div>
						<?php $count++; ?>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
	
		</section>
	
	</article>
	<aside class="basis-2/5 space-y-7">
		<h2 class="cursor-pointer text-2xl font-encodeSans font-semibold text-darkGreen hover:text-darkGreen/80 transition-all transition-duration-150"><a href="<?php echo esc_url(get_permalink(get_page_by_path('noticias')));?>">Más Noticias</a></h2>
		<div class="flex flex-col gap-x-10 flex-wrap md:flex-row lg:flex-col">
			<?php foreach ($posts_array as $index => $post) : ?>
				<a href="<?php echo esc_url($post['link']); ?>" class="basis-[45%]">
					<div class="cursor-pointer border-t border-lightGreen py-5 flex flex-col gap-y-3 transition-all transition-duration-300">
						<span class="uppercase w-fit font-encodeSans text-xs text-brandGreen pt-2 lg:border-t border-brandGreen"><?php echo esc_html($post['categoria']);?></span>
						<h3 class="font-encodeSans font-normal text-black text-md lg:w-[90%] transition-all transition-duration-300 hover:underline"><?php echo esc_html($post['titulo']); ?></h3>
						<span class="font-encodeSans font-light text-black/50 text-sm"><?php echo esc_html($post['autor']);?> • <?php echo esc_html($post['fecha']); ?></span>
					</div>
				</a>
			<?php endforeach; ?>
		</div>
	</aside>
</main>
