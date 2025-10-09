<div data-aos="fade-right" class="limited-section wrapper">
    <div class="container limited-container">
        <div class="limited-background">
            <img class="hud-background" src="<?php echo get_template_directory_uri(); ?>/assets/img/hud.png" alt="">
            <img class="text-background" src="<?php echo get_template_directory_uri(); ?>/assets/img/limited-bg.png" alt="">
        </div>
        <div class="limited-content">
            <div class="product-gallery">
                <div class="product-gallery-thumb">
                    <img src="" alt="">
                </div>
                <div class="swiper product-gallery-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/limited-item-1.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/limited-item-2.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/limited-item-3.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="limited-content-text">
                <p class="title">LIMITED EDITION<br>
                    VERSION 4.0</p>
                <p class="description">[DISCRIPTION]</p>
            </div>
        </div>
    </div>
</div>

<!-- Include Swiper JS -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Check if Swiper is loaded
        if (typeof Swiper !== 'undefined') {
            const bannerSwiper = new Swiper('.product-gallery-slider', {
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: true,
                },
                slidesPerView: 4,
                spaceBetween: 8,
                // pagination
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                // Responsive breakpoints
                breakpoints: {
                    640: {
                        spaceBetween: 8,
                        centeredSlides: false
                    },
                    768: {
                        spaceBetween: 16,
                        centeredSlides: false
                    },
                    960: {
                        spaceBetween: 24,
                        centeredSlides: false
                    }
                },
            });
        } else {
            console.error('Swiper not loaded');
        }
    });
</script>

