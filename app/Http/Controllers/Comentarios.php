<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Comentarios extends Controller
{
 

    public function index(){//retorna la vista o interactua con el modelo de datos
        $comen=DB::table('comentarios')
        ->join('productos', 'id_Prod', '=','productos.referencia')
        ->join('users', 'cedCli', '=','users.id')
       ->orderBy('referencia', 'asc')
        ->get();
        return view('productos.comentarios',['comen'=>$comen]);
    }
    public function visu(){//retorna la vista o interactua con el modelo de datos
        $cat=DB::table('categorias')
        ->get();
        return view('admin.visualizarCat',['cat'=>$cat]);
    }
}
