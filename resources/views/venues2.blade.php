@extends('layouts.app')

@section('title', 'Venues')

@section('content')

    <!-- ===== Venues Slideshow Section ===== -->
    <div id="venueCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="{{ asset('images/venues1.png') }}" class="d-block w-100 carousel-img" alt="Venue 1">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('images/venues2.png') }}" class="d-block w-100 carousel-img" alt="Venue 2">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('images/venues3.png') }}" class="d-block w-100 carousel-img" alt="Venue 3">
            </div>

        </div>

        <div class="d-flex justify-content-between">
            <button class="carousel-control-prev" type="button" data-bs-target="#venueCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#venueCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- ===== About Venue Section ===== -->
    <section class="venue-about-section py-5" style="background-color:#f1ede5;">
        <div class="row align-items-start justify-content-between px-5 w-100">
            <!-- Left column -->
            <div class="col-lg-12">
                <h1 class="venue-title">The Gilroy Bar & Eatery</h1>
            </div>
            <div class="col-lg-6">
                <div class="venue-description pe-5 pt-2">
                    <p>Margaret has proudly been named the No. 2 Steak Restaurant in the World and No. 1 in Australia for
                        2025 - a reflection of our uncompromising commitment to excellence in both produce and hospitality.
                    </p>
                    <p>Situated in Sydney’s Double Bay, at its core, Margaret is a celebration of the deep relationships
                        Neil Perry has built over decades with Australia’s most dedicated farmers and fishermen. The
                        restaurant is driven by these trusted partnerships, resulting in an offering that showcases not only
                        world-class wild-caught seafood, but also one of the most respected and carefully curated meat
                        programs in the country.</p>
                    <p>A focus on Australia’s extraordinary seafood remains central to Neil’s cuisine, proudly featured
                        throughout the menu alongside premium cuts of beef sourced through a network of producers committed
                        to ethical, sustainable practices.</p>
                    <p>With dishes that change daily depending on the finest seasonal ingredients available to us, Margaret
                        is a dynamic expression of produce, craft, and care - where the best ingredients, wines, and service
                        come together in a truly memorable dining experience.</p>
                    <p>Margaret is named after Neil Perry’s late mother who was the matriarch of the family, the nurturer
                        and carer, and the one who held everyone together. These wonderful qualities became the inspiration
                        behind the CARE philosophy that Neil created; caring for our suppliers, each other, the community
                        and environment, which he has applied throughout his entire career as a chef and restaurateur.</p>
                    <p><em>“Margaret is a neighbourhood restaurant, but it’s also evolved into something more than that. At
                            its core, it’s about comfort, generosity and cosiness.”</em> — Neil Perry</p>
                </div>
                <div class="mt-4 row">
                    <div class="col-12">
                        <a href="#" class="text-decoration-none venue-link text-dark" style="font-size: 0.7rem">
                            → View À La Carte Menu
                        </a>
                    </div>
                    <div class="col-12">

                        <a href="#" class="text-decoration-none venue-link text-dark" style="font-size: 0.7rem">
                            → View Dessert Menu
                        </a>
                    </div>
                </div>

                <div class="mt-4 d-flex flex-wrap gap-3">
                    <a href="#" class="btn btn-outline-dark rounded-0 px-4 py-2">BOOK A TABLE</a>
                    <a href="#" class="btn btn-outline-dark rounded-0 px-4 py-2">GIFT VOUCHERS</a>
                </div>
            </div>

            <!-- Right column -->
            <div class="col-lg-6">
                <div class="accordion" id="venueAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseLocation">
                                LOCATION
                            </button>
                        </h2>
                        <div id="collapseLocation" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                30–36 Bay St, Double Bay NSW<br>
                                <a href="#">View on Google Maps</a>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseHours">
                                OPERATING HOURS
                            </button>
                        </h2>
                        <div id="collapseHours" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Mon–Fri: 11:30 AM – 10:00 PM<br>
                                Sat–Sun: 12:00 PM – 11:00 PM
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEvents">
                                PRIVATE EVENTS
                            </button>
                        </h2>
                        <div id="collapseEvents" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Host your next celebration at Margaret. Contact us for event options.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEnquiries">
                                ENQUIRIES
                            </button>
                        </h2>
                        <div id="collapseEnquiries" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Email: <a href="mailto:info@margaret.com">info@margaret.com</a><br>
                                Phone: (02) 9068 8888
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSocials">
                                FOLLOW US ON SOCIALS
                            </button>
                        </h2>
                        <div id="collapseSocials" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Instagram: @margaretrestaurant
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFaq">
                                FAQS
                            </button>
                        </h2>
                        <div id="collapseFaq" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Common questions about dining and reservations.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="whats-on-section p-5" style="background-color:#f1ede5;">
        <h2 class="whats-on-title mb-4">What’s On</h2>

        <!-- Header -->
        <div class="row event-header border-bottom mx-0 fs-7">
            <div class="col-5 small fw-semibold p-0">EVENT</div>
            <div class="col-3 small fw-semibold text-center">DATE</div>
            <div class="col-3 small fw-semibold text-center">LOCATION</div>
            <div class="col-1 small fw-semibold text-end"></div>
        </div>

        <!-- Event -->
        <div class="event-item border-bottom mx-0 fs-7">
            <div class="row align-items-center">
                <div class="col-5 small">MARGARET X DON JULIO</div>
                <div class="col-3 small text-center">12TH FEBRUARY</div>
                <div class="col-3 small text-center">MARGARET</div>
                <div class="col-1 text-end">
                    <button class="event-toggle-btn" type="button" data-bs-toggle="collapse" data-bs-target="#event1">
                        +
                    </button>
                </div>
            </div>

            <!-- Expanded Details -->
            <div id="event1" class="collapse event-detail mt-2" >
                <div class="row align-items-start">
                    <div class="col-md-4">
                        <img src="{{ asset('images/venues1.png') }}" alt="Margaret x Don Julio"
                            class="img-fluid border" />
                    </div>
                    <div class="col-md-8 w-50">
                        <p class="event-desc">
                            On 12th and 13th February 2026 Margaret Double Bay (No. 2 World's Best Steak Restaurant)
                            and Don Julio Buenos Aires (No. 1 World's Best Steak Restaurant) will come together in a
                            once-in-a-lifetime collaboration! Tickets will be released on 1st December.
                            Subscribe below to receive all the exciting updates.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section> --}}
    <section class="whats-on-section p-5" style="background-color:#f1ede5;">
        <h2 class="whats-on-title mb-4">What’s On</h2>

        <!-- Header -->
        <div class="row event-header border-bottom mx-0 fs-7 fw-semibold">
            <div class="col-5 small p-0">EVENT</div>
            <div class="col-3 small text-center">DATE</div>
            <div class="col-3 small text-center">LOCATION</div>
            <div class="col-1 small text-end"></div>
        </div>

        <!-- Example Event -->
        <div class="event-item border-bottom mx-0 fs-7">
            <div class="row align-items-center">
                <div class="col-5 small">Grand Opening Event</div>
                <div class="col-3 small text-center">12TH FEBRUARY</div>
                <div class="col-3 small text-center">THE GILORY BAR & EATERY</div>
                <div class="col-1 text-end">
                    <button class="event-toggle-btn btn btn-link p-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#event1" aria-expanded="true" aria-controls="event1"
                        style="text-decoration:none; font-size:1.5rem;">
                        +
                    </button>
                </div>
            </div>

            <!-- Expanded Details -->
            <div id="event1" class="collapse event-detail mt-3">
                <div class="row align-items-start">
                    <div class="col-md-4 mb-3">
                        <img src="{{ asset('images/venues1.png') }}" alt="Grand Opening Event"
                            class="img-fluid border rounded" />
                    </div>
                    <div class="col-md-8">
                        <p class="event-desc mb-0">
                            On 12th and 13th February 2026, Margaret Double Bay (No. 2 World's Best Steak Restaurant)
                            and Don Julio Buenos Aires (No. 1 World's Best Steak Restaurant) will come together
                            in a once-in-a-lifetime collaboration! Tickets will be released on 1st December.
                            Subscribe below to receive all the exciting updates.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- View All Events Button -->
        {{-- <div class="text-start mt-4">
            <button class="btn btn-outline-dark rounded-0 px-4 py-2">VIEW ALL EVENTS</button>
        </div> --}}
    </section>

    <!-- ===== Private Events Hero Section ===== -->
    <section class="private-events-hero position-relative text-center text-white">
        <img src="{{ asset('images/private_dining_2.jpg') }}" alt="Margaret Private Events" class="hero-bg-img">

        <div class="hero-overlay">
            <h1 class="hero-title">The Gilroy Events</h1>
            <a href="#" class="hero-btn">ENQUIRE</a>
        </div>
    </section>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Tapestry&display=swap');


        .carousel-control-next,
        .carousel-control-prev {
            width: 5%;
        }

        .venue-about-section .venue-title {
            font-family: "Tapestry", serif;
            font-size: 3rem;
            letter-spacing: 8px;
            font-weight: 400;
            margin-bottom: 1rem;
            padding: 2rem 0;
        }

        .venue-description p {
            font-family: sans-serif;
            font-size: 0.75rem;
            line-height: 1.5;
            color: #222;
            margin-bottom: 1rem;
            width: 80%;
        }

        /* =========================================
                    LIQUID MOTION ACCORDION ANIMATION v10.0
                    ========================================= */

        /* Base */
        .accordion {
            border: none;
        }

        .accordion-item {
            font-family: sans-serif;

            border: none;
            border-bottom: 1px solid #000;
            background-color: #f1ede5;
            overflow: hidden;
            position: relative;
        }

        /* Header Button */
        .accordion-button {
            font-family: sans-serif;
            background-color: #f1ede5;
            color: #000;
            /* font-weight: 600; */
            font-size: 0.9rem;
            padding: 0.9rem 0 0.4rem 0;
            border: none;
            outline: none !important;
            box-shadow: none !important;
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-transform: uppercase;
            cursor: pointer;
            letter-spacing: 0.4px;
            transition:
                color 0.18s ease,
                transform 0.18s cubic-bezier(0.33, 1, 0.68, 1),
                background-color 0.25s ease;
        }

        .accordion-button:hover {
            color: #333;
            transform: translateX(2px);
        }

        .accordion-button:not(.collapsed) {
            color: #000;
            background-color: #f1ede5;
        }

        /* + / – Icon */
        .accordion-button::after {
            content: "+";
            font-size: 1.15rem;
            color: #000;
            background-image: none !important;
            transform: rotate(0deg) scale(1);
            transition:
                transform 0.35s cubic-bezier(0.25, 1.5, 0.5, 1),
                color 0.2s ease;
        }

        .accordion-button:not(.collapsed)::after {
            content: "–";
            transform: rotate(180deg) scale(1.18);
            color: #111;
        }

        /* Container */
        .accordion-collapse {
            overflow: hidden;
            max-height: 0;
            opacity: 0;
            transform: translateY(-6px);
            transition:
                max-height 0.38s cubic-bezier(0.25, 1.25, 0.5, 1),
                opacity 0.3s ease,
                transform 0.35s cubic-bezier(0.25, 1.25, 0.5, 1);
            will-change: max-height, opacity, transform;
        }

        .accordion-collapse.show {
            max-height: 800px;
            opacity: 1;
            transform: translateY(0);
        }

        /* Accordion Body */
        .accordion-body {
            background-color: #f1ede5;
            padding: 0.85rem 1rem 0.65rem 0;
            font-size: 0.83rem;
            color: #222;
            line-height: 1.65;
            opacity: 0;
            transform: translateY(-10px) scale(0.98);
            filter: blur(6px);
            transition:
                opacity 0.38s ease,
                transform 0.38s cubic-bezier(0.25, 1.25, 0.5, 1),
                filter 0.35s ease,
                box-shadow 0.35s ease;
            will-change: opacity, transform, filter, box-shadow;
        }

        /* Opening */
        .accordion-collapse.show .accordion-body {
            opacity: 1;
            transform: translateY(0) scale(1);
            filter: blur(0);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        /* Closing */
        .accordion-collapse.collapsing .accordion-body {
            opacity: 0;
            transform: translateY(-12px) scale(0.98);
            filter: blur(5px);
            box-shadow: 0 0 0 rgba(0, 0, 0, 0);
        }

        /* Micro spring-like elastic motion (optional keyframes) */
        @keyframes liquidOpen {
            0% {
                opacity: 0;
                transform: translateY(-8px) scale(0.97);
                filter: blur(5px);
            }

            70% {
                transform: translateY(2px) scale(1.02);
                opacity: 1;
                filter: blur(1px);
            }

            100% {
                transform: translateY(0) scale(1);
                filter: blur(0);
            }
        }

        @keyframes liquidClose {
            0% {
                opacity: 1;
                transform: translateY(0) scale(1);
                filter: blur(0);
            }

            30% {
                transform: translateY(-3px) scale(0.98);
                opacity: 0.8;
                filter: blur(2px);
            }

            100% {
                opacity: 0;
                transform: translateY(-8px) scale(0.96);
                filter: blur(4px);
            }
        }


        /* Title */
        .whats-on-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            letter-spacing: 0.5px;
            font-weight: 400;
            padding: 0.5rem 1rem 0 0;
        }

        /* Event rows */
        .event-header {
            border-color: #000;
        }

        .event-item {
            border-color: #000;
        }

        .event-toggle-btn {
            border: none;
            background: transparent;
            font-size: 1rem;
            font-weight: bold;
            transition: transform 0.3s ease;
            color: #000;
            padding: 0.6rem 0;
        }

        .event-toggle-btn:focus {
            outline: none;
            box-shadow: none;
        }

        .event-toggle-btn[aria-expanded="true"] {
            transform: rotate(45deg);
        }

        /* Description animation */
        .collapse {
            transition: all 0.9s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        .event-desc {
            font-size: 0.8rem;
            color: #333;
            line-height: 1.6;
        }

        /* Button */
        .btn-outline-dark {
            border: 1px solid #000;
            border-radius: 0;
            font-size: 0.85rem;
            letter-spacing: 1px;
            margin-top: 1rem;
        }

        .btn-outline-dark:hover {
            background-color: #000;
            color: #fff;
        }

        .fs-7 {
            font-size: 0.8rem;
            font-family: sans-serif;
        }

        /* Hero container */
        .private-events-hero {
            width: 100%;
            height: 555px;
            overflow: hidden;
            position: relative;
            font-family: 'Playfair Display', serif;
        }

        /* Background image */
        .hero-bg-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.75);
            transition: transform 6s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        .private-events-hero:hover .hero-bg-img {
            transform: scale(1.05);
        }

        /* Center overlay */
        .hero-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        /* Title text */
        .hero-title {
            font-size: 2.5rem;
            font-weight: 400;
            margin-bottom: 1rem;
            letter-spacing: 1px;
            color: #fff;
        }

        /* Enquire button */
        .hero-btn {
            display: inline-block;
            border: 1px solid #fff;
            padding: 0.6rem 2rem;
            color: #fff;
            font-size: 0.9rem;
            letter-spacing: 1px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-family: sans-serif;
        }

        .hero-btn:hover {
            background-color: #fff;
            color: #000;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .private-events-hero {
                height: 350px;
            }

            .hero-title {
                font-size: 1.7rem;
            }

            .hero-btn {
                font-size: 0.8rem;
                padding: 0.4rem 1.2rem;
            }
        }
    </style>

@endsection

@section('js')
    <style>
        .carousel-img {
            width: 100%;
            height: 550px;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .carousel-img {
                height: 300px;
            }
        }
    </style>

    <script>
        const carousel = document.querySelector('#venueCarousel');
        const bootstrapCarousel = new bootstrap.Carousel(carousel, {
            interval: 4000,
            ride: 'carousel'
        });
    </script>
@endsection
