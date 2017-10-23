<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History_of_illness extends Model
{
    //
    protected $fillable = [
        'illness_offered_by_id',
        'details',    
        ];
}
