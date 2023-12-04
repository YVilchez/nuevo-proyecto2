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
  <h2>Estado Modelo</h2>
  <p>Lista de Estado de Modelo</p>

  <table class="table table-bordered table-sm">
                    <thead>
                        <td>nombreEstadoModelo</td>
                        <td>descripcionEstadoModelo</td>
                        
                    </thead>
                    <tbody>
                    @foreach($ResulEstadoModelos as $EstadoModelo)
                    <tr>
          <td class="inner-table">{{$estadoModelo["nameStateModel"]}}</td>
          <td class="inner-table">{{$estadoModelo["descriptionStateModel"]}}</td>
          
        </tr>
      @endforeach
    </tbody>
  </table>
  <h2>Insertar Estado Modelo</h2>
  <form action="/INSERTARESTADOMODELO" method="post">
    @csrf <!-- Agrega esto para protección contra CSRF -->
  
    <label for="nombreEstadoModel">Nombre Estado Modelo:</label>
    <input type="text" name="pNombreEstadoModelo" required>

    <label for="descripcionEstadoModelo">Descripcion Estado Modelo:</label>
    <input type="text" name="pDescripcionEstadoModelo" required>

    <button type="submit">Insertar</button>
  </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>