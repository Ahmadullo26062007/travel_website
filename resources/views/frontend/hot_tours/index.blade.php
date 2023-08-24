@extends('layouts.frontend')

@section('content')
    <main id="main" class="main" role="main">
        <div class="article__header page-tour__header">
            <div class="page-tour__thumb-wrap" style="background-image: url()">
            </div>

            <div class="page-tour__header-cont">
                <div class="container">
                    <h1 class="article__head page-tour__head">Горящие туры</h1>
                </div>
            </div>
        </div>
        @livewire('hot-tours')

    </main>
@endsection
