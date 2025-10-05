@extends('layouts.app')

@section('title', 'Private Events')

@section('content')
    <div class="private-events-page">

        {{-- Hero Section --}}
        <section class="d-flex align-items-center text-light"
            style="background-color:#051F20 ; min-height:100vh; padding-top:80px; padding-bottom:80px;">
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

        @foreach ($spaces as $index => $space)
            <section class="text-light" id="{{ $space['id'] }}"
                style="background-color: {{ $index % 2 == 0 ? '#000' : '#0a2a2a' }}; padding-top:100px; padding-bottom:100px;">
                <div class="container">
                    <div
                        class="row align-items-center {{ $index % 2 == 0 ? '' : 'flex-lg-row-reverse' }} justify-content-between">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <img src="{{ $space['img'] }}" alt="{{ $space['title'] }}" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-lg-5">
                            <h3 class="text-warning">{{ $space['title'] }}</h3>
                            <p class="lead">{{ $space['desc'] }}</p>
                            @if (isset($space['features']))
                                <ul class="list-unstyled">
                                    @foreach ($space['features'] as $feature)
                                        <li class="mb-2"><i class="fas fa-check text-warning me-2"></i>{{ $feature }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal"
                                data-bs-target="#enquiryModal" data-space="{{ $space['title'] }}">ENQUIRE NOW</button>
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
                <p class="lead mb-4"><strong>Please note:</strong> available for up to 30 people on weekdays (Monday to
                    Thursday) only.</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal"
                    data-event-type="Corporate Event">ENQUIRE NOW</button>
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
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
    </script>
@endsection
