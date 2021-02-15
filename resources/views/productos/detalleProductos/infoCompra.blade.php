@extends('layouts.app')
@section('content')


<h1 class="text-center alert alert-warning alert-dismissible fade show"> DATOS DE LA FACTURA </h1>
<div class="row g-3">
 <div class="col-md-4">
 <img src='{{ url("/imgProd/$p->fotoProducto") }}' widht="100px" height="50px" alt="...">
  </div>
  <div class="col-md-4">
 <!--carrusel-->
 <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src='{{ url("/imgProd/m1.jpg") }}' class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src='{{ url("/imgProd/r6.jpg") }}' class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src='{{ url("/imgProd/v1.jpg") }}' class="d-block w-100" alt="...">
    </div>
  </div>
</div>
 <!--end--carrucel-->
  </div>
  <div class="col-md-4">
 <img src='{{ url("/imgProd/$p->fotoProducto") }}' widht="100px" height="50px" alt="...">
  </div>
  </div>

<!---formulario unformativo-->
<form class="row g-3 needs-validation" action ="{{route('compraRealizada')}}" method="POST" novalidate>
@csrf
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre del Producto</label>
    <input type="text" class="form-control" id="nomProd" name="nomProd"  value="{{$p->nombreProducto}}" readonly="readonly" required >
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Referencia</label>
    <input type="text" class="form-control" id="ref" name="ref" value="{{$p->referencia}}" readonly="readonly" required>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Precio</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">$</span>
      <input type="text" class="form-control" id="pre" name="pre" value="{{$p->precioProducto}}" readonly="readonly" aria-describedby="inputGroupPrepend" required>
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">Direccion</label>
    <input type="text" class="form-control" id="dir" name="dir" required><!--este falat agregar a la data base-->
  </div>
  <div class="col-md-4">
    <label for="validationCustom04" class="form-label">Cantidad</label>
    <select class="form-select" id="can" name="can" required>
      <option selected disabled value=""> Elija la cantidad...
      </option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="validationCustom05" class="form-label">Cliente</label>
    <input type="text" class="form-control" value="{{$var->name}}"  readonly="readonly"  required>
  </div>
  <div class="col-md-4">
    <label for="validationCustom05" class="form-label">Correo</label>
    <input type="text" class="form-control" value="{{$var->email}}" id="validationCustom05"  readonly="readonly"  required>
  </div>
  <div class="col-md-4">
    <label for="validationCustom04" class="form-label">Forma de pago</label>
    <select class="form-select" id="pago" name="pago" required>
      <option selected disabled value=""> Elija una opcion...
    @foreach($pago as $c)
     <option value="{{$c->id}}">{{$c->detalle}}</option>
     @endforeach
    </select>
  </div>
  <div class="col-md-4">
    <input type="hidden" class="form-control" value="{{$var->id}}" id="idCli"  name="idCli"  required>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" onclick="hizoClick()">Aceptar</button>
    <a href="{{route('mochila') }}" class="btn btn-secondary">cancelar</a>
  </div>
</form>
<!--end --form-->
<script>
function hizoClick() {
  var direc = document.getElementById("dir").value;
  var pag = document.getElementById("pago").value;
  var cant = document.getElementById("can").value;
  if (direc == "" || pag == "" || cant == "") {
      alert("Debes compeltar ambos campos"); 
  } else {
  alert("Enviado");
  }
}
</script>
@stop