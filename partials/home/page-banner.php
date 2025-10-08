<div class="banner-section wrapper">
    <div class="container">
        <!-- Slider main container -->
        <div class="swiper banner-slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-1.png" alt="Slide 1">
                    <div class="slide-content">
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-2.png" alt="Slide 2">
                    <div class="slide-content">
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-content">
            <h3 class="banner-title">
                BE READY FOR<br>
                #BESTDRINKS</h3>
            <p class="banner-text">
                Experience the best of nightlife with JÄGERMEISTER<br>
                The legend begins here.</p>
        </div>
    </div>
</div>

<!-- Include Swiper JS -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Check if Swiper is loaded
        if (typeof Swiper !== 'undefined') {
            const bannerSwiper = new Swiper('.banner-slider', {
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
            });
        } else {
            console.error('Swiper not loaded');
        }
    });
</script>