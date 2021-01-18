<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Categoria;

class Categorias extends Controller
{
    public function registrar(Request $request)
    {
        // Registro de una Categoria en la base de datos a traves del Modelo
        $category = new Categoria();
        $category->nombreCategoria = $request->input('nombreCat');
        $category->descripcion = $request->input('descripcionCat');
        $category->save();
        return redirect()->route('visualizar');
    } 
    
}
