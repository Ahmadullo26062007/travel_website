@extends('layouts.frontend')

@section('content')
    @php


        function word3($id){
               $l=\App\Models\Lenguage::find(1);
               $w=\App\Models\Word::find($id);

               if ($l->type==1){
                   $s=$w->language_1;
               }else{
                   $s=$w->language_2;
               }
               return $s;
           }

    @endphp
    <main id="main" class="main" role="main">
        <div class="article__header page-tour__header">
            <div class="page-tour__thumb-wrap" style="background-image: url()">
            </div>

            <div class="page-tour__header-cont">
                <div class="container">
                    <h1 class="article__head page-tour__head">{{word3(3)}}</h1>
                </div>
            </div>
        </div>
        @livewire('hot-tours')

    </main>
@endsection
