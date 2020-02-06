<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class timeEnd extends Model
{
    protected $fillable = [
        'time_end',
    ];
    protected $table = 'time_end';
}
