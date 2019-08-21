<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\student;
use App\StudentProfile;
use App\StudentAdresses;

class Student extends Model
{
    protected $fillable = [
        'roll_no',
        'first_name',
        'last_name',
        'address',
        'adharcard_address',
        'state',
        'city',
        'status'
    ];

    public function student_profile()
    {
        return $this->hasOne('App\StudentProfile');
    }

    // public function student_addresses()
    // {
    //     return $this->
    // }
}

