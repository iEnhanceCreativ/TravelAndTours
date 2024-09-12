<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirportPagination extends Model
{
    use HasFactory;
    protected $table = 'airport_pagination';

    protected $fillable = [
        'before',
        'after'
    ];
}
