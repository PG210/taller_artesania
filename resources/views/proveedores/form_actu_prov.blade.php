@extends('layouts.app')
@section('content')
<div class="container">
    <br> 
    <div class="alert alert-primary border" role="alert">
     <h2 class="text-center"> Actualizar proveedores</h2>
    </div>
    <br>
    <form class="row g-3" action ="{{route('ProvActu', $pro->idprov)}}" method="POST">
    @csrf
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">NIT</label>
    <input type="number" class="form-control" id="nit" name="nit"  value="{{$pro->idprov}}" readonly="readonly" required >
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nom" name="nom"  value="{{$pro->nomProv}}" required><!--el value sirve para mostrar el dato-->
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Direccion</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control" id="dir" name="dir"  value="{{$pro->dirProv}}"  aria-describedby="inputGroupPrepend" required>
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom03" class="form-label">Telefono</label>
    <input type="number" class="form-control" id="tel" name="tel"  value="{{$pro->telProv}}"  required>
  </div>
  <div class="col-md-3">
  <label for="validationCustom03" class="form-label">Producto</label><br>
    <select id="idproducto" name="idproducto" required>
    @foreach($ca as $c)
    <option value="{{$c->referencia}}">{{$c->nombreProducto}}</option>
    @endforeach
    </select>
</div>
  
  <!--carga-file-->
  <div class="col-md-3">
    <label for="validationCustom03" class="form-label">Precio de Compra</label>
    <input type="number" class="form-control" id="precompra" name="precompra"  value="{{$pro->preCompra}}"  required>
  </div>
  <div class="col-12">
  <button type="submit" class="btn btn-success"> Actualizar </button>
  </div>
</form>
@stop