<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e('Skip to content', 'jager'); ?></a>

    <header id="masthead" class="site-header">
        <div class="container flex justify-between align-center">
            <div class="site-branding">
                <?php
                the_custom_logo();
                ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <div class="menu-toggle"></div>
                <ul class="menu-nav">
                    <li><a class="nav-link" href="#jager-music">
                        <span class="nav-link--title">JÄGER MUSIC</span>
                        <span class="nav-link--subtitle">EVENTS</span>
                    </a></li>
                    <li><a class="nav-link" href="#bi-exploration">
                        <span class="nav-link--title">B.I. EXPLORATION</span>
                        <span class="nav-link--subtitle">CVS PROGRAM</span>
                    </a></li>
                    <li><a class="nav-link" href="#csv-program">
                        <span class="nav-link--title">CVS PROGRAM</span>
                    </a></li>
                </ul>
            </nav><!-- #site-navigation -->
        </div><!-- .container -->
    </header><!-- #masthead -->

    <?php if (get_header_image()) : ?>
        <div class="custom-header">
            <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
        </div>
    <?php endif; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuToggle = document.querySelector('.menu-toggle');
            const menuNav = document.querySelector('.menu-nav');
            const body = document.body;
            const menuLink = document.querySelectorAll('.nav-link');

            menuToggle.addEventListener('click', function (e) {
                e.stopPropagation();
                body.classList.toggle('menu-open');
            });

            menuLink.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.stopPropagation();
                    body.classList.remove('menu-open');
                });
            });

            menuNav.addEventListener('click', function (e) {
                e.stopPropagation();
            });

            document.addEventListener('click', function () {
                body.classList.remove('menu-open');
            });
        });
    </script>
