<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Tour;

class Tours extends Component
{
    public function render()
    {

        $tours = Tour::take(12)->orderByDesc('id')->get();;
        return view('livewire.frontend.tours', compact('tours'));
    }
}
