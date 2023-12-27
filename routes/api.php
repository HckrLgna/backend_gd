<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ControlCalidadController;
use App\Http\Controllers\UserController;

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

Route::apiResource('user', UserController::class);
Route::apiResource('documento', ContratoController::class);

Route::apiResource('producto', ProductoController::class);
Route::apiResource('control-calidad', ControlCalidadController::class);

