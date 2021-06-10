<?php

use App\Models\Appointment;
use App\Models\AppointmentAvailableTime;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('user/{id}', function ($id) {
    return User::find($id);
});

Route::get('users', function () {
    return User::get();
});

Route::get('users/last_date', function () {
    return User::select('created_at')->limit(1)->orderBy('created_at','DESC')->get();
});
Route::get('user/{id}/appointments', function ($id) {
    return User::with('appointment.appointment_available_time')->find($id);
});

Route::get('appointments', function () {
    return Appointment::with('appointment_available_time')->with('user')->get();
});

Route::get('appointment/{id}', function ($id) {
    return Appointment::with('appointment_available_time')->with('user')->find($id);
});

Route::get('appointment_times', function () {
    return AppointmentAvailableTime::get();
});

Route::get('appointment_times_available', function () {
    $ids = Appointment::select('appointment_available_time_id');
    return AppointmentAvailableTime::whereNotIn('id', $ids)->get();
});

Route::get('appointment_time/{id}', function ($id) {
    return AppointmentAvailableTime::with('appointment')->find($id);
});

Route::get('users/{type}s', function ($type) {
    $user_all = UserType::where('name', '=', $type)->with('user')->first();
    $users = $user_all->user;
    $user_all = collect($users)->forget('user')->all(); // this is what you must do. Be careful, this is now an array.
    return $user_all;
});
