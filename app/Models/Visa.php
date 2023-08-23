<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visa extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'visa_time',
        'price',
        'price_type',
    ];

    public function country(){
        $this->belongsTo(Country::class);
    }
}