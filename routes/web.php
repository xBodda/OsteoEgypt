<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\UserController;
use App\Models\AppointmentAvailableTime;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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
Route::get('/signup/second_step', [ SignUpController::class, 'second_step'])->name('signup_second_step');
Route::post('/signup/second_step', [SignUpController::class, 'first_step']);
Route::post('/signup/second_step/finish', [SignUpController::class, 'store'])->name('signup_finish');


Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get( '/profile', [UserController::class, 'profile'])->name('profile');
Route::get('/profile/{id}', [UserController::class, 'profile'])->name('profile-id');
Route::get('profile/{id}/about', [UserController::class, 'profileAbout'])->name('profile-about');
Route::get('profile/{id}/appointments', [UserController::class, 'profileAppointments'])->name('profile-appointments');
Route::get('profile/{id}/payment', [UserController::class, 'profilePayment'])->name('profile-payment');
Route::get('profile/{id}/doctors', [UserController::class, 'profileDoctors'])->name('profile-doctors');
Route::get('profile/{id}/badges', [UserController::class, 'profileBadges'])->name('profile-badges');
Route::get( 'edit-profile', [UserController::class, 'editProfile'])->name('edit-profile');
Route::get( 'edit-profile-security', [UserController::class, 'editprofilesecurity'])->name('edit-profile-security');
Route::get( 'edit-profile-personalize', [UserController::class, 'editprofilepersonalize'])->name('edit-profile-personalize');
Route::get( 'gallery', [UserController::class, 'gallery'])->name('gallery');
Route::get( 'videos-gallery', [UserController::class, 'videosGallery'])->name('videos-gallery');


Route::post( '/save-edit-profile', 'App\Http\Controllers\UserController@saveEditProfile')->name('save-edit-profile');

Route::get('/appointment-booking', [AppointmentController::class, 'index'])->middleware('verified')->name('appointment-booking');
Route::post('/appointment-booking', [AppointmentController::class, 'submit'])->middleware('verified');

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

Route::get('control/time-slots', [AppointmentController::class, 'ViewAvailableTimeSlots'])->name('control-time-slots');

Route::get('/control/add-page', 'App\Http\Controllers\PagesController@addNewPage')->name('addNewPage');
Route::post('/control/addPage', 'App\Http\Controllers\PagesController@addPage')->name('addPage');
Route::get('/control/book-on-spot', 'App\Http\Controllers\PagesController@bookOnSpot')->name('book-on-spot');

Route::get('/control/social-links', 'App\Http\Controllers\PagesController@socialLinks')->name('social-links');
Route::post('/control/saveLinks', 'App\Http\Controllers\PagesController@saveLinks')->name('save-links');

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


Route::get('/email/verify', function () {
    return view('pages.auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect()->route('home');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {

    $request->user()->sendEmailVerificationNotification();

    return back()->with('verification_message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');