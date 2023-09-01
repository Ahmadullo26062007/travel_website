<div class="articles-wrap main-tours-wrap">

    @foreach ($tours as $tour)
        <article class="tour-loop article-loop main-tour">
            <div class="tour-loop__top">
                <div class="tour-loop__img-wrap">
                    <a href="{{ route('front.tours.detail', $tour->id) }}" title="">
                        <img src="{{ asset("laravel/public/images/$tour->image") }}"
                            class="tour-loop__img article-loop__img wp-post-image" alt=""
                            sizes="(max-width: 900px) 100vw, 900px" /> </a>
                </div>

                <a href="{{route('front.country.detail',$tour->country->id)}}" class="tour-loop__country">
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
