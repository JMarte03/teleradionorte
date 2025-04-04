<?php
    // Get the category IDs of the excluded categories
    $excluded_categories = get_categories([
        'slug'   => ['tecnologia', 'politica', 'intercambios', 'educacion', 'deportes', 'economia'],
        'fields' => 'ids', // Get only the IDs
    ]);

    // Fetch latest posts excluding the specified categories
    $latest_posts = new WP_Query([
        'post_type'      => 'post',
        'posts_per_page' => 6,
        'category__not_in' => $excluded_categories, // Exclude categories
    ]);

    $posts_array = [];
    $default_image = get_template_directory_uri() . '/resources/img/trn-placeholder.png';

    if ($latest_posts->have_posts()) {
        while ($latest_posts->have_posts()) {
            $latest_posts->the_post();
            
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

<div class="space-y-7">
    <div class="w-full space-y-5">
        <a href="#" class="space-y-5">
			<div class="flex items-center justify-between text-2xl font-anton text-darkGreen hover:text-darkGreen/80 transition-all transition-duration-150 md:text-3xl">
				<h2>Otros Temas</h2>
				<i class='bx bx-link-external bx-sm text-darkGreen transition-all transition-duration-150 hover:text-darkGreen/80'></i>
			</div>
			<div class="w-full border-b border-darkGreen my-2 hover:border-darkGreen/80 transition-all transition-duration-150"></div>
		</a>
	</div>
	<div class="w-full overflow-x-scroll overflow-y-visible flex flex-col gap-y-8 gap-x-8 transition-all transition-duration-150 md:flex-row">
		<?php foreach ($posts_array as $index => $post) : ?>
				<a href="<?php echo esc_url($post['link']); ?>" class="w-[400px] flex-shrink-0">
					<div class="bg-cover bg-center basis-4/6 hover:scale-95 transition-all transition-duration-150" style="background-image: url('<?php echo esc_url($post['imagen']); ?>');">
						<div class="flex flex-col justify-end bg-black/50 p-5 h-80 gap-y-5">
							<span class="uppercase w-fit font-hanken text-xs text-white pt-2 border-t border-white"><?php echo esc_html($post['categoria']);?></span>
							<h3 class="w-[80%] font-hanken font-bold text-white text-xl hover:underline"><?php echo esc_html($post['titulo']); ?></h3>
							<span class="font-hanken font-light text-white"><?php echo esc_html($post['autor']);?> • <?php echo esc_html($post['fecha']); ?></span>
						</div>
					</div>
				</a>	
		<?php endforeach; ?>
	</div>

</div>

<!-- class=" -->