<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private Events | Stella Restaurant & Bar</title>

</head>

<body class="private-events-page">
    @include('layouts.header')

    <section class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h1 class="display-4 mb-4" style="font-size: 40px">PRIVATE EVENTS</h1>
                    <p class="lead mb-4">At Stella, we love a reason to celebrate. Whether it's an end-of-year work
                        party, a birthday, an engagement, or just a gathering of family and friends, we have space that
                        will suit your function needs and food menus that can be tailored with curated cocktail and wine
                        lists.</p>
                    <p class="mb-5"><strong>Please note:</strong> The Functions Menu is a sample menu only, and menu
                        items are subject to change seasonally.</p>

                    <div class="hero-buttons">
                        <button type="button" class="btn btn-primary enquire-now-button" data-bs-toggle="modal"
                            data-bs-target="#enquiryModal">ENQUIRE NOW</button>

                        <a href="https://stellarestaurantbar.com.au/wp-content/uploads/2024/08/Stella_Menu_A4_Function-Pack_July24.pdf"
                            class="btn btn-outline-light">DOWNLOAD FUNCTION PACK</a>

                        <a href="#corporate" class="btn btn-outline-not-light">
                            CORPORATE EVENTS <i class="fas fa-chevron-down ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="event-space-section black-bg" id="rooftop">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://stellarestaurantbar.com.au/wp-content/uploads/2023/11/1-1024x680.jpg"
                        alt="Rooftop Terrace" class="img-fluid">
                </div>
                <div class="col-lg-5">
                    <h3>ROOFTOP TERRACE</h3>
                    <p>Our beautiful open-air rooftop terrace featuring a vertical garden, lush plants, and a stunning
                        bar provides the perfect setting and backdrop for your celebration. The retractable roof assists
                        us with dealing with the ever so unpredictable Melbourne weather providing shade and shelter.
                        Above head heaters will also provide warmth on a cooler evening.</p>
                    <ul class="space-features">
                        <li>Standing Cocktail Event: Accommodates up to 100 guests</li>
                    </ul>
                    <button type="button" class="btn btn-primary mt-3" id="center-phone" data-bs-toggle="modal"
                        data-bs-target="#enquiryModal" data-space="Rooftop Terrace">ENQUIRE NOW</button>
                </div>
            </div>
        </div>
    </section>

    <section class="event-space-section green-bg" id="cocktail">
        <div class="container">
            <div class="row align-items-center flex-lg-row-reverse justify-content-between">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://stellarestaurantbar.com.au/wp-content/uploads/2024/08/054A5747-HDR-1024x683.jpg"
                        alt="Cocktail Lounge" class="img-fluid">
                </div>
                <div class="col-lg-5 background-not-black">
                    <h3>COCKTAIL LOUNGE</h3>
                    <p>Hosting a seated dining of up to 40 guests in our second level. Featuring luxurious soft blue
                        velvet interior seating mixed with exceptionally comfortable grey chairs. This space is perfect
                        for those moderately sized events wishing to host special occasions with exclusive hire with
                        tailored menus and beverage packages.</p>
                    <ul class="space-features">
                        <li>Seated Dining: Up to 45 guests</li>
                        <li>Standing Cocktail Event: Accommodates up to 100 guests</li>
                    </ul>
                    <button type="button" class="btn btn-primary mt-3" id="center-phone" data-bs-toggle="modal"
                        data-bs-target="#enquiryModal" data-space="Cocktail Lounge">ENQUIRE NOW</button>
                </div>
            </div>
        </div>
    </section>

    <section class="event-space-section black-bg" id="ground">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://stellarestaurantbar.com.au/wp-content/uploads/2024/08/054A2012-HDR-1024x683.jpg"
                        alt="Ground Floor Area" class="img-fluid">
                </div>
                <div class="col-lg-5">
                    <h3>GROUND FLOOR AREA</h3>
                    <p>We can host up to 60 guests seated in our show-stopping ground floor dining space, which is
                        mainly used for whole venue events. This space is also perfect for larger non-exclusive group
                        bookings from 10-30 guests. Choose from our Chef's Selection menus, with drink packages
                        available on request.</p>
                    <ul class="space-features">
                        <li>Seated Dining: Up to 60 guests</li>
                        <li>Standing Cocktail Event: Accommodates up to 100 guests</li>
                    </ul>
                    <button type="button" class="btn btn-primary mt-3" id="center-phone" data-bs-toggle="modal"
                        data-bs-target="#enquiryModal" data-space="Ground Floor Area">ENQUIRE NOW</button>
                </div>
            </div>
        </div>
    </section>

    <section class="event-space-section green-bg" id="private">
        <div class="container">
            <div class="row align-items-center flex-lg-row-reverse justify-content-between">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://stellarestaurantbar.com.au/wp-content/uploads/2024/07/054A1918-HDR-1024x683.jpg"
                        alt="Private Dining Room" class="img-fluid">
                </div>
                <div class="col-lg-5">
                    <h3>PRIVATE DINING ROOM</h3>
                    <p>We can host 8 to 10 guests comfortably in our private cellar dining space. Wall to wall with wine
                        varietals from across the globe, providing a moody and intimate setting with a considerably
                        large marble tabletop built for a bespoke experience.</p>
                    <ul class="space-features">
                        <li>Exclusive seating for 10 guests</li>
                    </ul>
                    <button type="button" class="btn btn-primary mt-3" id="center-phone" data-bs-toggle="modal"
                        data-bs-target="#enquiryModal" data-space="Private Dining Room">ENQUIRE NOW</button>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 last-section" id="corporate">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="section-title">CORPORATE EVENTS</h2>
                    <p class="mb-4"><strong>Please note:</strong> available for up to 30 people on weekdays (Monday to
                        Thursday) only.</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#enquiryModal" data-event-type="Corporate Event">ENQUIRE NOW</button>
                </div>
            </div>
        </div>
    </section>

    @include('private_events_modal')
    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
</body>

</html>