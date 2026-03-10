<?php

namespace App\Models;

use Faker\Provider\PhoneNumber;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'gender', 'address' ,'image'
    ];
}
