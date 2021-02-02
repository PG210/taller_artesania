@extends('layouts.app')
@section('content')

<div class="container">
    <br> 
    <div class="alert alert-primary border" role="alert">
     <h2 class="text-center"> Registro Categorias de Productos</h2>
    </div>
    <br>
    <form class="row g-3" action ="{{url('productos/registro')}}" method="POST">
    @csrf
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Referencia</label>
    <input type="number" class="form-control" id="idref" name="idref"  min="1000" max="8000" required>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="idnom" name="idnom"  required>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Cantidad</label>
    <div class="input-group has-validation">
      <input type="number" class="form-control" id="idcan" name="idcan" aria-describedby="inputGroupPrepend" required min="0" max="500">
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom03" class="form-label">Precio</label>
    <input type="number" class="form-control" id="idpre" name="idpre" min="1000" max="500000" required>
  </div>
  <div class="col-md-3">
  <label for="validationCustom03" class="form-label">Categoria</label><br>
    <select id="lista" name="lista" required>
    @foreach($cat as $c)
    <option value="{{$c->id}}">{{$c->nombreCategoria}}</option>
    @endforeach
    </select>
</div>
  
  <!--carga-file-->
  <div class="col-md-3">
  <label for="formFile" class="form-label">Seleccionar Imagen</label>
  <input class="form-control" type="file" id="formFile" name="formFile">
  </div>
  
  <div class="col-12">
  <button type="submit" class="btn btn-success"> Registrar </button>
  <a href="{{route('lista_productos')}}" class="btn btn-primary">Productos</a>
  </div>
</form>
@stop