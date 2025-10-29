@extends('layouts.app')

@section('title', 'Ground Floor Area')

@section('content')
<section class="dining-page text-light py-10" style="background: #051F20">
    <div class="container text-center">

        <!-- Section Title -->
        <h2 class="section-title">Ground Floor Area</h2>

        <!-- Scrollable Image Gallery -->
        <div class="position-relative mb-5">
            <div class="d-flex overflow-auto gap-3 px-2 terraceCarousel" id="terraceCarousel" style="scroll-behavior: smooth;">
                <div class="flex-shrink-0" style="width: 25%;">
                    <img src="{{ asset('images/ground_floor_1.jpg') }}" alt="Terrace 1" class="img-fluid rounded">
                </div>
                <div class="flex-shrink-0" style="width: 25%;">
                    <img src="{{ asset('images/ground_floor_2.jpg') }}" alt="Terrace 2" class="img-fluid rounded">
                </div>
                <div class="flex-shrink-0" style="width: 25%;">
                    <img src="{{ asset('images/ground_floor_3.jpg') }}" alt="Terrace 3" class="img-fluid rounded">
                </div>
                <div class="flex-shrink-0" style="width: 25%;">
                    <img src="{{ asset('images/ground_floor_4.jpg') }}" alt="Terrace 4" class="img-fluid rounded">
                </div>
                <div class="flex-shrink-0" style="width: 25%;">
                    <img src="{{ asset('images/ground_floor_5.jpg') }}" alt="Terrace 5" class="img-fluid rounded">
                </div>
                <div class="flex-shrink-0" style="width: 25%;">
                    <img src="{{ asset('images/ground_floor_6.jpg') }}" alt="Terrace 5" class="img-fluid rounded">
                </div>
                <div class="flex-shrink-0" style="width: 25%;">
                    <img src="{{ asset('images/ground_floor_7.jpg') }}" alt="Terrace 5" class="img-fluid rounded">
                </div>
            </div>

            <!-- Carousel Buttons -->
            <button onclick="scrollCarouselRight()" class="btn btn-gold position-absolute top-50 end-0 translate-middle-y">›</button>
            <button onclick="scrollCarouselLeft()" class="btn btn-gold position-absolute top-50 start-0 translate-middle-y">‹</button>
        </div>

        <!-- Description -->
        <div class="dining-description mb-5">
            <p class="lead">
                Guests can enjoy an à la carte menu, a “feed me” experience for four or more diners priced at $65 per person, available every day, or a shared set menu designed for larger groups of 10 or more with options at $85 or $109 per person. All dishes are specially curated by Stella’s world-class executive chef, Craig Penglase.
            </p>
            <p class="lead">
                Standing Cocktail Event: Accommodates up to 100 guests
            </p>
            <p class="fw-bold text-gold">
                Rooftop seating is available on a walk-in basis only.
            </p>
        </div>

        <!-- Enquire Button -->
        <a href="#" class="btn btn-gold px-5 py-2 mb-5" style="border-radius: 50px; ">Enquire Now</a>

        <!-- Other Dining Areas -->
        <div class="other-dining">
            <a href="/cocktail-dining-area" class="text-gold">Cocktail Dining Area</a>
            <a href="/private-dining" class="text-gold">Private Dining Room</a>
            <a href="/rooftop-terrace" class="text-gold">Rooftop Terrace</a>
        </div>


    </div>
</section>
@endsection
@section('js')
<script src="{{ asset('js/private_dining.js') }}"></script>
@endsection
