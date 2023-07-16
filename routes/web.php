<?php

use App\Http\Controllers\SensorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SensorController::class, 'index']);
Route::get('/count', [SensorController::class, 'count']);

Route::get('/save/{cahaya}', [SensorController::class, 'save']);

Route::get('/reset', [SensorController::class, 'reset']);
