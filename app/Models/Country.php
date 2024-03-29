<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'flag',
        'type',
    ];

    public function tours()
    {
        return $this->hasMany(Tour::class);
    }
}
