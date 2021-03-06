<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productos;
use App\Http\Controllers\Datos;
use App\Http\Controllers\Comentarios;
use App\Http\Controllers\Factura;
use App\Http\Controllers\Proveedores;
use App\Http\Controllers\Categorias;
use App\Http\Controllers\Productos\ManejoProd;
use App\Http\Controllers\DetallesProdusu;
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

Route::get('/', [Datos::class, 'principal'])->name("prin");
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
Route::get('/productos/mochilas', [Productos::class, 'mochila'])->name('mochila');
//tejidos
Route::get('/productos/tejidos', [Productos::class, 'tejidos'])->name('tejidos');
//visuteria
Route::get('/productos/visuteria', [Productos::class, 'visuteria']);
//ruanas
Route::get('/productos/ruanas', [Productos::class, 'ruanas']);

//comentarios
Route::get('/comentarios', [Comentarios::class, 'index'])->name('todos');

//factura
Route::get('/factura', [Factura::class, 'index'])->name('fac');

//proveedores
Route::get('/proveedores', [Proveedores::class, 'index'])->name('vista_prov')->middleware(['admin']);
//categoria
Route::post('/categorias/registro', [Categorias::class, 'registrar'])->middleware(['admin']);
//categoria visualizar
Route::get('/categorias/visualizar', [Comentarios::class, 'visu'])->name('visualizar');
//formulario productos
Route::get('/productos/formulario', [ManejoProd::class, 'index'])->name('prodForm')->middleware(['admin']);
//formulario productos
//Route::get('/productos/formulario', [ManejoProd::class, 'categoria']);
//ruta guardar productos
Route::post('/productos/registro', [ManejoProd::class, 'registro']);
//ruta guardar productos
Route::get('/facturas/visualizar', [ManejoProd::class, 'facturas'])->middleware(['admin']);
//ruta guardar productos
Route::get('/facturas/visualizar/listado', [ManejoProd::class, 'listado'])->name('lista_productos')->middleware(['admin']);
//ver detalles
Route::get('productos/detalle/{referencia}', [ManejoProd::class, 'detalle'])->name('detalles');//enviamos el parametro a la ruta
//actualizar ruta get
Route::get('productos/actualzar/{referencia}', [ManejoProd::class, 'formularioAct'])->name('form_acProd');
//actualizar ruta post
Route::post('productos/actualzar{referencia}', [ManejoProd::class, 'actualizar'])->name('actualizarProd');
//eliminar
Route::get('productos/eliminar/{referencia}', [ManejoProd::class, 'eliminar'])->name('eliminar_prod');
//visualizar comentarios
Route::get('admin/visualizar/comentarios', [Comentarios::class, 'visuadmin'])->name('comentario_admin')->middleware(['admin']);
//eliminar comentarios
Route::get('admin/visualizar/comentarios/eliminar/{id}', [Comentarios::class, 'eliminar'])->name('eliminar_comen');
//ver detalles mochilas usuarios
Route::get('productos/detalle/usuario/{referencia}', [DetallesProdusu::class, 'detalle'])->name('detalle_prod_usu');//enviamos el parametro a la ruta
//ver detalles mochilas usuarios
Route::get('productos/comprar/{referencia}', [DetallesProdusu::class, 'datos'])->name('compras');//enviamos el parametro a la ruta
//
Route::post('productos/detalle/comprar', [DetallesProdusu::class, 'factura'])->name('compraRealizada');
//
//pago
Route::get('productos/detalle/comprar/pago', [DetallesProdusu::class, 'pago'])->name('forma_pago');
//pdf
Route::get('descarga', [DetallesProdusu::class, 'descargarPDF'])->name('pdf');
//buscar factura
Route::post('factura/buscar', [ManejoProd::class, 'buscarFac'])->name('busqueda');
//buscar producto
Route::post('producto/buscar/nombre', [Productos::class, 'buscarProd'])->name('busProd');
//
//crear comentario
Route::get('producto/comentario/{referencia}', [Comentarios::class, 'comen'])->name('crearComentario');
//crear comentario
Route::post('producto/comentario', [Comentarios::class, 'guardar'])->name('guarComen');
//
//buscar producto
Route::get('producto/buscar/nombre', [Productos::class, 'prueba'])->name('busProducto');
//
//Formulario Actualizar proveedor
Route::get('admin/actualizar/formulario/proveedor/{idprov}', [Proveedores::class, 'formulario'])->name('form_prov')->middleware(['admin']);//admin
// Actualizar proveedor
//
Route::post('admin/actualzar/{idprov}', [ManejoProd::class, 'actuProv'])->name('ProvActu')->middleware(['admin']); //admin
//registrar proveedor
Route::post('admin/registrar/proveedor', [ManejoProd::class, 'reg'])->name('provform')->middleware(['admin']);
//ruta al boton vista proveedor
Route::get('admin/registrar/formulario/proveedor', [Proveedores::class, 'vista'])->name('llamar_vista')->middleware(['admin']);

//pdf
Route::get('admin/descarga/reporte', [DetallesProdusu::class, 'desPDF'])->name('pdf_admin');
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

