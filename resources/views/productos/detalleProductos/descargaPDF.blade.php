
<table class="table" border="1">
    <thead>
        <tr>
            <th scope="col">Numero de Factura</th>
            <th scope="col">Fecha</th>
            <th scope="col">Nombre Producto</th>
            <th scope="col">Forma de Pago </th>
            <th scope="col">Nombre Cliente </th>
            <th scope="col">Direccion </th>
            <th scope="col">Cantidad</th>
            <th scope="col">IVA </th>
            <th scope="col">Subtotal </th>
            <th scope="col">Total</th>
        </tr>
    </thead>
    <tbody>
    @foreach($fac as $p)
      
            <tr>
            <td> {{$p->numfac}}</td>
            <td> {{$p->created_at}} </td>
            <td> {{$p->nombreProducto}} </td>
            <td> {{$p->detalle}} </td>
            <td> {{$p->name}}</td>
            <td> {{$p->direccion}}</td>
            <td> {{$p->cantidad}}</td>
            <td> {{$p->iva}} </td>
            <td> {{$p->subtotal}}</td>
            <td> {{$p->total}}</td>
            </tr>
        
    @endforeach
    </tbody>
</table>

