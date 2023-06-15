<?php include('db.php')?>
<?php include("../includes/head.php")?>
  <body >
  <form action="guardar_producto.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
	<table>
		<tr>
			<td></td>
			<td style="width: 200px; text-align: center">
            <img class="mb-4" src="../img/logo-sena-verde-png-sin-fondo.png" alt="" width="60%" >
			<td></td>
		</tr>
        <tr>
            <td></td>
            <td><h3 style="text-align:center">Iniciar Session</h3></td>
            <td></td>
        </tr>
		<table>
        <div class="col-md-6 position-relative">
            <label style="width:2000%:" for="inputState" class="form-label" name="TipCliSop">Tipo de clientes:</label>
            <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required  name="TipCliSop">
				<option selected>Seleccione el tipo de cliente</option>
				<option value="1">1. Cliente</option>
				<option value="2">2. Proveedores</option>
                <option value="2">3. Trabajadores</option>
				<div id="validationServer04Feedback" class="invalid-feedback">
					Seleccione el tipo de cargo
				</div>
            </select>
        </div>
        <div class="col-md-6 position-relative">
            <label style="width:2000%:" for="inputState" class="form-label" name="TipCliSop">Tipo de Documento:</label>
            <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required  name="TipCliSop">
				<option selected>Seleccione el tipo de documento</option>
				<option value="1">1. CedulaDeCiudadania</option>
				<option value="2">2. TarjetaDeIdentidad</option>
                <option value="2">3. CedulaDeExtranjeria</option>
				<div id="validationServer04Feedback" class="invalid-feedback">
					Seleccione el tipo de cargo
				</div>
            </select>
        </div>
        <div class="col-md-12 position-relative">
            <label for="validationTooltip01" class="form-label">Numero de Documento:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="NumDocSop" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-12 position-relative">
            <label for="validationTooltip01" class="form-label">Contraseña:</label>
            <input type="password" class="form-control" id="validationTooltip01" name="NumDocSop" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
    <br>
    <table>
        <tr>
            <td>
                <label for="cbox2">Señor usuario asegurese que los datos digitados estan correctos.</label>
                <br>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <table>
        <tr>
            <div class="esp col-6" >
                <button type="submit" name="guardar_soporte" value="guardar_soporte" class="btn btn-success">Guardar</button>
            </div>
            <div class="esp col-6">
                <button class="btn btn-warning" type="reset">Limpiar datos</button>
            </div>
        </tr>
    </table>
</form>
<?php include("../includes/footer.php")?>
  </body>
</html>
