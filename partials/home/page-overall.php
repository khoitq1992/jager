<div class="overall-section wrapper">
    <div class="hud-background">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hud.png" alt="">
    </div>
    <div class="container overall-container">
        <div class="prost-background">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/prost.png" alt="">
        </div>
        <div class="overall">
            <h3>OVERALL</h3>
            <!-- Slider main container -->
            <div class="swiper overall-slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="slide-content overall-item overall-item--first" >
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/overall-slide-1.png" alt="">
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
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-content overall-item overall-item--second" >
                            <div class="gallery">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/overall-slide-21.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/overall-slide-22.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/overall-slide-23.png" alt="">
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
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-content overall-item overall-item--third" >
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/overall-slide-3.png" alt="">
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
            </div>
        </div>

        <div class="campaign">
            <div class="campaign-left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/campaign-bray.png" alt="">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/campaign-jager-music.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/campaign-gift.png" alt="">
                </div>
            </div>
            <div class="campaign-right">
                <h3 class="feature-text">FEATURED CAMPAIGN</h3>
                <p class="description-text">[DISCRIPTION]</p>
                <div class="detail-button">DETAILS MORE</div>
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
