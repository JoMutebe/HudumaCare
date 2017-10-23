<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presenting_symptoms extends Model
{
    //
    protected $fillable = [
        'symptom_id',
        'symptom_score_id',
        'description',    
        ];
}
