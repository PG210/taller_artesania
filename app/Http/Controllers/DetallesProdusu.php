<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Usuario;
use App\Models\Factura;

class DetallesProdusu extends Controller
{
    public function detalle($referencia){
        $id=$referencia;
        $pro=Producto::findOrFail($id);//toca colocar algun join
        return view('productos.detalleProductos.detMochilas',compact('pro'));
      }

   public function datos(Request $request, $referencia){
    //$cli =  $request->session()->get('key');
    $cli= auth()->user()->id;//usuario logeado
    $var = Usuario::findOrFail($cli);//buscar los datos del usuario login y mandar en un array
    $p = Producto::findOrFail($referencia);//toca colocar algun join
    return view('productos.detalleProductos.infoCompra',compact('var', 'p'));
   }

   public function factura(Request $res)
   {
      $r = $res->input('can');//obtiene los datos cantidad y precio
      $q = $res->input('pre');
      $resul = $r*$q;
       $category = new Factura();//inyeccion de dependencias, crea un objeto
       //$category ->fecha->$date->format();
       $category -> idprod = $res->input('ref'); //category va a tener los atributos de la tabla 
       $category ->cedula =  $res->input('idCli'); 
       $category ->cantidad =  $res->input('can'); 
      // $category -> precio =  $res->input('pre'); //esta mal 
       $category ->pago =  $res->input('pago'); 
       $category ->iva = $resul*0.19;//calcula el iva
       $category ->subtotal = $resul-$resul*0.19;
       $category ->total = $resul;//aqui hace una multiplicacion Nota costo mucho
       
       $category ->save(); //guarda el registro
       return redirect()->route('mochila');//retornar a vista o crear un evento con java
   }

   
}
