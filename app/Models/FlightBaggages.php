<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightBaggages extends Model
{
    use HasFactory;
    protected $table = 'flight_baggages';

    protected $primaryKey = 'baggage_id';

    protected $fillable = [
         'organization_id',
         'service_id',
         'passenger_id',
         'baggage_id',
         'flight_id',
         'type', 
         'weight', 
         'dimensions', 
         'currency_code',
         'currency', 
         'base_price',
         'topup_price',
         'price', // total
         'selected_baggages'
    ];
}
