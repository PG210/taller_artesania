@extends('layouts.app')
@section('content')
<h4 class="text-center border bg-light"> Comentarios </h4>
<!---formulario unformativo-->
<form class="row g-3 needs-validation" action ="{{route('guarComen')}}" method="POST" novalidate>
@csrf
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre Producto</label>
    <input type="text" class="form-control" id="nom" name="nom"  value="{{$pr->nombreProducto}}" readonly="readonly" required >
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Referencia</label>
    <input type="text" class="form-control" id="ref" name="ref" value="{{$pr->referencia}}" readonly="readonly" required>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Fecha</label>
    <input type="date" class="form-control" id="fec" name="fec" required>
  </div>
  <div class="col-md-4">
  <label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
  <textarea class="form-control" id="com" name="com" rows="3"></textarea>
  </div>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Aceptar</button>
    <a href="{{route('mochila') }}" class="btn btn-secondary">cancelar</a>
  </div>
</form>
<!--end --form-->
@stop