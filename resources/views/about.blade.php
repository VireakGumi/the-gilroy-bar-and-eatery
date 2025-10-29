@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="our-story-page">

    <!-- 1️⃣ Our Story Section -->
    <section class="story-section container">
        <h2>Our Story</h2>
        <div class="story-columns">
            <div class="col">
                <p>
                    First came Margaret the restaurant. Named for chef Neil Perry’s late mother, it was a loving tribute to the woman who nurtured
                    and cared for the family, who brought and held everyone together. As Neil began to expand with more dining venues in the same
                    Double Bay neighbourhood, the Margaret way of life began to spread across the entire precinct.
                </p>
                <p>
                    The Margaret Family’s four venues are distinct yet share the same ‘Care’ philosophy. It’s about caring for suppliers,
                    one another, the community, and the environment. It’s about creating memories with loved ones over the finest produce and drinks.
                    The Margaret Family is committed to delivering Australia’s best produce, sourced from suppliers Neil has developed personal
                    relationships with over the course of his career. He’s always been passionate about promoting them along the way, which also
                    provides transparency for guests about where their meal comes from. That’s what we mean by ‘Care’.
                </p>
            </div>
            <div class="col">
                <p>
                    Through the Margaret Family, Neil’s dream is to bring the neighbourhood to life through a celebration of cooking,
                    world-class hospitality and strong relationships. From a high-end modern Australian and Italian dining experience
                    to one of Sydney's best American-style cheeseburgers, this corner of Double Bay has it all.
                    Kick off your day with lunch at Next Door, unwind with an aperitivo at Bar Torino (starting September 19),
                    or enjoy a memorable dinner at Gran Torino or Margaret. It’s the ultimate culinary destination in the heart of Double Bay!
                </p>
            </div>
        </div>
    </section>

    <!-- 2️⃣ Image Scroller -->
    <section class="image-scroller-section container">
        <button class="scroll-btn left" id="scrollLeft">&#10094;</button>
        <div class="scroll-wrapper">
            <div class="scroll-container" id="scrollContainer">
                <img src="{{ asset('images/story1.jpg') }}" alt="Story 1">
                <img src="{{ asset('images/story2.jpg') }}" alt="Story 2">
                <img src="{{ asset('images/story3.jpg') }}" alt="Story 3">
                <img src="{{ asset('images/story4.jpg') }}" alt="Story 4">
                <img src="{{ asset('images/story5.jpg') }}" alt="Story 5">
            </div>
        </div>
        <button class="scroll-btn right" id="scrollRight">&#10095;</button>
    </section>

    <!-- 3️⃣ Chef Neil Perry AM Section (Below Scroller) -->
    <section class="story-section container">
        <h2>Chef Neil Perry AM</h2>
        <div class="story-columns">
            <div class="col">
                <p>
                    With a career spanning four decades, Neil Perry AM has become one of Australia’s leading and most influential chefs and is a restaurant industry veteran.
                </p>
                <p>
                    He has founded several famed Australian institutions renowned for their fresh produce and excellent service and hospitality, including the Rockpool Group
                    and the brands Rockpool, Rockpool Bar & Grill, Spice Temple and Rosetta. His latest venture is the Double Bay Margaret Family, which includes Margaret,
                    Next Door, Gran Torino and Bar Torino. Neil’s wife, Samantha, and daughters Josephine, Macy and Indy are all deeply involved in Margaret, reinforcing his
                    family-focused philosophy.
                </p>
            </div>
            <div class="col">
                <p>
                    For more than 25 years, Neil has been Qantas’ food, beverage and service director, creating one of the best dining experiences in the sky. He has also
                    written 11 cookbooks, and was appointed a Member of the Order of Australia in 2013 for his “significant service to the community as a benefactor of and
                    a fundraiser for charities” including the Starlight Children’s Foundation, and for his services “as a chef and restaurateur”. His charity, the Hope Hospitality
                    Foundation, which he began in 2020 as a response to the pandemic, has so far fed more than 600,000 people who are vulnerable.
                </p>
            </div>
        </div>
    </section>

    <!-- 4️⃣ Banner -->
    <section class="foundation-banner">
        <div class="banner-content">
            <h2>Hope Hospitality Foundation</h2>
        </div>
    </section>

    <!-- 5️⃣ Hope Hospitality Foundationn (Below Banner) -->
    <section class="story-section container">
        <h2>Hope Hospitality Foundation</h2>
        <div class="story-columns">
            <div class="col">
                <p>
                    Neil Perry, Quadrant, and Rockpool Dining Group founded Hope Delivery in response to the 2020 pandemic.
                    The aim was to feed international students, visa holders and unemployed hospitality workers who weren’t
                    eligible for government assistance.
                </p>
                <p>
                    In 2022, it was relaunched as the Hope Hospitality Foundation, which exists to provide wholesome meals to people who are vulnerable.
                </p>
            </div>
            <div class="col">
                <p>
                    Hope uses the skills and capabilities of hospitality industry workers to create quality meals,
                    and all funds raised contribute to the purchase of good-quality local ingredients to support
                    Australian suppliers and producers. Hope also partners with frontline organisations and delivery
                    services, and currently provides 5000 meals per week across Sydney. So far, Hope has fed more than 600,000 people.
                </p>
            </div>
        </div>
    </section>

</div>
@endsection

@section('js')
<script>
    const container = document.getElementById('scrollContainer');
    const btnLeft = document.getElementById('scrollLeft');
    const btnRight = document.getElementById('scrollRight');

    let images = Array.from(container.querySelectorAll('img'));
    let visibleCount = 4;
    let currentIndex = 0;

    // Render visible images (4 at a time)
    function renderImages() {
        container.innerHTML = '';
        for (let i = 0; i < visibleCount; i++) {
            let index = (currentIndex + i) % images.length;
            container.appendChild(images[index].cloneNode(true));
        }
    }

    btnRight.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % images.length;
        renderImages();
    });

    btnLeft.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        renderImages();
    });

    // Initial render
    renderImages();
</script>
@endsection
