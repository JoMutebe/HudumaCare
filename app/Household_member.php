<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Household_member extends Model
{
    //
    protected $fillable = [
      'social_assessment_id',
      'number',
      'relationship_id',     

    ];       
}
