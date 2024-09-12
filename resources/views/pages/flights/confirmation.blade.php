@extends('layouts/contentNavbarLayout', ['page' => 'flights'])

@section('title', 'Flight Confirmation')

@section('content')
<div class="image-cover bg-white" style="height: 200px; background-image: url({{ URL::asset('assets/img/flights_banner.png')}}); background-position: center;" data-overlay="5">
    <div class="container">
        <div class="flight-section text-center py-5">
            <h1 class="text-white inner-title ">Your booking has been confirmed</h1>
        </div>
    </div>
</div>

<div class="inner-shape"></div>
<section class="pt-3 gray-simple">
    <div class="container">
        <div class="row">

            <!-- Breadcrumb -->
            <!-- <div class="col-xl-12 col-lg-12 col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="text-primary">Home</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-primary">Flight</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Delhi To Los Angeles</li>
                    </ol>
                </nav>
            </div> -->
            @php
                $cabin = $bookingResult->slices[0]->segments[0]->passengers[0]->cabin_class;

                $departureCity = $bookingResult->slices[0]->origin->city_name;
                $departureIataCod = $bookingResult->slices[0]->origin->iata_code;

                $arrivalCity = $bookingResult->slices[0]->destination->city_name;
                $arrivalIataCode = $bookingResult->slices[0]->destination->iata_code;

                $departureDate = formatDateMonthDay($bookingResult->slices[0]->segments[0]->departing_at);
            @endphp
            <!-- Flight Info -->
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-md-12">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="crd-block align-items-start justify-content-start">
                                    
                                    <div class="crd-heaader-first ps-md-3">
                                        <div class="row">
                                        <div class="col-xl-1">
                                            <div class="square--70 rounded-2 bg-light-primary text-primary fs-3"><i
                                                        class="fa-solid fa-plane"></i></div>
                                            </div>
                                            <div class="col-xl-9">
                                                <div class="d-inline-flex align-items-center mb-1">
                                                    <span class="label fw-medium bg-light-success text-success text-capitalize">{{$cabin}}</span>
                                                </div>
                                                <div class="d-block">
                                                    <h4 class="mb-0">{{$departureCity}} ({{$departureIataCod}})<span class="text-muted-2 mx-3"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></span>
                                                        {{$arrivalCity}} ({{$arrivalIataCode}})</h4>
                                                    <div class="explotter-info">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                Booking Reference
                                                <h4>{{$bookingResult->booking_reference}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Flight Info -->
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="flights-accordion">
                                    <div class="flights-list-item">
                                        <div class="row gy-4 align-items-center justify-content-between">

                                            <div class="col">
                                                <!-- Departure Start -->
                                                @php 
                                                    $carrierName = $bookingResult->slices[0]->segments[0]->operating_carrier->name;
                                                    $carrierLogo = $bookingResult->slices[0]->segments[0]->operating_carrier->logo_symbol_url;
                                            
                                                    $departureDate = formatDateMonthDay($bookingResult->slices[0]->segments[0]->departing_at);
                                                    $departureTime = getTimeFromDate($bookingResult->slices[0]->segments[0]->departing_at);

                                                    $totalSegments = count($bookingResult->slices[0]->segments);
                                                    $arrivalDate = getTimeFromDate($bookingResult->slices[0]->segments[($totalSegments - 1)]->arriving_at);
                                                    $arrivalTime = getTimeFromDate($bookingResult->slices[0]->segments[($totalSegments - 1)]->arriving_at);

                                                    $cabin = $bookingResult->slices[0]->segments[0]->passengers[0]->cabin_class;

                                                    $totalStops = count($bookingResult->slices[0]->segments);
                                                    $stops = ($totalStops === 1) ? 'Direct' : ($totalStops - 1).' Stop';

                                                    $departureIataCode = $bookingResult->slices[0]->origin->iata_code;
                                                    $arrivalIataCode = $bookingResult->slices[0]->destination->iata_code;

                                                    $totalTimeDuration =  formatTimeDuration($bookingResult->slices[0]->duration);
                                                @endphp
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <span
                                                                class="label bg-light-primary text-primary me-2">Departure</span>
                                                            <span class="text-muted text-sm">{{$departureDate}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                        <div class="row gx-lg-5 gx-3 gy-4 align-items-center">

                                                            <div class="col-sm-3">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-start">
                                                                    <div class="d-start fl-pic">
                                                                        <img class="img-fluid"
                                                                            src="{{$carrierLogo}}" width="45"
                                                                            alt="image">
                                                                    </div>
                                                                    <div class="d-end fl-title ps-2">
                                                                        <div class="text-dark fw-medium">{{$carrierName}}
                                                                        </div>
                                                                        <div class="text-sm text-muted text-capitalize">{{$cabin}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col">
                                                                <div class="row gx-3 align-items-center">
                                                                    <div class="col-auto">
                                                                        <div class="text-dark fw-bold">{{$departureTime}}</div>
                                                                        <div class="text-muted text-sm fw-medium">{{$departureIataCode}}
                                                                        </div>
                                                                    </div>

                                                                    <div class="col text-center">
                                                                        <div class="flightLine departure">
                                                                            <div></div>
                                                                            <div></div>
                                                                        </div>
                                                                        <div class="text-sm fw-medium mt-3">
                                                                            {{$stops}}</div>
                                                                    </div>

                                                                    <div class="col-auto">
                                                                        <div class="text-dark fw-bold">{{$arrivalTime}}</div>
                                                                        <div class="text-muted text-sm fw-medium">{{$arrivalIataCode}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-auto">
                                                                <div class="text-dark fw-medium">{{$totalTimeDuration}}</div>
                                                                <div class="text-muted text-sm fw-medium">{{$stops}}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Departure End -->

                                                <!-- Return Start -->
                                                @if(count($bookingResult->slices) > 1)
                                                @php 
                                                    $carrierName = $bookingResult->slices[1]->segments[0]->operating_carrier->name;
                                                    $carrierLogo = $bookingResult->slices[1]->segments[0]->operating_carrier->logo_symbol_url;
                                            
                                                    $departureDate = formatDateMonthDay($bookingResult->slices[1]->segments[0]->departing_at);
                                                    $departureTime = getTimeFromDate($bookingResult->slices[1]->segments[0]->departing_at);

                                                    $totalSegments = count($bookingResult->slices[1]->segments);
                                                    $arrivalDate = getTimeFromDate($bookingResult->slices[1]->segments[($totalSegments - 1)]->arriving_at);
                                                    $arrivalTime = getTimeFromDate($bookingResult->slices[1]->segments[($totalSegments - 1)]->arriving_at);

                                                    $cabin = $bookingResult->slices[1]->segments[0]->passengers[0]->cabin_class;

                                                    $totalStops = count($bookingResult->slices[1]->segments);
                                                    $stops = ($totalStops === 1) ? 'Direct' : ($totalStops - 1).' Stop';

                                                    $departureIataCode = $bookingResult->slices[1]->origin->iata_code;
                                                    $arrivalIataCode = $bookingResult->slices[1]->destination->iata_code;

                                                    $totalTimeDuration =  formatTimeDuration($bookingResult->slices[1]->duration);
                                                @endphp
                                                <div class="row mt-5">
                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <span class="label bg-light-success text-success me-2">Return</span>
                                                            <span class="text-muted text-sm">{{$departureDate}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                        <div class="row gx-lg-5 gx-3 gy-4 align-items-center">

                                                            <div class="col-sm-3">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-start">
                                                                    <div class="d-start fl-pic">
                                                                        <img class="img-fluid"
                                                                            src="{{$carrierLogo}}" width="45"
                                                                            alt="image">
                                                                    </div>
                                                                    <div class="d-end fl-title ps-2">
                                                                        <div class="text-dark fw-medium">{{$carrierName}}
                                                                        </div>
                                                                        <div class="text-sm text-muted text-capitalize">{{$cabin}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col">
                                                                <div class="row gx-3 align-items-center">
                                                                    <div class="col-auto">
                                                                        <div class="text-dark fw-bold">{{$departureTime}}</div>
                                                                        <div class="text-muted text-sm fw-medium">{{$departureIataCode}}
                                                                        </div>
                                                                    </div>

                                                                    <div class="col text-center">
                                                                        <div class="flightLine departure">
                                                                            <div></div>
                                                                            <div></div>
                                                                        </div>
                                                                        <div class="text-sm fw-medium mt-3">
                                                                            {{$stops}}</div>
                                                                    </div>

                                                                    <div class="col-auto">
                                                                        <div class="text-dark fw-bold">{{$arrivalTime}}</div>
                                                                        <div class="text-muted text-sm fw-medium">{{$arrivalIataCode}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-auto">
                                                                <div class="text-dark fw-medium">{{$totalTimeDuration}}</div>
                                                                <div class="text-muted text-sm fw-medium">{{$stops}}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                <!-- Return End -->
                                                 <div class="py-5"><hr></div>
                                                 <!-- Flight INFO START -->
                                                @php
                                                    $flight = $bookingResult;
                                                @endphp
                                                <div class="modal-content">
                                                    <div class="modal-body px-4 py-4 px-xl-5 px-lg-5">
                                                        <!-- <div class="upper-section01 mb-3 mt-3">
                                                            <div class="alert alert-success" role="alert">
                                                                13% lower CO2 emissions than the average of all flights we offer for this route
                                                            </div>
                                                        </div> -->

                                                        <div class="airLines-fullsegment">
                                                            <!-- Departure Route -->
                                                            @php 
                                                                $destinationCity = $flight->slices[0]->destination->city_name;

                                                                $totalDuration = formatTimeDuration($flight->slices[0]->duration);
                                                                $totalStops = count($flight->slices[0]->segments);
                                                                $stops = ($totalStops === 1) ? 'Direct' : ($totalStops - 1).' Stop';
                                                                $dateArrival = "";
                                                            @endphp
                                                            <div class="segmentDeparture-wrap">
                                                                <div class="segmentDeparture-head mb-3">
                                                                    <h4 class="fs-5 m-0">Flight to {{ $destinationCity }}</h4>
                                                                    <p class="text-muted-2 fw-medium text-md m-0">{{$stops}} · {{$totalDuration}}</p>
                                                                </div>

                                                                @foreach($flight->slices[0]->segments as $keyIndex=>$segment)
                                                                @php 
                                                                    $cabin = $segment->passengers[0]->cabin_class_marketing_name;

                                                                    $carrierName = $segment->operating_carrier->name;
                                                                    $carrierLogo = $segment->operating_carrier->logo_symbol_url;
                                                                    $carrierIataCode = $segment->operating_carrier->iata_code;
                                                                    $carrierFlightNumber = $segment->marketing_carrier_flight_number;

                                                                    $departureCity = $segment->origin->city_name;
                                                                    $arrivalCity = $segment->destination->city_name;

                                                                    $departureIataCode = $segment->origin->iata_code;
                                                                    $ArrivalIataCode = $segment->destination->iata_code;

                                                                    $totalStops = count($flight->slices[0]->segments);
                                                                    $stops = ($totalStops === 1) ? 'Direct' : ($totalStops - 1).' Stop';
                                                                    $duration = formatTimeDuration($segment->duration);

                                                                    $departureDate = formatDateMonthDay($segment->departing_at);
                                                                    $departureTime = getTimeFromDate($segment->departing_at);

                                                                    $arrivalDate = formatDateMonthDay($segment->arriving_at);
                                                                    $arrivalTime = getTimeFromDate($segment->arriving_at);

                                                                    $originTerminal = $segment->origin_terminal;
                                                                    $destinationTerminal = $segment->destination_terminal;
                                                                @endphp

                                                                <!-- Layover start-->
                                                                @if($keyIndex !=0)
                                                                <div class="segmentDeparture-overlay">
                                                                    <div class="css-1894l3t"><span class="text-muted"><i
                                                                                class="fa-regular fa-clock me-1 mr-5"></i>Layover
                                                                            {{ getTimeInterval($dateArrival, $segment->departing_at ) }}</span></div>
                                                                </div>
                                                                @endif
                                                                <!-- Layover end-->

                                                                <!-- departure start-->
                                                                <div class="segmentDeparture-block">
                                                                    <div class="segmentDeparture blockfirst">
                                                                        <ul>
                                                                            <li>
                                                                                <div class="segmenttriox">
                                                                                    <h6 class="fs-6 fw-medium m-0">{{ $departureIataCode }} . {{$departureCity }}</h6>
                                                                                    @if($originTerminal)
                                                                                    <p class="text-muted text-md m-0">{{ 'Terminal '. $originTerminal }}</p>
                                                                                    @endif
                                                                                    <p class="text-muted text-md m-0">{{ $departureDate }} · {{$departureTime}}</p>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="segmenttriox">
                                                                                    <h6 class="fs-6 fw-medium m-0">{{ $ArrivalIataCode }} · {{ $arrivalCity }}</h6>
                                                                                    @if($destinationTerminal)
                                                                                    <p class="text-muted text-md m-0">{{ 'Terminal '. $destinationTerminal }}</p>
                                                                                    @endif
                                                                                    <p class="text-muted text-md m-0">{{$arrivalDate }} · {{$arrivalTime}}</p>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="segmentDeparture-blocklast">
                                                                        <div class="d-flex align-items-start timeline-stprs">
                                                                            <div class="timeline-stprsthumb"><img src="{{ $carrierLogo }}" class="img-fluid"
                                                                                    width="40" alt="">
                                                                            </div>
                                                                            <div class="timeline-stprscaps ps-2">
                                                                                <p class="text-sm m-0">{{ $carrierName }}<br>{{$carrierIataCode}}{{$carrierFlightNumber}} · {{ $cabin }}<br>Flight time {{$duration}}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- departure end-->
                                                                @php $dateArrival = $segment->arriving_at; @endphp
                                                                @endforeach
                                                            </div>


                                                            <!-- Returen Route -->
                                                            @if(count($flight->slices) > 1)
                                                            @php 
                                                                $destinationCity = $flight->slices[1]->destination->city_name;

                                                                $totalDuration = formatTimeDuration($flight->slices[1]->duration);
                                                                $totalStops = count($flight->slices[1]->segments);
                                                                $stops = ($totalStops === 1) ? 'Direct' : ($totalStops - 1).' Stop';
                                                                $dateArrival = "";
                                                            @endphp
                                                            <div class="segmentDeparture-wrap mt-5">
                                                                <div class="segmentDeparture-head mb-3">
                                                                    <h4 class="fs-5 m-0">Flight to {{ $flight->slices[1]->destination->city_name }}</h4>
                                                                    <p class="text-muted-2 fw-medium text-md m-0">{{$stops}} · {{$totalDuration}}</p>
                                                                </div>
                                                                
                                                                @foreach($flight->slices[1]->segments as $keyIndex=>$segment)
                                                                @php 
                                                                    $cabin = $segment->passengers[0]->cabin_class_marketing_name;

                                                                    $carrierName = $segment->operating_carrier->name;
                                                                    $carrierLogo = $segment->operating_carrier->logo_symbol_url;
                                                                    $carrierIataCode = $segment->operating_carrier->iata_code;
                                                                    $carrierFlightNumber = $segment->marketing_carrier_flight_number;

                                                                    $departureCity = $segment->origin->city_name;
                                                                    $arrivalCity = $segment->destination->city_name;

                                                                    $departureIataCode = $segment->origin->iata_code;
                                                                    $ArrivalIataCode = $segment->destination->iata_code;

                                                                    $totalStops = count($flight->slices[0]->segments);
                                                                    $stops = ($totalStops === 1) ? 'Direct' : ($totalStops - 1).' Stop';
                                                                    $duration = formatTimeDuration($segment->duration);

                                                                    $departureDate = formatDateMonthDay($segment->departing_at);
                                                                    $departureTime = getTimeFromDate($segment->departing_at);

                                                                    $arrivalDate = formatDateMonthDay($segment->arriving_at);
                                                                    $arrivalTime = getTimeFromDate($segment->arriving_at);

                                                                    $originTerminal = $segment->origin_terminal;
                                                                    $destinationTerminal = $segment->destination_terminal;
                                                                @endphp

                                                                <!-- Layover start-->
                                                                @if($keyIndex !=0)
                                                                <div class="segmentDeparture-overlay">
                                                                    <div class="css-1894l3t"><span class="text-muted"><i
                                                                                class="fa-regular fa-clock me-1 mr-5"></i>Layover
                                                                            {{ getTimeInterval($dateArrival, $segment->departing_at ) }}</span></div>
                                                                </div>
                                                                @endif
                                                                <!-- Layover end-->

                                                                <!-- return start-->
                                                                <div class="segmentDeparture-block">
                                                                    <div class="segmentDeparture blockfirst">
                                                                        <ul>
                                                                            <li>
                                                                                <div class="segmenttriox">
                                                                                    <h6 class="fs-6 fw-medium m-0">{{ $departureIataCode }} . {{$departureCity }}</h6>
                                                                                    @if($originTerminal)
                                                                                    <p class="text-muted text-md m-0">{{ 'Terminal '. $originTerminal }}</p>
                                                                                    @endif 
                                                                                    <p class="text-muted text-md m-0">{{ $departureDate }} · {{$departureTime}}</p>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="segmenttriox">
                                                                                    <h6 class="fs-6 fw-medium m-0">{{ $ArrivalIataCode }} · {{ $arrivalCity }}</h6>
                                                                                    @if($destinationTerminal)
                                                                                    <p class="text-muted text-md m-0">{{ 'Terminal '. $destinationTerminal }}</p>
                                                                                    @endif
                                                                                    <p class="text-muted text-md m-0">{{$arrivalDate }} · {{$arrivalTime}}</p>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="segmentDeparture-blocklast">
                                                                        <div class="d-flex align-items-start timeline-stprs">
                                                                            <div class="timeline-stprsthumb"><img src="{{ $carrierLogo }}" class="img-fluid"
                                                                                    width="40" alt="">
                                                                            </div>
                                                                            <div class="timeline-stprscaps ps-2">
                                                                                <p class="text-sm m-0">{{ $carrierName }}<br>{{$carrierIataCode}}{{$carrierFlightNumber}} · {{ $cabin }}<br>Flight time {{$duration}}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- return end-->
                                                                @php $dateArrival = $segment->arriving_at; @endphp
                                                                @endforeach
                                                            </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Flight INFO END -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Login Alert -->
                        <!-- <div class="col-xl-12 col-lg-12 col-md-12">
                            <div
                                class="d-flex align-items-center justify-content-start py-3 px-3 rounded-2 bg-success mb-4">
                                <p class="text-light fw-semibold m-0"><i
                                        class="fa-solid fa-gift text-warning me-2"></i><a href="#"
                                        class="text-white text-decoration-underline">Login</a> or <a href="#"
                                        class="text-white text-decoration-underline">Register</a> to earn upto 100 coins
                                    (approx 1.72 US$)
                                    after check-out.
                                </p>
                                <p>
                                </p>
                            </div>
                        </div> -->

                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <!-- Baggages -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h6 class="fw-semibold mb-0">Baggage Information</h6>
                                </div>
                                @foreach($bookingResult->services as $key=>$service)
                                <div class="card-body">
                                    <h6 class="fw-semibold mb-1">Passenger: {{$key+1}}</h6>
                                    <div>{{ $key+1 }} Checked Bag - {{$service->metadata->maximum_weight_kg}}kg</div>
                                </div>
                                @endforeach
                            </div>
                        </div>


                        <!-- Traveler Details -->
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <!-- Overview -->
                            <div class="card  mb-4">
                                <div class="card-header">
                                    <h6 class="fw-semibold mb-0">Traveler Details</h6>
                                </div>

                                <div class="card-body">
                                
                                    <div class="gray rounded-3 position-relative p-4 mb-3">
                                    @foreach($bookingResult->passengers as $key=>$passenger)
                                        <div
                                            class="row align-items-center row-cols-xl-4 row-cols-lg-4 row-cols-md-3 col-cols-2">
                                            <div class="col">
                                                <p class="text-dark fw-semibold lh-base">Name</p>
                                                <p class="text-muted-2 fw-medium lh-1">{{$passenger->given_name}} {{$passenger->family_name}}</p>
                                            </div>
                                            <div class="col">
                                                <p class="text-dark fw-semibold lh-base">Birth Date</p>
                                                <p class="text-muted-2 fw-medium lh-1">{{$passenger->born_on}}</p>
                                            </div>
                                            <div class="col">
                                                <p class="text-dark fw-semibold lh-base">Gender</p>
                                                <p class="text-muted-2 fw-medium lh-1">{{$passenger->gender === 'm'? 'Male': 'Female' }}</p>
                                            </div>
                                            <!-- <div class="col">
                                                <p class="text-dark fw-semibold lh-base">Nationality</p>
                                                <p class="text-muted-2 fw-medium lh-1">{{$passenger->nationality}}</p>
                                            </div> -->
                                        </div>
                                        @endforeach
                                    </div>
                                   
                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-2">
                                        <h5>Personal Information</h5>
                                    </div>
                                    <div class="gray rounded-3 position-relative p-4 mb-3">
                                        <div
                                            class="row align-items-center col-cols-2">
                                            <div class="col">
                                                <p class="text-dark fw-semibold lh-base">Email Address</p>
                                                <p class="text-muted-2 fw-medium lh-1">{{$bookingResult->passengers[0]->email}}</p>
                                            </div>
                                            <div class="col">
                                                <p class="text-dark fw-semibold lh-base">Mobile number</p>
                                                <p class="text-muted-2 fw-medium lh-1">{{$bookingResult->passengers[0]->phone_number}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Traveler documents start-->
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <!-- Overview -->
                            <div class="card  mb-4">
                                <div class="card-header">
                                    <h6 class="fw-semibold mb-0">Travel documents</h6>
                                </div>

                                <div class="card-body">
                                    <p>Remember to check that your passport validity meets the entry requirements of the
                                    destination you're flying to. You'll also need to ensure that you have the relevant
                                    visa, entry permit, health and other documents required by law for the destination,
                                    including any transit countries. Failure to meet these requirements may result in denied
                                    boarding or detention and deportation by the respective authorities.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Traveler documents End -->

                        <!-- Check-in information start-->
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <!-- Overview -->
                            <div class="card  mb-4">
                                <div class="card-header">
                                    <h6 class="fw-semibold mb-0">Check-in information</h6>
                                </div>
                                <div class="card-body">
                                    <p>Self check-in 14 days before your departure via our website, mobile app or airport
                                        kiosks.</p>
                                    <p>You're advised to use our Self Baggage Drop facility available at selected airports.
                                        Remember to print your bag tags beforehand.</p>
                                    <p>Proceed to the Document Check counter to verify your travel documents if it's required.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Check-in information End -->

                        <!-- Prohibited items start-->
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <!-- Overview -->
                            <div class="card  mb-4">
                                <div class="card-header">
                                    <h6 class="fw-semibold mb-0">Prohibited items</h6>
                                </div>
                                <div class="card-body">
                                <p>Liquids, aerosols and gels (LAGs): International regulations restricts the quantity of LAGs you
                                    can carry on board international flights. LAGs must be in containers of 100 ml / 3.4oz (volume),
                                    100 grams (weight) or less. It must fit comfortably in a transparent re-sealable plastic bag.
                                </p>
                                <p>Inorganic powders: You're not allowed to take on board any inorganic powders such as salt, sand,
                                    talcum powder and/or other powders that from time to time may be restricted. Currently the
                                    United States, Australia and New Zealand authorities have restricted any inorganic powder
                                    carried on board to less than 350 ml/12 oz. These contents may be subject to additional security
                                    checks, and/or may be retained by the security officers.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Prohibited items End -->

                        <!-- Prohibited items start-->
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <!-- Overview -->
                            <div class="card  mb-4">
                                <div class="card-header">
                                    <h6 class="fw-semibold mb-0">Boarding</h6>
                                </div>
                                <div class="card-body">
                                <p>You're required to be at the boarding gate at least 20 minutes before the scheduled time of
                                    departure or you'll be denied boarding.</p>
                                <p>Airports have long queues due to complex security checks. Check in early and proceed immediately
                                    to the boarding gate.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Prohibited items End -->

                    </div>

                    <!--Side Bar Start-->
                    <div class="col-xl-3 col-lg-4 col-md-12">
                        <div class="card mb-4 mt-lg-0 mt-4">
                            <div class="card-header">
                                <h4>Summary </h4>
                            </div>
                            <div class="card-body py-2">
                                <div class="price-summary">
                                    <ul class="list-group">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center border-0 py-2 px-0">
                                            <span class="baggage-title">Status</span>
                                            <span class="label fw-semibold bg-light-success text-success text-capitalize">Confirmed</span>
                                        </li>
                                        <li class="row list-group-item d-flex justify-content-between align-items-center border-0 py-2 px-0">
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <a href="{{route('flight-pdf', $bookingResult->booking_reference)}}" class="btn btn-md full-width px-5 btn-primary fw-medium"
                                                    type="button">Export Itirenary</a>
                                            </div>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!--Side Bar End-->
                </div>

            </div>
        </div>
    </div>
</section>
@endsection