<div class="container">
    <div class="article__content">
        <div class="tv-hot-tours tv-moduleid-960016"></div>
        <p>
            <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
        </p>
    </div>

    <h2 class="article__subhead">Туры</h2>

    <div class="articles-wrap main-tours-wrap">
        @foreach($tours as $t)

        <article class="tour-loop article-loop main-tour">
            <div class="tour-loop__top">
                <div class="tour-loop__img-wrap">
                    <a href="https://kochevnik.kg/tours/antalja-sherwood-dreams-resort-5/" title="">
                        <img src="https://kochevnik.kg/wp-content/uploads/2020/03/59626620-1024x768.jpg"
                             class="" alt=""
                             srcset="https://kochevnik.kg/wp-content/uploads/2020/03/59626620.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/03/59626620-300x225.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/03/59626620-768x576.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/03/59626620-100x75.jpg 100w"
                             sizes="(max-width: 900px) 100vw, 900px" /> </a>
                </div>

                <a href="https://kochevnik.kg/tours/antalja-sherwood-dreams-resort-5/" class="tour-loop__country">
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

        @endforeach
    </div>

    <div class="pagination">
    </div>


    <div class="cat-list-wrap">
        <h3 class="section__desc">Типы отдыха</h3>
        <ul class="cat-list cat-list--rest">

            <li class="cat-list__item">
                <a href="https://kochevnik.kg/rest_type/akvapark/" class="cat-list__link">
                    <span class="cat-list__title">Аквапарк</span>
                </a>
            </li>

            <li class="cat-list__item">
                <a href="https://kochevnik.kg/rest_type/gorjashhie/" class="cat-list__link">
                    <img class="cat-list__icon" src="https://kochevnik.kg/wp-content/uploads/2018/09/fire.png"
                         alt="Иконка - Огонь">
                    <span class="cat-list__title">Горящие туры</span>
                </a>
            </li>

            <li class="cat-list__item">
                <a href="https://kochevnik.kg/rest_type/kombinirovannye-tury/" class="cat-list__link">
                    <span class="cat-list__title">Комбинированные туры</span>
                </a>
            </li>

            <li class="cat-list__item">
                <a href="https://kochevnik.kg/rest_type/molodezhnye-tury/" class="cat-list__link">
                    <span class="cat-list__title">Молодежные туры</span>
                </a>
            </li>

            <li class="cat-list__item">
                <a href="https://kochevnik.kg/rest_type/molodezhnyj-otdyh/" class="cat-list__link">
                    <span class="cat-list__title">молодежный отдых</span>
                </a>
            </li>

            <li class="cat-list__item">
                <a href="https://kochevnik.kg/rest_type/morskoj-kruiz/" class="cat-list__link">
                    <span class="cat-list__title">Морские круизы</span>
                </a>
            </li>

            <li class="cat-list__item">
                <a href="https://kochevnik.kg/rest_type/na-prazdnichnye-daty/" class="cat-list__link">
                    <span class="cat-list__title">На праздничные даты</span>
                </a>
            </li>

            <li class="cat-list__item">
                <a href="https://kochevnik.kg/rest_type/pljazhnye/" class="cat-list__link">
                    <img class="cat-list__icon"
                         src="https://kochevnik.kg/wp-content/uploads/2018/09/sun-umbrella.png"
                         alt="Иконка - Пляж">
                    <span class="cat-list__title">Пляжный отдых</span>
                </a>
            </li>

            <li class="cat-list__item">
                <a href="https://kochevnik.kg/rest_type/rannee-bronirovanie/" class="cat-list__link">
                    <img class="cat-list__icon" src="https://kochevnik.kg/wp-content/uploads/2018/09/study.png"
                         alt="Иконка - Читающий человек">
                    <span class="cat-list__title">Раннее бронирование</span>
                </a>
            </li>

            <li class="cat-list__item">
                <a href="https://kochevnik.kg/rest_type/svadebnyj-tur/" class="cat-list__link">
                    <span class="cat-list__title">Свадебный тур</span>
                </a>
            </li>

            <li class="cat-list__item">
                <a href="https://kochevnik.kg/rest_type/semejnye-tury/" class="cat-list__link">
                    <img class="cat-list__icon"
                         src="https://kochevnik.kg/wp-content/uploads/2018/09/family-of-three.png"
                         alt="Иконка - Семья">
                    <span class="cat-list__title">Семейные туры</span>
                </a>
            </li>

            <li class="cat-list__item">
                <a href="https://kochevnik.kg/rest_type/stokovyj-tur/" class="cat-list__link">
                    <span class="cat-list__title">Стоковый тур</span>
                </a>
            </li>

            <li class="cat-list__item">
                <a href="https://kochevnik.kg/rest_type/shopping-tur/" class="cat-list__link">
                    <span class="cat-list__title">шоппинг тур</span>
                </a>
            </li>

            <li class="cat-list__item">
                <a href="https://kochevnik.kg/rest_type/jekskursionnyj-tur/" class="cat-list__link">
                    <span class="cat-list__title">Экскурсионный тур</span>
                </a>
            </li>
        </ul>
    </div>

</div>
