<?php

namespace App\Http\Livewire;

use App\Models\Tour;
use Livewire\Component;

class HomeTourLivewire extends Component
{
    public function render()
    {
        $tours = Tour::take(6)->orderByDesc('id')->get();;

        return view('livewire.home-tour-livewire', compact('tours'));
    }
}
