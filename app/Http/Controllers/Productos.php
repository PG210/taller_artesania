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
        ->where('categoria', '=', 1)
        ->get();
        return view('productos.productos',['prod'=>$prod]);
    }
    public function mochila(){//retorna la vista o interactua con el modelo de datos
        $mochilas=DB::table('productos')
        ->join('categorias', 'categoria', '=','categorias.id')//precio es la tabla, precio_id es atributo de tabla habitaciones
        ->orderBy('referencia', 'asc')
        ->where('categoria', '=', 4)
        ->get();
        return view('productos.mochilas',['mochilas'=>$mochilas]);
    }
    public function tejidos(){//retorna la vista o interactua con el modelo de datos
        $tejidos=DB::table('productos')
        ->join('categorias', 'categoria', '=','categorias.id')//precio es la tabla, precio_id es atributo de tabla habitaciones
        ->orderBy('referencia', 'asc')
        ->where('categoria', '=', 3)
        ->get();
        return view('productos.tejidos',['tejidos'=>$tejidos]);
    }
    public function visuteria(){//retorna la vista o interactua con el modelo de datos
        $vis=DB::table('productos')
        ->join('categorias', 'categoria', '=','categorias.id')//precio es la tabla, precio_id es atributo de tabla habitaciones
        ->orderBy('referencia', 'asc')
        ->where('categoria', '=', 5)
        ->get();
        return view('productos.visuteria',['vis'=>$vis]);
    }
    public function ruanas(){//retorna la vista o interactua con el modelo de datos
        $ruana=DB::table('productos')
        ->join('categorias', 'categoria', '=','categorias.id')//precio es la tabla, precio_id es atributo de tabla habitaciones
        ->orderBy('referencia', 'asc')
        ->where('categoria', '=', 2)
        ->get();
        return view('productos.ruanas',['ruana'=>$ruana]);
    }
}
