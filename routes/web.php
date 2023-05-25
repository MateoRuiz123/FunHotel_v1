<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // Import Auth class
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservaController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth']); // Add middleware to protect route
Route::resource('home',ReservaController::class);