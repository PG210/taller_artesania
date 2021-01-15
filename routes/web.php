<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productos;
use App\Http\Controllers\Datos;
use App\Http\Controllers\Comentarios;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Datos::class, 'principal']);
//ruta mision vision
Route::get('arte/vision', [Datos::class, 'vision']);
//histortia
Route::get('arte/historia', [Datos::class, 'historia']);

//mision
Route::get('arte/mision', [Datos::class, 'index']);

//ubicacion
Route::get('arte/ubicacion', [Datos::class, 'ubicacion']);
//productos
Route::get('/productos', [Productos::class, 'index']);
//comentarios
Route::get('/comentarios', [Comentarios::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

