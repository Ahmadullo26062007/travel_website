@extends('layouts.frontend')

@section('content')
    @php
        $a = \App\Models\About::find(1);
    @endphp
    <main id="main" class="main" role="main">
        <article id="post-33925"
                 class="page-tour post-33925 tours type-tours status-publish has-post-thumbnail hentry catalog-tanzanija departure_city-bishkek rest_type-molodezhnye-tury rest_type-pljazhnye rest_type-svadebnyj-tur rest_type-semejnye-tury rest_type-stokovyj-tur">


            <div class="article__header page-tour__header">
                <div class="page-tour__thumb-wrap" style="background-image: url({{ asset("images/$t->image") }})">
                </div>

                <div class="page-tour__header-cont">
                    <div class="container">
                        <p class="page-tour__country">
                            <a class="page-tour__country-link" href="" title="Танзания">{{ $t->country->name }}</a>
                        </p>

                        <h1 class="article__head page-tour__head"> {{ $t->title }}</h1>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="tour-info">
                    <div class="clear tour-info__wrap">
                        <div class="tour-info__item match-height">
                            <span class="tour-info__label">Дата</span>
                            <span class="tour-info__val">{{ $t->start_time }} - {{ $t->end_time }}</span>
                        </div>

                        <div class="tour-info__item match-height">
                            <span class="tour-info__label">Длительность</span>
                            <span class="tour-info__val"><b>{{ $t->length }}</b> </span>
                        </div>

                        <div class="tour-info__item match-height">
                            <span class="tour-info__label">Стоимость</span>
                            <span class="tour-info__val">
                                <strong class="tour-info__val--num">{{ $t->price }}</strong>

                                {{ \App\Models\Tour::PRICETYPES[$t->price_type] }}</span>
                        </div>

                        <div class="tour-info__item match-height">
                            <span class="tour-info__label">Город вылета</span>
                            <span class="tour-info__val"><b>{{ $t->city }}</b></span>
                        </div>

                        <div class="tour-info__item match-height tour-info__item--last">
                            <!-- <button href="#popup-form" class="btn btn-primary tour-info__btn js-pop-up-btn" data-head="о. Занзибар | Hiliki House 3*" data-desc="Заполните форму и мы вам перезвоним">Оставить заявку</button> -->
                            <a rel="nofollow" target="_blank"
                               href="https://api.whatsapp.com/send?phone={{App\Models\About::find(1)->whats_app}}&amp;text=Hello Travel agency 'WONDER WORLD'! I want to book a flight"
                               class="btn btn-primary tour-info__btn">Оставить заявку</a>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8">
                        <div class="article__content" style="margin: 60px 0;">
                            <h1><span style="color: #ff6600;">{{$t->title}}</span></h1>
                            <div id="summary" class=""
                                 data-et-mouseenter="customGoal:BUeeZaTaTaBEKMPXLae:1
customGoal:BUeeHNSPMWdMOdUBMHT:1
customGoal:BUeeHNSPdQEeWFWZTDWFC:1
customGoal:BUeeHNSPMWdMOdUEXXO:1
customGoal:BUeeHNSPdQEeXXaNSPRXXe:1
customGoal:BUeePHOOSINEGO:1
customGoal:BUeeHNSPVadIaCKe:1
customGoal:BUeeHNSPCaASBaRDSGEXO:1 customGoal:BUeeZdbaBMRbBYWKOBLHXT:1"
                                 data-et-click="customGoal:BUeeZaTaTaBEKMPXLae:2
customGoal:BUeeHNSPMWdMOdUBMHT:2
customGoal:BUeeHNSPdQEeWFWZTDWFC:2
customGoal:BUeeHNSPMWdMOdUEXXO:2
customGoal:BUeeHNSPdQEeXXaNSPRXXe:2
customGoal:BUeePHOOSINEGO:2
customGoal:BUeeHNSPVadIaCKe:2
customGoal:BUeeHNSPCaASBaRDSGEXO:2 customGoal:BUeeZdbaBMRbBYWKOBLHXT:2">
                                </p>
                                <div id="property_description_content">
                                    <p><strong>Этот {{ $t->category->name }} – один из лучших вариантов, выбранных
                                            командой
                                            sfsfewsfes.com для вашего потрясающего тура в Танзанию:</strong></p>
                                    <p>{{ $t->description }}</p>

                                </div>
                            </div>
                            <p>
                                @foreach ($t->images as $i)
                                    <img class="wp-image-33926 aligncenter" src="{{ asset("images/$i->name") }}"
                                         alt="" width="500" height="333"/>
                                @endforeach
                            </p>
                        </div>

                        <div class="article__content clear">


                        </div>
                    </div>

                    <div class="col-md-4">


                        <p class="tour-info__cap"><span>Возможны изменения цен. Актуальные цены уточняйте у
                                менеджеров.</span></p>

                        <div class="page-tour__sidebar-block">
                            <p><i class="fa fa-share-alt" aria-hidden="true"></i> <strong>Поделиться</strong></p>

                            <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                            <script src="https://yastatic.net/share2/share.js"></script>
                            <a rel="nofollow" href="{{ $a->facebook }}" title="Мы на Facebook" target="_blank"
                               class="icon-link social-link icon-link__facebook">Facebook</a>
                            <a rel="nofollow" href="{{ $a->instagram }}" title="Мы в Instagram" target="_blank"
                               class="icon-link social-link icon-link__instagram">Instagram</a>
                            <a rel="nofollow" href="{{ $a->telegram }}" title="Мы в Telegram" target="_blank"
                               class="icon-link social-link icon-link__telegram">Telegram</a>
                        </div>

                    </div>
                </div>

                <div class="tour-form">
                    <div class="tour-form__desc"><strong>Количество путевок ограничено!</strong></div>
                    <h2 class="tour-form__head">Успей забронировать тур по выгодной цене</h2>
                    <!-- <button class="btn js-pop-up-btn" href="#popup-form" data-head="о. Занзибар | Hiliki House 3*" data-desc="Расскажем о самых выгодных предложениях">Получить выгодное предложение</button> -->
                    <a rel="nofollow" target="_blank" class="btn"
                       href="https://api.whatsapp.com/send?phone={{App\Models\About::find(1)->whats_app}}&amp;text=Hello Travel agency 'WONDER WORLD'! I want to book a flight">Получить
                        выгодное предложение</a>
                </div>


                <div class="article__section main-tours-wrap page-tour__related" style="background: none !importent;">
                    <h2 class="">Похожие туры</h2>


                    @foreach ($f_t as $tour)
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="{{ route('front.tours.detail', $tour->id) }}" title="">
                                        <img src="{{ asset("images/$tour->image") }}"
                                             class="tour-loop__img article-loop__img wp-post-image" alt=""
                                             sizes="(max-width: 900px) 100vw, 900px"/> </a>
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
                <div class="align-center">
                    <a href="{{ route('front.tours.index') }}" class="main-tours-wrap__btn">Посмотреть больше туровы</a>
                </div>

            </div>
        </article>


    </main>
@endsection
