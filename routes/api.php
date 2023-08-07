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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/student', 'App\Http\Controllers\Apicontroller@create');
Route::get('/student', 'App\Http\Controllers\Apicontroller@show');
Route::get('/student/{id}', 'App\Http\Controllers\Apicontroller@showByid');
Route::post('/studentupdate/{id}','App\Http\Controllers\Apicontroller@updateByid');
