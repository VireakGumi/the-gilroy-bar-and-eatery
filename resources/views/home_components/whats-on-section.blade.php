<section class="whats-on-section py-5">
    <div class="row px-4">
        <h2 class="serif-title section-title mb-5">What's On</h2>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table events-table px-5">
                <thead>
                    <tr class="text-uppercase small-caps-text">
                        <th class="text-start" style="padding: 0 50px">Event</th>
                        <th class="text-start">Date</th>
                        <th class="text-center">Location</th>
                        <th class="text-center" style="width: 100px;padding:0 80px"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $index => $event)
                        <tr class="event-row-expandable px-5" data-event-index="{{ $index }}">
                            <td style="padding: 0 50px" class="event-name">{{ $event['name'] }}</td>
                            <td class="event-date text-start">{{ $event['date'] }}</td>
                            <td class="event-location text-center">{{ $event['location'] }}</td>
                            <td class="expand-toggle text-center">+</td>
                        </tr>
                        <tr class="event-details-row" id="event-details-{{ $index }}">
                            <td colspan="4" class="p-0">
                                <div class="p-4 d-flex align-items-start">
                                    @php
                                        $venueImage = '';
                                        foreach ($venues as $venue) {
                                            if (strpos(strtolower($event['location']), strtolower($venue['name'])) !== false) {
                                                $venueImage = $venue['image_url']; break;
                                            }
                                        }
                                        if (empty($venueImage) && !empty($venues)) $venueImage = $venues[0]['image_url'];
                                    @endphp
                                    <img src="{{ $venueImage }}" class="img-fluid me-4 d-none d-sm-block" style="width: 200px; height: 150px; object-fit: cover;" alt="{{ $event['name'] }}">
                                    <div class="flex-grow-1">
                                        <p class="small mb-3">{{ $event['description'] ?? 'Join us for this exclusive event. More details will be announced soon.' }}</p>
                                        <div class="d-flex gap-3 mt-3">
                                            @if (isset($event['menu_link']))
                                                <a href="{{ $event['menu_link'] }}" class="btn btn-outline-dark btn-sm">View Menu</a>
                                            @endif
                                            <a href="{{ $event['booking_url'] ?? '/booking/' }}" class="btn btn-outline-dark btn-sm">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-5 px-5">
                <a href="/events/" class="btn btn-outline-dark text-uppercase">View All Events</a>
            </div>
        </div>
    </div>
</section>
