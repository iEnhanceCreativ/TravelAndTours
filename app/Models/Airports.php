<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airports extends Model
{
    use HasFactory;
    protected $table = 'airports';

    protected $fillable = [
        'duffel_id',
        'city_name',
        'icao_code',
        'iata_city_code',
        'iata_country_code',
        'iata_code',
        'latitude',
        'longitude',
        'city',
        'time_zone',
        'name'
    ];
}
