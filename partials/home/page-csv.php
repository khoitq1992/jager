<div class="csv-section wrapper">
    <div class="hud-background">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hud.png" alt="">
    </div>
    <div class="container csv-container">
        <h3 class="section-title">CVS DISPLAY PROGRAM</h3>
        <p class="section-subtitle">[DISCRIPTION]</p>
        <div class="swiper csv-slider" style="overflow: visible !important;">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper" style="overflow: visible !important;">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="csv-product">
                        <div class="csv-product-gallery">
                            <div class="csv-product-gallery__item"></div>
                            <div class="csv-product-gallery__item"></div>
                            <div class="csv-product-gallery__item"></div>
                        </div>
                        <div class="csv-product-thumb">
                            <img style="height: auto;" src="<?php echo get_template_directory_uri(); ?>/assets/img/csv-product-1.png" alt="">
                        </div>
                        <div class="csv-product-info">
                            <p class="csv-product-info__title">JAGERMEISTER </p>
                            <p class="csv-product-info__ml">20ML</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="csv-product">
                        <div class="csv-product-gallery">
                            <div class="csv-product-gallery__item"></div>
                            <div class="csv-product-gallery__item"></div>
                            <div class="csv-product-gallery__item"></div>
                        </div>
                        <div class="csv-product-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/csv-product-2.png" alt="">
                        </div>
                        <div class="csv-product-info">
                            <p class="csv-product-info__title">JAGERMEISTER </p>
                            <p class="csv-product-info__ml">200ML</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="csv-product">
                        <div class="csv-product-gallery">
                            <div class="csv-product-gallery__item"></div>
                            <div class="csv-product-gallery__item"></div>
                            <div class="csv-product-gallery__item"></div>
                        </div>
                        <div class="csv-product-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/csv-product-3.png" alt="">
                        </div>
                        <div class="csv-product-info">
                            <p class="csv-product-info__title">JAGERMEISTER </p>
                            <p class="csv-product-info__ml">700ML</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include Swiper JS -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Check if Swiper is loaded
        if (typeof Swiper !== 'undefined') {
            const bannerSwiper = new Swiper('.csv-slider', {
                loop: false,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: true,
                },
                slidesPerView: 1,
                spaceBetween: 16,
                centeredSlides: true,
                // Responsive breakpoints
                breakpoints: {
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 25,
                        centeredSlides: false
                    },
                },
            });
        } else {
            console.error('Swiper not loaded');
        }
    });
</script>