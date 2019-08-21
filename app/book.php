<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\book;

class Book extends Model
{
    protected $fillable = [
        'book_name',
        'auther_name',
        'description',
        'status'
    ];

    
}

