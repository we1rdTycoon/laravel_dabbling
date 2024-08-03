<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\NumeralsTrainingController;

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

Route::get('/auth', [AuthController::class, 'show'])->name('login');
Route::post('/auth', [AuthController::class, 'auth']);

Route::get('/', [MainPageController::class, 'index'])->middleware('auth')->name('main');

Route::get('/numerals_training', [NumeralsTrainingController::class, 'index'])->middleware('auth');
Route::post('/numerals_start_training', [NumeralsTrainingController::class, 'start_training'])->middleware('auth');

