<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ejemplo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Personas</h2>
  <p>Lista de Usuarios</p>

  <table class="table table-bordered table-sm">
                    <thead>
                        <td>TipoUsuario</td>
                        <td>Contrasena</td>
                        <td>Permisos</td>
                        <td>IdPersona</td>
                    </thead>
                    <tbody>
                    @foreach($ResulPersonas as $persona)
                            <tr>
                                <td class="inner-table">{{$persona["typeofuser"]}}</td>
                                <td class="inner-table">{{$persona["password"]}}</td>
                                <td class="inner-table">{{$persona["permissions"]}}</td>
                                <td class="inner-table">{{$persona["personid"]}}</td>
                            </tr>
                    @endforeach
                    </tbody>
  </table>
</div>

</body>
</html>