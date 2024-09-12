<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use App\Models\FlightsVTwo;
// use App\Models\FlightBaggages;
// use App\Models\FlightPassengers;
// use App\Models\FlightBookingAssets;
// use App\Models\FlightBookingRemarks;

class FlightBookings extends Model
{
    use HasFactory;
    protected $table = 'flight_bookings';

    protected $primaryKey = 'booking_id';

    protected $fillable = [
         'booking_id',
         'user_id',
         'flight_id', 
         'currency', 
         'service_fee_amount', 
         'base_amount', 
         'tax_amount', 
         'fees_amount',
         'total_amount',
         'baggage_id',
         'baggage_price',
         'payment_method',
         'payment_status',
         'payment_info',
         'booking_status',
         'selected_flight',
         'order_id',
         'booking_reference',
         'order_details'
    ];

    // public function flight()
    // {
    //      return $this->belongsTo(FlightsVTwo::class, 'flight_id');
    // }

    // public function baggage()
    // {
    //      return $this->belongsTo(FlightBaggages::class, 'baggage_id');
    // }
    
    // public function passengers()
    // {
    //     return $this->hasMany(FlightPassengers::class, 'booking_id', 'booking_id');
    // }

    // public function remarks()
    // {
    //       return $this->hasMany(FlightBookingRemarks::class, 'booking_id', 'booking_id');
    // }

    // public function assets()
    // {
    //       return $this->hasMany(FlightBookingAssets::class, 'booking_id', 'booking_id');
    // }
 
}
