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
  <p>Lista de Personas</p>

  <table class="table table-bordered table-sm">
                    <thead>
                        <td>Identidad</td>
                        <td>PrimerNombre</td>
                        <td>SegundoNombre</td>
                        <td>PrimerApellido</td>
                        <td>SegundoApellido</td>
                        <td>SexPersona</td>
                        <td>INDcivil</td>
                        <td>Edad</td>
                        <td>Telefono</td>
                        <td>Correo</td>
                        <td>Dirpersona</td>
                        <td>FecRegistro</td>

                    </thead>
                    <tbody>
                    @foreach($ResulPersonas as $persona)
                    <tr>
          <td class="inner-table">{{$persona["id"]}}</td>
          <td class="inner-table">{{$persona["firstname"]}}</td>
          <td class="inner-table">{{$persona["secondname"]}}</td>
          <td class="inner-table">{{$persona["surname"]}}</td>
          <td class="inner-table">{{$persona["secondsurname"]}}</td>
          <td class="inner-table">{{$persona["sexperson"]}}</td>
          <td class="inner-table">{{$persona["civilstatus"]}}</td>
          <td class="inner-table">{{$persona["age"]}}</td>
          <td class="inner-table">{{$persona["phone"]}}</td>
          <td class="inner-table">{{$persona["mail"]}}</td>
          <td class="inner-table">{{$persona["address"]}}</td>
          <td class="inner-table">{{$persona["registrationdate"]}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

</body>
</html>