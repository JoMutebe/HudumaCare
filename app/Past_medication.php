<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Past_medication extends Model
{
    //
    protected $fillable = [
        'drug_id',
        'reason_for_taking',
        'drug_duration_id',
        'date_of_discontinuation',
        'reason_for_discontinuation',
         
        ];
}
