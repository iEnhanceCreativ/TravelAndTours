<?php
namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;

// Service
use App\Services\DuffelApiServices;

//Model
use App\Models\Airports;
use App\Models\AirportPagination;

class AirportServiceController extends Controller
{
    protected $duffelApiServices;
    private string $after;

    public function __construct(DuffelApiServices $DuffelApiServices)
    {
        $this->duffelApiServices = $DuffelApiServices;
        $this->after = 'g3QAAAACdwJpZG0AAAAKYXJwX3RucV9raXcEbmFtZW0AAAAPVGVyYWluYSBBaXJwb3J0';
    }

    public function index()
    {
        return view('services.index');
    }

    public function migrateAirports()
    {
        try{
            $airports = $this->duffelApiServices->getAirports(200, $this->after);
            if(count($airports->data) > 0){
                foreach ($airports->data as $airport) {
                    $isExistAirport = Airports::where('duffel_id', $airport->id)->exists();
                    if(!$isExistAirport){
                        $airports = Airports::create([
                            'duffel_id' => $airport->id,
                            'city_name' => $airport->city_name,
                            'icao_code' => $airport->icao_code,
                            'iata_city_code' => $airport->iata_city_code,
                            'iata_country_code' => $airport->iata_country_code,
                            'iata_code' => $airport->iata_code,
                            'latitude' => $airport->latitude,
                            'longitude' => $airport->longitude,
                            'city' => $airport->city ? json_encode($airport->city): null,
                            'time_zone' => $airport->time_zone,
                            'name' => $airport->name,
                        ]);
                    }
                }

                AirportPagination::create([
                    'before' => (isset($airports->meta) && isset($airports->meta->before)) ? $airports->meta->before : null,
                    'after' => (isset($airports->meta) && isset($airports->meta->after)) ? $airports->meta->after : null
                ]);

                if (isset($airports->meta) && isset($airports->meta->after)) {
                    $this->after = $airports->meta->after;
                    $this->migrateAirports();
                }else{
                     $this->migrateAirports();
                }

                if($airports->meta->after === null){
                    return redirect()->back()->with('success', 'Airports data imported successfully!');
                }
            }

            return redirect()->back()->with('success', 'Airports data imported successfully!');

        }catch(err){
            dd($err);
            $this->migrateAirports();
        }
    }
}