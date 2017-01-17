<?php

namespace SigMetBus;

use Illuminate\Database\Eloquent\Model;

class TrainingPlace extends Model
{
    protected $table = 'training_places';

    protected $fillable = [
        'name',
        'place_type_id',
        'created_by',
        'available'
    ];
}
