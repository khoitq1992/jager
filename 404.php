<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'jager'); ?></h1>
            </header><!-- .page-header -->

            <div class="page-content">
                <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'jager'); ?></p>

                <?php get_search_form(); ?>

                <div class="widget-area">
                    <div class="widget">
                        <h3 class="widget-title"><?php esc_html_e('Most Used Categories', 'jager'); ?></h3>
                        <ul>
                            <?php
                            wp_list_categories(array(
                                'orderby'    => 'count',
                                'order'      => 'DESC',
                                'show_count' => 1,
                                'title_li'   => '',
                                'number'     => 10,
                            ));
                            ?>
                        </ul>
                    </div><!-- .widget -->

                    <div class="widget">
                        <h3 class="widget-title"><?php esc_html_e('Recent Posts', 'jager'); ?></h3>
                        <ul>
                            <?php
                            $recent_posts = wp_get_recent_posts(array(
                                'numberposts' => 5,
                                'post_status' => 'publish'
                            ));
                            foreach ($recent_posts as $recent) :
                                ?>
                                <li>
                                    <a href="<?php echo get_permalink($recent['ID']); ?>">
                                        <?php echo esc_html($recent['post_title']); ?>
                                    </a>
                                </li>
                            <?php endforeach; wp_reset_query(); ?>
                        </ul>
                    </div><!-- .widget -->

                    <div class="widget">
                        <h3 class="widget-title"><?php esc_html_e('Archives', 'jager'); ?></h3>
                        <ul>
                            <?php wp_get_archives(array('type' => 'monthly')); ?>
                        </ul>
                    </div><!-- .widget -->

                    <div class="widget">
                        <h3 class="widget-title"><?php esc_html_e('Tag Cloud', 'jager'); ?></h3>
                        <?php wp_tag_cloud(array('smallest' => 8, 'largest' => 22)); ?>
                    </div><!-- .widget -->
                </div><!-- .widget-area -->
            </div><!-- .page-content -->
        </section><!-- .error-404 -->
    </div><!-- .container -->
</main><!-- #main -->

<?php get_footer(); ?>
