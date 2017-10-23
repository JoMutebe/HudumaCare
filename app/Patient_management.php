<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient_management extends Model
{
    //
    protected $fillable = [
        'problem',

        'possible_cause',
        'general_intervention_id',
        'medication_intervention_id',
        'case_summary',
        'date_of_next_review',
        'place_of_next_review',
        'contribution_id',
        'patient_consent',
        'patient_picture_id',
       

      
        
         
   
       ];
}
