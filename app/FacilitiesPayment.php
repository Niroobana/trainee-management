<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacilitiesPayment extends Model
{
    protected $fillable = [
        'facilities_type', 'sub_total', 'Discount', 'Total'
    ];
}
