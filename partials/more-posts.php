<?php
    // Get the category IDs of the excluded categories
    $excluded_categories = get_categories([
        'slug'   => ['politica', 'intercambios', 'educacion', 'deportes', 'economia'],
        'fields' => 'ids', // Get only the IDs
    ]);

    // Fetch latest posts excluding the specified categories
    $latest_posts = new WP_Query([
        'post_type'      => 'post',
        'posts_per_page' => 5,
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
                'desc'   => wp_trim_words(get_the_content(), 10, '...'),
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

<?php include 'posts-scrollView.php'; ?>