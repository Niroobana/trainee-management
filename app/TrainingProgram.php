<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingProgram extends Model
{
    protected $fillable = [
        'Program_name', 'Date', 'Location' ,'Program_type' ,'Duration' ,'Content' ,'Target_group','No_of_trainees','No_of_resources','No_of_staffs'
    ];
    protected $casts = [
        'category'=>'select',
    ];

}
