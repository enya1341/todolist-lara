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

Route::get('/', [TodoController::class, 'get']);
Route::post('/', [TodoController::class, 'post']);
Route::put('/', [TodoController::class, 'put']);
Route::delete('/', [TodoController::class, 'delete']);