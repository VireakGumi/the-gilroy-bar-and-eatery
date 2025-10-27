<div class="d-md-none mobile-venues-slider">
    <div class="container-fluid position-relative">
        <div class="d-flex flex-nowrap overflow-auto pb-4 custom-scroll-container px-2 venue-slider-content" id="venueSliderContent">
            @foreach ($venues as $venue)
                <div class="venue-slide">
                    <a href="{{ $venue['venue_url'] }}" class="text-decoration-none">
                        <div class="venue-image-container">
                            <img src="{{ $venue['image_url'] }}" alt="{{ $venue['name'] }} Interior" class="venue-image">
                        </div>
                    </a>
                    <a href="{{ $venue['venue_url'] }}" class="venue-name text-decoration-none">{{ $venue['name'] }}</a>
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
