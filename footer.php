<footer id="colophon" class="site-footer">
        <div class="container">
            <?php if (is_active_sidebar('footer-1')) : ?>
                <div class="footer-widgets">
                    <?php dynamic_sidebar('footer-1'); ?>
                </div>
            <?php endif; ?>
            
            <div class="footer-content">
                <div class="site-info">
                    <?php
                    $footer_text = get_theme_mod('jager_footer_text', 'Copyright © ' . date('Y') . ' Your Site Name');
                    echo esc_html($footer_text);
                    ?>
                    <?php
                    /* translators: 1: Theme name, 2: Theme author. */
                    printf(esc_html__(' | Powered by %1$s theme by %2$s.', 'jager'), 'Jager', '<a href="#">Your Name</a>');
                    ?>
                </div><!-- .site-info -->
                
                <?php if (has_nav_menu('footer')) : ?>
                    <nav class="footer-navigation">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'menu_id'        => 'footer-menu',
                            'depth'          => 1,
                        ));
                        ?>
                    </nav><!-- .footer-navigation -->
                <?php endif; ?>
            </div><!-- .footer-content -->
        </div><!-- .container -->
    </footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
