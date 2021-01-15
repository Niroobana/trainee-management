<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinator extends Model
{
    protected $fillable = [
        'Coordinator_name', 'Email', 'Designation' ,'Address' ,'City' ,'Department' ,'Mobile_no'
    ];
}
