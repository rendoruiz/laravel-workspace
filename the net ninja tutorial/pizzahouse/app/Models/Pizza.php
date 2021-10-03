<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    // protected $table = 'some_name';

    // cast toppings to be an array when used in app
    protected $casts = [
        'toppings' => 'array'
    ];
}
