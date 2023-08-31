@extends('layouts.frontend')

@section('content')
    @php
 function Word1($id){
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

            <h2 class="article__subhead">{{Word1(2)}}</h2>

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
                <h3 class="section__desc">{{Word1(17)}}</h3>
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

    </main>
@endsection
