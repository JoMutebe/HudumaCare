<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pain_assessment extends Model
{
    //
    protected $fillable = [
        'patient_id',
        'pain_name',
        'site_on_body_id',
        'pain_duration',
        'pain_description',
        'numerical_rating',
        'periodicity_id',
        'precipitating_factors',
        'relieving_factors',
        'sleep_effect_id',
        'mobility_effect_id',
        'effect_on_current_medication_id',
        'possible_cause',
        

       
        
         
   







        
       ];
}
