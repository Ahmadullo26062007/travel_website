<?php

namespace App\Http\Livewire;

use App\Models\Tour;
use Livewire\Component;

class HotTours extends Component
{
    public function render()
    {
        $tours=Tour::take(6)->orderBy('id', 'desc')->get();
        return view('livewire.hot-tours' ,compact('tours'));
    }
}
