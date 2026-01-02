<?php

use App\Http\Controllers\LocationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/countries/{country}/departments', [LocationController::class, 'departments']);
Route::get('/departments/{department}/cities', [LocationController::class, 'cities']);
Route::get('/city/{city}', [LocationController::class, 'city']);

