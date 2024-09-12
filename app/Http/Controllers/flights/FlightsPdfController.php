<?php
namespace App\Http\Controllers\flights;

use App\Http\Controllers\Controller;
use Cache;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

//Models 
use App\Models\FlightBaggages; 
use App\Models\FlightBookings; 
use App\Models\FlightPassengers; 

// Service
use App\Services\DuffelApiServices;

class FlightsPdfController extends Controller
{   
    public function generatePdf($id){
        $bookingData = FlightBookings::where('booking_reference',$id)->first();

        $orderDetails = json_decode($bookingData->order_details);
        $booking = $orderDetails->data;
        $isPdf = true;
        // return view('pages.flights.itirenary', compact(['booking', 'isPdf']));

        $pdf = PDF::loadView('pages.flights.itirenary', compact(['booking', 'isPdf']));
        $filename = "DK-Internation-flight-itirenary-".$bookingData->booking_reference.".pdf";
        return $pdf->download( $filename);
    }
}