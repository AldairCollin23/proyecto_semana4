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
      <th scope="col">ID Venta</th>
      <th scope="col">Serie</th>
      <th scope="col">Numero</th>
      <th scope="col">Correo</th>
      <th scope="col">Fecha Emision</th>
      <th scope="col">IGV</th>
      <th scope="col">Sub total</th>
      <th scope="col">total</th>
  
    </tr>
  </thead>
  <tbody>
  <tr>
@foreach($dato as $value)
    <td>{{$value->idventa}}</td>
    <td>{{$value->serie}}</td>
    <td>{{$value->numero}}</td>
    <td>{{$value->correo}}</td>
    <td>{{$value->fecha_emi}}</td>
    <td>{{$value->igv}}</td>
    <td>{{$value->subtotal}}</td>
    <td>{{$value->total}}</td>
    
   

</tr>
@endforeach
    
</table>
</body>
</html>