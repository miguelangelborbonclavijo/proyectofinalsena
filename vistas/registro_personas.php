<?php include("db.php")?>
<?php include("../includes/head.php")?>
<form action="guardar_producto.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
    <h1 style="text-align: center;">REGISTRO DE PERSONAS</h1>
    <hr>
    <table>
        <tr>
            <td></td>
            <td style="width: 200px; text-align: center"><p><strong>DATOS DEL USUARIO</strong></p></td>
            <td></td>
        </tr>
    </table>
    <table>
            <div class="col-md-6 position-relative">
                <label style="width:2000%:" for="inputState" class="form-label" name="TipDoc">Tipo de documento:</label>
                <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required  name="TipDoc">
                <option selected>Seleccione su documento</option>
                <option value="1">1. CEDULA DE CIUDADANIA</option>
                <option value="2">2. TARJETA DE IDENTIDAD</option>
                <option value="3">3. CEDULA DE EXTRANJERIA</option>
                <div id="validationServer04Feedback" class="invalid-feedback">
                    Por favor seleccion su tipo de documento
                </div>
                </select>
            </div>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">Numero de Documento:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="NumDoc" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">Primer Nombre:</label>
            <input type="text" class="form-control" id="validationTooltip01" name="PriNomPer"required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">Segundo Nombre:</label>
            <input type="text" class="form-control" id="validationTooltip01" name="SegNomPer" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">Primer Apellido:</label>
            <input type="text" class="form-control" id="validationTooltip01" name="PriApePer" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">Segundo Apellido:</label>
            <input type="text" class="form-control" id="validationTooltip01" name="SegApePer" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
            <br>
        </div>
        <br>
            <tr>
                <td>
                    <label for="cbox2" class="text-center">Señor usuario asegurese que los datos digitados estan correctos.</label>
                </td>
            </tr>
    </table>
    <br>
    <br>
    <div class="esp col-6" >
        <button type="submit" name="guardar_personas" value="guardar_personas" class="btn btn-success">Guardar</button>
    </div>
    <div class="esp col-6">
        <button class="btn btn-warning" type="reset">Limpiar datos</button>
    </div>
      </div>
    <br>
</form>
<br>
<hr>
<br>
<div class="container-lg">
<table class="table">
  <thead>
    <tr>
      <th scope="col">TipoDeDocumento</th>
      <th scope="col">NumeroDeDocumento</th>
      <th scope="col">PrimerNombre</th>
      <th scope="col">SegundoNombre</th>
      <th scope="col">PrimerApellido</th>
      <th scope="col">SegundoApellido</th>
      <th scope="col">Estados</th>
    </tr>
  </thead>
  <tbody>
 <?php
            $query = "SELECT * FROM  personas";
            $resulproductos = mysqli_query($conn, $query);
            while($filas = mysqli_fetch_array($resulproductos)){?>
            <tr  style="text-align: center;">
                <td><?php echo $filas['PerTidId'] ?></td>
                <td><?php echo $filas['PerId'] ?></td>
                <td><?php echo $filas['PerNom1'] ?></td>
                <td><?php echo $filas['PerNom2'] ?></td>
                <td><?php echo $filas['PerApe1'] ?></td>
                <td><?php echo $filas['PerApe2'] ?></td>
                <td>
                    <a href="editar_personas.php?id=<?php echo $filas['PerId']?>">Editar</a>
                    <a href="eliminar_productos.php?id=<?php echo $filas['PerId']?>">Eliminar</a>
                    </td>
            </tr>
        <?php } ?> 
  </tbody>
</table>
</div>
<?php include("../includes/footer.php")?>
</body>
</html>