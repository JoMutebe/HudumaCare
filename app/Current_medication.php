<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Current_medication extends Model
{
    //
    protected $fillable = [
        'drug_id',
        'doze',
        'start_date',
        'cancer_treatment_id',
            
        ];
}
