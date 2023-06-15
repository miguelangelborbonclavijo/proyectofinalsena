<?php include("../includes/head.php")?>
<form id="formulario" action="guardar_ventas.php" method="POST">
	<h1 style="text-align: center;">Formulario de Ventas</h1>
	<hr>
	<table>
		<tr>
			<td></td>
			<td style="width: 200px; text-align: center"><p><strong>DATOS DEL USUARIO</strong></p></td>
			<td></td>
		</tr>
	</table>
	<table>
		<tr>
			<td><h4>DOCUMENTO CLIENTE</h4></td>
			<td><h4>DOCUMENTO TRABAJADOR</h4></td>
		</tr>
		<tr>
			<td><input type="number" name="DocCli"></td>
			<td><input type="number" name="DocTra"></td>
		</tr>
        <table>
            <thead>
                <tr>
                    <th>CODIGO PRODUCTO</th>
                    <th>CANTIDAD PRODUCTO</th>
                    <th>VALOR PRODUCTO</th>
                    <th>VALOR TOTAL TOTAL</th>
                </tr>
            </thead>
            <tbody>
                    <td><input type="number"></td>
                    <td><input type="number"></td>
            </tbody>
        </table>
        <table>
        <tr>
			<td><h4>VENTA TOTAL</h4></td>
		</tr>
		<tr>
			<td><input type="number"></td>
		</tr>
        </table>
	</table>
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
			<td>
                <button type="submit" name="guardar" value="guardar"><label for="">Guardar</label></button>           
            </td>
			<td>
				<button type="reset" name="Restablecer" value="restablecer"><label for="">Restablecer</label></button>
			</td>
		</tr>
	</table>
	<br>
</form>
<?php include("../includes/footer.php")?>
</body>
</html>