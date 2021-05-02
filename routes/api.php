<?php

use App\Models\Appointment;
use App\Models\User;
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
    return User::with('appointment')->find($id);
});

Route::get('appointments', function () {
    return Appointment::get();
});

Route::get('appointment/{id}', function ($id) {
    return Appointment::with('user')->find($id);
});
