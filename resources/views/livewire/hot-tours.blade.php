<div class="container">
    <div class="article__content">
        <div class="tv-hot-tours tv-moduleid-960016"></div>
        <p>
            <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
        </p>
    </div>

    <h2 class="article__subhead">{{word3(2)}}</h2>

    <div class="articles-wrap main-tours-wrap">
        @foreach($tours as $t)

            <article class="tour-loop article-loop main-tour">
                <div class="tour-loop__top">
                    <div class="tour-loop__img-wrap">
                        <a href="{{route('front.tours.detail',$t->id)}}" title="">
                            <img src="{{asset("images/$t->image")}}" class="" alt="" srcset=""
                                 sizes="(max-width: 900px) 100vw, 900px"/> </a>
                    </div>

                    <a href="{{route('front.country.detail',$t->country->id)}}" class="tour-loop__country">
                        {{$t->country->name}} </a>
                </div>

                <h3 class="tour-loop__title main-tour__title match-height">
                    <a href="{{route('front.tours.detail',$t->id)}}"
                       title="Анталья | Sherwood Dreams Resort 5*">
                        {{$t->country->name}} | {{$t->title}} </a>
                </h3>

                <div class="tour-loop__price-wrap">
                        <span class="tour-loop__price">
                            <strong>{{$t->price}}</strong>
                            {{\App\Models\Tour::PRICETYPES[$t->price_type]}}
                        </span>
                </div>
            </article>

        @endforeach
    </div>

    <div class="pagination">
    </div>


    <div class="cat-list-wrap">
        <h3 class="section__desc">{{word3(17)}}</h3>
        <ul class="cat-list cat-list--rest">
            @foreach($categories as $c)
                <li class="cat-list__item">
                    <a href="{{ route('categories.detail', $c->id) }}" class="cat-list__link">
                        <span class="cat-list__title">{{$c->name}}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

</div>
