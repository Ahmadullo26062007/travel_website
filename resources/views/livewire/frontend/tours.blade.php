<div>
    <div>
        <div class="sidebar filter-block loading" id="sidebar">

            <h2 class="sidebar__head"><i class="fa fa-sliders" aria-hidden="true"></i> Фильтр туров</h2>


            <div class="filter">
                <div class="filter__row">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="filter__item" id="filter-country">

                                <span class="filter__label">Страны</span>

                                <select name="country" id="countries-select" multiple>
                                    <option value="45">Азербайджан</option>
                                    <option value="57">Венгрия</option>
                                    <option value="65">Греция</option>
                                    <option value="27">Доминикана</option>
                                    <option value="23">Индия</option>
                                    <option value="31">Индонезия</option>
                                    <option value="67">Испания</option>
                                    <option value="73">Италия</option>
                                    <option value="32891">Камбоджа</option>
                                    <option value="81">Кипр</option>
                                    <option value="24702">Китай</option>
                                    <option value="33">Малайзия</option>
                                    <option value="25">Мальдивы</option>
                                    <option value="108">Россия</option>
                                    <option value="33687">Танзания</option>
                                    <option value="88">Туры в Грузию</option>
                                    <option value="13">Туры в Египет</option>
                                    <option value="17">Туры в ОАЭ</option>
                                    <option value="21">Туры в Таиланд</option>
                                    <option value="15">Туры в Турцию</option>
                                    <option value="24584">Туры в Узбекистан</option>
                                    <option value="51">Туры во Вьетнам</option>
                                    <option value="19">Туры на Шри-Ланку</option>
                                    <option value="92">Франция</option>
                                    <option value="100">Чехия</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="filter__item" id="filter-rest">

                                <span class="filter__label">Тип отдыха</span>
                                <select name="rest" id="rest-select" multiple>
                                    <option value="83">Стоковый тур</option>
                                    <option value="85">Экскурсионный тур</option>
                                    <option value="84">Морские круизы</option>
                                    <option value="6">Пляжный отдых</option>
                                    <option value="12">Семейные туры</option>
                                    <option value="94">Молодежные туры</option>
                                    <option value="86">Комбинированные туры</option>
                                    <option value="95">Аквапарк</option>
                                    <option value="97">молодежный отдых</option>
                                    <option value="101">Свадебный тур</option>
                                    <option value="102">шоппинг тур</option>
                                    <option value="11">Раннее бронирование</option>
                                    <option value="113">На праздничные даты</option>
                                    <option value="7">Горящие туры</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="filter__row">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="filter__item" id="filter-departure">
                                <span class="filter__label">Город вылета</span>
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
                            <button class="btn btn--blue filter__btn">Найти туры</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div>
        <div class="tour-listing main-tours-wrap" id="tour-listing">

            <p class="count-tours">Найдено туров: <b>556</b></p>
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
            <button class="btn btn-info " wire:click="viewMore()">Yana</button>

        </div>
    </div>

</div>
