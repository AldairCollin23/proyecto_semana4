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
      <th scope="col">ID Proveedor</th>
      <th scope="col">Ruc</th>
      <th scope="col">ID Documento</th>
      <th scope="col">Numero</th>
      <th scope="col">Celular</th>
      <th scope="col">Direccion</th>
    </tr>
  </thead>
  <tbody>
  <tr>
@foreach($dato as $value)
    <td>{{$value->idproveedores}}</td>
    <td>{{$value->ruc}}</td>
    <td>{{$value->iddocumento}}</td>
    <td>{{$value->numero}}</td>
    <td>{{$value->celular}}</td>
    <td>{{$value->direccion}}</td>
   

</tr>
@endforeach
    
</table>

</body>
</html>