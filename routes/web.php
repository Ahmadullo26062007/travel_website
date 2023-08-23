<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/admin', function(){
    return view('admin.index');
})->name('admin.index');

Route::resource('about', AboutController::class );


// Frontend

Route::get('/', function () {
    return view('frontend.home.index');
})->name('home.index');
