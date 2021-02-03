@extends('layouts.app')
@section('content')
<h4 class="text-center"> comentarios </h4>
<div class="container">
 <div class="row">
    @foreach($comen as $p)
      <div class="col-md-4 alert-success"><br>
        <div class="card" style="width: 15rem;">
                        
                            <div class="card-body bg-primary text-white">
                            <p class="card-text">ID: {{$p->id}}</p>
                            <h5 class="card-title">Cliente: {{$p->name}}</h5>
                            <p class="card-text">Nombre Producto: {{$p->nombreProducto}}</p><!--Precio pertenece al atributo de la tabla Precio-->
                            <p class="card-text">Comentario: {{$p->comentario}}</p> <!--Tipo pertenece al atributo de la tabla Precio-->
                            <p class="card-text">Fecha: {{$p->fecha}}</p>

                        </div>
                        <a href="{{route('eliminar_comen', $p->id)}}" class="btn btn-secondary">Eliminar</a>
        </div>
        </div>
        @endforeach
        <br>
        </div>
       <br>
</div>

@stop