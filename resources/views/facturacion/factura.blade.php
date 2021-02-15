@extends('layouts.app')
@section('content')
<h4 class="text-center">FACTURAS</h4>
<div class="container">
 <div class="row">
    @foreach($fac as $p)
      <div class="col-md-4 alert-success"><br>
        <div class="card" style="width: 15rem;">
                        
                            <div class="card-body bg-primary text-white">
                            <h5 class="card-title">Numero de Factura: {{$p->numfac}}</h5>
                            <p class="card-text">Fecha: {{$p->updated_at}}</p>
                            <p class="card-text">Direccion: {{$p->direccion}}</p>
                            <p class="card-text">Producto: {{$p->nombreProducto}}</p> <!--Tipo pertenece al atributo de la tabla Precio-->
                            <p class="card-text">Nombre Cliente: {{$p->name}}</p>
                            <p class="card-text">Cantidad: {{$p->cantidad}}</p>
                            <p class="card-text">Forma de Pago: {{$p->detalle}}</p>
                            <p class="card-text">IVA: {{$p->iva}}</p>
                            <p class="card-text">Subtotal: {{$p->subtotal}}</p>
                            <p class="card-text">Total a Pagar: {{$p->total}}</p>

                        </div>
        </div>
        </div>
        @endforeach
        <br>
        </div>
       <br>
</div>

@stop