<?php include('db.php')?>
<?php include("../includes/head.php")?>
<form action="guardar_producto.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
	<h1 style="text-align: center;">Formulario de Soporte</h1>
	<hr>
	<table>
		<tr>
			<td></td>
			<td style="width: 200px; text-align: center"><p><strong>DATOS DEL USUARIO</strong></p></td>
			<td></td>
		</tr>
		<table>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">Numero de Documento:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="NumDocSop" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-6 position-relative">
            <label style="width:2000%:" for="inputState" class="form-label" name="TipCliSop">Tipo de clientes:</label>
            <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required  name="TipCliSop">
				<option selected>Seleccione el tipo de cliente</option>
				<option value="1">1. BASICO</option>
				<option value="2">2. PREMIUM</option>
				<div id="validationServer04Feedback" class="invalid-feedback">
					Seleccione el tipo de cargo
				</div>
            </select>
        </div>
		<div class="col-md-6 position-relative">
            <label style="width:2000%:" for="inputState" class="form-label" name="EstSop">Estado de soporte:</label>
            <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required  name="EstSop">
				<option selected>Seleccione el Estado de soporte</option>
				<option value="1">1. ACTIVO</option>
				<option value="2">2. ESPERAR</option>
				<option value="3">3. FINALIZADO</option>
				<div id="validationServer04Feedback" class="invalid-feedback">
					Seleccione el tipo de cargo
				</div>
            </select>
        </div>
		<div class="col-md-6 position-relative">
            <label style="width:2000%:" for="inputState" class="form-label" name="TipSopor">Tipo de soporte:</label>
            <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required  name="TipSopor">
				<option selected>Seleccione el tipo de soporte</option>
				<option value="1">1. SOPORTE TECNICO</option>
				<div id="validationServer04Feedback" class="invalid-feedback">
					Seleccione el tipo de cargo
				</div>
            </select>
        </div>
		<div class="col-md-12 position-relative">
            <label for="validationTooltip01" class="form-label">DESCRIPCIÓN:</label>
            <input type="text" class="form-control" id="validationTooltip01" name="DesSop" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <br>
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
<br><hr><br>
    <div class="container-xxl">
            <table class="table">
			<thead>
                <tr>
                    <h1 style="text-align: center;">REGISTRO DE SOPORTES</h1>
					<br>
                </tr>
                <tr style="text-align: center;">
					<th>NUMERO DE DOCUMENTO</th>
                    <th>TIPO DE CLIENTE</th>
                    <th>TIPO DE SOPORTE</th>
                    <th>ESTADO DE SOPORTE</th>
                    <th>FECHA DE SOPORTE</th>
                    <th>DESCRIPCION</th>
                    <th>ESTADOS</th>
                </tr>
            </thead>
            <tbody>
				<?php
					$query = "SELECT * FROM soportes";
					$resulproductos = mysqli_query($conn, $query);
					while($filas = mysqli_fetch_array($resulproductos)){?>
						<tr style="text-align: center;">
							<td><?php echo $filas['SopId'] ?></td>
							<td><?php echo $filas['SopTipCl'] ?></td>
							<td><?php echo $filas['SopTipS'] ?></td>
							<td><?php echo $filas['SopEsId'] ?></td>
							<td><?php echo $filas['SopFech'] ?></td>
							<td><?php echo $filas['SopDes'] ?></td>
							<td>
								<a href="editar_soportes.php?id=<?php echo $filas['SopId']?>">Editar</a>
								<a href="eliminar_productos.php?id=<?php echo $filas['SopId']?>">Eliminar</a>
							</td>
						</tr>
				<?php } ?> 
            </tbody>
        </table>
    </div>

    <br>
    <?php include("../includes/footer.php")?>
</body>
</html>
