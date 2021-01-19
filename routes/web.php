<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productos;
use App\Http\Controllers\Datos;
use App\Http\Controllers\Comentarios;
use App\Http\Controllers\Factura;
use App\Http\Controllers\Proveedores;
use App\Http\Controllers\Categorias;
use App\Http\Controllers\Productos\ManejoProd;
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
//sombreros
Route::get('/productos', [Productos::class, 'index']);

//mochilas
Route::get('/productos/mochilas', [Productos::class, 'mochila']);
//tejidos
Route::get('/productos/tejidos', [Productos::class, 'tejidos'])->name('tejidos');
//visuteria
Route::get('/productos/visuteria', [Productos::class, 'visuteria']);
//ruanas
Route::get('/productos/ruanas', [Productos::class, 'ruanas']);

//comentarios
Route::get('/comentarios', [Comentarios::class, 'index']);

//factura
Route::get('/factura', [Factura::class, 'index']);

//proveedores
Route::get('/proveedores', [Proveedores::class, 'index'])->middleware(['admin']);
//categoria
Route::post('/categorias/registro', [Categorias::class, 'registrar'])->middleware(['admin']);
//categoria visualizar
Route::get('/categorias/visualizar', [Comentarios::class, 'visu'])->name('visualizar');
//formulario productos
Route::get('/productos/formulario', [ManejoProd::class, 'index'])->name('prodForm')->middleware(['admin']);
//ruta guardar productos
Route::post('/productos/registro', [ManejoProd::class, 'registro']);
//ruta guardar productos
Route::get('/facturas/visualizar', [ManejoProd::class, 'facturas'])->middleware(['admin']);
//
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/admin', function () {
    return view('admin.adminPrincipal');
})->middleware(['admin']);

Route::get('/dashboar', function () {
    return view('alerta.alerta');
});

