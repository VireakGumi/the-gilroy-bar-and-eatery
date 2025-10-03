@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="main-content">
    <section class="hero-section">
        <div class="hero-slideshow">
            <div class="slideshow-container">
                <div class="slide active">
                    <img src="https://stellarestaurantbar.com.au/wp-content/uploads/2024/07/054A5756-HDR-scaled.jpg" alt="Gilroy Restaurant Interior">
                </div>
                <div class="slide">
                    <img src="https://stellarestaurantbar.com.au/wp-content/uploads/2024/07/054A5738-HDR-scaled.jpg" alt="Gilroy Restaurant Interior">
                </div>
                <div class="slide">
                    <img src="https://stellarestaurantbar.com.au/wp-content/uploads/2024/07/054A2012-HDR-scaled.jpg" alt="Gilroy Restaurant Interior">
                </div>
                <div class="slide">
                    <img src="https://stellarestaurantbar.com.au/wp-content/uploads/2024/07/054A2000-HDR-scaled.jpg" alt="Gilroy Restaurant Interior">
                </div>
                <div class="slide">
                    <img src="https://stellarestaurantbar.com.au/wp-content/uploads/2024/07/054A1911-HDR-scaled.jpg" alt="Gilroy Restaurant Interior">
                </div>
                <div class="slide">
                    <img src="https://stellarestaurantbar.com.au/wp-content/uploads/2024/09/054A1716-scaled.jpg" alt="Gilroy Restaurant Interior">
                </div>
                <div class="slide">
                    <img src="https://stellarestaurantbar.com.au/wp-content/uploads/2024/09/0Q8A8610-scaled.jpg" alt="Gilroy Restaurant Interior">
                </div>
                <div class="slide-overlay"></div>
            </div>
        </div>

        <div class="hero-content">
            <div class="container">
                <div class="row justify-content-center pt-5 pb-5">
                    <div class="col-lg-10 text-center" >
                        <h1 class="hero-logo mt-5">Gilroy</h1>
                        <h2 class="book-title text-uppercase mb-4 mt-5">BOOK YOUR DESIRED SPACE</h2>
                        <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
                            <a href="#booking" class="btn btn-stella btn-lg text-uppercase">GROUND FLOOR</a>
                            <a href="#spaces" class="btn btn-stella btn-lg text-uppercase">COCKTAIL LOUNGE</a>
                            <a href="#spaces" class="btn btn-stella btn-lg text-uppercase">PRIVATE DINING</a>
                        </div>
                        <a href="#booking" class="availability-link text-uppercase">VIEW ALL AVAILABILITY</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="e-con-inner" class="section-dark py-5">
        <div class="container">
            <h1 class="section-title text-center text-uppercase fs-2">Gilroy RESTAURANT & BAR</h1>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="fs-5 lh-lg mb-4 text-center">
                        Welcome to Gilroy Restaurant & Bar, where culinary excellence meets sophisticated ambiance. Our Italian-inspired menu, meticulously crafted by our renowned chefs, offers a harmonious blend of timeless classics and delightful surprises. At Stella, we elevate traditional recipes with innovative twists, ensuring a dining experience that is both familiar and exciting.
                    </p>
                    <p class="fs-5 lh-lg mb-4 text-center">
                        Spread across four extraordinary levels, Gilroy provides a unique atmosphere for every occasion. Enjoy panoramic views and chic cocktails on our Rooftop, indulge in a refined dining experience in our Cocktail Dining Area, relax in the elegant Ground Floor Area, or host an exclusive event in our Private Dining Room. At Stella, we promise a journey of flavors and luxury that you won't forget.
                    </p>
                </div>
            </div>
            <div class="home-buttons row justify-content-center text-center mx-0 mt-5">
                <a href="/rooftop-terrace" class="col-12 col-sm-6 col-md-3 home-btn-link text-uppercase py-3">ROOFTOP TERRACE</a>
                <a href="/cocktail-dining-area" class="col-12 col-sm-6 col-md-3 home-btn-link text-uppercase py-3">COCKTAIL DINING AREA</a>
                <a href="/ground-floor-area" class="col-12 col-sm-6 col-md-3 home-btn-link text-uppercase py-3">GROUND FLOOR AREA</a>
                <a href="/private-dining" class="col-12 col-sm-6 col-md-3 home-btn-link text-uppercase py-3">PRIVATE DINING ROOM</a>
            </div>
        </div>
    </section>
<section class="instagram-section">
    <a href="https://www.instagram.com/stellarestaurantbar/" target="_blank" class="instagram-link-wrapper">
        <div class="instagram-grid">
            <div class="instagram-item">
                <img src="https://stellarestaurantbar.com.au/wp-content/uploads/sb-instagram-feed-images/532704149_18019957034736492_2114741785170287429_nfull.webp" alt="Pizza with baked cheese and rosemary">
            </div>
            <div class="instagram-item">
                <img src="https://stellarestaurantbar.com.au/wp-content/uploads/sb-instagram-feed-images/531803497_18019868960736492_5852735712712095253_nfull.webp" alt="Pasta dish served on a white plate with Gilroy logo">
            </div>
            <div class="instagram-item">
                <img src="https://stellarestaurantbar.com.au/wp-content/uploads/sb-instagram-feed-images/531737422_18019757930736492_6193833969805108454_nfull.webp" alt="Interior feature wall with greenery and blue champagne bottles">
            </div>
            <div class="instagram-item d-none d-md-block">
                <img src="https://stellarestaurantbar.com.au/wp-content/uploads/sb-instagram-feed-images/528654692_18019288826736492_4344750693245790134_nfull.webp" alt="Chef holding a glass of wine">
            </div>
        </div>
    </a>
</section>
</div>
@endsection
@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            let currentSlide = 0;
            const slideInterval = 4000; 
            
            function showSlide(n) {
                slides.forEach(slide => {
                    slide.classList.remove('active');
                });
                slides[n].classList.add('active');
                currentSlide = n;
            }
            
            function nextSlide() {
                let next = (currentSlide + 1) % slides.length;
                showSlide(next);
            }
            setInterval(nextSlide, slideInterval);
        });
    </script>
@endsection