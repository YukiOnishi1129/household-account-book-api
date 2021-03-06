<?php

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

// middleware('auth:sanctum')
// 直下のルーティングが全て認証済み出ないと実施されない
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/auth', 'UserController@auth');
    Route::get('/calendar/{date}', 'CalendarController@show');
});
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/login', 'UserController@login');
Route::post('/register', 'UserController@register');
Route::delete('/logout', 'UserController@logout');
