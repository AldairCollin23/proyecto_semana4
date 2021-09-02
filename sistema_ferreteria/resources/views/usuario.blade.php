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
      <th scope="col">ID Usuario</th>
      <th scope="col">Apellido</th>
      <th scope="col">Nombre</th>
      <th scope="col">Nombre Usuario</th>
      <th scope="col">Pasword Usuario</th>
  
    </tr>
  </thead>
  <tbody>
  <tr>
@foreach($dato as $value)
    <td>{{$value->idusuario}}</td>
    <td>{{$value->apellido}}</td>
    <td>{{$value->nombre}}</td>
    <td>{{$value->nom_usuario}}</td>
    <td>{{$value->pass_usuario}}</td>
    
   

</tr>
@endforeach
    
</table>
</body>
</html>