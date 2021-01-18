@extends('layouts.app')
@section('content')

<div class="alert alert-primary" role="alert">
 <h1 class="text-center"> Categorias de Productos </h1>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Numero</th>
            <th scope="col">Nombre Categoria</th>
            <th scope="col">Descripción </th>
        </tr>
    </thead>
    <tbody>
    @foreach($cat as $c)
      
            <tr>
            <td> {{ $c->id }} </td>
            <td> {{ $c->nombreCategoria }} </td>
            <td> {{ $c->descripcion }}</td>
            </tr>
        
    @endforeach
    </tbody>
</table 

@stop
   
