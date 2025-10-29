@extends('layouts.app')

@section('title', 'Venues')

@section('content')
<div class="venues-section">
    <div class="p-5 text-start"
        style="background-color: #f1ede5; padding-top: 60px !important; padding-bottom: 20px important;">
        <p class="text-uppercase mt-3 mb-5"
            style="font-family: 'MTT Milano', sans-serif; font-size: 15px; letter-spacing: 1px;">
            Private Dining
        </p>
        <h2 class="fw-normal" style="font-family: 'columbiasans-light', serif; line-height: 1.1; width: 65%;">
            Gathering friends and family is always a joy. Whether it's a wedding, birthday, homecoming, corporate event
            or just because, we'll ensure you and your guests are well taken care of.
        </h2>
    </div>

    <div class="container-fluid py-5" style="background-color:#fbf9f4;">
        <div class="d-flex justify-content-center">
            <div class="row w-100 g-5" style="max-width: 1700px;">
                @foreach ($details as $key => $detail)
                @php
                // Detect if this is the only item or the last odd one
                $isLastOdd = $loop->last && $loop->count % 2 != 0;
                @endphp

                <div class="{{ $isLastOdd ? 'col-lg-6 col-md-10' : 'col-lg-6 col-md-12' }}">
                    <!-- Image -->
                    <img src="{{ asset($detail['img']) }}" alt="{{ $key }} Dish"
                        class="venue-img img-fluid w-100 rounded-0 shadow-sm mb-4">

                    <!-- Content -->
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h4 class="mb-0 text-capitalize venue-link"
                            style="font-family:'columbiasans-light', serif;">
                            {{ $key }}
                        </h4>
                        <a href="{{ $detail['location']}}" target="_blank" class=" small fw-semibold text-dark venue-link">View
                            Venue</a>
                    </div>

                    <p class="text-muted" style="font-family:'columbiasans-light', serif;">
                        {{ $detail['short_desc'] }}
                    </p>

                    <!-- Accordion -->
                    <div class="accordion border-0" id="venueAccordion_{{ $loop->index }}">
                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header" id="headingDetails_{{ $loop->index }}">
                                <button class="accordion-button collapsed custom-accordion-btn" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseDetails_{{ $loop->index }}"
                                    aria-expanded="false" aria-controls="collapseDetails_{{ $loop->index }}">
                                    VENUE DETAILS
                                </button>
                            </h2>
                            <div id="collapseDetails_{{ $loop->index }}" class="accordion-collapse collapse"
                                style="background-color:#fbf9f4;"
                                aria-labelledby="headingDetails_{{ $loop->index }}"
                                data-bs-parent="#venueAccordion_{{ $loop->index }}">
                                <div class="accordion-body px-0 pt-2">
                                    <ul class="list-unstyled small text-muted mb-0">
                                        @foreach ($detail['view_detail'] as $name => $info)
                                        <li><a class="m-0" href="{{ $info }}"
                                                style="font-size: 12px">{{ $name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 border-bottom mt-2">
                            <h2 class="accordion-header m-0" id="headingMenu_{{ $loop->index }}">
                                <button class="accordion-button collapsed custom-accordion-btn mb-0" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseMenu_{{ $loop->index }}"
                                    aria-expanded="false" aria-controls="collapseMenu_{{ $loop->index }}">
                                    SPACE CAPACITY
                                </button>
                            </h2>
                            <div id="collapseMenu_{{ $loop->index }}" class="accordion-collapse collapse"
                                style="background-color:#fbf9f4;" aria-labelledby="headingMenu_{{ $loop->index }}"
                                data-bs-parent="#venueAccordion_{{ $loop->index }}">
                                <div class="accordion-body px-0">
                                    <ul class="list-unstyled m-0">
                                        @foreach ($detail['space_capacity'] as $info)
                                        <li class="m-0" style="font-size: 12px">
                                            {{ basename($info) }}
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Book Button -->
                    <div class="mt-4">
                        <a href="mailto:hello@thegilroy.au" class="btn custom-book-btn px-4 py-2">ENQUIRE</a>
                    </div>

                    <hr class="my-5">
                </div>
                @endforeach
            </div>
        </div>
    </div>


</div>

@endsection

@section('js')

@endsection