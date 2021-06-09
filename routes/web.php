<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\SignUpController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', 'App\Http\Controllers\PagesController@home');
// Route::get('/about', 'App\Http\Controllers\PagesController@about');
// Route::get( '/services', 'App\Http\Controllers\PagesController@services');
// Route::get('/signup', 'App\Http\Controllers\PagesController@signup');

Route::get('/', 'App\Http\Controllers\PagesController@home')->name('home');
Route::get('/about', 'App\Http\Controllers\PagesController@about')->name('about');
Route::get('/terms', 'App\Http\Controllers\PagesController@terms')->name('terms');
Route::get( '/services', 'App\Http\Controllers\PagesController@services')->name('services');
Route::get( '/signup', 'App\Http\Controllers\PagesController@signup')->name('signup');
Route::get( '/contact', 'App\Http\Controllers\PagesController@contact')->name('contact');
Route::post( '/sendMessage', 'App\Http\Controllers\PagesController@sendMessage')->name('sendMessage');
Route::get('/login', [LoginController::class,'index'])->name( 'login');
Route::post('/login', [ LoginController::class, 'login']);
Route::get('/signup', [SignUpController::class, 'index'])->name('signup');
Route::post('/signup', [SignUpController::class, 'store']);
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/appointment-booking', [AppointmentController::class, 'index'])->name('appointment-booking');




Route::get('/test', function () {
    return view('pages.controltest');
});

// Route::get('/about', function () {
//     return view('pages.about');
// });

// Route::get('/services', function () {
//     return view('pages.services');
// });


