@extends('layouts.app')

@section('title', 'Menu')

@section('content')
<div class="container-fluid bg-dark text-light py-5">
    <div class="row g-0 align-items-center">

        <!-- LEFT SECTION -->
        <div class="col-lg-6 col-md-12 p-5">
            <h2 class="fw-bold mb-3" style="letter-spacing: 3px; color: #D8C7A3;">
                OUR MENUS
            </h2>
            <p class="mb-4">
                Our delicious Italian-inspired fare comes complete with the classics you expect,
                and some dishes that will surprise and delight.
            </p>

            <div class="d-flex flex-column">
                <a href="#" class="menu-link">DOWNSTAIRS MENU</a>
                <a href="#" class="menu-link">SET MENU $65PP</a>
                <a href="#" class="menu-link">SET MENU $85PP</a>
                <a href="#" class="menu-link">SET MENU $109PP</a>
                <a href="#" class="menu-link">CANAPES MENU</a>
                <a href="#" class="menu-link">COCKTAIL LOUNGE MENU</a>
                <a href="#" class="menu-link">ROOFTOP MENU</a>
            </div>
        </div>

        <!-- RIGHT SECTION - CAROUSEL -->
        <div class="col-lg-6 col-md-12">
            <div id="menuCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092?w=1000&q=80"
                             class="d-block w-100 img-slide" alt="Menu Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1600891965050-d42e40ef8e6d?w=1000&q=80"
                             class="d-block w-100 img-slide" alt="Menu Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1600891963937-5b3a1e7b2f10?w=1000&q=80"
                             class="d-block w-100 img-slide" alt="Menu Image 3">
                    </div>
                </div>

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#menuCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#menuCarousel" data-bs-slide="next">
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

@section('styles')
<style>
    .menu-link {
        color: #D8C7A3;
        text-decoration: none;
        margin-bottom: 10px;
        letter-spacing: 1px;
        transition: color 0.3s;
    }
    .menu-link:hover {
        color: #fff;
    }
    .img-slide {
        height: 100vh;
        object-fit: cover;
        cursor: pointer;
    }
    @media (max-width: 768px) {
        .img-slide {
            height: 50vh;
        }
    }
</style>
@endsection

@section('js')
<script>
    document.querySelectorAll('.img-slide').forEach(img => {
        img.addEventListener('click', () => {
            document.getElementById('modalImage').src = img.src;
            const modal = new bootstrap.Modal(document.getElementById('imageModal'));
            modal.show();
        });
    });
</script>
@endsection
