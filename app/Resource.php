<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $fillable = [
        'First_Name','Last_Name','NIC', 'Email', 'Designation' ,'Address' ,'Department' ,'Mobile_no','Grade','Experience'
    ];
    protected $casts = [
        'Gender' => 'select',

    ];
}
