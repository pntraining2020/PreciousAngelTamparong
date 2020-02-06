<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class time extends Model
{
    protected $fillable = [
        'time_start',
    ];
    protected $table = 'time';
}
