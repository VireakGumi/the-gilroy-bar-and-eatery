@extends('layouts.app')
@section('title', 'Venue Group Homepage')

@section('content')
    <main>
        {{-- ==================== VENUE GRID SECTION ==================== --}}
        <section class="venue-grid-section bg-light px-5">
            {{-- DESKTOP GRID --}}
            <div class="d-none d-md-block">
                <div class="container-fluid">
                    <div class="row row-cols-2 row-cols-lg-5 g-5">
                        @foreach ($venues as $venue)
                            <div class="col venue-item">
                                <a href="{{ $venue['venue_url'] }}" class="text-decoration-none">
                                    <div class="venue-image-container">
                                        <img src="{{ $venue['image_url'] }}" alt="{{ $venue['name'] }} Interior"
                                            class="venue-image">
                                    </div>
                                </a>
                                <a href="{{ $venue['venue_url'] }}" class="venue-name text-decoration-none">
                                    {{ $venue['name'] }}
                                </a>
                                <div class="venue-links">
                                    <a href="{{ $venue['venue_url'] }}" class="custom-arrow-link">
                                        View Venue
                                    </a>
                                    <a href="{{ $venue['booking_url'] }}" class="custom-arrow-link"
                                        target="{{ str_starts_with($venue['booking_url'], 'http') ? '_blank' : '_self' }}"
                                        rel="noopener noreferrer">
                                        Book A Table
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- MOBILE SLIDER --}}
            <div class="d-md-none mobile-venues-slider">
                <div class="container-fluid">
                    <div class="d-flex flex-nowrap overflow-auto pb-4 custom-scroll-container">
                        @foreach ($venues as $venue)
                            <div class="venue-slide">
                                <a href="{{ $venue['venue_url'] }}" class="text-decoration-none">
                                    <div class="venue-image-container">
                                        <img src="{{ $venue['image_url'] }}" alt="{{ $venue['name'] }} Interior"
                                            class="venue-image">
                                    </div>
                                </a>
                                <a href="{{ $venue['venue_url'] }}" class="venue-name text-decoration-none">
                                    {{ $venue['name'] }}
                                </a>
                                <div class="venue-links">
                                    <a href="{{ $venue['venue_url'] }}" class="custom-arrow-link">
                                        View Venue
                                    </a>
                                    <a href="{{ $venue['booking_url'] }}" class="custom-arrow-link"
                                        target="{{ str_starts_with($venue['booking_url'], 'http') ? '_blank' : '_self' }}"
                                        rel="noopener noreferrer">
                                        Book A Table
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- ==================== ABOUT BANNER ==================== --}}
        <a href="/about/" class="text-decoration-none">
            <div class="about-banner">
                <img src="https://www.datocms-assets.com/127859/1719298925-margaret-hero.png?auto=format&w=1440"
                    alt="Margaret Group About Banner">
            </div>
        </a>

        {{-- ==================== ABOUT CONTENT ==================== --}}
        <div class="py-5 bg-light px-5">
            <div class="row">
                <div class="col-lg-8">

                    <p class="h6 mb-2 fw-bold text-uppercase">The Margaret Family</p>

                    <h2 class="h2 mb-4">
                        Through the Margaret Family, Neil’s dream is to bring the Double Bay neighbourhood to life through a
                        celebration of cooking, hospitality, and generosity built from his ‘Care’ philosophy.
                    </h2>

                    <a class="btn btn-outline-dark mt-4 me-auto" href="/about/">Discover Our Story</a>

                </div>
            </div>
        </div>

        {{-- ==================== CHEF BANNER ==================== --}}
        <section class="chef-banner">
            <div class="container">
                <h3 class="serif-font">Chef Neil Perry AM</h3>
                <a href="/about/" class="btn btn-outline-light">Learn More</a>
            </div>
        </section>

        {{-- ==================== WHAT'S ON SECTION ==================== --}}
        <section class="whats-on-section py-5">
            <div class="row px-4">
                <h2 class="serif-title section-title mb-5 ">What's On</h2>
                <div class="row px-5">
                    <div class="col-lg-12">
                        <table class="table events-table">
                            <thead>
                                <tr class="text-uppercase small-caps-text">
                                    <th class="text-start">Event</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-end">Location</th>

                                    <th class="text-center" style="width: 100px;"></th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $index => $event)
                                    <tr class="event-row-expandable" data-event-index="{{ $index }}">
                                        <td class="event-name">{{ $event['name'] }}</td>
                                        <td class="event-date text-center">{{ $event['date'] }}</td>
                                        <td class="event-location text-end">{{ $event['location'] }}</td>
                                        <td class="expand-toggle text-end">+</td>
                                    </tr>
                                    <tr class="event-details-row" id="event-details-{{ $index }}">
                                        <td colspan="4" class="p-0">
                                            <div class="p-4">
                                                <div class="d-flex align-items-start event-details-content">
                                                    @php
                                                        $venueImage = '';
                                                        foreach ($venues as $venue) {
                                                            if (
                                                                strpos(
                                                                    strtolower($event['location']),
                                                                    strtolower($venue['name']),
                                                                ) !== false
                                                            ) {
                                                                $venueImage = $venue['image_url'];
                                                                break;
                                                            }
                                                        }
                                                        if (empty($venueImage) && !empty($venues)) {
                                                            $venueImage = $venues[0]['image_url'];
                                                        }
                                                    @endphp

                                                    <img src="{{ $venueImage }}" class="img-fluid me-4 d-none d-sm-block"
                                                        style="width: 200px; height: 150px; object-fit: cover;"
                                                        alt="{{ $event['name'] }}">
                                                    <div class="flex-grow-1">
                                                        <p class="small mb-3">
                                                            {{ $event['description'] ?? 'Join us for this exclusive event. More details will be announced soon.' }}
                                                        </p>
                                                        <div class="d-flex gap-3 mt-3">
                                                            @if (isset($event['menu_link']))
                                                                <a href="{{ $event['menu_link'] }}"
                                                                    class="btn btn-outline-dark btn-sm">View Menu</a>
                                                            @endif
                                                            @if (isset($event['booking_url']))
                                                                <a href="{{ $event['booking_url'] }}"
                                                                    class="btn btn-outline-dark btn-sm">Book Now</a>
                                                            @else
                                                                <a href="/booking/"
                                                                    class="btn btn-outline-dark btn-sm">Reserve Table</a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="mt-5">
                            <a href="/events/" class="btn btn-outline-dark text-uppercase">View All Events</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ==================== PRIVATE EVENTS ==================== --}}
        <section class="private-events">
            <div class="container">
                <h2 class="serif-font">Private Events</h2>
                <p>
                    Delivering the food and hospitality that our family is known for, whether it's wedding, birthday,
                    corporate event or just because, we'll create an experience just for you and your guests as only Neil
                    Perry can.
                </p>
                <a href="/private-events/" class="btn btn-outline-light">Learn More</a>
            </div>
        </section>
    </main>
@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const expandableRows = document.querySelectorAll('.event-row-expandable');

            expandableRows.forEach(row => {
                // Find the clickable element (the whole row)
                row.addEventListener('click', function() {
                    const eventIndex = this.getAttribute('data-event-index');
                    const detailsRow = document.getElementById('event-details-' + eventIndex);

                    if (!detailsRow) return;

                    // Check if the current row is already active
                    const isActive = this.classList.contains('active');

                    // If it's already active (cross is visible), simply close it.
                    if (isActive) {
                        this.classList.remove('active');
                        detailsRow.classList.remove('active');
                        return;
                    }

                    // If it's not active, close ALL other rows first.
                    expandableRows.forEach(otherRow => {
                        const otherIndex = otherRow.getAttribute('data-event-index');
                        const otherDetails = document.getElementById('event-details-' +
                            otherIndex);

                        if (otherRow !== this) {
                            otherRow.classList.remove('active');
                        }
                        if (otherDetails && otherDetails !== detailsRow) {
                            otherDetails.classList.remove('active');
                        }
                    });

                    // Open the clicked row.
                    this.classList.add('active');
                    detailsRow.classList.add('active');
                });
            });
        });
    </script>
@endsection
