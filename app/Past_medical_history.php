<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Past_medical_history extends Model
{
    //
    protected $fillable = [
        'condition_id',
        'status_id',
        'date',
        'treatments',
        'location_of_clinic_attended',    
        ];
}
