@extends('layouts.app')

@section('title', 'Menu')

@section('content')
    <div class="container-fluid bg-dark text-light py-5">

        <!-- SECTION TITLE -->
        <div class="text-center mb-4">
            <h2 class="fw-bold text-uppercase" style="letter-spacing: 3px; color:#D8C7A3;">Our Menus</h2>
            <p class="mx-auto text-secondary" style="max-width:600px;">
                Our delicious Italian-inspired fare comes complete with the classics you expect, and some dishes that will
                surprise and delight.
            </p>
        </div>

        <div class="row g-0">
            <!-- LEFT SECTION -->
            <div class="col-md-6 px-5 py-4">
                <nav class="nav flex-column">
                    <a href="#" class="d-block text-decoration-none text-reset"
                        style="color:#D8C7A3; margin-bottom:10px; font-size:1rem; letter-spacing:1px; cursor:pointer;">
                        DOWNSTAIRS MENU
                    </a>

                    <a href="#" class="d-block text-decoration-none text-reset"
                        style="color:#D8C7A3; margin-bottom:10px; font-size:1rem; letter-spacing:1px; cursor:pointer;">
                        SET MENU $65PP
                    </a>

                    <a href="#" class="d-block text-decoration-none text-reset"
                        style="color:#D8C7A3; margin-bottom:10px; font-size:1rem; letter-spacing:1px; cursor:pointer;">
                        SET MENU $85PP
                    </a>

                    <a href="#" class="d-block text-decoration-none text-reset"
                        style="color:#D8C7A3; margin-bottom:10px; font-size:1rem; letter-spacing:1px; cursor:pointer;">
                        SET MENU $109PP
                    </a>

                    <a href="#" class="d-block text-decoration-none text-reset"
                        style="color:#D8C7A3; margin-bottom:10px; font-size:1rem; letter-spacing:1px; cursor:pointer;">
                        CANAPES MENU
                    </a>

                    <a href="#" class="d-block text-decoration-none text-reset"
                        style="color:#D8C7A3; margin-bottom:10px; font-size:1rem; letter-spacing:1px; cursor:pointer;">
                        COCKTAIL LOUNGE MENU
                    </a>

                    <a href="#" class="d-block text-decoration-none text-reset"
                        style="color:#D8C7A3; margin-bottom:10px; font-size:1rem; letter-spacing:1px; cursor:pointer;">
                        ROOFTOP MENU
                    </a>
                </nav>
            </div>

            <!-- RIGHT SECTION - MAIN SLIDESHOW -->
            <div class="col-md-6 p-3">
                <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel" style="cursor:pointer;">
                    <div class="carousel-inner rounded overflow-hidden">
                        <div class="carousel-item active" data-bs-toggle="modal" data-bs-target="#imageModal">
                            <img src="https://via.placeholder.com/800x500?text=Main+Slide+1" class="d-block w-100"
                                style="height:400px; object-fit:cover;">
                        </div>
                        <div class="carousel-item" data-bs-toggle="modal" data-bs-target="#imageModal">
                            <img src="https://via.placeholder.com/800x500?text=Main+Slide+2" class="d-block w-100"
                                style="height:400px; object-fit:cover;">
                        </div>
                        <div class="carousel-item" data-bs-toggle="modal" data-bs-target="#imageModal">
                            <img src="https://via.placeholder.com/800x500?text=Main+Slide+3" class="d-block w-100"
                                style="height:400px; object-fit:cover;">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL WITH SECOND SLIDESHOW -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content bg-black border-0 position-relative">
                <!-- CLOSE BUTTON -->
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                    data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="modal-body p-0">
                    <div id="modalCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://via.placeholder.com/1600x900?text=Modal+Slide+1" class="d-block w-100"
                                    style="height:100vh; object-fit:cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="https://via.placeholder.com/1600x900?text=Modal+Slide+2" class="d-block w-100"
                                    style="height:100vh; object-fit:cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="https://via.placeholder.com/1600x900?text=Modal+Slide+3" class="d-block w-100"
                                    style="height:100vh; object-fit:cover;">
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#modalCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#modalCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
