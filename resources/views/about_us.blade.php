@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <div class="py-1" style="background-color: #051F20;">
        <div class="container">

            <div class="row align-items-center mb-5" style="margin-top: 60px; border-radius:10px;">
                <div class="col-lg-6 text-light order-lg-last text-center text-lg-start ps-lg-5">
                    <h3 class="fw-bold text-uppercase mb-4" style="color: #d4a373; font-size: 2.5rem;">
                        About Us
                    </h3>
                    <p class="fs-5 lh-lg mb-4">
                        Welcome to Gilroy Restaurant and Bar, a stylish and elegant four-storey venue on Chapel Street,
                        South Yarra. Our delicious Italian-inspired fare comes complete with the classics you expect,
                        and some dishes that will surprise and delight.
                    </p>
                    <p class="fs-5 lh-lg mb-4">
                        A destination for casual catch-ups, business lunches, after work drinks, or romantic evenings,
                        Gilroy provides a space for all experiences. Our open-air rooftop offers walk-in room, with a
                        cocktail list that will see you arriving early for dinner and our first floor dining and bar
                        has a cosy fireplace with a glass bottle installation across the ceiling.
                    </p>
                    <p class="fw-semibold fs-5 lh-lg">
                        We look forward to welcoming you to Gilroy.
                    </p>
                </div>

                {{-- Image --}}
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="{{ asset('images/owner.png') }}" alt="Gilroy Restaurant Owner"
                        class="img-fluid rounded shadow w-100 h-100 object-fit-cover">
                </div>
            </div>

            <div class="row g-4 mt-4 mb-5">
                <div class="col-lg-6">
                    <div class="p-4 p-md-5 border rounded text-light h-100"
                        style="border-color:#d4a373; font-size: 1rem; line-height: 1.8;">
                        <p>
                            Gilroy has been years in the making. Growing up in his father’s restaurant,
                            it became owner Ali Mousavi’s life’s passion to create a space for people
                            to celebrate together over a delicious meal. At Gilroy, the pizza crust recipe
                            has been developed and refined over four decades – a special part of the heritage
                            of the food that is being lovingly prepared.
                        </p>
                        <p class="fw-semibold">
                            It’s his father’s recipe that is the heart and soul of Gilroy – it is where Gilroy began.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="p-4 p-md-5 border rounded text-light h-100"
                        style="border-color:#d4a373; font-size: 1rem; line-height: 1.8;">
                        <p>
                            Decades before its inception, the idea of Gilroy had already begun to grow when Ali began
                            working in his father’s restaurant. Finally the right time to create an elegant destination
                            to delight customers with superb quality and flavoursome food presented itself.
                        </p>
                        <p>
                            Named for his daughter, Gilroy is more than a restaurant for entrepreneur Ali –
                            it combines his love of family, exquisite taste and beautiful spaces.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
