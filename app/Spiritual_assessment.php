<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spiritual_assessment extends Model
{
    //
    protected $fillable = [
        'belief_in_God_status_id',
        'raised_religion_id',
        'current_religion_id',
        'religion_importance_status_id',
        'prayer_id',
        'effect_of_relationship_with_God_id',
        'current_relationship_with_God_id',
        'spiritual_obligations',
        'peace_with_family_status_id',
        'peace_with_God_status_id',
        'hospice_help',
        'spirituality_stage_id',
         
   
       ];
}
