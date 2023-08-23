@extends('layouts.frontend')


@section('content')
    <main id="main" class="main" role="main">
        <article id="post-2" class="article">

            <div class="article__header page-tour__header">
                <div class="page-tour__thumb-wrap"
                    style="background-image: url(https://kochevnik.kg/wp-content/themes/kochevnik/assets/img/tickets-bg.jpg)">
                </div>

                <div class="page-tour__header-cont">
                    <div class="container">
                        <h1 class="article__head page-tour__head">Авиабилеты</h1>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="article__content">
                </div>


                <div class="article__whatsapp wa-book">
                    <img class="wa-book__img"
                        src="https://kochevnik.kg/wp-content/themes/kochevnik/assets/img/wa-ticket-bg.png"
                        alt="Бронирование билетов по WahtsApp">

                    <div class="wa-book__wrap">
                        <span class="wa-book__head">Круглосуточное бронирование билетов по WhatsApp</span>

                        <span class="wa-book__desc">Напишите нам в приложении WhatsApp на номер <span
                                class="nowrap"><strong>+996 (707) 98 65 45</strong></span> куда и когда хотите полететь. Мы
                            найдем оптимальные маршруты для вас в любое время суток.</span>

                        <a target="_blank" class="btn btn--whatsapp"
                            href="https://api.whatsapp.com/send?phone=996707986545&amp;text=Здравствуйте,%20Kochevnik.kg!%20Хочу%20забронировать%20авиабилет">
                            <span>Написать в WhatsApp +996 (707) 98 65 45</span>
                        </a>

                        <span class="wa-book__desc">Оплату можно произвести у нас в офисе или через Электронный кошелек
                            «ЭЛСОМ» по номеру <strong>0556986545</strong>.</span>
                    </div>
                </div>

                <div class="article__section">
                    <h2 class="article__subhead">Авиабилеты от авиакомпаний-партнеров Кочевник.kg</h2>

                    <ul class="avia-partners-list">
                        <li class="avia-partner">
                            <div class="avia-partner__img-wrap">
                                <img class="avia-partner__img"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/08/ural-airlines-300x99.png"
                                    alt="Логотип - Уральские Авиалинии">
                            </div>

                            <h3 class="avia-partner__name">Уральские Авиалинии</h3>

                            <span class="avia-partner__status">генеральный партнер</span>
                        </li>
                        <li class="avia-partner">
                            <div class="avia-partner__img-wrap">
                                <img class="avia-partner__img"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/08/s7-logo-300x96.png"
                                    alt="Логотип - S7 Сибирь">
                            </div>

                            <h3 class="avia-partner__name">S7 Сибирь</h3>

                            <span class="avia-partner__status">генеральный партнер</span>
                        </li>
                        <li class="avia-partner">
                            <div class="avia-partner__img-wrap">
                                <img class="avia-partner__img"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/08/aeroflot-300x82.png"
                                    alt="Логотип - Аэрофлот">
                            </div>

                            <h3 class="avia-partner__name">Аэрофлот</h3>

                        </li>
                        <li class="avia-partner">
                            <div class="avia-partner__img-wrap">
                                <img class="avia-partner__img"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/08/uzbekistan-airways-300x107.png"
                                    alt="Логотип - Узбекские Авиалинии">
                            </div>

                            <h3 class="avia-partner__name">Узбекские авиалинии</h3>

                        </li>
                        <li class="avia-partner">
                            <div class="avia-partner__img-wrap">
                                <img class="avia-partner__img"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/08/turkish-arilines-300x129.png"
                                    alt="Логотип - Турецкие Авиалинии">
                            </div>

                            <h3 class="avia-partner__name">Турецкие Авиалинии</h3>

                        </li>
                        <li class="avia-partner">
                            <div class="avia-partner__img-wrap">
                                <img class="avia-partner__img"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/08/fly-dubai-300x64.png"
                                    alt="Логотип - Fly Dubai">
                            </div>

                            <h3 class="avia-partner__name">Fly Dubai</h3>

                        </li>
                        <li class="avia-partner">
                            <div class="avia-partner__img-wrap">
                                <img class="avia-partner__img"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/08/aviatraffic-300x35.png"
                                    alt="Логотип - Avia Traffic Company">
                            </div>

                            <h3 class="avia-partner__name">Avia Traffic Company</h3>

                        </li>
                        <li class="avia-partner">
                            <div class="avia-partner__img-wrap">
                                <img class="avia-partner__img"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/08/pegasus-300x210.png"
                                    alt="Логотип - Air Manas (Пегасус)">
                            </div>

                            <h3 class="avia-partner__name">Air Manas (Пегасус)</h3>

                        </li>
                    </ul>
                </div>


                <ul class="link-list">
                    <li class="link-list__item">
                        <a class="btn link-list__btn" href="https://kochevnik.kg/subagent/">Стать субагентом</a>
                    </li>
                </ul>
            </div>
        </article>

    </main>
@endsection
