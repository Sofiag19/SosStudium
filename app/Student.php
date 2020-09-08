<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

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
