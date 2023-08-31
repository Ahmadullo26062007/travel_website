@extends('layouts.frontend')

@section('content')
    @php


        function word5($id){
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
        <article id="post-32938" class="article">
            <div class="article__header page-tour__header">
                <div class="page-tour__thumb-wrap"
                    style="background-image: url(https://kochevnik.kg/wp-content/themes/kochevnik/assets/img/visa-bg.jpg)">
                </div>

                <div class="page-tour__header-cont">
                    <div class="container">
                        <h1 class="article__head page-tour__head">{{word5(25)}}</h1>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="article__content">

                    <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>



                    <p>{{word5(26)}}</p>



                    <p>{{word5(27)}}</p>



                    <p>{{word5(28)}}</p>



                    <p>{{word5(29)}}</p>



                    <p><strong>{{word5(30)}}</strong></p>



                    <ul>
                        <li>{{word5(31)}}</li>
                        <li>{{word5(32)}}</li>
                        <li>{{word5(33)}}</li>
                        <li>{{word5(34)}}</li>
                        <li>{{word5(35)}}</li>
                        <li>{{word5(36)}}</li>
                        <li>{{word5(37)}}</li>
                        <li>{{word5(38)}}</li>
                        <li>{{word5(39)}}</li>
                    </ul>
                </div>


                <div class="visa-block">

                </div>
                <div class="visa-block">
                    <div class="visa-list clear">
                        @foreach($visas as $visa)
                            @php
                                $county=\App\Models\Country::find($visa->country_id);
                                $pricetype=\App\Models\Visa::PRICETYPES[$visa->price_type];
                            @endphp
                        <div class="visa-list__item match-height">
                            <span class="visa-list__head">{{$county->name}}</span>

                                <span class="visa-list__subhead">Visa processing time - from {{$visa->visa_time}} working days </span>

                            <div class="visa-list__img-wrap">
                                <img class="visa-list__img"
                                    src="{{asset('countries/'.$county->flag)}}"
                                    alt="Флаг Швейцарии">
                            </div>

                            <span class="visa-list__price">{{$visa->price}} {{$pricetype}}</span>

                            <a rel="nofollow" target="_blank" class="visa-list__btn btn"
                                href="https://api.whatsapp.com/send/?phone=996222009155&text=Hello+Travel+agency+'WONDER WORLD'">Order</a>

                            <button class="js-pop-up-btn visa-list__btn visa-list__btn--more"
                                href="#visa-list__content-{{$visa->id}}">More details</button>

                            <div id="visa-list__content-{{$visa->id}}" class="mfp-hide popup">
                                <div class="popup__wrap">
                                    <p>List of required documents<br />
                                    {{$visa->description}}<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

                <div class="visa-form">
                    <h3 class="visa-form__head">Get visa advice</h3>
                    <p class="visa-form__desc">We will advise, help with advice and find answers to any of your questions</p>
                    <a rel="nofollow"
                        href="https://api.whatsapp.com/send/?phone=996222009155&text=Hello+Travel+agency+'WONDER WORLD'"
                        target="_blank" class="btn">To get a consultation</a>
                </div>
            </div>
        </article>

    </main>
@endsection
