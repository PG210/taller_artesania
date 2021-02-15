<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Factura extends Controller
{

    public function index(){//retorna la vista o interactua con el modelo de datos
        $cli= auth()->user()->id;
        $fac=DB::table('facturas')
        ->join('productos', 'idprod', '=','productos.referencia')
        ->join('users', 'cedula', '=','users.id')
        ->join('forma_pago', 'pago', '=','forma_pago.id')
        ->where('cedula', '=', $cli)
        ->orderBy('referencia', 'asc')
        ->get();
        return view('facturacion.factura',['fac'=>$fac]);
    }
}
