@extends('layouts/contentNavbarLayout', ['page' => 'flights'])

@section('title', 'Flights')

@section('content')
<!-- Header Start -->
<div class="image-cover hero-header bg-white" style="background:url({{ asset('assets/img/banner-7.webp')}}) no-repeat;"
    data-overlay="6">
    <div class="container">

        <!-- Search Form -->
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12">
                <div class="position-relative text-center mb-5">
                    <h1>Start Your Trip with <span class="position-relative z-4">DK Inernational</span></h1>
                    <p class="fs-5 fw-light">Take a break from everyday work stress and plan a trip to explore beautiful destinations!</p>
                </div>
            </div>
            <x-search-flight-form/>
        </div>
        <!-- </row> -->

    </div>
</div>

<!-- Header End -->
@endsection