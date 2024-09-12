@php
$container = 'container-fluid';
$containerNav = 'container-fluid';
@endphp

@extends('layouts/content-nav-bar-layout', ['page' => 'home'])

@section('title', 'Home')

@section('content')
<!-- ============================ Hero Banner  Start================================== -->
<div class="image-cover hero-header bg-white" style="background:url({{ asset('assets/img/25602.jpg') }})no-repeat;"
    data-overlay="5">
    <div class="container">
        <!-- Search Form -->
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12">
                <div class="position-relative text-center mb-5">
                    <h1>Explore The World <span class="position-relative z-4">Around<span
                                class="position-absolute top-50 start-50 translate-middle d-none d-md-block mt-4">
                                <svg width="185px" height="23px" viewBox="0 0 445.5 23">
                                    <path class="fill-white opacity-7"
                                        d="M409.9,2.6c-9.7-0.6-19.5-1-29.2-1.5c-3.2-0.2-6.4-0.2-9.7-0.3c-7-0.2-14-0.4-20.9-0.5 c-3.9-0.1-7.8-0.2-11.7-0.3c-1.1,0-2.3,0-3.4,0c-2.5,0-5.1,0-7.6,0c-11.5,0-23,0-34.5,0c-2.7,0-5.5,0.1-8.2,0.1 c-6.8,0.1-13.6,0.2-20.3,0.3c-7.7,0.1-15.3,0.1-23,0.3c-12.4,0.3-24.8,0.6-37.1,0.9c-7.2,0.2-14.3,0.3-21.5,0.6 c-12.3,0.5-24.7,1-37,1.5c-6.7,0.3-13.5,0.5-20.2,0.9C112.7,5.3,99.9,6,87.1,6.7C80.3,7.1,73.5,7.4,66.7,8 C54,9.1,41.3,10.1,28.5,11.2c-2.7,0.2-5.5,0.5-8.2,0.7c-5.5,0.5-11,1.2-16.4,1.8c-0.3,0-0.7,0.1-1,0.1c-0.7,0.2-1.2,0.5-1.7,1 C0.4,15.6,0,16.6,0,17.6c0,1,0.4,2,1.1,2.7c0.7,0.7,1.8,1.2,2.7,1.1c6.6-0.7,13.2-1.5,19.8-2.1c6.1-0.5,12.3-1,18.4-1.6 c6.7-0.6,13.4-1.1,20.1-1.7c2.7-0.2,5.4-0.5,8.1-0.7c10.4-0.6,20.9-1.1,31.3-1.7c6.5-0.4,13-0.7,19.5-1.1c2.7-0.1,5.4-0.3,8.1-0.4 c10.3-0.4,20.7-0.8,31-1.2c6.3-0.2,12.5-0.5,18.8-0.7c2.1-0.1,4.2-0.2,6.3-0.2c11.2-0.3,22.3-0.5,33.5-0.8 c6.2-0.1,12.5-0.3,18.7-0.4c2.2-0.1,4.4-0.1,6.7-0.1c11.5-0.1,23-0.2,34.6-0.4c7.2-0.1,14.4-0.1,21.6-0.1c12.2,0,24.5,0.1,36.7,0.1 c2.4,0,4.8,0.1,7.2,0.2c6.8,0.2,13.5,0.4,20.3,0.6c5.1,0.2,10.1,0.3,15.2,0.4c3.6,0.1,7.2,0.4,10.8,0.6c10.6,0.6,21.1,1.2,31.7,1.8 c2.7,0.2,5.4,0.4,8,0.6c2.9,0.2,5.8,0.4,8.6,0.7c0.4,0.1,0.9,0.2,1.3,0.3c1.1,0.2,2.2,0.2,3.2-0.4c0.9-0.5,1.6-1.5,1.9-2.5 c0.6-2.2-0.7-4.5-2.9-5.2c-1.9-0.5-3.9-0.7-5.9-0.9c-1.4-0.1-2.7-0.3-4.1-0.4c-2.6-0.3-5.2-0.4-7.9-0.6 C419.7,3.1,414.8,2.9,409.9,2.6z">
                                    </path>
                                </svg>
                            </span></span> You</h1>
                    <p class="fs-5 fw-light">Take a break from the daily work stress and embark on a journey to explore stunning destinations. Plan your trip and discover new places!</p>
                </div>
            </div>
            <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="navTabbs d-flex align-items-center justify-content-center w-100 mb-2">
                    <ul class="nav nav-pills lights medium justify-content-center mb-3" id="tour-pills-tab"
                        role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#hotels"><i
                                    class="fa-solid fa-hotel me-2"></i>Hotels</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#flights"><i
                                    class="fa-solid fa-jet-fighter me-2"></i>Flights</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tours"><i
                                    class="fa-solid fa-globe me-2"></i>Tour</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#cabs"><i
                                    class="fa-solid fa-car me-2"></i>Cab</a>
                        </li>
                    </ul>
                </div>
            </div> -->
        </div>
        <!-- </row> -->
    </div>
</div>
<!-- ============================ Hero Banner End ================================== -->

<!-- =========================== Tours Offers Start ====================================== -->
<section class="pt-5 pb-0">
    <div class="container">
        <div class="row align-items-center justify-content-center g-xl-4 g-lg-4 g-md-3 g-4">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="pop-touritems">
                    <a href="#" class="card rounded-3 border br-dashed border-2 m-0">
                        <div class="offers-container d-flex align-items-center justify-content-start p-2">
                            <div class="offers-flex position-relative">
                                <div class="offer-tags position-absolute start-0 top-0 mt-2 ms-2"><span
                                        class="label text-light bg-danger fw-medium">20% Off</span></div>
                                <div class="offers-pic">
                                    <img src="{{ asset('assets/img/city/ct-6.png') }}" class="img-fluid rounded"
                                        width="110" alt="">
                                </div>
                            </div>
                            <div class="offers-captions ps-3">
                                <h4 class="city fs-6 m-0 fw-bold">
                                    <span>Los Angeles</span>
                                </h4>
                                <p class="detail ellipsis-container">
                                    <span class="ellipsis-item__normal">Round-trip</span>
                                    <span class="separate ellipsis-item__normal"></span>
                                    <span class="ellipsis-item">3D/4N</span>
                                    <span class="separate ellipsis-item__normal"></span>
                                    <span class="ellipsis-item">3 Person</span>
                                </p>
                                <div class="booking-wrapes d-flex align-items-center justify-content-between">
                                    <h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
                                            class="price">$849 -
                                            $999</span></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="pop-touritems">
                    <a href="#" class="card rounded-3 border br-dashed border-2 m-0">
                        <div class="offers-container d-flex align-items-center justify-content-start p-2">
                            <div class="offers-flex position-relative">
                                <div class="offer-tags position-absolute start-0 top-0 mt-2 ms-2"><span
                                        class="label text-light bg-danger fw-medium">15% Off</span></div>
                                <div class="offers-pic">
                                    <img src="{{ asset('assets/img/city/ct-5.png') }}" class="img-fluid rounded"
                                        width="110" alt="">
                                </div>
                            </div>
                            <div class="offers-captions ps-3">
                                <h4 class="city fs-6 m-0 fw-bold">
                                    <span>United Kingdom</span>
                                </h4>
                                <p class="detail ellipsis-container">
                                    <span class="ellipsis-item__normal">Round-trip</span>
                                    <span class="separate ellipsis-item__normal"></span>
                                    <span class="ellipsis-item">3D/4N</span>
                                    <span class="separate ellipsis-item__normal"></span>
                                    <span class="ellipsis-item">2 Person</span>
                                </p>
                                <div class="booking-wrapes d-flex align-items-center justify-content-between">
                                    <h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
                                            class="price">$399 -
                                            $599</span></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="pop-touritems">
                    <a href="#" class="card rounded-3 border br-dashed border-2 m-0">
                        <div class="offers-container d-flex align-items-center justify-content-start p-2">
                            <div class="offers-flex position-relative">
                                <div class="offer-tags position-absolute start-0 top-0 mt-2 ms-2"><span
                                        class="label text-light bg-danger fw-medium">30% Off</span></div>
                                <div class="offers-pic">
                                    <img src="{{ asset('assets/img/city/ct-1.png') }}" class="img-fluid rounded"
                                        width="110" alt="">
                                </div>
                            </div>
                            <div class="offers-captions ps-3">
                                <h4 class="city fs-6 m-0 fw-bold">
                                    <span>France</span>
                                </h4>
                                <p class="detail ellipsis-container">
                                    <span class="ellipsis-item__normal">Round-trip</span>
                                    <span class="separate ellipsis-item__normal"></span>
                                    <span class="ellipsis-item">3D/4N</span>
                                    <span class="separate ellipsis-item__normal"></span>
                                    <span class="ellipsis-item">3 Person</span>
                                </p>
                                <div class="booking-wrapes d-flex align-items-center justify-content-between">
                                    <h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
                                            class="price">$569 -
                                            $799</span></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========================== Tours Offers End ====================================== -->

<!-- ============================ Popular Hotels Start ================================== -->
<section>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
                <div class="secHeading-wrap text-center mb-5">
                    <h2>Popular Resorts In Chicago</h2>
                    <p>Cicero famously orated against his political opponent Lucius Sergius Catilina.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center g-xl-4 g-lg-4 g-md-3 g-4">
            <!-- Single -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="pop-touritem">
                    <a href="#" class="card rounded-3 border m-0">
                        <div class="flight-thumb-wrapper">
                            <div class="popFlights-item-overHidden">
                                <img src="{{ asset('assets/img/hotel/hotel-1.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="touritem-middle position-relative p-3">
                            <div class="touritem-flexxer">
                                <h4 class="city fs-title m-0 fw-bold">
                                    <span>Mercure Singapore Tyrwhitt</span>
                                </h4>
                                <p class="detail ellipsis-container">
                                    <span class="ellipsis-item__normal">Delhi</span>
                                    <span class="separate ellipsis-item__normal"></span>
                                    <span class="ellipsis-item">3.5 Km From Delhi</span>
                                </p>
                                <div class="touritem-centrio mt-4">
                                    <div class="d-block position-relative"><span
                                            class="label bg-light-success text-success">Free Cancellation Till 10 Aug
                                            23</span></div>
                                    <div class="aments-lists mt-2">
                                        <ul class="p-0 row gx-3 gy-2 align-items-start flex-wrap">
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Cooling
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Pet Allow
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Free WiFi
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Food
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Parking
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Spa & Massage
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="trsms-foots mt-4">
                                <div class="flts-flex d-flex align-items-end justify-content-between">
                                    <div class="flts-flex-strat">
                                        <div class="d-flex align-items-center justify-content-start">
                                            <span class="label bg-seegreen text-light">15% Off</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="text-dark fw-bold fs-4">US$59</div>
                                            <div class="text-muted-2 fw-medium text-decoration-line-through ms-2">US$79
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start flex-column">
                                            <div class="text-muted-2 text-sm">Per Night</div>
                                        </div>
                                    </div>
                                    <div class="flts-flex-end">
                                        <div class="row align-items-center justify-content-end gx-2">
                                            <div class="col-auto text-start text-md-end">
                                                <div class="text-md text-dark fw-medium">Exceptional</div>
                                                <div class="text-md text-muted-2">3,014 reviews</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="square--40 rounded-2 bg-primary text-light">4.8</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Single -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="pop-touritem">
                    <a href="#" class="card rounded-3 border m-0">
                        <div class="flight-thumb-wrapper">
                            <div class="popFlights-item-overHidden">
                                <img src="{{ asset('assets/img/hotel/hotel-2.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="touritem-middle position-relative p-3">
                            <div class="touritem-flexxer">
                                <h4 class="city fs-title m-0 fw-bold">
                                    <span>Hotel Calmo Chinatown</span>
                                </h4>
                                <p class="detail ellipsis-container">
                                    <span class="ellipsis-item__normal">Delhi</span>
                                    <span class="separate ellipsis-item__normal"></span>
                                    <span class="ellipsis-item">3.5 Km From Delhi</span>
                                </p>
                                <div class="touritem-centrio mt-4">
                                    <div class="d-block position-relative"><span
                                            class="label bg-light-success text-success">Free
                                            Cancellation Till 10 Aug 23</span></div>
                                    <div class="aments-lists mt-2">
                                        <ul class="p-0 row gx-3 gy-2 align-items-start flex-wrap">
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Cooling
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Pet Allow
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Free WiFi
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Food
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Parking
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Spa & Massage
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="trsms-foots mt-4">
                                <div class="flts-flex d-flex align-items-end justify-content-between">
                                    <div class="flts-flex-strat">
                                        <div class="d-flex align-items-center justify-content-start">
                                            <span class="label bg-seegreen text-light">15% Off</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="text-dark fw-bold fs-4">US$59</div>
                                            <div class="text-muted-2 fw-medium text-decoration-line-through ms-2">US$79
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start flex-column">
                                            <div class="text-muted-2 text-sm">Per Night</div>
                                        </div>
                                    </div>
                                    <div class="flts-flex-end">
                                        <div class="row align-items-center justify-content-end gx-2">
                                            <div class="col-auto text-start text-md-end">
                                                <div class="text-md text-dark fw-medium">Exceptional</div>
                                                <div class="text-md text-muted-2">3,014 reviews</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="square--40 rounded-2 bg-primary text-light">4.8</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Single -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="pop-touritem">
                    <a href="#" class="card rounded-3 border m-0">
                        <div class="flight-thumb-wrapper">
                            <div class="popFlights-item-overHidden">
                                <img src="{{ asset('assets/img/hotel/hotel-3.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="touritem-middle position-relative p-3">
                            <div class="touritem-flexxer">
                                <h4 class="city fs-title m-0 fw-bold">
                                    <span>Siloso Beach Resort - Sentosa</span>
                                </h4>
                                <p class="detail ellipsis-container">
                                    <span class="ellipsis-item__normal">Delhi</span>
                                    <span class="separate ellipsis-item__normal"></span>
                                    <span class="ellipsis-item">3.5 Km From Delhi</span>
                                </p>
                                <div class="touritem-centrio mt-4">
                                    <div class="d-block position-relative"><span
                                            class="label bg-light-success text-success">Free
                                            Cancellation Till 10 Aug 23</span></div>
                                    <div class="aments-lists mt-2">
                                        <ul class="p-0 row gx-3 gy-2 align-items-start flex-wrap">
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Cooling
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Pet Allow
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Free WiFi
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Food
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Parking
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Spa & Massage
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="trsms-foots mt-4">
                                <div class="flts-flex d-flex align-items-end justify-content-between">
                                    <div class="flts-flex-strat">
                                        <div class="d-flex align-items-center justify-content-start">
                                            <span class="label bg-seegreen text-light">15% Off</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="text-dark fw-bold fs-4">US$59</div>
                                            <div class="text-muted-2 fw-medium text-decoration-line-through ms-2">US$79
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start flex-column">
                                            <div class="text-muted-2 text-sm">Per Night</div>
                                        </div>
                                    </div>
                                    <div class="flts-flex-end">
                                        <div class="row align-items-center justify-content-end gx-2">
                                            <div class="col-auto text-start text-md-end">
                                                <div class="text-md text-dark fw-medium">Exceptional</div>
                                                <div class="text-md text-muted-2">3,014 reviews</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="square--40 rounded-2 bg-primary text-light">4.8</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Single -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="pop-touritem">
                    <a href="#" class="card rounded-3 border m-0">
                        <div class="flight-thumb-wrapper">
                            <div class="popFlights-item-overHidden">
                                <img src="{{ asset('assets/img/hotel/hotel-4.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="touritem-middle position-relative p-3">
                            <div class="touritem-flexxer">
                                <h4 class="city fs-title m-0 fw-bold">
                                    <span>Royal Plaza on Scotts</span>
                                </h4>
                                <p class="detail ellipsis-container">
                                    <span class="ellipsis-item__normal">Delhi</span>
                                    <span class="separate ellipsis-item__normal"></span>
                                    <span class="ellipsis-item">3.5 Km From Delhi</span>
                                </p>
                                <div class="touritem-centrio mt-4">
                                    <div class="d-block position-relative"><span
                                            class="label bg-light-success text-success">Free
                                            Cancellation Till 10 Aug 23</span></div>
                                    <div class="aments-lists mt-2">
                                        <ul class="p-0 row gx-3 gy-2 align-items-start flex-wrap">
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Cooling
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Pet Allow
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Free WiFi
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Food
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Parking
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Spa & Massage
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="trsms-foots mt-4">
                                <div class="flts-flex d-flex align-items-end justify-content-between">
                                    <div class="flts-flex-strat">
                                        <div class="d-flex align-items-center justify-content-start">
                                            <span class="label bg-seegreen text-light">15% Off</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="text-dark fw-bold fs-4">US$59</div>
                                            <div class="text-muted-2 fw-medium text-decoration-line-through ms-2">US$79
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start flex-column">
                                            <div class="text-muted-2 text-sm">Per Night</div>
                                        </div>
                                    </div>
                                    <div class="flts-flex-end">
                                        <div class="row align-items-center justify-content-end gx-2">
                                            <div class="col-auto text-start text-md-end">
                                                <div class="text-md text-dark fw-medium">Exceptional</div>
                                                <div class="text-md text-muted-2">3,014 reviews</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="square--40 rounded-2 bg-primary text-light">4.8</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Single -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="pop-touritem">
                    <a href="#" class="card rounded-3 border m-0">
                        <div class="flight-thumb-wrapper">
                            <div class="popFlights-item-overHidden">
                                <img src="{{ asset('assets/img/hotel/hotel-5.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="touritem-middle position-relative p-3">
                            <div class="touritem-flexxer">
                                <h4 class="city fs-title m-0 fw-bold">
                                    <span>Dorsett Balestier Singapore</span>
                                </h4>
                                <p class="detail ellipsis-container">
                                    <span class="ellipsis-item__normal">Delhi</span>
                                    <span class="separate ellipsis-item__normal"></span>
                                    <span class="ellipsis-item">3.5 Km From Delhi</span>
                                </p>
                                <div class="touritem-centrio mt-4">
                                    <div class="d-block position-relative"><span
                                            class="label bg-light-success text-success">Free
                                            Cancellation Till 10 Aug 23</span></div>
                                    <div class="aments-lists mt-2">
                                        <ul class="p-0 row gx-3 gy-2 align-items-start flex-wrap">
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Cooling
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Pet Allow
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Free WiFi
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Food
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Parking
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Spa & Massage
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="trsms-foots mt-4">
                                <div class="flts-flex d-flex align-items-end justify-content-between">
                                    <div class="flts-flex-strat">
                                        <div class="d-flex align-items-center justify-content-start">
                                            <span class="label bg-seegreen text-light">15% Off</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="text-dark fw-bold fs-4">US$59</div>
                                            <div class="text-muted-2 fw-medium text-decoration-line-through ms-2">US$79
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start flex-column">
                                            <div class="text-muted-2 text-sm">Per Night</div>
                                        </div>
                                    </div>
                                    <div class="flts-flex-end">
                                        <div class="row align-items-center justify-content-end gx-2">
                                            <div class="col-auto text-start text-md-end">
                                                <div class="text-md text-dark fw-medium">Exceptional</div>
                                                <div class="text-md text-muted-2">3,014 reviews</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="square--40 rounded-2 bg-primary text-light">4.8</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Single -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="pop-touritem">
                    <a href="#" class="card rounded-3 border m-0">
                        <div class="flight-thumb-wrapper">
                            <div class="popFlights-item-overHidden">
                                <img src="{{ asset('assets/img/hotel/hotel-8.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="touritem-middle position-relative p-3">
                            <div class="touritem-flexxer">
                                <h4 class="city fs-title m-0 fw-bold">
                                    <span>Hotel Chancellor@Orchard</span>
                                </h4>
                                <p class="detail ellipsis-container">
                                    <span class="ellipsis-item__normal">Delhi</span>
                                    <span class="separate ellipsis-item__normal"></span>
                                    <span class="ellipsis-item">3.5 Km From Delhi</span>
                                </p>
                                <div class="touritem-centrio mt-4">
                                    <div class="d-block position-relative"><span
                                            class="label bg-light-success text-success">Free
                                            Cancellation Till 10 Aug 23</span></div>
                                    <div class="aments-lists mt-2">
                                        <ul class="p-0 row gx-3 gy-2 align-items-start flex-wrap">
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Cooling
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Pet Allow
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Free WiFi
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Food
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Parking
                                            </li>
                                            <li
                                                class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-check text-success me-1"></i>Spa & Massage
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="trsms-foots mt-4">
                                <div class="flts-flex d-flex align-items-end justify-content-between">
                                    <div class="flts-flex-strat">
                                        <div class="d-flex align-items-center justify-content-start">
                                            <span class="label bg-seegreen text-light">15% Off</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="text-dark fw-bold fs-4">US$59</div>
                                            <div class="text-muted-2 fw-medium text-decoration-line-through ms-2">US$79
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start flex-column">
                                            <div class="text-muted-2 text-sm">Per Night</div>
                                        </div>
                                    </div>
                                    <div class="flts-flex-end">
                                        <div class="row align-items-center justify-content-end gx-2">
                                            <div class="col-auto text-start text-md-end">
                                                <div class="text-md text-dark fw-medium">Exceptional</div>
                                                <div class="text-md text-muted-2">3,014 reviews</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="square--40 rounded-2 bg-primary text-light">4.8</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============================ Popular Hotels Start ================================== -->

<!-- ============================ Popular Routes Design Start ================================== -->
<section>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
                <div class="secHeading-wrap text-center mb-5">
                    <h2>Hot International Routes</h2>
                    <p>Cicero famously orated against his political opponent Lucius Sergius Catilina.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center gy-4 gx-3">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="pop-touritem">
                    <a href="geotrip-live/geotrip/flight-search.html" class="card rounded-3 h-100 m-0 shadow-sm">
                        <div class="flight-thumb-wrapper">
                            <div class="popFlights-item-overHidden">
                                <img src="{{ asset('assets/img/destination/tr-1.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="touritem-middle position-relative p-3">
                            <div class="touritem-flexxer">
                                <h4 class="city fs-6 m-0 fw-bold">
                                    <span>New York</span>
                                    <span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <span>Los Angeles</span>
                                </h4>
                                <p class="detail ellipsis-container">
                                    <span class="ellipsis-item__normal">Round-trip</span>
                                    <span class="separate ellipsis-item__normal"></span>
                                    <span class="ellipsis-item">3 days</span>
                                </p>
                            </div>
                            <div class="flight-foots">
                                <h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
                                        class="price">US$492</span>
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="pop-touritem">
                    <a href="geotrip-live/geotrip/flight-search.html" class="card rounded-3 h-100 m-0 shadow-sm">
                        <div class="flight-thumb-wrapper">
                            <div class="popFlights-item-overHidden">
                                <img src="{{ asset('assets/img/destination/tr-2.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="touritem-middle position-relative p-3">
                            <div class="touritem-flexxer">
                                <h4 class="city fs-6 m-0 fw-bold">
                                    <span>San Diego</span>
                                    <span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <span>San Jose</span>
                                </h4>
                                <p class="detail ellipsis-container">
                                    <span class="ellipsis-item__normal">Round-trip</span>
                                    <span class="separate ellipsis-item__normal"></span>
                                    <span class="ellipsis-item">3 days</span>
                                </p>
                            </div>
                            <div class="flight-foots">
                                <h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
                                        class="price">US$492</span>
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="pop-touritem">
                    <a href="geotrip-live/geotrip/flight-search.html" class="card rounded-3 h-100 m-0 shadow-sm">
                        <div class="flight-thumb-wrapper">
                            <div class="popFlights-item-overHidden">
                                <img src="{{ asset('assets/img/destination/tr-3.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="touritem-middle position-relative p-3">
                            <div class="touritem-flexxer">
                                <h4 class="city fs-6 m-0 fw-bold">
                                    <span>Dallas</span>
                                    <span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <span>Philadelphia</span>
                                </h4>
                                <p class="detail ellipsis-container">
                                    <span class="ellipsis-item__normal">Round-trip</span>
                                    <span class="separate ellipsis-item__normal"></span>
                                    <span class="ellipsis-item">3 days</span>
                                </p>
                            </div>
                            <div class="flight-foots">
                                <h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
                                        class="price">US$492</span>
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="pop-touritem">
                    <a href="geotrip-live/geotrip/flight-search.html" class="card rounded-3 h-100 m-0 shadow-sm">
                        <div class="flight-thumb-wrapper">
                            <div class="popFlights-item-overHidden">
                                <img src="{{ asset('assets/img/destination/tr-4.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="touritem-middle position-relative p-3">
                            <div class="touritem-flexxer">
                                <h4 class="city fs-6 m-0 fw-bold">
                                    <span>Nashville</span>
                                    <span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <span>Chicago</span>
                                </h4>
                                <p class="detail ellipsis-container">
                                    <span class="ellipsis-item__normal">Round-trip</span>
                                    <span class="separate ellipsis-item__normal"></span>
                                    <span class="ellipsis-item">3 days</span>
                                </p>
                            </div>
                            <div class="flight-foots">
                                <h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
                                        class="price">US$492</span>
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="pop-touritem">
                    <a href="geotrip-live/geotrip/flight-search.html" class="card rounded-3 h-100 m-0 shadow-sm">
                        <div class="flight-thumb-wrapper">
                            <div class="popFlights-item-overHidden">
                                <img src="{{ asset('assets/img/destination/tr-5.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="touritem-middle position-relative p-3">
                            <div class="touritem-flexxer">
                                <h4 class="city fs-6 m-0 fw-bold">
                                    <span>San Francisco</span>
                                    <span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <span>Houston</span>
                                </h4>
                                <p class="detail ellipsis-container">
                                    <span class="ellipsis-item__normal">Round-trip</span>
                                    <span class="separate ellipsis-item__normal"></span>
                                    <span class="ellipsis-item">3 days</span>
                                </p>
                            </div>
                            <div class="flight-foots">
                                <h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
                                        class="price">US$492</span>
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="pop-touritem">
                    <a href="geotrip-live/geotrip/flight-search.html" class="card rounded-3 h-100 m-0 shadow-sm">
                        <div class="flight-thumb-wrapper">
                            <div class="popFlights-item-overHidden">
                                <img src="{{ asset('assets/img/destination/tr-10.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="touritem-middle position-relative p-3">
                            <div class="touritem-flexxer">
                                <h4 class="city fs-6 m-0 fw-bold">
                                    <span>San Antonio</span>
                                    <span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <span>Columbus</span>
                                </h4>
                                <p class="detail ellipsis-container">
                                    <span class="ellipsis-item__normal">Round-trip</span>
                                    <span class="separate ellipsis-item__normal"></span>
                                    <span class="ellipsis-item">3 days</span>
                                </p>
                            </div>
                            <div class="flight-foots">
                                <h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
                                        class="price">US$492</span>
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="pop-touritem">
                    <a href="geotrip-live/geotrip/flight-search.html" class="card rounded-3 h-100 m-0 shadow-sm">
                        <div class="flight-thumb-wrapper">
                            <div class="popFlights-item-overHidden">
                                <img src="{{ asset('assets/img/destination/tr-9.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="touritem-middle position-relative p-3">
                            <div class="touritem-flexxer">
                                <h4 class="city fs-6 m-0 fw-bold">
                                    <span>Los Angeles</span>
                                    <span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <span>Kansas City</span>
                                </h4>
                                <p class="detail ellipsis-container">
                                    <span class="ellipsis-item__normal">Round-trip</span>
                                    <span class="separate ellipsis-item__normal"></span>
                                    <span class="ellipsis-item">3 days</span>
                                </p>
                            </div>
                            <div class="flight-foots">
                                <h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
                                        class="price">US$492</span>
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="pop-touritem">
                    <a href="geotrip-live/geotrip/flight-search.html" class="card rounded-3 h-100 m-0 shadow-sm">
                        <div class="flight-thumb-wrapper">
                            <div class="popFlights-item-overHidden">
                                <img src="{{ asset('assets/img/destination/tr-6.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="touritem-middle position-relative p-3">
                            <div class="touritem-flexxer">
                                <h4 class="city fs-6 m-0 fw-bold">
                                    <span>New Orleans</span>
                                    <span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <span>Los Angeles</span>
                                </h4>
                                <p class="detail ellipsis-container">
                                    <span class="ellipsis-item__normal">Round-trip</span>
                                    <span class="separate ellipsis-item__normal"></span>
                                    <span class="ellipsis-item">3 days</span>
                                </p>
                            </div>
                            <div class="flight-foots">
                                <h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
                                        class="price">US$492</span>
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center mt-5">
            <div class="col-xl-12 col-md-12 col-lg-12 text-center">
                <button type="button" class="btn btn-primary fw-medium px-5">Discover More Routes</button>
            </div>
        </div>
    </div>
</section>
<!-- ============================ Popular Routes Design Start ================================== -->
@endsection