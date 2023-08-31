<div>
    <div>
        <div class="sidebar  " id="sidebar">

            <h2 class="sidebar__head"><i class="fa fa-sliders" aria-hidden="true"></i>{{word2(16)}}</h2>


            <div class="filter">
                <div class="filter__row">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="filter__item" id="filter-country">

                                <span class="filter__label">{{word2(4)}}</span>

                                <select name="country_id" wire:model="country_id"  class="form-select"  >
                                    <option value="">...</option>

                                @foreach($countries as $id=>$c)
                                    <option value="{{$id}}">{{$c}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="filter__item" id="filter-rest">

                                <span class="filter__label">{{word2(17)}}</span>
                                <select name="category_id" wire:model="category_id" class="form-select"  >
                                    <option value="">...</option>
                                @foreach($categories as $id=>$c)
                                        <option value="{{$id}}">{{$c}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="filter__row">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="filter__item" id="filter-departure">
                                <span class="filter__label">{{word2(18)}}</span>
                                <div class="filter__col">
                                    <input class="filter__input" id="filter-departure-14" name="departure"
                                        type="checkbox" value="14">
                                    <label class="filter__cb-label" for="filter-departure-14">Бишкек</label>

                                    <span class="filter__check">

                                    </span>
                                </div>
                                <div class="filter__col">
                                    <input class="filter__input" id="filter-departure-15" name="departure"
                                        type="checkbox" value="15">
                                    <label class="filter__cb-label" for="filter-departure-15">Алматы</label>

                                    <span class="filter__check">

                                    </span>
                                </div>
                                <div class="filter__col">
                                    <input class="filter__input" id="filter-departure-16" name="departure"
                                        type="checkbox" value="16">
                                    <label class="filter__cb-label" for="filter-departure-16">Москва</label>

                                    <span class="filter__check">

                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <a class="btn" style="width: 90%" type="button" wire:click="search" >{{word2(21)}}</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div>
        <div class="tour-listing main-tours-wrap" id="tour-listing">

            <p class="count-tours">{{word2(22)}}: <b>556</b></p>
            <div class="articles-wrap main-tours-wrap">
                @foreach ($tours as $tour)
                    <article class="tour-loop article-loop main-tour">
                        <div class="tour-loop__top">
                            <div class="tour-loop__img-wrap">
                                <a href="{{ route('front.tours.detail', $tour->id) }}" title="">
                                    <img src="{{ asset("images/$tour->image") }}"
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

            {{-- <span id="load-more-btn" class="load-more-btn">Пок азать еще больше туров </span> --}}

        </div>
    </div>

</div>
