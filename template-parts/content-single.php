<?php 
	$content = apply_filters('the_content', get_the_content());
	$images = get_attached_media('image');
	$text = preg_replace('/<img[^>]+>/', '', $content);
	setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'Spanish_Spain', 'es'); 
?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

	<!-- Encabezado y fecha -->
	<header class="entry-header mb-7 space-y-7">
		<h1 class="text-brandGreen text-xl md:text-3xl font-hanken font-bold"><?php the_title(); ?></h1>
		<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w-full rounded-lg" alt="">

		<div class="py-3 font-hanken italic font-light text-sm text-grayTitle/70 border-b border-grayTitle/20">
			<span class="mr-1"><?php echo get_the_author(); ?></span>
			• 
			<span class="ml-1"><time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished"><?php echo strftime('%d de %B de %Y', get_the_time('U')); ?></time></span> 
		</div>
	</header>



	<!-- Texto -->
	<div class="space-y-6 font-hanken mb-15"><?php echo $text; ?></div>
	
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
