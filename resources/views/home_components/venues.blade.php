@php
    $images = [
        'images/venues1.png',
        'images/venues2.png',
        'images/venues3.png',
        'images/venues4.png',
        'images/venues5.png',
    ];
@endphp
<!-- ===== Venues Slideshow Section ===== -->
<div id="venueCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

        @foreach ($images as $index => $image)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <img src="{{ asset($image) }}" class="d-block w-100 carousel-img" alt="Venue {{ $index + 1 }}">
            </div>
        @endforeach

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
<section class="venue-about-section py-5">
    <div class="row align-items-start justify-content-between px-4 w-100 container">
        <!-- Left column -->
        <div class="col-lg-12">
            <h1 class="venue-title">The Gilroy Bar & Eatery</h1>
            {{-- <div class="venue-about-section-img">
                <img src="{{ asset('images/logo-no-bg.png') }}" alt="" class="w-100 d-flex overflow-hidden">
            </div> --}}
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="venue-description pe-5 pt-2">
                <p>Welcome to <strong>The Gilroy Bar & Eatery</strong>, your neighborhood sanctuary in the heart of
                    Port Melbourne — a place where connection, craft, and community come together.</p>

                <p>At The Gilroy, everything begins with relationships — from the farmers, fishermen, and local
                    producers we know by name to the guests we welcome each day. Built on trust, care, and passion,
                    our restaurant is a celebration of genuine hospitality and exceptional produce.</p>

                <p>Led by one of Australia’s most talented young chefs, <strong>Derek</strong>, our menu honors the
                    rhythm of the seasons. Each dish is crafted from the freshest local seafood, sustainably sourced
                    meats, and vibrant ingredients — all prepared with intention and creativity to bring joy to your
                    table.</p>

                <p>Our menu evolves weekly, inspired by what’s in season and at its absolute best. Expect fresh
                    flavors, elegant simplicity, and a touch of magic in every plate.</p>

                <p><strong>The Gilroy</strong> is our love letter to food, wine, and the simple pleasure of sharing a
                    meal. Here, quality meets comfort — from the first sip to the last bite, every detail is guided
                    by passion and care.</p>

                <p>Step inside and you’ll feel the warmth, the relaxed sophistication, and the kind of welcome that
                    invites you to linger. Our cuisine blends the romance of French dining with the soulful flavors
                    of Italy, served in a setting that’s both refined and inviting.</p>

                <p>Whether it’s a casual weeknight dinner, a long-awaited catch-up, or a special celebration,
                    <strong>The Gilroy</strong> is your place — where every visit feels like coming home. Come as you
                    are, stay as long as you wish, and let us take care of the rest.
                </p>
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
                <a href="https://bookings.nowbookit.com/?accountid=6b8a8752-7eb2-49d7-8095-168dc2fdddc3&venueid=14008&theme=light&colors=hex,33691e,ffea00"
                    target="_blank" class="btn custom-book-btn rounded-0 px-4 py-2">BOOK A TABLE</a>
                <a href="" class="btn custom-book-btn rounded-0 px-4 py-2">GIFT VOUCHERS</a>
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
                            <a
                                href="https://www.google.com/maps/place/317+Bay+St,+Port+Melbourne+VIC+3207,+Australia/@-37.8362099,144.9414356,17z/data=!3m1!4b1!4m6!3m5!1s0x6ad667edd20b0c25:0x9f0a4a7b72a9a641!8m2!3d-37.8362099!4d144.9440105!16s%2Fg%2F11bw3zjsxc?entry=ttu&g_ep=EgoyMDI1MTAyNy4wIKXMDSoASAFQAw%3D%3D">317
                                Bay Street Port Melbourne Vic 3207</a>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseHoursBar">
                            OPERATING HOURS BAR
                        </button>
                    </h2>
                    <div id="collapseHoursBar" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Closed Sunday/Monday <br>
                            Daily 4pm to late <br>
                            Friday all day late <br>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseHours">
                            OPERATING HOURS DINING ROOM
                        </button>
                    </h2>
                    <div id="collapseHours" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Sunday Closed​ <br>
                            Monday Closed <br>
                            Tuesday 6 – 10pm <br>
                            Wednesday 6 – 10pm<br>
                            Thursday 6 – 10pm <br>
                            Friday 12 – 3pm <br>
                            Friday 6 – 10pm <br>
                            Saturday 6 – 10pm
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
                            Available for exclusive events for up to 110 guests. A semi-private dining room is
                            available for 18 guests.
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
                            Email: <a href="mailto:hello@thegilroy.au">hello@thegilroy.au</a><br>
                            Phone: (03) 9810 1222
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
                            <a href="https://www.instagram.com/the.gilroy?igsh=eWxhZTIxZjd3enZu">Instagram</a>
                        </div>
                    </div>
                </div>

                {{-- <div class="accordion-item">
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
                   </div> --}}
            </div>
        </div>
    </div>
</section>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Tapestry&display=swap');

    .venue-about-section-img {
        margin-left: -20px !important;
        width: 30rem;
    }

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
</style>


@section('js')
    <style>
        .carousel-img {
            width: 100%;
            height: 550px;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .venue-about-section-img {
                /* margin-left: -20px !important; */
                width: 25rem;
            }

            .carousel-img {
                height: 300px;
            }

            .venue-description {
                padding-right: 0 !important;
            }
            .venue-description p {
                line-height: 1.1;
                width: 100%;
            }
        }

        @media (max-width: 450px) {
            .venue-about-section-img {
                /* margin-left: -20px !important; */
                width: 20rem;
            }

            .venue-about-section .venue-title {
                font-family: "Tapestry", serif;
                font-size: 3rem;
                letter-spacing: 6px;
                font-weight: 400;
                margin-bottom: 0.8rem;
                padding: 1.5rem 0;
            }

            .venue-description p {
                line-height: 1.1;
                width: 100%;
            }
        }

        @media (max-width: 400px) {
            .venue-about-section-img {
                /* margin-left: -20px !important; */
                width: 15rem;
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
