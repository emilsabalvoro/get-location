<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    // disable updated_at and created_at column
    public $timestamps = false;

    protected $fillable = [
        'location', 
        'latitude', 
        'longitude',
    ];
}
