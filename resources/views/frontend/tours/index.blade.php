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
            @livewire('frontend.tours')
            <div class="tv-search-form tv-moduleid-181896"></div>
            <br><br>

            <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>

        </div>
    </main>
@endsection
