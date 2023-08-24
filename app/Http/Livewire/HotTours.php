<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Tour;
use Livewire\Component;

class HotTours extends Component
{
    public function render()
    {
        $tours=Tour::take(6)->orderBy('id', 'desc')->get();
        $categories=Category::all();
        return view('livewire.hot-tours' ,compact('tours','categories'));
    }
}
