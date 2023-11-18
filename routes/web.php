<?php

use App\Http\Controllers\BmiCalculateController;
use App\Http\Controllers\HomeController;
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


// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');

// BMI Calculate Route
Route::post('/bmi',[BmiCalculateController::class,'bmi'])->name('calculateBMI');
