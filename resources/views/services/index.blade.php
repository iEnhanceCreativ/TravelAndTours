@extends('layouts/content-nav-bar-layout', ['page' => 'Services'])

@section('title', 'Services')

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
                    <p class="fs-5 fw-light">Take a break from everyday work stress and plan a trip to explore beautiful
                        destinations!</p>
                </div>
            </div>

        </div>
        <!-- </row> -->
        <div class="row">
            <div class="col-lg-12">
                <div class="info-box">
                    <h4 class="text-black">Import Airports</h4>
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        <p>{{$message}}</p>
                    </div>
                    @endif
                    <form method="POST" action="{{route('migrate.airports')}}">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-primary">Migrate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header End -->
@endsection