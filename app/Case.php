<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Case extends Model
{
    protected $fillable = [
        'x', 'y', 'objectid', 'province_state', 'country_region', 'last_update', 
        'lat', 'long_', 'confirmed', 'recovered', 'deaths',
    ];
}
