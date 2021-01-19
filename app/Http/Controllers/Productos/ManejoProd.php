<?php

namespace App\Http\Controllers\Productos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;

class ManejoProd extends Controller
{
    public function index(){//retorna la vista o interactua con el modelo de datos
        return view('admin.productos.formularioProd');
    }
    
    public function facturas(){//retorna la vista o interactua con el modelo de datos
       
            $fac=DB::table('facturas')
            ->join('productos', 'idprod', '=','productos.referencia')
            ->join('users', 'cedula', '=','users.id')
            ->join('forma_pago', 'pago', '=','forma_pago.id')
            ->orderBy('referencia', 'asc')
            ->get();
            return view('admin.facturas.factura',['fac'=>$fac]);
      
    }

    public function registro(Request $request)
    {
        // Registro de un producto en la base de datos a traves del Modelo
        $category = new Producto();
        $category->referencia = $request->input('idref');
        $category->nombreProducto = $request->input('idnom');
        $category->cantidadProducto = $request->input('idcan');
        $category->precioProducto = $request->input('idpre');
        $category->fotoProducto = $request->input('formFile');//añadir name a foto
        $category->categoria = $request->input('lista');
        $category->save();
        return redirect()->route('prodForm');
    } 
}
