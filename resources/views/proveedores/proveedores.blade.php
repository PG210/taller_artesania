@extends('layouts.app')
@section('content')
<h4 class="text-center"> Proveedores </h4>
<br>

<br>
<div class="container">
 <div class="row">
    @foreach($prov as $p)
      <div class="col-md-4 alert-success"><br>
        <div class="card" style="width: 15rem;">
                        
                            <div class="card-body bg-primary text-white">
                            <h5 class="card-title">Nombre Proveedor: {{$p->nomProv}}</h5>
                            <p class="card-text">Direccion Proveedor: {{$p->dirProv}}</p><!--Precio pertenece al atributo de la tabla Precio-->
                            <p class="card-text">Telefono Proveedor {{$p->telProv}}</p> <!--Tipo pertenece al atributo de la tabla Precio-->
                            <p class="card-text">Nombre Producto {{$p->nombreProducto}}</p>
                            <p class="card-text">Precio Producto {{$p->preCompra}}</p>
                            <a href="{{route('form_prov', $p->idprov)}}" class="btn btn-secondary">Actualizar</a>
                      
                        </div>
        </div>
        </div>
        @endforeach
        <br>
        </div>
       <br>

</div>
 <a href="{{route('llamar_vista')}}" class="btn btn-secondary">Registrar</a>
@stop