<?php

namespace SigMetBus;

use Illuminate\Database\Eloquent\Model;

class SessionStage extends Model
{
    protected $table = 'session_stages';

    protected $fillable = [
        'name',
        'created_by',
        'available'
    ];
}
