<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\StudentProfile;

class StudentProfile extends Model

{
    protected $fillable = [
        'student_id',
        'date_of_birth',
        'phone_no',
        'temporary_address',
        'image'
        
    ];
    public function student()
    {
        return $this->belongsTo('App\Student');
        
    }
}
