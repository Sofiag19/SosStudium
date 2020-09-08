<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileProf extends Model
{
    protected $table = 'files_prof';

    protected $fillable = [
        'title',
        'description',
        'file_data'
    ];
}
