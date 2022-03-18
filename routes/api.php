<?php

use App\Http\Controllers\Api\CajeroController;
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

Route::controller(CajeroController::class)->group(function () {
    Route::get('/cajeros','index');
    Route::post('/cajero','store');
    Route::get('/cajero/{id}','show');
    Route::put('/cajero/{id}','update');
    Route::delete('/cajero/{id}','destroy');
});