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
  <h2>Pacientes</h2>
  <p>Lista de Pacientes</p>

  <table class="table table-bordered table-sm">
                    <thead>
                        <td>observaciones</td>
                        <td>idPersona</td>
                        
                    </thead>
                    <tbody>
                    @foreach($ResulPacientes as $paciente)
                    <tr>
          <td class="inner-table">{{$paciente["observations"]}}</td>
          <td class="inner-table">{{$paciente["personid"]}}</td>
          
        </tr>
      @endforeach
    </tbody>
  </table>
  <h2>Insertar Nuevo Paciente</h2>
  <form action="/INSERT_PACIENTE" method="post">
    @csrf <!-- Agrega esto para protección contra CSRF -->
  
    <label for="especialidad">Especialidad:</label>
    <input type="text" name="PV_ESPECIALIDAD" required>

    <label for="idPersona">Id Persona:</label>
    <input type="text" name="PI_ID_PERSONA" required>

    <button type="submit">Insertar</button>
  </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>