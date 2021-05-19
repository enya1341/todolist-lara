<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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

Route::apiResource('/list', [TodoController::class]);
Route::post('/list', [TodoController::class, 'post']);
Route::put('/list', [TodoController::class, 'put']);
Route::delete('/list', [TodoController::class, 'delete']);