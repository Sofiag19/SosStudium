<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';

    protected $fillable = [
        'title',
        'difficulty'
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function professors()
    {
        return $this->belongsToMany(Professors::class);
    }
}
