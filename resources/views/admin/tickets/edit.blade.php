@extends('layouts.admin')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title">Update Ticket</h5>
                        </div>


                        <form action="{{ route('ticket.update',[$ticket->id]) }}" method="post" enctype="multipart/form-data">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{ $error }}
                                    </div>
                                @endforeach
                            @endif
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="card-body">
                                        <h5 class="card-title mb-1">Name</h5>
                                        <input type="text" name="name" class="form-control"
                                               placeholder="Country name" value="{{$ticket->name}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card-body">
                                        <h5 class="card-title mb-1">Partner</h5>
                                        <select class="form-control" name="general" id="">
                                            <option disabled selected>Select </option>
                                            @foreach(\App\Models\Ticket::GENERAL as $id=> $part)
                                                <option @if($ticket->general==$id) selected @endif value="{{$id}}">{{$part}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card-body">
                                        <h5 class="card-title mb-1">Image choose</h5>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card-body">
                                        <h5 class="card-title mb-1">Previous Image</h5>
                                        <img width="300px" src="{{asset('images/'.$ticket->image)}}" alt="">
                                    </div>
                                </div>

                            </div>
                            <button class="btn btn-primary mt-3 ms-3 mb-3" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd"
                                          d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                                Update
                            </button>
                            <a class="btn btn-secondary mt-3 mb-3"  href="{{ route('ticket.index') }}">
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
