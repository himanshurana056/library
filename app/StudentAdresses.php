<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAdresses extends Model
{
    protected $fillable = [
        'student_id',
        'key',
        'vlaue'
        
    ];
}


