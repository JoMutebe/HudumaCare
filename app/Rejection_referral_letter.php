<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rejection_referral_letter extends Model
{
    //
    protected $fillable = [
        'referral_status_id',
        'details',    
        ];
}
