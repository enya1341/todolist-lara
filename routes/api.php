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

Route::get('/list', [TodoController::class,'get']);
Route::post('/list', [TodoController::class, 'post']);
Route::put('/list/{id}', [TodoController::class, 'put']);
Route::delete('/list/{id}', [TodoController::class, 'delete']);