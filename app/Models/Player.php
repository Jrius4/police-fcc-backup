<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable =
    [
        
        'firstname',
        'last_name',
        'nationality',
        'dob',
        'age',
        'shirt_no',
        'position',
        'strongest_foot',
        'former_club',
        'bio'
    ];
}
