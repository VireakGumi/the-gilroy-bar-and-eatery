<div class="d-none d-md-block">
    <div class="container-fluid">
        <div class="row row-cols-2 row-cols-lg-5 g-5">
            @foreach ($venues as $venue)
                <div class="col venue-item">
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
    </div>
</div>
