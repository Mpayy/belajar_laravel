<?php

namespace App\Models;

use Faker\Provider\PhoneNumber;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'nama', 'email', 'phone', 'gender', 'address' ,'image'
    ];
}
