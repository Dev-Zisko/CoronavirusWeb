<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'count', 'country', 'date', 'lat', 'long', 'confirmed', 'recovered', 'deaths',
        'percent_recovered', 'percent_deaths', 'percent_undefined',
    ];
}
