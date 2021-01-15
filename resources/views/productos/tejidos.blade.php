@extends('layouts.app')
@section('content')
<h1 class="text-center"> TEJIDOS </h1>
<div class="container">
 <div class="row">
    @foreach($tejidos as $p)
      <div class="col-md-4 alert-success"><br>
        <div class="card" style="width: 15rem;">
                        <img src='{{ url("/imgProd/$p->fotoProducto") }}' class="card-img-top" alt="...">
                        <div class="card-body bg-primary text-white">
                            <h5 class="card-title">Referencia: {{$p->referencia}}</h5>
                            <p class="card-text">Nombre: {{$p->nombreProducto}} </p>
                            <p class="card-text">Cantidad: {{$p->cantidadProducto}} </p>
                            <p class="card-text">Precio: {{$p->precioProducto}}</p><!--Precio pertenece al atributo de la tabla Precio-->
                            <p class="card-text">Categoria: {{$p->nombreCategoria}}</p> <!--Tipo pertenece al atributo de la tabla Precio-->
                            <p class="card-text">Descripcion: {{$p->descripcion}}</p>
                        </div>
        </div>
        </div>
        @endforeach
        <br>
        </div>
       <br>
</div>

@stop