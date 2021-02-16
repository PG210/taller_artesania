<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Proveedor;
use App\Models\Producto;
use App\Models\Categoria;

class Proveedores extends Controller
{
    public function index(){//retorna la vista o interactua con el modelo de datos
        $prov=DB::table('proveedores')
        ->join('productos', 'idProd', '=','productos.referencia')
        ->orderBy('referencia', 'asc')
        ->get();
        return view('proveedores.proveedores',['prov'=>$prov]);
    }

    public function formulario($idprov){
        $pro=Proveedor::findOrFail($idprov);//toca colocar algun join
        $ca=Producto::all();
        return view('proveedores.form_actu_prov',compact('pro', 'ca'));
   }

   public function vista(){
    $ca=Producto::all();
    return view('proveedores.registrar_prov',compact('ca'));
 }

}
