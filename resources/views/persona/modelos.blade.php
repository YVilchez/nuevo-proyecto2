<body>

<div class="container">
  <h2>Modelos</h2>
  <p>Lista de Modelos</p>

  <table class="table table-bordered table-sm">
                    <thead>
                        <td>nombreModelo</td>
                        <td>marcaId</td>
                        <td>estadoModeloId</td>
                        
                    </thead>
                    <tbody>
                    @foreach($ResulModelos as $Modelo)
                    <tr>
          <td class="inner-table">{{$modelos["modelname"]}}</td>
          <td class="inner-table">{{$modelos["brandId"]}}</td>
          <td class="inner-table">{{$modelos["stateModelId"]}}</td>
          
        </tr>
      @endforeach
    </tbody>
  </table>
  <h2>Insertar Modelo</h2>
  <form action="/INSERTARMODELO" method="post">
    @csrf <!-- Agrega esto para protección contra CSRF -->
  
    <label for="nombreModelo">Nombre Modelo:</label>
    <input type="text" name="pNombreModelo" required>

    <label for="marcaId">Marca Id:</label>
    <input type="text" name="pMarcaID" required>

    <label for="estadoModeloId">Estado Modelo Id:</label>
    <input type="text" name="pEstadoModeloID" required>

    <button type="submit">Insertar</button>
  </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>