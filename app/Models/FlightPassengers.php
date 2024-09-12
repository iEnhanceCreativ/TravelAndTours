<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use App\Models\Admin\FlightBookings;

class FlightPassengers extends Model
{
    use HasFactory;
    protected $table = 'flight_passengers';

    protected $primaryKey = 'passenger_id ';

    protected $fillable = [
         'passenger_id',
         'booking_id',
         'is_primary_contact',
         'title', 
         'first_name', 
         'middle_name', 
         'last_name', 
         'nationality',
         'gender',
         'date_of_birth',
         'email',
         'mobile_number',
         'passport',
         'passport_expiry',
         'passenger_type',
         'passenger_age',
         'pass_unique_id'
    ];

//     public function booking()
//     {
//         return $this->belongsTo(FlightBookings::class, 'booking_id', 'booking_id');
//     }
}
