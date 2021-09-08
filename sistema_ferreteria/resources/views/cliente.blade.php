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
      <th scope="col">Codigo</th>
      <th scope="col">Apellido</th>
      <th scope="col">Nombre</th>
      <th scope="col">Documento</th>
      <th scope="col">ID Numero</th>
      <th scope="col">Sexo</th>
    </tr>
  </thead>
  <tbody>
  <tr>
@foreach($clientes as $cliente)
    <td class="table-secondary">{{$cliente->idcliente}}</td>
    <td class="table-secondary">{{$cliente->apellido}}</td>
    <td class="table-secondary">{{$cliente->nombre}}</td>
    <td class="table-secondary">{{$cliente->iddocumento}}</td>
    <td class="table-secondary">{{$cliente->idnumero}}</td>
    <td class="table-secondary">{{$cliente->sexo}}</td>

</tr>
@endforeach
    
</table>
  
</body>
</html>