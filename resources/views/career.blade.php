@extends('layouts.app')

@section('title', 'Career')

@section('content')
    <div class="career-main-content">
        <section class="career-hero-section">
            <div class="container">
                <h1 class="career-hero-logo">Gilroy</h1>
                <h2 class="text-uppercase mb-4 fs-1">JOIN OUR TEAM</h2>
                <p class="fs-5 mb-5">Be part of an exceptional culinary experience at one of the city's most prestigious
                    restaurants</p>
                <a href="#career-open-positions" class="btn btn-stella btn-lg text-uppercase">VIEW OPEN POSITIONS</a>
            </div>
        </section>

        <section class="career-section-light py-5">
            <div class="container">
                <h2 class="career-section-title text-center text-uppercase">WHY WORK AT GILROY</h2>
                <div class="row">
                    @foreach ($benefits as $benefit)
                        <div class="col-md-4 mb-4">
                            <div class="text-center">
                                <h4 class="mb-3">{{ $benefit['title'] }}</h4>
                                <p>{{ $benefit['description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="career-open-positions" class="career-section-dark py-5">
            <div class="container">
                <h2 class="career-section-title text-center text-uppercase">CURRENT OPENINGS</h2>

                @foreach ($departments as $department)
                    <div class="career-department-section">
                        <div class="row">
                            @foreach ($department['positions'] as $position)
                                <div class="col-lg-6">
                                    <div class="career-card">
                                        <div class="career-card-header">
                                            <h4 class="mb-0">{{ $position['title'] }}</h4>
                                            <span class="career-job-type-badge">{{ $position['type'] }}</span>
                                        </div>
                                        <div class="career-card-body">
                                            <p class="mb-3">{{ $position['description'] }}</p>
                                            <ul class="career-benefits-list">
                                                @foreach ($position['requirements'] as $requirement)
                                                    <li>{{ $requirement }}</li>
                                                @endforeach
                                            </ul>
                                            <button type="button" class="btn btn-stella mt-3" data-bs-toggle="modal"
                                                data-bs-target="#career-apply-modal"
                                                data-position="{{ $position['title'] }}">
                                                <i class="fas fa-paper-plane me-2"></i>APPLY NOW
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="career-section-light py-5">
            <div class="container">
                <h2 class="career-section-title text-center text-uppercase">MEET OUR TEAM</h2>
                <div class="row">
                    @foreach ($testimonials as $testimonial)
                        <div class="col-md-4">
                            <div class="career-testimonial-card">
                                <div class="text-center mb-3">
                                    <i class="fas fa-quote-left fa-2x career-quote-icon"></i>
                                </div>
                                <p class="career-testimonial-text">"{{ $testimonial['quote'] }}"</p>
                                <p class="career-testimonial-author">{{ $testimonial['name'] }}</p>
                                <p class="career-testimonial-role">{{ $testimonial['position'] }},
                                    {{ $testimonial['duration'] }}
                                    at Gilroy</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    @include('career-modal')
@endsection

