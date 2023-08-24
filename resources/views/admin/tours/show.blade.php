@extends('layouts.admin')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title ">Sayohatni barcha ma'lumotlarini ko'rish</h5>
                            <a class="btn btn-secondary mt-3" href="{{route('tours.index')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                                </svg>
                                Orqaga
                            </a>
                        </div>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Sayohat nomi</th>
                                <td>{{$tour->title}}</td>
                            </tr>
                            <tr>
                                <th>Davlati</th>
                                @php
                                    $county=\App\Models\Country::find($tour->country_id);
                                    $category=\App\Models\Category::find($tour->category_id);
                                    $pricetype=\App\Models\Tour::PRICETYPES[$tour->price_type];
                                @endphp
                                <td>{{$county->name}}</td>
                            </tr>
                            <tr>
                                <th>Shaxri</th>
                                <td>{{$tour->city}}</td>
                            </tr>
                            <tr>
                                <th>Sayohat turi</th>
                                <td>{{$category->name}}</td>
                            </tr>
                            <tr>
                                <th>Sayohat tavsifi</th>
                                <td>{{$tour->description}}</td>
                            </tr>
                            <tr>
                                <th>Puli</th>
                                <td>{{$tour->price}} {{$pricetype}}</td>
                            </tr>
                        </table>
{{--                        <table class="table table-bordered table-striped">--}}
{{--                            <thead>--}}
{{--                            <tr>Rasmlari</tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}

{{--                            @foreach($tour->images as $image)--}}
{{--                                <tr>--}}
{{--                                        <td class="col-6"><img width="200px" height="200px" src="{{asset('storage/'.$image->name)}}"--}}
{{--                                                               alt="images"></td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}

{{--                            </tbody>--}}
{{--                        </table>--}}
                        <div class="col-12 d-flex">
                            <h5 class="card-title mb-0">Sayohat Rasimi</h5>
                            @foreach($tour->images as $image)
                                <div class="card-body">
                                    <img src="{{asset('storage/'.$image->name)}}" width="100px" height="100"
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
