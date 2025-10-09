<?php 
// Setup the WordPress query for events
$args = array(
    'post_type' => 'event',
    'posts_per_page' => -1,
);
$event_query = new WP_Query($args);
?>

<div class="popular-section wrapper">
    <div class="container">
        <h3>POPULAR<br class="sp-only"> THIS WEEK</h3>
        
        <div class="swiper popular-swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php if ($event_query->have_posts()) : ?>
                    <?php while ($event_query->have_posts()) : $event_query->the_post(); ?>
                        <?php
                        // Get ACF fields
                        $thumb = get_field('thumb', get_the_ID());
                        $location = get_field('location', get_the_ID());
                        $deadline = get_field('deadline', get_the_ID());
                        
                        // Calculate remaining time
                        $remaining = strtotime($deadline) - time();
                        $remaining_hour = floor($remaining / 3600) % 24;
                        $remaining_minute = floor($remaining / 60) % 60;
                        
                        // Use featured image if thumb ACF field is not available
                        $image_url = '';
                        if (!empty($thumb) && isset($thumb['url'])) {
                            $image_url = $thumb['url'];
                        } elseif (has_post_thumbnail()) {
                            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        } else {
                            $image_url = get_template_directory_uri() . '/assets/img/default-event.png';
                        }
                        ?>
                        <div class="swiper-slide">
                            <div class="slide-content event" 
                                style="background-image: url(<?php echo esc_url($image_url); ?>)">
                                <div class="event-overlay"></div>
                                <div class="event-bottom">
                                    <div class="event-location">
                                        <?php echo esc_html($location); ?>
                                    </div>
                                    <div class="event-time">
                                        <div class="event-time__hour"><?php echo esc_html($remaining_hour); ?></div>
                                        <div class="event-time__minute"><?php echo esc_html($remaining_minute); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); // Reset post data to restore original post ?>
                <?php else : ?>
                    <div class="swiper-slide">
                        <div class="slide-content event">
                            <div class="event-overlay"></div>
                            <div class="event-bottom">
                                <div class="event-location">No events found</div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- Include Swiper JS -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Check if Swiper is loaded
        if (typeof Swiper !== 'undefined') {
            const bannerSwiper = new Swiper('.popular-swiper', {
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