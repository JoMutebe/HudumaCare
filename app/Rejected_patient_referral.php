<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rejected_patient_referral extends Model
{
    //
    protected $fillable = [
        'hospice_site_id',
        'hospital_id',    
        ];
}
