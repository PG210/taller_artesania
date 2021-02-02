@extends('layouts.app')
@section('content')
<h1 class="text-center"> Productos </h1>
<div class="container">
 <div class="row">
    @foreach($prod as $p)
      <div class="col-md-4 alert-success"><br>
        <div class="card" style="width: 15rem;">
                        <img src='{{ url("/imgProd/$p->fotoProducto") }}' class="card-img-top" alt="...">
                        <div class="card-body bg-primary text-white">
                            <p class="card-text">Categoria: {{$p->nombreCategoria}}</p> <!--Tipo pertenece al atributo de la tabla Precio-->
                            <p class="card-text">Descripcion: {{$p->descripcion}}</p>
                        </div>
                        <a href="{{route('detalles', $p->referencia)}}" class="btn btn-secondary">Detalles</a>
        </div>
        </div>
        @endforeach
        <br>
        </div>
       <br>
</div>

@stop