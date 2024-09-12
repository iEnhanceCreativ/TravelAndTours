<?php
namespace App\Http\Controllers\flights;

use App\Http\Controllers\Controller;
use Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

//Models 
use App\Models\FlightBaggages; 
use App\Models\FlightBookings; 
use App\Models\FlightPassengers; 

// Service
use App\Services\DuffelApiServices;

class FlightsController extends Controller
{   
    protected $duffelApiServices;
    private string $after;

    public function __construct(DuffelApiServices $DuffelApiServices)
    {
        $this->duffelApiServices = $DuffelApiServices;
    }

    public function index()
    {
        return view('pages.flights.index');
    }

    public function searchFlight(Request $request){
        $validator = Validator::make($request->all(), [
            'departure' => 'required|max:3',
            'arrival' =>  'required|max:3',
            'departure_date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect('/flight-list')
                        ->withErrors($validator)
                        ->withInput();
        }

        Cache::forget('flight_search_params');
        Cache::forget('flight_search_results');
        Cache::forget('selected_flight');

        $slices[] = [
            "origin" => $request->departure,
            "destination" => $request->arrival,
            "departure_date" => $request->departure_date,
        ];

        if($request->trip_type === 'round_trip'){
            $slices[] = [
                "origin" => $request->arrival,
                "destination" => $request->departure,
                "departure_date" => $request->return_date,
            ];
        }
        
        $passengers = [];
        if ($request->adult > 0) {
            for($a=1; $a<=$request->adult; $a++){
                $passengers[] = [
                    "type" => "adult",
                ];
            }
        }

        if ($request->children > 0) {
            for($c=1; $c<=$request->children; $c++){
                $passengers[] = [
                    "age" => 5,
                ];
            }
        }
        //    "currency" => "CAD",
        $data = [
            "slices" => $slices,
            "passengers" => $passengers,
            "cabin_class" => $request->cabin_class,
            "allowed_carrier_ids" => [],
            "max_connections" => 1
        ];
        // dd($data);
        // $data =  `{
        //     "slices": [
        //     {
        //         "origin": $request->departure,
        //         "destination": $request->arrival,
        //         "departure_date": $request->departure_date,
        //         "departure_time_window": {
        //         "start": "08:00",
        //         "end": "12:00"
        //         }
        //     }
        //     ],
        //     "passengers": [
        //     {
        //         "type": "adult"
        //     }
        //     ],
        //     "stopovers": {
        //     "min_duration": "01:00",
        //     "max_duration": "05:00"
        //     },
        //     "cabin_class": "economy",
        //     "max_total_amount": "500.00",
        //     "currency": "CAD",
        //     "allowed_carrier_ids": [
        //     "BA",
        //     "AA"
        //     ],
        //     "max_connections": 1
        // }`;

        $searchResult = $this->duffelApiServices->searchFlight($data);
        Cache::put('flight_search_params', (object) $request->input(), 28800);
        Cache::put('flight_search_results', $searchResult, 28800);
       
        $params = [
                'tp'=> $request->trip_type,
                'd'=> $request->departure,
                'a'=> $request->arrival,
                'd1'=> $request->departure_date,
                'd2'=> $request->trip_type === 'round_trip'? $request->return_date: '',
                'ad'=>  $request->adult ? $request->adult : 1,
                'ch'=>  $request->children ? $request->children : 0,
                'cabin'=> $request->cabin_class ? $request->cabin_class : 'economy',
        ];

        return redirect()->route('flight-list', $params);
    }

    public function list(Request $request)
    {
        $currentPage = $request->query('page');
        $limit = $currentPage ? $currentPage : 1;
        
        $rawFlights = Cache::get('flight_search_results');
        if($rawFlights){
            // dd($rawFlights->data->offers[9]);
            $totalFlights = count($rawFlights->data->offers);
            $flights = array_slice($rawFlights->data->offers, 0, (10 * $limit) ); 

            // check if next page is 
            $totalPages = ceil($totalFlights / ((10 * $limit)));
            $nextPage = $limit < $totalPages ? $limit + 1 : null;
        }else{
            $flights = null;
            $totalFlights = 0;
            $nextPage = null;
        }
        return view('pages.flights.list', compact(['flights', 'totalFlights', 'nextPage']));
    }

    public function details($id)
    {
        // filter flights
        $flights = Cache::get('flight_search_results');
        $params = Cache::get('flight_search_params');

        $filteredOffer = array_filter($flights->data->offers, function($flight) use ($id) {
            return $flight->id == $id;
        });

        $selectedFlight = !empty($filteredOffer) ? array_values($filteredOffer)[0] : null;

        Cache::put('selected_flight', $selectedFlight, 28800);

        if(!$selectedFlight){
            return redirect()->route('flight-list');
        }
        // dd($selectedFlight);
        return view('pages.flights.details', compact(['selectedFlight', 'params']));
    }

    /***
     * Create Booking
     * Proceed to Payment using stripe
     */
    public function createBooking(Request $request, $id){
        // dd($request);
        $selected_flight = Cache::get('selected_flight');
        $availableServices = Cache::get('baggages');
        
        if(!$selected_flight){
            return redirect('/flights');
        }

        $serviceFee = 0;
        $passengerIds = [];
        $totalBaggageAmount = 0;
        // dd($availableServices->available_services);
        foreach($request->baggages as $key=>$value) {
            if($value !== 0){
                $services = "";
                $bagId = "";
                $passId = "";

                $bag = explode('-',$value);
                if(isset($bag[1])){
                    $bagId = $bag[0];
                    $passId = $bag[1];
                    $passengerIds[] = $passId;
                
                    $services = array_filter($availableServices->available_services, function($service) use ($bagId) {
                        return $service->id === $bagId;
                    });
                }
                if (!empty($services) && isset($services[0])) {
                    $service = $services[0];
                } else {
                    // Handle the case where $services is empty or the key 0 doesn't exist
                    $service = null;
                }

                // dd($service);
                $totalBaggageAmount += $service ? $service->total_amount: 0;

                FlightBaggages::create([
                    'flight_id' => $id,
                    'service_id'=> $bagId,
                    'passenger_id'=> $passId,
                    'weight' => $service ? $service->metadata->maximum_weight_kg . 'kg' : 0,
                    'currency_code' =>  $service ? $service->total_currency : '',
                    'price' =>  $service ? $service->total_amount: 0,
                    'selected_baggages' =>  json_encode($service)
                ]);
            }
        }

        $totalAmount = $selected_flight->total_amount + $totalBaggageAmount;

        $selected_flight->available_services = $availableServices;

        $booking = FlightBookings::create([
            'flight_id' => $id,
            'currency' => $selected_flight->base_currency,
            'base_amount' => $selected_flight->base_amount,
            'tax_amount' => $selected_flight->tax_amount,
            'fees_amount' => $serviceFee,
            'total_amount' => $totalAmount,
            'payment_status' => "Pending",
            'booking_status' => "Pending",
            'selected_flight' => json_encode($selected_flight)
        ]);

        // create passenger
        foreach($request->title as $key=>$value) {
            if($value){
                $gender = $request->gender[$key+1];
                FlightPassengers::create([
                    'booking_id' => $booking->booking_id,
                    'is_primary_contact' => $key === 0 ? true : false,
                    'title' => $request->title[$key],
                    'first_name' => $request->first_name[$key],
                    'last_name' => $request->last_name[$key],
                    'nationality' => $request->nationality[$key],
                    'passport' => $request->passport[$key],
                    'passport_expiry' => $request->passport_expiry[$key],
                    'gender' => $gender[0],
                    'date_of_birth' => $request->date_of_birth[$key],
                    'email' =>  $key === 0 ? $request->primary_email : '',
                    'mobile_number' =>  $key === 0 ? $request->primary_contact_number : '',
                    'passenger_type' => $request->passenger_type[$key],
                    'pass_unique_id' => $request->passenger_id[$key],
                ]);
            }
        }

        $arrivalCity = (count($selected_flight->slices) === 1)? $selected_flight->slices[0]->segments[count($selected_flight->slices[0]->segments) - 1]->destination->iata_code : $selected_flight->slices[1]->segments[count($selected_flight->slices[1]->segments) - 1]->origin->iata_code;

        $book_items = [];
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        $item_title = $request->first_name[0]." ".$request->last_name[0]." (Booking No: DK".$booking->booking_id.") ";
        $title_description ="Travel ".(count($selected_flight->slices) === 1)? 'One Way ': 'Round Trip '."Itinerary ".$selected_flight->slices[0]->segments[0]->operating_carrier->name." - ".$selected_flight->slices[0]->segments[0]->origin->iata_code." to ".$arrivalCity;
        $quantity = 1;

        $unit_amount = (int)($totalAmount * 100);
        $currency = $selected_flight->base_currency;

        $book_items[] = [
            'price_data' => [
                'product_data' => [
                    'name' => $item_title,
                    'description' => $title_description
                ],
                'currency'     => $currency,
                'unit_amount'  => $unit_amount,
            ],
            'quantity' => $quantity
        ];

        $checkoutSession = \Stripe\Checkout\Session::create([
            'line_items'            => [$book_items],
            'mode'                  => 'payment',
            'allow_promotion_codes' => true,
            // 'metadata'              => [
            //     'user_id' => "0001"
            // ],
            'customer_email' => $request->email, //$user->email,
            'success_url' => route('flight-book-success', $booking->booking_id), 
            'cancel_url'  => route('flight-details', $id),
            // 'cancel_url'  => route('view.details', $id),
        ]);
        // dd($checkoutSession);

        return redirect()->away($checkoutSession->url);

    }

    public function bookingConfirmnation($id){
        $selected_flight = Cache::get('selected_flight');
        // $selected_flight = (object)['id'=>'off_0000AlovrctqX5wtgNm4to'];
        if($selected_flight){
            $booking = FlightBookings::where('flight_id',$selected_flight->id)->where('booking_id',$id)->first();
            if(!$booking){
                return view('errors.404');
            }

            $passengersData = FlightPassengers::where('booking_id',$id)->get();
            $servicesData = FlightBaggages::where('flight_id',$selected_flight->id)->get();

            $selectedOffers = [$selected_flight->id];

            $payments = [
                [
                    "type" => "balance",
                    "currency" => $selected_flight->base_currency,
                    "amount" => $booking->total_amount
                ]
            ];

            $passengers = [];
            foreach($passengersData as $key=>$passenger){
                $passengers[] = [
                    "phone_number"=> $passenger->mobile_number,
                    "email" => $passenger->email,
                    "born_on" => $passenger->date_of_birth,
                    "title" => $passenger->title,
                    "gender" => $passenger->gender,
                    "family_name" => $passenger->last_name,
                    "given_name" => $passenger->first_name,
                    "id" => $passenger->pass_unique_id
                ];
            }

            $services = [];
            foreach($servicesData as $key=>$service){
                $services[] = [
                    "quantity" => 1,
                    "id" => $service->service_id
                ];
            }

            $data = [
                "selected_offers" => $selectedOffers,
                "payments" => $payments,
                "passengers" => $passengers,
                "services" => $services,
            ];

            $bookingResult = $this->duffelApiServices->createBookingOrder($data);
            if($bookingResult){
                $booking->order_id = $bookingResult->data->id;
                $booking->booking_reference = $bookingResult->data->booking_reference;
                $booking->order_details = json_encode($bookingResult);
                $booking->payment_status = "Paid";
                $booking->booking_status = "Confirmed";
                $booking->save();
            }
            $orderDetails = json_decode($booking->order_details);
            $bookingResult = $orderDetails->data;

            Cache::forget('flight_search_params');
            Cache::forget('flight_search_results');
            Cache::forget('selected_flight');

            return view('pages.flights.confirmation', compact(['bookingResult']));
        }
        return view('errors.404');
    }
}