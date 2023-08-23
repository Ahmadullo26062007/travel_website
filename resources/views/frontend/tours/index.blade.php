@extends('layouts.frontend')

@section('content')
    <main id="main" class="main sidebar-left" role="main">

        <div class="article__header page-tour__header">
            <div class="page-tour__thumb-wrap"
                style="background-image: url(https://kochevnik.kg/wp-content/themes/kochevnik/assets/img/tours-bg.jpg)">
            </div>

            <div class="page-tour__header-cont">
                <div class="container">
                    <h1 class="article__head page-tour__head">Туры</h1>
                </div>
            </div>
        </div>

        <div class="container">

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
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/antalja-sherwood-dreams-resort-5/" title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/03/59626620-1024x768.jpg"
                                            class="tour-loop__img article-loop__img wp-post-image" alt=""
                                            srcset="https://kochevnik.kg/wp-content/uploads/2020/03/59626620.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/03/59626620-300x225.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/03/59626620-768x576.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/03/59626620-100x75.jpg 100w"
                                            sizes="(max-width: 900px) 100vw, 900px" /> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/antalja-sherwood-dreams-resort-5/"
                                    class="tour-loop__country">
                                    Турция </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/antalja-sherwood-dreams-resort-5/"
                                    title="Анталья | Sherwood Dreams Resort 5*">
                                    Анталья | Sherwood Dreams Resort 5* </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
                                <span class="tour-loop__price">
                                    <strong>582</strong>
                                    EUR
                                </span>
                            </div>
                        </article>
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/nasledie-turcii/" title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25-1024x684.jpg"
                                            class="tour-loop__img article-loop__img wp-post-image" alt=""
                                            srcset="https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25-1024x684.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25-768x513.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25-100x67.jpg 100w, https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25.jpg 1600w"
                                            sizes="(max-width: 900px) 100vw, 900px" /> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/nasledie-turcii/" class="tour-loop__country">
                                    Турция </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/nasledie-turcii/" title="Наследие Турции">
                                    Наследие Турции </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
                                <span class="tour-loop__price">
                                    <strong>399</strong>
                                    USD
                                </span>
                            </div>
                        </article>
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/vsja-turcija-za-8-dnej-velikolepnyj-vek/"
                                        title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2019/04/11292607_1160-1024x681.jpg"
                                            class="tour-loop__img article-loop__img wp-post-image" alt=""
                                            srcset="https://kochevnik.kg/wp-content/uploads/2019/04/11292607_1160-1024x681.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2019/04/11292607_1160-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2019/04/11292607_1160-768x511.jpg 768w, https://kochevnik.kg/wp-content/uploads/2019/04/11292607_1160.jpg 1160w"
                                            sizes="(max-width: 900px) 100vw, 900px" /> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/vsja-turcija-za-8-dnej-velikolepnyj-vek/"
                                    class="tour-loop__country">
                                    Турция </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/vsja-turcija-za-8-dnej-velikolepnyj-vek/"
                                    title="Вся Турция за 8 дней | Великолепный Век">
                                    Вся Турция за 8 дней | Великолепный Век </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
                                <span class="tour-loop__price">
                                    <strong>399</strong>
                                    USD
                                </span>
                            </div>
                        </article>
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/antalja-fame-residence-kemer-spa-5/"
                                        title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/03/13436821-1024x681.jpg"
                                            class="tour-loop__img article-loop__img wp-post-image" alt=""
                                            srcset="https://kochevnik.kg/wp-content/uploads/2020/03/13436821.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/03/13436821-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/03/13436821-768x511.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/03/13436821-100x67.jpg 100w"
                                            sizes="(max-width: 900px) 100vw, 900px" /> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/antalja-fame-residence-kemer-spa-5/"
                                    class="tour-loop__country">
                                    Турция </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/antalja-fame-residence-kemer-spa-5/"
                                    title="Анталья | Fame Residence Kemer &#038; Spa 5*">
                                    Анталья | Fame Residence Kemer &#038; Spa 5* </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
                                <span class="tour-loop__price">
                                    <strong>570</strong>
                                    EUR
                                </span>
                            </div>
                        </article>
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/tury-uzbekistan/" title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2019/04/2-1-1024x460.jpg"
                                            class="tour-loop__img article-loop__img wp-post-image" alt=""
                                            srcset="https://kochevnik.kg/wp-content/uploads/2019/04/2-1-1024x460.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2019/04/2-1-300x135.jpg 300w, https://kochevnik.kg/wp-content/uploads/2019/04/2-1-768x345.jpg 768w, https://kochevnik.kg/wp-content/uploads/2019/04/2-1.jpg 1200w"
                                            sizes="(max-width: 900px) 100vw, 900px" /> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/tury-uzbekistan/" class="tour-loop__country">
                                    Туры в Узбекистан </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/tury-uzbekistan/"
                                    title="Голубые купола Узбекистана 2020">
                                    Голубые купола Узбекистана 2020 </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
                                <span class="tour-loop__price">
                                    <strong>19000</strong>
                                    KGS
                                </span>
                            </div>
                        </article>
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/majskie-prazdniki-v-solnechnoj-antale/"
                                        title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244-1024x768.png"
                                            class="tour-loop__img article-loop__img wp-post-image" alt=""
                                            srcset="https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244-1024x768.png 1024w, https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244-300x225.png 300w, https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244-768x576.png 768w, https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244-100x75.png 100w, https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244.png 1200w"
                                            sizes="(max-width: 900px) 100vw, 900px" /> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/majskie-prazdniki-v-solnechnoj-antale/"
                                    class="tour-loop__country">
                                    Турция </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/majskie-prazdniki-v-solnechnoj-antale/"
                                    title="Майские праздники в Солнечной Анталье">
                                    Майские праздники в Солнечной Анталье </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
                                <span class="tour-loop__price">
                                    <strong>690</strong>
                                    USD
                                </span>
                            </div>
                        </article>
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/zolotoe-kolco-turcii-2020/" title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2019/08/3-1-1024x621.jpg"
                                            class="tour-loop__img article-loop__img wp-post-image" alt=""
                                            srcset="https://kochevnik.kg/wp-content/uploads/2019/08/3-1-1024x621.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2019/08/3-1-300x182.jpg 300w, https://kochevnik.kg/wp-content/uploads/2019/08/3-1-768x466.jpg 768w, https://kochevnik.kg/wp-content/uploads/2019/08/3-1.jpg 1100w"
                                            sizes="(max-width: 900px) 100vw, 900px" /> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/zolotoe-kolco-turcii-2020/"
                                    class="tour-loop__country">
                                    Турция </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/zolotoe-kolco-turcii-2020/"
                                    title="Золотое Кольцо Турции 2020">
                                    Золотое Кольцо Турции 2020 </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
                                <span class="tour-loop__price">
                                    <strong>345</strong>
                                    USD
                                </span>
                            </div>
                        </article>
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/tailand-the-nature-phuket-5/" title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/02/225701578-1024x575.jpg"
                                            class="tour-loop__img article-loop__img wp-post-image" alt=""
                                            srcset="https://kochevnik.kg/wp-content/uploads/2020/02/225701578.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/02/225701578-300x168.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/02/225701578-768x431.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/02/225701578-100x56.jpg 100w"
                                            sizes="(max-width: 900px) 100vw, 900px" /> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/tailand-the-nature-phuket-5/"
                                    class="tour-loop__country">
                                    Таиланд </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/tailand-the-nature-phuket-5/"
                                    title="Пхукет | The Nature Phuket 5*">
                                    Пхукет | The Nature Phuket 5* </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
                                <span class="tour-loop__price">
                                    <strong>812</strong>
                                    USD
                                </span>
                            </div>
                        </article>
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/tailand-dream-phuket-hotel-laguna-5/"
                                        title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/02/117680370-1024x683.jpg"
                                            class="tour-loop__img article-loop__img wp-post-image" alt=""
                                            srcset="https://kochevnik.kg/wp-content/uploads/2020/02/117680370.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/02/117680370-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/02/117680370-768x512.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/02/117680370-100x67.jpg 100w"
                                            sizes="(max-width: 900px) 100vw, 900px" /> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/tailand-dream-phuket-hotel-laguna-5/"
                                    class="tour-loop__country">
                                    Таиланд </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/tailand-dream-phuket-hotel-laguna-5/"
                                    title="Пхукет | Dream Phuket Hotel Laguna 5*">
                                    Пхукет | Dream Phuket Hotel Laguna 5* </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
                                <span class="tour-loop__price">
                                    <strong>758</strong>
                                    EUR
                                </span>
                            </div>
                        </article>
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/tailand-swissotel-resort-phuket-patong-beach-5/"
                                        title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/02/11469547-1024x768.jpg"
                                            class="tour-loop__img article-loop__img wp-post-image" alt=""
                                            srcset="https://kochevnik.kg/wp-content/uploads/2020/02/11469547.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/02/11469547-300x225.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/02/11469547-768x576.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/02/11469547-100x75.jpg 100w"
                                            sizes="(max-width: 900px) 100vw, 900px" /> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/tailand-swissotel-resort-phuket-patong-beach-5/"
                                    class="tour-loop__country">
                                    Таиланд </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/tailand-swissotel-resort-phuket-patong-beach-5/"
                                    title="Пхукет | Swissotel Resort Phuket Patong Beach 5*">
                                    Пхукет | Swissotel Resort Phuket Patong Beach 5* </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
                                <span class="tour-loop__price">
                                    <strong>705</strong>
                                    EUR
                                </span>
                            </div>
                        </article>
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/tailand-splash-beach-resort-by-langham-5/"
                                        title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/02/241293737-1024x683.jpg"
                                            class="tour-loop__img article-loop__img wp-post-image" alt=""
                                            srcset="https://kochevnik.kg/wp-content/uploads/2020/02/241293737.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/02/241293737-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/02/241293737-768x512.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/02/241293737-100x67.jpg 100w"
                                            sizes="(max-width: 900px) 100vw, 900px" /> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/tailand-splash-beach-resort-by-langham-5/"
                                    class="tour-loop__country">
                                    Таиланд </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/tailand-splash-beach-resort-by-langham-5/"
                                    title="Пхукет | Splash Beach Resort By Langham 5*">
                                    Пхукет | Splash Beach Resort By Langham 5* </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
                                <span class="tour-loop__price">
                                    <strong>669</strong>
                                    EUR
                                </span>
                            </div>
                        </article>
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/phuket-pgs-hotels-casadel-sol-4/" title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/03/original_78571665-1024x674.jpg"
                                            class="tour-loop__img article-loop__img wp-post-image" alt=""
                                            srcset="https://kochevnik.kg/wp-content/uploads/2020/03/original_78571665-1024x674.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/03/original_78571665-300x198.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/03/original_78571665-768x506.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/03/original_78571665-100x66.jpg 100w, https://kochevnik.kg/wp-content/uploads/2020/03/original_78571665.jpg 1280w"
                                            sizes="(max-width: 900px) 100vw, 900px" /> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/phuket-pgs-hotels-casadel-sol-4/"
                                    class="tour-loop__country">
                                    Таиланд </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/phuket-pgs-hotels-casadel-sol-4/"
                                    title="Пхукет | PGS Hotels Casadel Sol 4*">
                                    Пхукет | PGS Hotels Casadel Sol 4* </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
                                <span class="tour-loop__price">
                                    <strong>661</strong>
                                    EUR
                                </span>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

            <div class="tv-search-form tv-moduleid-181896"></div>

            <br><br>

            <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>

        </div>
    </main>
@endsection
