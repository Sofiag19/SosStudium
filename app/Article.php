<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "Articles";

    protected $fillable = [
        'title',
        'text',
        'img',
        'pub_date'
    ];

    public function professor() 
    {
        return $this->belongsTo(Professor::class);
    }
}
