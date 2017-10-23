<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allergy extends Model
{
    //
    protected $fillable = [
        'drug_id',
        'symptoms_id',
        'date_of_last_reaction',
        
            
        ];
}
