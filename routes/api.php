<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthApiController::class, 'login']);
    Route::post('logout', [AuthApiController::class, 'logout']);
    Route::post('refresh', [AuthApiController::class, 'refresh']);
    Route::post('me', [AuthApiController::class, 'me']);

});
 