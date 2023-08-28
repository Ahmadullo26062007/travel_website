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
           $tours=[];
           foreach (Tour::all() as $t){
               if ($t->category_id==$this->category_id && $t->country_id==$this->country_id ){
                   $tours[]=$t;
               }
           }
           $this->tours=$tours;
        }else{
            if($this->country_id && !$this->category_id){
                $tours=[];
                foreach (Tour::all() as $t){
                    if ($t->country_id==$this->country_id ){
                        $tours[]=$t;
                    }
                }
                $this->tours=$tours;
            }else{
                if(!$this->country_id && $this->category_id){
                    $tours=[];
                    foreach (Tour::all() as $t){
                        if ($t->category_id==$this->category_id ){
                            $tours[]=$t;
                        }
                    }
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
