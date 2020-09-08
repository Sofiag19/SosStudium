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

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function lectureNote()
    {
        return $this->belongsTo(LectureNote::class);
    }

    public function fileProf()
    {
        return $this->belongsTo(FileProf::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
