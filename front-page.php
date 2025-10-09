<?php get_header(); ?>

<main class="site-main">
    <?php get_template_part( 'partials/home/page', 'banner' ); ?>

    <?php get_template_part( 'partials/home/page', 'popular' ); ?>

    <?php get_template_part( 'partials/home/page', 'music' ); ?>

    <?php get_template_part( 'partials/home/page', 'detail' ); ?>

    <?php get_template_part( 'partials/home/page', 'video' ); ?>

    <?php get_template_part( 'partials/home/page', 'overall' ); ?>

    <?php get_template_part( 'partials/home/page', 'perfect' ); ?>

    <?php get_template_part( 'partials/home/page', 'feature-event' ); ?>

    <?php get_template_part( 'partials/home/page', 'csv' ); ?>

    <?php get_template_part( 'partials/home/page', 'shopping' ); ?>
</main>

<?php get_footer(); ?>
