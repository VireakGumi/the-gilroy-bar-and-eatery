@extends('layouts.app')

@section('title', 'Drink Menu')

@section('content')

<style>
    body {
        background-color: #051F20;
    }
    .img-slide {
        object-fit: cover;
        height: 850px;
        cursor: pointer;
    }

    .menu-link {
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 10px;
        color: #D8C7A3;
        text-decoration: none;
    }

    .menu-link:hover {
        text-decoration: underline;
    }
</style>

<div class="container text-light py-5 mb-5 mt-5" style="max-width: 1250px;">
    <div class="row g-5 align-items-center">
        <!-- LEFT SECTION -->
        <div class="col-lg-6 col-md-12 px-4 text-center text-lg-start">
            <h1 class="fw-bold mb-3 text-uppercase" style="letter-spacing: 3px; color: #D8C7A3;">
                Our Drinks
            </h1>
            <p class="mb-5 mt-3">
                From classic cocktails to refreshing mocktails, fine wines, and craft beers —
                discover the perfect drink to match your mood.
            </p>

            <div class="d-flex flex-column align-items-center align-items-lg-start">
                <a href="#" class="menu-link">Cocktails</a>
                <a href="#" class="menu-link">Mocktails</a>
                <a href="#" class="menu-link">Craft Beers</a>
                <a href="#" class="menu-link">Wines & Champagnes</a>
                <a href="#" class="menu-link">Non-Alcoholic</a>
            </div>
        </div>

        <!-- RIGHT SECTION - CAROUSEL -->
        <div class="col-lg-6 col-md-12">
            <div id="drinkCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/mocktails.jpg') }}" class="d-block w-100 img-slide" alt="Mocktail">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/beer.jpg') }}" class="d-block w-100 img-slide" alt="Beer">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/wines-champagnes.jpg')}}" class="d-block w-100 img-slide" alt="Wine">
                    </div>
                </div>

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#drinkCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#drinkCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL VIEWER -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen">
        <div class="modal-content bg-dark border-0">
            <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body d-flex justify-content-center align-items-center">
                <img id="modalImage" src="" class="img-fluid" alt="Full view">
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        document.querySelectorAll('.img-slide').forEach(img => {
            img.addEventListener('click', () => {
                document.getElementById('modalImage').src = img.src;
                const modal = new bootstrap.Modal(document.getElementById('imageModal'));
                modal.show();
            });
        });
    });
</script>
@endsection
