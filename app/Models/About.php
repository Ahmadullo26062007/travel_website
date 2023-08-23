<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number1',
        'phone_number2',
        'email',
        'instagram',
        'telegram',
        'facebook',
        'image',
        'description',
    ];

}
