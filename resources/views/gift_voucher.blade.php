@extends('layouts.app')

@section('title', 'Gift Vouchers')

@section('content')

<!-- banner Section -->
<section class="banner">
    <img src="{{ asset('images/vouchers.png') }}" alt="Restaurant Interior">
</section>

<!-- Gift Voucher Section -->
<section class="gift-section">
    <div class="container">
        <h5>Gift Vouchers</h1>
        <h2>
            Give the gift of a dining experience at The Gilroy Bar&Eatery venue.
            It's the perfect way to say congratulations, thank you, or send well wishes to someone special.
        </h2>
        <div class="voucher-text">
            <p>
                We offer digital vouchers that can be used at any of our venues:
                <a href="#">Bar&Eatery</a>, and <a href="#">Next Door</a>.
                Digital gift vouchers are instantly sent. You can fill out the voucher and email it to a specified email address.
            </p>

            <p>
                Physical Gift Cards are also available to purchase from the front desk at Margaret, Next Door and Gran Torino.
            </p>
        </div>

        <div class="btns">
            <button>Gran Torino Gift Voucher</button>
            <button>The Gilroy Gift Voucher</button>
        </div>
    </div>
</section>
@endsection
