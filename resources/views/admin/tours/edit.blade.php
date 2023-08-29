@extends('layouts.admin')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title">Tour update</h5>
                        </div>


                        <form action="{{route('tours.update',$tour->id)}}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger text-danger" role="alert">
                                        <h3 class="text-danger">
                                            {{ $error }}
                                        </h3>
                                    </div>
                                @endforeach
                            @endif

                            @csrf
                            <div class="row">
                                <div class="col-4 ">

                                    <h5 class="card-title mb-0">Tour title</h5>

                                    <div class="card-body">
                                        <input type="text" name="title" class="form-control"
                                               placeholder="Sayohat joyini nomini kiriting" value="{{$tour->title}}">
                                    </div>
                                </div>

                                <div class="col-4 ">

                                    <h5 class="card-title mb-0">Countries</h5>

                                    <div class="card-body">
                                        <select class="form-select" name="country_id" id="">
                                            <option disabled selected>Select Country</option>
                                            @foreach($countries as $id=> $r)
                                                <option @if($tour->country_id==$id) selected
                                                        @endif value="{{$id}}">{{$r}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4 ">

                                    <h5 class="card-title mb-0">City name</h5>

                                    <div class="card-body">
                                        <input type="text" name="city" class="form-control"
                                               placeholder="Write the city" value="{{$tour->city}}">
                                    </div>
                                </div>
                                <div class="col-3 ">
                                    <h5 class="card-title mb-0">Category</h5>
                                    <div class="card-body">
                                        <select class="form-select" name="category_id" id="">
                                            <option disabled selected>Select Category</option>
                                            @foreach($categories as $id=> $s)
                                                <option @if($tour->category_id==$id) selected
                                                        @endif value="{{$id}}">{{$s}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-3">

                                    <h5 class="card-title mb-0">Price type</h5>

                                    <div class="card-body">
                                        <select class="form-select" name="price_type" id="">
                                            <option disabled selected>Select price type</option>
                                            @foreach(\App\Models\Tour::PRICETYPES as $id=> $s)
                                                <option @if($tour->price_type==$id) selected
                                                        @endif value="{{$id}}">{{$s}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">

                                    <h5 class="card-title mb-0">Price</h5>

                                    <div class="card-body">
                                        <input type="number" name="price" class="form-control"
                                               placeholder="Enter the price that will be spent on the travel"
                                               value="{{$tour->price}}">
                                    </div>
                                </div>

                                <div class="col-3">

                                    <h5 class="card-title mb-0">Continuity</h5>

                                    <div class="card-body">
                                        <input type="text" name="length" class="form-control"
                                               placeholder="Write how many days the trip will be"
                                               value="{{$tour->length}}">
                                    </div>
                                </div>
                                <div class="col-3">

                                    <h5 class="card-title mb-0">Start time</h5>

                                    <div class="card-body">
                                        <input type="date" name="start_time" class="form-control"
                                               value="{{$tour->start_time}}">
                                    </div>
                                </div>
                                <div class="col-3">

                                    <h5 class="card-title mb-0">End time</h5>

                                    <div class="card-body">
                                        <input type="date" name="end_time" class="form-control"
                                               value="{{$tour->end_time}}">
                                    </div>
                                </div>

                                <div class="col-6 ">

                                    <h5 class="card-title mb-0">Previous Images</h5>
                                    <div class="card-body">
                                        <input type="file" name="images[]" multiple class="form-control">
                                    </div>
                                </div>

                                <div class="col-12 d-flex">
                                    <h5 class="card-title mb-0">Images</h5>
                                    @foreach($tour->images as $image)
                                        <div class="card-body">
                                            <img src="{{asset('laravel/public/images/'.$image->name)}}" width="100px" height="50"
                                                 class="img-fluid">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-6">
                                    <h5 class="card-title mb-0">Description</h5>
                                    <div class="card-body">
                                        <textarea class="form-control" name="description" id="" cols="30"
                                                  rows="10">{{$tour->description}}</textarea>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h5 class="card-title mb-0">Comfor Description</h5>
                                    <div class="card-body">
                                        <textarea class="form-control" name="comfor_description" id="" cols="30"
                                                  rows="10">{{$tour->comfor_description}}</textarea>
                                    </div>
                                </div>
                                <div class="col-6 ">

                                    <h5 class="card-title mb-0">Image</h5>

                                    <div class="card-body">
                                        <input type="file" name="image" multiple class="form-control">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <h5 class="card-title mb-0">Previous Image</h5>
                                    <div class="card-body">
                                        <img width="300px" src="{{asset('laravel/public/images/'.$tour->image)}}" alt="">
                                    </div>
                                </div>

                                <div class="col-6">

                                    <h5 class="card-title mb-0">Visa type</h5>

                                    <div class="card-body">
                                        <select class="form-select" name="visa_type" id="">
                                            <option disabled selected>Select visa type</option>
                                            @foreach(\App\Models\Tour::PRICETYPES as $id=> $s)
                                                <option @if($tour->visa_type==$id) selected
                                                        @endif value="{{$id}}">{{$s}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">

                                    <h5 class="card-title mb-0">Visa</h5>

                                    <div class="card-body">
                                        <input type="number" name="visa" class="form-control"
                                               placeholder="Enter the visa that will be spent on the travel"
                                               value="{{$tour->visa}}">
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
                                Update
                            </button>
                            <a class="btn btn-secondary mt-3" href="{{ route('tours.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                                </svg>
                                Back
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
