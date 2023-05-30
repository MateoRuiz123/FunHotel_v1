<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // Import Auth class
use App\Http\Controllers\ClienteController; // Import controller class
use App\Http\Controllers\ServicioController; // Import controller class
use App\Http\Controllers\CatalogoController; // Import controller class
use App\Http\Controllers\VentaControlador; // Import controller class
use App\Http\Controllers\CategoriaController; // Import controller class
use App\Http\Controllers\HabitacionController; // Import controller class
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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

Route::middleware(['auth'])->group(function () {
    Route::resource('/clientes', ClienteController::class);
    Route::resource('/servicios', ServicioController::class);
    Route::resource('/catalogos', CatalogoController::class);
    Route::resource('/ventas', VentaControlador::class);
    Route::resource('/categorias', CategoriaController::class);
    Route::resource('/habitaciones', HabitacionController::class);
    Route::resource('/roles', RoleController::class);
    Route::resource('/users', UserController::class);

    // create rol
    Route::get('/create-rol', [RoleController::class, 'create'])->name('roles.create');
    // show rol
    Route::get('/show-rol/{id}', [RoleController::class, 'show'])->name('roles.show');
});