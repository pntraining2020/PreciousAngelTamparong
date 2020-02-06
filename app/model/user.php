<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $fillable = [
        'firstname',
        'lastname'
    ];
    protected $table = 'user';
}
