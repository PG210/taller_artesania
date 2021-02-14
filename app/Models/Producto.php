<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = "referencia";//tiene que hacer referencia a la llave primaria 

    public function product(){
        return $this->hasMany(Producto::class, 'referencia');
    }
    

}
