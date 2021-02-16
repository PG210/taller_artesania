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
use App\Models\FormaPago;
use Barryvdh\DomPDF\Facade as PDF;

class DetallesProdusu extends Controller
{
    public function detalle($referencia){
        $id=$referencia;
        $pro=Producto::findOrFail($id);//toca colocar algun join

        $tot=DB::table('productos')
        ->where('referencia', '=', $id)
        ->sum('cantidadProducto');

        $res=DB::table('facturas')->where('idprod', '=', $id)
        ->select('cantidad')
        ->sum('cantidad');
        $r=$tot-$res;
        if($r<=0){
          $r=0;
          
          //return redirect()->route('busProd');
        }
        return view('productos.detalleProductos.detMochilas',compact('pro', 'r'));
      }
     

      public function pago(){
        return view('productos.detalleProductos.codigo');
      }

   public function datos(Request $request, $referencia){
    //$cli =  $request->session()->get('key');
    $cli= auth()->user()->id;//usuario logeado
    $var = Usuario::findOrFail($cli);//buscar los datos del usuario login y mandar en un array
    $p = Producto::findOrFail($referencia);//toca colocar algun join
    $pago = FormaPago::all();
    
    return view('productos.detalleProductos.infoCompra',compact('var', 'p', 'pago'));
   }

   public function factura(Request $res)
   {
      $r = $res->input('can');//obtiene los datos cantidad y precio
      $q = $res->input('pre');
      $resul = $r*$q;
      $f =$res->input('pago');
      $c =$res->input('can');
      $d =$res->input('dir');

      $category = new Factura();//inyeccion de dependencias, crea un objeto
       //$category ->fecha->$date->format();
       $category -> idprod = $res->input('ref'); //category va a tener los atributos de la tabla 
       $category ->cedula =  $res->input('idCli'); 
       $category ->cantidad =  $res->input('can');

       $category ->direccion =  $res->input('dir'); //esta mal 
       $category ->pago =  $res->input('pago'); 
       if($c=="" || $d == "" || $f == ""){
         return redirect()->route("dashboard");
       }
       $category ->iva = $resul*0.19;//calcula el iva
       $category ->subtotal = $resul-$resul*0.19;
       $category ->total = $resul;//aqui hace una multiplicacion Nota costo mucho
       
       $category ->save(); //guarda el registro
       if ($f==1){
            return redirect('https://registro.pse.com.co/PSEUserRegister/CreateRegister.htm?TipoPersona=0');
        }

        else{
            
            return redirect()->route('forma_pago'); 
        }

      // return redirect()->route('mochila');//retornar a vista o crear un evento con java
   }

   public function descargarPDF(){
    $cli= auth()->user()->id;
    $fac=DB::table('facturas')
    ->join('productos', 'idprod', '=','productos.referencia')
    ->join('users', 'cedula', '=','users.id')
    ->join('forma_pago', 'pago', '=','forma_pago.id')
    ->where('cedula', '=', $cli)
    ->get();
    $pdf = \PDF::loadView('productos.detalleProductos.descargaPDF', compact('fac'))->setOptions(['defaultFont' => 'sans-serif']); //este codigo arregla el pdf 
    return $pdf->download('descargafactura.pdf');
   }
   //pdf admin
   public function desPDF(){
    $factu=DB::table('facturas')
    ->join('productos', 'idprod', '=','productos.referencia')
    ->join('users', 'cedula', '=','users.id')
    ->join('forma_pago', 'pago', '=','forma_pago.id')
    ->get();
    $suma = Factura::sum('total');
    $pdf = \PDF::loadView('admin.facturas.reporte', compact('factu','suma'))->setOptions(['defaultFont' => 'sans-serif']); //este codigo arregla el pdf 
    return $pdf->download('reporte_admin.pdf');
   }
  
   
}
