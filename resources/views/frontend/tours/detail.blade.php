@extends('layouts.frontend')

@section('content')
 @php
 $a=\App\Models\About::find(1);
 @endphp
        <main id="main" class="main" role="main">
            <article id="post-33925" class="page-tour post-33925 tours type-tours status-publish has-post-thumbnail hentry catalog-tanzanija departure_city-bishkek rest_type-molodezhnye-tury rest_type-pljazhnye rest_type-svadebnyj-tur rest_type-semejnye-tury rest_type-stokovyj-tur">



                <div class="article__header page-tour__header">
                    <div class="page-tour__thumb-wrap" style="background-image: url({{asset("images/$t->image")}})">
                    </div>

                    <div class="page-tour__header-cont">
                        <div class="container">
                            <p class="page-tour__country">
                                <a class="page-tour__country-link" href="" title="Танзания">{{$t->country->name}}</a>
                            </p>

                            <h1 class="article__head page-tour__head"> {{$t->title}}</h1>

                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="tour-info">
                        <div class="clear tour-info__wrap">
                            <div class="tour-info__item match-height">
                                <span class="tour-info__label">Дата</span>
                                <span class="tour-info__val">{{$t->start_time}} - {{$t->end_time}}</span>
                            </div>

                            <div class="tour-info__item match-height">
                                <span class="tour-info__label">Длительность</span>
                                <span class="tour-info__val"><b>{{$t->length}}</b> </span>
                            </div>

                            <div class="tour-info__item match-height">
                                <span class="tour-info__label">Стоимость</span>
                                <span class="tour-info__val">
									<strong class="tour-info__val--num">{{$t->price}}</strong>

                            {{\App\Models\Tour::PRICETYPES[$t->price_type]}}</span>
                            </div>

                            <div class="tour-info__item match-height">
                                <span class="tour-info__label">Город вылета</span>
                                <span class="tour-info__val"><b>{{$t->city}}</b></span>
                            </div>

                            <div class="tour-info__item match-height tour-info__item--last">
                                <!-- <button href="#popup-form" class="btn btn-primary tour-info__btn js-pop-up-btn" data-head="о. Занзибар | Hiliki House 3*" data-desc="Заполните форму и мы вам перезвоним">Оставить заявку</button> -->
                                <a rel="nofollow" target="_blank" href="https://api.whatsapp.com/send/?phone=996700708900&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D0%B2%D1%83%D0%B9%D1%82%D0%B5+Kochevnik.kg" class="btn btn-primary tour-info__btn">Оставить заявку</a>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-8">
                            <div class="article__content" style="margin: 60px 0;">
                                <h1><span style="color: #ff6600;">Hiliki House 3*</span></h1>
                                <div id="summary" class="" data-et-mouseenter="customGoal:BUeeZaTaTaBEKMPXLae:1
customGoal:BUeeHNSPMWdMOdUBMHT:1
customGoal:BUeeHNSPdQEeWFWZTDWFC:1
customGoal:BUeeHNSPMWdMOdUEXXO:1
customGoal:BUeeHNSPdQEeXXaNSPRXXe:1
customGoal:BUeePHOOSINEGO:1
customGoal:BUeeHNSPVadIaCKe:1
customGoal:BUeeHNSPCaASBaRDSGEXO:1 customGoal:BUeeZdbaBMRbBYWKOBLHXT:1" data-et-click="customGoal:BUeeZaTaTaBEKMPXLae:2
customGoal:BUeeHNSPMWdMOdUBMHT:2
customGoal:BUeeHNSPdQEeWFWZTDWFC:2
customGoal:BUeeHNSPMWdMOdUEXXO:2
customGoal:BUeeHNSPdQEeXXaNSPRXXe:2
customGoal:BUeePHOOSINEGO:2
customGoal:BUeeHNSPVadIaCKe:2
customGoal:BUeeHNSPCaASBaRDSGEXO:2 customGoal:BUeeZdbaBMRbBYWKOBLHXT:2"></p>
                                    <div id="property_description_content">
                                        <p><strong>Этот {{$t->category->name}} – один из лучших вариантов, выбранных командой sfsfewsfes.com для вашего потрясающего тура в Танзанию:</strong></p>
                                        <p>{{$t->description}}</p>

                                    </div>
                                </div>
                               <p>
                                   @foreach($t->images as $i)
                                   <img class="wp-image-33926 aligncenter" src="{{asset("images/$i->name")}}" alt="" width="500" height="333"  />
                                   @endforeach
                               </p>
                            </div>

                            <div class="article__content clear">






                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="page-tour__sidebar tour-sidebar">
                                <div class="tour-sidebar__price">
                                    <strong class="tour-sidebar__price-num">{{$t->price}}</strong>

                                    {{\App\Models\Tour::PRICETYPES[$t->price_type]}}
                                </div>

                                <div class="tour-sidebar__block">
                                    <h3 class="tour-sidebar__head">В стоимость входит</h2>
                                        <div class="tour-sidebar__desc"><p>• Авиаперелёт Бишкек – Занзибар – Бишкек (через Дубаи)<br />
                                                • Проживание в отеле<br />
                                                • Питание согласно выбранной концепции<br />
                                                • Трансфер аэропорт – отель – аэропорт</p>
                                        </div>
                                </div>

                                <div class="tour-sidebar__block">
                                    <h3 class="tour-sidebar__head">Дополнительные сборы</h2>
                                        <div class="tour-sidebar__desc"><p>Виза 120$<br />
                                                Оформляется не менее чем за 2 недели до вылета</p>
                                        </div>
                                </div>

                                <!-- <button href="#popup-form" class="btn tour-sidebar__btn tour-sidebar__btn--book js-pop-up-btn" data-head="о. Занзибар | Hiliki House 3*" data-desc="Заполните форму чтобы забронировать тур по выгодной цене">Забронировать</button> -->
                                <a rel="nofollow" target="_blank" href="https://api.whatsapp.com/send/?phone=996700708900&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D0%B2%D1%83%D0%B9%D1%82%D0%B5+Kochevnik.kg" class="btn tour-sidebar__btn tour-sidebar__btn--book"  style="display:block;">Забронировать</a>
                                <!-- <button href="#popup-form" class="btn btn--no-bg tour-sidebar__btn js-pop-up-btn" data-head="о. Занзибар | Hiliki House 3*" data-desc="Заполните форму и мы вам перезвоним">Оставить заявку</button> -->
                                <a rel="nofollow" target="_blank" href="https://api.whatsapp.com/send/?phone=996700708900&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D0%B2%D1%83%D0%B9%D1%82%D0%B5+Kochevnik.kg" class="btn btn--no-bg tour-sidebar__btn" style="display:block;">Оставить заявку</a>
                            </div>

                            <p class="tour-info__cap"><span>Возможны изменения цен. Актуальные цены уточняйте у менеджеров.</span></p>

                            <div class="page-tour__sidebar-block">
                                <p><i class="fa fa-share-alt" aria-hidden="true"></i> <strong>Поделиться</strong></p>

                                <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                                <script src="https://yastatic.net/share2/share.js"></script>
                                <a rel="nofollow" href="{{$a->facebook}}"
                                   title="Мы на Facebook" target="_blank"
                                   class="icon-link social-link icon-link__facebook">Facebook</a>
                                <a rel="nofollow" href="{{$a->instagram}}"
                                   title="Мы в Instagram" target="_blank"
                                   class="icon-link social-link icon-link__instagram">Instagram</a>
                                <a rel="nofollow" href="{{$a->telegram}}" title="Мы в Telegram"
                                   target="_blank" class="icon-link social-link icon-link__telegram">Telegram</a>
                            </div>

                            <div class="form form--subscribe page-tour__sidebar-block">
                                <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <strong>Подписка на новости</strong></p>

                                <div role="form" class="wpcf7" id="wpcf7-f23045-p33925-o1" lang="ru-RU" dir="ltr">
                                    <div class="screen-reader-response"></div>
                                    <form action="index.html#wpcf7-f23045-p33925-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                        <div style="display: none;">
                                            <input type="hidden" name="_wpcf7" value="23045" />
                                            <input type="hidden" name="_wpcf7_version" value="5.1.5" />
                                            <input type="hidden" name="_wpcf7_locale" value="ru_RU" />
                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f23045-p33925-o1" />
                                            <input type="hidden" name="_wpcf7_container_post" value="33925" />
                                            <input type="hidden" name="g-recaptcha-response" value="" />
                                        </div>
                                        <p><span class="wpcf7-form-control-wrap user-email"><input type="email" name="user-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="Email" /></span><button class="btn">Подписаться</button></p>
                                        <div class="wpcf7-response-output wpcf7-display-none"></div></form></div>							</div>

                        </div>
                    </div>

                    <div class="tour-form">
                        <div class="tour-form__desc"><strong>Количество путевок ограничено!</strong></div>
                        <h2 class="tour-form__head">Успей забронировать тур по выгодной цене</h2>
                        <!-- <button class="btn js-pop-up-btn" href="#popup-form" data-head="о. Занзибар | Hiliki House 3*" data-desc="Расскажем о самых выгодных предложениях">Получить выгодное предложение</button> -->
                        <a rel="nofollow" target="_blank" class="btn" href="https://api.whatsapp.com/send/?phone=996700708900&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D0%B2%D1%83%D0%B9%D1%82%D0%B5+Kochevnik.kg">Получить выгодное предложение</a>
                    </div>



                    <div class="article__section main-tours-wrap page-tour__related">
                        <h2 class="">Похожие туры</h2>


                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="../o-zanzibar-riu-palace-znz-5/index.html" title="о. Занзибар | Riu Palace Znz 5*">
                                        <img src="../../wp-content/uploads/2020/02/239941737-1024x767.jpg" class="tour-loop__img article-loop__img wp-post-image" alt="" srcset="../../wp-content/uploads/2020/02/239941737.jpg 1024w, ../../wp-content/uploads/2020/02/239941737-300x225.jpg 300w, ../../wp-content/uploads/2020/02/239941737-768x575.jpg 768w, ../../wp-content/uploads/2020/02/239941737-100x75.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" />						</a>
                                </div>

                                <a href="../o-zanzibar-riu-palace-znz-5/index.html" class="tour-loop__country">
                                    Танзания						</a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="../o-zanzibar-riu-palace-znz-5/index.html" title="о. Занзибар | Riu Palace Znz 5*">
                                    о. Занзибар | Riu Palace Znz 5*					</a>
                            </h3>

                            <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>1744</strong>
						USD
					</span>
                            </div>
                        </article>

                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="../o-zanzibar-sea-cliff-resort-spa-5/index.html" title="о. Занзибар | Sea Cliff Resort & Spa 5*">
                                        <img src="../../wp-content/uploads/2020/02/19570113-1024x678.jpg" class="tour-loop__img article-loop__img wp-post-image" alt="" srcset="../../wp-content/uploads/2020/02/19570113.jpg 1024w, ../../wp-content/uploads/2020/02/19570113-300x200.jpg 300w, ../../wp-content/uploads/2020/02/19570113-768x509.jpg 768w, ../../wp-content/uploads/2020/02/19570113-100x66.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" />						</a>
                                </div>

                                <a href="../o-zanzibar-sea-cliff-resort-spa-5/index.html" class="tour-loop__country">
                                    Танзания						</a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="../o-zanzibar-sea-cliff-resort-spa-5/index.html" title="о. Занзибар | Sea Cliff Resort & Spa 5*">
                                    о. Занзибар | Sea Cliff Resort & Spa 5*					</a>
                            </h3>

                            <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>1597</strong>
						USD
					</span>
                            </div>
                        </article>

                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="../o-zanzibar-nungwi-dreams-5/index.html" title="о. Занзибар | Nungwi Dreams 5*">
                                        <img src="../../wp-content/uploads/2020/02/242482153-1024x684.jpg" class="tour-loop__img article-loop__img wp-post-image" alt="" srcset="../../wp-content/uploads/2020/02/242482153.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/02/242482153-300x200.jpg 300w, ../../wp-content/uploads/2020/02/242482153-768x513.jpg 768w, ../../wp-content/uploads/2020/02/242482153-100x67.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" />						</a>
                                </div>

                                <a href="../o-zanzibar-nungwi-dreams-5/index.html" class="tour-loop__country">
                                    Танзания						</a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="../o-zanzibar-nungwi-dreams-5/index.html" title="о. Занзибар | Nungwi Dreams 5*">
                                    о. Занзибар | Nungwi Dreams 5*					</a>
                            </h3>

                            <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>1265</strong>
						USD
					</span>
                            </div>
                        </article>

                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="../o-zanzibar-indigo-beach-4/index.html" title="о. Занзибар | Indigo Beach 4*">
                                        <img src="../../wp-content/uploads/2020/02/208673506-1024x656.jpg" class="tour-loop__img article-loop__img wp-post-image" alt="" srcset="../../wp-content/uploads/2020/02/208673506.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/02/208673506-300x192.jpg 300w, ../../wp-content/uploads/2020/02/208673506-768x492.jpg 768w, ../../wp-content/uploads/2020/02/208673506-100x64.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" />						</a>
                                </div>

                                <a href="../o-zanzibar-indigo-beach-4/index.html" class="tour-loop__country">
                                    Танзания						</a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="../o-zanzibar-indigo-beach-4/index.html" title="о. Занзибар | Indigo Beach 4*">
                                    о. Занзибар | Indigo Beach 4*					</a>
                            </h3>

                            <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>1007</strong>
						USD
					</span>
                            </div>
                        </article>

                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="../o-zanzibar-arabian-nightssuites-4/index.html" title="о. Занзибар | Arabian Nightssuites 4*">
                                        <img src="../../wp-content/uploads/2020/02/126235369-1024x679.jpg" class="tour-loop__img article-loop__img wp-post-image" alt="" srcset="../../wp-content/uploads/2020/02/126235369.jpg 1024w, ../../wp-content/uploads/2020/02/126235369-300x200.jpg 300w, ../../wp-content/uploads/2020/02/126235369-768x509.jpg 768w, ../../wp-content/uploads/2020/02/126235369-100x66.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" />						</a>
                                </div>

                                <a href="../o-zanzibar-arabian-nightssuites-4/index.html" class="tour-loop__country">
                                    Танзания						</a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="../o-zanzibar-arabian-nightssuites-4/index.html" title="о. Занзибар | Arabian Nightssuites 4*">
                                    о. Занзибар | Arabian Nightssuites 4*					</a>
                            </h3>

                            <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>981</strong>
						USD
					</span>
                            </div>
                        </article>

                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="../o-zanzibar-varadero-3/index.html" title="о. Занзибар | Varadero 3*">
                                        <img src="../../wp-content/uploads/2020/02/140110294-1024x683.jpg" class="tour-loop__img article-loop__img wp-post-image" alt="" srcset="../../wp-content/uploads/2020/02/140110294.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/02/140110294-300x200.jpg 300w, ../../wp-content/uploads/2020/02/140110294-768x512.jpg 768w, ../../wp-content/uploads/2020/02/140110294-100x67.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" />						</a>
                                </div>

                                <a href="../o-zanzibar-varadero-3/index.html" class="tour-loop__country">
                                    Танзания						</a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="../o-zanzibar-varadero-3/index.html" title="о. Занзибар | Varadero 3*">
                                    о. Занзибар | Varadero 3*					</a>
                            </h3>

                            <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>955</strong>
						USD
					</span>
                            </div>
                        </article>

                        <div class="align-center">
                            <a href="../index.html" class="main-tours-wrap__btn">Посмотреть больше туровы</a>
                        </div>
                    </div>

                </div>
            </article>


        </main>


@endsection
