<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

<table class="table">
  <thead class="table-primary">
    <tr>
      <th scope="col">ID Compra Detalle</th>
      <th scope="col">ID Compra</th>
      <th scope="col">ID Producto</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
  <tr>
@foreach($dato as $value)
    <td>{{$value->idcompradetalle}}</td>
    <td>{{$value->idcompra}}</td>
    <td>{{$value->idproducto}}</td>
    <td>{{$value->descripcion}}</td>
    <td>{{$value->precio}}</td>
    <td>{{$value->cantidad}}</td>
    <td>{{$value->total}}</td>

</tr>
@endforeach
    
</table>

</body>
</html>