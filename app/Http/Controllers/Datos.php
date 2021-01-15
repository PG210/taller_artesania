<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Datos extends Controller
{
    public function index(){//retorna la vista o interactua con el modelo de datos
        return view('arte.mision');//
    }
    public function principal(){//retorna la vista o interactua con el modelo de datos
        return view('principal');//vista principal
    }
    public function vision(){//retorna la vista o interactua con el modelo de datos
        return view('arte.vision');//
    }
    public function ubicacion(){//retorna la vista o interactua con el modelo de datos
        return view('arte.ubicacion');//
    }
    public function historia(){//retorna la vista o interactua con el modelo de datos
        return view('arte.historia');//
    }

}
