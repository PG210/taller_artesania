<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Proveedores extends Controller
{
    public function index(){//retorna la vista o interactua con el modelo de datos
        $prov=DB::table('proveedores')
        ->join('productos', 'idProd', '=','productos.referencia')
        ->orderBy('referencia', 'asc')

        ->get();
        return view('proveedores.proveedores',['prov'=>$prov]);
    }
}
