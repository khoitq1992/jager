<?php get_header(); ?>

<main class="site-main">
    <?php get_template_part( 'partials/home/page', 'banner' ); ?>

    <?php get_template_part( 'partials/home/page', 'popular' ); ?>

    <?php get_template_part( 'partials/home/page', 'music' ); ?>

    <?php get_template_part( 'partials/home/page', 'detail' ); ?>
</main>

<?php get_footer(); ?>
