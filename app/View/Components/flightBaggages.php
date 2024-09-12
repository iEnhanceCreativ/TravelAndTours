<?php

namespace App\View\Components;

use Cache;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

// Service
use App\Services\DuffelApiServices;

class FlightBaggages extends Component
{
    /**
     * Create a new component instance.
     */
    // public $offerId;
    protected $duffelApiServices;

    public function __construct(DuffelApiServices $DuffelApiServices, public string $offerId, public string $passengerId)
    {
        $this->duffelApiServices = $DuffelApiServices;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // get baggages
        $baggages = $this->duffelApiServices->getBaggages($this->offerId);
        if($baggages){
            Cache::put('baggages', $baggages->data, 28800);
        }
        return view('components.flights.flight-baggages', compact('baggages'));
    }
}
