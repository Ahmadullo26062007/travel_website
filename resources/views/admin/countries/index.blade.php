@extends('layouts.admin')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title 0">Страны</h5>
                            <a class="btn btn-primary mb-3" href="{{route('countries_admin.create')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                </svg>
                                Создать страну
                            </a>
                        </div>


                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Имя</th>
                                <th>Флаг</th>
                                <th>Изображение</th>
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($countries as $country)
                                <tr>
                                    <td>{{$country->id}}</td>
                                    <td>{{$country->name}}</td>
                                    <td><img width="100px" src="{{asset('laravel/public/countries/'.$country->flag)}}" alt="{{$country->name}} Flag"></td>
                                    <td><img width="100px" src="{{asset('laravel/public/countries/'.$country->image)}}" alt="{{$country->name}} Image"></td>
                                    <td>
                                        <a href="{{route('countries_admin.edit',[$country->id])}}" class="btn btn-info">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
