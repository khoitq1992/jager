<div class="popular-section wrapper">
    <div class="container">
        <h3>POPULAR<br class="sp-only"> THIS WEEK</h3>
        <!-- Slider main container -->
        <div class="swiper popular-slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="slide-content event" 
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/test-popular.png);">
                        <div class="event-overlay"></div>
                        <div class="event-bottom">
                            <div class="event-location">
                                DISTRIC A,
                                HCMC</div>
                            <div class="event-time">
                                <div class="event-time__hour">00</div>
                                <div class="event-time__minute">00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-content event" 
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/test-popular.png);">
                        <div class="event-overlay"></div>
                        <div class="event-bottom">
                            <div class="event-location">
                                DISTRIC A,
                                HCMC</div>
                            <div class="event-time">
                                <div class="event-time__hour">00</div>
                                <div class="event-time__minute">00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-content event" 
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/test-popular.png);">
                        <div class="event-overlay"></div>
                        <div class="event-bottom">
                            <div class="event-location">
                                DISTRIC A,
                                HCMC</div>
                            <div class="event-time">
                                <div class="event-time__hour">00</div>
                                <div class="event-time__minute">00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-content event" 
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/test-popular.png);">
                        <div class="event-overlay"></div>
                        <div class="event-bottom">
                            <div class="event-location">
                                DISTRIC A,
                                HCMC</div>
                            <div class="event-time">
                                <div class="event-time__hour">00</div>
                                <div class="event-time__minute">00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-content event" 
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/test-popular.png);">
                        <div class="event-overlay"></div>
                        <div class="event-bottom">
                            <div class="event-location">
                                DISTRIC A,
                                HCMC</div>
                            <div class="event-time">
                                <div class="event-time__hour">00</div>
                                <div class="event-time__minute">00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-content event" 
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/test-popular.png);">
                        <div class="event-overlay"></div>
                        <div class="event-bottom">
                            <div class="event-location">
                                DISTRIC A,
                                HCMC</div>
                            <div class="event-time">
                                <div class="event-time__hour">00</div>
                                <div class="event-time__minute">00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-content event" 
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/test-popular.png);">
                        <div class="event-overlay"></div>
                        <div class="event-bottom">
                            <div class="event-location">
                                DISTRIC A,
                                HCMC</div>
                            <div class="event-time">
                                <div class="event-time__hour">00</div>
                                <div class="event-time__minute">00</div>
                            </div>
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
            const bannerSwiper = new Swiper('.popular-slider', {
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: true,
                },
                slidesPerView: 2,
                spaceBetween: 16,
                centeredSlides: true,
                // Responsive breakpoints
                breakpoints: {
                    640: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                        centeredSlides: false
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 25,
                        centeredSlides: false
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 30,
                        centeredSlides: false
                    },
                    1280: {
                        slidesPerView: 6,
                        spaceBetween: 30,
                        centeredSlides: false
                    }
                },
            });
        } else {
            console.error('Swiper not loaded');
        }
    });
</script>