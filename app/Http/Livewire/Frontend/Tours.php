<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Tour;

class Tours extends Component
{

    public $amount = 6 ,$countries , $categories, $country_id ,$category_id,$tours;

    public function mount($countries,$categories,$tours)
    {
        $this->countries=$countries;
        $this->categories=$categories;
         $this->tours=$tours;
    }

    public function UpdatedCountry()
    {
        dd(1);
    }
    public function search()
    {
        if($this->country_id && $this->category_id){
           $tours=Tour::where('country_id',$this->country_id)->where('category_id',$this->category_id)->get();
//              dd($tours);
           $this->tours=$tours;
        }else{
            if($this->country_id && !$this->category_id){
                $tours=Tour::where('country_id',$this->country_id)->get();
//                           $this->tours=[];
//                dd($tours);
                $this->tours=$tours;
            }else{
                if(!$this->country_id && $this->category_id){
                    $tours=Tour::where('category_id',$this->category_id)->get();
//                                       $this->tours=[];
//                    dd($tours);
                    $this->tours=$tours;
                } else{

                }
            }
        }
    }
    public function viewMore()
    {
        $this->amount = $this->amount + 3;
        $this->render();
    }


    public function render()
    {

        return view('livewire.frontend.tours');
    }
}
