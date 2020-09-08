<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LectureNote extends Model
{
    protected $table = 'lecture_notes';

    protected $fillable = [
        'title',
        'description',
        'file_data'
    ];

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }
}
