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

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function professors()
    {
        return $this->belongsToMany(Professor::class);
    }
}
