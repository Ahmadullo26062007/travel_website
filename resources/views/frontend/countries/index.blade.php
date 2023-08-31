@extends('layouts.frontend')

@section('content')
    @php


        function word4($id){
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
            <div class="page-tour__thumb-wrap"
                style="background-image: url({{asset('laravel/public/images/country.jpg')}})">
            </div>

            <div class="page-tour__header-cont">
                <div class="container">
                    <h1 class="article__head page-tour__head">{{word4(4)}}</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <br><br>

            <div class="tv-search-form tv-moduleid-181896"></div>

            <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>

            <div class="section">
                <h2 class="section__head">{{word4(23)}}</h2>

                <div class="clear">
                     @foreach($countries as $c)
                         @if($c->type==1)
                    <article class="main-country">
                        <a class="main-country__link" title="{{$c->name}}" href="{{route('front.country.detail',$c->id)}}">
                            <div class="main-country__img-wrap">
                                <img src="{{asset("laravel/public/countries/$c->image")}}"
                                    class="main-country__img wp-post-image" alt="" />
                            </div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                    src="{{asset("laravel/public/countries/$c->flag")}}"
                                    alt="Туры в Турцию флаг">

                                <h3 class="main-country__title">{{$c->name}}</h3>
                            </div>
                        </a>
                    </article>
                        @endif
                    @endforeach
                </div>
            </div>



            <div class="section">
                <h2 class="section__head">{{word4(24)}}</h2>
                <div class="clear loop-countries">
                    @foreach($countries as $c)
                        @if($c->type==0)
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="{{$c->name}}"
                            href="{{route('front.country.detail',$c->id)}}">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="{{asset('laravel/public/countries/'.$c->flag)}}"
                                    alt="{{$c->name}} флаг">

                                <h3 class="loop-country__title">{{$c->name}}</h3>
                            </div>
                        </a>
                    </article>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>

    </main>
@endsection
