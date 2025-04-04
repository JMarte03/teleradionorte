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
    <section class="p-12 bg-darkGreen/70 w-full mx-auto max-w-7xl mt-20">
        <?php include 'components/politics-posts.php'; ?>
    </section>

    <!-- DEPORTES Y ECONOMIA -->
    <section class="flex flex-col gap-15 p-12 w-full mx-auto max-w-7xl mt-7 lg:flex-row">
        <?php include 'components/sports-posts.php'; ?>
        <?php include 'components/economy-posts.php'; ?>
    </section>

    <!-- EDUCACIÓN -->
    <section class="p-12 bg-grayBg/80 w-full mx-auto max-w-7xl mt-7">
        <?php include 'components/education-posts.php'; ?>
    </section>

    <!-- INTERCAMBIOS -->
    <section class="p-12 w-full mx-auto max-w-7xl mt-7">
        <?php include 'components/networking-posts.php'; ?>
    </section>

    <!-- TECNOLOGÍA -->
    <section class="p-12 bg-brandTurquoise/70 w-full mx-auto max-w-7xl mt-7">
        <?php include 'components/tech-posts.php'; ?>
    </section>

     <!-- MÁS TEMAS -->
     <section class="p-12 w-full mx-auto max-w-7xl mt-7">
        <?php include 'components/more-posts.php'; ?>
    </section>
</main>

<?php get_footer(); ?>