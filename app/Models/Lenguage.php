<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lenguage extends Model
{
    use HasFactory;

    protected $fillable=[
        'type'
    ];

    const TYPES=[
        '1'=>'Russian',
        '2'=>'English',
    ];
}
