@extends('layouts.frontend')

@section('content')
    <main id="main" class="main" role="main">


        <article id="post-24584"
            class="post-24584 countries type-countries status-publish has-post-thumbnail hentry continents-asia">
            <div class="article__header page-tour__header">
                <div class="page-tour__thumb-wrap"
                    style="background-image: url({{ asset("images/$country->image") }})">
                </div>

                <div class="page-tour__header-cont">
                    <div class="container">
                        <h1 class="article__head page-tour__head">Tours in {{ $country->name }}</h1>
                    </div>

                    <nav id="article-nav" class="article__nav">
                    </nav>
                </div>
            </div>

            <div class="container">
                <div>
                    <div class="tv-hot-tours tv-moduleid-969765"></div>
                    <p>
                        <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
                    </p>
                </div>

                <div class="country-tours" id="country-tours">
                    <h2 class="article__subhead">Tours </h2>

                    <div class="articles-wrap main-tours-wrap">

                        @foreach ($country->tours as $tour)
                            <article class="tour-loop article-loop main-tour">
                                <div class="tour-loop__top">
                                    <div class="tour-loop__img-wrap">
                                        <a href="{{ route('front.tours.detail', $tour->id) }}"
                                            title="Голубые купола Узбекистана 2020">
                                            <img src="{{ asset("images/$tour->image") }}"
                                                class="tour-loop__img article-loop__img wp-post-image" alt=""
                                                sizes="(max-width: 900px) 100vw, 900px" /> </a>
                                    </div>

                                    <a href="" class="tour-loop__country">
                                        {{ $tour->country->name }}</a>
                                </div>

                                <h3 class="tour-loop__title main-tour__title match-height">
                                    <a href="]"
                                        title="{{ $tour->title }}">
                                        {{ $tour->title }} </a>
                                </h3>

                                <div class="tour-loop__price-wrap">
                                    <span class="tour-loop__price">
                                        <strong>{{ $tour->price }}</strong>
                                        {{ App\Models\Tour::PRICETYPES[$tour->price_type] }}
                                    </span>
                                </div>
                            </article>
                        @endforeach
                        <div class="align-center">
                        </div>
                    </div>
                </div>









                <div class="country-form">

                    <h3 class="country-form__head">Планируете отдых ?</h3>

                    <p class="country-form__cap">Отправьте заявку и мы найдем для вас подходящее предложение</p>

                    <!-- <button href="#popup-form" class="btn btn-primary js-pop-up-btn" data-head="Отдых " data-desc="Заполните форму и мы вам перезвоним">
                Отправить заявку
                </button> -->

                    <a rel="nofollow"
                        href="https://api.whatsapp.com/send/?phone=996700708900&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D0%B2%D1%83%D0%B9%D1%82%D0%B5+Kochevnik.kg"
                        target="_blank" class="btn btn-primary">
                        Отправить заявку
                    </a>

                    <a href="#country-tours" class="btn btn--blue btn-scroll">
                        Посмотреть туры
                    </a>
                </div>
            </div>

        </article>


    </main>
@endsection
