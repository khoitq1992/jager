<?php get_header(); ?>

<main class="site-main">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h2 class="entry-title">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div class="entry-meta">
                            <span class="posted-on">
                                Posted on <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                            </span>
                            <span class="byline">
                                by <span class="author"><?php the_author(); ?></span>
                            </span>
                            <?php if (has_category()) : ?>
                                <span class="cat-links">
                                    in <?php the_category(', '); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    </header>

                    <div class="entry-content">
                        <?php 
                        if (is_single()) {
                            the_content();
                        } else {
                            the_excerpt();
                        }
                        ?>
                    </div>

                    <?php if (!is_single()) : ?>
                        <footer class="entry-footer">
                            <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                        </footer>
                    <?php endif; ?>
                </article>
            <?php endwhile; ?>

            <div class="pagination">
                <?php
                the_posts_pagination(array(
                    'prev_text' => __('Previous'),
                    'next_text' => __('Next'),
                ));
                ?>
            </div>

        <?php else : ?>
            <div class="no-posts">
                <h2>No Posts Found</h2>
                <p>Sorry, no posts were found. Try searching for something else.</p>
                <?php get_search_form(); ?>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
