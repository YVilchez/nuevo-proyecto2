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
  <h2>Estado de Producto</h2>
  <p>Lista de Estado de Productos</p>

  <table class="table table-bordered table-sm">
                    <thead>
                        <td>nombreEstado</td>
                        <td>descripcionEstado</td>
                        
                    </thead>
                    <tbody>
                    @foreach($ResulMarcas as $Marca)
                    <tr>
          <td class="inner-table">{{$estadoProducto["statename"]}}</td>
          <td class="inner-table">{{$estadoProducto["descriptionState"]}}</td>
          
        </tr>
      @endforeach
    </tbody>
  </table>
  <h2>Insertar Estado de Producto</h2>
  <form action="/INSERTARESTADOPRODUCTO" method="post">
    @csrf <!-- Agrega esto para protección contra CSRF -->
  
    <label for="nombreEstado">Nombre Estado:</label>
    <input type="text" name="p_NOM_ESTADO" required>

    <label for="descripcionEstado">Descripcion Estado:</label>
    <input type="text" name="p_DES_ESTADO" required>

    <button type="submit">Insertar</button>
  </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>