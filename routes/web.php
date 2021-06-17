<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\UserController;
use App\Models\AppointmentAvailableTime;
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

Route::get( '/profile', [UserController::class, 'profile'])->name('profile');
Route::get( 'profile/about', [UserController::class, 'profileAbout'])->name('profile-about');
Route::get( 'profile/appointments', [UserController::class, 'profileAppointments'])->name('profile-appointments');
Route::get( 'profile/payment', [UserController::class, 'profilePayment'])->name('profile-payment');

Route::get('/appointment-booking', [AppointmentController::class, 'index'])->name('appointment-booking');
Route::post('/appointment-booking', [AppointmentController::class, 'submit']);

Route::get( '/control/add-page', 'App\Http\Controllers\PagesController@addNewPage')->name('addNewPage');
Route::post( '/control/addPage', 'App\Http\Controllers\PagesController@addPage')->name('addPage');



// Control Routes
Route::get('control', function () {
    return view('pages.control.controltest');
})->name('control');

Route::get('control/users', [UserController::class, 'users_table'])->name('control-users');


Route::get('control/settings', function () {
    return view('pages.control.settings');
})->name('control-settings');

Route::get('control/appointments', [AppointmentController::class, 'get_schedueled_appointments'])->name('control-appointments');

Route::get( 'control/add-time', [AppointmentController::class, 'addTimeSlot'])->name('control-add-time');
Route::post('control/add-time', [AppointmentController::class, 'addTimeSlotAction']);


Route::get('control/website-settings', function () {
    return view('pages.control.website-settings');
})->name('website-settings');


Route::get('control/add-user', function () {
    return view('pages.control.add-user');
})->name('add-user');
Route::post('control/add-user', [UserController::class, 'add_user']);

// Route::get('control/add-page', function () {
//     return view('pages.control.add-page');
// })->name('control-add-page]');


// Route::get('/about', function () {
//     return view('pages.about');
// });

// Route::get('/services', function () {
//     return view('pages.services');
// });


// Excel routes

Route::get('control/export-users', [UserController::class, 'export'])->name('export-users');
Route::get('control/import-users', [UserController::class, 'importView'])->name('import-users');

Route::post('control/import-users', [UserController::class, 'import']);

Route::get('control/add-times/files', [AppointmentController::class, 'importExportView'])->name('import-times');
Route::post('control/add-times/files', [AppointmentController::class, 'import']);
Route::get('control/add-times/export', [AppointmentController::class, 'export'])->name('export-times');
