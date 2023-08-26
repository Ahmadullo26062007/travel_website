@extends('layouts.frontend')

@section('content')
    <main id="main" class="main" role="main">
        <div class="article__header page-tour__header">
            <div class="page-tour__thumb-wrap" style="background-image: url()">
            </div>

            <div class="page-tour__header-cont">
                <div class="container">
                    <h1 class="article__head page-tour__head">{{ $category->name }}</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="article__content">
                <div class="tv-hot-tours tv-moduleid-960016"></div>
                <p>
                    <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
                </p>
            </div>

            <h2 class="article__subhead">Tours</h2>

            <div class="articles-wrap main-tours-wrap">

                @foreach ($category->tours as $tour)
                    <article class="tour-loop article-loop main-tour">
                        <div class="tour-loop__top">
                            <div class="tour-loop__img-wrap">
                                <a href="{{ route('front.tours.detail', $tour->id) }}" title="">
                                    <img src="{{ asset("images/$tour->image") }}"
                                        class="tour-loop__img article-loop__img wp-post-image" alt=""
                                        sizes="(max-width: 900px) 100vw, 900px" /> </a>
                            </div>

                            <a href="" class="tour-loop__country">
                                {{ $tour->country->name }} </a>
                        </div>

                        <h3 class="tour-loop__title main-tour__title match-height">
                            <a href="" title="{{ $tour->title }}">
                                {{ $tour->title }} </a>
                        </h3>

                        <div class="tour-loop__price-wrap">
                            <span class="tour-loop__price">
                                <strong>{{ $tour->price }}</strong>
                                {{ App\Models\Tour::PRICETYPES[$tour->price_type] }}
                                {{-- {{  }} --}}
                            </span>
                        </div>
                    </article>
                @endforeach

            </div>

            <div class="pagination">
            </div>


            <div class="cat-list-wrap">
                <h3 class="section__desc">Типы отдыха</h3>
                <ul class="cat-list cat-list--rest">

                    <li class="cat-list__item">
                        <a href="https://kochevnik.kg/rest_type/akvapark/" class="cat-list__link">
                            <span class="cat-list__title">Аквапарк</span>
                        </a>
                    </li>

                    <li class="cat-list__item">
                        <a href="https://kochevnik.kg/rest_type/gorjashhie/" class="cat-list__link">
                            <img class="cat-list__icon" src="https://kochevnik.kg/wp-content/uploads/2018/09/fire.png"
                                alt="Иконка - Огонь">
                            <span class="cat-list__title">Горящие туры</span>
                        </a>
                    </li>

                    <li class="cat-list__item">
                        <a href="https://kochevnik.kg/rest_type/kombinirovannye-tury/" class="cat-list__link">
                            <span class="cat-list__title">Комбинированные туры</span>
                        </a>
                    </li>

                    <li class="cat-list__item">
                        <a href="https://kochevnik.kg/rest_type/molodezhnye-tury/" class="cat-list__link">
                            <span class="cat-list__title">Молодежные туры</span>
                        </a>
                    </li>

                    <li class="cat-list__item">
                        <a href="https://kochevnik.kg/rest_type/molodezhnyj-otdyh/" class="cat-list__link">
                            <span class="cat-list__title">молодежный отдых</span>
                        </a>
                    </li>

                    <li class="cat-list__item">
                        <a href="https://kochevnik.kg/rest_type/morskoj-kruiz/" class="cat-list__link">
                            <span class="cat-list__title">Морские круизы</span>
                        </a>
                    </li>

                    <li class="cat-list__item">
                        <a href="https://kochevnik.kg/rest_type/na-prazdnichnye-daty/" class="cat-list__link">
                            <span class="cat-list__title">На праздничные даты</span>
                        </a>
                    </li>

                    <li class="cat-list__item">
                        <a href="https://kochevnik.kg/rest_type/pljazhnye/" class="cat-list__link">
                            <img class="cat-list__icon"
                                src="https://kochevnik.kg/wp-content/uploads/2018/09/sun-umbrella.png" alt="Иконка - Пляж">
                            <span class="cat-list__title">Пляжный отдых</span>
                        </a>
                    </li>

                    <li class="cat-list__item">
                        <a href="https://kochevnik.kg/rest_type/rannee-bronirovanie/" class="cat-list__link">
                            <img class="cat-list__icon" src="https://kochevnik.kg/wp-content/uploads/2018/09/study.png"
                                alt="Иконка - Читающий человек">
                            <span class="cat-list__title">Раннее бронирование</span>
                        </a>
                    </li>

                    <li class="cat-list__item">
                        <a href="https://kochevnik.kg/rest_type/svadebnyj-tur/" class="cat-list__link">
                            <span class="cat-list__title">Свадебный тур</span>
                        </a>
                    </li>

                    <li class="cat-list__item">
                        <a href="https://kochevnik.kg/rest_type/semejnye-tury/" class="cat-list__link">
                            <img class="cat-list__icon"
                                src="https://kochevnik.kg/wp-content/uploads/2018/09/family-of-three.png"
                                alt="Иконка - Семья">
                            <span class="cat-list__title">Семейные туры</span>
                        </a>
                    </li>

                    <li class="cat-list__item">
                        <a href="https://kochevnik.kg/rest_type/stokovyj-tur/" class="cat-list__link">
                            <span class="cat-list__title">Стоковый тур</span>
                        </a>
                    </li>

                    <li class="cat-list__item">
                        <a href="https://kochevnik.kg/rest_type/shopping-tur/" class="cat-list__link">
                            <span class="cat-list__title">шоппинг тур</span>
                        </a>
                    </li>

                    <li class="cat-list__item">
                        <a href="https://kochevnik.kg/rest_type/jekskursionnyj-tur/" class="cat-list__link">
                            <span class="cat-list__title">Экскурсионный тур</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>

    </main>
@endsection
