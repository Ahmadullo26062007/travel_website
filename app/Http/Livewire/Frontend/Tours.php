<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Tour;

class Tours extends Component
{

    public $amount = 6;
    public function viewMore()
    {
        $this->amount = $this->amount + 3;
        $this->render();
    }


    public function render()
    {

        $tours = Tour::take($this->amount)->orderByDesc('id')->get();;
        return view('livewire.frontend.tours', compact('tours'));
    }
}
