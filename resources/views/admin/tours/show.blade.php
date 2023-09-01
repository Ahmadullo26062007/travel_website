@extends('layouts.admin')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title ">Вся информация о туре</h5>
                            <a class="btn btn-secondary mt-3" href="{{route('tours.index')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                                </svg>
                                Назад
                            </a>
                        </div>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Название тура</th>
                                <td>{{$tour->title}}</td>
                            </tr>
                            <tr>
                                <th>Страна</th>
                                @php
                                    $county=\App\Models\Country::find($tour->country_id);
                                    $category=\App\Models\Category::find($tour->category_id);
                                    $pricetype=\App\Models\Tour::PRICETYPES[$tour->price_type];
                                @endphp
                                <td>{{$county->name}}</td>
                            </tr>
                            <tr>
                                <th>Город</th>
                                <td>{{$tour->city}}</td>
                            </tr>
                            <tr>
                                <th>Категория</th>
                                <td>{{$category->name}}</td>
                            </tr>
                            <tr>
                                <th>Описание</th>
                                <td>{{$tour->description}}</td>
                            </tr>
                            <tr>
                                <th>Цена</th>
                                <td>{{$tour->price}} {{$pricetype}}</td>
                            </tr>
                        </table>
                        <div class="col-12 d-flex">
                            <h5 class="card-title mb-0">Изображений</h5>
                            @foreach($tour->images as $image)
                                <div class="card-body">
                                    <img src="{{asset('laravel/public/images/'.$image->name)}}" width="100px" height="100"
                                         class="img-fluid">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
