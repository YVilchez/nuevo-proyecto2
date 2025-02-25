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
  <h2>Proveedor</h2>
  <p>Lista de Proveedores</p>

  <table class="table table-bordered table-sm">
                    <thead>
                        <td>nombreProveedor</td>
                        <td>descripcionProveedor</td>
                        
                    </thead>
                    <tbody>
                    @foreach($ResulProveedores as $proveedor)
                    <tr>
          <td class="inner-table">{{$proveedor["suppliername"]}}</td>
          <td class="inner-table">{{$proveedor["supplierdescription"]}}</td>
          
        </tr>
      @endforeach
    </tbody>
  </table>
  <h2>Insertar Nuevo Proveedor</h2>
  <form action="/insert_proveedor2" method="post">
    @csrf <!-- Agrega esto para protección contra CSRF -->
  
    <label for="nombreProveedor">Nombre Proveedor:</label>
    <input type="text" name="PV_NOM_PROVEEDOR" required>

    <label for="descripcionProveedor">Descripcion Proveedor:</label>
    <input type="text" name="PV_DES_PROVEEDOR" required>

    <button type="submit">Insertar</button>
  </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>