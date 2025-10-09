<div class="detail-section wrapper">
    <div class="container">
        <!-- Slider main container -->
        <div class="swiper detail-slider" style="overflow: visible !important;">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper" style="overflow: visible !important;">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="slide-content detail" data-aos="flip-right" data-aos-duration="800">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/detail-1.png" 
                            data-lightbox="JÄGER MUSIC X LOW G" 
                            data-title="JÄGER MUSIC X LOW G">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/detail-1.png" alt="">
                        </a>
                        <p class="detail-title">JÄGER MUSIC X LOW G</p>
                        <div class="detail-btn">DETAILS MORE</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-content detail" data-aos="flip-right" data-aos-duration="800">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/detail-2.png" 
                            data-lightbox="JÄGER MUSIC X KOUGEN" 
                            data-title="JÄGER MUSIC X KOUGEN">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/detail-2.png" alt="">
                        </a>
                        <p class="detail-title">JÄGER MUSIC X KOUGEN</p>
                        <div class="detail-btn">DETAILS MORE</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-content detail" data-aos="flip-right" data-aos-duration="800">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/detail-3.png" 
                            data-lightbox="JÄGER MUSIC X HIDDEN GC" 
                            data-title="JÄGER MUSIC X HIDDEN GC">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/detail-3.png" alt="">
                        </a>
                        <p class="detail-title">JÄGER MUSIC X HIDDEN GC</p>
                        <div class="detail-btn">DETAILS MORE</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-content detail" data-aos="flip-right" data-aos-duration="800">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/detail-4.png" 
                            data-lightbox="JÄGER MUSIC X B RAY" 
                            data-title="JÄGER MUSIC X B RAY">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/detail-4.png" alt="">
                        </a>
                        <p class="detail-title">JÄGER MUSIC X B RAY</p>
                        <div class="detail-btn">DETAILS MORE</div>
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
            const bannerSwiper = new Swiper('.detail-slider', {
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
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 25,
                        centeredSlides: false
                    },
                },
            });
        } else {
            console.error('Swiper not loaded');
        }

        const detailBtn = document.querySelectorAll('.detail-btn')
        detailBtn.forEach(detailBtnItem => {
            detailBtnItem.addEventListener('click', function(e) {
                e.preventDefault();
                const detailSlider = detailBtnItem.closest('.detail-slider');
                if (detailSlider) {
                    const detailSliderA = detailSlider.querySelector('a');
                    if (detailSliderA) {
                        detailSliderA.click();
                    }
                }
            });
        });
        
    });
</script>