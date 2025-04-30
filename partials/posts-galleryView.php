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