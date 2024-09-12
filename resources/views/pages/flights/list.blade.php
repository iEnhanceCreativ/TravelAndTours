@extends('layouts/content-nav-bar-layout', ['page' => 'flights'])

@section('title', 'Flight List')

@section('content')
<!-- <div class="py-5  skin-dark-footer position-relative"> -->
<div class="py-5 image-cover  bg-white" style="background:url({{ asset('assets/img/flights_banner.png')}}) no-repeat;"
data-overlay="6">
    <div class="container">
        <!-- Search Form -->
        <!-- <div class="row justify-content-center align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="search-wrap position-relative">
                    <div class="row align-items-end gy-3 gx-md-3 gx-sm-2">

                        <div class="col-xl-8 col-lg-7 col-md-12">
                            <div class="row gy-3 gx-md-3 gx-sm-2">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                                    <div class="form-group hdd-arrow mb-0">
                                        <label class="text-light text-uppercase opacity-75">Leaving From</label>
                                        <select class="leaving form-control fw-bold select2-hidden-accessible"
                                            data-select2-id="select2-data-1-hsyg" tabindex="-1" aria-hidden="true">
                                            <option value="" data-select2-id="select2-data-3-my9d">Select</option>
                                            <option value="ny">New York</option>
                                            <option value="sd">San Diego</option>
                                            <option value="sj">San Jose</option>
                                            <option value="ph">Philadelphia</option>
                                            <option value="nl">Nashville</option>
                                            <option value="sf">San Francisco</option>
                                            <option value="hu">Houston</option>
                                            <option value="sa">San Antonio</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group hdd-arrow mb-0">
                                        <label class="text-light text-uppercase opacity-75">Going To</label>
                                        <select class="goingto form-control fw-bold select2-hidden-accessible"
                                            data-select2-id="select2-data-4-k3kw" tabindex="-1" aria-hidden="true">
                                            <option value="" data-select2-id="select2-data-6-fo13">Select</option>
                                            <option value="ny">New York</option>
                                            <option value="sd">San Diego</option>
                                            <option value="sj">San Jose</option>
                                            <option value="ph">Philadelphia</option>
                                            <option value="nl">Nashville</option>
                                            <option value="sf">San Francisco</option>
                                            <option value="hu">Houston</option>
                                            <option value="sa">San Antonio</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-12">
                            <div class="row align-items-end gy-3 gx-md-3 gx-sm-2">
                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group mb-0">
                                        <label class="text-light text-uppercase opacity-75">Journey Date</label>
                                        <input type="text" class="form-control fw-bold flatpickr-input"
                                            placeholder="Check-In &amp; Check-Out" id="checkinout" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group mb-0">
                                        <button type="button"
                                            class="btn btn-whites text-primary full-width fw-medium"><i
                                                class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div> -->
        <x-search-flight-form/>
        <!-- </row> -->

    </div>
</div>

<section class="gray-simple">
    <div class="container">
        <div class="row justify-content-between gy-4 gx-xl-4 gx-lg-3 gx-md-3 gx-4">

            <!-- Sidebar Filter Options -->

            <!-- All Flight Lists -->
            <div class="col-xl-12 col-lg-12 col-md-12">

                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <h5 class="fw-bold fs-6 mb-lg-0 mb-3">Showing {{(isset($flights) && count($flights) > 0) ? count($flights) : '0'}} of {{(isset($totalFlights) && $totalFlights > 0) ? $totalFlights : '0'}} Search Results</h5>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-12">
                        <div class="d-flex align-items-center justify-content-start justify-content-lg-end flex-wrap">
                            <!-- <div class="flsx-first me-2">
                                <div class="bg-white rounded py-2 px-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="mapoption">
                                        <label class="form-check-label ms-1" for="mapoption">Map</label>
                                    </div>
                                </div>
                            </div> -->
                            <div class="flsx-first mt-sm-0 mt-2">
                                <ul class="nav nav-pills nav-fill p-1 small lights blukker bg-primary rounded-3 shadow-sm"
                                    id="filtersblocks" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link  rounded-3" id="trending" data-bs-toggle="tab"
                                            type="button" role="tab" aria-selected="true">Our Trending</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link rounded-3" id="mostpopular" data-bs-toggle="tab"
                                            type="button" role="tab" aria-selected="false" tabindex="-1">Most
                                            Popular</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link rounded-3 active" id="lowprice" data-bs-toggle="tab"
                                            type="button" role="tab" aria-selected="false" tabindex="-1">Lowest
                                            Price</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center g-4 mt-2">
                    <!-- Single Flight -->
                    @if(isset($flights))
                    @foreach($flights as $key=>$flight)
                    <div class="col-xl-12 col-lg12 col-md-12">
                        <div class="flights-accordion">
                            <div class="flights-list-item bg-white rounded-3 p-3">
                                <div class="row gy-4 align-items-center justify-content-between">

                                    <div class="col">
                                        <!-- Departure Start-->
                                        @php
                                            $segment = $flight->slices[0]->segments[0];
                                            $carrierName = $segment->operating_carrier->name;
                                            $carrierLogo = $segment->operating_carrier->logo_symbol_url;
                                            $departureDate = formatDateMonthDay($segment->departing_at);
                                            $departureTime = getTimeFromDate($segment->departing_at);
                                            $arrivalTime = getTimeFromDate($segment->arriving_at);
                                            $duration = formatTimeDuration($flight->slices[0]->duration);
                                            $cabin = $segment->passengers[0]->cabin->marketing_name;

                                            $departureIataCode = $segment->origin->iata_code;
                                            $ArrivalIataCode = $segment->destination->iata_code;

                                            $totalStops = count($flight->slices[0]->segments);
                                            $stops = ($totalStops === 1) ? 'Direct' : ($totalStops - 1).' Stop';
                                        @endphp
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span
                                                        class="label bg-light-primary text-primary me-2">Departure</span>
                                                    <span class="text-muted text-sm">{{ $departureDate }}</span>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="row gx-lg-5 gx-3 gy-4 align-items-center">

                                                    <div class="col-sm-3">
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <div class="d-start fl-pic">
                                                                <img class="img-fluid" src="{{ $carrierLogo }}"
                                                                    width="45" alt="image">
                                                            </div>
                                                            <div class="d-end fl-title ps-2">
                                                                <div class="text-dark fw-medium">{{ $carrierName }}</div>
                                                                <div class="text-sm text-muted">{{ $cabin }}</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="row gx-3 align-items-center">
                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">{{ $departureTime }}</div>
                                                                <div class="text-muted text-sm fw-medium">{{ $departureIataCode }}</div>
                                                            </div>

                                                            <div class="col text-center">
                                                                <div class="flightLine departure">
                                                                    <div></div>
                                                                    <div></div>
                                                                </div>
                                                                <div class="text-muted text-sm fw-medium mt-3">{{ $stops }}
                                                                </div>
                                                            </div>

                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">{{ $arrivalTime }}</div>
                                                                <div class="text-muted text-sm fw-medium">{{ $ArrivalIataCode }}</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-auto">
                                                        <div class="text-dark fw-medium">{{ $duration }}</div>
                                                        <div class="text-muted text-sm fw-medium">{{ $stops }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Departure End-->

                                        <!-- Return Start-->
                                        @if(count($flight->slices) > 1)
                                        @php
                                            $segment = $flight->slices[1]->segments[0];
                                            $carrierName = $segment->operating_carrier->name;
                                            $carrierLogo = $segment->operating_carrier->logo_symbol_url;

                                            $returnDate = formatDateMonthDay($segment->departing_at);
                                            $departureTime = getTimeFromDate($segment->departing_at);
                                            $arrivalTime = getTimeFromDate($segment->arriving_at);
                                            $duration = formatTimeDuration($flight->slices[1]->duration);
                                            $cabin = $segment->passengers[0]->cabin->marketing_name;

                                            $departureIataCode = $segment->origin->iata_code;
                                            $ArrivalIataCode = $segment->destination->iata_code;

                                            $totalStops = count($flight->slices[0]->segments);
                                            $stops = ($totalStops === 1) ? 'Direct' : ($totalStops - 1).' Stop';
                                        @endphp
                                        <div class="row mt-4">
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="label bg-light-success text-success me-2">Return</span>
                                                    <span class="text-muted text-sm">{{ $returnDate }}</span>
                                                </div>
                                            </div>

                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="row gx-lg-5 gx-3 gy-4 align-items-center">
                                                    <div class="col-sm-3">
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <div class="d-start fl-pic">
                                                                <img class="img-fluid" src="{{ $carrierLogo }}"
                                                                    width="45" alt="image">
                                                            </div>
                                                            <div class="d-end fl-title ps-2">
                                                                <div class="text-dark fw-medium">{{ $carrierName }}</div>
                                                                <div class="text-sm text-muted">{{ $cabin }}</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="row gx-3 align-items-center">
                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">{{ $departureTime }}</div>
                                                                <div class="text-muted text-sm fw-medium">{{ $departureIataCode }}</div>
                                                            </div>

                                                            <div class="col text-center">
                                                                <div class="flightLine return">
                                                                    <div></div>
                                                                    <div></div>
                                                                </div>
                                                                <div class="text-muted text-sm fw-medium mt-3">{{ $stops }}
                                                                </div>
                                                            </div>

                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">{{ $arrivalTime }}</div>
                                                                <div class="text-muted text-sm fw-medium">{{ $ArrivalIataCode }}</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-auto">
                                                        <div class="text-dark fw-medium">{{ $duration }}</div>
                                                        <div class="text-muted text-sm fw-medium">{{ $stops }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <!-- Return End-->
                                    </div>

                                    <div class="col-md-auto">
                                        <div class="d-flex items-center h-100">
                                            <div class="d-lg-block d-none border br-dashed me-4"></div>
                                            <div>
                                                <div class="d-flex align-items-center justify-content-md-end mb-3">
                                                    <!-- <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Free WiFi"><i
                                                            class="fa-solid fa-wifi"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Food Available"><i
                                                            class="fa-solid fa-utensils"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="One Cup Tea"><i
                                                            class="fa-solid fa-mug-saucer"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Pet Allow"><i class="fa-solid fa-dog"></i></span> -->
                                                </div>
                                                <div class="text-start text-md-end">
                                                    <!-- <span class="label bg-light-success text-success me-1">15%
                                                        Off</span> -->
                                                    <div class="text-dark fs-3 fw-bold lh-base">{{ $flight->base_currency }}${{ $flight->total_amount }}</div>
                                                    <!-- <div class="text-muted text-sm mb-2">Refundable</div> -->
                                                </div>

                                                <div class="flight-button-wrap">
                                                    <button class="btn btn-primary btn-md fw-medium full-width"
                                                        data-bs-toggle="modal" data-bs-target="#{{$flight->id}}">
                                                        Select Flight<i class="fa-solid fa-arrow-trend-up ms-2"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Flight Details Start -->
                    <div class="modal modal-lg fade" id="{{$flight->id}}" tabindex="-1" aria-labelledby="bookflightModalLabel"
                        style="display: none;" aria-modal="true" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title fs-6" id="bookflightModalLabel">Your Flight To {{ $flight->slices[0]->destination->city_name }}</h4>
                                    <a href="#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i
                                            class="fa-solid fa-square-xmark"></i></a>
                                </div>
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

                                    <div class="airLines-includedbaggases border-top border-bottom mt-4 py-4">
                                        <div class="departure-servicess mb-4">
                                            <h5 class="fs-6 mb-4">Flight To {{ $flight->slices[0]->destination->city_name }}</h5>
                                            <div class="single-includedbaggases d-flex align-items-center justify-content-between mb-3">
                                                <div class="includedbaggases-blc d-flex align-items-start">
                                                    <div class="includedbaggases-icons"><i class="fa-solid fa-suitcase-rolling fs-5"></i>
                                                    </div>
                                                    <div class="includedbaggases-caps ps-2">
                                                        <p class="m-0 lh-base">1 personal item</p>
                                                        <p class="m-0">Must go under the seat in front of you</p>
                                                    </div>
                                                </div>
                                                <div class="text-end"><span class="label bg-light-success text-success">Included</span>
                                                </div>
                                            </div>
                                            <div class="single-includedbaggases d-flex align-items-center justify-content-between">
                                                <div class="includedbaggases-blc d-flex align-items-start">
                                                    <div class="includedbaggases-icons"><i class="fa-solid fa-briefcase fs-5"></i></div>
                                                    <div class="includedbaggases-caps ps-2">
                                                        <p class="m-0 lh-base">1 cabin bag</p>
                                                        <p class="m-0">Max weight 8 kg</p>
                                                    </div>
                                                </div>
                                                <div class="text-end"><span class="label bg-light-success text-success">Included</span>
                                                </div>
                                            </div>
                                        </div>
                                        @if(count($flight->slices) > 1)
                                        <div class="departure-servicess">
                                            <h5 class="fs-6 mb-4">Flight To {{ $flight->slices[1]->destination->city_name }}</h5>
                                            <div class="single-includedbaggases d-flex align-items-center justify-content-between mb-3">
                                                <div class="includedbaggases-blc d-flex align-items-start">
                                                    <div class="includedbaggases-icons"><i class="fa-solid fa-suitcase-rolling fs-5"></i>
                                                    </div>
                                                    <div class="includedbaggases-caps ps-2">
                                                        <p class="m-0 lh-base">1 personal item</p>
                                                        <p class="m-0">Must go under the seat in front of you</p>
                                                    </div>
                                                </div>
                                                <div class="text-end"><span class="label bg-light-success text-success">Included</span>
                                                </div>
                                            </div>
                                            <div class="single-includedbaggases d-flex align-items-center justify-content-between">
                                                <div class="includedbaggases-blc d-flex align-items-start">
                                                    <div class="includedbaggases-icons"><i class="fa-solid fa-briefcase fs-5"></i></div>
                                                    <div class="includedbaggases-caps ps-2">
                                                        <p class="m-0 lh-base">1 cabin bag</p>
                                                        <p class="m-0">Max weight 8 kg</p>
                                                    </div>
                                                </div>
                                                <div class="text-end"><span class="label bg-light-success text-success">Included</span>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="airLines-priceinfoy1 pt-4">
                                        <div class="airLines-flex d-flex align-items-center justify-content-between">
                                            <div class="airLinesyscb">
                                                <h4 class="fs-4 m-0">{{ $flight->base_currency }}${{ $flight->total_amount }}</h4>
                                                <!-- <p class="text-md m-0">Total price for all travellers</p> -->
                                            </div>
                                            <div class="flds-ytu">
                                                <!-- <button class="btn btn-primary btn-md fw-medium">Book Now</button> -->
                                                <a href="/flight-details/{{$flight->id}}" class="btn btn-primary btn-md fw-medium">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <!-- Modal Flight Details End -->
                    @endforeach
                    <!-- End Single Flight -->
                    @else
                    <div class="col-xl-12 col-lg12 col-md-12">
                        <h5 class="center">No Results Found!</h5>
                    </div>
                    @endif

                    <!-- Pagination Start -->
                     @if(isset($nextPage) && $nextPage)
                    <div class="col-xl-12 col-lg-12 col-12">
                        <a class="btn btn-md full-width px-5 btn-primary fw-medium" href="/flight-list?page={{$nextPage}}">Show More</a>
                        <!-- <div class="pags card py-2 px-5">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination m-0 p-0">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><i class="fa-solid fa-arrow-left-long"></i></span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i class="fa-solid fa-arrow-right-long"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div> -->
                    </div>
                    @endif
                    <!-- Pagination End -->
                </div>
            </div>
        </div>
    </div>
</section>


@endsection