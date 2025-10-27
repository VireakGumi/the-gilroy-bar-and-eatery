@php
$events = [
    ['name' => "Margaret X Don Julio", 'date' => "Friday, Nov 15", 'location' => "Margaret", 'description' => "An exclusive tequila tasting event featuring gourmet pairings.", 'booking_url' => "#book-don-julio"],
    ['name' => "Australia's Best Burger Competition", 'date' => "Saturday, Dec 7", 'location' => "The Pavillion", 'description' => "Come and vote for the best burger in the country! Live music and craft beer.", 'booking_url' => "#book-burger"],
    ['name' => "New Year's Eve Gala", 'date' => "Tuesday, Dec 31", 'location' => "Margaret", 'description' => "Ring in the new year with a five-course degustation and champagne toast.", 'menu_link' => "#menu-nye", 'booking_url' => "#book-nye"],
    ['name' => "Valentine's Day Dinner", 'date' => "Friday, Feb 14", 'location' => "Margaret", 'description' => "A romantic evening with a set menu for two.", 'booking_url' => "#book-valentines"]
];

$venues = [
    ['name' => "Margaret", 'image_url' => 'https://placehold.co/200x150/f9f7f4/333?text=Margaret+Venue'],
    ['name' => "The Pavillion", 'image_url' => 'https://placehold.co/200x150/d3d3d3/333?text=Pavillion+Venue']
];

function getVenueImage($location, $venues) {
    foreach ($venues as $venue) {
        if (stripos($location, $venue['name']) !== false) {
            return $venue['image_url'];
        }
    }
    return !empty($venues) ? $venues[0]['image_url'] : 'https://placehold.co/200x150/f0f0f0/333?text=Default+Venue';
}
@endphp

<section class="whats-on-section py-5 w-full bg-white">
    <h2 class="section-title text-4xl lg:text-5xl mb-8 w-full">What's On</h2>

    <!-- Desktop Table (LG and up) -->
    <table class="table events-table w-full border-collapse d-none d-lg-table text-left">
        <thead>
            <tr class="text-xs uppercase tracking-widest text-gray-600 border-b border-gray-400">
                <th class="w-1/3 p-4 pl-4 font-normal">Event</th>
                <th class="w-1/4 p-4 font-normal">Date</th>
                <th class="w-1/4 p-4 text-center font-normal">Location</th>
                <th class="w-[100px] p-4 pr-4 text-center font-normal"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $index => $event)
                @php $venueImage = getVenueImage($event['location'], $venues); @endphp
                <tr class="event-row-expandable border-b border-gray-200 cursor-pointer" data-index="{{ $index }}">
                    <td class="p-4 pl-4">{{ $event['name'] }}</td>
                    <td class="p-4">{{ $event['date'] }}</td>
                    <td class="p-4 text-center">{{ $event['location'] }}</td>
                    <td class="p-4 pr-4 text-center expand-toggle">+</td>
                </tr>
                <tr class="event-details-row bg-gray-50 hidden">
                    <td colspan="4" class="p-4">
                        <div class="flex flex-col lg:flex-row items-start gap-4">
                            <img src="{{ $venueImage }}" class="w-[200px] h-[150px] object-cover" alt="{{ $event['name'] }}">
                            <div class="flex-grow-1">
                                <p class="text-gray-700">{{ $event['description'] }}</p>
                                <div class="flex gap-3 mt-3 flex-wrap">
                                    @if(isset($event['menu_link']))
                                        <a href="{{ $event['menu_link'] }}" class="btn btn-outline-dark btn-sm">View Menu</a>
                                    @endif
                                    <a href="{{ $event['booking_url'] }}" class="btn btn-dark btn-sm">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Mobile/Tablet Accordion -->
    <div class="d-lg-none w-full">
        @foreach($events as $index => $event)
            @php $venueImage = getVenueImage($event['location'], $venues); @endphp
            <div class="mobile-accordion-item border-b border-gray-300 w-full">
                <div class="mobile-accordion-header flex justify-between items-center p-4 cursor-pointer" data-index="{{ $index }}">
                    <span>{{ $event['name'] }}</span>
                    <span>{{ $event['date'] }}</span>
                    <span class="expand-toggle">+</span>
                </div>
                <div class="event-details-content hidden bg-gray-50 p-4 w-full">
                    <div class="flex flex-col sm:flex-row items-start gap-4">
                        <img src="{{ $venueImage }}" class="w-[200px] h-[150px] object-cover" alt="{{ $event['name'] }}">
                        <div class="flex-grow-1">
                            <p class="text-gray-700">{{ $event['description'] }}</p>
                            <div class="flex gap-3 mt-3 flex-wrap">
                                @if(isset($event['menu_link']))
                                    <a href="{{ $event['menu_link'] }}" class="btn btn-outline-dark btn-sm">View Menu</a>
                                @endif
                                <a href="{{ $event['booking_url'] }}" class="btn btn-dark btn-sm">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Desktop toggle
    document.querySelectorAll('.event-row-expandable').forEach(row => {
        row.addEventListener('click', () => {
            const detailsRow = row.nextElementSibling;
            if(!detailsRow) return;

            document.querySelectorAll('.event-details-row').forEach(r => {
                if(r !== detailsRow) r.classList.add('hidden');
            });

            detailsRow.classList.toggle('hidden');

            const icon = row.querySelector('.expand-toggle');
            if(icon) icon.textContent = detailsRow.classList.contains('hidden') ? '+' : '–';
        });
    });

    // Mobile toggle
    document.querySelectorAll('.mobile-accordion-header').forEach(header => {
        header.addEventListener('click', () => {
            const body = header.nextElementSibling;
            if(!body) return;

            document.querySelectorAll('.mobile-accordion-item .event-details-content').forEach(b => {
                if(b !== body) b.classList.add('hidden');
            });

            body.classList.toggle('hidden');

            const icon = header.querySelector('.expand-toggle');
            if(icon) icon.textContent = body.classList.contains('hidden') ? '+' : '–';
        });
    });
});
</script>
