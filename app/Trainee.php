<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    protected $fillable = [
        'First_Name','Last_Name','NIC', 'Email', 'Designation' ,'Address' ,'Department' ,'Mobile_no','Gender'
    ];

    protected $casts = [
        'category'=>'select',
    ];
}
