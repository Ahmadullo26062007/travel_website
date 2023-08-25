<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'country_id',
        'category_id',
        'price',
        'price_type',
        'visa',
        'visa_type',
        'description',
        'comfor_description',
        'start_time',
        'end_time',
        'length',
        'city',
        'bookers',
    ];

    public function country(){
       return $this->belongsTo(Country::class);
    }


    public function category(){
       return $this->belongsTo(Category::class);
    }

    const PRICETYPES=[
        'EUR',
        'USD',
        '$',
    ];
    public function images()
    {
        return $this->morphMany('App\Models\Image', 'tourtable');
    }
}
