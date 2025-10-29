<div class="mobile-venues-slider d-lg-none">
    <div class="container-fluid position-relative">
        <div class="venue-slider-content" id="venueSliderContent">
            @foreach ($venues as $venue)
            <div class="venue-slide">
                <a href="{{ $venue['venue_url'] }}">
                    <div class="venue-image-container">
                        <img src="{{ $venue['image_url'] }}" alt="{{ $venue['name'] }} Interior" class="venue-image">
                    </div>
                </a>
                <a href="{{ $venue['venue_url'] }}" class="venue-name">{{ $venue['name'] }}</a>
                <div class="venue-links">
                    <a href="{{ $venue['venue_url'] }}" class="custom-arrow-link">View Venue</a>
                    <a href="{{ $venue['booking_url'] }}" class="custom-arrow-link"
                        target="{{ str_starts_with($venue['booking_url'], 'http') ? '_blank' : '_self' }}"
                        rel="noopener noreferrer">Book A Table</a>
                </div>
            </div>
            @endforeach
        </div>

        <button class="slider-nav-btn prev-btn" id="slidePrev">&#10094;</button>
        <button class="slider-nav-btn next-btn" id="slideNext">&#10095;</button>
    </div>
</div>

<!-- Desktop Grid -->
<div class="desktop-venues-grid d-none d-lg-block">
    <div class="container-fluid">
        <div class="row row-cols-2 row-cols-lg-5 g-5">
            @foreach ($venues as $venue)
            <div class="col venue-item">
                <a href="{{ $venue['venue_url'] }}">
                    <div class="venue-image-container">
                        <img src="{{ $venue['image_url'] }}" alt="{{ $venue['name'] }} Interior" class="venue-image">
                    </div>
                </a>
                <a href="{{ $venue['venue_url'] }}" class="venue-name">{{ $venue['name'] }}</a>
                <div class="venue-links">
                    <a href="{{ $venue['venue_url'] }}" class="custom-arrow-link">View Venue</a>
                    <a href="{{ $venue['booking_url'] }}" class="custom-arrow-link"
                        target="{{ str_starts_with($venue['booking_url'], 'http') ? '_blank' : '_self' }}"
                        rel="noopener noreferrer">Book A Table</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const sliderContent = document.getElementById('venueSliderContent');
        const prevBtn = document.getElementById('slidePrev');
        const nextBtn = document.getElementById('slideNext');

        let autoplayInterval;
        const AUTOPLAY_DELAY_MS = 2000;
        const USER_PAUSE_MS = 5000;
        if (!sliderContent || !prevBtn || !nextBtn || window.innerWidth >= 992) {
            if (prevBtn) prevBtn.style.display = 'none';
            if (nextBtn) nextBtn.style.display = 'none';
            return;
        } else {
            prevBtn.style.opacity = '0';
            nextBtn.style.opacity = '1';
            prevBtn.style.display = 'block';
            nextBtn.style.display = 'block';
        }
        const scrollOneSlide = (direction) => {
            const firstSlide = sliderContent.querySelector('.venue-slide');
            if (!firstSlide) return;

            const slideWidth = firstSlide.offsetWidth;
            const marginSize = 20;
            const scrollDistance = slideWidth + marginSize;

            sliderContent.scrollBy({
                left: direction * scrollDistance,
                behavior: 'smooth'
            });

            setTimeout(updateNavButtons, 400);
        };
        const updateNavButtons = () => {
            const {
                scrollLeft,
                scrollWidth,
                clientWidth
            } = sliderContent;
            const tolerance = 5;

            if (scrollLeft <= tolerance) {
                prevBtn.style.opacity = '0';
                prevBtn.disabled = true;
            } else {
                prevBtn.style.opacity = '1';
                prevBtn.disabled = false;
            }

            const isScrollable = scrollWidth > clientWidth;
            if (!isScrollable || scrollLeft + clientWidth >= scrollWidth - tolerance) {
                nextBtn.style.opacity = '0';
                nextBtn.disabled = true;
            } else {
                nextBtn.style.opacity = '1';
                nextBtn.disabled = false;
            }
        };

        const stopAutoplay = () => {
            clearInterval(autoplayInterval);
        };

        const startAutoplay = () => {
            stopAutoplay();
            autoplayInterval = setInterval(() => {
                const {
                    scrollLeft,
                    scrollWidth,
                    clientWidth
                } = sliderContent;
                const tolerance = 5;

                if (scrollLeft + clientWidth >= scrollWidth - tolerance) {
                    sliderContent.scrollTo({
                        left: 0,
                        behavior: 'instant'
                    });
                } else {
                    scrollOneSlide(1);
                }
            }, AUTOPLAY_DELAY_MS);
        };

        const pauseAndResumeAutoplay = () => {
            stopAutoplay();
            setTimeout(startAutoplay, USER_PAUSE_MS);
        };
        prevBtn.addEventListener('click', () => {
            scrollOneSlide(-1);
            pauseAndResumeAutoplay();
        });
        nextBtn.addEventListener('click', () => {
            scrollOneSlide(1);
            pauseAndResumeAutoplay();
        });

        sliderContent.addEventListener('scroll', updateNavButtons);
        let scrollTimeout;
        sliderContent.addEventListener('scroll', () => {
            stopAutoplay();
            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(startAutoplay, USER_PAUSE_MS);
        });
        updateNavButtons();
        startAutoplay();

        window.addEventListener('resize', () => {
            if (window.innerWidth < 992) {
                prevBtn.style.display = 'block';
                nextBtn.style.display = 'block';
                updateNavButtons();
                startAutoplay();
            } else {
                prevBtn.style.display = 'none';
                nextBtn.style.display = 'none';
                stopAutoplay();
            }
        });

    });
</script>