@extends('layouts.frontend')

@section('content')
    <main id="main" class="main" role="main">
        <div class="container">
            <article id="post-3328" class="article">

                <h1 class="article__head">Контакты</h1>

                <div class="article__content">
                </div>


                <div class="c-office">
                    <h3 class="c-office__city">Бишкек</h3>

                    <p class="c-office__address">пр. Байтик Баатыра 74 </p>

                    <p>
                        <span class="c-office__phone h-contacts__phone ">
                            <a href="tel:+996550312949">+996 (550) 312949</a> </span>
                    </p>


                    <div class="c-office__map">
                        <p><a class="dg-widget-link"
                                href="http://2gis.kg/bishkek/firm/70000001045815753/center/74.60982799530031,42.85567578734514/zoom/16?utm_medium=widget-source&#038;utm_campaign=firmsonmap&#038;utm_source=bigMap">Посмотреть
                                на карте Бишкека</a></p>
                        <div class="dg-widget-link"><a
                                href="http://2gis.kg/bishkek/firm/70000001045815753/photos/70000001045815753/center/74.60982799530031,42.85567578734514/zoom/17?utm_medium=widget-source&#038;utm_campaign=firmsonmap&#038;utm_source=photos">Фотографии
                                компании</a></div>
                        <div class="dg-widget-link"><a
                                href="http://2gis.kg/bishkek/center/74.60982,42.854788/zoom/16/routeTab/rsType/bus/to/74.60982,42.854788╎Кочевник.kg, туристическая компания?utm_medium=widget-source&#038;utm_campaign=firmsonmap&#038;utm_source=route">Найти
                                проезд до Кочевник.kg, туристическая компания</a></div>
                        <p>
                            <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
                            <script charset="utf-8">
                                new DGWidgetLoader({
                                    "width": 640,
                                    "height": 600,
                                    "borderColor": "#a3a3a3",
                                    "pos": {
                                        "lat": 42.85567578734514,
                                        "lon": 74.60982799530031,
                                        "zoom": 16
                                    },
                                    "opt": {
                                        "city": "bishkek"
                                    },
                                    "org": [{
                                        "id": "70000001045815753"
                                    }]
                                });
                            </script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет
                                карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
                        </p>
                    </div>
                </div>
                <div class="c-office">
                    <h3 class="c-office__city">Ош</h3>

                    <p class="c-office__address">пр-т Масалиева, 28/2</p>

                    <p>
                        <span class="c-office__phone h-contacts__phone ">
                            <a href="tel:+996323286677">+996 (3232) 8 66 77</a> </span>
                    </p>
                    <p>
                        <span class="c-office__phone h-contacts__phone ">
                            <a href="tel:+996550086677">+996 (550) 086-677</a> </span>
                    </p>


                </div>
                <!-- <div class="contacts__map">
                        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1nS-vaY-6bxIRzDz0gPWuSmQ59hc" width="100%" height="600"></iframe>
                    </div> -->
            </article>

        </div>
    </main>
@endsection
