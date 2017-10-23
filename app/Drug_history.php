<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug_history extends Model
{
    //
    protected $fillable = [
        'past_medication_id',
        'allergy_id',
        'current_medication_id'
            
        ];   
}
