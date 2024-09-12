<!DOCTYPE html>
<html>
<head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
}

.container {
    width: 800px;
    margin: 0 auto;
    background-color: white;
    padding: 20px;
    border: 1px solid #ddd;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 2px solid #ddd;
    padding-bottom: 10px;
}

.logo img {
    max-width: 300px;
}

.itinerary-title h1 {
    font-size: 24px;
    text-align: center;
    color: #333;
}

h2 {
    font-size: 18px;
    margin: 20px 0 10px;
    color: #555;
}

.details div,
.flight-segment,
.fare div {
    margin: 5px 0;
}

.flight-segment {
    border-bottom: 1px solid #ddd;
    padding: 10px 0;
}

.flight-info {
    font-weight: bold;
    color: #0056b3;
}

.flight-schedule {
    margin-left: 20px;
}

.fare div {
    font-size: 16px;
    margin: 5px 0;
}

footer {
    margin-top: 20px;
    text-align: center;
    font-size: 14px;
    color: #777;
}

footer a {
    color: #0056b3;
    text-decoration: none;
}

footer a:hover {
    text-decoration: underline;
}

body {
    font-family: 'Roboto', Arial, sans-serif;
    width: 94%;
    background-color: #ffffff;
}

p { line-height: 30px;}

.itinerary-table {
    margin-bottom: 10px;
    width: 100%;
    border-spacing: 0;
    border: 1px solid #ccc;
    border-collapse: collapse !important;
}

.inner-table {
    width: 100%;
    border-spacing: 0;
    border-collapse: collapse !important;
}

.center-content {
    text-align: center;
}

.padding {
    font-size: 0;
    width: 10px;
}

.flight-number {
    font-size: 14px;
    color: #000;
    /* text-decoration: underline; */
}

.flight-detail {
    font-size: 12px;
    color: #5a5d63;
    width: 50%;
    line-height: 28px;
    font-weight: 700;
}

.flight-time {
    font-size: 14px;
    color: #000;
    font-weight: normal;
}

.spacer {
    width: 10%;
}

.icon {
    width: 40px;
}

.icon img {
    width: 40px;
    height: auto;
}

.flight-destination {
    font-size: 16px;
    color: #1d1d1d;
    text-align: left;
    padding-left: 30px;
}

section {
    padding: 20px 0 20px;
    width: 94%;
    /* margin: 0 auto; */
}

.guest {
    font-weight: bold;
    font-size: 15px;
    margin-bottom: 5px;
}

ul.disc>li {
    list-style-type: disc;
}

.text-center {text-align: center}
.page-break {
    page-break-after: always;
}

img {
    width: 100%;
    height: auto;
}

.airline{
    position: absolute;
    display: inline-block;
    margin-top: 20px;
}

.airline-logo {
    width: 30px;
    margin-right: 10px;
    margin-top: 10px;
    display: inline-block;
    position: relative;
}

.btn {
    padding: 10px 20px;
    height: 56px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all ease 0.4s;
    border-radius: 0.375rem;
    overflow: hidden;
    animation-delay: 0.7s;
    animation-duration: 0.5s;
    position: relative;
    text-decoration: none;
}
.btn-primary {
    background: #cd2c22;
    border-color: #cd2c22;
    color: #FFFFFF;
}
.btn-md {
    padding: 1em 1.5em;
    height: 45px;
    font-size: 0.9rem;
}
</style>
</head>
<body>
    <div class="container">
        <section class="flight-details">
            <table class="">
                <tr>
                    <td class="logo" style="width:530px; "><img src="{{ asset('/assets/img/logo/logo-dk-blue-sm.jpg') }}" alt="Company Logo"></td>
                    <td class="text-center">
                        <p>Booking Reference</p>
                        <h1>{{$booking->booking_reference}}</h1>
                    </td>
                </tr>
            </table>
        </section>
        <section class="flight-details">
            <table style="width:100%">
                <tr>
                    <td><h2>Flight Information:</h2></td>
                    @if(!$isPdf)
                    <td style="float:right;"><a href="javascript:window.print();" class="btn btn-md full-width px-5 btn-primary fw-medium">Print Itirenary</a></td>
                    @endif
                </tr>
            </table>
            @php
                $cabin = $booking->slices[0]->segments[0]->passengers[0]->cabin_class;

                $departureCity = $booking->slices[0]->origin->city_name;
                $departureIataCod = $booking->slices[0]->origin->iata_code;

                $arrivalCity = $booking->slices[0]->destination->city_name;
                $arrivalIataCode = $booking->slices[0]->destination->iata_code;

                $departureDate = formatDateMonthDay($booking->slices[0]->segments[0]->departing_at);
            @endphp
            <table class="itinerary-table">
                <tbody>
                    <tr>
                        <td class="padding" bgcolor="#F2F3F6"></td>
                        <td class="center-content" bgcolor="#F2F3F6">
                            <table class="inner-table">
                                <tbody>
                                    <tr>
                                        <td height="8"></td>
                                    </tr>
                                    <tr>
                                        <td class="icon"><img src="{{ asset('assets/img/icon/departure-icon.png') }}"
                                                alt="flight takeoff icon"></td>
                                        <td class="flight-destination"><b>{{$departureCity}} ({{$departureIataCod}}) - {{$arrivalCity}} ({{$arrivalIataCode}})</b></td>
                                    </tr>
                                    <tr>
                                        <td height="8"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td class="padding" bgcolor="#F2F3F6"></td>
                    </tr>
                    <tr>
                        <td class="padding" width="15"></td>
                        <td>
                            @foreach($booking->slices[0]->segments as $keyIndex=>$segment)
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

                                $totalStops = count($booking->slices[0]->segments);
                                $stops = ($totalStops === 1) ? 'Direct' : ($totalStops - 1).' Stop';
                                $duration = formatTimeDuration($segment->duration);

                                $departureDate = formatDateMonthDay($segment->departing_at);
                                $departureTime = getTimeFromDate($segment->departing_at);

                                $arrivalDate = formatDateMonthDay($segment->arriving_at);
                                $arrivalTime = getTimeFromDate($segment->arriving_at);

                                $originTerminal = $segment->origin_terminal;
                                $destinationTerminal = $segment->destination_terminal;
                            @endphp

                            @if($keyIndex !=0)
                            <table class="inner-table">
                                <tbody>
                                        <tr>
                                            <td height="15" class="text-center">Layover  {{ getTimeInterval($dateArrival, $segment->departing_at ) }}</td>
                                        </tr>
                                    </tbody>
                            </table>
                            @endif
                            <table class="inner-table">
                                <tbody>
                                    <tr>
                                        <td height="5"></td>
                                    </tr>
                                    <tr>
                                        <td class="flight-number">
                                            <span class="airline-logo"><img src="{{ $carrierLogo }}" alt="flight takeoff icon" style="width:30px"></span>
                                            <span class="airline">{{$carrierName}} ({{ $carrierIataCode}} {{$carrierFlightNumber}})</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table class="inner-table">
                                                <tbody>
                                                    <tr>
                                                        <td class="flight-detail"><div>Depart</div><div>{{ $departureCity }} ({{$departureIataCode}}) - Terminal
                                                                {{$originTerminal}}</div>
                                                        </td>

                                                        <td class="flight-detail">Arrive<br><span>{{$arrivalCity}} ({{ $ArrivalIataCode}}) -
                                                                Terminal {{$destinationTerminal}}</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table class="inner-table">
                                                <tbody>
                                                    <tr>
                                                        <td class="flight-time"><span>{{$departureDate}} - {{$departureTime}}</span></td>
                                                        <td class="flight-time"><span>{{$arrivalDate}} - {{$arrivalTime}}</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="10"></td>
                                    </tr>
                                </tbody>
                            </table>
                            @php $dateArrival = $segment->arriving_at; @endphp
                            @endforeach
                        </td>
                        <td class="padding"></td>
                    </tr>
                </tbody>
            </table>

            <!-- Return Flight Start -->
            @if(count($booking->slices) > 1)
            @php 
                $departureCity = $booking->slices[1]->origin->city_name;
                $departureIataCode = $booking->slices[1]->origin->iata_code;

                $arrivalCity = $booking->slices[1]->destination->city_name;
                $arrivalIataCode = $booking->slices[1]->destination->iata_code;
            @endphp
            <table class="itinerary-table">
                <tbody>
                    <tr>
                        <td class="padding" bgcolor="#F2F3F6"></td>
                        <td class="center-content" bgcolor="#F2F3F6">
                            <table class="inner-table">
                                <tbody>
                                    <tr>
                                        <td height="8"></td>
                                    </tr>
                                    <tr>
                                        <td class="icon"><img src="{{ asset('assets/img/icon/inbound-icon.png') }}"
                                                alt="flight takeoff icon"></td>
                                        <td class="flight-destination"><b>{{$departureCity}} ({{$departureIataCode}}) - {{$arrivalCity}} ({{$arrivalIataCode}})</b></td>
                                    </tr>
                                    <tr>
                                        <td height="8"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td class="padding" bgcolor="#F2F3F6"></td>
                    </tr>
                    <tr>
                        <td class="padding" width="15"></td>
                        <td>
                        @foreach($booking->slices[1]->segments as $keyIndex=>$segment)
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

                                $totalStops = count($booking->slices[0]->segments);
                                $stops = ($totalStops === 1) ? 'Direct' : ($totalStops - 1).' Stop';
                                $duration = formatTimeDuration($segment->duration);

                                $departureDate = formatDateMonthDay($segment->departing_at);
                                $departureTime = getTimeFromDate($segment->departing_at);

                                $arrivalDate = formatDateMonthDay($segment->arriving_at);
                                $arrivalTime = getTimeFromDate($segment->arriving_at);

                                $originTerminal = $segment->origin_terminal;
                                $destinationTerminal = $segment->destination_terminal;
                            @endphp

                            @if($keyIndex !=0)
                            <table class="inner-table">
                                <tbody>
                                        <tr>
                                            <td height="15" class="text-center">Layover  {{ getTimeInterval($dateArrival, $segment->departing_at ) }}</td>
                                        </tr>
                                    </tbody>
                            </table>
                            @endif
                            <table class="inner-table">
                                <tbody>
                                    <tr>
                                        <td height="5"></td>
                                    </tr>
                                    <tr>
                                        <td class="flight-number">
                                            <span class="airline-logo"><img src="{{ $carrierLogo }}" alt="flight takeoff icon" style="width:30px"></span>
                                            <span class="airline">{{$carrierName}} ({{ $carrierIataCode}} {{$carrierFlightNumber}})</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table class="inner-table">
                                                <tbody>
                                                    <tr>
                                                        <td class="flight-detail">Depart<br><span>{{ $departureCity }} ({{$departureIataCode}}) - Terminal
                                                                {{$originTerminal}}</span>
                                                        </td>

                                                        <td class="flight-detail">Arrive<br><span>{{$arrivalCity}} ({{ $ArrivalIataCode}}) -
                                                                Terminal {{$destinationTerminal}}</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table class="inner-table">
                                                <tbody>
                                                    <tr>
                                                        <td class="flight-time"><span>{{$departureDate}} - {{$departureTime}}</span></td>
                                                        <td class="flight-time"><span>{{$arrivalDate}} - {{$arrivalTime}}</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="10"></td>
                                    </tr>
                                </tbody>
                            </table>
                            @php $dateArrival = $segment->arriving_at; @endphp
                            @endforeach
                        </td>
                        <td class="padding"></td>
                    </tr>
                </tbody>
            </table>
            @endif
             <!-- Return Flight End -->

            <table class="itinerary-table">
                <tbody>
                    <tr>
                        <td class="padding" bgcolor="#F2F3F6"></td>
                        <td class="center-content" bgcolor="#F2F3F6">
                            <table class="inner-table">
                                <tbody>
                                    <tr>
                                        <td height="8"></td>
                                    </tr>
                                    <tr>
                                        <td class="icon"><img src="{{ asset('assets/img/icon/guest-64.png') }}"
                                                alt="flight takeoff icon"></td>
                                        <td class="flight-destination"><b>Guests</b></td>
                                    </tr>
                                    <tr>
                                        <td height="8"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td class="padding" bgcolor="#F2F3F6"></td>
                    </tr>
                    <tr>
                        <td class="padding" width="15"></td>
                        <td>
                            @foreach($booking->passengers as $key=>$passenger)
                            @php    
                                $passengerId = $passenger->id;
                                
                                $baggage = array_filter($booking->services, function($service) use ($passengerId) {
                                    return in_array($passengerId, $service->passenger_ids);
                                });
                            @endphp
                            <table class="inner-table">
                                <tbody>
                                    <tr>
                                        <td height="15"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="guest">{{ ucfirst(trans($passenger->type))}}  {{$key+1}}: </div>
                                            <div class="guest">{{ ucfirst(trans($passenger->title))}}. {{$passenger->given_name}} {{$passenger->family_name}}</div>
                                            @if($baggage)
                                            <ul class="disc" style="margin-left: 40px;">
                                                <li>Checked baggage {{ $baggage[0]->metadata->maximum_weight_kg}}kg</li>
                                            </ul>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="10"></td>
                                    </tr>
                                    <tr>
                                </tbody>
                            </table>
                            @endforeach
                        </td>
                        <td class="padding"></td>
                    </tr>
                </tbody>
            </table>
            <!-- Add more flights if necessary -->
        </section>
        <!-- Add a page break -->
        <div class="page-break"></div>
        <section>
            <h2>Travel documents</h2>
            <div class="details">
                <div>
                    <p>Remember to check that your passport validity meets the entry requirements of the destination
                        you're flying to. You'll also need to ensure that you have the relevant visa, entry permit,
                        health and other documents required by law for the destination, including any transit countries.
                        Failure to meet these requirements may result in denied boarding or detention and deportation by
                        the respective authorities.</p>
                </div>
            </div>
        </section>

        <section>
            <h2>Check-in information</h2>
            <div class="details">
                <div>
                    <p>Self check-in 14 days before your departure via our website, mobile app or airport kiosks.
                        You're advised to use our Self Baggage Drop facility available at selected airports. Remember to
                        print your bag tags beforehand.
                        Proceed to the Document Check counter to verify your travel documents if it's required.</p>
                </div>
            </div>
        </section>

        <section>
            <h2>Prohibited items</h2>
            <div class="details">
                <div>
                    <p>Liquids, aerosols and gels (LAGs): International regulations restricts the quantity of LAGs you
                        can carry on board international flights. LAGs must be in containers of 100 ml / 3.4oz (volume),
                        100 grams (weight) or less. It must fit comfortably in a transparent re-sealable plastic bag.
                    </p>
                </div>
                <p>Inorganic powders: You're not allowed to take on board any inorganic powders such as salt, sand,
                    talcum powder and/or other powders that from time to time may be restricted. Currently the United
                    States, Australia and New Zealand authorities have restricted any inorganic powder carried on board
                    to less than 350 ml/12 oz. These contents may be subject to additional security checks, and/or may
                    be retained by the security officers.</p>
            </div>
        </section>
        <!-- Add a page break -->
        <div class="page-break"></div>
        <section>
            <h2>Boarding</h2>
            <div class="details">
                <div>
                    <p>You're required to be at the boarding gate at least 20 minutes before the scheduled time of
                        departure or you'll be denied boarding.</p>
                    <p>Airports have long queues due to complex security checks. Check in early and proceed immediately
                        to the boarding gate.</p>
                </div>
            </div>
        </section>

        <footer>
            <div class="footer-text">
                <p>Thank you for flying with us!</p>
                <p>For more information, visit <a
                        href="https://dkinternationaltravelandtours.com/">dkinternationaltravelandtours.com</a></p>
            </div>
        </footer>
    </div>
    <body>