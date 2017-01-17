<?php

namespace SigMetBus;

use Illuminate\Database\Eloquent\Model;

class PlaceType extends Model
{
    protected $table = 'places_types';

    protected $fillable = [
        'name',
        'created_by',
        'available'
    ];
}
