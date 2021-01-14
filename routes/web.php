<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productos;

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

Route::get('/', function () {
    return view('welcome');
});
//ruta mision vision
Route::get('arte/vision', function () {
    return view('arte.vision');
});
//histortia
Route::get('arte/historia', function () {
    return view('arte.historia');
});
Route::get('arte/mision', function () {
    return view('arte.mision');
});

//ubicacion
Route::get('arte/ubicacion', function () {
    return view('arte.ubicacion');
});
//productos
Route::get('/productos', [Productos::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

