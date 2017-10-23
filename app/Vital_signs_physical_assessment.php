<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vital_signs_physical_assessment extends Model
{
    //
    protected $fillable = [
        'pulse_rate',
        'bp',
        'temperature',
        'respiratory_rate',
        

       ];
}
