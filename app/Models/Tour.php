<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'country_id',
        'category_id',
        'price',
        'price_type',
        'description',
        'start_time',
        'end_time',
        'length',
        'city',
        'bookers',
    ];

    public function country(){
        $this->belongsTo(Country::class);
    }


    public function category(){
        $this->belongsTo(Category::class);
    }
}
