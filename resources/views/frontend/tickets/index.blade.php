@extends('layouts.frontend')
@section('content')
    @php
        $a=\App\Models\About::find(1);
    @endphp
    <main id="main" class="main" role="main">
        <article id="post-2" class="article">

            <div class="article__header page-tour__header">
                <div class="page-tour__thumb-wrap"
                    style="background-image: url({{asset('images/tickets-bg.jpg')}})">
                </div>

                <div class="page-tour__header-cont">
                    <div class="container">
                        <h1 class="article__head page-tour__head">Flights</h1>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="article__content">
                </div>


                <div class="article__whatsapp wa-book">
                    <img class="wa-book__img"
                        src="{{asset('images/4.jpg')}}"
                        alt="Бронирование билетов по WahtsApp" >

                    <div class="wa-book__wrap">
                        <span class="wa-book__head text-danger">24/7 ticket booking via WhatsApp</span>

                        <span class="wa-book__desc">Write to us in the WhatsApp application to the number <span
                                class="nowrap"><strong>+{{$a->whats_app}}</strong></span> куда и когда хотите полететь. Мы
                            найдем оптимальные маршруты для вас в любое время суток.</span>

                        <a target="_blank" class="btn btn--whatsapp"
                            href="https://api.whatsapp.com/send?phone={{$a->whats_app}}&amp;text=Hello Travel agency 'WONDER WORLD'! I want to book a flight">
                            <span>Написать в WhatsApp +{{$a->whats_app}}</span>
                        </a>

                        <span class="wa-book__desc">Payment can be made in our office or through the ELSOM Electronic Wallet at <strong>0556986545</strong>.</span>
                    </div>
                </div>

                <div class="article__section">
                    <h2 class="article__subhead">Flights from partner airlines Travel agency "WONDER WORLD"</h2>

                    <ul class="avia-partners-list">
                        @foreach($tickets as $ticket)
                            <li class="avia-partner">
                                <div class="avia-partner__img-wrap">
                                    <img class="avia-partner__img"
                                         src="{{asset('images/'.$ticket->image)}}"
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
