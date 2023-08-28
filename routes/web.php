<?php

use App\Http\Controllers\AboutController;
use App\Models\Category;
use App\Models\Country;
use App\Models\Tour;
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

    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::resource('about', AboutController::class);
    Route::resource('countries_admin', \App\Http\Controllers\CountryController::class);
    Route::resource('category', \App\Http\Controllers\CategoryController::class);
    Route::resource('tours', \App\Http\Controllers\TourController::class);
    Route::resource('visa', \App\Http\Controllers\VisaController::class);
    Route::resource('ticket', \App\Http\Controllers\TicketController::class);
    Route::resource('word', \App\Http\Controllers\WordController::class);
});
// Frontend

Route::get('/', function () {
    $categories = Category::orderByDesc('id')->get();
    $countries = Country::take(12)->get();
    $hot_tours = Tour::take(4)->orderBy('id', 'desc')->get();
    return view('frontend.home.index', compact('categories', 'countries', 'hot_tours'));
})->name('home.index');

Route::get('/tour', function () {
    return view('frontend.tours.index');
})->name('front.tours.index');

Route::get('/tour-detail/{id}', function ($id) {
    $t = \App\Models\Tour::find($id);
    $category = $t->category;
    $f_t = $category->tours;
    return view('frontend.tours.detail', compact('t', 'f_t'));
})->name('front.tours.detail');

Route::get('hot-tours', function () {
    return view('frontend.hot_tours.index');
})->name('front.hot_tours.index');

Route::get('country', function () {
    $countries = \App\Models\Country::all();
    return view('frontend.countries.index', compact('countries'));
})->name('front.countries.index');

Route::get('/country-detail/{id}', function ($id) {
    $country = \App\Models\Country::find($id);
    return view('frontend.countries.detail', compact('country'));
})->name('front.country.detail');

Route::get('visas', function () {
    $visas = \App\Models\Visa::with('country')->get();
    return view('frontend.visas.index', compact('visas'));
})->name('front.visas.index');

Route::get('tickets', function () {
    $tickets = \App\Models\Ticket::all();
    return view('frontend.tickets.index', compact('tickets'));
})->name('front.tickets.index');

Route::get('contact', function () {
    return view('frontend.contact.index');
})->name('front.contact.index');

// Category detail

Route::get('categories/{id}', function ($id) {
    $category = Category::find($id);
    $categories = Category::orderByDesc('id')->get();

    return view('frontend.category.detail', compact('category', 'categories'));
})->name('categories.detail');


Route::get('login', function () {
    return view('admin.login');
})->name('login');
Route::get('/logout', function () {
    Auth::logout();
    return view('admin.login');
})->name('logout');
