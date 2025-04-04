<?php
	$latest_economy_posts = new WP_Query([
		'post_type'      => 'post', // Only posts
		'posts_per_page' => 4,      // 9 posts
		'category_name'  => 'economia', //
	]);

	$posts_array = [];
	$default_image = get_template_directory_uri() . '/resources/img/trn-placeholder.png';

	if ($latest_economy_posts->have_posts()) {
		while ($latest_economy_posts->have_posts()) {
			$latest_economy_posts->the_post();
			
			// Storing each post's data in an array
			$posts_array[] = [
				'titulo'    => wp_trim_words(get_the_title(), 10, '...'),
				'categoria' => !empty(get_the_category()) ? get_the_category()[0]->name : 'Sin categoría',
				'link'      => get_permalink(),
				'imagen'    => get_the_post_thumbnail_url(get_the_ID(), 'medium') ?: $default_image,
				'fecha'     => get_the_date(),
				'autor'     => get_the_author(),
			];
		}
	}

	// Restore original post data
	wp_reset_postdata();
?>

<div class="space-y-12 basis-1/2">
    <div class="w-full">
        <a href="#" class="space-y-5">
			<div class="flex items-center justify-between text-2xl font-anton text-darkGreen hover:text-darkGreen/80 transition-all transition-duration-150 md:text-3xl">
				<h2>Economía</h2>
				<i class='bx bx-link-external bx-sm text-darkGreen transition-all transition-duration-150 hover:text-darkGreen/80'></i>
			</div>
			<div class="w-full border-b border-darkGreen my-2 hover:border-darkGreen/80 transition-all transition-duration-150"></div>
		</a>
	</div>
	<div class="w-full flex flex-col gap-y-3 gap-x-15 transition-all transition-duration-150 md:flex-row-reverse lg:flex-col">
		<div class="basis-1/2">
            <?php foreach ($posts_array as $index => $post) : ?>
                <?php if ( $index == 0 ) : ?>
                    <a href="<?php echo esc_url($post['link']); ?>">
                        <div class="flex gap-y-5 flex-col hover:scale-95 transition-all transition-duration-300">
                            <img src="<?php echo esc_url($post['imagen']); ?>" class="w-full h-auto" alt="">
                            <div class="p-5 pl-0 flex flex-col gap-5">
                                <span class="uppercase w-fit font-hanken text-sm text-brandGreen pt-2 border-t border-brandGreen"><?php echo esc_html($post['categoria']);?></span>
                                <h3 class="font-antonio font-bold text-darkGreen text-xl md:text-2xl transition-all transition-duration-150 hover:underline"><?php echo esc_html($post['titulo']); ?></h3>
                                <span class="font-hanken font-light text-grayTitle"><?php echo esc_html($post['autor']);?> • <?php echo esc_html($post['fecha']); ?></span>
                            </div>
                        </div>		
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <div class="flex flex-col basis-1/2 gap-y-7">
            <?php foreach ($posts_array as $index => $post) : ?>
                <?php if ( $index > 0 ) : ?>
                    <a href="<?php echo esc_url($post['link']); ?>" class="">
                        <div class="border-t border-lightGreen pt-5 flex flex-col gap-y-5 lg:pt-0 lg:border-0 hover:scale-95 transition-all transition-duration-300">
                            <span class="uppercase w-fit font-hanken text-sm text-brandGreen pt-2 lg:border-t border-lightGreen lg:w-full lg:pt-6"><?php echo esc_html($post['categoria']);?></span>
                            <h3 class="font-hanken font-normal text-black text-lg lg:w-[90%] transition-all transition-duration-300 hover:underline"><?php echo esc_html($post['titulo']); ?></h3>
                            <span class="font-hanken font-light text-grayTitle text-sm"><?php echo esc_html($post['autor']);?> • <?php echo esc_html($post['fecha']); ?></span>
                        </div>
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
	</div>
</div>