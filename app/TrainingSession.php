<?php

namespace SigMetBus;

use Illuminate\Database\Eloquent\Model;

class TrainingSession extends Model
{
    protected $table = 'training_sessions';

    protected $fillable = [
        'training_type_id',
        'training_place_id',
        'session_stage_id',
        'scheduled_date_time',
        'created_by',
        'available'
    ];
//
    public function trainingTypes()
    {
        //return $this->belongsTo('SigMetBus\Models\')  ;
    }
}
