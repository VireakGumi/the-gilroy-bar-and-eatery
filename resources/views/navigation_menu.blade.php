@extends('layouts.minimal')

@section('title', 'Navigation Page')

@section('content')
<div class="nav-overlay bg-dark text-light">
    <button class="closebtn" onclick="window.history.back()">&times;</button>
    <div class="overlay-content text-center">
        <div class="logo mb-5">
            <img src="{{ asset('images/logo-no-bg.png') }}" alt="Site Logo"  class="img-fluid" style="max-width: 180px;">
        </div>

        <h6 class="custom-gold-text-faint fw-bold mb-3">OUR SPACES</h6>
        <ul class="list-unstyled">
            <li><a href="#" class="text-light text-decoration-none">Dining Space</a></li>
            <li><a href="#" class="text-light text-decoration-none">Function Area</a></li>
            <li><a href="#" class="text-light text-decoration-none">Rooftop Terrace</a></li>
            <li><a href="#" class="text-light text-decoration-none">Private Dining</a></li>
        </ul>

        <h6 class="custom-gold-text-faint fw-bold mb-3">QUICK LINKS</h6>
        <ul class="list-unstyled">
            <li><a href="{{ route('menu') }}" class="text-light text-decoration-none">Menu</a></li>
            <li><a href="#" class="text-light text-decoration-none">Drink Menu</a></li>
            <li><a href="#" class="text-light text-decoration-none">Private Events</a></li>
            <li><a href="#" class="text-light text-decoration-none">About Us</a></li>
            <li><a href="#" class="text-light text-decoration-none">Contact Us</a></li>
            <li><a href="#" class="text-light text-decoration-none">Career</a></li>
        </ul>
    </div>
</div>
@endsection
