@extends('layouts.app')
@section('content')
<h1 class="text-center"> Productos </h1>
<div class="container">
 <div class="row">
      <div class="col-md-4 alert-success"><br>
        <div class="card" style="width: 15rem;">
                        <img src='{{ url("/imgProd/$pro->fotoProducto") }}' class="card-img-top" alt="...">
                        <div class="card-body bg-primary text-white">
                        <h5 class="card-title">Referencia: {{$pro->referencia}}</h5>
                            <p class="card-text">Nombre: {{$pro->nombreProducto}} </p>
                            <p class="card-text">Cantidad: {{$pro->cantidadProducto}} </p>
                            <p class="card-text">Precio: {{$pro->precioProducto}}</p><!--Precio pertenece al atributo de la tabla Precio-->
                        </div>
                        <a href="{{route('compras', $pro->referencia)}}" class="btn btn-secondary">Comprar</a>
        
        </div>
        </div>
        <br>
        </div>
       <br>
</div>

@stop