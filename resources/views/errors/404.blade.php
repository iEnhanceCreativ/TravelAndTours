@extends('layouts/content-nav-bar-layout', ['page' => 'flights'])

@section('title', 'Flight Confirmation')

@section('content')
<div class="image-cover hero-header bg-white" style="background:url({{ asset('assets/img/banner-7.webp')}}) no-repeat;"
    data-overlay="6">
    <div class="container">

        <!-- Search Form -->
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12">
                <div class="position-relative text-center mb-5">
                    <img style="width:500px;" src="https://shreethemes.net/htdocs_error/something-lost.png">
                    <h1>Oops, Page not Found</h1>
                    <p class="fs-5 fw-light">The page you are looking for does not exist!</p>
                </div>
            </div>
        </div>
        <!-- </row> -->

    </div>
</div>
@endsection