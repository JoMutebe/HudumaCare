<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Physical_assessment extends Model
{
    //
    protected $fillable = [
        'general_description',

        'vital_signs_id',
        'skin',
        'head',
        'ears',
        'neck',
        'cvs',
        'abdomen',
        'rectal',
        'neural',
        'v/e',
        'respiratory',
        'others'
      
        
         
   
       ];
}
