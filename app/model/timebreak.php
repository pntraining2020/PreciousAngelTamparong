<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class timebreak extends Model
{
    protected $fillable = [
        'start',
        'end'
    ];

    protected $table = 'break';
}
