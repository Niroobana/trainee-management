<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;
class TargetGroup extends Model
{
    protected $fillable = [
         'target_group','description'
    ];
//    protected $dates=['deleted_at'];
}
