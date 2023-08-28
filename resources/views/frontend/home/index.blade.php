@extends('layouts.frontend')

@section('content')
    <main id="main" class="main" role="main">
        <section class="intro" style="background: #eff4f8">
            <div class="intro__wrap">
                <div class="tv-image-slider tv-moduleid-960021"></div>
            </div>


            <div class="mm-links">
                <div class="container">
                    <div class="clear">
                        <div class="mm-links__item">
                            <a href="https://kochevnik.kg/tours/" class="mm-links__link"
                                style="background-image: url(https://kochevnik.kg/wp-content/uploads/2019/10/1-300x200.jpg)">
                                <span class="mm-links__head">Туры</span>
                            </a>
                        </div>
                        <div class="mm-links__item">
                            <a href="https://kochevnik.kg/aviabilety/" class="mm-links__link"
                                style="background-image: url(https://kochevnik.kg/wp-content/uploads/2019/10/1132-300x196.jpg)">
                                <span class="mm-links__head">Авиабилеты</span>
                            </a>
                        </div>
                        <div class="mm-links__item">
                            <a href="https://kochevnik.kg/oformlenie-viz/" class="mm-links__link"
                                style="background-image: url(https://kochevnik.kg/wp-content/uploads/2019/10/visas-300x200.jpg)">
                                <span class="mm-links__head">Оформление виз</span>
                            </a>
                        </div>
                        <div class="mm-links__item">
                            <a href="https://kochevnik.kg/rest_type/gorjashhie/" class="mm-links__link"
                                style="background-image: url(https://kochevnik.kg/wp-content/uploads/2020/02/gt-300x187.jpg)">
                                <span class="mm-links__head">Горящие туры </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="intro__form">
                <div class="container">
                    <div class="form align-center">
                        <h1>Поиск горящих туров онлайн</h1>
                        <div class="tv-search-form tv-moduleid-181896"></div>
                        <h2>Большое турагентство - маленькие цены</h2>
                        <br>
                        <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
                    </div>
                </div>
            </div>
        </section>

        <section class="section m-tours">
            <div class="container">
                <h2 class="section__head">Организуйте себе отдых в теплой стране</h2>
                <div class="row">
                    <div class="col-md-7">

                        <p class="section__desc">Все хлопоты по выбору тура и комфортному
                            пребыванию берем на себя</p>
                    </div>

                    <div class="col-md-5 align-right">
                        <!-- <button href="#popup-form" type="button" class="btn js-pop-up-btn btn-primary m-tours__btn" data-head="Заявка на подбор тура" data-desc="Оставьте заявку и мы вам перезвоним">Оставить заявку на подбор тура</button> -->

                        <a rel="nofollow"
                            href="https://api.whatsapp.com/send?phone={{ App\Models\About::find(1)->whats_app }}&amp;text=Hello Travel agency 'WONDER WORLD'! I want to book a flight"
                            class="btn btn-primary m-tours__btn" target="_blank">Оставить заявку на подбор
                            тура</a>
                    </div>
                </div>

                @livewire('home-tour-livewire')

                <div class="align-center">
                    <a href="{{ route('front.tours.index') }}" class="main-tours-wrap__btn">More Tours</a>
                </div>
            </div>
        </section>

        <section class="section main-countries">
            <div class="container">
                <h2 class="section__head">Популярные страны, где чаще всего отдыхают
                    туристы из Кыргызстана</h2>
                <h3 class="section__desc">Страны</h3>
                <div class="clear">

                    @foreach ($countries as $c)
                        <article class="main-country">
                            <a class="main-country__link" title="Туры в Турцию"
                                href="{{ route('front.country.detail', $c->id) }}">
                                <div class="main-country__img-wrap">
                                    <img src="{{ asset("countries/$c->image") }}" class="main-country__img wp-post-image"
                                        alt="" />
                                </div>


                                <div class="main-country__content">
                                    <img class="main-country__flag" src="{{ asset("countries/$c->flag") }}"
                                        alt="Туры в Турцию флаг">

                                    <h3 class="main-country__title">{{ $c->name }}</h3>
                                </div>
                            </a>
                        </article>
                    @endforeach

                </div>

                <div class="align-right"><a class="main-countries__link btn"
                        href="{{ route('front.countries.index') }}">Other countries</a></div>


                <div class="cat-list-wrap">
                    <h3 class="section__desc">Categories</h3>
                    <ul class="cat-list cat-list--rest">

                        @foreach ($categories as $category)
                            <li class="cat-list__item">
                                <a href="{{ route('categories.detail', $category->id) }}" class="cat-list__link">
                                    <span class="cat-list__title">{{ $category->name }}</span>
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h2 class="section__head">Горящие туры</h2>
                <div class="tv-hot-tours tv-moduleid-960016">
                    @foreach ($hot_tours as $t)
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="{{ route('front.tours.detail', $t->id) }}" title="">
                                        <img src="{{ asset("images/$t->image") }}" class="" alt=""
                                            srcset="" sizes="(max-width: 900px) 100vw, 900px" /> </a>
                                </div>

                                <a href="" class="tour-loop__country">
                                    {{ $t->country->name }} </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="{{ route('front.tours.detail', $t->id) }}"
                                    title="Анталья | Sherwood Dreams Resort 5*">
                                    {{ $t->country->name }} | {{ $t->title }} </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
                                <span class="tour-loop__price">
                                    <strong>{{ $t->price }}</strong>
                                    {{ \App\Models\Tour::PRICETYPES[$t->price_type] }}
                                </span>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="align-center">
                    <a href="{{ route('front.hot_tours.index') }}" class="main-tours-wrap__btn">More Tours</a>
                </div>




            </div>
        </section>
    </main>
@endsection
