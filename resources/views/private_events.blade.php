@extends('layouts.app')

@section('title', 'Private Events')

@section('content')
<div class="private-events-page">

    {{-- Hero Section --}}
    <section class="d-flex align-items-center text-light" style="background-color:#0a2a2a ; min-height:100vh; padding-top:80px; padding-bottom:80px;">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">PRIVATE EVENTS</h1>
            <p class="lead mb-4">
                At Stella, we love a reason to celebrate. Whether it's an end-of-year work
                party, a birthday, an engagement, or just a gathering of family and friends, we have space that
                will suit your function needs and food menus that can be tailored with curated cocktail and wine lists.
            </p>
            <p class="lead mb-5"><strong>Please note:</strong> The Functions Menu is a sample menu only, and menu
                items are subject to change seasonally.</p>

<div class="d-flex flex-column justify-content-center gap-3 hero-buttons">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#enquiryModal">ENQUIRE NOW</button>

                <a href="https://stellarestaurantbar.com.au/wp-content/uploads/2024/08/Stella_Menu_A4_Function-Pack_July24.pdf"
                   class="btn btn-outline-light">DOWNLOAD FUNCTION PACK</a>

                <a href="#corporate" class="btn btn-outline-warning fw-bold">
                    CORPORATE EVENTS <i class="fas fa-chevron-down ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    {{-- Event Spaces --}}
    @php
        $spaces = [
            ['id'=>'rooftop','title'=>'ROOFTOP TERRACE','img'=>'https://stellarestaurantbar.com.au/wp-content/uploads/2023/11/1-1024x680.jpg','desc'=>'Our beautiful open-air rooftop terrace featuring a vertical garden, lush plants, and a stunning bar provides the perfect setting and backdrop for your celebration. The retractable roof assists us with dealing with the unpredictable Melbourne weather providing shade and shelter. Above head heaters will also provide warmth on a cooler evening.','features'=>['Standing Cocktail Event: Accommodates up to 100 guests']],
            ['id'=>'cocktail','title'=>'COCKTAIL LOUNGE','img'=>'https://stellarestaurantbar.com.au/wp-content/uploads/2024/08/054A5747-HDR-1024x683.jpg','desc'=>'Hosting a seated dining of up to 40 guests in our second level. Featuring luxurious soft blue velvet interior seating mixed with exceptionally comfortable grey chairs. This space is perfect for those moderately sized events wishing to host special occasions with exclusive hire with tailored menus and beverage packages.','features'=>['Seated Dining: Up to 45 guests','Standing Cocktail Event: Accommodates up to 100 guests']],
            ['id'=>'ground','title'=>'GROUND FLOOR AREA','img'=>'https://stellarestaurantbar.com.au/wp-content/uploads/2024/08/054A2012-HDR-1024x683.jpg','desc'=>"We can host up to 60 guests seated in our show-stopping ground floor dining space, which is mainly used for whole venue events. This space is also perfect for larger non-exclusive group bookings from 10-30 guests. Choose from our Chef's Selection menus, with drink packages available on request.",'features'=>['Seated Dining: Up to 60 guests','Standing Cocktail Event: Accommodates up to 100 guests']],
            ['id'=>'private','title'=>'PRIVATE DINING ROOM','img'=>'https://stellarestaurantbar.com.au/wp-content/uploads/2024/07/054A1918-HDR-1024x683.jpg','desc'=>'We can host 8 to 10 guests comfortably in our private cellar dining space. Wall to wall with wine varietals from across the globe, providing a moody and intimate setting with a considerably large marble tabletop built for a bespoke experience.','features'=>['Exclusive seating for 10 guests']],
        ];
    @endphp

    @foreach($spaces as $index => $space)
    <section class="text-light" id="{{ $space['id'] }}"
             style="background-color: {{ $index % 2 == 0 ? '#000' : '#0a2a2a' }}; padding-top:100px; padding-bottom:100px;">
        <div class="container">
            <div class="row align-items-center {{ $index % 2 == 0 ? '' : 'flex-lg-row-reverse' }} justify-content-between">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ $space['img'] }}" alt="{{ $space['title'] }}" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-5">
                    <h3 class="text-warning">{{ $space['title'] }}</h3>
                    <p class="lead">{{ $space['desc'] }}</p>
                    @if(isset($space['features']))
                        <ul class="list-unstyled">
                            @foreach($space['features'] as $feature)
                                <li class="mb-2"><i class="fas fa-check text-warning me-2"></i>{{ $feature }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#enquiryModal" data-space="{{ $space['title'] }}">ENQUIRE NOW</button>
                </div>
            </div>
        </div>
    </section>
    @endforeach

    {{-- Corporate Events --}}
    <section class="d-flex align-items-center text-light" id="corporate"
             style="background-color:#000; border-bottom:2px solid #FFA500; min-height:100vh; padding-top:80px; padding-bottom:80px;">
        <div class="container text-center">
            <h2 class="display-4 mb-3">CORPORATE EVENTS</h2>
            <p class="lead mb-4"><strong>Please note:</strong> available for up to 30 people on weekdays (Monday to Thursday) only.</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal" data-event-type="Corporate Event">ENQUIRE NOW</button>
        </div>
    </section>

    @include('private_events_modal')
</div>
@endsection

@section('js')
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
});
</script>
@endsection
