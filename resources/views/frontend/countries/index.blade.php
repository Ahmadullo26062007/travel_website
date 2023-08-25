@extends('layouts.frontend')

@section('content')
    <main id="main" class="main" role="main">
        <div class="article__header page-tour__header">
            <div class="page-tour__thumb-wrap"
                style="background-image: url(https://kochevnik.kg/wp-content/themes/kochevnik/assets/img/countries-bg.jpg)">
            </div>

            <div class="page-tour__header-cont">
                <div class="container">
                    <h1 class="article__head page-tour__head">Страны</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <br><br>

            <div class="tv-search-form tv-moduleid-181896"></div>

            <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>

            <div class="section">
                <h2 class="section__head">Популярные страны</h2>

                <div class="clear">
                     @foreach($countries as $c)
                    <article class="main-country">
                        <a class="main-country__link" title="Туры в Турцию" href="{{route('front.country.detail',$c->id)}}">
                            <div class="main-country__img-wrap">
                                <img src="{{asset("countries/$c->image")}}"
                                    class="main-country__img wp-post-image" alt="" />
                            </div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                    src="{{asset("countries/$c->flag")}}"
                                    alt="Туры в Турцию флаг">

                                <h3 class="main-country__title">{{$c->name}}</h3>
                            </div>
                        </a>
                    </article>
                    @endforeach
                </div>
            </div>



            <div class="section">
                <h2 class="section__head">Все страны</h2>
                <div class="clear loop-countries">
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Австрия"
                            href="avstrija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Austria-300x196.png"
                                    alt="Австрия флаг">

                                <h3 class="loop-country__title">Австрия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Азербайджан"
                            href="azerbajdzhan/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Azerbaijan-300x146.png"
                                    alt="Азербайджан флаг">

                                <h3 class="loop-country__title">Азербайджан</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Англия"
                            href="anglija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/england-300x180.png"
                                    alt="Англия флаг">

                                <h3 class="loop-country__title">Англия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Болгария"
                            href="bolgarija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Bulgaria-300x196.png"
                                    alt="Болгария флаг">

                                <h3 class="loop-country__title">Болгария</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Венгрия"
                            href="vengrija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Hungary-300x196.png"
                                    alt="Венгрия флаг">

                                <h3 class="loop-country__title">Венгрия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Греция"
                            href="grecija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Greece-300x198.png"
                                    alt="Греция флаг">

                                <h3 class="loop-country__title">Греция</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Доминикана"
                            href="dominikana/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Dominican_Republic-300x196.png"
                                    alt="Доминикана флаг">

                                <h3 class="loop-country__title">Доминикана</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Замбия"
                            href="zambija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Zambia-300x196.png"
                                    alt="Замбия флаг">

                                <h3 class="loop-country__title">Замбия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Индия"
                            href="indija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/India-300x199.png"
                                    alt="Индия флаг">

                                <h3 class="loop-country__title">Индия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Индонезия"
                            href="indonezija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Indonesia-300x198.png"
                                    alt="Индонезия флаг">

                                <h3 class="loop-country__title">Индонезия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Иордания"
                            href="iordanija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Jordan-300x149.png"
                                    alt="Иордания флаг">

                                <h3 class="loop-country__title">Иордания</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Ирландия"
                            href="irlandija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Ireland-300x148.png"
                                    alt="Ирландия флаг">

                                <h3 class="loop-country__title">Ирландия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Испания"
                            href="ispanija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Spain-300x195.png"
                                    alt="Испания флаг">

                                <h3 class="loop-country__title">Испания</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Италия"
                            href="italija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Italy-300x191.png"
                                    alt="Италия флаг">

                                <h3 class="loop-country__title">Италия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Казахстан"
                            href="kazahstan/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Kazakhstan-300x145.png"
                                    alt="Казахстан флаг">

                                <h3 class="loop-country__title">Казахстан</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Камбоджа"
                            href="kambodzha/">

                            <div class="loop-country__content">

                                <h3 class="loop-country__title">Камбоджа</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Кипр"
                            href="kipr/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Cyprus-300x180.png"
                                    alt="Кипр флаг">

                                <h3 class="loop-country__title">Кипр</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Китай"
                            href="kitaj/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2018/05/082.-Kitaj-300x200.jpg"
                                    alt="Китай флаг">

                                <h3 class="loop-country__title">Китай</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Куба"
                            href="kuba/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Cuba-300x148.png"
                                    alt="Куба флаг">

                                <h3 class="loop-country__title">Куба</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Кыргызстан"
                            href="kyrgyzstan/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Kyrgyzstan-300x177.png"
                                    alt="Кыргызстан флаг">

                                <h3 class="loop-country__title">Кыргызстан</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Литва"
                            href="litva/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Lithuania-300x145.png"
                                    alt="Литва флаг">

                                <h3 class="loop-country__title">Литва</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Маврикий"
                            href="mavrikij/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Mauritius-300x197.png"
                                    alt="Маврикий флаг">

                                <h3 class="loop-country__title">Маврикий</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Малайзия"
                            href="malajzija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Malaysia-300x148.png"
                                    alt="Малайзия флаг">

                                <h3 class="loop-country__title">Малайзия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Мальдивы"
                            href="maldivy/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Maldives-300x198.png"
                                    alt="Мальдивы флаг">

                                <h3 class="loop-country__title">Мальдивы</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Мальта"
                            href="malta/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Malta-300x197.png"
                                    alt="Мальта флаг">

                                <h3 class="loop-country__title">Мальта</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Марокко"
                            href="marokko/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Morocco-300x197.png"
                                    alt="Марокко флаг">

                                <h3 class="loop-country__title">Марокко</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Мексика"
                            href="meksika/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Mexico-300x163.png"
                                    alt="Мексика флаг">

                                <h3 class="loop-country__title">Мексика</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Монако"
                            href="monako/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Monaco-300x226.png"
                                    alt="Монако флаг">

                                <h3 class="loop-country__title">Монако</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Нидерланды"
                            href="niderlandy/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Netherlands-300x195.png"
                                    alt="Нидерланды флаг">

                                <h3 class="loop-country__title">Нидерланды</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Польша"
                            href="polsha/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Poland-300x196.png"
                                    alt="Польша флаг">

                                <h3 class="loop-country__title">Польша</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Португалия"
                            href="portugalija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Portugal-300x198.png"
                                    alt="Португалия флаг">

                                <h3 class="loop-country__title">Португалия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Россия"
                            href="rossija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Russian_Federation-300x195.png"
                                    alt="Россия флаг">

                                <h3 class="loop-country__title">Россия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Румыния"
                            href="rumynija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Romania-300x177.png"
                                    alt="Румыния флаг">

                                <h3 class="loop-country__title">Румыния</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Сейшельские острова"
                            href="sejshelskie-ostrova/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Seychelles-300x147.png"
                                    alt="Сейшельские острова флаг">

                                <h3 class="loop-country__title">Сейшельские острова</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Словакия"
                            href="slovakija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Slovakia-300x188.png"
                                    alt="Словакия флаг">

                                <h3 class="loop-country__title">Словакия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Танзания"
                            href="tanzanija/">

                            <div class="loop-country__content">

                                <h3 class="loop-country__title">Танзания</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Тунис"
                            href="tunis/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Tunisia-300x197.png"
                                    alt="Тунис флаг">

                                <h3 class="loop-country__title">Тунис</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Туры в Андорру"
                            href="andorra/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Andorra-300x197.png"
                                    alt="Туры в Андорру флаг">

                                <h3 class="loop-country__title">Андорра</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="туры в германию"
                            href="germanija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Germany-300x199.png"
                                    alt="туры в германию флаг">

                                <h3 class="loop-country__title">Германия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Туры в Грузию"
                            href="gruzija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Georgia-300x223.png"
                                    alt="Туры в Грузию флаг">

                                <h3 class="loop-country__title">Туры в Грузию</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Туры в Египет"
                            href="egipet/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Egypt-300x199.png"
                                    alt="Туры в Египет флаг">

                                <h3 class="loop-country__title">Египет</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Туры в ОАЭ"
                            href="oaje/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/arab_emirates-300x150.jpg"
                                    alt="Туры в ОАЭ флаг">

                                <h3 class="loop-country__title">ОАЭ</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Туры в Таиланд"
                            href="tailand/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Thailand-300x198.png"
                                    alt="Туры в Таиланд флаг">

                                <h3 class="loop-country__title">Таиланд</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Туры в Турцию"
                            href="turcija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Turkey-300x199.png"
                                    alt="Туры в Турцию флаг">

                                <h3 class="loop-country__title">Турция</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Туры в Узбекистан"
                            href="uzbekistan/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2018/03/uzbekistan-300x150.gif"
                                    alt="Туры в Узбекистан флаг">

                                <h3 class="loop-country__title">Туры в Узбекистан</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Туры во Вьетнам"
                            href="vetnam/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Vietnam-300x198.png"
                                    alt="Туры во Вьетнам флаг">

                                <h3 class="loop-country__title">Вьетнам</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Туры на Шри-Ланку"
                            href="shri-lanka/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Sri_Lanka-300x143.png"
                                    alt="Туры на Шри-Ланку флаг">

                                <h3 class="loop-country__title">Шри ланка</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Украина"
                            href="ukraina/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Ukraine-300x198.png"
                                    alt="Украина флаг">

                                <h3 class="loop-country__title">Украина</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Финляндия"
                            href="finljandija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Finland-300x177.png"
                                    alt="Финляндия флаг">

                                <h3 class="loop-country__title">Финляндия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Франция"
                            href="francija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/France-300x196.png"
                                    alt="Франция флаг">

                                <h3 class="loop-country__title">Франция</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Хорватия"
                            href="horvatija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Croatia-300x147.png"
                                    alt="Хорватия флаг">

                                <h3 class="loop-country__title">Хорватия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Черногория"
                            href="chernogorija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/chernogoria-300x150.jpg"
                                    alt="Черногория флаг">

                                <h3 class="loop-country__title">Черногория</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Чехия"
                            href="chehija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Czech_Republic-300x196.png"
                                    alt="Чехия флаг">

                                <h3 class="loop-country__title">Чехия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Швейцария"
                            href="shvejcarija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Switzerland-300x300.png"
                                    alt="Швейцария флаг">

                                <h3 class="loop-country__title">Швейцария</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Эстония"
                            href="jestonija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/Estonia-300x198.png"
                                    alt="Эстония флаг">

                                <h3 class="loop-country__title">Эстония</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="ЮАР"
                            href="juar/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2017/07/South_Africa-300x199.png"
                                    alt="ЮАР флаг">

                                <h3 class="loop-country__title">ЮАР</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Япония"
                            href="japonija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                    src="https://kochevnik.kg/wp-content/uploads/2018/08/flag_of_japan-300x200.gif"
                                    alt="Япония флаг">

                                <h3 class="loop-country__title">Япония</h3>
                            </div>
                        </a>
                    </article>
                </div>
            </div>

        </div>

    </main>
@endsection
