@extends('layouts.frontend')
@section('content')
    @php
        $a=\App\Models\About::find(1);

        function word6($id){
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
        <article id="post-2" class="article">

            <div class="article__header page-tour__header">
                <div class="page-tour__thumb-wrap"
                     style="background-image: url({{asset('laravel/public/images/ticket.jpg')}})">
                </div>

                <div class="page-tour__header-cont">
                    <div class="container">
                        <h1 class="article__head page-tour__head">{{word6(40)}}</h1>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="article__content">
                </div>


                <div class="article__whatsapp wa-book">
                    <img class="wa-book__img"
                         src="{{asset('images/4.jpg')}}"
                         alt="Бронирование билетов по WahtsApp">

                    <div class="wa-book__wrap">
                        <span class="wa-book__head text-danger">{{word6(41)}}</span>

                        <span class="wa-book__desc">{{word6(42)}} <span
                                class="nowrap"><strong>+{{$a->whats_app}}</strong></span> {{word6(43)}}</span>

                        <a target="_blank" class="btn btn--whatsapp"
                           href="https://api.whatsapp.com/send?phone={{App\Models\About::find(1)->whats_app}}&amp;text=Hello Travel agency 'WONDER WORLD'! I want to book a flight">
                            <span>{{word6(44)}} +{{$a->whats_app}}</span>
                        </a>
                    </div>
                </div>

                <div class="article__section">
                    <h2 style="margin-left: 200px;" class="article__subhead">{{word6(45)}}</h2>

                    <ul class="avia-partners-list">
                        @foreach($tickets as $ticket)
                            <li class="avia-partner">
                                <div class="avia-partner__img-wrap">
                                    <img class="avia-partner__img"
                                         src="{{asset('laravel/public/images/'.$ticket->image)}}"
                                         alt="Логотип - {{$ticket->name}}">
                                </div>

                                <h3 class="avia-partner__name">{{$ticket->name}}</h3>
                                @php
                                    $partnor=\App\Models\Ticket::GENERAL[$ticket->general]
                                @endphp
                                <span class="avia-partner__status">{{$partnor}}</span>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </article>

    </main>
@endsection
