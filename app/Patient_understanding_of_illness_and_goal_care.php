<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient_understanding_of_illness_and_goal_care extends Model
{
    //
    protected $fillable = [
        'status_of_understanding_id',
        'status_of_family_understanding_id',
        'patient_main_distress_id',
        'family_main_distress_id',
        'goal_of_care_id',
        'effect_of_illness_id',
        'patient_most_important_need_id',
        'hospice_explanation_status_id'
        
  
      ];
}
