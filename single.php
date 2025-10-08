<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                    
                    <div class="entry-meta">
                        <span class="posted-on">
                            <?php
                            printf(
                                esc_html_x('Posted on %s', 'post date', 'jager'),
                                '<a href="' . esc_url(get_permalink()) . '" rel="bookmark"><time class="entry-date published updated" datetime="' . esc_attr(get_the_date('c')) . '">' . esc_html(get_the_date()) . '</time></a>'
                            );
                            ?>
                        </span>
                        
                        <span class="byline">
                            <?php
                            printf(
                                esc_html_x('by %s', 'post author', 'jager'),
                                '<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
                            );
                            ?>
                        </span>

                        <?php if (has_category()) : ?>
                            <span class="cat-links">
                                <?php
                                printf(
                                    esc_html_x('in %1$s', 'post category', 'jager'),
                                    get_the_category_list(esc_html__(', ', 'jager'))
                                );
                                ?>
                            </span>
                        <?php endif; ?>

                        <?php if (has_tag()) : ?>
                            <span class="tags-links">
                                <?php
                                printf(
                                    esc_html_x('Tagged %1$s', 'post tag', 'jager'),
                                    get_the_tag_list('', esc_html_x(', ', 'list item separator', 'jager'))
                                );
                                ?>
                            </span>
                        <?php endif; ?>
                    </div><!-- .entry-meta -->
                </header><!-- .entry-header -->

                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php
                    the_content(sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                            __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'jager'),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        get_the_title()
                    ));

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'jager'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div><!-- .entry-content -->

                <footer class="entry-footer">
                    <?php
                    edit_post_link(
                        sprintf(
                            wp_kses(
                                /* translators: %s: Name of current post. Only visible to screen readers */
                                __('Edit <span class="screen-reader-text">"%s"</span>', 'jager'),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            get_the_title()
                        ),
                        '<span class="edit-link">',
                        '</span>'
                    );
                    ?>
                </footer><!-- .entry-footer -->
            </article><!-- #post-<?php the_ID(); ?> -->

            <?php jager_post_navigation(); ?>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>

        <?php endwhile; // End of the loop. ?>
    </div><!-- .container -->
</main><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
