<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormaPago extends Model
{
    protected $table = 'forma_pago';
    protected $primaryKey = "id";//tiene que hacer referencia a la llave primaria 

}