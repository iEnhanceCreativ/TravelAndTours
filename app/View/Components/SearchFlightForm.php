<?php

namespace App\View\Components;

use Closure;
use Cache;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

// Models
use App\Models\Airports;

class SearchFlightForm extends Component
{
    /**
     * Create a new component instance.
     */

    public $airports;
    public $params;

    public function __construct()
    {
        $airports = Cache::get('airports');

        if($airports){
            return  $this->airports = $airports;
        }
        
        return Cache::remember('airports', 0, function()
        {
            return $this->airports = Airports::all();
        });
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->params = Cache::get('flight_search_params');
        
        return view('components.search-flight-form');
    }
}
