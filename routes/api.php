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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/productos','App\Http\Controllers\ProductController@index');
Route::get('/productos/{id}','App\Http\Controllers\ProductController@show');
Route::get('/productos-por/{letra}','App\Http\Controllers\ProductController@searchForName');
Route::post('/productos','App\Http\Controllers\ProductController@create');
Route::put('/productos/{id}','App\Http\Controllers\ProductController@update');
Route::delete('/productos/{id}','App\Http\Controllers\ProductController@destroy');
