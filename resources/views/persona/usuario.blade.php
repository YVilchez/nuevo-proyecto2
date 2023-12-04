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
  <h2>Usuarios</h2>
  <p>Lista de Usuarios</p>

  <table class="table table-bordered table-sm">
                    <thead>
                        <td>tipoUsuario</td>
                        <td>contrasena</td>
                        <td>permisos</td>
                        <td>idPersona</td>
                    </thead>
                    <tbody>
                    @foreach($ResulUsuarios as $usuario)
                            <tr>
                                <td class="inner-table">{{$usuario["typeofuser"]}}</td>
                                <td class="inner-table">{{$usuario["password"]}}</td>
                                <td class="inner-table">{{$usuario["permissions"]}}</td>
                                <td class="inner-table">{{$usuario["personid"]}}</td>
                            </tr>
                    @endforeach
        </tbody>
  </table>
  
  <h2>Insertar Nueva Persona</h2>
  <form action="/INSERT_USUARIO" method="post">
    @csrf <!-- Agrega esto para protección contra CSRF -->
  
    <label for="tipoUsuario">Usuario:</label>
    <input type="text" name="PV_TIPO_USUARIO" required>

    <label for="contrasena">Contrasena:</label>
    <input type="text" name="PV_PASS" required>

    <label for="permisos">Permisos:</label>
    <input type="text" name="PV_PERMISO" required>

    <label for="idPersona">Id Persona:</label>
    <input type="text" name="PI_ID_PERSONA" required>

    <button type="submit">Insertar</button>
  </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>