<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professors';

    protected $fillable = [
        'name',
        'surname',
        'day_of_birth',
        'place_of_birth',
        'phone',
        'email',
        'profile_img'
    ];
}
