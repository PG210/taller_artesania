<?php

namespace App\Http\Controllers\Productos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedor;


class ManejoProd extends Controller
{
    //public function index(){//retorna la vista o interactua con el modelo de datos
       // return view('admin.productos.formularioProd');
    //}
    
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
    public function index(){//retorna la vista o interactua con el modelo de datos
        $cat=DB::table('categorias')
        ->get();
        return view('admin.productos.formularioProd', ['cat'=>$cat]);
    }
    public function listado(){//retorna la vista o interactua con el modelo de datos
        $prod=DB::table('productos')
        ->join('categorias', 'categoria', '=','categorias.id')//precio es la tabla, precio_id es atributo de tabla habitaciones
        ->orderBy('referencia', 'asc')
        ->get();
        return view('admin.productos.listadoProd', ['prod'=>$prod]);
    }

    public function detalle($referencia){
        $id=$referencia;
        $pro=Producto::findOrFail($id);//toca colocar algun join
        return view('admin.productos.detalleProd',compact('pro'));
   }
   
    public function formularioAct($referencia){
        $pr= Producto::findOrfail($referencia);//encontrar el producto por el id
        $ca = Categoria::all();
        return view('admin.productos.form_actualizar', compact('pr','ca'));//enviar varios arreglos
    }

    public function actualizar(Request $request, $referencia){
        $producto = Producto::findOrfail($referencia);//buscar el id del producto para actualizar
         $producto->referencia = $request->input('idref');
         $producto->nombreProducto = $request->input('idnom');
         $producto->cantidadProducto = $request->input('idcan');
         $producto->precioProducto = $request->input('idpre');
         $producto->fotoProducto = $request->input('formFile');//añadir name a foto
         $producto->categoria = $request->input('lista');
         $producto->save();
         return redirect()->route('lista_productos');
 }

 public function eliminar($referencia){
    $p =Producto::findOrfail($referencia);
    $p ->delete();
    return redirect()->route('lista_productos');
   }
   
   public function buscarFac(Request $request){
    $bus = $request->input('buscarpor');
    $cli= auth()->user()->id;
    $fac=DB::table('facturas')
    ->join('productos', 'idprod', '=','productos.referencia')
    ->join('users', 'cedula', '=','users.id')
    ->join('forma_pago', 'pago', '=','forma_pago.id')
    ->orderBy('referencia', 'asc')
    ->where('numfac', '=', $bus)
    ->where('cedula', '=', $cli)
    ->get();
    return view('facturacion.factura',['fac'=>$fac]);
   }
   
   public function actuProv(Request $request, $idprov){
    $prov = Proveedor::findOrfail($idprov);//buscar el id del producto para actualizar
     $prov-> idprov= $request->input('nit');
     $prov->nomProv = $request->input('nom');
     $prov->dirProv = $request->input('dir');
     $prov-> telProv= $request->input('tel');
     $prov->idProd = $request->input('idproducto');//añadir name a foto
     $prov->preCompra = $request->input('precompra');
     $prov->save();
     return redirect()->route('vista_prov');
}

public function reg(Request $request)
{
    // Registro de un producto en la base de datos a traves del Modelo
    $category = new Proveedor();
    $category->idprov= $request->input('nit');
    $category->nomProv = $request->input('nom');
    $category->dirProv = $request->input('dir');
    $category->telProv= $request->input('tel');
    $category->idProd = $request->input('idproducto');//añadir name a foto
    $category->preCompra = $request->input('precompra');
    $category->save();
    return redirect()->route('vista_prov');
}


        
}
