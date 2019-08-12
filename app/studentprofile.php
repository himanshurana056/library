<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\studentprofile;

class studentprofile extends Model

{
    protected $fillable = [
        'date_of_birth',
        'phone_no',
        'temporary_address',
        'image'
        
    ];
}
