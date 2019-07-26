<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\student;
class student extends Model
{
    protected $fillable = [
        'roll_no',
        'first_name',
        'last_name',
        'address',
        'adharcard_address',
        'state',
        'city'
    ];
}
