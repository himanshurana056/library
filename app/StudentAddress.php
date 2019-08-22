<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\StudentAddress;


class StudentAddress extends Model
{
    protected $fillable = [
        'student_id',
        'key',
        'value'
        
    ];
    
    public function student()
    {
        return $this->belongsTo('App\student');
    }
}



