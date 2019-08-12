<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\book;

class book extends Model
{
    protected $fillable = [
        'book_name',
        'auther_name',
        'description',
        'status'
    ];
}
