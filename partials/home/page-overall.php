<div id="bi-exploration" class="overall-section wrapper">
    <div class="hud-background">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hud.png" alt="">
    </div>
    <div class="container overall-container">
        <div class="prost-background">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/prost.png" alt="">
        </div>
        <div class="prost-background-sp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/prost-mobile.png" alt="">
        </div>
        <div class="overall">
            <h3>OVERALL</h3>
            <div class="overall-list" data-aos="fade-up">
                <!-- Additional required wrapper -->
                <div class="overall-item overall-item--first" >
                    <img class="overall-thumb" src="<?php echo get_template_directory_uri(); ?>/assets/img/overall-slide-1.png" alt="">
                    <img class="overall-thumb-sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/overall-slide-1-sp.png" alt="">
                    <div class="overall-item-content">
                        <p class="overall-item-title">ICONIC<br> JÄGERMEISTER</p>
                        <p class="overall-item-text">“Since the 1950s, Jägermeister
                        has been known for unique
                        campaigns and experiences.
                        Discover standout moments
                        as we explore nightlife, create
                        art spaces, and celebrate those
                        who make it all possible. Stay
                        tuned for more!”
                        </p>
                    </div>
                </div>
                <div class="overall-item overall-item--second" >
                    <div class="gallery">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/overall-slide-21.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/overall-slide-22.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/overall-slide-23.png" alt="">
                    </div>
                    <div class="gallery-sp">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/overall-slide-21-sp.png" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/overall-slide-22-sp.png" alt="">
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/overall-slide-23-sp.png" alt="">
                    </div>
                    <div class="overall-item-content">
                        <p class="overall-item-title">ICONIC<br> JÄGERMEISTER</p>
                        <p class="overall-item-text">“Since the 1950s, Jägermeister
                        has been known for unique
                        campaigns and experiences.
                        Discover standout moments
                        as we explore nightlife, create
                        art spaces, and celebrate those
                        who make it all possible. Stay
                        tuned for more!”
                        </p>
                    </div>
                </div>
                <div class="overall-item overall-item--third" >
                    <img class="overall-thumb" src="<?php echo get_template_directory_uri(); ?>/assets/img/overall-slide-3.png" alt="">
                    <img class="overall-thumb-sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/overall-slide-3-sp.png" alt="">
                    <div class="overall-item-content">
                        <p class="overall-item-title">BEST<br> NIGHTS</p>
                        <p class="overall-item-text">The Jägermeister Best Nights series is a signature event that fuses music,
                                nightlife, and bold experiences — where people connect over ice-cold shots, 
                                dynamic performances, and a vibrant atmosphere.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="campaign">
            <div class="campaign-left">
                <img class="campaign-bray" data-aos="flip-right" src="<?php echo get_template_directory_uri(); ?>/assets/img/campaign-bray.png" alt="">
                <img class="campaign-bray-sp" data-aos="flip-right" src="<?php echo get_template_directory_uri(); ?>/assets/img/campaign-bray-sp.png" alt="">
                <div>
                    <img data-aos="flip-left" src="<?php echo get_template_directory_uri(); ?>/assets/img/campaign-jager-music.png" alt="">
                    <img data-aos="flip-left" src="<?php echo get_template_directory_uri(); ?>/assets/img/campaign-gift.png" alt="">
                </div>
            </div>
            <div class="campaign-right">
                <h3 class="feature-text">FEATURED CAMPAIGN</h3>
                <p class="description-text">[DISCRIPTION]</p>
                <div class="detail-button" data-aos="fade-left">DETAILS MORE</div>
            </div>
        </div>
    </div>
</div>

<!-- Include Swiper JS -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Check if Swiper is loaded
        if (typeof Swiper !== 'undefined') {
            const bannerSwiper = new Swiper('.overall-slider', {
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: true,
                },
                slidesPerView: 2,
                spaceBetween: 12,
                centeredSlides: false,
                // Responsive breakpoints
                breakpoints: {
                    780: {
                        slidesPerView: 3,
                        spaceBetween: 24,
                        centeredSlides: false
                    },
                },
            });
        } else {
            console.error('Swiper not loaded');
        }
    });
</script>
