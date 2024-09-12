@extends('layouts/content-nav-bar-layout', ['page' => 'flights'])

@section('title', 'Flight Details')

@section('content')
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
                $cabin = $selectedFlight->slices[0]->segments[0]->passengers[0]->cabin_class;

                $departureCity = $selectedFlight->slices[0]->origin->city_name;
                $departureIataCod = $selectedFlight->slices[0]->origin->iata_code;

                $arrivalCity = $selectedFlight->slices[0]->destination->city_name;
                $arrivalIataCode = $selectedFlight->slices[0]->destination->iata_code;

                $departureDate = formatDateMonthDay($selectedFlight->slices[0]->segments[0]->departing_at);
            @endphp
            <!-- Flight Info -->
            <form method="POST" action="{{route('flights.booking', $selectedFlight->id)}}">
            @csrf
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-md-12">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="crd-block d-md-flex align-items-start justify-content-start">
                                    <div class="crd-heaader-0 flex-shrink-0 mb-3 mb-md-0">
                                        <div class="square--70 rounded-2 bg-light-primary text-primary fs-3"><i
                                                class="fa-solid fa-plane"></i></div>
                                    </div>
                                    <div class="crd-heaader-first ps-md-3">
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
                                                    $carrierName = $selectedFlight->slices[0]->segments[0]->operating_carrier->name;
                                                    $carrierLogo = $selectedFlight->slices[0]->segments[0]->operating_carrier->logo_symbol_url;
                                            
                                                    $departureDate = formatDateMonthDay($selectedFlight->slices[0]->segments[0]->departing_at);
                                                    $departureTime = getTimeFromDate($selectedFlight->slices[0]->segments[0]->departing_at);

                                                    $totalSegments = count($selectedFlight->slices[0]->segments);
                                                    $arrivalDate = getTimeFromDate($selectedFlight->slices[0]->segments[($totalSegments - 1)]->arriving_at);
                                                    $arrivalTime = getTimeFromDate($selectedFlight->slices[0]->segments[($totalSegments - 1)]->arriving_at);

                                                    $cabin = $selectedFlight->slices[0]->segments[0]->passengers[0]->cabin_class;

                                                    $totalStops = count($selectedFlight->slices[0]->segments);
                                                    $stops = ($totalStops === 1) ? 'Direct' : ($totalStops - 1).' Stop';

                                                    $departureIataCode = $selectedFlight->slices[0]->origin->iata_code;
                                                    $arrivalIataCode = $selectedFlight->slices[0]->destination->iata_code;

                                                    $totalTimeDuration =  formatTimeDuration($selectedFlight->slices[0]->duration);
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
                                                @if(count($selectedFlight->slices) > 1)
                                                @php 
                                                    $carrierName = $selectedFlight->slices[1]->segments[0]->operating_carrier->name;
                                                    $carrierLogo = $selectedFlight->slices[1]->segments[0]->operating_carrier->logo_symbol_url;
                                            
                                                    $departureDate = formatDateMonthDay($selectedFlight->slices[1]->segments[0]->departing_at);
                                                    $departureTime = getTimeFromDate($selectedFlight->slices[1]->segments[0]->departing_at);

                                                    $totalSegments = count($selectedFlight->slices[1]->segments);
                                                    $arrivalDate = getTimeFromDate($selectedFlight->slices[1]->segments[($totalSegments - 1)]->arriving_at);
                                                    $arrivalTime = getTimeFromDate($selectedFlight->slices[1]->segments[($totalSegments - 1)]->arriving_at);

                                                    $cabin = $selectedFlight->slices[1]->segments[0]->passengers[0]->cabin_class;

                                                    $totalStops = count($selectedFlight->slices[1]->segments);
                                                    $stops = ($totalStops === 1) ? 'Direct' : ($totalStops - 1).' Stop';

                                                    $departureIataCode = $selectedFlight->slices[1]->origin->iata_code;
                                                    $arrivalIataCode = $selectedFlight->slices[1]->destination->iata_code;

                                                    $totalTimeDuration =  formatTimeDuration($selectedFlight->slices[1]->duration);
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
                                                    $flight = $selectedFlight;
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
                                                                    $cabin = $segment->passengers[0]->cabin->marketing_name;

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
                                                                    $cabin = $segment->passengers[0]->cabin->marketing_name;

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
                                    <h6 class="fw-semibold mb-0">Add Extra Baggage</h6>
                                </div>
                                @foreach($selectedFlight->passengers as $key=>$passenger)
                                <div class="card-body">
                                    <h6 class="fw-semibold mb-1">Passenger: {{$key+1}}</h6>
                                    <x-flight-baggages :offerId="$selectedFlight->id" :passengerId="$passenger->id"/>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Flight Details -->
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <!-- Overview -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h6 class="fw-semibold mb-0">Overview</h6>
                                </div>

                                <div class="card-body">
                                    <p class="mb-0">However, reviewers tend to be distracted by comprehensible content,
                                        say, a random text copied from a newspaper or the internet. The are likely to
                                        focus on the text, disregarding the layout and its elements. Besides, random
                                        text risks to be unintendedly humorous or offensive, an unacceptable risk in
                                        corporate environments. Lorem ipsum and its many variants have been employed
                                        since the early 1960ies, and quite likely since the sixteenth century.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Highlights -->
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h6 class="fw-semibold mb-0">Highlights</h6>
                                </div>

                                <div class="card-body">
                                    <ul class="row align-items-center p-0 g-3">
                                        <li class="col-md-6">
                                            <i class="fa-solid fa-check text-success me-2"></i>A fantastic experience at
                                            the Niagara
                                            Falls
                                        </li>
                                        <li class="col-md-6">
                                            <i class="fa-solid fa-check text-success me-2"></i>Wonderful experience at
                                            the Harborfront
                                        </li>
                                        <li class="col-md-6">
                                            <i class="fa-solid fa-check text-success me-2"></i>Breathtaking views at the
                                            Night at
                                            Niagara Falls
                                        </li>
                                        <li class="col-md-6">
                                            <i class="fa-solid fa-check text-success me-2"></i>Splendid experiences with
                                            the City
                                            tours.
                                        </li>
                                        <li class="col-md-6">
                                            <i class="fa-solid fa-check text-success me-2"></i>All led out world this
                                            music while
                                            asked.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Traveler Details -->
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <!-- Overview -->
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="fw-semibold mb-0">Traveler Details</h6>
                                </div>

                                <div class="card-body">

                                    <div class="bg-success bg-opacity-10 rounded-2 p-3 mb-3">
                                        <p class="h6 text-md mb-0"><span class="badge bg-success me-2">New</span>Please
                                            enter your name as per your passport ID</p>
                                    </div>

                                    <!-- <div class="gray rounded-3 position-relative p-4 mb-3">
                                        <div class="position-absolute top-50 end-0 translate-middle-y me-2">
                                            <a href="#" class="text-primary fs-5"><i
                                                    class="fa-solid fa-circle-xmark"></i></a>
                                        </div>
                                        <div
                                            class="row align-items-center row-cols-xl-5 row-cols-lg-3 row-cols-md-3 col-cols-2">
                                            <div class="col">
                                                <p class="text-dark fw-semibold lh-base">Name</p>
                                                <p class="text-muted-2 fw-medium lh-1">John Doe</p>
                                            </div>
                                            <div class="col">
                                                <p class="text-dark fw-semibold lh-base">Passport</p>
                                                <p class="text-muted-2 fw-medium lh-1">BKP1256GH</p>
                                            </div>
                                            <div class="col">
                                                <p class="text-dark fw-semibold lh-base">Gender</p>
                                                <p class="text-muted-2 fw-medium lh-1">Male</p>
                                            </div>
                                            <div class="col">
                                                <p class="text-dark fw-semibold lh-base">Age</p>
                                                <p class="text-muted-2 fw-medium lh-1">42+</p>
                                            </div>
                                            <div class="col">
                                                <p class="text-dark fw-semibold lh-base">Nationality</p>
                                                <p class="text-muted-2 fw-medium lh-1">Singaporean</p>
                                            </div>
                                        </div>
                                    </div> -->

                                    <!-- <div class="gray rounded-3 position-relative p-4 mb-4">
                                        <div class="position-absolute top-50 end-0 translate-middle-y me-2">
                                            <a href="#" class="text-primary fs-5"><i
                                                    class="fa-solid fa-circle-xmark"></i></a>
                                        </div>
                                        <div
                                            class="row align-items-center row-cols-xl-5 row-cols-lg-3 row-cols-md-3 col-cols-2">
                                            <div class="col">
                                                <p class="text-dark fw-semibold lh-base">Name</p>
                                                <p class="text-muted-2 fw-medium lh-1">Smrithi Puran</p>
                                            </div>
                                            <div class="col">
                                                <p class="text-dark fw-semibold lh-base">Passport</p>
                                                <p class="text-muted-2 fw-medium lh-1">SPK6524GY</p>
                                            </div>
                                            <div class="col">
                                                <p class="text-dark fw-semibold lh-base">Gender</p>
                                                <p class="text-muted-2 fw-medium lh-1">Female</p>
                                            </div>
                                            <div class="col">
                                                <p class="text-dark fw-semibold lh-base">Age</p>
                                                <p class="text-muted-2 fw-medium lh-1">38+</p>
                                            </div>
                                            <div class="col">
                                                <p class="text-dark fw-semibold lh-base">Nationality</p>
                                                <p class="text-muted-2 fw-medium lh-1">Indian</p>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="full-width d-flex flex-column mb-4 position-relative">
                                        <div class="col-xl-12 col-lg-12 col-md-12 mb-2">
                                            <h5>Passengers</h5>
                                        </div>
                                        @for($i=1; $i<=$params->adult; $i++)
                                            <div class="row align-items-stat">
                                                <div class="col-xl-12 col-lg-12 col-md-12 mb-2">
                                                    <h5>Adult: {{$i}}</h5>
                                                </div>
                                                <input name="passenger_type[]" type="hidden" value="Adult">
                                                <input name="passenger_id[]" type="hidden" value="{{$selectedFlight->passengers[$i-1]->id}}">
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Title</label>
                                                        <select class="select form-control select2-hidden-accessible"
                                                            data-select2-id="select2-data-1-f9ee" tabindex="-1"
                                                            aria-hidden="true" name="title[]">
                                                            <option value="Mr" data-select2-id="select2-data-3-t09a">Mr</option>
                                                            <option value="Ms" data-select2-id="select2-data-3-t09a">Ms</option>
                                                            <option value="Mrs" data-select2-id="select2-data-3-t09a">Mrs</option>
                                                            <option value="Miss" data-select2-id="select2-data-3-t09a">Miss</option>
                                                            <option value="Master" data-select2-id="select2-data-3-t09a">Master</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6"></div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">First Name</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Your First Name" name="first_name[]">
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Last Name</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Your Last Name" name="last_name[]">
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Passport Number</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Passport Number Here" name="passport[]">
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Passport Expire</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Passport Expire Date"  name="passport_expiry[]">
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Date of birth</label>
                                                        <input class="form-control fw-bold flatpickr-input choosedate" type="text"
                                                            placeholder="Select Date.." readonly="readonly" name="date_of_birth[]">
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Nationality</label>
                                                        <input class="form-control fw-bold flatpickr-input" type="text"
                                                             name="nationality[]">
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Gender</label>
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline">
                                                                <input checked="checked" class="form-check-input" type="radio" name="gender[{{$i}}][]"
                                                                    id="male" value="m">
                                                                <label class="form-check-label" for="male">Male</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="gender[{{$i}}][]"
                                                                    id="female" value="f">
                                                                <label class="form-check-label" for="female">Female</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <button class="btn btn-md px-5 btn-light-primary fw-medium"
                                                        type="button">Add Passengers</button>
                                                </div> -->

                                            </div>
                                            <hr class="my-3"/>
                                        @endfor
                                    </div>

                                    <div class="full-width d-flex flex-column mb-2 position-relative">
                                        <div class="row align-items-stat">
                                            <div class="col-xl-12 col-lg-12 col-md-12 mb-2">
                                                <h5>Personal Information</h5>
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Email Address</label>
                                                    <input type="text" class="form-control" name="primary_email" placeholder="Email Here">
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Mobile number</label>
                                                    <input type="tel" class="form-control" name="primary_contact_number"
                                                        placeholder="Contact Number">
                                                </div>
                                            </div>

                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <button class="btn btn-md full-width px-5 btn-primary fw-medium"
                                                    type="submit">Submit &amp; Proceed for Payment</button>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Sidebar -->
                     @php 

                        $baseFare = $selectedFlight->base_amount;
                        $taxAmount = $selectedFlight->tax_amount;
                        $totalAmount = $selectedFlight->total_amount;
                        $serviceFee = 0;

                        $currency = $selectedFlight->base_currency;
                     @endphp
                    <div class="col-xl-3 col-lg-4 col-md-12">
                        <div class="card mb-4 mt-lg-0 mt-4">
                            <div class="card-header">
                                <h4>Price Summary ({{$currency}})</h4>
                            </div>
                            <div class="card-body py-2">
                                <div class="price-summary">
                                    <ul class="list-group">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center border-0 py-2 px-0">
                                            Base Fare
                                            <span class="fw-semibold text-dark">{{$baseFare}}</span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center border-0 py-2 px-0">
                                            Tax Amount
                                            <span class="fw-semibold text-dark">{{$taxAmount}}</span>
                                        </li>
                                        @foreach($selectedFlight->passengers as $key=>$passenger)
                                        <li
                                            class="baggage-{{$passenger->id}} d-none list-group-item d-flex justify-content-between align-items-center border-0 py-2 px-0">
                                            <span class="baggage-title">Baggage</span>
                                            <span class="fw-semibold text-dark baggage-price">0.00</span>
                                        </li>
                                        @endforeach
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center border-0 py-2 px-0">
                                            Other Services
                                            <span class="fw-semibold text-dark">{{number_format($serviceFee, 2)}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-footer bg-white border-top py-3">
                                <div class="total d-flex align-items-center justify-content-between" data-total="{{$totalAmount}}">
                                    <p class="fw-semibold text-muted-2 mb-0">Total Price ({{$currency}})</p>
                                    <p class="fw-semibold text-primary mb-0">  $ <span class="total-amount">{{$totalAmount}}</span></p>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="card border rounded-3">
                            <div class="card-header">
                                <h4>Coupons &amp; Offers</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group position-relative">
                                    <input type="text" class="form-control" placeholder="Have a Coupon Code?" value="">
                                    <a href="#"
                                        class="position-absolute top-50 end-0 fw-semibold translate-middle text-primary disable">Apply</a>
                                </div>
                            </div>
                        </div> -->
                    </div>

                </div>
            </div>
            </form>
        </div>
    </div>
</section>
<script>
    // request to api for the value
    $('.baggages').on('change', function(){
        const baggage = $(this).val();
        let addon = 0;
        if(baggage != '0'){
            let match = baggage.split('-');
            if (match.length === 3) {
                $(`.baggage-${match[1]}`).removeClass('d-none');
                $(`.baggage-${match[1]}`).find('.baggage-price').text(`${match[2]}`);
                addon = parseFloat(match[2]);
            } else {
                $(`.baggage-${match[1]}`).addClass('d-none');
            }
        }else{
            var pass = $(this).data('passenger');
            $(`.baggage-${pass}`).addClass('d-none');
        }
        calculate(addon)
    });

    const calculate = (addOn) => {
        let total = parseFloat($('.total').data('total'));
        $('.total-amount').text((total + addOn).toFixed(2));
    }

</script>
@endsection