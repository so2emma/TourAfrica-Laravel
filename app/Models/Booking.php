<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable=[
        'firstname',
        'lastname',
        'email',
        'phone',
        'address',
        'date',
        'number',
        'package',
    ];
}
