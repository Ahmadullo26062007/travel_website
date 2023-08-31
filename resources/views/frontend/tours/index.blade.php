@extends('layouts.frontend')

@section('content')
    @php


 function word2($id){
        $l=\App\Models\Lenguage::find(1);
        $w=\App\Models\Word::find($id);

        if ($l->type==1){
            $s=$w->language_1;
        }else{
            $s=$w->language_2;
        }
        return $s;
    }
   function count_tour(){
     $c=0;
     foreach (\App\Models\Tour::all() as $t){
         $c=$c+1;
     }
     return $c;
   }

    @endphp
    <main id="main" class="main sidebar-left" role="main">

        <div class="article__header page-tour__header">
            <div class="page-tour__thumb-wrap"
                style="background-image: url(https://kochevnik.kg/wp-content/themes/kochevnik/assets/img/tours-bg.jpg)">
            </div>

            <div class="page-tour__header-cont">
                <div class="container">
                    <h1 class="article__head page-tour__head">{{word2(2)}}</h1>
                </div>
            </div>
        </div>

        <div class="container">
            @livewire('frontend.tours',['countries'=>\App\Models\Country::pluck('name','id'),'categories'=>\App\Models\Category::pluck('name','id'),'tours'=>\App\Models\Tour::all()])
            {{-- <div class="tv-search-form tv-moduleid-181896"></div> --}}
            <br><br>

            {{-- <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script> --}}

        </div>
    </main>
@endsection
