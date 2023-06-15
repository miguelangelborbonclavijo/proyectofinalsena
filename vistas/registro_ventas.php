<?php include('db.php')?>
<?php include("../includes/head.php")?>
<form action="guardar_producto.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
	<h1 style="text-align: center;">REGISTRO DE VENTAS</h1>
    <hr>
    <table>
        <tr>
            <td></td>
            <td style="width: 200px; text-align: center"><p><strong>DATOS DEL VENTA</strong></p></td>
            <td></td>
        </tr>
    </table>
	<table>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">DOCUMENTO CLIENTE:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="DocCliVe" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
		<div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">DOCUMENTO TRABAJADOR:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="DocTraVe" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-3 position-relative">
			<br>
            <label for="validationTooltip01" class="form-label">CODIGO PRODUCTO:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="CodProVe" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-2 position-relative">
            <label for="validationTooltip01" class="form-label">CANTIDAD PRODUCTO:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="CanProVe" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-2 position-relative">
            <label for="validationTooltip01" class="form-label">VALOR PRODUCTO:</label>
            <input type="numbar" class="form-control" id="validationTooltip01" name="ValProVe" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
		<div class="col-md-2 position-relative">
            <label for="validationTooltip01" class="form-label">VALOR TOTAL TOTAL:</label>
            <input type="numbar" class="form-control" id="validationTooltip01" name="ValTotVe" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
		<div class="col-md-3 position-relative">
			<br>
            <label for="validationTooltip01" class="form-label">VENTA TOTAL:</label>
            <input type="numbar" class="form-control" id="validationTooltip01" name="PreVent" required>
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
	    <br>
		<table>
		<tr>
			<td>
				<label for="cbox2">Señor usuario asegurese que los datos digitados estan correctos.</label>
			</td>
		</tr>
		</table>
		<br>
        <table>
            <tr>
                <div class="esp col-6" >
                    <button type="submit" name="guardar_ventas" value="guardar_ventas" class="btn btn-success">Guardar</button>
                </div>
                <div class="esp col-6">
                    <button class="btn btn-warning" type="reset">Limpiar datos</button>
                </div>
            </tr>
        </table>
    </table>
    </form>
	<br><hr><br>
</form>
<?php include("../includes/footer.php")?>
</body>
</html>