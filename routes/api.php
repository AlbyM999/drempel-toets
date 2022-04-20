<?php

use App\Http\Controllers\roomsController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\reservationsController;
use app\Http\Controllers\logsController;
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

Route::controller(roomsController::class)->group(function(){
    Route::get('room','read');
    Route::get('room/{id}','show');
    Route::delete('room/{id}','delete');
    Route::put('room/{id}','update');
    Route::post('room','create');
});

Route::controller(usersController::class)->group(function(){
    Route::get('user','index');
    Route::get('user/{id}','show');
    Route::delete('user/{id}','delete');
    Route::put('user/{id}','update');
    Route::post('user','store');
    Route::get('user/{email}/{pwd}','login');
});

Route::controller(reservationsController::class)->group(function(){
    Route::get('reservation','read');
    Route::get('reservation/{id}','show');
    Route::get('reservation/{id}','showOnRoom');
    Route::delete('reservation/{id}','delete');
    Route::put('reservation/{id}','update');
    Route::post('reservation','create');
});
