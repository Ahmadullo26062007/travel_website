@extends('layouts.admin')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title ">All visa information</h5>
                            <a class="btn btn-secondary mt-3" href="{{route('visa.index')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                                </svg>
                                Back
                            </a>
                        </div>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Country</th>
                                @php
                                    $county=\App\Models\Country::find($visa->country_id);
                                    $pricetype=\App\Models\Visa::PRICETYPES[$visa->price_type];
                                @endphp
                                <td>{{$county->name}}</td>
                            </tr>
                            <tr>
                                <th>List of required documents</th>
                                @if($visa->description)
                                <td>{{$visa->description}}</td>
                                @else
                                   <td> Not Available</td>
                                @endif
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>{{$visa->price}} {{$pricetype}}</td>
                            </tr>
                            <tr>
                                <th>Visa processing Time</th>
                                <td>{{$visa->visa_time}} Working day</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
