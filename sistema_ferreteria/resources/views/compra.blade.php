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
      <th scope="col">ID Compra</th>
      <th scope="col">Serie</th>
      <th scope="col">Numero</th>
      <th scope="col">Correo</th>
      <th scope="col">Fecha</th>
      <th scope="col">Igv</th>
      <th scope="col">Subtotal</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
  <tr>
@foreach($dato as $value)
<td class="table-secondary">{{$value->idcompra}}</td>
    <td class="table-secondary">{{$value->serie}}</td>
    <td class="table-secondary">{{$value->numero}}</td>
    <td class="table-secondary">{{$value->correo}}</td>
    <td class="table-secondary">{{$value->fecha}}</td>
    <td class="table-secondary">{{$value->igv}}</td>
    <td class="table-secondary">{{$value->subtotal}}</td>
    <td class="table-secondary">{{$value->total}}</td>

</tr>
@endforeach
    
</table>

</body>
</html>