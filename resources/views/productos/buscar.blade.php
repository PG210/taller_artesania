@extends('layouts.app')
@section('content')

<form class="form-inline" action ="{{route('busProd')}}" method="POST" >
    @csrf
    <input name="bProd" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre producto" aria-label="Search">
    <br>
   <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
<br><br>
<div class="container">
 <div class="row">
    @foreach($produc as $p)
      <div class="col-md-4 alert-success"><br>
        <div class="card" style="width: 15rem;">
                        <img src='{{ url("/imgProd/$p->fotoProducto") }}' class="card-img-top" alt="...">
                        <div class="card-body bg-primary text-white">
                            <p class="card-text">Categoria: {{$p->nombreCategoria}}</p> <!--Tipo pertenece al atributo de la tabla Precio-->
                            <p class="card-text">Descripcion: {{$p->descripcion}}</p>
                        </div>
                        <a href="{{route('detalle_prod_usu', $p->referencia)}}" class="btn btn-secondary">Detalles</a>
                        
        </div>
        </div>
        @endforeach
        <br>
        </div>
       
       <br>
</div>

  @stop