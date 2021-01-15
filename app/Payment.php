<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'Payment_for', 'Payment_type', 'Amount'
    ];
}
