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


Route::group(['middleware' => 'auth'], function () {

Route::get('/admin', function(){
    return view('admin.index');
})->name('admin.index');

Route::resource('about', AboutController::class );
Route::resource('countries_admin', \App\Http\Controllers\CountryController::class );
Route::resource('category', \App\Http\Controllers\CategoryController::class );
Route::resource('tours', \App\Http\Controllers\TourController::class );
Route::resource('visa', \App\Http\Controllers\VisaController::class );
Route::resource('ticket', \App\Http\Controllers\TicketController::class );
});
// Frontend

Route::get('/', function () {
    return view('frontend.home.index');
})->name('home.index');

Route::get('/tour', function () {
    return view('frontend.tours.index');
})->name('front.tours.index');

Route::get('hot-tours', function(){
    return view('frontend.hot_tours.index');
})->name('front.hot_tours.index');

Route::get('country', function(){
    return view('frontend.countries.index');
})->name('front.countries.index');

Route::get('visas', function(){
    return view('frontend.visas.index');
})->name('front.visas.index');

Route::get('tickets', function(){
    return view('frontend.tickets.index');
})->name('front.tickets.index');

Route::get('contact', function(){
    return view('frontend.contact.index');
})->name('front.contact.index');





Route::get('login', function () {
    return view('admin.login');
})->name('login');
Route::get('/logout', function () {
    Auth::logout();
    return view('admin.login');
})->name('logout');
