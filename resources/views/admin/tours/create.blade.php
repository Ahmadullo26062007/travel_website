@extends('layouts.admin')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title">Menejer qo'shish</h5>
                        </div>


                        <form action="{{ route('tours.store') }}" method="post" enctype="multipart/form-data">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger" role="alert">
                                        <h3 class="text-danger"> {{ $error }} </h3>
                                    </div>
                                @endforeach
                            @endif

                            @csrf
                            <div class="row">
                                <div class="col-4 ">

                                    <h5 class="card-title mb-0">Joy nomi</h5>

                                    <div class="card-body">
                                        <input type="text" name="title" class="form-control"
                                               placeholder="Sayohat joyini nomini kiriting">
                                    </div>
                                </div>

                                <div class="col-4 ">

                                    <h5 class="card-title mb-0">Davlat</h5>

                                    <div class="card-body">
                                        <select class="form-select" name="country_id" id="">
                                            <option disabled selected>Davlatini tanlang</option>
                                            @foreach($countries as $id=> $r)
                                                <option value="{{$id}}">{{$r}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4 ">

                                    <h5 class="card-title mb-0">Shaxar nomi</h5>

                                    <div class="card-body">
                                        <input type="text" name="city" class="form-control"
                                               placeholder="Sayohat shaxrini nomini kiriting">
                                    </div>
                                </div>
                                <div class="col-3 ">
                                    <h5 class="card-title mb-0">Sayohat Turi</h5>
                                    <div class="card-body">
                                        <select class="form-select" name="category_id" id="">
                                            <option disabled selected>Turini tanlang</option>
                                            @foreach($categories as $id=> $s)
                                                <option value="{{$id}}">{{$s}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-3">

                                    <h5 class="card-title mb-0">Pul turi</h5>

                                    <div class="card-body">
                                        <select class="form-select" name="price_type" id="">
                                            <option disabled selected>Pul turini tanlang</option>
                                            @foreach(\App\Models\Tour::PRICETYPES as $id=> $s)
                                                <option value="{{$id}}">{{$s}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">

                                    <h5 class="card-title mb-0">Puli</h5>

                                    <div class="card-body">
                                        <input type="text" name="price" class="form-control" placeholder="Sayohatga ketadigan mablag'ni yozing">
                                    </div>
                                </div>

                                <div class="col-3">

                                    <h5 class="card-title mb-0">Sayohat davomiyligi</h5>

                                    <div class="card-body">
                                        <input type="text" name="length" class="form-control" placeholder="Sayohat necha kun bo'lishini yozing">
                                    </div>
                                </div>
                                <div class="col-3">

                                    <h5 class="card-title mb-0">Boshlanish vaqti</h5>

                                    <div class="card-body">
                                        <input type="date" name="start_time" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">

                                    <h5 class="card-title mb-0">Tugash vaqti</h5>

                                    <div class="card-body">
                                        <input type="date" name="end_time" class="form-control">
                                    </div>
                                </div>

                                <div class="col-6 ">

                                    <h5 class="card-title mb-0">Rasimi</h5>

                                    <div class="card-body">
                                        <input type="file" name="image[]" multiple class="form-control">
                                    </div>
                                </div>

                                <div class="col-12">

                                    <h5 class="card-title mb-0">Sayohat Tavsifi</h5>

                                    <div class="card-body">
                                        <textarea class="form-control" name="description" id="" cols="30"
                                                  rows="10"></textarea>
                                    </div>
                                </div>

                            </div>
                            <button class="btn btn-primary mt-3" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd"
                                          d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                                Yaratish
                            </button>
                            <a class="btn btn-secondary mt-3" href="{{ route('tours.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                                </svg>
                                Orqaga
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
