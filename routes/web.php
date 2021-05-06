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
Route::get( '/services', 'App\Http\Controllers\PagesController@services')->name('services');
Route::get( '/signup', 'App\Http\Controllers\PagesController@signup')->name('signup');
Route::get('/login', [LoginController::class,'index'])->name( 'login');
Route::post('/login', [ LoginController::class, 'login']);
<<<<<<< HEAD
// Route::get('/signup', [SignupController::class, 'index'])->name('signup');
// Route::post('/signup', [SignupController::class, 'signup']);
=======
Route::get('/signup', [SignUpController::class, 'index'])->name('signup');
Route::post('/signup', [SignUpController::class, 'store']);
>>>>>>> 1847ab893813f7e28bff7014d5f7733f930950c3
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/appointment-booking', [AppointmentController::class, 'index'])->name('appointment-booking');

// Route::get('/test', function () {
//     return view('pages.test');
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });

// Route::get('/services', function () {
//     return view('pages.services');
// });


