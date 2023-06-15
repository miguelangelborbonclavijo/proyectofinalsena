<?php
	include("db.php");
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "SELECT * FROM soportes WHERE SopId = $id";
		$resuleditar = mysqli_query($conn, $query);
		if(mysqli_num_rows($resuleditar) ==1){
			$filas = mysqli_fetch_array($resuleditar);
            
		}
	}
    if(isset($_POST['actualizar_tipProveedor'])){
        $id = $_GET['id'];
        $NumSop = $_POST['NumDocSop'];
        $TipClSop = $_POST['TipCliSop'];
        $EstadSop = $_POST['EstSop'];
        $TipSop = $_POST['TipSopor'];
        $DescrSop = $_POST['DesSop'];
        $query = "UPDATE soportes set SopTipCl = '$TipClSop', SopEsId = '$EstadSop', SopTipS = '$TipSop', SopDes = '$DescrSop') WHERE SopId = $id";
        mysqli_query($conn, $query);
		header("Location: registro_soportes.php");
    }
?>
<?php include("../includes/head.php")?>
    <hr>
    <hr>
    <form id="formulario" action="guardar_producto.php" method="POST">
	<h1 style="text-align: center;">Formulario de Soporte</h1>
	<hr>
	<table>
		<tr>
			<td></td>
			<td style="width: 200px; text-align: center"><p><strong>DATOS DEL USUARIO</strong></p></td>
			<td></td>
		</tr>
	</table>
    <table>
            <tr><td><h4>Tipo de clientes</h4></td></tr>
            <tr><td><input type="text" name="TipCliSop" value="<?php echo $TipClSop?>"></td></tr>
        </table>
	<table class="tablas_soporte">
		<tr>
			<td><h4>Estado de soporte</h4></td>
			<td><h4>Tipo de soporte</h4></td>
		</tr>
		<tr>
			<td><input type="text" name="EstSop" value="<?php echo $EstadSop?>"></td>
            <td><input type="text" name="TipSopor" value="<?php echo $TipSop?>"></td>
		</tr>
		</tr>
	</table>
	<table>
		<tr>
			<td><h4>DESCRIPCIÓN</h4></td>
		</tr>
		<tr>
			<td><textarea name="DesSop" placeholder="Descripción detallada" style="width: 414px;height: 50px;" value="<?php echo $DescrSop?>"></textarea></td>
		</tr>
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
                <button type="submit" name="guardar_soporte" value="guardar_soporte"><label for="">Actualizar</label></button>             
            </td>
		</tr>
	</table>
    <br>
    </form>
    <?php include("../includes/footer.php")?>
</body>
</html>