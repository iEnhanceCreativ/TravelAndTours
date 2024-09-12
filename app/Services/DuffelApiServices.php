<?php
//https://duffel.com/docs
namespace App\Services;

use Illuminate\Support\Facades\Http;

class DuffelApiServices
{
    protected $baseUrl;
    protected $apiKey;
    protected $header;

    public function __construct()
    {
        $this->baseUrl = config('services.duffel.base_url');
        $this->apiKey = config('services.duffel.api_key');
        $this->header = [
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Content-Type' => 'application/json',
            'Accept-Encoding' => 'application/gzip',
            'Duffel-Version' => 'v2'
        ];
    }

    public function getAirports($limit = 200, $after=null)
    {

        $data = [ "limit" => $limit, "after" =>  $after ];

        $endpoint = $this->baseUrl.'/air/airports?'.http_build_query($data);
        
        $response = Http::withHeaders($this->header)->get($endpoint);
        
        if ($response->successful()) {
            $airports = json_encode($response->json());
            return json_decode($airports);
        }

        return null;
    }

    /**
     * $query = array ['return_offers' => true]
     * $data = object
     */
    public function searchFlight($jsonData)
    {
        $endpoint = $this->baseUrl.'/air/offer_requests?return_offers=true';

        $data = ["data" => $jsonData]; 
        $response = Http::withHeaders($this->header)->post($endpoint, $data);
        if ($response->successful()) {
            $flights = json_encode($response->json());
            return json_decode($flights);
        }

        return null;
    }

    public function getBaggages($offer_id){

        $endpoint = $this->baseUrl.'/air/offers/'.$offer_id.'?return_available_services=true';
        
        $response = Http::withHeaders($this->header)->get($endpoint);
        
        if ($response->successful()) {
            $airports = json_encode($response->json());
            return json_decode($airports);
        }

        return null;
    }

    /***
    Title : Create Payment Intent
    Documentation : https://duffel.com/docs/guides/collecting-customer-card-payments
    1. Search for Offers
    2. Select Offer
    3. Create PaymentIntent
    4. Collect Payment
    5. Confirm PaymentIntent
    6. Create Order
    7. Inspect Collected Payments and Markups
    **/

    /***
     * Calculation : ((offer and services total_amount 120 + markup 1) x foreign exchange rate 0.85) / (1 - Duffel Payments fee 2.9%)
     * Sample : ((120.00€ + 1.00€) x 0.85) / (1 - 0.029) ~= £105.92
     * data = "data": {
                    "amount": "106.00",
                    "currency": "GBP"
                }
     */
    public function createPaymentIntent($jsonData){
        $endpoint = $this->baseUrl.'/payments/payment_intents';

        $data = ["data" => $jsonData]; 
        
        $response = Http::withHeaders($this->header)->post($endpoint, $data);
        if ($response->successful()) {
            $paymentIntent = json_encode($response->json());

            // save the payment intent
            return json_decode($paymentIntent);
        }

        return null;
    }

    /*** 
     * {
        "selected_offers": [
            "off_0000AlgWGEX77biTv3pJfI"
        ],
        "payments": [
            {
                "type": "balance",
                "currency": "USD",
                "amount": "116.64"
            }
        ],
        "passengers": [
            {
                "phone_number": "+442080160508",
                "email": "bilycris001@gmail.com",
                "born_on": "1980-07-24",
                "title": "mr",
                "gender": "m",
                "family_name": "Stark",
                "given_name": "Tony",
                "id": "pas_0000AlgWGEEKFSggyn2JNb"
            }
        ],
        "services": [
            {
                "quantity": 1,
                "id": "ase_0000AlgCc0RwAMyHWmVgPT"
            }
        ]
    }
     **/
    public function createBookingOrder($jsonData){
        $endpoint = $this->baseUrl.'/air/orders';

        $data = ["data" => $jsonData]; 
       
        $response = Http::withHeaders($this->header)->post($endpoint, $data);
        
        if ($response->successful()) {
            $booking = json_encode($response->json());

            // save the payment intent
            return json_decode($booking);
        }

        return null;
    }
}

?>