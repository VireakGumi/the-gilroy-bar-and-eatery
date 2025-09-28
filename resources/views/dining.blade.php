@extends('layouts.app')

@section('title', 'Dining Areas')

@section('content')
<section class="dining-page bg-dark text-light py-10">
    <div class="container text-center">

        <!-- Section Title -->
        <h2 class="section-title">Rooftop Tercase</h2>

        <!-- Scrollable Image Gallery -->
        <div class="position-relative mb-5">
            <div class="d-flex overflow-auto gap-3 px-2 terraceCarousel" id="terraceCarousel" style="scroll-behavior: smooth;">
                <div class="flex-shrink-0" style="width: 25%;">
                    <img src="{{ asset('images/dining_1.jpg') }}" alt="Terrace 1" class="img-fluid rounded">
                </div>
                <div class="flex-shrink-0" style="width: 25%;">
                    <img src="{{ asset('images/dining_2.jpg') }}" alt="Terrace 2" class="img-fluid rounded">
                </div>
                <div class="flex-shrink-0" style="width: 25%;">
                    <img src="{{ asset('images/dining_3.jpg') }}" alt="Terrace 3" class="img-fluid rounded">
                </div>
                <div class="flex-shrink-0" style="width: 25%;">
                    <img src="{{ asset('images/dining_4.jpg') }}" alt="Terrace 4" class="img-fluid rounded">
                </div>
                <div class="flex-shrink-0" style="width: 25%;">
                    <img src="{{ asset('images/dining_5.jpg') }}" alt="Terrace 5" class="img-fluid rounded">
                </div>
                <div class="flex-shrink-0" style="width: 25%;">
                    <img src="{{ asset('images/dining_6.jpg') }}" alt="Terrace 5" class="img-fluid rounded">
                </div>
                <div class="flex-shrink-0" style="width: 25%;">
                    <img src="{{ asset('images/dining_7.jpg') }}" alt="Terrace 5" class="img-fluid rounded">
                </div>
            </div>

            <!-- Carousel Buttons -->
            <button onclick="scrollCarouselRight()" class="btn btn-gold position-absolute top-50 end-0 translate-middle-y">›</button>
            <button onclick="scrollCarouselLeft()" class="btn btn-gold position-absolute top-50 start-0 translate-middle-y">‹</button>
        </div>

        <!-- Description -->
        <div class="dining-description mb-5">
            <p class="lead">
                Our elegant open-air rooftop terrace, adorned with a vertical garden and lush greenery, offers a stunning bar and the ideal setting for your celebration. With a retractable roof to manage Melbourne’s unpredictable weather and overhead heaters for cooler evenings, comfort is assured. Customisable canape menus and cocktail-style service with small bites and refreshing beverages complete the experience.
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
            <a href="#" class="text-gold">Cocktail Dining Area</a>
            <a href="#" class="text-gold">Ground Floor Area</a>
            <a href="#" class="text-gold">Private Dining Room</a>
        </div>


    </div>
</section>
@endsection
@section('js')

<script>
    const carousel = document.getElementById('terraceCarousel');

    function scrollCarouselLeft() {
        const itemWidth = carousel.querySelector('.flex-shrink-0').offsetWidth + 12; // 12 = gap
        carousel.scrollBy({ left: -itemWidth, behavior: 'smooth' });
    }

    function scrollCarouselRight() {
        const itemWidth = carousel.querySelector('.flex-shrink-0').offsetWidth + 12;
        carousel.scrollBy({ left: itemWidth, behavior: 'smooth' });
    }

</script>
@endsection
