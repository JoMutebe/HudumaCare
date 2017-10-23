<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //

    protected $fillable = [
        'patient_name',
        'date_of_birth',
        'date_of_visitation',
        'gender_id',
        'nationality_id',
        'tribe_id',
        'hiv_status_id',
        'hiv_collection_method_id',
        'hiv_arvs_medication_id',
        'hiv_prophylaxis_medication_id',
        'hiv_cd4_count_medication_id',
        'religion_id',
        'district_id',
        'residence_id',
        'patient_contact_id',
        'care_giver_id',
        'referred_to_by_id',
        'diagnosis_id',
        'support_given_id',
        'patient_status_id',
        'reason_for_visit_id',
        'staff_id',
        'site_of_assessment_id',
        'rejected_referral_id',
        'reason_for_rejection_id',
        'advice_given_id',
        'history_of_illness_id',
        'symptom_id',
        'past_medical_history_id',
        'drug_history_id',
        'social_class_assessment_id',
        'patient_understanding_assessment_id',
        'spiritual_understanding_id',
        'functional_assessment_id',
        'pain_assessment_id',
        'physical_assessment_id',
        'patient_management_id',




        
    
    
        ];
}
