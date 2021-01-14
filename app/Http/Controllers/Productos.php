<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Productos extends Controller
{
    public function index(){//retorna la vista o interactua con el modelo de datos
        $prod=DB::table('productos')
        ->join('categorias', 'categoria', '=','categorias.id')//precio es la tabla, precio_id es atributo de tabla habitaciones
        ->orderBy('referencia', 'asc')
        ->get();
        return view('productos.productos',['prod'=>$prod]);
    }
}
