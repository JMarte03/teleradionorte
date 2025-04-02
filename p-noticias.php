<?php
/**
 * Template Name: Noticias
 */
get_header();
?>



<main class="bg-white">
    <!-- NOTICIAS RECIENTES -->
    <section class="px-12 w-full mx-auto max-w-7xl mt-7">
        <?php include 'components/recent-posts.php'; ?>
    </section>

    <!-- POLITICA -->
    <section class="p-12 bg-darkGreen w-full mx-auto max-w-7xl mt-20">
        <?php include 'components/politics-posts.php'; ?>
    </section>
</main>

<?php get_footer(); ?>